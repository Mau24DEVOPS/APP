<?php

class ScoringEngine {
    const NA = 'NA';

    /**
     * Devuelve el nivel de riesgo y color correspondiente al porcentaje global
     */
    public static function riskLevel(int $pct): array {
        if ($pct >= 90) {
            return ['level' => 'Excelente', 'cls' => 'b', 'color' => '#15803d'];
        }
        if ($pct >= 75) {
            return ['level' => 'Riesgo Bajo', 'cls' => 'm', 'color' => '#0d7a6e'];
        }
        if ($pct >= 60) {
            return ['level' => 'Riesgo Medio', 'cls' => 'a', 'color' => '#b45309'];
        }
        if ($pct >= 40) {
            return ['level' => 'Riesgo Alto', 'cls' => 'a2', 'color' => '#c2410c'];
        }
        return ['level' => 'Riesgo Crítico', 'cls' => 'c', 'color' => '#b91c1c'];
    }

    /**
     * Clasificación de nivel BSR según cantidad de trabajadores
     */
    public static function getNivelByWorkers(array $niveles, $nTrab): ?array {
        $n = (int)$nTrab;
        if ($n < 1) {
            return null;
        }

        // Ordenar por el campo 'orden'
        $sorted = $niveles;
        uasort($sorted, function($a, $b) {
            return ($a['orden'] ?? 0) <=> ($b['orden'] ?? 0);
        });

        foreach ($sorted as $id => $lv) {
            $lvWithId = array_merge($lv, ['id' => $id]);
            $top = $lv['max'] ?? null;
            if ($n >= $lv['min'] && ($top === null || $n <= $top)) {
                return $lvWithId;
            }
        }

        if (isset($niveles['n6'])) {
            return array_merge($niveles['n6'], ['id' => 'n6']);
        }

        return null;
    }

    /**
     * Obtiene los módulos activos para un nivel de empresa
     */
    public static function modulosActivos(array $nivel): array {
        $activos = $nivel['modulosActivos'] ?? [];
        $ocultos = $nivel['modulosOcultos'] ?? [];
        return array_values(array_diff($activos, $ocultos));
    }

    /**
     * Obtiene las preguntas del módulo según el nivel y el modo experto
     */
    public static function getQuestions(array $mods, string $modId, string $nivelId, bool $modoExperto): array {
        $mod = $mods[$modId] ?? null;
        if (!$mod) {
            return [];
        }

        if ($nivelId === 'n4' && $modoExperto) {
            return $mod['questions'] ?? [];
        }

        $qbl = $mod['questionsByLevel'] ?? [];
        if (isset($qbl[$nivelId])) {
            return $qbl[$nivelId];
        }

        return $mod['questions'] ?? [];
    }

    /**
     * Verifica si una pregunta está bloqueada por falta de sindicato
     */
    public static function isBlocked(array $question, ?string $sindicato): bool {
        return !empty($question['sindical']) && $sindicato === 'no';
    }

    /**
     * Calcula la puntuación (0-100) para un único módulo
     */
    public static function calcModScore(array $questions, array $answers, ?string $sindicato): int {
        $totalSum = 0;
        $maxPts = 0;

        foreach ($questions as $q) {
            if (self::isBlocked($q, $sindicato)) {
                continue;
            }

            $qId = (string)($q['id'] ?? '');
            $sel = $answers[$qId] ?? null;

            if ($sel === self::NA) {
                continue;
            }

            $opts = $q['opts'] ?? [];
            if (empty($opts)) {
                continue;
            }

            // Calcular máximo puntaje posible para esta pregunta
            $maxOptP = 0;
            foreach ($opts as $o) {
                if (isset($o['p']) && $o['p'] > $maxOptP) {
                    $maxOptP = $o['p'];
                }
            }
            $maxPts += $maxOptP;

            // Sumar puntaje de la opción seleccionada si es válida
            if ($sel !== null && is_numeric($sel)) {
                $selIdx = (int)$sel;
                if (isset($opts[$selIdx]['p'])) {
                    $totalSum += $opts[$selIdx]['p'];
                }
            }
        }

        return $maxPts > 0 ? (int)round(($totalSum / $maxPts) * 100) : 0;
    }

    /**
     * Obtiene el peso de un módulo para un determinado nivel
     */
    public static function pesoModulo(array $mods, string $modId, string $nivelId): int {
        $mod = $mods[$modId] ?? [];
        return (int)(($mod['niveles'] ?? [])[$nivelId] ?? 0);
    }

    /**
     * Computa el score global y por módulos para un diagnóstico
     */
    public static function compute(
        array $mods,
        array $niveles,
        string $nivelId,
        bool $modoExperto,
        array $answers,
        ?string $sindicato
    ): array {
        $nivel = $niveles[$nivelId] ?? [];
        $activosAll = self::modulosActivos($nivel);
        
        $activos = [];
        foreach ($activosAll as $m) {
            if (isset($mods[$m])) {
                $qs = self::getQuestions($mods, $m, $nivelId, $modoExperto);
                if (!empty($qs)) {
                    $activos[] = $m;
                }
            }
        }

        $scores = [];
        $tw = 0;
        $ws = 0;

        foreach ($activos as $modId) {
            $qs = self::getQuestions($mods, $modId, $nivelId, $modoExperto);
            $s = self::calcModScore($qs, $answers, $sindicato);
            $scores[$modId] = $s;
            $peso = self::pesoModulo($mods, $modId, $nivelId);
            $tw += $peso;
            $ws += $s * $peso;
        }

        $globalScore = $tw > 0 ? (int)round($ws / $tw) : 0;

        return [
            'global' => $globalScore,
            'level' => self::riskLevel($globalScore),
            'scores' => $scores,
            'modulos_evaluados' => $activos,
        ];
    }
}
