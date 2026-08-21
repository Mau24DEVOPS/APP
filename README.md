# ⚖️ BSR Legal Risk Score & Core Platform (v3 Niveles)

Sistema integral de **Autodiagnóstico y Evaluación de Riesgo Laboral** para empresas en Chile, adaptado a los 6 niveles de dotación (N1 Microempresa a N6 Gran Empresa), con cálculo automatizado conforme a la normativa vigente (Código del Trabajo, Ley Karin 21.643, Ley 16.744, DS 44, DS 594, etc.).

---

## 🌐 Ver Online en Vivo (Demo Gratuita)

Este repositorio está configurado para ejecutarse **100% online y gratis**:

### Opción A: GitHub Pages (Directo desde GitHub)
1. Sube este repositorio a tu cuenta de **GitHub**.
2. En GitHub, ve a **Settings** > **Pages**.
3. En **Branch**, selecciona `main` y carpeta `/ (root)`.
4. Guarda los cambios. En 30 segundos tendrás tu enlace público gratuito:
   `https://<tu-usuario>.github.io/<nombre-del-repo>/`

### Opción B: Vercel / Netlify / Cloudflare Pages
1. Conecta tu repositorio de GitHub en [Vercel](https://vercel.com) o [Netlify](https://netlify.com).
2. Haz clic en **Deploy** (no requiere configuración de build).
3. Obtendrás un enlace instantáneo con certificado SSL (ej. `https://bsr-legal-score.vercel.app`).

---

## 🛠️ Tecnologías y Estructura del Proyecto

```text
├── index.html                  # Versión Standalone completa para GitHub Pages / Vercel
├── config/
│   ├── database.php            # Conexión Singleton PDO MySQL
│   └── ScoringEngine.php       # Motor matemático de riesgo y ponderación legal
├── data/
│   ├── mods.json               # Banco maestro de 420+ preguntas y normas legales
│   └── niveles.json            # Segmentación de niveles N1 a N6 por trabajadores
├── database/
│   └── schema.sql              # Esquema relacional de tablas (users, tasks, evaluations)
├── public/
│   ├── index.php               # Controlador principal y API REST
│   └── ...
├── views/
│   ├── dashboard.php           # Vista principal integrada (Gestor, Autodiagnóstico, Panel Consultor, Roles)
│   └── bsr-score-riesgo-laboral-v3-niveles.php
├── docker-compose.yml          # Despliegue con Docker (PHP 8.3 + MySQL 8.0 + phpMyAdmin)
└── Dockerfile
```

---

## 💻 Ejecución Local con Servidor PHP + MySQL (Laragon / XAMPP / Docker)

### Opción 1: Docker
```bash
docker compose up -d --build
```
- **Aplicación Web**: [http://localhost:8080](http://localhost:8080)
- **phpMyAdmin**: [http://localhost:8081](http://localhost:8081)

### Opción 2: Laragon / XAMPP
1. Coloca la carpeta en `c:/laragon/www/app` o `htdocs/app`.
2. Importa `database/schema.sql` en tu MySQL (`app_db`).
3. Ingresa a `http://localhost/app/public/` o `http://app.test`.

---

## 📋 Características Principales
- **Filtro Inteligente por Niveles (N1 a N6):** Adapta la cantidad de preguntas según la dotación de trabajadores (20 preguntas para microempresas hasta 88 para grandes empresas).
- **Auto-Guardado Continuo (Borrador Local):** Permite pausar y reanudar el autodiagnóstico en cualquier momento sin perder avances.
- **Panel Consultor de Cartera:** Estadísticas agregadas, promedios de cartera y visualizador detallado pregunta por pregunta con normativa legal y consecuencias de incumplimiento.
- **Exportación e Impresión:** Generación de reportes de auditoría laboral para entrega a clientes o gerencia.
