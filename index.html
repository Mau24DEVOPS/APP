<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BSR Score de Riesgo Laboral</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.1.0/tabler-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<style>
:root{--navy:#0f2b5b;--blue:#1a4fa0;--blue-m:#2563c3;--blue-lt:#dbeafe;--teal:#0d7a6e;--teal-lt:#ccfbf1;--amber:#b45309;--amber-lt:#fef3c7;--red:#b91c1c;--red-lt:#fee2e2;--green:#15803d;--green-lt:#dcfce7;--g0:#f8f9fa;--g1:#f1f3f5;--g2:#e9ecef;--g3:#dee2e6;--g4:#adb5bd;--g5:#6c757d;--g6:#495057;--text:#1e293b;--text-s:#475569;--r:8px;--rl:12px}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',system-ui,sans-serif;font-size:14px;color:var(--text);background:var(--g1);min-height:100vh}
/* LOCK SCREEN */
.lock-screen{position:fixed;inset:0;background:var(--navy);display:flex;align-items:center;justify-content:center;z-index:9999;flex-direction:column;gap:0}
.lock-screen.hidden{display:none}
.lock-box{background:#fff;border-radius:16px;padding:40px 48px;max-width:400px;width:90%;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,.3)}
.lock-box .lb-logo{font-size:22px;font-weight:800;color:var(--navy);margin-bottom:4px}.lock-box .lb-logo span{color:var(--blue-m)}
.lock-box h2{font-size:17px;font-weight:700;color:var(--navy);margin:16px 0 6px}
.lock-box p{font-size:13px;color:var(--g5);margin-bottom:20px;line-height:1.6}
.pin-inputs{display:flex;gap:10px;justify-content:center;margin-bottom:16px}
.pin-inputs input{width:48px;height:56px;border:2px solid var(--g3);border-radius:10px;text-align:center;font-size:22px;font-weight:700;color:var(--navy);outline:none;transition:.15s}
.pin-inputs input:focus{border-color:var(--blue-m);box-shadow:0 0 0 3px rgba(37,99,195,.15)}
.pin-inputs input.error{border-color:var(--red);animation:shake .3s}
@keyframes shake{0%,100%{transform:translateX(0)}25%{transform:translateX(-6px)}75%{transform:translateX(6px)}}
.lock-error{color:var(--red);font-size:12px;margin-top:-8px;margin-bottom:12px;min-height:18px}
/* RESULTADO SCREEN (cliente) */
.result-screen{position:fixed;inset:0;background:var(--g1);display:none;flex-direction:column;align-items:center;justify-content:center;z-index:8888;padding:24px}
.result-screen.visible{display:flex}
.result-card{background:#fff;border-radius:16px;padding:40px;max-width:560px;width:100%;box-shadow:0 4px 24px rgba(0,0,0,.08);text-align:center}
.result-card .rc-logo{font-size:18px;font-weight:800;color:var(--navy);margin-bottom:20px}.rc-logo span{color:var(--blue-m)}
.result-card .rc-score{font-size:80px;font-weight:900;line-height:1}
.result-card .rc-level{font-size:20px;font-weight:700;margin-top:8px}
.result-card .rc-msg{font-size:14px;color:var(--text-s);line-height:1.7;margin-top:12px;margin-bottom:24px}
.result-card .rc-bar-wrap{height:12px;background:var(--g2);border-radius:6px;overflow:hidden;margin-bottom:6px}
.result-card .rc-bar-fill{height:100%;border-radius:6px;transition:width 1s}
.result-card .rc-cta{background:var(--navy);color:#fff;border:none;border-radius:10px;padding:14px 28px;font-size:14px;font-weight:600;cursor:pointer;width:100%;margin-top:8px}
.result-card .rc-cta:hover{background:var(--blue)}
.result-card .rc-sub{font-size:12px;color:var(--g4);margin-top:12px}
.rc-modules{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin:16px 0}
.rc-mod-card{background:var(--g0);border-radius:8px;padding:10px;text-align:center}
.rc-mod-card .rmc-val{font-size:20px;font-weight:700}
.rc-mod-card .rmc-lbl{font-size:10px;color:var(--g5);margin-top:2px}
/* HEADER */
.app-header{background:var(--navy);color:#fff;padding:0 28px;display:flex;align-items:center;height:56px;gap:14px;position:sticky;top:0;z-index:100}
.app-header .logo{font-size:17px;font-weight:700}.app-header .logo span{color:#60a5fa}
.app-header .sub{font-size:11px;color:rgba(255,255,255,.5);margin-top:1px}
.spacer{flex:1}
.hbadge{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:20px;padding:3px 11px;font-size:11px;color:rgba(255,255,255,.75)}
.prog-wrap{background:rgba(255,255,255,.15);height:3px;flex:1;border-radius:2px;max-width:260px}
.prog-fill{height:100%;background:#60a5fa;border-radius:2px;transition:width .3s}
.admin-btn{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:6px;padding:4px 10px;color:rgba(255,255,255,.6);font-size:11px;cursor:pointer;display:flex;align-items:center;gap:5px}
.admin-btn:hover{background:rgba(255,255,255,.15)}
/* LAYOUT */
.app-body{display:flex;min-height:calc(100vh - 56px)}
.sidebar{width:230px;background:#fff;border-right:1px solid var(--g3);padding:16px 0;flex-shrink:0;position:sticky;top:56px;height:calc(100vh - 56px);overflow-y:auto}
.main{flex:1;padding:24px 32px;max-width:840px}
/* NAV */
.nav-sec{padding:6px 16px 4px;font-size:10px;text-transform:uppercase;letter-spacing:.08em;color:var(--g4);font-weight:600;margin-top:8px}
.nav-it{display:flex;align-items:center;gap:9px;padding:8px 18px;cursor:pointer;color:var(--g6);font-size:12.5px;border-left:3px solid transparent;transition:.15s}
.nav-it:hover{background:var(--g0);color:var(--blue-m)}
.nav-it.active{background:var(--blue-lt);color:var(--blue-m);border-left-color:var(--blue-m);font-weight:500}
.nav-it .nn{width:20px;height:20px;border-radius:50%;background:var(--g2);display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:600;color:var(--g5);flex-shrink:0}
.nav-it.active .nn{background:var(--blue-m);color:#fff}
.nav-it.done .nn{background:var(--green);color:#fff}
.nav-it.locked{opacity:.4;pointer-events:none}
/* PANELS */
.panel{display:none}.panel.active{display:block}
/* MODULE HEADER */
.mod-hd{margin-bottom:20px;padding-bottom:14px;border-bottom:1px solid var(--g3);display:flex;justify-content:space-between;align-items:flex-start;gap:16px;flex-wrap:wrap}
.mod-hd-txt{flex:1;min-width:240px}
.mod-ey{font-size:11px;text-transform:uppercase;letter-spacing:.08em;color:var(--blue-m);font-weight:600;margin-bottom:3px}
.mod-ti{font-size:20px;font-weight:700;color:var(--navy);margin-bottom:5px}
.mod-de{font-size:13px;color:var(--text-s);line-height:1.6}
.modcount{flex-shrink:0;background:var(--g0);border:1px solid var(--g3);border-radius:20px;padding:7px 16px;font-size:13px;font-weight:700;color:var(--navy);white-space:nowrap;display:flex;align-items:center;gap:7px}
.modcount .mc-dot{width:7px;height:7px;border-radius:50%;background:var(--g4)}
.modcount.complete{background:#dcfce7;border-color:#86efac;color:#15803d}
.modcount.complete .mc-dot{background:#15803d}
.modcount.partial{background:#fef9e7;border-color:#fde68a;color:#92400e}
.modcount.partial .mc-dot{background:#d97706}
/* QUESTION CARD */
.qcard{background:#fff;border:1px solid var(--g3);border-radius:var(--rl);padding:18px 20px;margin-bottom:12px;transition:.15s}
.qcard:hover{border-color:var(--blue-m)}
.qcard.blocked{opacity:.45;pointer-events:none;background:var(--g0)}
.qhd{display:flex;gap:10px;align-items:flex-start;margin-bottom:12px}
.qnum{font-size:11px;font-weight:700;color:var(--blue-m);background:var(--blue-lt);border-radius:4px;padding:2px 6px;flex-shrink:0;margin-top:2px}
.qtag{font-size:10px;font-weight:600;border-radius:4px;padding:2px 6px;flex-shrink:0;margin-top:2px}
.tag-a{background:var(--red-lt);color:var(--red)}.tag-m{background:var(--amber-lt);color:var(--amber)}.tag-b{background:var(--green-lt);color:var(--green)}
.qtxt{font-size:13px;font-weight:500;line-height:1.5}
.qnorm{font-size:11px;color:var(--g5);margin-top:2px}
.qopts{display:flex;flex-direction:column;gap:5px}
.qopt{display:flex;align-items:flex-start;gap:9px;padding:9px 12px;border:1px solid var(--g3);border-radius:var(--r);cursor:pointer;transition:.15s}
.qopt:hover{border-color:var(--blue-m);background:var(--blue-lt)}
.qopt.sel{border-color:var(--blue-m);background:var(--blue-lt)}
.qopt input{margin-top:2px;flex-shrink:0;accent-color:var(--blue-m)}
.qopt label{cursor:pointer;font-size:12.5px;line-height:1.4}
.qopt .ol{font-weight:700;color:var(--blue-m);margin-right:2px}
.qcons{font-size:11.5px;color:var(--g5);margin-top:8px;padding-top:8px;border-top:1px dashed var(--g3);display:flex;gap:6px;align-items:flex-start}
.qcons i{color:var(--amber);flex-shrink:0;font-size:13px;margin-top:1px}
/* INPUTS */
.qi{width:100%;border:1px solid var(--g3);border-radius:var(--r);padding:8px 11px;font-size:13px;color:var(--text);font-family:inherit;outline:none}
.qi:focus{border-color:var(--blue-m);box-shadow:0 0 0 3px rgba(37,99,195,.12)}
.qs{width:100%;border:1px solid var(--g3);border-radius:var(--r);padding:8px 11px;font-size:13px;color:var(--text);font-family:inherit;outline:none;background:#fff}
/* FORM */
.fgrid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.fg{display:flex;flex-direction:column;gap:5px}.fg.full{grid-column:1/-1}
.fl{font-size:12px;font-weight:600;color:var(--g6)}
.fsub{font-size:11px;color:var(--g5)}
/* ACTION BAR */
.abar{display:flex;gap:10px;margin-top:24px;padding-top:16px;border-top:1px solid var(--g3);align-items:center;flex-wrap:wrap}
.btn{display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:var(--r);font-size:13px;font-weight:500;cursor:pointer;border:none;transition:.15s;text-decoration:none}
.btn-p{background:var(--blue-m);color:#fff}.btn-p:hover{background:var(--navy)}
.btn-o{background:#fff;color:var(--g6);border:1px solid var(--g3)}.btn-o:hover{background:var(--g1);border-color:var(--g4)}
.btn-s{background:var(--green);color:#fff}.btn-s:hover{background:#0f5c2e}
/* BOXES */
.warn{background:var(--amber-lt);border:1px solid #fde68a;border-radius:var(--r);padding:11px 14px;font-size:12.5px;color:var(--amber);display:flex;gap:9px;align-items:flex-start;margin-bottom:14px}
.info{background:var(--blue-lt);border:1px solid #bfdbfe;border-radius:var(--r);padding:11px 14px;font-size:12.5px;color:var(--blue-m);display:flex;gap:9px;align-items:flex-start;margin-bottom:14px}
.danger{background:var(--red-lt);border:1px solid #fecaca;border-radius:var(--r);padding:11px 14px;font-size:12.5px;color:var(--red);display:flex;gap:9px;align-items:flex-start;margin-bottom:14px}
/* METRIC */
.mgrid{display:grid;gap:12px;margin-bottom:18px}
.mc{background:#fff;border:1px solid var(--g3);border-radius:var(--rl);padding:16px 18px}
.mc .ml{font-size:10px;color:var(--g5);font-weight:600;text-transform:uppercase;letter-spacing:.06em;margin-bottom:5px}
.mc .mv{font-size:26px;font-weight:700;line-height:1}
.mc .ms{font-size:11px;color:var(--g5);margin-top:3px}
.mc .mb{height:5px;background:var(--g2);border-radius:3px;margin-top:8px;overflow:hidden}
.mc .mbf{height:100%;border-radius:3px}
.mc-b .mv{color:var(--green)}.mc-b .mbf{background:var(--green)}
.mc-m .mv{color:var(--teal)}.mc-m .mbf{background:var(--teal)}
.mc-a .mv{color:var(--amber)}.mc-a .mbf{background:var(--amber)}
.mc-a2 .mv{color:#c2410c}.mc-a2 .mbf{background:#c2410c}
.mc-c .mv{color:var(--red)}.mc-c .mbf{background:var(--red)}
/* RISK BANNER */
.rb{border-radius:var(--rl);padding:18px 22px;margin-bottom:20px;display:flex;align-items:center;gap:18px}
.rb.b{background:var(--green-lt);border:1px solid #bbf7d0}
.rb.m{background:var(--teal-lt);border:1px solid #99f6e4}
.rb.a{background:var(--amber-lt);border:1px solid #fde68a}
.rb.c{background:var(--red-lt);border:1px solid #fecaca}
.rb .rs{font-size:48px;font-weight:800;line-height:1}
.rb.b .rs{color:var(--green)}.rb.m .rs{color:var(--teal)}.rb.a .rs{color:var(--amber)}.rb.a2 .rs{color:#c2410c}.rb.c .rs{color:var(--red)}
.rb .ri{flex:1}.rb .rl{font-size:16px;font-weight:700;margin-bottom:3px}.rb .rd{font-size:12.5px;color:var(--text-s);line-height:1.5}
.rb .rbdg{padding:5px 14px;border-radius:20px;font-size:12px;font-weight:700}
.rb.b .rbdg{background:var(--green);color:#fff}.rb.m .rbdg{background:var(--teal);color:#fff}
.rb.a .rbdg{background:var(--amber);color:#fff}.rb.a2 .rbdg{background:#c2410c;color:#fff}.rb.c .rbdg{background:var(--red);color:#fff}
/* CHART */
.cc{background:#fff;border:1px solid var(--g3);border-radius:var(--rl);padding:18px;margin-bottom:18px}
.cc h3{font-size:13.5px;font-weight:600;color:var(--navy);margin-bottom:14px}
/* TABLES */
.pt{width:100%;border-collapse:collapse;font-size:12.5px}
.pt th{background:var(--navy);color:#fff;padding:9px 12px;text-align:left;font-weight:600;font-size:11.5px}
.pt td{padding:9px 12px;border-bottom:1px solid var(--g2);vertical-align:top;line-height:1.5}
.pt tr:hover td{background:var(--g0)}
.pb{display:inline-block;padding:2px 7px;border-radius:10px;font-size:10px;font-weight:700}
.pb-u{background:var(--red-lt);color:var(--red)}.pb-i{background:var(--amber-lt);color:var(--amber)}.pb-e{background:var(--blue-lt);color:var(--blue-m)}
/* FINDINGS */
.fi{background:#fff;border:1px solid var(--g3);border-radius:var(--r);padding:13px 15px;display:flex;gap:11px;align-items:flex-start;margin-bottom:9px}
.fi-ic{width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0}
.fi-a{background:var(--red-lt);color:var(--red)}.fi-m{background:var(--amber-lt);color:var(--amber)}.fi-b{background:var(--green-lt);color:var(--green)}
.fi-ti{font-size:12.5px;font-weight:600;margin-bottom:2px}.fi-de{font-size:12px;color:var(--text-s);line-height:1.5}.fi-mo{font-size:11px;color:var(--g4);margin-top:3px}
/* SERVICES */
.sg{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.sc{background:#fff;border:1px solid var(--g3);border-radius:var(--rl);padding:16px 18px}
.sc.top{border:2px solid var(--red);position:relative;overflow:hidden}
.sc.top::before{content:'★ PRIORITARIO';position:absolute;top:0;right:0;background:var(--red);color:#fff;font-size:9px;font-weight:700;padding:3px 10px;border-bottom-left-radius:8px}
.sc.rec{border:2px solid var(--blue-m)}
.sc .scb{display:inline-block;font-size:10px;font-weight:700;border-radius:4px;padding:2px 7px;margin-bottom:7px}
.sc .scb-r{background:var(--red-lt);color:var(--red)}
.sc .scb-b{background:var(--blue-lt);color:var(--blue-m)}
.sc h3{font-size:13.5px;font-weight:700;color:var(--navy);margin-bottom:5px}
.sc .pain{font-size:12.5px;color:var(--red);font-weight:600;margin-bottom:6px;line-height:1.4}
.sc p{font-size:12px;color:var(--text-s);line-height:1.6;margin-bottom:9px}
.sc .sctr{font-size:11px;color:var(--g5);border-top:1px solid var(--g2);padding-top:8px}
/* WELCOME */
.hero{background:linear-gradient(135deg,var(--navy) 0%,var(--blue-m) 100%);border-radius:var(--rl);padding:32px 36px;margin-bottom:22px;color:#fff}
.hero h1{font-size:26px;font-weight:800;margin-bottom:7px}
.hero p{font-size:13px;color:rgba(255,255,255,.8);line-height:1.7;max-width:500px}
.mow{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:20px}
.moc{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:var(--r);padding:12px 14px}
.moc .mn{font-size:10px;color:rgba(255,255,255,.5);font-weight:600;margin-bottom:3px}
.moc .mt{font-size:12.5px;color:#fff;font-weight:600}
.moc .mq{font-size:10px;color:rgba(255,255,255,.5);margin-top:2px}
/* SECTION TITLE */
.st{font-size:15px;font-weight:700;color:var(--navy);margin-bottom:12px;margin-top:20px;display:flex;align-items:center;gap:7px}
.st i{font-size:16px}
/* DISCLAIMER */
.disc{font-size:11px;color:var(--g5);background:var(--g1);border:1px solid var(--g3);border-radius:var(--r);padding:9px 12px;line-height:1.6;margin-top:18px}
/* HEATMAP */
.heat{display:grid;gap:8px;margin-bottom:18px}
.hc{border-radius:8px;padding:11px;text-align:center;font-size:11px;font-weight:600}
.hc .hv{font-size:19px;font-weight:800}.hc .hl{margin-top:2px;font-size:10px;opacity:.8}
/* ACCORDION */
.acc{border:1px solid var(--g3);border-radius:var(--rl);overflow:hidden;margin-bottom:10px}
.acc-hd{display:flex;align-items:center;gap:10px;padding:13px 16px;cursor:pointer;background:#fff;user-select:none}
.acc-hd:hover{background:var(--g0)}
.acc-ti{flex:1;font-size:13px;font-weight:600;color:var(--navy)}
.acc-ch{transition:transform .2s;color:var(--g4);font-size:14px}
.acc-hd.open .acc-ch{transform:rotate(180deg)}
.acc-bd{display:none;padding:0 16px 14px;background:#fff;border-top:1px solid var(--g2)}
.acc-bd.open{display:block}
/* Solo se usa cuando se imprime desde fuera del panel directorio */
@media print{.sidebar,.app-header,.abar{display:none}.main{padding:0;margin-left:0}}
.text-g{color:var(--green)!important}.text-a{color:var(--amber)!important}.text-r{color:var(--red)!important}.text-b{color:var(--blue-m)!important}
/* NIVEL BOX */
.nivel-card{border-radius:var(--rl);padding:16px 18px;display:flex;gap:14px;align-items:flex-start;border:1.5px solid}
.nivel-card .nv-badge{flex-shrink:0;width:52px;height:52px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;color:#fff}
.nivel-card .nv-name{font-size:15px;font-weight:700;margin-bottom:2px}
.nivel-card .nv-desc{font-size:12px;color:var(--text-s);line-height:1.5}
.nivel-card .nv-meta{display:flex;gap:14px;margin-top:8px;flex-wrap:wrap}
.nivel-card .nv-meta span{font-size:11px;color:var(--g6);display:flex;align-items:center;gap:4px;background:rgba(255,255,255,.6);border-radius:5px;padding:3px 8px}
.lvl-pill{display:inline-flex;align-items:center;gap:5px;font-size:10.5px;font-weight:700;border-radius:20px;padding:3px 10px;text-transform:uppercase;letter-spacing:.03em}
.lvl-1{background:#e0e7ff;color:#3730a3}.lvl-2{background:#dbeafe;color:#1e40af}.lvl-3{background:#ccfbf1;color:#0f766e}
.lvl-4{background:#dbeafe;color:#1a4fa0}.lvl-5{background:#fef3c7;color:#92400e}.lvl-6{background:#fee2e2;color:#991b1b}
.modbank-empty{background:var(--g0);border:1.5px dashed var(--g3);border-radius:var(--rl);padding:28px 24px;text-align:center}
.mode-card{flex:1;min-width:200px;border:1.5px solid var(--g3);border-radius:var(--rl);padding:12px 14px;cursor:pointer;transition:.15s;background:#fff}
.mode-card:hover{border-color:var(--blue-m)}
.mode-card.sel-mode{border-color:var(--blue-m);background:#eff6ff;box-shadow:0 0 0 1px var(--blue-m)}
.mode-card .mc-title{font-size:13px;font-weight:700;color:var(--navy);display:flex;align-items:center;gap:6px}
.mode-card .mc-sub{font-size:11px;color:var(--text-s);margin-top:3px}
.modbank-empty i{font-size:28px;color:var(--g4);margin-bottom:10px;display:block}
.modbank-empty .mbe-t{font-size:14px;font-weight:600;color:var(--g6);margin-bottom:4px}
.modbank-empty .mbe-d{font-size:12px;color:var(--g5);max-width:420px;margin:0 auto}

/* ============================================================
   PANEL DE DIRECTORIO — estilos integrados
   Paleta ejecutiva: --dnavy, --dgold, --dslate (prefijo 'd'
   para evitar colisiones con la paleta del sistema BSR)
   ============================================================ */
:root{
  --dnavy:#0B1E3D;--dnavy2:#152D52;--dnavy3:#1C3A6B;
  --dgold:#C9A84C;--dgold2:#E8C96E;
  --dslate:#F7F6F2;--dslate2:#ECEAE4;--dslate3:#D4D0C8;
  --dwhite:#FFFFFF;
  --dtext:#1A1A2E;--dtext2:#4A4A6A;--dtext3:#8888A0;
  --dgreen:#1A7A4A;--dgreen-lt:#D4F0E4;
  --dteal:#0A6E62;--dteal-lt:#CCF0EA;
  --damber:#8A5A00;--damber-lt:#FFF0CC;
  --dorange:#B84800;--dorange-lt:#FFE0CC;
  --dred:#A01010;--dred-lt:#F8DDDD;
}
/* PANEL DIRECTORIO WRAPPER */
#panel-directorio{background:var(--dslate)}
#panel-directorio .dir-wrap{font-family:'Segoe UI',system-ui,sans-serif;color:var(--dtext);-webkit-print-color-adjust:exact;print-color-adjust:exact}
/* toolbar interna del panel directorio */
.dir-toolbar{
  background:var(--dnavy);border-bottom:2px solid var(--dgold);
  padding:14px 32px;display:flex;align-items:center;gap:10px;
  flex-wrap:wrap;
}
.dir-nav-links{display:flex;gap:2px;flex:1;overflow-x:auto}
.dir-nav-link{
  color:rgba(255,255,255,.5);font-size:11px;font-weight:600;
  padding:6px 11px;border-radius:4px;cursor:pointer;
  white-space:nowrap;letter-spacing:.03em;text-transform:uppercase;transition:.15s;
}
.dir-nav-link:hover{color:var(--dgold);background:rgba(201,168,76,.1)}
.dir-logo{font-family:Georgia,serif;font-size:14px;font-weight:700;color:var(--dwhite);margin-right:16px;letter-spacing:.04em}
.dir-logo span{color:var(--dgold)}
.dir-btn{
  background:var(--dgold);color:var(--dnavy);border:none;
  border-radius:4px;padding:7px 14px;font-size:11px;font-weight:700;
  cursor:pointer;letter-spacing:.04em;text-transform:uppercase;transition:.15s;
  display:inline-flex;align-items:center;gap:5px;
}
.dir-btn:hover{background:var(--dgold2)}
.dir-btn-o{
  background:transparent;color:rgba(255,255,255,.7);
  border:1px solid rgba(255,255,255,.25);border-radius:4px;
  padding:6px 12px;font-size:11px;font-weight:600;cursor:pointer;
  letter-spacing:.03em;text-transform:uppercase;transition:.15s;
  display:inline-flex;align-items:center;gap:5px;
}
.dir-btn-o:hover{border-color:var(--dgold);color:var(--dgold)}
/* SLIDES */
.dslide{padding:48px 32px 40px;border-bottom:1px solid var(--dslate2)}
.dslide:last-of-type{border-bottom:none}
.dslide-cover{background:var(--dnavy);color:var(--dwhite);padding:64px 48px 48px}
/* Portada */
.d-cover-badge{
  font-size:10px;font-weight:700;letter-spacing:.15em;text-transform:uppercase;
  color:var(--dgold);border:1px solid rgba(201,168,76,.4);
  display:inline-flex;align-items:center;gap:7px;border-radius:3px;
  padding:5px 12px;margin-bottom:24px;
}
.d-cover-eyebrow{font-size:12px;color:rgba(255,255,255,.45);letter-spacing:.06em;text-transform:uppercase;margin-bottom:6px}
.d-cover-title{font-family:Georgia,serif;font-size:40px;line-height:1.1;font-weight:400;color:var(--dwhite);margin-bottom:8px}
.d-cover-title strong{color:var(--dgold)}
.d-cover-empresa{font-size:22px;font-weight:700;color:var(--dgold2);margin-bottom:32px}
/* Escala de semáforo */
.d-scale-wrap{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;padding:24px 28px;margin-bottom:36px}
.d-scale-title{font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.35);margin-bottom:14px}
.d-scale-bar{display:flex;height:14px;border-radius:7px;overflow:hidden;position:relative;margin-bottom:12px}
.d-scale-seg{flex:1}
.d-scale-needle{
  position:absolute;top:-5px;height:24px;width:4px;border-radius:2px;
  background:#fff;box-shadow:0 0 0 3px rgba(255,255,255,.3),0 3px 10px rgba(0,0,0,.4);
  transform:translateX(-50%);transition:left 1.2s cubic-bezier(.34,1.56,.64,1);
}
.d-scale-labels{display:flex;justify-content:space-between}
.d-scale-label{font-size:10px;color:rgba(255,255,255,.35);font-weight:600;letter-spacing:.04em}
.d-scale-score{display:flex;align-items:baseline;gap:10px;margin-top:18px}
.d-scale-num{font-family:Georgia,serif;font-size:64px;line-height:1;font-weight:400}
.d-scale-denom{font-size:18px;color:rgba(255,255,255,.3)}
.d-scale-verdict{border-left:2px solid rgba(255,255,255,.1);padding-left:18px;margin-left:6px}
.d-scale-verdict-level{font-size:17px;font-weight:700;margin-bottom:4px}
.d-scale-verdict-desc{font-size:12px;color:rgba(255,255,255,.5);line-height:1.6;max-width:400px}
/* Cover meta */
.d-cover-meta{display:flex;gap:36px;border-top:1px solid rgba(255,255,255,.08);padding-top:20px;flex-wrap:wrap}
.d-cover-meta-item{display:flex;flex-direction:column;gap:3px}
.d-cover-meta-label{font-size:10px;color:rgba(255,255,255,.3);text-transform:uppercase;letter-spacing:.1em}
.d-cover-meta-val{font-size:12px;color:rgba(255,255,255,.7);font-weight:600}
/* Slide head */
.d-slide-head{display:flex;align-items:flex-start;justify-content:space-between;border-bottom:1px solid var(--dslate3);padding-bottom:16px;margin-bottom:24px}
.d-slide-eye{font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--dgold);margin-bottom:4px}
.d-slide-title{font-family:Georgia,serif;font-size:24px;font-weight:400;color:var(--dnavy)}
.d-slide-num{font-family:Georgia,serif;font-size:40px;font-weight:400;color:var(--dslate3);line-height:1}
/* KPI cards */
.d-grid4{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:20px}
.d-grid2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.d-kpi{background:var(--dwhite);border-radius:8px;padding:20px;border:1px solid var(--dslate2);position:relative;overflow:hidden}
.d-kpi::after{content:'';position:absolute;top:0;left:0;right:0;height:3px}
.d-kpi.d-kpi-c::after{background:var(--dred)}
.d-kpi.d-kpi-a::after{background:var(--dorange)}
.d-kpi.d-kpi-m::after{background:var(--damber)}
.d-kpi.d-kpi-b::after{background:var(--dteal)}
.d-kpi.d-kpi-e::after{background:var(--dgreen)}
.d-kpi-eye{font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--dtext3);margin-bottom:6px}
.d-kpi-val{font-family:Georgia,serif;font-size:36px;font-weight:400;line-height:1;margin-bottom:3px}
.d-kpi-unit{font-size:14px;color:var(--dtext3)}
.d-kpi-label{font-size:12px;font-weight:600;color:var(--dtext2);margin-bottom:3px}
.d-kpi-sub{font-size:11px;color:var(--dtext3);line-height:1.4}
/* Módulos */
.d-mod-row{background:var(--dwhite);border-radius:6px;padding:14px 18px;border:1px solid var(--dslate2);display:grid;grid-template-columns:1fr 100px 70px;gap:12px;align-items:center;margin-bottom:8px}
.d-mod-name{font-size:12px;font-weight:600;color:var(--dnavy)}
.d-mod-norm{font-size:10px;color:var(--dtext3);margin-top:2px}
.d-mod-bar-wrap{height:6px;background:var(--dslate2);border-radius:3px}
.d-mod-bar-fill{height:100%;border-radius:3px}
.d-mod-score{font-family:Georgia,serif;font-size:20px;font-weight:400;text-align:right}
.d-mod-pct{font-size:10px;color:var(--dtext3);text-align:right}
/* Hallazgos */
.d-hallazgo{background:var(--dwhite);border-radius:6px;border:1px solid var(--dslate2);border-left:4px solid;padding:14px 16px;display:flex;gap:12px;margin-bottom:10px}
.d-hallazgo.d-h-alto{border-left-color:var(--dred)}
.d-hallazgo.d-h-medio{border-left-color:var(--dorange)}
.d-h-ico{width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:13px;margin-top:1px}
.d-h-ico.d-h-alto{background:var(--dred-lt);color:var(--dred)}
.d-h-ico.d-h-medio{background:var(--dorange-lt);color:var(--dorange)}
.d-h-title{font-size:12px;font-weight:600;color:var(--dnavy);margin-bottom:3px;line-height:1.4}
.d-h-desc{font-size:11px;color:var(--dtext2);line-height:1.5}
.d-h-mod{font-size:10px;color:var(--dtext3);margin-top:4px;font-weight:600;text-transform:uppercase;letter-spacing:.05em}
/* Exposición económica */
.d-expo-wrap{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.d-expo-card{background:var(--dnavy);color:var(--dwhite);border-radius:8px;padding:24px}
.d-expo-eye{font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:8px}
.d-expo-amt{font-family:Georgia,serif;font-size:32px;font-weight:400;color:var(--dgold);line-height:1;margin-bottom:6px}
.d-expo-desc{font-size:12px;color:rgba(255,255,255,.55);line-height:1.6}
.d-expo-range{font-size:11px;color:rgba(255,255,255,.3);margin-top:5px}
.d-expo-items{margin-top:14px}
.d-expo-item{display:flex;justify-content:space-between;padding:7px 0;border-bottom:1px solid rgba(255,255,255,.06);font-size:12px}
.d-expo-item:last-child{border:none}
.d-expo-item-name{color:rgba(255,255,255,.6)}
.d-expo-item-val{color:var(--dgold);font-weight:700}
.d-expo-right{display:flex;flex-direction:column;gap:12px}
.d-expo-ctx{background:var(--dwhite);border-radius:8px;padding:20px;border:1px solid var(--dslate2);flex:1}
.d-expo-ctx-title{font-family:Georgia,serif;font-size:14px;color:var(--dnavy);margin-bottom:10px}
.d-expo-ctx-item{display:flex;gap:8px;padding:7px 0;border-bottom:1px solid var(--dslate2);font-size:11px;color:var(--dtext2)}
.d-expo-ctx-item:last-child{border:none}
.d-expo-ctx-dot{width:6px;height:6px;border-radius:50%;flex-shrink:0;margin-top:4px;background:var(--dred)}
/* Plan de acción */
.d-plan-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px}
.d-plan-col{background:var(--dwhite);border-radius:8px;border:1px solid var(--dslate2);overflow:hidden}
.d-plan-col-head{padding:14px 18px;border-bottom:1px solid var(--dslate2);display:flex;align-items:center;gap:8px}
.d-plan-col-dot{width:9px;height:9px;border-radius:50%;flex-shrink:0}
.d-plan-col-title{font-size:11px;font-weight:700;color:var(--dnavy);letter-spacing:.02em}
.d-plan-col-sub{font-size:10px;color:var(--dtext3)}
.d-plan-items{padding:14px}
.d-plan-item{padding:10px 12px;margin-bottom:7px;border-radius:5px;border-left:3px solid;font-size:11px;line-height:1.6;color:var(--dtext2);background:var(--dslate)}
.d-plan-item-u{border-left-color:var(--dred);background:var(--dred-lt);color:var(--dred)}
.d-plan-item-i{border-left-color:var(--dorange)}
.d-plan-item-e{border-left-color:var(--dteal)}
.d-plan-norm{font-size:10px;color:var(--dtext3);margin-top:4px}
.d-plan-item-u .d-plan-norm{color:var(--dred);opacity:.6}
/* Propuesta */
.d-prop-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:20px}
.d-prop-card{background:var(--dwhite);border-radius:8px;padding:20px;border:1px solid var(--dslate2);position:relative}
.d-prop-card.d-top{border-color:var(--dgold);background:linear-gradient(135deg,#FFFCF0,var(--dwhite))}
.d-prop-tag{position:absolute;top:14px;right:14px;font-size:9px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;background:var(--dgold);color:var(--dnavy);border-radius:3px;padding:2px 7px}
.d-prop-icon{width:36px;height:36px;background:var(--dslate);border-radius:7px;display:flex;align-items:center;justify-content:center;color:var(--dnavy);font-size:16px;margin-bottom:12px}
.d-prop-name{font-size:13px;font-weight:700;color:var(--dnavy);margin-bottom:5px}
.d-prop-pain{font-size:11px;color:var(--dred);font-style:italic;margin-bottom:7px;line-height:1.5}
.d-prop-desc{font-size:11px;color:var(--dtext2);line-height:1.6}
/* Chart wrapper */
.d-chart-wrap{background:var(--dwhite);border-radius:8px;border:1px solid var(--dslate2);padding:20px}
.d-chart-title{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--dtext3);margin-bottom:12px}
/* Print */
/* ── IMPRESIÓN PDF — solo muestra el Panel de Directorio ── */
@media print{
  /* Ocultar toda la UI del sistema */
  .app-header,.sidebar,.nav-it,.abar,
  .lock-screen,.result-screen,
  .banner-borrador,.borradorBanner,
  #lockScreen,#borradorBanner{ display:none!important }
  /* Mostrar solo el panel directorio */
  #panel-directorio{display:block!important;width:100vw;margin:0;padding:0}
  /* Ocultar toolbar interna del directorio */
  .dir-toolbar{display:none!important}
  /* Cada slide ocupa una página A4 landscape */
  .dslide{
    page-break-after:always;
    page-break-inside:avoid;
    min-height:auto!important;
    padding:32px 40px!important;
    -webkit-print-color-adjust:exact;
    print-color-adjust:exact;
  }
  .dslide:last-child{page-break-after:auto}
  /* La portada navy debe verse correcta */
  .dslide-cover{background:var(--dnavy)!important;color:#fff!important}
  /* Ajustar tipografías para papel */
  .d-cover-title{font-size:32px!important}
  .d-scale-num{font-size:48px!important}
  /* Bordes y colores deben imprimirse */
  *{-webkit-print-color-adjust:exact!important;print-color-adjust:exact!important}
  /* Ocultar botones y controles dentro del directorio */
  button,.dir-btn,.dir-btn-o{display:none!important}
}
@page{size:A4 landscape;margin:0}
</style>
</head>
<body>

<!-- LOCK SCREEN (resultados - solo admin) -->
<div class="lock-screen hidden" id="lockScreen">
  <div class="lock-box">
    <div class="lb-logo">BSR <span>Consulting</span></div>

    <!-- MODO CONFIGURACIÓN INICIAL (primera instalación) -->
    <div id="lockSetupMode" style="display:none">
      <h2><i class="ti ti-settings"></i> Primera instalación</h2>
      <p>Configure el PIN de acceso al panel de resultados.<br>Use 4 dígitos que solo usted conozca.</p>
      <div style="margin:18px 0;display:flex;flex-direction:column;gap:12px">
        <div>
          <label style="font-size:11px;color:var(--g4);display:block;margin-bottom:4px">PIN de 4 dígitos</label>
          <input type="password" inputmode="numeric" maxlength="4" id="lockSetupPin"
            style="width:100%;padding:10px 14px;border-radius:8px;border:1px solid var(--g3);font-size:20px;letter-spacing:8px;text-align:center"
            placeholder="••••" onkeydown="if(event.key==='Enter') document.getElementById('lockSetupPin2').focus()">
        </div>
        <div>
          <label style="font-size:11px;color:var(--g4);display:block;margin-bottom:4px">Confirmar PIN</label>
          <input type="password" inputmode="numeric" maxlength="4" id="lockSetupPin2"
            style="width:100%;padding:10px 14px;border-radius:8px;border:1px solid var(--g3);font-size:20px;letter-spacing:8px;text-align:center"
            placeholder="••••" onkeydown="if(event.key==='Enter') document.getElementById('lockSetupUTM').focus()">
        </div>
        <div>
          <label style="font-size:11px;color:var(--g4);display:block;margin-bottom:4px">UTM vigente — valor en pesos (verificar en <a href="https://www.sii.cl" target="_blank" style="color:var(--blue-m)">sii.cl</a>)</label>
          <input type="number" id="lockSetupUTM" value="71506"
            style="width:100%;padding:10px 14px;border-radius:8px;border:1px solid var(--g3);font-size:14px;text-align:center"
            placeholder="71506" onkeydown="if(event.key==='Enter') setupNuevoPin()">
        </div>
      </div>
      <div class="lock-error" id="setupError"></div>
      <button class="btn btn-p" style="width:100%;justify-content:center" onclick="setupNuevoPin()">
        <i class="ti ti-check"></i> Configurar y acceder
      </button>
    </div>

    <!-- MODO LOGIN NORMAL -->
    <div id="lockLoginMode" style="display:none">
      <h2><i class="ti ti-lock"></i> Acceso administrador</h2>
      <p>Los resultados del diagnóstico son confidenciales.<br>Ingrese el PIN para acceder al panel de resultados.</p>
      <div class="pin-inputs">
        <input type="password" maxlength="1" id="p0" oninput="pinInput(0)" onkeydown="pinKey(event,0)" inputmode="numeric">
        <input type="password" maxlength="1" id="p1" oninput="pinInput(1)" onkeydown="pinKey(event,1)" inputmode="numeric">
        <input type="password" maxlength="1" id="p2" oninput="pinInput(2)" onkeydown="pinKey(event,2)" inputmode="numeric">
        <input type="password" maxlength="1" id="p3" oninput="pinInput(3)" onkeydown="pinKey(event,3)" inputmode="numeric">
      </div>
      <div class="lock-error" id="lockError"></div>
      <button class="btn btn-p" style="width:100%;justify-content:center" onclick="checkPin()"><i class="ti ti-arrow-right"></i> Ingresar</button>
      <div style="margin-top:14px;padding:10px 14px;background:rgba(255,255,255,.06);border-radius:8px;display:flex;align-items:center;justify-content:space-between;gap:8px">
        <span style="font-size:11px;color:var(--g4)">UTM vigente: $<span id="utmValorDisplay">—</span></span>
        <button onclick="mostrarCambioUTMRapido()" style="font-size:10px;color:var(--blue-m);background:none;border:none;cursor:pointer;text-decoration:underline;padding:0">Actualizar</button>
      </div>
      <div id="utmRapidoForm" style="display:none;margin-top:8px">
        <input type="number" id="utmRapidoVal" placeholder="Ej: 71506"
          style="width:100%;padding:8px 12px;border-radius:6px;border:1px solid var(--g3);font-size:13px;text-align:center;margin-bottom:6px">
        <button class="btn btn-s" style="width:100%;justify-content:center;font-size:11px;padding:8px" onclick="guardarUTMRapido()"><i class="ti ti-check"></i> Guardar UTM</button>
      </div>
      <p style="font-size:11px;color:var(--g4);margin-top:10px">¿Olvidó el PIN? Contacte a <strong style="color:var(--g5)">BSR Consulting</strong>.</p>
    </div>
  </div>
</div>

<!-- RESULTADO SCREEN (cliente ve esto al terminar) -->
<div class="result-screen" id="resultScreen">
  <div class="result-card">
    <div class="rc-logo">BSR <span>Consulting</span></div>
    <p style="font-size:12px;color:var(--g5);margin-bottom:16px">Diagnóstico laboral completado</p>
    <div id="rc-score-val" class="rc-score">—</div>
    <div id="rc-level-val" class="rc-level">—</div>
    <div class="rc-bar-wrap" style="margin-top:16px"><div id="rc-bar" class="rc-bar-fill"></div></div>
    <div id="rc-msg" class="rc-msg"></div>
    <div id="rc-mods" class="rc-modules"></div>
    <div style="background:var(--navy);border-radius:10px;padding:16px;margin-top:4px;text-align:left">
      <div style="color:#fff;font-size:13px;font-weight:700;margin-bottom:4px">¿Qué sigue?</div>
      <div style="color:rgba(255,255,255,.75);font-size:12px;line-height:1.6">Un consultor BSR analizará su diagnóstico y lo contactará dentro de las próximas 24 horas para presentarle un plan de acción personalizado.</div>
      <div style="margin-top:10px;display:flex;gap:8px;flex-wrap:wrap">
        <span style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:6px;padding:5px 12px;color:rgba(255,255,255,.8);font-size:11px"><i class="ti ti-mail" style="font-size:12px"></i> contacto@bsrconsulting.cl</span>
        <span style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:6px;padding:5px 12px;color:rgba(255,255,255,.8);font-size:11px"><i class="ti ti-world" style="font-size:12px"></i> www.bsrconsulting.cl</span>
      </div>
    </div>
    <p class="rc-sub">Diagnóstico BSR Score de Riesgo Laboral v3.0 · Clasificación adaptativa · Confidencial<br>Referencial — no reemplaza asesoría legal profesional</p>

    <!-- BOTÓN DESCARGA — visible para el cliente -->
    <button onclick="descargarDiagnostico()" style="margin-top:16px;width:100%;background:var(--navy);color:#fff;border:none;border-radius:10px;padding:13px 20px;font-size:13.5px;font-weight:600;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:8px" onmouseover="this.style.background='#1a4fa0'" onmouseout="this.style.background='var(--navy)'">
      <i class="ti ti-download" style="font-size:16px"></i> Descargar mi diagnóstico completado
    </button>
    <p style="font-size:11px;color:var(--g4);margin-top:8px;line-height:1.5">Descargue este archivo y envíelo a su consultor BSR.<br>Contiene todas sus respuestas guardadas de forma segura.</p>

    <div style="margin-top:16px;padding-top:14px;border-top:1px solid var(--g2)">
      <button onclick="openAdminLogin()" style="background:none;border:none;color:var(--g4);font-size:11px;cursor:pointer;display:flex;align-items:center;gap:5px;margin:0 auto;padding:6px 12px;border-radius:6px" onmouseover="this.style.color='var(--g5)'" onmouseout="this.style.color='var(--g4)'">
        <i class="ti ti-lock" style="font-size:12px"></i> Acceso BSR Consulting
      </button>
    </div>
  </div>
</div>

<!-- APP PRINCIPAL (solo admin ve esto) -->
<div id="adminApp">
<header class="app-header">
  <div><div class="logo">BSR <span>Consulting</span></div><div class="sub">Score de Riesgo Laboral · BSR Consulting</div></div>
  <div class="spacer"></div>
  <div class="prog-wrap"><div class="prog-fill" id="progBar" style="width:0%"></div></div>
  <div class="hbadge" id="progLabel">0 / 0 preguntas</div>
  <button class="admin-btn" id="adminLogoutBtn" style="display:none" onclick="lockAdmin()"><i class="ti ti-lock" style="font-size:12px"></i> Salir admin</button>
</header>
<div class="app-body">
  <nav class="sidebar" id="sidebar">
    <div class="nav-sec">Diagnóstico</div>
    <div class="nav-it active" data-p="welcome" onclick="goPanel('welcome')"><i class="ti ti-home" style="font-size:15px"></i><span>Inicio</span></div>
    <div class="nav-it" data-p="mod1" onclick="goPanel('mod1')" id="nv-mod1"><span class="nn">1</span><span>Datos generales</span></div>
    <div class="nav-sec admin-only" style="display:none">Resultados</div>
    <div class="nav-it admin-only" data-p="dashboard" onclick="goPanel('dashboard')" id="nv-dashboard" style="display:none"><i class="ti ti-chart-bar" style="font-size:15px"></i><span>Dashboard ejecutivo</span></div>
    <div class="nav-it admin-only" data-p="informe" onclick="goPanel('informe')" id="nv-informe" style="display:none"><i class="ti ti-file-text" style="font-size:15px"></i><span>Informe y plan de acción</span></div>
    <div class="nav-it admin-only" data-p="directorio" onclick="goPanel('directorio')" id="nv-directorio" style="display:none"><i class="ti ti-presentation-analytics" style="font-size:15px"></i><span>Panel de Directorio</span></div>
    <div class="nav-it admin-only" data-p="servicios" onclick="goPanel('servicios')" id="nv-servicios" style="display:none"><i class="ti ti-briefcase" style="font-size:15px"></i><span>Propuesta de servicios</span></div>
    <div class="nav-sec admin-only" style="display:none">Herramientas</div>
    <div class="nav-it admin-only" data-p="calculadora" onclick="goPanel('calculadora')" style="display:none"><i class="ti ti-calculator" style="font-size:15px"></i><span>Calculadora exposición</span></div>
    <div class="nav-it admin-only" data-p="multas" onclick="goPanel('multas')" style="display:none"><i class="ti ti-alert-triangle" style="font-size:15px"></i><span>Matriz de multas</span></div>
    <div class="nav-it admin-only" data-p="config" onclick="goPanel('config')" style="display:none"><i class="ti ti-settings" style="font-size:15px"></i><span>Configuración</span></div>
  </nav>
  <main class="main" id="mainContent">

    <!-- WELCOME -->
    <div class="panel active" id="panel-welcome">
      <div class="hero">
        <h1>Score de Riesgo Laboral BSR</h1>
        <p>Autodiagnóstico de cumplimiento laboral para empresas chilenas. Complete los 7 módulos para obtener el índice de riesgo, hallazgos y propuesta de servicios.</p>
        <div class="mow">
          <div class="moc"><div class="mn">Módulo 1</div><div class="mt">Datos generales</div><div class="mq">Perfil empresa</div></div>
          <div class="moc"><div class="mn">Módulo 2</div><div class="mt">Contratos + RIOHS</div><div class="mq">30 preguntas</div></div>
          <div class="moc"><div class="mn">Módulo 3</div><div class="mt">Remuneraciones</div><div class="mq">52 preguntas</div></div>
          <div class="moc"><div class="mn">Módulo 4</div><div class="mt">Jornada y asistencia</div><div class="mq">35 preguntas</div></div>
          <div class="moc"><div class="mn">Módulo 5</div><div class="mt">Ley Karin + Datos</div><div class="mq">17 preguntas</div></div>
          <div class="moc"><div class="mn">Módulos 6-7</div><div class="mt">Relaciones + Fiscaliz.</div><div class="mq">46 preguntas</div></div>
        </div>
      </div>
      <div class="warn"><i class="ti ti-alert-triangle" style="font-size:17px;flex-shrink:0;margin-top:1px"></i><div><strong>Aviso legal:</strong> Este instrumento tiene carácter referencial y no reemplaza la asesoría de un abogado laboralista ni una auditoría laboral formal. La normativa puede actualizarse; verifique vigencia con un profesional habilitado. BSR Consulting no asume responsabilidad por decisiones tomadas exclusivamente en base a este autodiagnóstico.</div></div>
      <div class="info"><i class="ti ti-info-circle" style="font-size:17px;flex-shrink:0"></i><div><strong>Instrucciones:</strong> Responda con honestidad. Tenga a mano contratos, liquidaciones, registros de asistencia y documentos de Ley Karin. <strong>El cliente solo verá su puntaje final; los resultados detallados son de acceso exclusivo BSR.</strong></div></div>
      <div class="abar" style="border:none;padding:0;margin:0"><button class="btn btn-p" onclick="goPanel('mod1')"><i class="ti ti-arrow-right"></i> Comenzar diagnóstico</button></div>
    </div>

    <!-- MÓDULO 1: DATOS GENERALES + CLASIFICACIÓN -->
    <div class="panel" id="panel-mod1">
      <div class="mod-hd"><div class="mod-ey">Módulo 1</div><div class="mod-ti">Datos generales y clasificación de la empresa</div><div class="mod-de">El número de trabajadores clasifica automáticamente a la empresa en uno de 6 niveles BSR, lo que determina la cantidad y complejidad de las preguntas siguientes. La respuesta sobre sindicato determina preguntas aplicables en módulos posteriores.</div></div>
      <div class="fgrid">
        <div class="fg full"><label class="fl">Razón social <span style="color:var(--red)">*</span></label><input class="qi" id="d_razon" placeholder="Ingrese la razón social"></div>
        <div class="fg"><label class="fl">RUT empresa</label><input class="qi" id="d_rut" placeholder="12.345.678-9"></div>
        <div class="fg"><label class="fl">Región</label>
          <select class="qs" id="d_region"><option value="">Seleccione...</option><option>Región de Arica y Parinacota</option><option>Región de Tarapacá</option><option>Región de Antofagasta</option><option>Región de Atacama</option><option>Región de Coquimbo</option><option>Región de Valparaíso</option><option>Región Metropolitana</option><option>Región del Libertador B. O'Higgins</option><option>Región del Maule</option><option>Región de Ñuble</option><option>Región del Biobío</option><option>Región de La Araucanía</option><option>Región de Los Ríos</option><option>Región de Los Lagos</option><option>Región de Aysén</option><option>Región de Magallanes</option></select>
        </div>
        <div class="fg"><label class="fl">Nombre del representante legal <span style="color:var(--red)">*</span></label><input class="qi" id="d_rep" placeholder="Nombre completo"></div>
        <div class="fg"><label class="fl">Cargo del representante</label><input class="qi" id="d_cargo" placeholder="Ej: Gerente General, Dueño, Director"></div>
        <div class="fg"><label class="fl">Correo electrónico <span style="color:var(--red)">*</span></label><input class="qi" id="d_email" type="email" placeholder="correo@empresa.cl"></div>
        <div class="fg"><label class="fl">Teléfono de contacto</label><input class="qi" id="d_tel" placeholder="+56 9 1234 5678"></div>
        <div class="fg full">
          <label class="fl">N° exacto de trabajadores <span style="color:var(--red)">*</span></label>
          <input class="qi" id="d_ntrab" type="number" min="1" placeholder="Ej: 85" oninput="onNTrabChange()">
          <span class="fsub">Este número clasifica automáticamente el nivel de la empresa y ajusta el cuestionario.</span>
          <div id="nivelBox" style="display:none;margin-top:10px"></div>
          <div id="modoExpertoBox" style="display:none;margin-top:10px">
            <div style="font-size:12px;font-weight:600;color:var(--g6);margin-bottom:8px">Su empresa es PyME — elija el tipo de diagnóstico:</div>
            <div style="display:flex;gap:10px;flex-wrap:wrap">
              <div id="modo-rapido-card" class="mode-card sel-mode" onclick="setModoExperto(false)">
                <div class="mc-title"><i class="ti ti-bolt"></i> Diagnóstico rápido</div>
                <div class="mc-sub">~60 preguntas · ~15 min · recomendado</div>
              </div>
              <div id="modo-experto-card" class="mode-card" onclick="setModoExperto(true)">
                <div class="mc-title"><i class="ti ti-microscope"></i> Diagnóstico experto</div>
                <div class="mc-sub">180 preguntas · ~45 min · auditoría completa</div>
              </div>
            </div>
          </div>
        </div>
        <div class="fg"><label class="fl">Actividad económica</label>
          <select class="qs" id="d_act"><option value="">Seleccione...</option><option>Agricultura y silvicultura</option><option>Industria manufacturera</option><option>Construcción</option><option>Comercio</option><option>Transporte</option><option>Alojamiento y gastronomía</option><option>Información y comunicaciones</option><option>Servicios financieros</option><option>Servicios profesionales y técnicos</option><option>Salud</option><option>Educación</option><option>Otros servicios</option></select>
        </div>
        <div class="fg"><label class="fl">N° de sucursales o centros de trabajo</label>
          <select class="qs" id="d_suc"><option value="1">Solo casa matriz</option><option value="2-5">2 a 5</option><option value="6-20">6 a 20</option><option value="20+">Más de 20</option></select>
        </div>
        <div class="fg"><label class="fl">¿Tiene área de RRHH formal?</label>
          <select class="qs" id="d_rrhh"><option value="no">No, lo gestiona el dueño/gerencia</option><option value="informal">Una persona a cargo, sin área formal</option><option value="si">Sí, área o departamento formal</option></select>
        </div>
        <div class="fg"><label class="fl">¿Tiene Comité Paritario / Depto. Prevención?</label>
          <select class="qs" id="d_prev"><option value="no">No</option><option value="parcial">Comité Paritario sin Depto. Prevención</option><option value="si">Sí, ambos constituidos</option></select>
          <span class="fsub">Obligatorio desde 26 trabajadores (Ley 16.744, DS 54).</span>
        </div>
        <div class="fg"><label class="fl">¿Tiene trabajadores subcontratados?</label>
          <select class="qs" id="d_sub"><option value="no">No</option><option value="si">Sí</option></select>
        </div>
        <div class="fg"><label class="fl">¿La empresa tiene sindicato(s)?</label>
          <select class="qs" id="d_sind" onchange="onSindicatoChange()">
            <option value="">Seleccione...</option>
            <option value="si">Sí, al menos uno</option>
            <option value="no">No</option>
          </select>
          <span class="fsub">Esta respuesta bloquea preguntas sindicales en módulos siguientes si no aplica.</span>
        </div>
        <div class="fg" id="fg_sind_det" style="display:none"><label class="fl">N° de sindicatos</label>
          <select class="qs" id="d_nsind"><option value="1">1 sindicato</option><option value="2-3">2 a 3 sindicatos</option><option value="4+">4 o más</option></select>
        </div>
        <div class="fg"><label class="fl">¿Cotiza en bolsa o reporta sostenibilidad (ESG)?</label>
          <select class="qs" id="d_esg"><option value="no">No</option><option value="si">Sí</option></select>
          <span class="fsub">Activa módulo ESG Laboral, exigible solo a Gran Empresa.</span>
        </div>
      </div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('welcome')"><i class="ti ti-arrow-left"></i> Volver</button><button class="btn btn-p" onclick="saveM1()">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 2 -->
    <div class="panel" id="panel-mod2">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 2</div><div class="mod-ti">Contratos, documentación laboral y reglamento interno</div><div class="mod-de">Evalúa contratos de trabajo, anexos, documentación individual y las tres obligaciones más críticas del RIOHS. Arts. 9-11, 153-157 CT; DS 40 MINSAL.</div></div><span class="modcount" id="modcount-mod2"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod2"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod1')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod2" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod2','mod3')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 3 -->
    <div class="panel" id="panel-mod3">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 3</div><div class="mod-ti">Remuneraciones y cumplimiento previsional</div><div class="mod-de">Evalúa liquidaciones, cotizaciones, gratificaciones, vacaciones, horas extras, finiquitos y libro de remuneraciones. Arts. 41-62, 67-76, 97-116 CT; DL 3500; Ley 20.255.</div></div><span class="modcount" id="modcount-mod3"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod3"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod2')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod3" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod3','mod4')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 4 -->
    <div class="panel" id="panel-mod4">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 4</div><div class="mod-ti">Jornada de trabajo y asistencia</div><div class="mod-de">Evalúa control de asistencia, jornada ordinaria, horas extra, descansos y jornada reducida Ley 21.561. Arts. 22-40 bis CT; Ley 21.561.</div></div><span class="modcount" id="modcount-mod4"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod4"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod3')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod4" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod4','mod5')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 5 -->
    <div class="panel" id="panel-mod5">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 5</div><div class="mod-ti">Ley Karin y protección de datos personales</div><div class="mod-de">Evalúa el cumplimiento de la Ley 21.643 (Ley Karin, vigente desde el 01-ago-2024) y la preparación ante la Ley 21.719 de Protección de Datos Personales (vigencia 01-dic-2026).</div></div><span class="modcount" id="modcount-mod5"><span class="mc-dot"></span>0 / 0</span></div>
      <div class="warn"><i class="ti ti-alert-triangle" style="font-size:16px;flex-shrink:0"></i><div><strong>Dos leyes críticas:</strong> Ley Karin (21.643) vigente desde el 01-ago-2024 · Ley de Datos Personales (21.719) vigente desde el 01-dic-2026. Ambas generan multas de hasta 60-20.000 UTM respectivamente.</div></div>
      <div id="q-mod5"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod4')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod5" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod5','mod6')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 6 -->
    <div class="panel" id="panel-mod6">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 6</div><div class="mod-ti">Relaciones laborales</div><div class="mod-de">Evalúa gestión de sindicatos, negociación colectiva, clima organizacional y prácticas antisindicales. Arts. 212-255, 289-294 CT.</div></div><span class="modcount" id="modcount-mod6"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod6"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod5')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod6" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod6','mod7')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 7 -->
    <div class="panel" id="panel-mod7">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 7</div><div class="mod-ti">Historial de fiscalizaciones y litigios</div><div class="mod-de">Evalúa el historial de inspecciones, multas, reclamos, demandas y comparendos ante la Dirección del Trabajo.</div></div><span class="modcount" id="modcount-mod7"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod7"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod6')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod7" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-s" onclick="finalizeAndShow()"><i class="ti ti-chart-bar"></i> Generar diagnóstico completo</button></div>
    </div>

    <!-- MÓDULO 8: GOBIERNO CORPORATIVO (Niveles 5-6) -->
    <div class="panel" id="panel-mod8">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 8</div><div class="mod-ti">Gobierno corporativo laboral y auditoría interna</div><div class="mod-de">Aplica a Mediana y Gran Empresa. Verifica políticas de gobierno laboral, comité de auditoría y programa de auditoría interna recurrente.</div></div><span class="modcount" id="modcount-mod8"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod8"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod7')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod8" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod8','mod9')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 9: COMPLIANCE AVANZADO (Niveles 5-6) -->
    <div class="panel" id="panel-mod9">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 9</div><div class="mod-ti">Compliance laboral avanzado y matrices de riesgo</div><div class="mod-de">Aplica a Mediana y Gran Empresa. Evalúa madurez del programa de compliance: canal de denuncias, matriz de riesgos y responsable designado.</div></div><span class="modcount" id="modcount-mod9"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod9"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod8')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod9" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod9','mod10')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 10: ESG LABORAL (Nivel 6 únicamente) -->
    <div class="panel" id="panel-mod10">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 10</div><div class="mod-ti">ESG laboral, diversidad e inclusión</div><div class="mod-de">Aplica solo a Gran Empresa. Evalúa reporte de indicadores laborales ESG y su consistencia con la información pública.</div></div><span class="modcount" id="modcount-mod10"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod10"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod9')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod10" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-p" onclick="nextMod('mod10','mod11')">Guardar y continuar <i class="ti ti-arrow-right"></i></button></div>
    </div>

    <!-- MÓDULO 11: CONTINUIDAD OPERACIONAL (Nivel 6 únicamente) -->
    <div class="panel" id="panel-mod11">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Módulo 11</div><div class="mod-ti">Continuidad operacional y gestión sindical estratégica</div><div class="mod-de">Aplica solo a Gran Empresa. Evalúa planes de continuidad ante huelgas legales y madurez del relacionamiento sindical corporativo.</div></div><span class="modcount" id="modcount-mod11"><span class="mc-dot"></span>0 / 0</span></div>
      <div id="q-mod11"></div>
      <div class="abar"><button class="btn btn-o" onclick="goPanel('mod10')"><i class="ti ti-arrow-left"></i> Anterior</button><span id="sl-mod11" style="font-size:12px;color:var(--g5)"></span><button class="btn btn-s" onclick="finalizeAndShow()"><i class="ti ti-chart-bar"></i> Generar diagnóstico completo</button></div>
    </div>

    <!-- DASHBOARD -->
    <div class="panel" id="panel-dashboard">
      <div class="mod-hd"><div class="mod-ey">Resultados · Panel administrador</div><div class="mod-ti">Dashboard ejecutivo</div><div class="mod-de" id="dash-sub">Complete el diagnóstico para ver los resultados.</div></div>
      <div id="dash-content"><div class="info"><i class="ti ti-info-circle" style="font-size:16px;flex-shrink:0"></i>Complete todos los módulos para generar el dashboard.</div></div>
    </div>

    <!-- DASHBOARD -->
    <div class="panel" id="panel-dashboard">
      <div class="mod-hd"><div class="mod-ey">Resultados · Panel administrador</div><div class="mod-ti">Dashboard ejecutivo</div><div class="mod-de" id="dash-sub">Complete el diagnóstico para ver los resultados.</div></div>
      <div id="dash-content"><div class="info"><i class="ti ti-info-circle" style="font-size:16px;flex-shrink:0"></i>Complete todos los módulos para generar el dashboard.</div></div>
    </div>

    <!-- PANEL DE DIRECTORIO -->
    <div class="panel" id="panel-directorio">
      <div id="dir-wrap" class="dir-wrap">

        <!-- TOOLBAR INTERNA DEL PANEL -->
        <div class="dir-toolbar">
          <div class="dir-logo">BSR <span>Consulting</span></div>
          <div class="dir-nav-links">
            <span class="dir-nav-link" onclick="dirScroll('dir-s0')">Portada</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s1')">Score Global</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s2')">Por Módulo</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s3')">Hallazgos</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s4')">Exposición Económica</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s5')">Plan de Acción</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s6')">Propuesta</span>
            <span class="dir-nav-link" onclick="dirScroll('dir-s7')" id="dir-link-comp" style="display:none">Comparativo</span>
          </div>
          <button class="dir-btn-o" id="btn-guardar-snap" onclick="guardarSnapshotDesdeDirectorio()" title="Guarda el Score actual para compararlo con diagnósticos futuros"><i class="ti ti-bookmark"></i> Guardar versión</button>
          <button class="dir-btn-o" onclick="window.print()"><i class="ti ti-printer"></i> Imprimir PDF</button>
          <button class="dir-btn" onclick="goPanel('dashboard')"><i class="ti ti-arrow-left"></i> Volver al Score</button>
        </div>

        <!-- SLIDE 0: PORTADA -->
        <div class="dslide dslide-cover" id="dir-s0">
          <div class="d-cover-badge"><i class="ti ti-shield-check" style="font-size:10px"></i> CONFIDENCIAL · USO EXCLUSIVO DIRECTORIO</div>
          <div class="d-cover-eyebrow">Diagnóstico BSR Score de Riesgo Laboral</div>
          <div class="d-cover-title">Informe Ejecutivo de<br><strong>Cumplimiento Laboral</strong></div>
          <div class="d-cover-empresa" id="d-portada-empresa">Empresa Evaluada S.A.</div>
          <div class="d-scale-wrap">
            <div class="d-scale-title">Posicionamiento de la empresa en la escala de riesgo laboral BSR</div>
            <div class="d-scale-bar">
              <div class="d-scale-seg" style="background:linear-gradient(90deg,#8B0000,#C0392B)"></div>
              <div class="d-scale-seg" style="background:linear-gradient(90deg,#C0392B,#E67E22)"></div>
              <div class="d-scale-seg" style="background:linear-gradient(90deg,#E67E22,#F39C12)"></div>
              <div class="d-scale-seg" style="background:linear-gradient(90deg,#F39C12,#27AE60)"></div>
              <div class="d-scale-seg" style="background:linear-gradient(90deg,#27AE60,#1A7A4A);position:relative">
                <div class="d-scale-needle" id="d-needle" style="left:150%"></div>
              </div>
            </div>
            <div class="d-scale-labels">
              <span class="d-scale-label">Crítico</span>
              <span class="d-scale-label">Alto</span>
              <span class="d-scale-label">Medio</span>
              <span class="d-scale-label">Bajo</span>
              <span class="d-scale-label">Excelente</span>
            </div>
            <div class="d-scale-score">
              <div><span class="d-scale-num" id="d-score-num">--</span><span class="d-scale-denom">/100</span></div>
              <div class="d-scale-verdict">
                <div class="d-scale-verdict-level" id="d-score-level"></div>
                <div class="d-scale-verdict-desc" id="d-score-desc"></div>
              </div>
            </div>
          </div>
          <div class="d-cover-meta">
            <div class="d-cover-meta-item"><span class="d-cover-meta-label">Razón Social</span><span class="d-cover-meta-val" id="d-meta-razon">—</span></div>
            <div class="d-cover-meta-item"><span class="d-cover-meta-label">Nivel BSR</span><span class="d-cover-meta-val" id="d-meta-nivel">—</span></div>
            <div class="d-cover-meta-item"><span class="d-cover-meta-label">N° Trabajadores</span><span class="d-cover-meta-val" id="d-meta-trab">—</span></div>
            <div class="d-cover-meta-item"><span class="d-cover-meta-label">Región</span><span class="d-cover-meta-val" id="d-meta-region">—</span></div>
            <div class="d-cover-meta-item"><span class="d-cover-meta-label">Fecha diagnóstico</span><span class="d-cover-meta-val" id="d-meta-fecha">—</span></div>
            <div style="margin-left:auto;font-family:Georgia,serif;font-size:14px;font-weight:700;color:rgba(255,255,255,.25)">BSR <span style="color:var(--dgold);opacity:.6">Consulting</span></div>
          </div>
        </div>

        <!-- SLIDE 1: SCORE GLOBAL -->
        <div class="dslide" id="dir-s1" style="background:var(--dslate)">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Resultado del diagnóstico</div><div class="d-slide-title">Score Global de Riesgo Laboral</div></div>
            <div class="d-slide-num">01</div>
          </div>
          <div class="d-grid4" id="d-kpi-row"></div>
          <div class="d-grid2">
            <div class="d-chart-wrap"><div class="d-chart-title">Índices de cumplimiento</div><div style="height:220px;position:relative"><canvas id="d-chartCumplimiento"></canvas></div></div>
            <div class="d-chart-wrap"><div class="d-chart-title">Perfil de riesgo por área</div><div style="height:220px;position:relative"><canvas id="d-chartRadar"></canvas></div></div>
          </div>
          <div style="margin-top:20px;background:var(--dwhite);border:1px solid var(--dslate2);border-radius:8px;padding:18px 22px">
            <p id="d-exec-reading" style="font-size:13px;color:var(--dtext2);line-height:1.8;font-style:italic"></p>
          </div>
        </div>

        <!-- SLIDE 2: MÓDULOS -->
        <div class="dslide" id="dir-s2" style="background:#fff">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Análisis por área de cumplimiento</div><div class="d-slide-title">Cumplimiento Detallado por Módulo</div></div>
            <div class="d-slide-num">02</div>
          </div>
          <div id="d-mods-rows"></div>
          <div style="margin-top:20px;height:180px;position:relative"><canvas id="d-chartBarras"></canvas></div>
        </div>

        <!-- SLIDE 3: HALLAZGOS -->
        <div class="dslide" id="dir-s3" style="background:var(--dslate)">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Brechas detectadas en el diagnóstico</div><div class="d-slide-title">Principales Hallazgos de Incumplimiento</div></div>
            <div class="d-slide-num">03</div>
          </div>
          <div id="d-hallazgos-list" style="display:grid;grid-template-columns:1fr 1fr;gap:10px"></div>
          <div id="d-hallazgos-nota" style="margin-top:14px;font-size:11px;color:var(--damber);background:var(--damber-lt);padding:10px 14px;border-radius:6px;border-left:3px solid var(--damber)"></div>
        </div>

        <!-- SLIDE 4: EXPOSICIÓN ECONÓMICA -->
        <div class="dslide" id="dir-s4" style="background:#fff">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Estimación de contingencias laborales</div><div class="d-slide-title">Exposición Económica de la Empresa</div></div>
            <div class="d-slide-num">04</div>
          </div>
          <div class="d-expo-wrap">
            <div class="d-expo-card">
              <div class="d-expo-eye">Exposición total estimada</div>
              <div class="d-expo-amt" id="d-expo-total">—</div>
              <div class="d-expo-desc">Estimación de contingencias económicas si los incumplimientos detectados derivaran en fiscalizaciones y/o demandas laborales durante los próximos 24 meses.</div>
              <div class="d-expo-range" id="d-expo-range"></div>
              <div class="d-expo-items" id="d-expo-items"></div>
            </div>
            <div class="d-expo-right">
              <div class="d-expo-ctx">
                <div class="d-expo-ctx-title">¿Qué incluye esta estimación?</div>
                <div id="d-expo-ctx-items"></div>
              </div>
              <div style="background:var(--dslate);border-radius:8px;padding:18px;border:1px solid var(--dslate2)">
                <div style="font-size:10px;color:var(--dtext3);margin-bottom:7px;font-weight:700;text-transform:uppercase;letter-spacing:.06em">Contexto normativo clave</div>
                <div style="font-size:11px;color:var(--dtext2);line-height:1.7" id="d-expo-norma"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 5: PLAN DE ACCIÓN -->
        <div class="dslide" id="dir-s5" style="background:var(--dslate)">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Hoja de ruta de mitigación de riesgos</div><div class="d-slide-title">Plan de Acción por Prioridad</div></div>
            <div class="d-slide-num">05</div>
          </div>
          <div class="d-plan-grid">
            <div class="d-plan-col">
              <div class="d-plan-col-head"><div class="d-plan-col-dot" style="background:var(--dred)"></div><div><div class="d-plan-col-title">URGENTE · 0-30 días</div><div class="d-plan-col-sub">Riesgo legal inmediato</div></div></div>
              <div class="d-plan-items" id="d-plan-30"></div>
            </div>
            <div class="d-plan-col">
              <div class="d-plan-col-head"><div class="d-plan-col-dot" style="background:var(--dorange)"></div><div><div class="d-plan-col-title">IMPORTANTE · 31-90 días</div><div class="d-plan-col-sub">Control de brechas críticas</div></div></div>
              <div class="d-plan-items" id="d-plan-90"></div>
            </div>
            <div class="d-plan-col">
              <div class="d-plan-col-head"><div class="d-plan-col-dot" style="background:var(--dteal)"></div><div><div class="d-plan-col-title">ESTRATÉGICO · 91-180 días</div><div class="d-plan-col-sub">Madurez organizacional</div></div></div>
              <div class="d-plan-items" id="d-plan-180"></div>
            </div>
          </div>
          <div style="margin-top:16px;padding:14px 18px;background:var(--dnavy);border-radius:6px;font-size:11px;color:rgba(255,255,255,.6);line-height:1.6">
            <strong style="color:var(--dgold)">Nota para el Directorio:</strong> BSR Consulting implementa cada línea de acción con honorarios fijos por entregable, sin horas extras ni costos ocultos. El costo de implementación es significativamente menor a la exposición económica estimada.
          </div>
        </div>

        <!-- SLIDE 6: PROPUESTA BSR -->
        <div class="dslide" id="dir-s6" style="background:#fff">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Solución BSR Consulting</div><div class="d-slide-title">Propuesta de Servicios para el Directorio</div></div>
            <div class="d-slide-num">06</div>
          </div>
          <div class="d-prop-grid" id="d-prop-cards"></div>
          <div style="background:var(--dnavy);border-radius:8px;padding:24px 28px;display:flex;align-items:center;gap:24px;color:var(--dwhite)">
            <div style="flex:1">
              <div style="font-size:10px;color:var(--dgold);font-weight:700;letter-spacing:.1em;text-transform:uppercase;margin-bottom:5px">Compromiso BSR</div>
              <div style="font-family:Georgia,serif;font-size:18px;margin-bottom:7px">Cerramos brechas. Garantizamos cumplimiento.</div>
              <div style="font-size:12px;color:rgba(255,255,255,.55);line-height:1.7" id="d-prop-commitment"></div>
            </div>
            <div style="flex-shrink:0;text-align:center">
              <button style="background:var(--dgold);color:var(--dnavy);border:none;border-radius:6px;padding:14px 24px;font-size:13px;font-weight:700;cursor:pointer;letter-spacing:.04em;text-transform:uppercase" onclick="window.open('mailto:contacto@bsrconsulting.cl')">
                <i class="ti ti-mail" style="margin-right:6px"></i>SOLICITAR REUNIÓN
              </button>
              <div style="font-size:11px;color:rgba(255,255,255,.3);margin-top:6px">contacto@bsrconsulting.cl</div>
            </div>
          </div>
        </div>

        <!-- SLIDE 7: COMPARATIVO HISTÓRICO (aparece solo si hay snapshots) -->
        <div class="dslide" id="dir-s7" style="display:none;background:var(--dslate)">
          <div class="d-slide-head">
            <div><div class="d-slide-eye">Evolución del cumplimiento laboral</div><div class="d-slide-title">Comparativo Histórico de Diagnósticos</div></div>
            <div class="d-slide-num">07</div>
          </div>
          <div style="background:var(--dwhite);border:1px solid var(--dslate2);border-radius:8px;padding:16px 20px;margin-bottom:16px">
            <p style="font-size:12px;color:var(--dtext2);line-height:1.7">Comparación del diagnóstico actual con versiones anteriores guardadas para la misma empresa. Las flechas <span style="color:var(--dgreen)">▲</span> y <span style="color:var(--dred)">▼</span> muestran la variación respecto al diagnóstico anterior.</p>
          </div>
          <div id="d-comp-tabla"></div>
        </div>

      </div><!-- /dir-wrap -->
    </div><!-- /panel-directorio -->

    <!-- INFORME -->
    <div class="panel" id="panel-informe">
      <div class="mod-hd"><div class="mod-ey">Informe final</div><div class="mod-ti">Hallazgos y plan de acción</div></div>
      <div id="inf-content"><div class="info"><i class="ti ti-info-circle" style="font-size:16px;flex-shrink:0"></i>Complete todos los módulos para generar el informe.</div></div>
    </div>

    <!-- SERVICIOS -->
    <div class="panel" id="panel-servicios">
      <div class="mod-hd"><div class="mod-ey">BSR Consulting</div><div class="mod-ti">Propuesta de servicios</div><div class="mod-de">Servicios recomendados según los hallazgos del diagnóstico, con énfasis en los dolores críticos detectados.</div></div>
      <div id="serv-content"><div class="info"><i class="ti ti-info-circle" style="font-size:16px;flex-shrink:0"></i>Complete todos los módulos para ver la propuesta de servicios.</div></div>
    </div>

    <!-- CALCULADORA -->
    <div class="panel" id="panel-calculadora">
      <div class="mod-hd"><div class="mod-ey">Herramienta</div><div class="mod-ti">Calculadora de exposición económica</div><div class="mod-de">Estime el impacto financiero potencial de los incumplimientos detectados. Ajuste los parámetros según la realidad de la empresa.</div></div>
      <div id="calc-content"></div>
    </div>

    <!-- MULTAS -->
    <div class="panel" id="panel-multas">
      <div class="mod-hd"><div class="mod-ey">Referencia normativa</div><div class="mod-ti">Matriz de multas DT y Ley 21.719</div><div class="mod-de">Principales infracciones laborales y de datos personales con rangos de multa y normativa. UTM vigente: verifique en <strong>sii.cl</strong>.</div></div>
      <div id="multas-content"></div>
    </div>

    <!-- PANEL CONFIGURACIÓN ADMIN -->
    <div class="panel" id="panel-config">
      <div class="mod-hd"><div class="mod-hd-txt"><div class="mod-ey">Configuración del sistema</div><div class="mod-ti">Seguridad y parámetros BSR Score</div><div class="mod-de">Gestione el PIN de acceso al panel de resultados y el valor de la UTM vigente para los cálculos de exposición económica.</div></div></div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:4px">

        <!-- Cambio de PIN -->
        <div class="qcard">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
            <div style="width:36px;height:36px;background:var(--navy);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
              <i class="ti ti-lock" style="color:#fff;font-size:17px"></i>
            </div>
            <div>
              <div style="font-size:13px;font-weight:700;color:var(--navy)">Cambiar PIN de acceso</div>
              <div style="font-size:11px;color:var(--text-s)">El PIN se guarda en este navegador/dispositivo</div>
            </div>
          </div>
          <div class="fgrid">
            <div class="fg full">
              <label class="fl">Nuevo PIN (4 dígitos)</label>
              <input class="qi" type="password" inputmode="numeric" maxlength="4" id="adminPin1" placeholder="••••" style="letter-spacing:8px;text-align:center;font-size:20px">
            </div>
            <div class="fg full">
              <label class="fl">Confirmar nuevo PIN</label>
              <input class="qi" type="password" inputmode="numeric" maxlength="4" id="adminPin2" placeholder="••••" style="letter-spacing:8px;text-align:center;font-size:20px" onkeydown="if(event.key==='Enter') cambiarPinDesdeAdmin()">
            </div>
          </div>
          <div id="adminPinMsg" style="font-size:12px;margin:8px 0"></div>
          <button class="btn btn-p" onclick="cambiarPinDesdeAdmin()"><i class="ti ti-check"></i> Guardar nuevo PIN</button>
        </div>

        <!-- Actualización UTM -->
        <div class="qcard">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
            <div style="width:36px;height:36px;background:var(--amber);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
              <i class="ti ti-currency-dollar" style="color:#fff;font-size:17px"></i>
            </div>
            <div>
              <div style="font-size:13px;font-weight:700;color:var(--navy)">Valor UTM vigente</div>
              <div style="font-size:11px;color:var(--text-s)">Actualizar mensualmente desde <a href="https://www.sii.cl" target="_blank" style="color:var(--blue-m)">sii.cl</a></div>
            </div>
          </div>
          <div style="background:var(--g0);border-radius:8px;padding:14px 16px;margin-bottom:14px;text-align:center">
            <div style="font-size:10px;color:var(--text-s);text-transform:uppercase;letter-spacing:.06em;margin-bottom:4px">UTM guardada actualmente</div>
            <div style="font-size:28px;font-weight:700;color:var(--navy)" id="utmAdminDisplay">—</div>
          </div>
          <div class="fgrid">
            <div class="fg full">
              <label class="fl">Nuevo valor UTM ($)</label>
              <input class="qi" type="number" id="adminUTMVal" placeholder="Ej: 71506" style="text-align:center;font-size:16px" onkeydown="if(event.key==='Enter') actualizarUTMDesdeAdmin()">
              <span class="fsub">Valor en pesos chilenos. Solo números, sin puntos.</span>
            </div>
          </div>
          <div id="adminUTMMsg" style="font-size:12px;margin:8px 0"></div>
          <button class="btn btn-s" onclick="actualizarUTMDesdeAdmin()"><i class="ti ti-refresh"></i> Actualizar UTM</button>
        </div>
      </div>

      <!-- EmailJS — ancho completo -->
      <div class="qcard" style="margin-top:20px">
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:16px">
          <div style="width:36px;height:36px;background:var(--blue-m);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
            <i class="ti ti-mail" style="color:#fff;font-size:17px"></i>
          </div>
          <div>
            <div style="font-size:13px;font-weight:700;color:var(--navy)">Notificación automática por email — EmailJS</div>
            <div style="font-size:11px;color:var(--text-s)">Al completar un diagnóstico, BSR recibe automáticamente el Score y hallazgos. Requiere cuenta en <a href="https://emailjs.com" target="_blank" style="color:var(--blue-m)">emailjs.com</a> (gratis hasta 200 envíos/mes).</div>
          </div>
          <div id="ejsStatusBadge" style="margin-left:auto;flex-shrink:0"></div>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px">
          <div class="fg">
            <label class="fl">Public Key <span style="color:var(--text-s)">(Account → General)</span></label>
            <input class="qi" id="ejsPublicKey" type="text" placeholder="user_XXXXXXXXX">
          </div>
          <div class="fg">
            <label class="fl">Service ID <span style="color:var(--text-s)">(Email Services)</span></label>
            <input class="qi" id="ejsServiceId" type="text" placeholder="service_XXXXXXX">
          </div>
          <div class="fg">
            <label class="fl">Template ID <span style="color:var(--text-s)">(Email Templates)</span></label>
            <input class="qi" id="ejsTemplateId" type="text" placeholder="template_XXXXXXX">
          </div>
          <div class="fg">
            <label class="fl">Email destino BSR</label>
            <input class="qi" id="ejsToEmail" type="email" placeholder="contacto@bsrconsulting.cl">
          </div>
        </div>
        <div style="margin-top:10px;padding:10px 14px;background:var(--g0);border-radius:6px;font-size:11px;color:var(--text-s);line-height:1.6">
          <strong>Variables disponibles en el template:</strong> <code>{{empresa}}</code>, <code>{{rut}}</code>, <code>{{email_cliente}}</code>, <code>{{telefono}}</code>, <code>{{ntrab}}</code>, <code>{{nivel_bsr}}</code>, <code>{{region}}</code>, <code>{{score}}</code>, <code>{{nivel_riesgo}}</code>, <code>{{hallazgos_top}}</code>, <code>{{fecha}}</code>, <code>{{to_email}}</code>
        </div>
        <div id="ejsMsg" style="font-size:12px;margin:10px 0;min-height:18px"></div>
        <div style="display:flex;gap:10px;flex-wrap:wrap">
          <button class="btn btn-p" onclick="guardarEmailConfigDesdeAdmin()"><i class="ti ti-device-floppy"></i> Guardar configuración</button>
          <button class="btn btn-s" onclick="testEmailJS()"><i class="ti ti-send"></i> Enviar email de prueba</button>
          <button class="btn btn-s" onclick="borrarEmailConfigAdmin()" style="color:var(--red);border-color:var(--red)"><i class="ti ti-trash"></i> Borrar config</button>
        </div>
      </div>

    </div><!-- /panel-config inner -->
    </div><!-- /panel-config -->
</div><!-- /adminApp -->

</body>
<script>
// ============================================================
// AUTENTICACIÓN ADMIN
// Flujo correcto:
//   - Cliente: abre el archivo → cuestionario directo → ve solo pantalla de resultado
//   - Admin:   desde la pantalla de resultado hace clic en "Ver resultados detallados"
//             → ingresa PIN → accede al panel completo
// ============================================================
// ============================================================
// SISTEMA DE PIN CONFIGURABLE
// El PIN se guarda ofuscado en localStorage. En la primera
// instalación (o si no existe PIN guardado) se muestra un
// formulario de configuración inicial. El consultor BSR puede
// cambiar el PIN desde el panel admin en cualquier momento.
// Ofuscación: btoa(pin) — no es cifrado fuerte, pero impide
// lectura casual del localStorage. Para mayor seguridad usar
// en un servidor con autenticación real.
// ============================================================
const PIN_KEY = 'bsr_admin_pin';
const UTM_KEY = 'bsr_utm_valor';
const EJS_KEY = 'bsr_ejs_config'; // EmailJS: {publicKey, serviceId, templateId, toEmail}

function getEmailConfig(){
  try{ const v=localStorage.getItem(EJS_KEY); return v?JSON.parse(v):null; }catch(e){ return null; }
}
function guardarEmailConfig(cfg){ localStorage.setItem(EJS_KEY, JSON.stringify(cfg)); }

// Inicializa EmailJS si hay config guardada
function initEmailJS(){
  const cfg=getEmailConfig();
  if(cfg?.publicKey && typeof emailjs!=='undefined'){
    try{ emailjs.init({publicKey:cfg.publicKey}); }catch(e){}
  }
}

// Envía notificación a BSR al finalizar un diagnóstico
// Funciona solo si EmailJS está configurado; si no, falla silenciosamente
async function enviarNotificacionBSR(gs, lv, hallazgos){
  const cfg=getEmailConfig();
  if(!cfg?.publicKey||!cfg?.serviceId||!cfg?.templateId) return; // no configurado
  if(typeof emailjs==='undefined') return;
  try{
    const top3=hallazgos.slice(0,3).map((h,i)=>`${i+1}. [${h.nivel.toUpperCase()}] ${h.titulo}`).join('\n');
    await emailjs.send(cfg.serviceId, cfg.templateId, {
      empresa:    S.m1.razon||'Sin nombre',
      rut:        S.m1.rut||'—',
      email_cliente: S.m1.email||'—',
      telefono:   S.m1.tel||'—',
      ntrab:      S.m1.ntrab||'—',
      nivel_bsr:  S.m1.nivelObj?`Nivel ${S.m1.nivelObj.orden} (${S.m1.nivelObj.nombre})`:'—',
      region:     S.m1.region||'—',
      score:      String(gs),
      nivel_riesgo: lv.level,
      hallazgos_top: top3||'Sin hallazgos críticos',
      fecha:      new Date().toLocaleDateString('es-CL'),
      to_email:   cfg.toEmail||'contacto@bsrconsulting.cl',
    });
    console.log('[BSR] Notificación enviada a BSR Consulting');
  }catch(e){
    console.warn('[BSR] No se pudo enviar notificación EmailJS:', e.message||e);
  }
}

function getPinGuardado(){
  const v = localStorage.getItem(PIN_KEY);
  return v ? atob(v) : null;
}
function guardarPin(pin){
  localStorage.setItem(PIN_KEY, btoa(pin));
}
function getUTMGuardada(){
  const v = localStorage.getItem(UTM_KEY);
  return v ? parseInt(v, 10) : 71506; // valor por defecto julio 2026
}
function guardarUTM(utm){
  localStorage.setItem(UTM_KEY, String(utm));
}

// Al cargarse el lock screen, verificar si ya hay PIN configurado
function initLockScreen(){
  const pin = getPinGuardado();
  if(!pin){
    // Primera instalación: mostrar formulario de configuración
    document.getElementById('lockSetupMode').style.display='block';
    document.getElementById('lockLoginMode').style.display='none';
    document.getElementById('lockSetupPin').focus();
  } else {
    document.getElementById('lockSetupMode').style.display='none';
    document.getElementById('lockLoginMode').style.display='block';
    document.getElementById('p0').focus();
  }
  // Mostrar UTM actual
  document.getElementById('utmValorDisplay').textContent = getUTMGuardada().toLocaleString('es-CL');
}

function setupNuevoPin(){
  const pin1 = document.getElementById('lockSetupPin').value.trim();
  const pin2 = document.getElementById('lockSetupPin2').value.trim();
  if(!/^\d{4}$/.test(pin1)){
    document.getElementById('setupError').textContent='El PIN debe ser exactamente 4 dígitos.';
    return;
  }
  if(pin1 !== pin2){
    document.getElementById('setupError').textContent='Los PINs no coinciden. Intente nuevamente.';
    return;
  }
  guardarPin(pin1);
  // Guardar UTM si se ingresó
  const utmEl = document.getElementById('lockSetupUTM');
  if(utmEl && utmEl.value) guardarUTM(parseInt(utmEl.value, 10));
  document.getElementById('setupError').textContent='';
  document.getElementById('lockSetupMode').style.display='none';
  document.getElementById('lockLoginMode').style.display='block';
  document.getElementById('utmValorDisplay').textContent=getUTMGuardada().toLocaleString('es-CL');
  // Auto-ingresar si viene de setup (es el propio consultor)
  document.getElementById('p0').focus();
}

function mostrarCambioUTMRapido(){
  const f=document.getElementById('utmRapidoForm');
  f.style.display=f.style.display==='none'?'block':'none';
  if(f.style.display==='block') document.getElementById('utmRapidoVal').focus();
}

function guardarUTMRapido(){
  const val = parseInt(document.getElementById('utmRapidoVal').value, 10);
  if(!val||val<60000||val>200000){ alert('Ingrese un valor válido de UTM (ej: 71506)'); return; }
  guardarUTM(val);
  document.getElementById('utmValorDisplay').textContent=val.toLocaleString('es-CL');
  document.getElementById('utmRapidoForm').style.display='none';
  document.getElementById('utmRapidoVal').value='';
}

function cambiarPinDesdeAdmin(){
  const pin1 = document.getElementById('adminPin1').value.trim();
  const pin2 = document.getElementById('adminPin2').value.trim();
  const msg = document.getElementById('adminPinMsg');
  if(!/^\d{4}$/.test(pin1)){ msg.textContent='PIN debe ser 4 dígitos.'; msg.style.color='var(--red)'; return; }
  if(pin1 !== pin2){ msg.textContent='Los PINs no coinciden.'; msg.style.color='var(--red)'; return; }
  guardarPin(pin1);
  msg.textContent='✓ PIN actualizado correctamente.'; msg.style.color='var(--green)';
  document.getElementById('adminPin1').value='';
  document.getElementById('adminPin2').value='';
  setTimeout(()=>{ msg.textContent=''; }, 3000);
}

function actualizarUTMDesdeAdmin(){
  const val = parseInt(document.getElementById('adminUTMVal').value.replace(/\./g,'').replace(',',''), 10);
  const msg = document.getElementById('adminUTMMsg');
  if(!val || val < 60000 || val > 200000){
    msg.textContent='Ingrese un valor de UTM válido (ej: 71506).'; msg.style.color='var(--red)'; return;
  }
  guardarUTM(val);
  document.getElementById('utmAdminDisplay').textContent='$'+val.toLocaleString('es-CL');
  const disp=document.getElementById('utmValorDisplay');
  if(disp) disp.textContent=val.toLocaleString('es-CL');
  msg.textContent=`✓ UTM actualizada a $${val.toLocaleString('es-CL')}. Se aplicará a todos los cálculos.`;
  msg.style.color='var(--green)';
  document.getElementById('adminUTMVal').value='';
  setTimeout(()=>{ msg.textContent=''; }, 4000);
}

function guardarEmailConfigDesdeAdmin(){
  const msg = document.getElementById('ejsMsg');
  const cfg = {
    publicKey:  document.getElementById('ejsPublicKey').value.trim(),
    serviceId:  document.getElementById('ejsServiceId').value.trim(),
    templateId: document.getElementById('ejsTemplateId').value.trim(),
    toEmail:    document.getElementById('ejsToEmail').value.trim()||'contacto@bsrconsulting.cl',
  };
  if(!cfg.publicKey||!cfg.serviceId||!cfg.templateId){
    msg.textContent='Complete los tres campos requeridos (Public Key, Service ID y Template ID).';
    msg.style.color='var(--red)'; return;
  }
  guardarEmailConfig(cfg);
  initEmailJS(); // reinicializar con la nueva config
  msg.textContent='✓ Configuración guardada. El próximo diagnóstico completado enviará notificación a '+cfg.toEmail;
  msg.style.color='var(--green)';
  mostrarEstadoEJS();
  setTimeout(()=>{ msg.textContent=''; }, 5000);
}

async function testEmailJS(){
  const msg = document.getElementById('ejsMsg');
  const cfg = getEmailConfig();
  if(!cfg?.publicKey){
    msg.textContent='Guarde la configuración EmailJS primero.';
    msg.style.color='var(--red)'; return;
  }
  if(typeof emailjs==='undefined'){
    msg.textContent='SDK EmailJS no cargado. Verifique conexión a internet.';
    msg.style.color='var(--red)'; return;
  }
  msg.textContent='Enviando email de prueba...'; msg.style.color='var(--text-s)';
  try{
    await emailjs.send(cfg.serviceId, cfg.templateId, {
      empresa:'[PRUEBA] Empresa Demo',
      rut:'76.000.001-K',
      email_cliente:'demo@empresa.cl',
      telefono:'+56 9 1234 5678',
      ntrab:'87',
      nivel_bsr:'Nivel 4 (PyME)',
      region:'Región Metropolitana',
      score:'52',
      nivel_riesgo:'Riesgo Alto',
      hallazgos_top:'1. [ALTO] Sin procedimiento Ley Karin\n2. [ALTO] Cotizaciones con retrasos\n3. [MEDIO] RIOHS desactualizado',
      fecha:new Date().toLocaleDateString('es-CL'),
      to_email:cfg.toEmail,
    });
    msg.textContent='✓ Email de prueba enviado correctamente a '+cfg.toEmail;
    msg.style.color='var(--green)';
  }catch(e){
    msg.textContent='✗ Error al enviar: '+(e.text||e.message||JSON.stringify(e));
    msg.style.color='var(--red)';
  }
  setTimeout(()=>{ msg.textContent=''; }, 6000);
}

function borrarEmailConfigAdmin(){
  if(!confirm('¿Borrar la configuración EmailJS? Las notificaciones automáticas dejarán de enviarse.')) return;
  localStorage.removeItem(EJS_KEY);
  ['ejsPublicKey','ejsServiceId','ejsTemplateId','ejsToEmail'].forEach(id=>{
    const el=document.getElementById(id);
    if(el) el.value='';
  });
  mostrarEstadoEJS();
  const msg=document.getElementById('ejsMsg');
  msg.textContent='Configuración EmailJS eliminada.'; msg.style.color='var(--text-s)';
  setTimeout(()=>{ msg.textContent=''; }, 3000);
}

function mostrarEstadoEJS(){
  const badge=document.getElementById('ejsStatusBadge');
  if(!badge) return;
  const cfg=getEmailConfig();
  if(cfg?.publicKey&&cfg?.serviceId&&cfg?.templateId){
    badge.innerHTML=`<span style="background:#d1fae5;color:#065f46;border-radius:4px;padding:3px 10px;font-size:10px;font-weight:700;letter-spacing:.06em">✓ ACTIVO</span>`;
  } else {
    badge.innerHTML=`<span style="background:#fee2e2;color:#7f1d1d;border-radius:4px;padding:3px 10px;font-size:10px;font-weight:700;letter-spacing:.06em">NO CONFIGURADO</span>`;
  }
}

function cargarConfigEJSEnPanel(){
  const cfg=getEmailConfig();
  if(!cfg) { mostrarEstadoEJS(); return; }
  if(cfg.publicKey) document.getElementById('ejsPublicKey').value=cfg.publicKey;
  if(cfg.serviceId) document.getElementById('ejsServiceId').value=cfg.serviceId;
  if(cfg.templateId) document.getElementById('ejsTemplateId').value=cfg.templateId;
  if(cfg.toEmail) document.getElementById('ejsToEmail').value=cfg.toEmail;
  mostrarEstadoEJS();
}

function cargarConfigEJSEnPanel(){
  const cfg=getEmailConfig();
  if(!cfg) { mostrarEstadoEJS(); return; }
  if(cfg.publicKey) document.getElementById('ejsPublicKey').value=cfg.publicKey;
  if(cfg.serviceId) document.getElementById('ejsServiceId').value=cfg.serviceId;
  if(cfg.templateId) document.getElementById('ejsTemplateId').value=cfg.templateId;
  if(cfg.toEmail) document.getElementById('ejsToEmail').value=cfg.toEmail;
  mostrarEstadoEJS();
}

// ============================================================
// MODO COMPARATIVO — Snapshots por empresa/fecha
// Permite guardar el diagnóstico actual y compararlo con
// versiones anteriores en el Panel de Directorio (slide 7).
// Los snapshots se guardan en localStorage bajo clave
// 'bsr_snap_<rut>_<timestamp>'. Se listan hasta 5 por empresa.
// ============================================================
const SNAP_PREFIX = 'bsr_snap_';

function guardarSnapshot(){
  if(!S.ready){ alert('Complete el diagnóstico antes de guardar un snapshot.'); return; }
  const gs=globalScore();
  const ts=Date.now();
  const rut=(S.m1.rut||'sinrut').replace(/[^0-9kK]/g,'');
  const key=SNAP_PREFIX+rut+'_'+ts;
  const m1Clean={...S.m1}; delete m1Clean.nivelObj;
  const snap={
    key, ts, gs,
    nivel_riesgo: getLv(gs).level,
    m1:m1Clean, scores:{...S.scores},
    hallazgos:getHallazgos()
  };
  localStorage.setItem(key, JSON.stringify(snap));
  // Limpiar snapshots antiguos (mantener solo los últimos 5 por empresa)
  const todos=listarSnapshots(rut);
  if(todos.length>5){
    todos.slice(0,-5).forEach(s=>localStorage.removeItem(s.key));
  }
  return snap;
}

function listarSnapshots(rut){
  const buscarRut=rut||(S.m1?.rut||'').replace(/[^0-9kK]/g,'');
  const result=[];
  for(let i=0;i<localStorage.length;i++){
    const k=localStorage.key(i);
    if(!k||!k.startsWith(SNAP_PREFIX+buscarRut+'_')) continue;
    try{
      const s=JSON.parse(localStorage.getItem(k));
      if(s) result.push(s);
    }catch(e){}
  }
  return result.sort((a,b)=>a.ts-b.ts);
}

function renderComparativo(){
  const rut=(S.m1?.rut||'').replace(/[^0-9kK]/g,'');
  const snaps=listarSnapshots(rut);
  const wrap=document.getElementById('dir-s7');
  if(!wrap) return;
  if(snaps.length<1){
    wrap.style.display='none';
    return;
  }
  wrap.style.display='block';
  const gs=globalScore();
  const hoy=new Date().toLocaleDateString('es-CL',{day:'2-digit',month:'short',year:'numeric'});
  // Mostrar tabla comparativa de snapshots + diagnóstico actual
  const todasVersiones=[...snaps,{ts:Date.now(),gs,scores:{...S.scores},nivel_riesgo:getLv(gs).level,m1:{...S.m1},key:'actual'}];
  const mods=Object.keys(S.scores);
  const modNombres={mod2:'Contratos',mod3:'Remuneraciones',mod4:'Jornada',mod5:'Ley Karin',mod6:'Relaciones',mod7:'Fiscalizaciones',mod8:'Gov. Corp.',mod9:'Compliance',mod10:'ESG',mod11:'Continuidad'};
  const cols=todasVersiones.slice(-3); // máximo 3 columnas (últimas versiones + actual)
  let tabla=`<div style="overflow-x:auto"><table style="width:100%;border-collapse:collapse;font-size:12px">
    <thead><tr style="background:var(--dnavy);color:#fff">
      <th style="text-align:left;padding:10px 14px;font-weight:600">Módulo</th>
      ${cols.map((c,i)=>{
        const fecha=new Date(c.ts).toLocaleDateString('es-CL',{day:'2-digit',month:'short',year:'2-digit'});
        const esActual=c.key==='actual';
        return `<th style="text-align:center;padding:10px 14px;font-weight:600">${esActual?`<span style="color:var(--dgold)">Actual</span><br><span style="font-size:10px;opacity:.6">${fecha}</span>`:`Diagnóstico ${i+1}<br><span style="font-size:10px;opacity:.6">${fecha}</span>`}</th>`;
      }).join('')}
    </tr></thead><tbody>`;
  mods.forEach((mod,ri)=>{
    tabla+=`<tr style="background:${ri%2===0?'#fff':'var(--dslate)'}">
      <td style="padding:9px 14px;font-weight:600;color:var(--dnavy)">${modNombres[mod]||mod}</td>
      ${cols.map(c=>{
        const sc=c.scores[mod]||0;
        const col=c.key==='actual'&&sc>0?`color:${dScoreColor(sc)};font-weight:700`:'color:var(--dtext2)';
        const diff = cols.indexOf(c)>0 ? (sc-(cols[cols.indexOf(c)-1]?.scores[mod]||0)) : null;
        const diffStr = diff!==null && diff!==0 ? ` <span style="font-size:10px;color:${diff>0?'var(--dgreen)':'var(--dred)'}">${diff>0?'▲':'▼'}${Math.abs(diff)}</span>` : '';
        return `<td style="text-align:center;padding:9px 14px;${col}">${sc}${diffStr}</td>`;
      }).join('')}
    </tr>`;
  });
  tabla+=`<tr style="background:var(--dnavy);color:#fff;font-weight:700">
    <td style="padding:10px 14px">Score Global</td>
    ${cols.map(c=>`<td style="text-align:center;padding:10px 14px;color:var(--dgold);font-size:16px">${c.gs}</td>`).join('')}
  </tr></tbody></table></div>`;
  document.getElementById('d-comp-tabla').innerHTML=tabla;
}

// Botón "Guardar snapshot" en el Panel de Directorio
function guardarSnapshotDesdeDirectorio(){
  const snap=guardarSnapshot();
  if(!snap) return;
  const btn=document.getElementById('btn-guardar-snap');
  if(btn){ btn.textContent='✓ Guardado'; btn.disabled=true; setTimeout(()=>{ btn.textContent='Guardar versión actual'; btn.disabled=false; },2500); }
  renderComparativo();
}

let adminUnlocked = false;

// INPUT PIN: avanza al siguiente campo automáticamente
function pinInput(i){
  const el = document.getElementById('p'+i);
  if(el.value.length===1 && i<3) document.getElementById('p'+(i+1)).focus();
  document.getElementById('lockError').textContent='';
  ['p0','p1','p2','p3'].forEach(id=>document.getElementById(id).classList.remove('error'));
}
function pinKey(e,i){
  if(e.key==='Backspace' && !document.getElementById('p'+i).value && i>0)
    document.getElementById('p'+(i-1)).focus();
  if(e.key==='Enter') checkPin();
}

// VERIFICAR PIN → si correcto, mostrar panel admin
function checkPin(){
  const pin = ['p0','p1','p2','p3'].map(id=>document.getElementById(id).value).join('');
  const pinCorrecto = getPinGuardado() || '1234';
  if(pin === pinCorrecto){
    adminUnlocked = true;
    // Ocultar lock screen
    document.getElementById('lockScreen').classList.add('hidden');
    // Ocultar pantalla de resultado del cliente
    document.getElementById('resultScreen').classList.remove('visible');
    // Mostrar elementos solo-admin en el sidebar
    document.querySelectorAll('.admin-only').forEach(el=>el.style.display='flex');
    document.querySelectorAll('.nav-sec.admin-only').forEach(el=>el.style.display='block');
    // Mostrar botón de salir
    document.getElementById('adminLogoutBtn').style.display='flex';
    // Navegar al dashboard
    goPanel('dashboard');
  } else {
    document.getElementById('lockError').textContent='PIN incorrecto. Intente nuevamente.';
    ['p0','p1','p2','p3'].forEach(id=>{
      const el=document.getElementById(id);
      el.classList.add('error');
      el.value='';
    });
    document.getElementById('p0').focus();
  }
}

// SALIR DEL PANEL ADMIN → volver a cuestionario como cliente
function lockAdmin(){
  adminUnlocked = false;
  // Ocultar elementos admin
  document.querySelectorAll('.admin-only').forEach(el=>el.style.display='none');
  document.getElementById('adminLogoutBtn').style.display='none';
  // Volver al inicio del cuestionario
  goPanel('welcome');
}

// ABRIR PANTALLA DE PIN (llamado desde botón en pantalla de resultado del cliente)
function openAdminLogin(){
  document.getElementById('lockScreen').classList.remove('hidden');
  ['p0','p1','p2','p3'].forEach(id=>document.getElementById(id).value='');
  document.getElementById('lockError').textContent='';
  initLockScreen();
}

// ============================================================
// NIVELES BSR — Clasificación adaptativa por tamaño/madurez
// Definidos por el comité multidisciplinario BSR (RRHH, Abogado
// Laboral, Auditor, Remuneraciones, Prevención, Compliance, etc.)
// ============================================================
const NIVELES = {
  n1:{ id:'n1', orden:1, nombre:'Starter', min:1, max:9, color:'#3730a3', cls:'lvl-1',
       desc:'Gestión a cargo del dueño, sin área RRHH formal, contador externo, procesos informales.',
       rangoPreg:'~20', tiempoMin:6,
       objetivo:'Detectar incumplimientos críticos que podrían generar multas inmediatas, sin abrumar al dueño con preguntas que no le aplican.',
       modulosActivos:['mod2','mod3','mod4','mod5','mod7'],
       modulosOcultos:['mod6'] },
  n2:{ id:'n2', orden:2, nombre:'Microempresa', min:10, max:19, color:'#1e40af', cls:'lvl-2',
       desc:'Procesos básicos de RRHH, control documental inicial, primeras obligaciones de prevención.',
       rangoPreg:'~40', tiempoMin:10,
       objetivo:'Verificar procesos básicos de RRHH y control documental, sumando Ley Karin y capacitación mínima.',
       modulosActivos:['mod2','mod3','mod4','mod5','mod6','mod7'],
       modulosOcultos:[] },
  n3:{ id:'n3', orden:3, nombre:'Pequeña empresa', min:20, max:49, color:'#0f766e', cls:'lvl-3',
       desc:'Procesos formales de RRHH, reclutamiento e inducción estructurados, controles preventivos.',
       rangoPreg:'~50', tiempoMin:13,
       objetivo:'Evaluar procesos formales de RRHH, contratación, remuneraciones y prevención de riesgos con controles preventivos.',
       modulosActivos:['mod2','mod3','mod4','mod5','mod6','mod7'],
       modulosOcultos:[] },
  n4:{ id:'n4', orden:4, nombre:'PyME', min:50, max:199, color:'#1a4fa0', cls:'lvl-4',
       desc:'Gestión de personas estructurada, compliance laboral, indicadores de gestión.',
       rangoPreg:'~60', tiempoMin:15,
       objetivo:'Evaluar integralmente gestión de personas, compliance laboral, prevención, Ley Karin, capacitación, desempeño, subcontratación y jornadas excepcionales.',
       modulosActivos:['mod2','mod3','mod4','mod5','mod6','mod7'],
       modulosOcultos:[] },
  n5:{ id:'n5', orden:5, nombre:'Mediana empresa', min:200, max:499, color:'#92400e', cls:'lvl-5',
       desc:'Gobierno corporativo laboral, auditorías internas, matrices de riesgo, compliance avanzado.',
       rangoPreg:'~70', tiempoMin:18,
       objetivo:'Exigir evidencia documental en gobierno corporativo laboral, auditoría interna, matrices de riesgo, KPIs y control de contratistas.',
       modulosActivos:['mod2','mod3','mod4','mod5','mod6','mod7','mod8','mod9'],
       modulosOcultos:[] },
  n6:{ id:'n6', orden:6, nombre:'Gran empresa', min:500, max:Infinity, color:'#991b1b', cls:'lvl-6',
       desc:'Cumplimiento integral: gobierno corporativo, ESG laboral, gestión sindical, continuidad operacional.',
       rangoPreg:'~80', tiempoMin:22,
       objetivo:'Exigir evidencia verificable en cumplimiento laboral, compliance, gobierno corporativo, ESG, gestión sindical y continuidad operacional.',
       modulosActivos:['mod2','mod3','mod4','mod5','mod6','mod7','mod8','mod9','mod10','mod11'],
       modulosOcultos:[] }
};

// Determina el nivel BSR según N° de trabajadores
function getNivel(nTrab){
  const n=parseInt(nTrab,10);
  if(!n||n<1) return null;
  for(const lv of Object.values(NIVELES)) if(n>=lv.min && n<=lv.max) return lv;
  return NIVELES.n6;
}

// ============================================================
// PREGUNTAS (MODULES)
// Cada módulo declara `niveles`: el peso (ponderación dentro del
// Score Global) que tiene PARA CADA nivel en el que está activo.
// Si un nivel no aparece en `niveles`, el módulo queda excluido
// del cálculo para ese nivel (no se pondera en cero).
// Los módulos 8-11 (Gobierno Corporativo, Compliance Avanzado,
// ESG Laboral, Continuidad Operacional) están definidos como
// estructura pero su banco de preguntas está pendiente de
// redacción — ver bancoEnConstruccion más abajo.
// ============================================================
const MODS = {

  mod2: {
    name:'Contratos, doc. laboral y RIOHS',
    niveles:{n1:28,n2:24,n3:23,n4:27,n5:21,n6:18},
    questionsByLevel:{
      n1:[
        {id:'m2n1q1',text:'¿Todos sus trabajadores tienen contrato de trabajo escrito y firmado?',risk:'a',peso:6,norm:'Art. 9 CT',
         opts:[{l:'A',t:'Sí, todos',p:6},{l:'B',t:'La mayoría, falta alguno',p:3},{l:'C',t:'No, varios trabajan sin contrato',p:0}],
         cons:'Multa de 1 a 20 UTM por cada trabajador sin contrato. Es la infracción más fiscalizada por la Dirección del Trabajo.'},
        {id:'m2n1q2',text:'¿El contrato se firma dentro de los primeros 15 días desde que la persona empieza a trabajar?',risk:'a',peso:5,norm:'Art. 9 CT',
         opts:[{l:'A',t:'Sí, siempre',p:5},{l:'B',t:'A veces se atrasa',p:2},{l:'C',t:'No se controla este plazo',p:0}],
         cons:'Multa de 1 a 5 UTM por contrato fuera de plazo.'},
        {id:'m2n1q3',text:'¿El contrato indica claramente el cargo, el sueldo, el horario y el lugar donde trabaja la persona?',risk:'a',peso:5,norm:'Art. 10 CT',
         opts:[{l:'A',t:'Sí, en todos los contratos',p:5},{l:'B',t:'En algunos falta algún dato',p:2},{l:'C',t:'No usamos un formato estándar',p:0}],
         cons:'Si el contrato no especifica estos puntos, en un conflicto se asume lo que diga el trabajador, no la empresa.'},
        {id:'m2n1q4',text:'Cuando alguien deja de trabajar en la empresa, ¿se hace finiquito y se firma ante notario o en la Inspección del Trabajo?',risk:'a',peso:6,norm:'Arts. 162, 177 CT',
         opts:[{l:'A',t:'Sí, siempre',p:6},{l:'B',t:'A veces solo se firma entre las partes',p:2},{l:'C',t:'No siempre se hace finiquito',p:0}],
         cons:'Un finiquito sin ratificar no protege a la empresa: el trabajador puede demandar igual por las prestaciones pagadas.'},
        {id:'m2n1q5',text:'¿Las personas que renuevan contrato por plazo fijo lo hacen respetando el límite de 1 año (o 2 si son técnicos)?',risk:'a',peso:4,norm:'Art. 159 N°4 CT',
         opts:[{l:'A',t:'Sí, se controla este límite',p:4},{l:'B',t:'No estoy seguro',p:1},{l:'C',t:'Hemos tenido renovaciones más largas',p:0}],
         cons:'Pasado el límite, el contrato se transforma automáticamente en indefinido, aunque diga "plazo fijo".'},
        {id:'m2n1q6',text:'¿Tiene Reglamento Interno de Orden, Higiene y Seguridad (RIOHS)?',risk:'a',peso:5,norm:'Art. 156 CT',
         opts:[{l:'A',t:'Sí, vigente y entregado a cada trabajador',p:5},{l:'B',t:'Tengo uno pero está desactualizado',p:2},{l:'C',t:'No tengo RIOHS',p:0}],
         cons:'Exigible desde 10 trabajadores. Su ausencia es sancionable y deja a la empresa sin reglas claras para sancionar incumplimientos.'},
        {id:'m2n1q7',text:'¿Su RIOHS (si lo tiene) incluye el protocolo de Ley Karin contra el acoso laboral y sexual?',risk:'a',peso:5,norm:'Ley 21.643',
         opts:[{l:'A',t:'Sí, está incluido y actualizado',p:5},{l:'B',t:'Tengo RIOHS pero sin este protocolo',p:1},{l:'C',t:'No tengo RIOHS o no sé',p:0}],
         cons:'La Ley Karin es obligatoria para toda empresa, sin importar el tamaño. Su ausencia expone a multas y a que cualquier denuncia se tramite sin un procedimiento interno definido.'},
      ],
      n2:[
        {id:'m2n2q1',text:'¿Todos los trabajadores tienen contrato de trabajo escrito y firmado?',risk:'a',peso:6,norm:'Art. 9 CT',
         opts:[{l:'A',t:'Sí, el 100%',p:6},{l:'B',t:'La mayoría, falta alguno',p:3},{l:'C',t:'No, varios trabajan sin contrato',p:0}],
         cons:'Multa de 1 a 20 UTM por cada trabajador sin contrato. Es la infracción más fiscalizada por la Dirección del Trabajo.'},
        {id:'m2n2q2',text:'¿Los contratos se firman dentro de los primeros 15 días desde que la persona empieza a trabajar?',risk:'a',peso:4,norm:'Art. 9 CT',
         opts:[{l:'A',t:'Sí, siempre',p:4},{l:'B',t:'A veces se atrasa',p:2},{l:'C',t:'No se controla este plazo',p:0}],
         cons:'Multa de 1 a 5 UTM por contrato fuera de plazo.'},
        {id:'m2n2q3',text:'¿El contrato indica claramente el cargo, el sueldo, el horario y el lugar de trabajo?',risk:'a',peso:4,norm:'Art. 10 CT',
         opts:[{l:'A',t:'Sí, en todos los contratos',p:4},{l:'B',t:'En algunos falta algún dato',p:2},{l:'C',t:'No usamos un formato estándar',p:0}],
         cons:'Si el contrato no especifica estos puntos, en un conflicto se asume lo que diga el trabajador, no la empresa.'},
        {id:'m2n2q4',text:'¿Se hacen anexos de contrato por escrito cada vez que cambia el sueldo, el cargo o el horario de alguien?',risk:'a',peso:4,norm:'Art. 11 CT',
         opts:[{l:'A',t:'Sí, siempre con firma',p:4},{l:'B',t:'Solo a veces',p:1},{l:'C',t:'Rara vez o nunca',p:0}],
         cons:'Cambios no documentados pueden interpretarse como incumplimiento grave del contrato por parte del empleador.'},
        {id:'m2n2q5',text:'Cuando alguien deja de trabajar en la empresa, ¿se hace finiquito y se firma ante notario o en la Inspección del Trabajo?',risk:'a',peso:6,norm:'Arts. 162, 177 CT',
         opts:[{l:'A',t:'Sí, siempre',p:6},{l:'B',t:'A veces solo se firma entre las partes',p:2},{l:'C',t:'No siempre se hace finiquito',p:0}],
         cons:'Un finiquito sin ratificar no protege a la empresa: el trabajador puede demandar igual por las prestaciones pagadas.'},
        {id:'m2n2q6',text:'¿Los contratos a plazo fijo respetan el límite de 1 año (o 2 si son técnicos) antes de volverse indefinidos?',risk:'a',peso:4,norm:'Art. 159 N°4 CT',
         opts:[{l:'A',t:'Sí, se controla este límite',p:4},{l:'B',t:'No estoy seguro',p:1},{l:'C',t:'Hemos tenido renovaciones más largas',p:0}],
         cons:'Pasado el límite, el contrato se transforma automáticamente en indefinido, aunque diga "plazo fijo".'},
        {id:'m2n2q7',text:'¿Tiene Reglamento Interno (RIOHS) vigente, entregado a cada trabajador con acuse de recibo?',risk:'a',peso:5,norm:'Art. 156 CT',
         opts:[{l:'A',t:'Sí, vigente con acuse de recibo firmado',p:5},{l:'B',t:'Tengo uno pero sin acuse de recibo',p:2},{l:'C',t:'No tengo RIOHS',p:0}],
         cons:'Exigible desde 10 trabajadores. Sin acuse de recibo, la empresa no puede sancionar incumplimientos al reglamento.'},
        {id:'m2n2q8',text:'¿Su RIOHS incluye el protocolo de Ley Karin contra el acoso laboral y sexual, y fue enviado a la DT y SEREMI de Salud?',risk:'a',peso:5,norm:'Ley 21.643; Arts. 153-156 CT',
         opts:[{l:'A',t:'Sí, incluido y enviado a ambos organismos',p:5},{l:'B',t:'Incluido pero no enviado formalmente',p:2},{l:'C',t:'No incluido o no tengo RIOHS',p:0}],
         cons:'RIOHS sin protocolo Ley Karin es sancionable desde el 01-ago-2024, independiente del tamaño de la empresa.'},
        {id:'m2n2q9',text:'¿Verifica la situación migratoria y visa de trabajo de empleados extranjeros antes de contratarlos?',risk:'a',peso:3,norm:'Ley 21.325; Art. 10 CT',
         opts:[{l:'A',t:'Sí, siempre',p:3},{l:'B',t:'No siempre lo reviso',p:1},{l:'C',t:'No tengo trabajadores extranjeros',p:3}],
         cons:'Contratar a alguien sin permiso de trabajo vigente puede generar sanciones migratorias y laborales para la empresa.'},
        {id:'m2n2q10',text:'¿Guarda copia ordenada de contratos y finiquitos de personas que ya no trabajan con usted, por al menos 5 años?',risk:'m',peso:3,norm:'Art. 510 CT',
         opts:[{l:'A',t:'Sí, archivo ordenado',p:3},{l:'B',t:'Guardo algunos, no todos',p:1},{l:'C',t:'No tengo un archivo ordenado',p:0}],
         cons:'Un ex trabajador puede demandar hasta varios años después. Sin respaldo documental, la empresa queda en desventaja.'},
      ],
      n3:[
        {id:'m2n3q1',text:'¿Todos los trabajadores cuentan con contrato de trabajo escrito y firmado dentro de los 15 días de iniciada la relación laboral?',risk:'a',peso:6,norm:'Art. 9 CT',
         opts:[{l:'A',t:'Sí, el 100% y dentro de plazo',p:6},{l:'B',t:'La mayoría, con algún atraso ocasional',p:3},{l:'C',t:'Hay casos sin contrato o fuera de plazo',p:0}],
         cons:'Multa de 1 a 20 UTM por trabajador sin contrato, más 1 a 5 UTM por contrato fuera de plazo.'},
        {id:'m2n3q2',text:'¿Los contratos incluyen todas las estipulaciones mínimas del Art. 10 CT (funciones, jornada, remuneración, lugar de trabajo)?',risk:'a',peso:4,norm:'Art. 10 CT',
         opts:[{l:'A',t:'Sí, con plantillas legales actualizadas',p:4},{l:'B',t:'Sí, pero sin revisión legal reciente',p:2},{l:'C',t:'Faltan algunas cláusulas',p:0}],
         cons:'Contrato incompleto puede ser impugnado. Se asume como estipulación lo que declare el trabajador.'},
        {id:'m2n3q3',text:'¿Se suscriben anexos de contrato por escrito cada vez que cambian funciones, jornada o remuneración?',risk:'a',peso:4,norm:'Art. 11 CT',
         opts:[{l:'A',t:'Siempre, con acuerdo escrito firmado',p:4},{l:'B',t:'Solo para cambios de remuneración',p:2},{l:'C',t:'Rara vez o nunca',p:0}],
         cons:'Modificaciones no documentadas pueden configurar despido indirecto o incumplimiento grave del contrato.'},
        {id:'m2n3q4',text:'¿Las desvinculaciones incluyen carta de término y finiquito legalizado ante Inspección del Trabajo o notario?',risk:'a',peso:6,norm:'Arts. 162, 177 CT',
         opts:[{l:'A',t:'Sí, siempre con carta y finiquito legalizado',p:6},{l:'B',t:'Se emite carta pero no siempre se legaliza',p:2},{l:'C',t:'No se formaliza el proceso',p:0}],
         cons:'Finiquito no legalizado no libera al empleador. Carta de término omitida invalida el despido.'},
        {id:'m2n3q5',text:'¿Los contratos a plazo fijo se renuevan respetando el límite máximo de 1 año (o 2 años para técnicos)?',risk:'a',peso:3,norm:'Art. 159 N°4 CT',
         opts:[{l:'A',t:'Sí, siempre dentro del límite',p:3},{l:'B',t:'Algunos superan el límite',p:1},{l:'C',t:'No se controla el plazo',p:0},{l:'D',t:'No hay contratos a plazo fijo',p:3}],
         cons:'El contrato a plazo fijo que supera el límite se convierte automáticamente en indefinido.'},
        {id:'m2n3q6',text:'¿El Reglamento Interno (RIOHS) está vigente, entregado con acuse de recibo, e incluye Ley Karin y la jornada de 42 horas vigente?',risk:'a',peso:6,norm:'Arts. 153-156 CT; Ley 21.643; Ley 21.561',
         opts:[{l:'A',t:'Sí, actualizado y con acuse de recibo de cada trabajador',p:6},{l:'B',t:'Existe pero desactualizado o sin acuse',p:2},{l:'C',t:'No existe RIOHS',p:0}],
         cons:'Obligatorio para empresas con 10+ trabajadores. RIOHS sin Ley Karin es sancionable desde el 01-ago-2024.'},
        {id:'m2n3q7',text:'¿Verifica la situación migratoria y visa de trabajo de empleados extranjeros antes de contratarlos?',risk:'a',peso:3,norm:'Ley 21.325; Art. 10 CT',
         opts:[{l:'A',t:'Sí, siempre',p:3},{l:'B',t:'No siempre lo reviso',p:1},{l:'C',t:'No tengo trabajadores extranjeros',p:3}],
         cons:'Contratar extranjero sin visa de trabajo puede acarrear multas al empleador y expulsión del trabajador.'},
        {id:'m2n3q8',text:'Si trabaja con subcontratistas, ¿cumple con la Ley 20.123 (registro, comunicación a la empresa principal)?',risk:'a',peso:4,norm:'Arts. 183-A a 183-E CT; Ley 20.123',
         opts:[{l:'A',t:'Sí, con comunicación formal',p:4},{l:'B',t:'Parcialmente, sin comunicación formal',p:1},{l:'C',t:'No se cumple',p:0},{l:'D',t:'No aplica (no hay subcontratación)',p:4}],
         cons:'Sin cumplir estos requisitos, la empresa principal puede ser declarada responsable solidaria o subsidiaria.'},
        {id:'m2n3q9',text:'¿Verifica periódicamente el cumplimiento laboral y previsional de sus contratistas y subcontratistas?',risk:'a',peso:3,norm:'Art. 183-C CT',
         opts:[{l:'A',t:'Sí, con certificados F30-1',p:3},{l:'B',t:'Verificación esporádica',p:1},{l:'C',t:'No se verifica',p:0},{l:'D',t:'No aplica',p:3}],
         cons:'La empresa principal responde solidariamente si no ejerce este derecho de información y retención.'},
        {id:'m2n3q10',text:'¿Los contratos por obra o faena (si los usa) cumplen los requisitos específicos de esta modalidad?',risk:'a',peso:3,norm:'Art. 159 N°5 CT',
         opts:[{l:'A',t:'Sí, correctamente delimitados',p:3},{l:'B',t:'Se usan de forma genérica',p:1},{l:'C',t:'No se usan contratos por obra',p:3},{l:'D',t:'No se ha revisado',p:0}],
         cons:'Un contrato por obra mal configurado puede declararse de duración indefinida, generando obligación de indemnización.'},
        {id:'m2n3q11',text:'¿El proceso de desvinculación por causales del Art. 160 CT cuenta con respaldo documental antes de invocar la causal?',risk:'a',peso:4,norm:'Art. 160 CT',
         opts:[{l:'A',t:'Sí, siempre con expediente probatorio previo',p:4},{l:'B',t:'Se invoca sin respaldo suficiente',p:1},{l:'C',t:'No se ha evaluado',p:0}],
         cons:'Invocar una causal sin prueba suficiente convierte el despido en injustificado, con recargo de hasta el 100%.'},
        {id:'m2n3q12',text:'¿Guarda copia ordenada de contratos y finiquitos de personas que ya no trabajan con usted, por al menos 5 años?',risk:'m',peso:3,norm:'Art. 510 CT',
         opts:[{l:'A',t:'Sí, archivo ordenado o digitalizado',p:3},{l:'B',t:'Guardo algunos, no todos',p:1},{l:'C',t:'No tengo un archivo ordenado',p:0}],
         cons:'Un ex trabajador puede demandar hasta varios años después. Sin respaldo documental, la empresa queda en desventaja.'},
        {id:'m2n3q13',text:'¿El RIOHS ha sido revisado por un abogado laboralista en los últimos 12-24 meses?',risk:'m',peso:3,norm:'Arts. 153-157 CT; buenas prácticas',
         opts:[{l:'A',t:'Sí, revisión reciente',p:3},{l:'B',t:'Revisión hace 1 a 3 años',p:1},{l:'C',t:'Nunca revisado por abogado',p:0}],
         cons:'Sin revisión legal periódica el RIOHS puede contener cláusulas nulas o no incorporar normativa reciente.'},
      ],
      n4:[
      {id:'m2n4q1',text:'¿Todos los trabajadores cuentan con contrato de trabajo escrito y firmado?',risk:'a',peso:5,norm:'Art. 9 CT',
       opts:[{l:'A',t:'Sí, el 100%',p:5},{l:'B',t:'Entre 90% y 99%',p:3},{l:'C',t:'Entre 70% y 89%',p:1},{l:'D',t:'Menos del 70%',p:0}],
       cons:'Multa 1 a 20 UTM por trabajador sin contrato. Riesgo de demanda por relación laboral no reconocida.'},
      {id:'m2n4q2',text:'¿Los contratos se firman dentro de los 15 días corridos desde el inicio de la relación laboral?',risk:'a',peso:4,norm:'Art. 9 CT',
       opts:[{l:'A',t:'Siempre, sin excepción',p:4},{l:'B',t:'En la mayoría de los casos',p:2},{l:'C',t:'Con retrasos frecuentes',p:1},{l:'D',t:'No se controla el plazo',p:0}],
       cons:'Multa 1 a 5 UTM. En obra o faena de menos de 30 días el plazo es 5 días corridos.'},
      {id:'m2n4q3',text:'¿Los contratos incluyen todas las estipulaciones mínimas del Art. 10 CT (funciones, jornada, remuneración, lugar de trabajo, fecha de inicio)?',risk:'a',peso:4,norm:'Art. 10 CT',
       opts:[{l:'A',t:'Sí, con plantillas legales actualizadas',p:4},{l:'B',t:'Sí, pero sin revisión legal reciente',p:2},{l:'C',t:'Faltan algunas cláusulas',p:1},{l:'D',t:'No se ha verificado',p:0}],
       cons:'Contrato incompleto puede ser impugnado. Se asume como estipulación lo que declare el trabajador (Art. 9 CT).'},
      {id:'m2n4q4',text:'¿Se suscriben anexos de contrato cada vez que cambian funciones, jornada o remuneración?',risk:'a',peso:4,norm:'Art. 11 CT',
       opts:[{l:'A',t:'Siempre, con acuerdo escrito firmado',p:4},{l:'B',t:'Solo para cambios de remuneración',p:2},{l:'C',t:'Rara vez o nunca',p:0}],
       cons:'Modificaciones no documentadas pueden configurar despido indirecto o incumplimiento grave del contrato.'},
      {id:'m2n4q5',text:'¿Las desvinculaciones incluyen carta de término y finiquito legalizado ante Inspección del Trabajo o notario?',risk:'a',peso:5,norm:'Arts. 162, 177 CT',
       opts:[{l:'A',t:'Sí, siempre con carta y finiquito legalizado',p:5},{l:'B',t:'Se emite carta pero no siempre se legaliza el finiquito',p:2},{l:'C',t:'Solo cuando el trabajador lo exige',p:1},{l:'D',t:'No se formaliza el proceso',p:0}],
       cons:'Finiquito no legalizado no libera al empleador. Carta de término omitida invalida el despido y genera indemnización sustitutiva de aviso (Art. 162 CT).'},
      {id:'m2n4q6',text:'¿Los contratos a plazo fijo se renuevan respetando el límite máximo de 1 año (o 2 años para técnicos)?',risk:'a',peso:3,norm:'Art. 159 N°4 CT',
       opts:[{l:'A',t:'Sí, siempre dentro del límite',p:3},{l:'B',t:'Algunos superan el límite',p:1},{l:'C',t:'No se controla el plazo',p:0},{l:'D',t:'No hay contratos a plazo fijo',p:3}],
       cons:'El contrato a plazo fijo que supera el límite se convierte automáticamente en indefinido.'},
      {id:'m2n4q7',text:'¿El proceso de ingreso incluye entrega formal del Reglamento Interno (RIOHS) con acuse de recibo del trabajador?',risk:'a',peso:4,norm:'Art. 156 CT',
       opts:[{l:'A',t:'Sí, con firma de recepción en el expediente de cada trabajador',p:4},{l:'B',t:'Se entrega pero sin acuse de recibo',p:1},{l:'C',t:'No se entrega formalmente',p:0}],
       cons:'El trabajador no puede ser sancionado por normas del RIOHS que no le fueron comunicadas. Sin acuse, la empresa no puede probarlo en juicio.'},
      {id:'m2n4q8',text:'¿El Reglamento Interno (RIOHS) está vigente, fue enviado a la DT y al SEREMI de Salud, e incluye las disposiciones de Ley Karin (21.643) y Ley 21.561 (jornada de 42 horas vigente desde abril 2026)?',risk:'a',peso:5,norm:'Arts. 153-156 CT; Ley 21.643; Ley 21.561',
       opts:[{l:'A',t:'Sí, actualizado con todas las normativas y enviado a organismos',p:5},{l:'B',t:'Existe pero desactualizado (más de 1 año sin revisión)',p:2},{l:'C',t:'Existe pero nunca fue enviado a DT ni SEREMI Salud',p:1},{l:'D',t:'No existe RIOHS',p:0}],
       cons:'Obligatorio para empresas con 10+ trabajadores. Multa 1 a 20 UTM. RIOHS sin Ley Karin es sancionable desde el 01-ago-2024.'},
      {id:'m2n4q9',text:'¿Los contratos de trabajadores extranjeros verifican la visa de trabajo vigente y cumplen la normativa migratoria?',risk:'a',peso:3,norm:'Ley 21.325; Art. 10 CT',
       opts:[{l:'A',t:'Sí, se verifica situación migratoria y visa antes de contratar',p:3},{l:'B',t:'Solo a veces',p:1},{l:'C',t:'No se controla',p:0},{l:'D',t:'No hay trabajadores extranjeros',p:3}],
       cons:'Contratar extranjero sin visa de trabajo puede acarrear multas al empleador y expulsión del trabajador.'},
      {id:'m2n4q10',text:'¿Los contratos de trabajadores que prestan servicios bajo régimen de subcontratación cumplen con la Ley 20.123 (registro, comunicación a la empresa principal)?',risk:'a',peso:3,norm:'Arts. 183-A a 183-E CT; Ley 20.123',
       opts:[{l:'A',t:'Sí, con comunicación formal a la empresa principal',p:3},{l:'B',t:'Parcialmente, sin comunicación formal',p:1},{l:'C',t:'No se cumple',p:0},{l:'D',t:'No aplica (no hay subcontratación)',p:3}],
       cons:'Sin cumplir estos requisitos, la empresa principal puede ser declarada responsable solidaria o subsidiaria de las obligaciones laborales y previsionales del contratista.'},
      {id:'m2n4q11',text:'¿Se verifica periódicamente el cumplimiento laboral y previsional de los contratistas y subcontratistas (Art. 183-C CT)?',risk:'a',peso:3,norm:'Art. 183-C CT',
       opts:[{l:'A',t:'Sí, con certificados F30-1 mensuales',p:3},{l:'B',t:'Verificación esporádica',p:1},{l:'C',t:'No se verifica',p:0},{l:'D',t:'No aplica',p:3}],
       cons:'La empresa principal responde solidariamente si no ejerce este derecho de información y retención sobre el contratista incumplidor.'},
      {id:'m2n4q12',text:'¿Los contratos por obra o faena cumplen con los requisitos específicos de esta modalidad (objeto determinado, duración ligada a la obra)?',risk:'a',peso:3,norm:'Art. 159 N°5 CT',
       opts:[{l:'A',t:'Sí, contratos correctamente delimitados al objeto de la obra',p:3},{l:'B',t:'Se usan de forma genérica sin delimitación clara',p:1},{l:'C',t:'No se usan contratos por obra o faena',p:3},{l:'D',t:'No se ha revisado',p:0}],
       cons:'Un contrato por obra mal configurado puede ser declarado de duración indefinida, generando obligación de pagar indemnización por años de servicio.'},
      {id:'m2n4q13',text:'¿Los contratos de trabajadores adolescentes (15 a 17 años) cuentan con autorización del representante legal y cumplen los límites de jornada y actividades permitidas?',risk:'a',peso:3,norm:'Arts. 13-18 CT',
       opts:[{l:'A',t:'Sí, con autorización y límites respetados',p:3},{l:'B',t:'No hay trabajadores menores de edad',p:3},{l:'C',t:'Hay menores sin autorización formal',p:0},{l:'D',t:'No se ha revisado',p:0}],
       cons:'Contratar adolescentes sin autorización o en actividades prohibidas (nocturnas, peligrosas) puede configurar trabajo infantil ilegal con denuncia penal.'},
      {id:'m2n4q14',text:'¿El proceso de desvinculación por causales del Art. 160 CT (falta de probidad, injurias, etc.) cuenta con respaldo documental suficiente antes de invocar la causal?',risk:'a',peso:4,norm:'Art. 160 CT',
       opts:[{l:'A',t:'Sí, siempre con expediente probatorio previo',p:4},{l:'B',t:'Se invoca la causal sin respaldo documental suficiente',p:1},{l:'C',t:'No se ha evaluado este aspecto',p:0}],
       cons:'Invocar una causal del Art. 160 sin prueba suficiente convierte el despido en injustificado, con recargo de hasta el 100% de la indemnización.'},
      {id:'m2n4q15',text:'¿El RIOHS fue revisado y visado por un abogado laboralista en los últimos 12 meses?',risk:'a',peso:3,norm:'Arts. 153-157 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, revisión legal en los últimos 12 meses',p:3},{l:'B',t:'Revisión hace 1 a 3 años',p:1},{l:'C',t:'Más de 3 años o nunca revisado por abogado',p:0}],
       cons:'Sin revisión legal periódica el RIOHS puede contener cláusulas nulas o no incorporar normativa reciente, generando exposición ante fiscalización.'},
      {id:'m2n4q16',text:'¿La empresa controla los plazos de caducidad de 60 días hábiles para reclamar despido injustificado, evitando prolongar procesos de salida sin certeza jurídica?',risk:'m',peso:2,norm:'Art. 168 inc. final CT',
       opts:[{l:'A',t:'Sí, con seguimiento de plazos tras cada desvinculación',p:2},{l:'B',t:'No se monitorea activamente',p:0}],
       cons:'Aunque el plazo beneficia a la empresa, su desconocimiento puede llevar a negociar o pagar indemnizaciones quizás ya prescritas.'},
      ],
      n5:[
        {id:'m2n5q1',text:'¿La empresa dispone de una plataforma o sistema centralizado de gestión de contratos que alerte sobre vencimientos, renovaciones y actualizaciones requeridas?',risk:'a',peso:5,norm:'Art. 9 CT; buenas prácticas de gestión documental',
         opts:[{l:'A',t:'Sí, sistema centralizado con alertas automáticas',p:5},{l:'B',t:'Registro manual con seguimiento periódico',p:2},{l:'C',t:'No existe control sistemático de contratos',p:0}],
         cons:'A partir de 200 trabajadores, la ausencia de un sistema centralizado genera alta probabilidad de contratos vencidos, no actualizados o con cláusulas obsoletas que no reflejan la normativa vigente.'},
        {id:'m2n5q2',text:'¿Los contratos incluyen todas las estipulaciones mínimas del Art. 10 CT y han sido auditados por el área legal o RRHH en los últimos 12 meses?',risk:'a',peso:4,norm:'Art. 10 CT',
         opts:[{l:'A',t:'Sí, auditoría legal de contratos vigentes dentro del año',p:4},{l:'B',t:'Revisión parcial sin auditoría formal',p:2},{l:'C',t:'No se ha realizado revisión estructurada',p:0}],
         cons:'Contratos con cláusulas desactualizadas o incompletas exponen a impugnaciones exitosas en juicio.'},
        {id:'m2n5q3',text:'¿Se suscribe anexo de contrato en todos los casos de cambio de funciones, centro de trabajo, jornada o remuneración, con firma del trabajador?',risk:'a',peso:4,norm:'Art. 11 CT',
         opts:[{l:'A',t:'Sí, 100% de los cambios documentados con anexo firmado',p:4},{l:'B',t:'La mayoría, con algunas omisiones',p:2},{l:'C',t:'Sin procedimiento formal de anexos',p:0}],
         cons:'Modificaciones unilaterales no documentadas configuran ius variandi ilegal, exponiendo a demanda por despido indirecto.'},
        {id:'m2n5q4',text:'¿Las desvinculaciones incluyen carta de término con causal fundada, finiquito legalizado y pago íntegro de cotizaciones previo a la notificación?',risk:'a',peso:5,norm:'Arts. 162, 177 CT; Ley 19.631',
         opts:[{l:'A',t:'Sí, proceso estandarizado con checklist de verificación',p:5},{l:'B',t:'En la mayoría de los casos, con excepciones',p:2},{l:'C',t:'Sin procedimiento estandarizado',p:0}],
         cons:'El incumplimiento de cualquiera de estos requisitos invalida el despido, generando obligación de pago de remuneraciones mientras dura la irregularidad.'},
        {id:'m2n5q5',text:'¿El RIOHS ha sido actualizado en los últimos 6 meses, incorporando Ley Karin, jornada de 42 horas (Ley 21.561) y Ley 21.719, con envío a DT y SEREMI Salud?',risk:'a',peso:5,norm:'Arts. 153-156 CT; Ley 21.643; Ley 21.561; Ley 21.719',
         opts:[{l:'A',t:'Sí, actualizado, enviado y entregado con acuse de recibo',p:5},{l:'B',t:'Actualizado pero sin envío formal o sin acuse',p:2},{l:'C',t:'Desactualizado o inexistente',p:0}],
         cons:'El RIOHS desactualizado no permite sancionar disciplinariamente ni demuestra cumplimiento ante la DT. La omisión de Ley Karin es infracción desde el 01-ago-2024.'},
        {id:'m2n5q6',text:'¿La empresa tiene definido y documentado un procedimiento de desvinculación por Art. 160 CT que exige respaldo probatorio previo a la notificación del despido?',risk:'a',peso:4,norm:'Art. 160 CT',
         opts:[{l:'A',t:'Sí, procedimiento escrito con checklist probatorio',p:4},{l:'B',t:'Informal, sin checklist documentado',p:1},{l:'C',t:'No existe procedimiento',p:0}],
         cons:'Invocar causales del Art. 160 sin respaldo suficiente genera recargo de hasta 100% sobre la indemnización, además del daño reputacional.'},
        {id:'m2n5q7',text:'¿Se verifica periódicamente el cumplimiento laboral y previsional de los contratistas mediante certificados F30-1 mensuales, con retención de fondos ante incumplimiento?',risk:'a',peso:4,norm:'Art. 183-C CT; Ley 20.123',
         opts:[{l:'A',t:'Sí, F30-1 mensual y retención documentada',p:4},{l:'B',t:'Verificación esporádica sin retención formal',p:1},{l:'C',t:'No se verifica',p:0},{l:'D',t:'No aplica (sin subcontratación)',p:4}],
         cons:'La empresa principal responde solidariamente si no ejerce el derecho de información. La retención es el mecanismo que exime esta responsabilidad.'},
        {id:'m2n5q8',text:'¿El proceso de contratación de personal incluye verificación de inhabilidades legales (ej. Registro de Condenados, inhabilitaciones para trabajar con menores)?',risk:'a',peso:3,norm:'Ley 20.594; Ley 20.981; Art. 10 CT',
         opts:[{l:'A',t:'Sí, verificación sistemática en toda contratación',p:3},{l:'B',t:'Solo para cargos específicos',p:1},{l:'C',t:'No se realiza verificación',p:0}],
         cons:'Contratar a personas con inhabilidades legales para ciertos cargos (especialmente en rubros con atención a menores o personas vulnerables) genera responsabilidad penal y civil de la empresa.'},
        {id:'m2n5q9',text:'¿La empresa tiene política de confidencialidad y no divulgación firmada por todos los trabajadores, incluyendo cláusulas de propiedad intelectual si corresponde?',risk:'m',peso:3,norm:'Art. 10 CT; Ley 19.628',
         opts:[{l:'A',t:'Sí, incorporada en contrato o anexo firmado',p:3},{l:'B',t:'Para algunos cargos, no en general',p:1},{l:'C',t:'No existe',p:0}],
         cons:'Sin cláusula de confidencialidad firmada, la empresa no puede perseguir legalmente la divulgación de información sensible por parte de ex trabajadores.'},
        {id:'m2n5q10',text:'¿Existe un procedimiento formal de desvinculación masiva (reestructuración) que cumpla los plazos y requisitos del Art. 163 bis CT para empresas con 10+ trabajadores afectados?',risk:'a',peso:3,norm:'Art. 163 bis CT',
         opts:[{l:'A',t:'Sí, con procedimiento documentado y asesoría legal',p:3},{l:'B',t:'No hay antecedentes de reestructuración',p:3},{l:'C',t:'Sin procedimiento definido',p:0}],
         cons:'La desvinculación masiva sin cumplir el procedimiento del Art. 163 bis puede declararse nula por el tribunal, con reintegro forzoso y pago retroactivo de remuneraciones.'},
        {id:'m2n5q11',text:'¿Los contratos de trabajadores en régimen de teletrabajo cumplen con todos los requisitos de la Ley 21.220 (acuerdo escrito, derecho a desconexión, provisión de equipos)?',risk:'a',peso:3,norm:'Ley 21.220; Arts. 152 quáter G-L CT',
         opts:[{l:'A',t:'Sí, anexos específicos de teletrabajo vigentes',p:3},{l:'B',t:'Sin teletrabajo formal en la empresa',p:3},{l:'C',t:'Teletrabajo informal sin documentación',p:0}],
         cons:'El teletrabajo sin contrato escrito se rige por las normas generales pero la empresa no puede exigir disponibilidad fuera de jornada ni fijar horario de supervisión sin acuerdo.'},
        {id:'m2n5q12',text:'¿La empresa tiene procedimiento formal para la gestión de licencias médicas, incluyendo control de plazos, cálculo del subsidio y recuperación de costos ante la CCAF o FONASA?',risk:'m',peso:2,norm:'DFL 44; Circulares SUSESO',
         opts:[{l:'A',t:'Sí, procedimiento documentado con responsable designado',p:2},{l:'B',t:'Gestión informal caso a caso',p:1},{l:'C',t:'Sin control formal de licencias',p:0}],
         cons:'La mala gestión de licencias médicas genera costos no recuperados del subsidio y problemas en el cálculo de remuneraciones durante el período de licencia.'},
        {id:'m2n5q13',text:'¿El RIOHS fue revisado por un abogado laboralista en los últimos 6 meses y cuenta con opinión legal documentada sobre su conformidad con la normativa 2026?',risk:'a',peso:3,norm:'Arts. 153-157 CT; buenas prácticas',
         opts:[{l:'A',t:'Sí, revisión legal documentada dentro del semestre',p:3},{l:'B',t:'Revisión hace más de 6 meses',p:1},{l:'C',t:'Sin revisión legal reciente',p:0}],
         cons:'Para empresas medianas, el RIOHS es el primer documento que solicita la DT en una fiscalización. Sin revisión semestral, es probable que contenga disposiciones ilegales o desactualizadas.'},
      ],
      n6:[
        {id:'m2n6q1',text:'¿La empresa dispone de un sistema de gestión documental laboral centralizado (HRIS) con alertas automáticas, trazabilidad de versiones y acceso segmentado por roles?',risk:'a',peso:5,norm:'Art. 9 CT; Ley 21.719; buenas prácticas corporativas',
         opts:[{l:'A',t:'Sí, HRIS integrado con control de versiones y alertas',p:5},{l:'B',t:'Sistema parcial sin integración completa',p:2},{l:'C',t:'Gestión manual o en hojas de cálculo',p:0}],
         cons:'Sin HRIS integrado, es imposible garantizar consistencia documental en más de 500 trabajadores, generando riesgos de inconsistencias detectables en auditorías o fiscalizaciones.'},
        {id:'m2n6q2',text:'¿Todos los contratos incluyen estipulaciones mínimas Art. 10 CT y han sido auditados por el área legal con informe de brechas en los últimos 6 meses?',risk:'a',peso:5,norm:'Art. 10 CT',
         opts:[{l:'A',t:'Sí, auditoría jurídica formal con informe escrito semestral',p:5},{l:'B',t:'Revisión parcial sin informe formal',p:2},{l:'C',t:'Sin auditoría estructurada',p:0}],
         cons:'La auditoría jurídica de contratos en gran empresa debe ser semestral y documentada. Cada brecha contractual no detectada es un pasivo latente que escala con el número de trabajadores.'},
        {id:'m2n6q3',text:'¿Se suscriben anexos de contrato en 100% de los casos de cambio de condiciones, con firma electrónica avanzada o firma física dentro de los 15 días del cambio?',risk:'a',peso:4,norm:'Art. 11 CT; Ley 19.799 (firma electrónica)',
         opts:[{l:'A',t:'Sí, 100% documentado con firma dentro del plazo',p:4},{l:'B',t:'Mayoría documentada, con excepciones trazadas',p:2},{l:'C',t:'Sin control sistemático de plazos',p:0}],
         cons:'A escala de 500+ trabajadores, incluso un 5% de omisión en anexos representa decenas de trabajadores con contratos que no reflejan su realidad, generando pasivos significativos.'},
        {id:'m2n6q4',text:'¿El proceso de desvinculación cuenta con checklist legal validado por abogado, aprobación del gerente de RRHH y registro auditado de todas las salidas?',risk:'a',peso:5,norm:'Arts. 162, 177, 168 CT; Ley 19.631',
         opts:[{l:'A',t:'Sí, checklist aprobado, proceso auditado y registro centralizado',p:5},{l:'B',t:'Proceso documentado sin auditoría formal',p:2},{l:'C',t:'Sin proceso estandarizado',p:0}],
         cons:'En gran empresa, cada desvinculación mal procesada puede transformarse en una demanda de alto impacto y eventual acción de clase (demanda colectiva) si el error es sistémico.'},
        {id:'m2n6q5',text:'¿El RIOHS es actualizado semestralmente, con revisión legal documentada, envío a DT y SEREMI Salud, y entrega digital verificable a todos los trabajadores?',risk:'a',peso:5,norm:'Arts. 153-156 CT; Ley 21.643; Ley 21.561; Ley 21.719',
         opts:[{l:'A',t:'Sí, proceso documentado semestral con verificación de entrega',p:5},{l:'B',t:'Actualizado pero sin verificación de entrega a todos',p:2},{l:'C',t:'Sin actualización sistemática',p:0}],
         cons:'En gran empresa, la entrega del RIOHS debe ser verificable individualmente. La DT exigirá esta evidencia ante cualquier denuncia o fiscalización.'},
        {id:'m2n6q6',text:'¿La empresa tiene un gobierno documental laboral definido, con propietarios de proceso, SLAs de actualización y auditoría interna anual de cumplimiento contractual?',risk:'a',peso:4,norm:'Buenas prácticas corporativas; Arts. 505, 9-11 CT',
         opts:[{l:'A',t:'Sí, gobierno documental formal con SLAs y auditoría anual',p:4},{l:'B',t:'Proceso informal sin SLAs ni auditoría',p:1},{l:'C',t:'Sin gobierno documental',p:0}],
         cons:'Sin gobierno documental, la empresa no puede demostrar ante un auditor externo o la DT que sus contratos están actualizados y son consistentes en todos sus centros de trabajo.'},
        {id:'m2n6q7',text:'¿El programa de subcontratación tiene un responsable designado, verificación mensual de F30-1 y protocolo de retención de fondos ante incumplimientos del contratista?',risk:'a',peso:4,norm:'Arts. 183-A a 183-E CT; Ley 20.123',
         opts:[{l:'A',t:'Sí, programa formal con responsable, F30-1 y protocolo de retención',p:4},{l:'B',t:'Verificación esporádica sin protocolo',p:1},{l:'C',t:'Sin programa de gestión de subcontratación',p:0},{l:'D',t:'No aplica (sin subcontratación)',p:4}],
         cons:'La responsabilidad solidaria en subcontratación es automática si no se ejerce el derecho de retención. En gran empresa con múltiples contratistas, el riesgo es multiplicado.'},
        {id:'m2n6q8',text:'¿La empresa tiene política formal de teletrabajo que cumple íntegramente la Ley 21.220, con registro de acuerdos, provisión de equipos documentada y derecho a desconexión operativo?',risk:'a',peso:3,norm:'Ley 21.220; Arts. 152 quáter G-L CT',
         opts:[{l:'A',t:'Sí, política formal implementada y auditada',p:3},{l:'B',t:'Sin teletrabajo formal',p:3},{l:'C',t:'Teletrabajo informal sin documentación',p:0}],
         cons:'El teletrabajo no formalizado en gran empresa puede involucrar a cientos de trabajadores con jornadas y condiciones no documentadas, generando pasivos masivos.'},
        {id:'m2n6q9',text:'¿Todos los trabajadores en roles sensibles tienen firmados acuerdos de confidencialidad, no competencia (donde corresponda) y protección de datos personales?',risk:'m',peso:3,norm:'Art. 10 CT; Ley 19.628; Ley 21.719',
         opts:[{l:'A',t:'Sí, acuerdos específicos por rol con firma digital',p:3},{l:'B',t:'Solo para algunos cargos directivos',p:1},{l:'C',t:'Sin acuerdos específicos',p:0}],
         cons:'La filtración de información sensible por un ex trabajador sin cláusula de confidencialidad genera solo responsabilidad civil general, sin los mecanismos específicos de la cláusula.'},
        {id:'m2n6q10',text:'¿El proceso de verificación de inhabilidades legales (Registro de Condenados, Ley 20.594) es sistemático y documentado para toda nueva contratación?',risk:'a',peso:3,norm:'Ley 20.594; Ley 20.981',
         opts:[{l:'A',t:'Sí, verificación automática integrada al proceso de onboarding',p:3},{l:'B',t:'Verificación manual para cargos específicos',p:1},{l:'C',t:'Sin verificación sistemática',p:0}],
         cons:'Una contratación sin verificar inhabilidades puede exponer a la empresa a responsabilidad penal si el trabajador comete delitos en contextos habilitados por la empresa.'},
        {id:'m2n6q11',text:'¿La empresa tiene procedimiento formal y protocolo legal definido para desvinculaciones masivas (Art. 163 bis CT), incluyendo comunicación al sindicato, OMIL y SEREMI de Trabajo?',risk:'a',peso:3,norm:'Art. 163 bis CT; DS 32/2018',
         opts:[{l:'A',t:'Sí, protocolo formal documentado y practicado',p:3},{l:'B',t:'Sin antecedentes de reestructuración',p:3},{l:'C',t:'Sin protocolo formal',p:0}],
         cons:'En gran empresa, una reestructuración sin seguir el procedimiento del Art. 163 bis expone a demandas colectivas y nulidades de todos los despidos involucrados.'},
        {id:'m2n6q12',text:'¿El área legal o de RRHH monitorea activamente los plazos de caducidad (60 días hábiles) y prescripción (2 años) para acciones laborales de ex trabajadores?',risk:'m',peso:2,norm:'Arts. 168, 510 CT',
         opts:[{l:'A',t:'Sí, sistema de alertas con responsable designado',p:2},{l:'B',t:'Seguimiento informal',p:1},{l:'C',t:'Sin monitoreo activo',p:0}],
         cons:'El monitoreo activo de plazos permite cerrar contingencias latentes oportunamente y evitar negociaciones o pagos de deudas ya prescritas.'},
        {id:'m2n6q13',text:'¿Los contratos de trabajo han sido revisados para asegurar que no contienen cláusulas nulas de pleno derecho (renuncia anticipada de derechos, modificación unilateral de condiciones)?',risk:'a',peso:3,norm:'Art. 5 CT; Art. 311 CT',
         opts:[{l:'A',t:'Sí, revisión jurídica con certificación de ausencia de cláusulas nulas',p:3},{l:'B',t:'Revisión parcial',p:1},{l:'C',t:'Sin revisión específica',p:0}],
         cons:'Las cláusulas nulas de pleno derecho en contratos de gran empresa pueden generar demandas colectivas o nulidades que afecten a todos los trabajadores de la compañía.'},
        {id:'m2n6q14',text:'¿Existe un programa formal de gestión de licencias médicas con métricas de ausentismo, detección de patrones y coordinación con organismos de salud?',risk:'m',peso:2,norm:'DFL 44; Circulares SUSESO; Arts. 44, 196 CT',
         opts:[{l:'A',t:'Sí, programa formal con KPIs y reporte a gerencia',p:2},{l:'B',t:'Seguimiento básico sin métricas formales',p:1},{l:'C',t:'Sin programa de gestión',p:0}],
         cons:'El ausentismo por licencias médicas sin control puede superar el 5% en empresas grandes, representando millones en costos no recuperados del sistema de salud.'},
      ],
    },
    questions:[
      {id:'m2q1',text:'¿Todos los trabajadores cuentan con contrato de trabajo escrito y firmado?',risk:'a',peso:5,norm:'Art. 9 CT',
       opts:[{l:'A',t:'Sí, el 100%',p:5},{l:'B',t:'Entre 90% y 99%',p:3},{l:'C',t:'Entre 70% y 89%',p:1},{l:'D',t:'Menos del 70%',p:0}],
       cons:'Multa 1 a 20 UTM por trabajador sin contrato. Riesgo de demanda por relación laboral no reconocida.'},
      {id:'m2q2',text:'¿Los contratos se firman dentro de los 15 días corridos desde el inicio de la relación laboral?',risk:'a',peso:4,norm:'Art. 9 CT',
       opts:[{l:'A',t:'Siempre, sin excepción',p:4},{l:'B',t:'En la mayoría de los casos',p:2},{l:'C',t:'Con retrasos frecuentes',p:1},{l:'D',t:'No se controla el plazo',p:0}],
       cons:'Multa 1 a 5 UTM. En obra o faena de menos de 30 días el plazo es 5 días corridos.'},
      {id:'m2q3',text:'¿Los contratos incluyen todas las estipulaciones mínimas del Art. 10 CT (funciones, jornada, remuneración, lugar de trabajo, fecha de inicio)?',risk:'a',peso:4,norm:'Art. 10 CT',
       opts:[{l:'A',t:'Sí, con plantillas legales actualizadas',p:4},{l:'B',t:'Sí, pero sin revisión legal reciente',p:2},{l:'C',t:'Faltan algunas cláusulas',p:1},{l:'D',t:'No se ha verificado',p:0}],
       cons:'Contrato incompleto puede ser impugnado. Se asume como estipulación lo que declare el trabajador (Art. 9 CT).'},
      {id:'m2q4',text:'¿Se suscriben anexos de contrato cada vez que cambian funciones, jornada o remuneración?',risk:'a',peso:4,norm:'Art. 11 CT',
       opts:[{l:'A',t:'Siempre, con acuerdo escrito firmado',p:4},{l:'B',t:'Solo para cambios de remuneración',p:2},{l:'C',t:'Rara vez o nunca',p:0}],
       cons:'Modificaciones no documentadas pueden configurar despido indirecto o incumplimiento grave del contrato.'},
      {id:'m2q5',text:'¿Las desvinculaciones incluyen carta de término y finiquito legalizado ante Inspección del Trabajo o notario?',risk:'a',peso:5,norm:'Arts. 162, 177 CT',
       opts:[{l:'A',t:'Sí, siempre con carta y finiquito legalizado',p:5},{l:'B',t:'Se emite carta pero no siempre se legaliza el finiquito',p:2},{l:'C',t:'Solo cuando el trabajador lo exige',p:1},{l:'D',t:'No se formaliza el proceso',p:0}],
       cons:'Finiquito no legalizado no libera al empleador. Carta de término omitida invalida el despido y genera indemnización sustitutiva de aviso (Art. 162 CT).'},
      {id:'m2q6',text:'¿Existen contratos o anexos específicos para teletrabajadores conforme a Ley 21.220?',risk:'a',peso:3,norm:'Ley 21.220; Arts. 152 quáter CT',
       opts:[{l:'A',t:'Sí, con anexos firmados para todos los teletrabajadores',p:3},{l:'B',t:'Hay teletrabajadores sin anexo',p:0},{l:'C',t:'No hay teletrabajadores',p:3}],
       cons:'Teletrabajadores sin contrato específico exponen a la empresa a multas y reclamos por condiciones laborales.'},
      {id:'m2q7',text:'¿Los contratos a plazo fijo se renuevan respetando el límite máximo de 1 año (o 2 años para técnicos)?',risk:'a',peso:3,norm:'Art. 159 N°4 CT',
       opts:[{l:'A',t:'Sí, siempre dentro del límite',p:3},{l:'B',t:'Algunos superan el límite',p:1},{l:'C',t:'No se controla el plazo',p:0},{l:'D',t:'No hay contratos a plazo fijo',p:3}],
       cons:'El contrato a plazo fijo que supera el límite se convierte automáticamente en indefinido.'},
      {id:'m2q8',text:'¿El proceso de ingreso incluye entrega formal del Reglamento Interno (RIOHS) con acuse de recibo del trabajador?',risk:'a',peso:4,norm:'Art. 156 CT',
       opts:[{l:'A',t:'Sí, con firma de recepción en el expediente de cada trabajador',p:4},{l:'B',t:'Se entrega pero sin acuse de recibo',p:1},{l:'C',t:'No se entrega formalmente',p:0}],
       cons:'El trabajador no puede ser sancionado por normas del RIOHS que no le fueron comunicadas. Sin acuse, la empresa no puede probarlo en juicio.'},
      {id:'m2q9',text:'¿El Reglamento Interno (RIOHS) está vigente, fue enviado a la DT y al SEREMI de Salud, e incluye las disposiciones de Ley Karin (21.643) y Ley 21.561 (jornada de 42 horas vigente desde abril 2026)?',risk:'a',peso:5,norm:'Arts. 153-156 CT; Ley 21.643; Ley 21.561',
       opts:[{l:'A',t:'Sí, actualizado con todas las normativas y enviado a organismos',p:5},{l:'B',t:'Existe pero desactualizado (más de 1 año sin revisión)',p:2},{l:'C',t:'Existe pero nunca fue enviado a DT ni SEREMI Salud',p:1},{l:'D',t:'No existe RIOHS',p:0}],
       cons:'Obligatorio para empresas con 10+ trabajadores. Multa 1 a 20 UTM. RIOHS sin Ley Karin es sancionable desde el 01-ago-2024.'},
      {id:'m2q10',text:'¿El RIOHS define claramente el procedimiento disciplinario, la escala de sanciones y las prohibiciones específicas para la actividad de la empresa?',risk:'a',peso:3,norm:'Art. 154 N°10 CT',
       opts:[{l:'A',t:'Sí, con tipificación detallada y proporcionalidad',p:3},{l:'B',t:'Sanciones genéricas sin procedimiento claro',p:1},{l:'C',t:'No hay escala ni procedimiento',p:0},{l:'D',t:'No existe RIOHS',p:0}],
       cons:'Sin escala de sanciones, el despido por falta grave puede declararse injustificado en juicio.'},
      {id:'m2q11',text:'¿Los contratos de trabajadores extranjeros verifican la visa de trabajo vigente y cumplen la normativa migratoria?',risk:'a',peso:3,norm:'Ley 21.325; Art. 10 CT',
       opts:[{l:'A',t:'Sí, se verifica situación migratoria y visa antes de contratar',p:3},{l:'B',t:'Solo a veces',p:1},{l:'C',t:'No se controla',p:0},{l:'D',t:'No hay trabajadores extranjeros',p:3}],
       cons:'Contratar extranjero sin visa de trabajo puede acarrear multas al empleador y expulsión del trabajador.'},
      {id:'m2q12',text:'¿Los traslados de lugar de trabajo se acuerdan por escrito con el trabajador (no se imponen unilateralmente sin justificación)?',risk:'a',peso:3,norm:'Art. 12 CT',
       opts:[{l:'A',t:'Siempre con acuerdo escrito o justificación fundada',p:3},{l:'B',t:'Se comunican verbalmente',p:1},{l:'C',t:'Se imponen sin acuerdo ni justificación',p:0}],
       cons:'El traslado unilateral no justificado puede configurar despido indirecto (Art. 171 CT).'},
      {id:'m2q13',text:'¿Los datos personales de trabajadores se tratan con confidencialidad y la empresa tiene política de privacidad interna?',risk:'m',peso:2,norm:'Ley 19.628; Ley 21.719 (vigencia 1-dic-2026)',
       opts:[{l:'A',t:'Sí, con política escrita y comunicada',p:2},{l:'B',t:'Confidencialidad informal sin política',p:1},{l:'C',t:'No existe política',p:0}],
       cons:'La Ley 21.719 entra en vigencia el 1-dic-2026 con multas de hasta 20.000 UTM. Comience la adecuación ahora.'},
      {id:'m2q14',text:'¿Los cambios normativos relevantes (Ley 21.561 de reducción de jornada (42 horas vigente), Ley Karin) ya están reflejados en los contratos y documentación laboral vigente?',risk:'a',peso:4,norm:'Ley 21.561; Ley 21.643; Arts. 9-10 CT',
       opts:[{l:'A',t:'Sí, contratos y documentación actualizados',p:4},{l:'B',t:'Solo algunos actualizados',p:2},{l:'C',t:'No se han actualizado',p:0}],
       cons:'Contratos que no reflejen la jornada de 42 horas vigente o los procedimientos Ley Karin generan incumplimiento inmediato.'},
      // 3 preguntas RIOHS integradas (fusión del módulo original)
      {id:'m2q15',text:'¿El RIOHS incluye política de uso de tecnología (correos, equipos, internet, redes sociales) y videovigilancia con aviso a los trabajadores?',risk:'m',peso:2,norm:'Art. 154 N°5 CT; Ley 19.628; Ley 21.719',
       opts:[{l:'A',t:'Sí, con política digital clara y conocida por todos',p:2},{l:'B',t:'Mención superficial sin detalle',p:1},{l:'C',t:'No incluye',p:0}],
       cons:'Sin política de uso de tecnología, la empresa no puede revisar correos o equipos corporativos ni tiene control sobre el uso de redes sociales en horario laboral.'},
      {id:'m2q16',text:'¿El RIOHS fue revisado y visado por un abogado laboralista en los últimos 12 meses?',risk:'a',peso:3,norm:'Arts. 153-157 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, revisión legal en los últimos 12 meses',p:3},{l:'B',t:'Revisión hace 1 a 3 años',p:1},{l:'C',t:'Más de 3 años o nunca revisado por abogado',p:0}],
       cons:'Sin revisión legal periódica el RIOHS puede contener cláusulas nulas o no incorporar normativa reciente, generando exposición ante fiscalización.'},
      {id:'m2q17',text:'¿El RIOHS fue elaborado con participación del sindicato (si existe) y existe constancia del proceso de consulta?',risk:'m',peso:2,norm:'Art. 156 CT',sindical:true,
       opts:[{l:'A',t:'Sí, con proceso de observaciones documentado',p:2},{l:'B',t:'No se consultó al sindicato',p:0},{l:'C',t:'No hay sindicato',p:2}],
       cons:'El RIOHS modificado sin consulta sindical puede ser impugnado en procedimiento de tutela laboral.'},
      {id:'m2q18',text:'¿Los contratos de trabajadores que prestan servicios bajo régimen de subcontratación cumplen con la Ley 20.123 (registro, comunicación a la empresa principal)?',risk:'a',peso:3,norm:'Arts. 183-A a 183-E CT; Ley 20.123',
       opts:[{l:'A',t:'Sí, con comunicación formal a la empresa principal',p:3},{l:'B',t:'Parcialmente, sin comunicación formal',p:1},{l:'C',t:'No se cumple',p:0},{l:'D',t:'No aplica (no hay subcontratación)',p:3}],
       cons:'Sin cumplir estos requisitos, la empresa principal puede ser declarada responsable solidaria o subsidiaria de las obligaciones laborales y previsionales del contratista.'},
      {id:'m2q19',text:'¿Se verifica periódicamente el cumplimiento laboral y previsional de los contratistas y subcontratistas (Art. 183-C CT)?',risk:'a',peso:3,norm:'Art. 183-C CT',
       opts:[{l:'A',t:'Sí, con certificados F30-1 mensuales',p:3},{l:'B',t:'Verificación esporádica',p:1},{l:'C',t:'No se verifica',p:0},{l:'D',t:'No aplica',p:3}],
       cons:'La empresa principal responde solidariamente si no ejerce este derecho de información y retención sobre el contratista incumplidor.'},
      {id:'m2q20',text:'¿Los contratos por obra o faena cumplen con los requisitos específicos de esta modalidad (objeto determinado, duración ligada a la obra)?',risk:'a',peso:3,norm:'Art. 159 N°5 CT',
       opts:[{l:'A',t:'Sí, contratos correctamente delimitados al objeto de la obra',p:3},{l:'B',t:'Se usan de forma genérica sin delimitación clara',p:1},{l:'C',t:'No se usan contratos por obra o faena',p:3},{l:'D',t:'No se ha revisado',p:0}],
       cons:'Un contrato por obra mal configurado puede ser declarado de duración indefinida, generando obligación de pagar indemnización por años de servicio.'},
      {id:'m2q21',text:'¿La empresa controla los plazos de caducidad de 60 días hábiles para reclamar despido injustificado, evitando prolongar procesos de salida sin certeza jurídica?',risk:'m',peso:2,norm:'Art. 168 inc. final CT',
       opts:[{l:'A',t:'Sí, con seguimiento de plazos tras cada desvinculación',p:2},{l:'B',t:'No se monitorea activamente',p:0}],
       cons:'Aunque el plazo beneficia a la empresa, su desconocimiento puede llevar a negociar o pagar indemnizaciones quizás ya prescritas.'},
      {id:'m2q22',text:'¿Existen políticas internas sobre el uso de inteligencia artificial en procesos de selección, evaluación de desempeño o decisiones que afecten a trabajadores?',risk:'m',peso:2,norm:'Ley 21.719; principios de no discriminación algorítmica (tendencia regulatoria)',
       opts:[{l:'A',t:'Sí, con política y supervisión humana de decisiones automatizadas',p:2},{l:'B',t:'Se usa IA sin política específica',p:0},{l:'C',t:'No se usa IA en procesos de personas',p:2}],
       cons:'El uso de IA sin supervisión humana en decisiones laborales (selección, evaluación, despido) genera riesgo de discriminación algorítmica y vulneración de datos personales.'},
      {id:'m2q23',text:'¿Los contratos de trabajadores adolescentes (15 a 17 años) cuentan con autorización del representante legal y cumplen los límites de jornada y actividades permitidas?',risk:'a',peso:3,norm:'Arts. 13-18 CT',
       opts:[{l:'A',t:'Sí, con autorización y límites respetados',p:3},{l:'B',t:'No hay trabajadores menores de edad',p:3},{l:'C',t:'Hay menores sin autorización formal',p:0},{l:'D',t:'No se ha revisado',p:0}],
       cons:'Contratar adolescentes sin autorización o en actividades prohibidas (nocturnas, peligrosas) puede configurar trabajo infantil ilegal con denuncia penal.'},
      {id:'m2q24',text:'¿El proceso de desvinculación por causales del Art. 160 CT (falta de probidad, injurias, etc.) cuenta con respaldo documental suficiente antes de invocar la causal?',risk:'a',peso:4,norm:'Art. 160 CT',
       opts:[{l:'A',t:'Sí, siempre con expediente probatorio previo',p:4},{l:'B',t:'Se invoca la causal sin respaldo documental suficiente',p:1},{l:'C',t:'No se ha evaluado este aspecto',p:0}],
       cons:'Invocar una causal del Art. 160 sin prueba suficiente convierte el despido en injustificado, con recargo de hasta el 100% de la indemnización.'},
      {id:'m2q25',text:'¿Los contratos de gerentes, ejecutivos y cargos de confianza incluyen cláusulas específicas sobre exclusión de jornada y compensaciones especiales?',risk:'m',peso:2,norm:'Art. 22 inc. 2 CT',
       opts:[{l:'A',t:'Sí, cláusulas específicas y proporcionadas',p:2},{l:'B',t:'Cláusulas genéricas sin proporcionalidad',p:0},{l:'C',t:'No hay cargos de esta naturaleza',p:2}],
       cons:'La exclusión de jornada sin verdadera autonomía del cargo puede ser impugnada, generando el pago retroactivo de horas extra durante toda la relación laboral.'},
      {id:'m2q26',text:'¿Existe un procedimiento de transición documentado para fusiones, adquisiciones o cambios de razón social que resguarde la continuidad de los contratos de trabajo?',risk:'m',peso:2,norm:'Art. 4 inc. 2 CT (continuidad de la empresa)',
       opts:[{l:'A',t:'Sí, con asesoría legal en cada proceso',p:2},{l:'B',t:'No se ha enfrentado esta situación',p:2},{l:'C',t:'Se ha enfrentado sin asesoría adecuada',p:0}],
       cons:'El cambio de titular de la empresa no afecta la subsistencia de los contratos vigentes; ignorar esto puede generar despidos encubiertos y demandas masivas.'},
      {id:'m2q27',text:'¿El RIOHS y los contratos contemplan el derecho a desconexión digital fuera de la jornada laboral?',risk:'m',peso:2,norm:'Art. 32 inc. final CT (modificado por Ley 21.561)',
       opts:[{l:'A',t:'Sí, política de desconexión documentada',p:2},{l:'B',t:'No existe política',p:0}],
       cons:'La falta de respeto al derecho a desconexión puede generar el reconocimiento de horas extra por comunicaciones fuera de jornada (correos, WhatsApp laboral).'},
      {id:'m2q28',text:'¿Los contratos de trabajadores con discapacidad incluyen las certificaciones de SENADIS cuando corresponde a la cuota de inclusión?',risk:'m',peso:2,norm:'Ley 21.015',
       opts:[{l:'A',t:'Sí, certificaciones al día',p:2},{l:'B',t:'No hay trabajadores con discapacidad certificada',p:2},{l:'C',t:'Hay trabajadores sin certificación formal',p:0}],
       cons:'Sin certificación SENADIS, esos trabajadores no se pueden contabilizar válidamente para cumplir la cuota legal de inclusión laboral.'},
      {id:'m2q29',text:'¿La empresa cuenta con un archivo histórico de contratos y anexos de ex trabajadores por al menos 5 años (plazo de prescripción de acciones laborales)?',risk:'m',peso:2,norm:'Art. 510 CT (prescripción)',
       opts:[{l:'A',t:'Sí, archivo organizado por al menos 5 años',p:2},{l:'B',t:'Archivo incompleto o desorganizado',p:1},{l:'C',t:'No se conservan documentos de ex trabajadores',p:0}],
       cons:'Sin respaldo documental histórico, la empresa no puede defenderse de demandas de ex trabajadores dentro del plazo de prescripción de 2 a 5 años según la acción.'},
      {id:'m2q30',text:'¿Existe una política de bring your own device (BYOD) o uso de dispositivos personales para fines laborales con reglas claras de seguridad y privacidad?',risk:'b',peso:1,norm:'Ley 21.719; buenas prácticas de seguridad de la información',
       opts:[{l:'A',t:'Sí, política documentada',p:1},{l:'B',t:'No existe política',p:0},{l:'C',t:'No se usan dispositivos personales para el trabajo',p:1}],
       cons:'El uso no regulado de dispositivos personales para datos laborales aumenta el riesgo de filtración de información y de datos personales de otros trabajadores.'},
    ]
  },

  mod3: {
    name:'Remuneraciones y cumplimiento previsional',
    niveles:{n1:32,n2:27,n3:25,n4:29,n5:21,n6:19},
    questionsByLevel:{
      n1:[
        {id:'m3n1q1',text:'¿Todos los trabajadores reciben al menos el Sueldo Mínimo vigente?',risk:'a',peso:7,norm:'Art. 44 CT; Ley 20.281',
         opts:[{l:'A',t:'Sí, el 100%',p:7},{l:'B',t:'No estoy 100% seguro',p:2},{l:'C',t:'Sé que hay alguno bajo el mínimo',p:0}],
         cons:'Multa de 1 a 20 UTM por cada trabajador bajo el mínimo legal. Revise el monto vigente cada año en sii.cl.'},
        {id:'m3n1q2',text:'¿Entrega liquidación de sueldo por escrito y firmada cada mes?',risk:'a',peso:6,norm:'Art. 54 CT',
         opts:[{l:'A',t:'Sí, siempre',p:6},{l:'B',t:'A veces se me olvida',p:2},{l:'C',t:'No emito liquidaciones',p:0}],
         cons:'Sin liquidación firmada, usted no puede comprobar que pagó el sueldo si hay un reclamo o demanda.'},
        {id:'m3n1q3',text:'¿Paga las cotizaciones previsionales (AFP, salud) todos los meses y a tiempo?',risk:'a',peso:7,norm:'DL 3.500; Ley 17.322',
         opts:[{l:'A',t:'Sí, siempre dentro de plazo',p:7},{l:'B',t:'A veces me atraso',p:2},{l:'C',t:'Tengo cotizaciones impagas',p:0}],
         cons:'El no pago de cotizaciones es delito (Ley 17.322) y además invalida el despido aunque tenga causal justificada (Ley Bustos).'},
        {id:'m3n1q4',text:'Si despide a alguien, ¿revisa que estén pagadas todas las cotizaciones antes de notificar el despido?',risk:'a',peso:6,norm:'Ley 19.631 (Ley Bustos)',
         opts:[{l:'A',t:'Sí, siempre lo verifico',p:6},{l:'B',t:'No lo había considerado',p:1},{l:'C',t:'No reviso esto',p:0}],
         cons:'Si hay cotizaciones impagas, el despido no produce efecto y usted debe seguir pagando el sueldo hasta que se regularicen.'},
        {id:'m3n1q5',text:'¿Paga correctamente las horas extra cuando alguien trabaja más de su jornada?',risk:'a',peso:5,norm:'Art. 32 CT',
         opts:[{l:'A',t:'Sí, con recargo del 50%',p:5},{l:'B',t:'Las compenso con días libres, no con dinero',p:2},{l:'C',t:'No suelo pagarlas aparte',p:0}],
         cons:'Las horas extra se pagan con 50% de recargo sobre el sueldo. No reemplazan el pago con días libres salvo acuerdo expreso y dentro de límites legales.'},
        {id:'m3n1q7',text:'Cuando alguien deja de trabajar, ¿le paga la indemnización por años de servicio si corresponde?',risk:'a',peso:5,norm:'Art. 163 CT',
         opts:[{l:'A',t:'Sí, cuando corresponde',p:5},{l:'B',t:'No tengo claro cuándo corresponde',p:1},{l:'C',t:'Nunca la he pagado',p:0}],
         cons:'Corresponde en despidos por necesidades de la empresa o sin causa justificada, con un mes de sueldo por año trabajado (tope 11 años).'},
        {id:'m3n1q10',text:'¿Tiene contratado el seguro contra accidentes del trabajo (mutual de seguridad o ISL)?',risk:'a',peso:5,norm:'Ley 16.744',
         opts:[{l:'A',t:'Sí, está vigente y al día',p:5},{l:'B',t:'Creo que sí pero no estoy seguro',p:1},{l:'C',t:'No tengo este seguro',p:0}],
         cons:'Es obligatorio para todo empleador. Sin él, la empresa responde directamente por accidentes laborales, sin tope de cobertura.'},
      ],
      n2:[
        {id:'m3n2q1',text:'¿Todos los trabajadores reciben al menos el Sueldo Mínimo vigente?',risk:'a',peso:6,norm:'Art. 44 CT; Ley 20.281',
         opts:[{l:'A',t:'Sí, el 100%',p:6},{l:'B',t:'No estoy 100% seguro',p:2},{l:'C',t:'Sé que hay alguno bajo el mínimo',p:0}],
         cons:'Multa de 1 a 20 UTM por cada trabajador bajo el mínimo legal.'},
        {id:'m3n2q2',text:'¿Entrega liquidación de sueldo por escrito y firmada cada mes a todos los trabajadores?',risk:'a',peso:5,norm:'Art. 54 CT',
         opts:[{l:'A',t:'Sí, siempre',p:5},{l:'B',t:'A veces se me olvida con alguno',p:2},{l:'C',t:'No emito liquidaciones',p:0}],
         cons:'Sin liquidación firmada, usted no puede comprobar que pagó el sueldo si hay un reclamo o demanda.'},
        {id:'m3n2q3',text:'¿Paga las cotizaciones previsionales (AFP, salud) todos los meses y dentro del plazo legal?',risk:'a',peso:6,norm:'DL 3.500; Ley 17.322',
         opts:[{l:'A',t:'Sí, siempre dentro de plazo',p:6},{l:'B',t:'A veces me atraso',p:2},{l:'C',t:'Tengo cotizaciones impagas',p:0}],
         cons:'El no pago de cotizaciones es delito (Ley 17.322) y además invalida el despido aunque tenga causal justificada (Ley Bustos).'},
        {id:'m3n2q4',text:'Si despide a alguien, ¿revisa que estén pagadas todas las cotizaciones antes de notificar el despido?',risk:'a',peso:5,norm:'Ley 19.631 (Ley Bustos)',
         opts:[{l:'A',t:'Sí, siempre lo verifico',p:5},{l:'B',t:'No lo había considerado',p:1},{l:'C',t:'No reviso esto',p:0}],
         cons:'Si hay cotizaciones impagas, el despido no produce efecto y usted debe seguir pagando el sueldo hasta que se regularicen.'},
        {id:'m3n2q5',text:'¿Existe Libro de Remuneraciones legalizado y al día?',risk:'a',peso:3,norm:'Art. 62 CT',
         opts:[{l:'A',t:'Sí, al día y accesible',p:3},{l:'B',t:'Existe pero no siempre actualizado',p:1},{l:'C',t:'No existe',p:0}],
         cons:'Obligatorio desde 5 trabajadores. Multa 1 a 5 UTM por incumplimiento.'},
        {id:'m3n2q6',text:'¿Paga correctamente las horas extra con 50% de recargo cuando alguien trabaja más de su jornada?',risk:'a',peso:5,norm:'Art. 32 CT',
         opts:[{l:'A',t:'Sí, con recargo del 50%',p:5},{l:'B',t:'Las compenso con días libres, no con dinero',p:2},{l:'C',t:'No suelo pagarlas aparte',p:0}],
         cons:'Las horas extra se pagan con 50% de recargo sobre el sueldo, junto con la liquidación del mes.'},
        {id:'m3n2q7',text:'¿Calcula y paga correctamente la gratificación legal o el bono que la reemplaza?',risk:'m',peso:4,norm:'Arts. 47-50 CT',
         opts:[{l:'A',t:'Sí, la calculo cada año o la pago mensualmente garantizada',p:4},{l:'B',t:'No estoy seguro de cómo se calcula',p:1},{l:'C',t:'No la pago',p:0}],
         cons:'La gratificación es obligatoria si la empresa tiene utilidades. No pagarla genera cobro retroactivo con reajuste e interés.'},
        {id:'m3n2q8',text:'Cuando alguien deja de trabajar, ¿el finiquito incluye todos los haberes pendientes (vacaciones, indemnización, gratificación proporcional)?',risk:'a',peso:5,norm:'Art. 177 CT',
         opts:[{l:'A',t:'Sí, siempre completo',p:5},{l:'B',t:'A veces se omite algún concepto',p:2},{l:'C',t:'No se revisa la integralidad',p:0}],
         cons:'El finiquito incompleto no libera al empleador de las obligaciones omitidas, que pueden cobrarse después.'},
        {id:'m3n2q9',text:'¿Lleva registro del saldo de feriados (vacaciones) de cada trabajador y se otorgan oportunamente?',risk:'m',peso:3,norm:'Arts. 67-76 CT',
         opts:[{l:'A',t:'Sí, registro claro y actualizado',p:3},{l:'B',t:'Solo planilla manual, no siempre actualizada',p:1},{l:'C',t:'No existe registro de saldo',p:0}],
         cons:'Sin registro, la empresa no puede probar el otorgamiento del feriado ante un reclamo.'},
        {id:'m3n2q10',text:'¿Tiene contratado el seguro contra accidentes del trabajo (mutual de seguridad o ISL) y el seguro de cesantía cuando corresponde?',risk:'a',peso:4,norm:'Ley 16.744; Ley 19.728',
         opts:[{l:'A',t:'Sí, ambos vigentes y al día',p:4},{l:'B',t:'Solo uno de los dos',p:1},{l:'C',t:'No tengo estos seguros',p:0}],
         cons:'Ambos son obligatorios. Sin seguro de accidentes, la empresa responde directamente sin tope; sin seguro de cesantía, el trabajador pierde su prestación por desempleo.'},
      ],
      n3:[
        {id:'m3n3q1',text:'¿Todos los trabajadores reciben al menos el Sueldo Mínimo vigente, verificado periódicamente?',risk:'a',peso:5,norm:'Art. 44 CT; Ley 20.281',
         opts:[{l:'A',t:'Sí, el 100% y se verifica cada año',p:5},{l:'B',t:'La mayoría, sin verificación sistemática',p:2},{l:'C',t:'Hay trabajadores bajo el mínimo',p:0}],
         cons:'Multa de 1 a 20 UTM por cada trabajador bajo el mínimo legal.'},
        {id:'m3n3q2',text:'¿Emite liquidación de sueldo escrita y firmada por todos los trabajadores, todos los meses?',risk:'a',peso:5,norm:'Art. 54 CT',
         opts:[{l:'A',t:'Sí, siempre y archivadas',p:5},{l:'B',t:'Se emiten pero no siempre se firman',p:2},{l:'C',t:'No se emiten para todos',p:0}],
         cons:'Sin liquidación firmada, la empresa no puede probar el pago de remuneraciones ante un tribunal laboral.'},
        {id:'m3n3q3',text:'¿Las cotizaciones previsionales (AFP, Salud) se pagan dentro del plazo legal todos los meses?',risk:'a',peso:6,norm:'Art. 19 DL 3500; Ley 18.469',
         opts:[{l:'A',t:'Siempre dentro de plazo',p:6},{l:'B',t:'Con retrasos ocasionales',p:2},{l:'C',t:'Con retrasos frecuentes o deuda',p:0}],
         cons:'Cotizaciones tardías generan multas, reajustes e intereses. El no pago configura responsabilidad penal (Ley 17.322).'},
        {id:'m3n3q4',text:'Si despide a alguien, ¿verifica que estén pagadas todas las cotizaciones antes de notificar el despido?',risk:'a',peso:5,norm:'Ley 19.631 (Ley Bustos)',
         opts:[{l:'A',t:'Sí, siempre lo verifico',p:5},{l:'B',t:'No siempre',p:1},{l:'C',t:'No reviso esto',p:0}],
         cons:'Si hay cotizaciones impagas, el despido no produce efecto y debe seguir pagando el sueldo hasta regularizar.'},
        {id:'m3n3q5',text:'¿Existe Libro de Remuneraciones legalizado y actualizado?',risk:'a',peso:3,norm:'Art. 62 CT',
         opts:[{l:'A',t:'Sí, al día',p:3},{l:'B',t:'Existe pero no siempre actualizado',p:1},{l:'C',t:'No existe',p:0}],
         cons:'Obligatorio desde 5 trabajadores. Multa 1 a 5 UTM por incumplimiento.'},
        {id:'m3n3q6',text:'¿Las horas extraordinarias se autorizan por escrito y se pagan con el recargo del 50%, respetando el tope diario?',risk:'a',peso:5,norm:'Arts. 31-32 CT',
         opts:[{l:'A',t:'Sí, autorización escrita y pago correcto',p:5},{l:'B',t:'Se pagan sin autorización previa',p:2},{l:'C',t:'No se pagan o se subpagan',p:0}],
         cons:'Las horas extra no pagadas o subpagadas son la primera causa de demandas laborales en Chile.'},
        {id:'m3n3q7',text:'¿Se paga la gratificación anual conforme a Ley (25% de remuneraciones o 4,75 IMM, o mensualmente garantizada)?',risk:'a',peso:4,norm:'Arts. 47-50 CT',
         opts:[{l:'A',t:'Sí, según modalidad legal verificada',p:4},{l:'B',t:'Se paga pero sin verificar el cálculo',p:2},{l:'C',t:'No se paga o se calcula mal',p:0}],
         cons:'La gratificación no pagada o mal calculada genera cobros retroactivos con reajuste e interés.'},
        {id:'m3n3q8',text:'¿Se lleva registro del saldo de feriados (vacaciones) de cada trabajador y se otorgan oportunamente?',risk:'a',peso:4,norm:'Arts. 67-76 CT',
         opts:[{l:'A',t:'Sí, registro actualizado',p:4},{l:'B',t:'Solo planilla manual',p:2},{l:'C',t:'No existe registro',p:0}],
         cons:'Sin registro, la empresa no puede probar el otorgamiento del feriado ante un reclamo.'},
        {id:'m3n3q9',text:'¿Los finiquitos incluyen todos los haberes pendientes (vacaciones, indemnización, gratificación proporcional)?',risk:'a',peso:5,norm:'Art. 177 CT',
         opts:[{l:'A',t:'Sí, con liquidación integral verificada',p:5},{l:'B',t:'Solo algunos conceptos incluidos',p:2},{l:'C',t:'No se revisa la integralidad',p:0}],
         cons:'El finiquito incompleto no libera al empleador de las obligaciones omitidas, reclamables después.'},
        {id:'m3n3q10',text:'¿Se paga la indemnización por años de servicio en todos los despidos que la generan, correctamente calculada?',risk:'a',peso:5,norm:'Arts. 163, 168 CT',
         opts:[{l:'A',t:'Sí, siempre que corresponde y bien calculada',p:5},{l:'B',t:'A veces se omite o calcula mal',p:2},{l:'C',t:'No siempre se paga',p:0}],
         cons:'No pago de indemnización genera demanda con recargo del 30% al 100% según causal.'},
        {id:'m3n3q11',text:'¿Los descuentos aplicados en liquidaciones cuentan con autorización escrita y respetan el límite del 15% para créditos sociales?',risk:'a',peso:3,norm:'Art. 58 CT',
         opts:[{l:'A',t:'Sí, todos autorizados y dentro del límite',p:3},{l:'B',t:'La mayoría autorizados',p:1},{l:'C',t:'No se obtiene autorización',p:0}],
         cons:'Descuentos no autorizados pueden ser exigidos en devolución con reajuste e interés.'},
        {id:'m3n3q12',text:'¿Tiene contratado el seguro contra accidentes del trabajo y el seguro de cesantía cuando corresponde?',risk:'a',peso:4,norm:'Ley 16.744; Ley 19.728',
         opts:[{l:'A',t:'Sí, ambos vigentes y al día',p:4},{l:'B',t:'Solo uno de los dos',p:1},{l:'C',t:'No tengo estos seguros',p:0}],
         cons:'Sin seguro de accidentes, la empresa responde directamente sin tope; sin seguro de cesantía, el trabajador pierde su prestación.'},
        {id:'m3n3q13',text:'¿Lleva control de deudas previsionales históricas y están regularizadas?',risk:'a',peso:3,norm:'Arts. 19-22 DL 3500',
         opts:[{l:'A',t:'No hay deuda; cotizaciones al día',p:3},{l:'B',t:'Hay deuda en proceso de regularización',p:1},{l:'C',t:'Hay deuda sin plan',p:0}],
         cons:'La deuda previsional genera juicio ejecutivo, embargo de bienes y responsabilidad penal del representante legal.'},
      ],
      n4:[
      {id:'m3n4q1',text:'¿Todos los trabajadores reciben a lo menos el Ingreso Mínimo Mensual (IMM) vigente?',risk:'a',peso:5,norm:'Art. 44 CT; Ley 20.281',
       opts:[{l:'A',t:'Sí, el 100%',p:5},{l:'B',t:'La mayoría, con excepciones',p:2},{l:'C',t:'No se verifica periódicamente',p:1},{l:'D',t:'Hay trabajadores bajo el IMM',p:0}],
       cons:'Multa 1 a 20 UTM por cada trabajador bajo el IMM. Actualice el IMM vigente cada año.'},
      {id:'m3n4q2',text:'¿Se emiten liquidaciones de sueldo escritas y firmadas por todos los trabajadores todos los meses?',risk:'a',peso:5,norm:'Art. 54 CT',
       opts:[{l:'A',t:'Sí, emitidas, firmadas y conservadas mensualmente',p:5},{l:'B',t:'Se emiten pero no siempre se firman',p:2},{l:'C',t:'Solo para algunos trabajadores',p:1},{l:'D',t:'No se emiten',p:0}],
       cons:'Sin liquidación firmada la empresa no puede probar el pago de remuneraciones ante un tribunal laboral.'},
      {id:'m3n4q3',text:'¿Las cotizaciones previsionales (AFP, Salud) se pagan dentro del plazo legal (hasta el día 10 del mes siguiente)?',risk:'a',peso:6,norm:'Art. 19 DL 3500; Ley 18.469',
       opts:[{l:'A',t:'Siempre dentro del plazo, sin excepción',p:6},{l:'B',t:'Con retrasos ocasionales (1-2 veces al año)',p:3},{l:'C',t:'Con retrasos frecuentes',p:1},{l:'D',t:'No se monitorea el plazo',p:0}],
       cons:'Cotizaciones tardías generan multas, reajustes e intereses. Retención y no entero de cotizaciones configura responsabilidad penal del representante legal (Art. 13 Ley 17.322).'},
      {id:'m3n4q4',text:'¿Existe Libro de Remuneraciones legalizado y actualizado?',risk:'a',peso:3,norm:'Art. 62 CT',
       opts:[{l:'A',t:'Sí, al día y accesible',p:3},{l:'B',t:'Existe pero no siempre actualizado',p:1},{l:'C',t:'No existe',p:0}],
       cons:'Obligatorio para empresas con 5+ trabajadores. Multa 1 a 5 UTM por incumplimiento.'},
      {id:'m3n4q5',text:'¿Las horas extraordinarias se autorizan por escrito previamente y se pagan con el recargo del 50%?',risk:'a',peso:5,norm:'Art. 32 CT',
       opts:[{l:'A',t:'Sí, autorización escrita y pago correcto con 50% recargo',p:5},{l:'B',t:'Se pagan pero sin autorización escrita previa',p:2},{l:'C',t:'Se pagan sin el recargo correcto',p:1},{l:'D',t:'No se pagan',p:0}],
       cons:'Las horas extra no pagadas o subpagadas son la primera causa de demandas laborales en Chile.'},
      {id:'m3n4q6',text:'¿Se paga la gratificación anual conforme a Ley (25% de remuneraciones o 4,75 IMM mensual)?',risk:'a',peso:5,norm:'Arts. 47-50 CT',
       opts:[{l:'A',t:'Sí, según modalidad legal verificada anualmente',p:5},{l:'B',t:'Se paga mensualmente garantizada (Art. 50 CT)',p:5},{l:'C',t:'No se paga o se calcula incorrectamente',p:0}],
       cons:'La gratificación no pagada o mal calculada genera cobros retroactivos de varios años con reajuste e intereses.'},
      {id:'m3n4q7',text:'¿Se lleva registro actualizado del saldo de feriados (vacaciones) de cada trabajador y se otorgan oportunamente?',risk:'a',peso:4,norm:'Arts. 67-76 CT',
       opts:[{l:'A',t:'Sí, registro en sistema informático con alertas',p:4},{l:'B',t:'Solo planilla manual, no siempre actualizada',p:2},{l:'C',t:'No existe registro de saldo',p:0}],
       cons:'Sin registro, la empresa no puede probar el otorgamiento del feriado. El reemplazo del feriado por dinero sin término del contrato es nulo de pleno derecho (Art. 73 CT).'},
      {id:'m3n4q8',text:'¿Los descuentos aplicados en liquidaciones cuentan con autorización escrita del trabajador y respetan el límite del 15% para créditos sociales?',risk:'a',peso:4,norm:'Art. 58 CT',
       opts:[{l:'A',t:'Sí, todos autorizados y dentro del límite legal',p:4},{l:'B',t:'La mayoría autorizados, con excepciones',p:2},{l:'C',t:'No se obtiene autorización',p:0}],
       cons:'Descuentos no autorizados pueden ser exigidos en devolución con reajuste e interés.'},
      {id:'m3n4q9',text:'¿Los finiquitos incluyen todos los haberes pendientes (vacaciones proporcionales, indemnizaciones, gratificación proporcional, bonos adeudados)?',risk:'a',peso:5,norm:'Art. 177 CT',
       opts:[{l:'A',t:'Sí, con liquidación integral verificada por RRHH',p:5},{l:'B',t:'Solo algunos conceptos incluidos',p:2},{l:'C',t:'No se revisa la integralidad del finiquito',p:0}],
       cons:'El finiquito incompleto no libera al empleador de las obligaciones omitidas. El trabajador puede demandar las diferencias sin plazo de caducidad para algunos conceptos.'},
      {id:'m3n4q10',text:'¿Se paga la indemnización por años de servicio en todos los despidos que la generan, correctamente calculada?',risk:'a',peso:5,norm:'Arts. 163, 168 CT',
       opts:[{l:'A',t:'Sí, siempre que corresponde y con cálculo correcto',p:5},{l:'B',t:'A veces se omite o se calcula con base incorrecta',p:2},{l:'C',t:'No siempre se paga o se subestima',p:0}],
       cons:'No pago de indemnización genera demanda con recargo del 30% al 100% según causal (Art. 168 CT).'},
      {id:'m3n4q11',text:'¿La empresa lleva control de deudas previsionales históricas y están regularizadas?',risk:'a',peso:4,norm:'Arts. 19-22 DL 3500',
       opts:[{l:'A',t:'No hay deuda previsional; cotizaciones al día',p:4},{l:'B',t:'Hay deuda histórica en proceso de regularización',p:1},{l:'C',t:'Hay deuda sin plan de regularización',p:0}],
       cons:'La deuda previsional genera juicio ejecutivo previsional, embargo de bienes y responsabilidad penal del representante legal.'},
      {id:'m3n4q12',text:'¿La remuneración íntegra se mantiene durante los períodos de licencia médica (no se descuenta más allá del subsidio)?',risk:'a',peso:3,norm:'Art. 198 CT; DFL 44',
       opts:[{l:'A',t:'Sí, solo se descuenta el subsidio, no el sueldo base',p:3},{l:'B',t:'No siempre se gestiona correctamente',p:0}],
       cons:'Descuento improcedente de remuneración durante licencia médica genera cobro posterior con reajuste e interés.'},
      {id:'m3n4q13',text:'¿Los trabajadores de jornada parcial reciben el IMM proporcional a su jornada y sus cotizaciones se calculan correctamente?',risk:'a',peso:3,norm:'Art. 44 CT; Ley 20.281',
       opts:[{l:'A',t:'Sí, cálculo proporcional correcto',p:3},{l:'B',t:'No hay trabajadores a jornada parcial',p:3},{l:'C',t:'No se calcula proporcional',p:0}],
       cons:'Trabajadores part-time tienen derecho al IMM proporcional a su jornada contratada.'},
      {id:'m3n4q14',text:'¿Se utiliza software de remuneraciones actualizado que incorpore los cambios de la Ley 21.561 (reducción gradual de jornada) en el cálculo de horas?',risk:'a',peso:3,norm:'Ley 21.561',
       opts:[{l:'A',t:'Sí, software actualizado con Ley 21.561',p:3},{l:'B',t:'Cálculo manual ajustado',p:2},{l:'C',t:'No se ha actualizado el sistema',p:0}],
       cons:'El incorrecto cálculo de la jornada bajo la reducción gradual genera diferencias en el pago de horas extra.'},
      {id:'m3n4q15',text:'¿El cálculo de las cotizaciones de seguro de cesantía (Ley 19.728) se realiza correctamente según el tipo de contrato (indefinido o plazo fijo)?',risk:'a',peso:3,norm:'Ley 19.728 (Seguro de Cesantía)',
       opts:[{l:'A',t:'Sí, diferenciado correctamente por tipo de contrato',p:3},{l:'B',t:'Se aplica la misma tasa a todos los contratos',p:1},{l:'C',t:'No se verifica la diferenciación',p:0}],
       cons:'Cotizar con la tasa incorrecta de seguro de cesantía genera diferencias que afectan el derecho del trabajador a las prestaciones por desempleo.'},
      {id:'m3n4q16',text:'¿Se controla que los descuentos por atrasos o ausencias se calculen proporcionalmente y no excedan el día efectivamente no trabajado?',risk:'a',peso:3,norm:'Art. 58 CT',
       opts:[{l:'A',t:'Sí, cálculo proporcional exacto',p:3},{l:'B',t:'Se aplican descuentos fijos no proporcionales',p:0},{l:'C',t:'No se descuenta por atrasos',p:3}],
       cons:'Descontar más de lo proporcional al tiempo no trabajado constituye un descuento ilegal de remuneraciones, reclamable con reajuste.'},
      ],
      n5:[
        {id:'m3n5q1',text:'¿La empresa utiliza software de remuneraciones certificado y actualizado que incorpora Ley 21.561 (reducción gradual de jornada), cambios al IMM y normativa previsional vigente?',risk:'a',peso:5,norm:'Ley 21.561; Art. 44 CT; DL 3500',
         opts:[{l:'A',t:'Sí, software actualizado, auditado y certificado',p:5},{l:'B',t:'Software con actualizaciones manuales',p:2},{l:'C',t:'Sistema desactualizado o manual',p:0}],
         cons:'Un error de cálculo sistemático en nóminas de 200+ trabajadores puede generar pasivos millonarios por diferencias de haberes acumuladas durante meses o años.'},
        {id:'m3n5q2',text:'¿Se realiza auditoría de nómina al menos semestral con conciliación entre sistema de remuneraciones, registro de asistencia y cotizaciones pagadas?',risk:'a',peso:5,norm:'Arts. 54, 62 CT; DL 3500',
         opts:[{l:'A',t:'Sí, auditoría semestral documentada con informe',p:5},{l:'B',t:'Revisión interna sin auditoría formal',p:2},{l:'C',t:'Sin auditoría de nómina',p:0}],
         cons:'Sin auditoría periódica, los errores de cálculo se acumulan silenciosamente. En empresas medianas, las diferencias detectadas tardíamente incluyen intereses y reajustes.'},
        {id:'m3n5q3',text:'¿Las cotizaciones previsionales (AFP, salud) se pagan dentro del plazo legal con conciliación mensual entre lo declarado y lo efectivamente enterado?',risk:'a',peso:6,norm:'Art. 19 DL 3500; Ley 17.322',
         opts:[{l:'A',t:'Sí, conciliación mensual documentada',p:6},{l:'B',t:'Pago puntual sin conciliación formal',p:3},{l:'C',t:'Con retrasos o diferencias sin conciliar',p:0}],
         cons:'Las diferencias entre cotizaciones declaradas y pagadas generan intereses, multas y responsabilidad penal del representante legal. La DT detecta estas brechas en fiscalización.'},
        {id:'m3n5q4',text:'¿El cálculo de la semana corrida se realiza correctamente para todos los trabajadores remunerados en forma variable (trato, comisión, destajo)?',risk:'a',peso:4,norm:'Art. 45 CT',
         opts:[{l:'A',t:'Sí, cálculo automático validado en el software',p:4},{l:'B',t:'Cálculo manual con supervisión periódica',p:2},{l:'C',t:'No se calcula semana corrida',p:0},{l:'D',t:'No hay trabajadores con remuneración variable',p:4}],
         cons:'La semana corrida no pagada o mal calculada es una de las diferencias de haberes más frecuentes en demandas laborales en Chile.'},
        {id:'m3n5q5',text:'¿La gratificación anual se calcula correctamente y se paga oportunamente (modalidad Art. 47 o 50 CT), con respaldo contable verificable?',risk:'a',peso:5,norm:'Arts. 47-50 CT',
         opts:[{l:'A',t:'Sí, con cálculo auditado y soporte contable',p:5},{l:'B',t:'Se paga pero sin verificación del cálculo',p:2},{l:'C',t:'No se paga o cálculo incorrecto',p:0}],
         cons:'La gratificación mal calculada genera cobros retroactivos de hasta 5 años con reajuste e interés. En empresas medianas, el monto puede ser significativo.'},
        {id:'m3n5q6',text:'¿Los finiquitos incluyen todos los haberes pendientes (vacaciones proporcionales, gratificación proporcional, semana corrida, bonos contractuales) y son revisados por RRHH antes de la firma?',risk:'a',peso:5,norm:'Art. 177 CT',
         opts:[{l:'A',t:'Sí, revisión obligatoria de RRHH con checklist',p:5},{l:'B',t:'Revisión parcial sin checklist',p:2},{l:'C',t:'Sin revisión sistemática',p:0}],
         cons:'Un finiquito con haberes omitidos no extingue la obligación del empleador. Con 200+ trabajadores, la frecuencia de errores en finiquitos puede ser alta.'},
        {id:'m3n5q7',text:'¿La empresa lleva y mantiene actualizado el Libro de Remuneraciones con todas las entradas, con acceso disponible para fiscalización inmediata?',risk:'a',peso:3,norm:'Art. 62 CT',
         opts:[{l:'A',t:'Sí, libro digital o físico al día y disponible',p:3},{l:'B',t:'Existe pero con rezago en actualización',p:1},{l:'C',t:'No existe o no disponible para fiscalización',p:0}],
         cons:'El Libro de Remuneraciones es el primer documento solicitado en una fiscalización de remuneraciones. Su ausencia o rezago genera multa inmediata.'},
        {id:'m3n5q8',text:'¿Los descuentos por préstamos, anticipos y cuotas sindicales cuentan con autorización escrita y respetan el límite del 15% de la remuneración para créditos?',risk:'a',peso:3,norm:'Art. 58 CT',
         opts:[{l:'A',t:'Sí, todos documentados y dentro del límite',p:3},{l:'B',t:'Mayoría documentados con excepciones',p:1},{l:'C',t:'Sin control sistemático',p:0}],
         cons:'Los descuentos no autorizados o que superan el 15% son ilegales, exigibles con reajuste e interés.'},
        {id:'m3n5q9',text:'¿Se paga correctamente el seguro de cesantía diferenciado por tipo de contrato (indefinido: 0,6% empleador + 0,6% trabajador; plazo fijo: 3% empleador)?',risk:'a',peso:3,norm:'Arts. 5, 6 Ley 19.728',
         opts:[{l:'A',t:'Sí, diferenciado y validado mensualmente',p:3},{l:'B',t:'Se aplica sin diferenciación de contrato',p:1},{l:'C',t:'Sin control de la diferenciación',p:0}],
         cons:'La cotización incorrecta de cesantía afecta el derecho del trabajador a las prestaciones por desempleo y genera diferencias fiscalizables.'},
        {id:'m3n5q10',text:'¿La empresa tiene procedimiento formal para reclamar subsidios previsionales (licencias médicas, maternidad/paternidad) y recuperar los costos ante CCAF/FONASA/AFC?',risk:'m',peso:3,norm:'DFL 44; Ley 20.891; Arts. 194-210 CT',
         opts:[{l:'A',t:'Sí, procedimiento formal con responsable y KPIs',p:3},{l:'B',t:'Gestión informal caso a caso',p:1},{l:'C',t:'Sin procedimiento establecido',p:0}],
         cons:'Sin recuperación activa de subsidios, la empresa asume costos que el sistema previsional debería cubrir. En empresa mediana puede ser un monto relevante.'},
        {id:'m3n5q11',text:'¿La empresa controla el pasivo de vacaciones acumuladas con alerta temprana a RRHH cuando un trabajador supera los 10 días hábiles de saldo pendiente?',risk:'m',peso:3,norm:'Arts. 67-76 CT',
         opts:[{l:'A',t:'Sí, reporte mensual con alertas a jefaturas',p:3},{l:'B',t:'Seguimiento anual sin alertas',p:1},{l:'C',t:'Sin control de saldo de vacaciones',p:0}],
         cons:'El pasivo de vacaciones no controlado es un riesgo financiero creciente, especialmente en períodos de alta rotación o reducción de dotación.'},
        {id:'m3n5q12',text:'¿La empresa tiene una política formal de remuneración variable (bonos, comisiones) con criterios objetivos documentados y mecanismo de resolución de disputas?',risk:'m',peso:2,norm:'Arts. 41, 54 CT; buenas prácticas',
         opts:[{l:'A',t:'Sí, política escrita, conocida y con mecanismo de disputas',p:2},{l:'B',t:'Criterios informales sin documentar',p:1},{l:'C',t:'Sin política formal',p:0}],
         cons:'La remuneración variable sin criterios escritos es fuente frecuente de demandas por diferencias de haberes. El empleador debe demostrar que los criterios son objetivos y conocidos.'},
        {id:'m3n5q13',text:'¿El cálculo de la indemnización por años de servicio incluye correctamente todos los componentes de la "última remuneración mensual total" (base + variable consolidada)?',risk:'a',peso:4,norm:'Art. 172 CT',
         opts:[{l:'A',t:'Sí, cálculo validado por abogado con cada desvinculación',p:4},{l:'B',t:'Se calcula solo sobre sueldo base',p:1},{l:'C',t:'Sin validación legal del cálculo',p:0}],
         cons:'Subestimar la base de cálculo de la indemnización (omitir bonos consolidados o promedio de variable) es una de las causas más comunes de demandas laborales exitosas.'},
      ],
      n6:[
        {id:'m3n6q1',text:'¿La empresa opera con un HRIS integrado para la gestión de remuneraciones, con módulos de nómina, gestión de tiempo y beneficios conectados en tiempo real?',risk:'a',peso:5,norm:'Art. 54 CT; DL 3500; Ley 21.561',
         opts:[{l:'A',t:'Sí, HRIS integrado con auditoría automática',p:5},{l:'B',t:'Sistema parcialmente integrado',p:2},{l:'C',t:'Sistemas desconectados o manuales',p:0}],
         cons:'En 500+ trabajadores, la falta de integración de sistemas genera errores de cálculo sistemáticos que se acumulan mese a mes, alcanzando montos millonarios en diferencias de haberes.'},
        {id:'m3n6q2',text:'¿Se realiza auditoría de nómina trimestral por equipo independiente al área de remuneraciones, con informe a gerencia y plan de cierre de brechas?',risk:'a',peso:5,norm:'Arts. 54, 62 CT; buenas prácticas',
         opts:[{l:'A',t:'Sí, auditoría trimestral con informe a gerencia',p:5},{l:'B',t:'Auditoría anual o semestral',p:2},{l:'C',t:'Sin auditoría formal',p:0}],
         cons:'En gran empresa, la auditoría debe ser trimestral y por equipo independiente. Las diferencias detectadas tardíamente son más costosas por el mayor período de devengo.'},
        {id:'m3n6q3',text:'¿Las cotizaciones previsionales se controlan mediante conciliación mensual automatizada entre sistema de nómina, PreviredÔ y registros AFP/ISAPRE con reporte a gerencia?',risk:'a',peso:6,norm:'DL 3500; Ley 17.322',
         opts:[{l:'A',t:'Sí, conciliación automática con reportería mensual a gerencia',p:6},{l:'B',t:'Conciliación manual mensual',p:3},{l:'C',t:'Sin conciliación sistemática',p:0}],
         cons:'Una diferencia de cotizaciones no detectada que afecte a 500+ trabajadores puede representar decenas de millones en pasivos previsionales, con responsabilidad penal del gerente.'},
        {id:'m3n6q4',text:'¿El cálculo de semana corrida, gratificación proporcional y remuneraciones variables está validado trimestralmente por el área legal y documentado en minutas?',risk:'a',peso:4,norm:'Arts. 45, 47-50 CT',
         opts:[{l:'A',t:'Sí, validación trimestral documentada',p:4},{l:'B',t:'Validación anual o informal',p:2},{l:'C',t:'Sin validación legal periódica',p:0}],
         cons:'La semana corrida mal calculada en 500+ trabajadores genera pasivos retroactivos de enorme magnitud. La validación trimestral es la única forma de detectar y corregir errores oportunamente.'},
        {id:'m3n6q5',text:'¿Los finiquitos son revisados por el área legal antes de la firma, con checklist estandarizado que incluye todos los conceptos del Art. 177 CT y las particularidades del caso?',risk:'a',peso:5,norm:'Art. 177 CT',
         opts:[{l:'A',t:'Sí, revisión legal obligatoria con checklist documentado',p:5},{l:'B',t:'Revisión de RRHH sin área legal',p:2},{l:'C',t:'Sin revisión previa a la firma',p:0}],
         cons:'En gran empresa, un error sistemático en finiquitos puede afectar a decenas de trabajadores simultáneamente, generando demandas masivas con costos y reputación en juego.'},
        {id:'m3n6q6',text:'¿El Libro de Remuneraciones está en plataforma digital certificada, con respaldo en nube, accesible en tiempo real para fiscalización inmediata desde cualquier centro de trabajo?',risk:'a',peso:3,norm:'Art. 62 CT; Ley 21.395',
         opts:[{l:'A',t:'Sí, digital certificado con acceso inmediato',p:3},{l:'B',t:'Digital pero sin acceso inmediato',p:1},{l:'C',t:'Físico o sin acceso inmediato',p:0}],
         cons:'La DT puede fiscalizar simultáneamente múltiples centros de trabajo. Sin acceso digital centralizado, cada centro queda expuesto a multa por no disponibilidad inmediata.'},
        {id:'m3n6q7',text:'¿La empresa tiene KPIs de nómina monitoreados mensualmente (error rate, tiempo de procesamiento, diferencias de cotizaciones, reclamos de trabajadores) con reporte al directorio?',risk:'m',peso:3,norm:'Buenas prácticas corporativas',
         opts:[{l:'A',t:'Sí, KPIs mensuales con reporte al directorio',p:3},{l:'B',t:'KPIs internos sin reporte a directorio',p:1},{l:'C',t:'Sin KPIs de nómina',p:0}],
         cons:'Sin KPIs de nómina, el directorio no tiene visibilidad sobre los riesgos operacionales del área de remuneraciones, que es la de mayor exposición laboral en gran empresa.'},
        {id:'m3n6q8',text:'¿El pasivo total de vacaciones acumuladas se reporta mensualmente a gerencia financiera como pasivo laboral contingente en los estados financieros?',risk:'a',peso:3,norm:'Arts. 67-76 CT; NIIF 19',
         opts:[{l:'A',t:'Sí, reportado mensualmente como pasivo contable',p:3},{l:'B',t:'Estimado anualmente solo',p:1},{l:'C',t:'No se reporta como pasivo',p:0}],
         cons:'El pasivo de vacaciones en 500+ trabajadores puede superar los $500M. Su omisión en los estados financieros es un riesgo de auditoría contable además del laboral.'},
        {id:'m3n6q9',text:'¿Los criterios de remuneración variable están documentados en políticas formales aprobadas por directorio, con mecanismo de resolución de disputas y revisión anual de consistencia con equidad interna?',risk:'m',peso:3,norm:'Arts. 41, 54 CT; Ley 20.348 (equidad salarial)',
         opts:[{l:'A',t:'Sí, política aprobada por directorio con revisión anual',p:3},{l:'B',t:'Criterios documentados sin aprobación de directorio',p:1},{l:'C',t:'Criterios informales',p:0}],
         cons:'Las políticas de remuneración variable sin aprobación formal son fuente de demandas por discriminación salarial y diferencias de haberes, especialmente bajo el escrutinio ESG.'},
        {id:'m3n6q10',text:'¿La empresa tiene análisis de brecha salarial de género actualizado y plan de cierre de brechas no justificadas, conforme a Ley 20.348?',risk:'a',peso:4,norm:'Ley 20.348; estándares ESG',
         opts:[{l:'A',t:'Sí, análisis formal con plan de cierre y reporte',p:4},{l:'B',t:'Análisis realizado sin plan formal',p:1},{l:'C',t:'Sin análisis de brecha salarial de género',p:0}],
         cons:'La brecha salarial de género sin justificación técnica constituye discriminación ilegal sancionable. Además, es un indicador ESG monitoreado por inversionistas institucionales.'},
        {id:'m3n6q11',text:'¿El cálculo de la indemnización por años de servicio es validado caso a caso por el área legal, incluyendo componentes variables consolidados y beneficios en especie valorizados?',risk:'a',peso:4,norm:'Art. 172 CT',
         opts:[{l:'A',t:'Sí, validación legal caso a caso documentada',p:4},{l:'B',t:'Validación solo para montos sobre cierto umbral',p:2},{l:'C',t:'Cálculo sin validación legal',p:0}],
         cons:'En gran empresa, las indemnizaciones suelen involucrar componentes variables complejos. Un error sistemático de cálculo puede generar decenas de demandas exitosas simultáneas.'},
        {id:'m3n6q12',text:'¿La empresa cuenta con un sistema de gestión de beneficios (seguro complementario, bonos adicionales, asignaciones) con política documentada y procedimiento de reclamación para trabajadores?',risk:'m',peso:2,norm:'Art. 54 CT; buenas prácticas',
         opts:[{l:'A',t:'Sí, política formal y sistema de gestión',p:2},{l:'B',t:'Beneficios informales sin documentar',p:0},{l:'C',t:'Sin beneficios adicionales',p:2}],
         cons:'Los beneficios otorgados de facto sin política escrita pueden incorporarse al contrato por la vía del uso y costumbre, generando derechos adquiridos difíciles de modificar.'},
        {id:'m3n6q13',text:'¿El área de remuneraciones tiene plan de continuidad operacional (BCP) para garantizar el pago de remuneraciones en caso de fallas tecnológicas, desastres o pandemias?',risk:'m',peso:2,norm:'Buenas prácticas; DS 1',
         opts:[{l:'A',t:'Sí, BCP documentado y probado al menos anualmente',p:2},{l:'B',t:'Plan informal no documentado',p:1},{l:'C',t:'Sin BCP para remuneraciones',p:0}],
         cons:'La interrupción del pago de remuneraciones, aunque sea temporal, genera responsabilidad legal inmediata (Art. 54 CT) y puede desencadenar renuncia indirecta masiva.'},
        {id:'m3n6q14',text:'¿La empresa reporta indicadores de nómina al directorio trimestralmente, incluyendo costo laboral total por área, índice de ausentismo, pasivo previsional y proyección de indemnizaciones?',risk:'m',peso:2,norm:'Buenas prácticas de gobierno corporativo',
         opts:[{l:'A',t:'Sí, reporte trimestral al directorio',p:2},{l:'B',t:'Reporte anual o ad hoc',p:1},{l:'C',t:'Sin reporte formal al directorio',p:0}],
         cons:'El directorio que no recibe información de nómina no puede ejercer supervisión sobre el mayor pasivo laboral de la empresa, lo que es considerado una falla de gobierno corporativo.'},
      ],
    },
    questions:[
      {id:'m3q1',text:'¿Todos los trabajadores reciben a lo menos el Ingreso Mínimo Mensual (IMM) vigente?',risk:'a',peso:5,norm:'Art. 44 CT; Ley 20.281',
       opts:[{l:'A',t:'Sí, el 100%',p:5},{l:'B',t:'La mayoría, con excepciones',p:2},{l:'C',t:'No se verifica periódicamente',p:1},{l:'D',t:'Hay trabajadores bajo el IMM',p:0}],
       cons:'Multa 1 a 20 UTM por cada trabajador bajo el IMM. Actualice el IMM vigente cada año.'},
      {id:'m3q2',text:'¿Se emiten liquidaciones de sueldo escritas y firmadas por todos los trabajadores todos los meses?',risk:'a',peso:5,norm:'Art. 54 CT',
       opts:[{l:'A',t:'Sí, emitidas, firmadas y conservadas mensualmente',p:5},{l:'B',t:'Se emiten pero no siempre se firman',p:2},{l:'C',t:'Solo para algunos trabajadores',p:1},{l:'D',t:'No se emiten',p:0}],
       cons:'Sin liquidación firmada la empresa no puede probar el pago de remuneraciones ante un tribunal laboral.'},
      {id:'m3q3',text:'¿Las liquidaciones detallan correctamente todos los haberes y descuentos (remuneración fija, variables, asignaciones, descuentos legales y autorizados)?',risk:'a',peso:4,norm:'Art. 54 CT',
       opts:[{l:'A',t:'Sí, con desglose completo y correcto',p:4},{l:'B',t:'Parcialmente, hay conceptos no detallados',p:2},{l:'C',t:'No se desglosan correctamente',p:0}],
       cons:'Liquidaciones incompletas facilitan cobros de haberes no incluidos en el finiquito o en la demanda.'},
      {id:'m3q4',text:'¿Las cotizaciones previsionales (AFP, Salud) se pagan dentro del plazo legal (hasta el día 10 del mes siguiente)?',risk:'a',peso:6,norm:'Art. 19 DL 3500; Ley 18.469',
       opts:[{l:'A',t:'Siempre dentro del plazo, sin excepción',p:6},{l:'B',t:'Con retrasos ocasionales (1-2 veces al año)',p:3},{l:'C',t:'Con retrasos frecuentes',p:1},{l:'D',t:'No se monitorea el plazo',p:0}],
       cons:'Cotizaciones tardías generan multas, reajustes e intereses. Retención y no entero de cotizaciones configura responsabilidad penal del representante legal (Art. 13 Ley 17.322).'},
      {id:'m3q5',text:'¿Existe Libro de Remuneraciones legalizado y actualizado?',risk:'a',peso:3,norm:'Art. 62 CT',
       opts:[{l:'A',t:'Sí, al día y accesible',p:3},{l:'B',t:'Existe pero no siempre actualizado',p:1},{l:'C',t:'No existe',p:0}],
       cons:'Obligatorio para empresas con 5+ trabajadores. Multa 1 a 5 UTM por incumplimiento.'},
      {id:'m3q6',text:'¿Las horas extraordinarias se autorizan por escrito previamente y se pagan con el recargo del 50%?',risk:'a',peso:5,norm:'Art. 32 CT',
       opts:[{l:'A',t:'Sí, autorización escrita y pago correcto con 50% recargo',p:5},{l:'B',t:'Se pagan pero sin autorización escrita previa',p:2},{l:'C',t:'Se pagan sin el recargo correcto',p:1},{l:'D',t:'No se pagan',p:0}],
       cons:'Las horas extra no pagadas o subpagadas son la primera causa de demandas laborales en Chile.'},
      {id:'m3q7',text:'¿Se paga la gratificación anual conforme a Ley (25% de remuneraciones o 4,75 IMM mensual)?',risk:'a',peso:5,norm:'Arts. 47-50 CT',
       opts:[{l:'A',t:'Sí, según modalidad legal verificada anualmente',p:5},{l:'B',t:'Se paga mensualmente garantizada (Art. 50 CT)',p:5},{l:'C',t:'No se paga o se calcula incorrectamente',p:0}],
       cons:'La gratificación no pagada o mal calculada genera cobros retroactivos de varios años con reajuste e intereses.'},
      {id:'m3q8',text:'¿Se lleva registro actualizado del saldo de feriados (vacaciones) de cada trabajador y se otorgan oportunamente?',risk:'a',peso:4,norm:'Arts. 67-76 CT',
       opts:[{l:'A',t:'Sí, registro en sistema informático con alertas',p:4},{l:'B',t:'Solo planilla manual, no siempre actualizada',p:2},{l:'C',t:'No existe registro de saldo',p:0}],
       cons:'Sin registro, la empresa no puede probar el otorgamiento del feriado. El reemplazo del feriado por dinero sin término del contrato es nulo de pleno derecho (Art. 73 CT).'},
      {id:'m3q9',text:'¿Se calcula y paga correctamente la semana corrida para trabajadores remunerados por día o tarea?',risk:'a',peso:3,norm:'Art. 45 CT',
       opts:[{l:'A',t:'Sí, con cálculo correcto según días efectivos trabajados',p:3},{l:'B',t:'No aplica (todos son remuneración mensual fija)',p:3},{l:'C',t:'No se aplica o se desconoce el concepto',p:0}],
       cons:'El incorrecto cálculo de semana corrida es fuente frecuente de demandas y liquidaciones retroactivas.'},
      {id:'m3q10',text:'¿Los descuentos aplicados en liquidaciones cuentan con autorización escrita del trabajador y respetan el límite del 15% para créditos sociales?',risk:'a',peso:4,norm:'Art. 58 CT',
       opts:[{l:'A',t:'Sí, todos autorizados y dentro del límite legal',p:4},{l:'B',t:'La mayoría autorizados, con excepciones',p:2},{l:'C',t:'No se obtiene autorización',p:0}],
       cons:'Descuentos no autorizados pueden ser exigidos en devolución con reajuste e interés.'},
      {id:'m3q11',text:'¿Los finiquitos incluyen todos los haberes pendientes (vacaciones proporcionales, indemnizaciones, gratificación proporcional, bonos adeudados)?',risk:'a',peso:5,norm:'Art. 177 CT',
       opts:[{l:'A',t:'Sí, con liquidación integral verificada por RRHH',p:5},{l:'B',t:'Solo algunos conceptos incluidos',p:2},{l:'C',t:'No se revisa la integralidad del finiquito',p:0}],
       cons:'El finiquito incompleto no libera al empleador de las obligaciones omitidas. El trabajador puede demandar las diferencias sin plazo de caducidad para algunos conceptos.'},
      {id:'m3q12',text:'¿Se paga la indemnización por años de servicio en todos los despidos que la generan, correctamente calculada?',risk:'a',peso:5,norm:'Arts. 163, 168 CT',
       opts:[{l:'A',t:'Sí, siempre que corresponde y con cálculo correcto',p:5},{l:'B',t:'A veces se omite o se calcula con base incorrecta',p:2},{l:'C',t:'No siempre se paga o se subestima',p:0}],
       cons:'No pago de indemnización genera demanda con recargo del 30% al 100% según causal (Art. 168 CT).'},
      {id:'m3q13',text:'¿Las rentas variables (comisiones, bonos de producción) están documentadas con criterios claros, conocidos y aceptados por el trabajador?',risk:'a',peso:3,norm:'Art. 42 CT',
       opts:[{l:'A',t:'Sí, en contrato o política escrita conocida',p:3},{l:'B',t:'Se pagan sin documentación formal',p:1},{l:'C',t:'No hay remuneración variable',p:3}],
       cons:'Sin documentación, las rentas variables pueden reclamarse como parte de la remuneración base para el cálculo de gratificación e indemnización.'},
      {id:'m3q14',text:'¿La empresa lleva control de deudas previsionales históricas y están regularizadas?',risk:'a',peso:4,norm:'Arts. 19-22 DL 3500',
       opts:[{l:'A',t:'No hay deuda previsional; cotizaciones al día',p:4},{l:'B',t:'Hay deuda histórica en proceso de regularización',p:1},{l:'C',t:'Hay deuda sin plan de regularización',p:0}],
       cons:'La deuda previsional genera juicio ejecutivo previsional, embargo de bienes y responsabilidad penal del representante legal.'},
      {id:'m3q15',text:'¿Se revisan y actualizan las bases de cálculo (últimas remuneraciones) para finiquitos e indemnizaciones?',risk:'a',peso:3,norm:'Art. 172 CT',
       opts:[{l:'A',t:'Sí, con cálculo formal revisado por RRHH o asesor',p:3},{l:'B',t:'Cálculo manual sin revisión formal',p:1},{l:'C',t:'No se revisa la base de cálculo',p:0}],
       cons:'Bases de cálculo erradas generan indemnizaciones insuficientes y demandas por diferencias.'},
      {id:'m3q16',text:'¿Los trabajadores con más de 10 años de servicio (continuos o no en Chile) reciben el feriado progresivo?',risk:'a',peso:3,norm:'Art. 68 CT',
       opts:[{l:'A',t:'Sí, se controla y aplica correctamente',p:3},{l:'B',t:'Solo si el trabajador lo solicita',p:1},{l:'C',t:'No se aplica o se desconoce',p:0}],
       cons:'El no otorgamiento del feriado progresivo genera cobros retroactivos con reajuste e interés.'},
      {id:'m3q17',text:'¿Existe revisión de equidad salarial entre trabajadores de igual cargo, función y experiencia?',risk:'m',peso:2,norm:'Art. 62 bis CT; Ley 20.348',
       opts:[{l:'A',t:'Sí, revisión formal al menos anual',p:2},{l:'B',t:'Solo si hay reclamo',p:0},{l:'C',t:'No aplica (empresa pequeña sin cargos replicados)',p:2}],
       cons:'La brecha salarial injustificada entre trabajadores de igual función puede generar demandas por discriminación e inspección de DT.'},
      {id:'m3q18',text:'¿Existe doble revisión o proceso de control de errores en la generación de liquidaciones?',risk:'m',peso:2,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, proceso formal de revisión antes del pago',p:2},{l:'B',t:'Revisión informal',p:1},{l:'C',t:'No hay control',p:0}],
       cons:'Sin control de errores, las diferencias acumuladas pueden representar montos significativos en demandas colectivas.'},
      {id:'m3q19',text:'¿Se entregan las liquidaciones con acuse de recibo (firma física o confirmación electrónica) del trabajador?',risk:'a',peso:3,norm:'Art. 54 bis CT',
       opts:[{l:'A',t:'Sí, con acuse de recibo documentado',p:3},{l:'B',t:'Entrega sin firma o confirmación',p:1},{l:'C',t:'No hay registro de entrega',p:0}],
       cons:'Sin acuse de recibo, la empresa no puede probar la entrega de la liquidación ante un juicio laboral.'},
      {id:'m3q20',text:'¿La empresa usa Previred o sistema equivalente para el pago centralizado y trazable de cotizaciones?',risk:'m',peso:2,norm:'Circular SIS; normativa AFP',
       opts:[{l:'A',t:'Sí, con declaración y pago mensual centralizado',p:2},{l:'B',t:'Solo declaración; el pago es manual',p:1},{l:'C',t:'No se usa Previred',p:0}],
       cons:'La falta de Previred dificulta el seguimiento de cotizaciones y aumenta el riesgo de errores y descuadres entre lo declarado y lo pagado.'},
      {id:'m3q21',text:'¿La remuneración íntegra se mantiene durante los períodos de licencia médica (no se descuenta más allá del subsidio)?',risk:'a',peso:3,norm:'Art. 198 CT; DFL 44',
       opts:[{l:'A',t:'Sí, solo se descuenta el subsidio, no el sueldo base',p:3},{l:'B',t:'No siempre se gestiona correctamente',p:0}],
       cons:'Descuento improcedente de remuneración durante licencia médica genera cobro posterior con reajuste e interés.'},
      {id:'m3q22',text:'¿Los bonos de productividad o metas se pagan con criterios no discriminatorios y documentados?',risk:'m',peso:2,norm:'Art. 62 bis CT; Ley 20.348',
       opts:[{l:'A',t:'Sí, criterios objetivos y documentados',p:2},{l:'B',t:'Criterios subjetivos sin documentación',p:0},{l:'C',t:'No hay bonos de metas',p:2}],
       cons:'Diferencias de bono variable sin justificación objetiva pueden constituir discriminación salarial sancionada.'},
      {id:'m3q23',text:'¿Se realizan revisiones periódicas del cumplimiento tributario laboral (honorarios vs dependientes, boletas vs contratos)?',risk:'m',peso:2,norm:'Ley Renta; Circular SII 107/2020',
       opts:[{l:'A',t:'Sí, con asesoría tributaria periódica',p:2},{l:'B',t:'Solo ante auditorías del SII',p:1},{l:'C',t:'No existe revisión',p:0}],
       cons:'Honorarios encubiertos pueden ser recaracterizados como remuneraciones con cotizaciones e impuestos retroactivos.'},
      {id:'m3q24',text:'¿Las asignaciones de colación y movilización son de monto razonable y están formalizadas en el contrato o anexo?',risk:'m',peso:2,norm:'Art. 41 CT; Circular SII',
       opts:[{l:'A',t:'Sí, montos razonables documentados',p:2},{l:'B',t:'Se pagan sin formalización',p:1},{l:'C',t:'No se pagan',p:2}],
       cons:'Asignaciones de monto desproporcionado pueden ser recaracterizadas como remuneración imponible por el SII o DT.'},
      {id:'m3q25',text:'¿Los trabajadores de jornada parcial reciben el IMM proporcional a su jornada y sus cotizaciones se calculan correctamente?',risk:'a',peso:3,norm:'Art. 44 CT; Ley 20.281',
       opts:[{l:'A',t:'Sí, cálculo proporcional correcto',p:3},{l:'B',t:'No hay trabajadores a jornada parcial',p:3},{l:'C',t:'No se calcula proporcional',p:0}],
       cons:'Trabajadores part-time tienen derecho al IMM proporcional a su jornada contratada.'},
      {id:'m3q26',text:'¿Los sistemas de nómina y remuneraciones están integrados con las AFP, Fonasa/Isapres para validar cotizaciones?',risk:'m',peso:2,norm:'Normativa AFP/Fonasa/CMF',
       opts:[{l:'A',t:'Sí, con integración y conciliación mensual verificada',p:2},{l:'B',t:'Manual, sin integración',p:0}],
       cons:'Sin integración existen riesgos de descuadres entre lo declarado y lo pagado, detectables en auditoría previsional.'},
      {id:'m3q27',text:'¿Se controla que los trabajadores a honorarios no tengan características de relación laboral encubierta (dependencia, horario, subordinación)?',risk:'a',peso:3,norm:'Arts. 7-8 CT; jurisprudencia DT',
       opts:[{l:'A',t:'Sí, con análisis periódico de la naturaleza de cada contrato',p:3},{l:'B',t:'Se revisa solo ante reclamo',p:1},{l:'C',t:'No se controla',p:0}],
       cons:'Una relación laboral encubierta como honorarios genera reconocimiento de todos los beneficios laborales y previsionales desde el inicio, con retroactividad total.'},
      {id:'m3q28',text:'¿Existe un procedimiento formal para el cálculo y pago de anticipos de remuneración, y se documentan correctamente?',risk:'b',peso:1,norm:'Art. 58 CT',
       opts:[{l:'A',t:'Sí, con formulario y descuento en liquidación',p:1},{l:'B',t:'Se otorgan sin documentación',p:0},{l:'C',t:'No se otorgan anticipos',p:1}],
       cons:'Anticipos sin documentación pueden ser negados por el trabajador y generar conflicto en la liquidación.'},
      {id:'m3q29',text:'¿Se utiliza software de remuneraciones actualizado que incorpore los cambios de la Ley 21.561 (reducción gradual de jornada) en el cálculo de horas?',risk:'a',peso:3,norm:'Ley 21.561',
       opts:[{l:'A',t:'Sí, software actualizado con Ley 21.561',p:3},{l:'B',t:'Cálculo manual ajustado',p:2},{l:'C',t:'No se ha actualizado el sistema',p:0}],
       cons:'El incorrecto cálculo de la jornada bajo la reducción gradual genera diferencias en el pago de horas extra.'},
      {id:'m3q30',text:'¿La empresa cuenta con un área o responsable específico de remuneraciones con conocimiento actualizado de la normativa?',risk:'m',peso:2,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, especialista dedicado o externo con actualizaciones periódicas',p:2},{l:'B',t:'Lo maneja RRHH sin especialización específica',p:1},{l:'C',t:'Lo hace el contador sin foco en legislación laboral',p:0}],
       cons:'La gestión de remuneraciones por personal sin especialización es la principal fuente de errores acumulados que derivan en demandas.'},
      {id:'m3q31',text:'¿Se calcula correctamente el incremento previsional para trabajadores afiliados al sistema antiguo (Art. 17 DL 3500) cuando corresponde?',risk:'m',peso:2,norm:'Art. 17 DL 3500',
       opts:[{l:'A',t:'Sí, se calcula cuando aplica',p:2},{l:'B',t:'No hay trabajadores con incremento previsional',p:2},{l:'C',t:'No se calcula o se desconoce',p:0}],
       cons:'Omitir el incremento previsional cuando corresponde genera diferencias de remuneración imponible reclamables retroactivamente.'},
      {id:'m3q32',text:'¿Las remuneraciones de trabajadores con contrato de media jornada o por hora reflejan correctamente el valor/hora pactado y sus variaciones legales?',risk:'a',peso:3,norm:'Art. 44 CT; Art. 40 bis CT',
       opts:[{l:'A',t:'Sí, cálculo correcto y actualizado',p:3},{l:'B',t:'No hay trabajadores por hora',p:3},{l:'C',t:'Cálculo con inconsistencias',p:0}],
       cons:'El valor/hora mal calculado genera diferencias acumulativas que se multiplican por la alta rotación típica de este tipo de contratos.'},
      {id:'m3q33',text:'¿Se identifican y corrigen oportunamente los errores de cálculo informados por los propios trabajadores en sus liquidaciones?',risk:'m',peso:2,norm:'Art. 54 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, con proceso de reclamo y corrección documentado',p:2},{l:'B',t:'Se corrige informalmente sin proceso',p:1},{l:'C',t:'No hay canal para reclamos de liquidación',p:0}],
       cons:'Sin canal de reclamo, los errores se acumulan silenciosamente y se descubren todos juntos en una demanda al término de la relación laboral.'},
      {id:'m3q34',text:'¿El cálculo de las cotizaciones de seguro de cesantía (Ley 19.728) se realiza correctamente según el tipo de contrato (indefinido o plazo fijo)?',risk:'a',peso:3,norm:'Ley 19.728 (Seguro de Cesantía)',
       opts:[{l:'A',t:'Sí, diferenciado correctamente por tipo de contrato',p:3},{l:'B',t:'Se aplica la misma tasa a todos los contratos',p:1},{l:'C',t:'No se verifica la diferenciación',p:0}],
       cons:'Cotizar con la tasa incorrecta de seguro de cesantía genera diferencias que afectan el derecho del trabajador a las prestaciones por desempleo.'},
      {id:'m3q35',text:'¿Se entera correctamente la cotización adicional diferenciada (seguro invalidez y sobrevivencia, SIS) de cargo del empleador?',risk:'a',peso:3,norm:'Art. 59 DL 3500 (SIS)',
       opts:[{l:'A',t:'Sí, se paga correctamente cada mes',p:3},{l:'B',t:'Con atrasos ocasionales',p:1},{l:'C',t:'No se verifica este pago específico',p:0}],
       cons:'El SIS es de cargo exclusivo del empleador; su no pago genera deuda previsional adicional separada de las cotizaciones del trabajador.'},
      {id:'m3q36',text:'¿Las remuneraciones en especie (vivienda, vehículo, alimentación) están correctamente valorizadas e incluidas en la base imponible cuando corresponde?',risk:'m',peso:2,norm:'Art. 41 CT; Circular SII',
       opts:[{l:'A',t:'Sí, valorizadas e incluidas correctamente',p:2},{l:'B',t:'No hay remuneraciones en especie',p:2},{l:'C',t:'Se otorgan sin valorización formal',p:0}],
       cons:'Las regalías no valorizadas correctamente pueden generar tanto un perjuicio al cálculo de gratificación e indemnizaciones como observaciones del SII.'},
      {id:'m3q37',text:'¿Existe un protocolo para el pago de remuneraciones cuando el día de pago pactado cae en día no laborable (fin de semana, feriado)?',risk:'b',peso:1,norm:'Art. 55 CT',
       opts:[{l:'A',t:'Sí, se paga el día hábil anterior',p:1},{l:'B',t:'Se paga el día hábil siguiente sin criterio uniforme',p:0}],
       cons:'El pago tardío de remuneraciones, aunque sea por un día, puede generar reclamos e intereses si se vuelve una práctica reiterada.'},
      {id:'m3q38',text:'¿Las comisiones de ventas se calculan y pagan dentro del mes siguiente a la venta o cobro, según lo pactado?',risk:'m',peso:2,norm:'Art. 42 CT; jurisprudencia DT',
       opts:[{l:'A',t:'Sí, dentro del plazo pactado',p:2},{l:'B',t:'No hay comisiones por venta',p:2},{l:'C',t:'Con retrasos frecuentes',p:0}],
       cons:'El pago retrasado sistemático de comisiones puede ser reclamado como un atraso reiterado en el pago de remuneraciones (causal de autodespido).'},
      {id:'m3q39',text:'¿Se controla que los descuentos por atrasos o ausencias se calculen proporcionalmente y no excedan el día efectivamente no trabajado?',risk:'a',peso:3,norm:'Art. 58 CT',
       opts:[{l:'A',t:'Sí, cálculo proporcional exacto',p:3},{l:'B',t:'Se aplican descuentos fijos no proporcionales',p:0},{l:'C',t:'No se descuenta por atrasos',p:3}],
       cons:'Descontar más de lo proporcional al tiempo no trabajado constituye un descuento ilegal de remuneraciones, reclamable con reajuste.'},
      {id:'m3q40',text:'¿La empresa diferencia correctamente entre indemnización a todo evento (Art. 163 bis, casa particular) y la indemnización por años de servicio tradicional?',risk:'m',peso:2,norm:'Art. 163 bis CT',
       opts:[{l:'A',t:'Sí, se aplica el régimen correcto según el caso',p:2},{l:'B',t:'No aplica este régimen especial',p:2},{l:'C',t:'No se ha revisado la diferencia',p:0}],
       cons:'Aplicar el régimen de indemnización incorrecto genera pagos insuficientes o disputas sobre el monto correcto a pagar al término del contrato.'},
      {id:'m3q41',text:'¿Se calcula correctamente la última remuneración mensual para efectos de indemnizaciones, incluyendo promedio de variables de los últimos 3 meses cuando corresponde?',risk:'a',peso:3,norm:'Art. 172 CT',
       opts:[{l:'A',t:'Sí, con promedio correcto de variables',p:3},{l:'B',t:'Se usa solo el sueldo base fijo',p:1},{l:'C',t:'No se ha verificado el método de cálculo',p:0}],
       cons:'Excluir las remuneraciones variables del cálculo de la última remuneración mensual subestima la indemnización y genera cobro de diferencias.'},
      {id:'m3q42',text:'¿Los trabajadores que cesan por mutuo acuerdo firman el finiquito incluyendo correctamente todas las prestaciones que la ley no permite renunciar?',risk:'a',peso:3,norm:'Art. 5 CT (irrenunciabilidad); Art. 177 CT',
       opts:[{l:'A',t:'Sí, se verifica la irrenunciabilidad de derechos mínimos',p:3},{l:'B',t:'Se firma sin verificación legal',p:0}],
       cons:'Cláusulas de renuncia a derechos mínimos en el finiquito son nulas; el trabajador puede demandar esos conceptos a pesar de haber firmado.'},
      {id:'m3q43',text:'¿Se controla la correcta aplicación del tope imponible para cotizaciones previsionales (tope UF mensual reajustable)?',risk:'m',peso:2,norm:'Art. 16 DL 3500; normativa previsional',
       opts:[{l:'A',t:'Sí, se aplica el tope vigente actualizado',p:2},{l:'B',t:'No hay trabajadores que superen el tope',p:2},{l:'C',t:'No se verifica el tope vigente',p:0}],
       cons:'Cotizar sobre un tope desactualizado genera sobre-cotización o sub-cotización, ambas reclamables ante la Superintendencia de Pensiones.'},
      {id:'m3q44',text:'¿Las liquidaciones de trabajadores extranjeros incluyen correctamente las cotizaciones según su régimen previsional (chileno o convenio de seguridad social)?',risk:'m',peso:2,norm:'Convenios bilaterales de seguridad social; DL 3500',
       opts:[{l:'A',t:'Sí, según régimen aplicable verificado',p:2},{l:'B',t:'No hay trabajadores extranjeros',p:2},{l:'C',t:'Se aplica el régimen general sin verificar convenios',p:0}],
       cons:'Aplicar el régimen incorrecto a trabajadores extranjeros puede generar doble cotización o incumplimiento de convenios internacionales de seguridad social.'},
      {id:'m3q45',text:'¿Se controla el correcto pago del bono SAC (Sueldo Anual Complementario) o similares cuando están pactados contractualmente?',risk:'b',peso:1,norm:'Art. 42 CT; pactos contractuales',
       opts:[{l:'A',t:'Sí, se paga según lo pactado',p:1},{l:'B',t:'No existe este beneficio pactado',p:1},{l:'C',t:'Se paga de forma irregular',p:0}],
       cons:'El incumplimiento de beneficios pactados contractualmente, aunque no sean de origen legal, es igualmente exigible como parte del contrato.'},
      {id:'m3q46',text:'¿Existe conciliación mensual entre lo contabilizado en remuneraciones y lo declarado en el Libro de Remuneraciones y Previred?',risk:'a',peso:3,norm:'Art. 62 CT; normativa previsional',
       opts:[{l:'A',t:'Sí, conciliación formal mensual',p:3},{l:'B',t:'Conciliación esporádica',p:1},{l:'C',t:'No se concilia',p:0}],
       cons:'Sin conciliación, las inconsistencias entre lo pagado y lo declarado pueden pasar inadvertidas hasta una fiscalización del SII o la DT.'},
      {id:'m3q47',text:'¿Los trabajadores con régimen de comisiones exclusivas (sin sueldo base) reciben al menos el IMM garantizado mensualmente?',risk:'a',peso:3,norm:'Art. 44 inc. 3 CT; Ley 20.281',
       opts:[{l:'A',t:'Sí, siempre se garantiza el IMM como mínimo',p:3},{l:'B',t:'No hay trabajadores solo a comisión',p:3},{l:'C',t:'Algunos meses no alcanzan el IMM y no se completa',p:0}],
       cons:'El empleador debe completar la diferencia hasta el IMM cuando las comisiones no lo alcanzan; omitirlo genera multa y cobro retroactivo.'},
      {id:'m3q48',text:'¿Se aplica correctamente el descuento de impuesto único de segunda categoría sobre remuneraciones que superan el tramo exento?',risk:'m',peso:2,norm:'Ley sobre Impuesto a la Renta, Art. 42 N°1',
       opts:[{l:'A',t:'Sí, cálculo correcto y actualizado por tramos',p:2},{l:'B',t:'Cálculo con el software de remuneraciones sin verificación',p:1},{l:'C',t:'No se verifica este cálculo',p:0}],
       cons:'Un cálculo incorrecto del impuesto único genera diferencias que el SII puede reclamar tanto al trabajador como observar al empleador en su rol de agente retenedor.'},
      {id:'m3q49',text:'¿La empresa cuenta con respaldo de la negociación o pacto previo cuando paga remuneraciones superiores al mínimo legal por sobre el contrato escrito (bonos de retención, ad-hoc)?',risk:'b',peso:1,norm:'Art. 42 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, todo beneficio adicional está documentado',p:1},{l:'B',t:'Se otorgan beneficios verbales sin registro',p:0}],
       cons:'Beneficios otorgados reiteradamente sin documentación pueden considerarse tácitamente incorporados al contrato y ser exigibles a futuro.'},
      {id:'m3q50',text:'¿Se revisa el cumplimiento del piso mínimo de gratificación garantizada (4,75 IMM) para trabajadores remunerados bajo el sistema del Art. 50 CT?',risk:'a',peso:3,norm:'Art. 50 CT',
       opts:[{l:'A',t:'Sí, se verifica el piso anual correctamente',p:3},{l:'B',t:'Se paga mensualmente sin verificar el piso anual',p:1},{l:'C',t:'No se ha revisado este punto',p:0}],
       cons:'No verificar el piso de 4,75 IMM anual puede significar un pago insuficiente de gratificación, generando diferencias reclamables.'},
      {id:'m3q51',text:'¿Existen procedimientos documentados para el cálculo de remuneraciones en casos de teletrabajo desde el extranjero o cambio de residencia del trabajador?',risk:'m',peso:2,norm:'Normativa tributaria y previsional internacional; Ley 21.220',
       opts:[{l:'A',t:'Sí, con asesoría especializada caso a caso',p:2},{l:'B',t:'No se ha presentado esta situación',p:2},{l:'C',t:'Se ha presentado sin asesoría adecuada',p:0}],
       cons:'El teletrabajo transfronterizo sin asesoría puede generar doble tributación, incumplimiento previsional en el país de residencia del trabajador y contingencias migratorias.'},
      {id:'m3q52',text:'¿La empresa mantiene respaldo de las planillas de pago bancarias (transferencias) como medio de prueba adicional a la liquidación firmada?',risk:'b',peso:1,norm:'Buenas prácticas probatorias',
       opts:[{l:'A',t:'Sí, conciliación entre transferencias bancarias y liquidaciones',p:1},{l:'B',t:'No se conserva este respaldo cruzado',p:0}],
       cons:'El respaldo bancario refuerza la prueba del pago efectivo de remuneraciones, especialmente útil cuando se cuestiona la autenticidad de una firma en la liquidación.'},
    ]
  },

  mod4: {
    name:'Jornada de trabajo y asistencia',
    niveles:{n1:8,n2:10,n3:10,n4:9,n5:8,n6:7},
    questionsByLevel:{
      n1:[
        {id:'m4n1q1',text:'¿Tiene algún sistema para registrar la asistencia y los horarios de sus trabajadores (libro, planilla, app, reloj control)?',risk:'a',peso:6,norm:'Art. 33 CT',
         opts:[{l:'A',t:'Sí, registro diario y ordenado',p:6},{l:'B',t:'Algo informal, sin mucho control',p:2},{l:'C',t:'No registro asistencia',p:0}],
         cons:'Sin registro, se presume que el trabajador cumplió jornada completa y todas las horas extra que reclame, aunque no sea cierto.'},
        {id:'m4n1q2',text:'¿La jornada semanal de sus trabajadores respeta el máximo legal de 42 horas (vigente desde abril 2026)?',risk:'a',peso:6,norm:'Art. 22 CT; Ley 21.561',
         opts:[{l:'A',t:'Sí, 42 horas o menos',p:6},{l:'B',t:'No estoy seguro del límite actual',p:2},{l:'C',t:'Mis trabajadores hacen más de 42 horas',p:0}],
         cons:'El límite bajó de 44 a 42 horas semanales en abril de 2026, y bajará a 40 horas en 2028. El sueldo no puede reducirse por trabajar menos horas.'},
      ],
      n2:[
        {id:'m4n2q1',text:'¿Tiene un sistema de registro de asistencia ordenado para todos los trabajadores (libro, planilla, app, reloj control)?',risk:'a',peso:6,norm:'Art. 33 CT',
         opts:[{l:'A',t:'Sí, registro diario y ordenado',p:6},{l:'B',t:'Algo informal, sin mucho control',p:2},{l:'C',t:'No registro asistencia',p:0}],
         cons:'Sin registro, se presume que el trabajador cumplió jornada completa y todas las horas extra que reclame, aunque no sea cierto.'},
        {id:'m4n2q2',text:'¿La jornada semanal respeta el máximo legal de 42 horas (vigente desde abril 2026, con tope final de 40 horas en 2028)?',risk:'a',peso:6,norm:'Art. 22 CT; Ley 21.561',
         opts:[{l:'A',t:'Sí, 42 horas o menos',p:6},{l:'B',t:'No estoy seguro del límite actual',p:2},{l:'C',t:'Hay trabajadores con más de 42 horas',p:0}],
         cons:'El límite bajó de 44 a 42 horas semanales en abril de 2026. El sueldo no puede reducirse por trabajar menos horas.'},
        {id:'m4n2q3',text:'Cuando alguien trabaja horas extra, ¿se las paga con 50% de recargo, respetando el máximo de 2 horas diarias?',risk:'a',peso:5,norm:'Arts. 31-32 CT',
         opts:[{l:'A',t:'Sí, siempre con el recargo y dentro del tope',p:5},{l:'B',t:'A veces las compenso de otra forma',p:1},{l:'C',t:'No suelo pagarlas aparte',p:0}],
         cons:'Las horas extra valen 50% más que la hora normal y tienen un tope de 2 horas diarias.'},
        {id:'m4n2q4',text:'¿Sus trabajadores tienen al menos 1 día de descanso a la semana y usan correctamente su feriado legal cada año?',risk:'a',peso:4,norm:'Arts. 35, 67 CT',
         opts:[{l:'A',t:'Sí, ambos se respetan',p:4},{l:'B',t:'El descanso semanal sí, las vacaciones se acumulan',p:2},{l:'C',t:'No siempre se respetan',p:0}],
         cons:'El descanso semanal es irrenunciable. Las vacaciones acumuladas se convierten en un pasivo económico para la empresa.'},
        {id:'m4n2q5',text:'¿Da al menos 30 minutos de colación a sus trabajadores, sin contarlos como parte de la jornada?',risk:'m',peso:3,norm:'Art. 34 CT',
         opts:[{l:'A',t:'Sí, siempre',p:3},{l:'B',t:'A veces no se respeta el tiempo',p:1},{l:'C',t:'No tengo claro esto',p:0}],
         cons:'El tiempo de colación es obligatorio y, salvo acuerdo distinto, no se considera parte de la jornada de trabajo.'},
      ],
      n3:[
        {id:'m4n3q1',text:'¿La empresa mantiene registro de asistencia fidedigno para todos los trabajadores?',risk:'a',peso:5,norm:'Art. 33 CT',
         opts:[{l:'A',t:'Sí, sistema digital o biométrico',p:5},{l:'B',t:'Libro de asistencia con control',p:3},{l:'C',t:'Control parcial o informal',p:1},{l:'D',t:'No existe control',p:0}],
         cons:'Sin registro se presume que el trabajador laboró jornada completa con todas las horas extra reclamadas.'},
        {id:'m4n3q2',text:'¿La jornada ordinaria pactada cumple con el límite de 42 horas semanales vigente desde abril 2026?',risk:'a',peso:5,norm:'Art. 22 CT; Ley 21.561',
         opts:[{l:'A',t:'Sí, ya adaptada a 42 horas o menos',p:5},{l:'B',t:'En transición, con plan documentado',p:3},{l:'C',t:'Aún en 44 horas sin actualización',p:0}],
         cons:'La reducción de jornada es gradual pero obligatoria. Empresas que no adecuen su jornada incumplen la ley.'},
        {id:'m4n3q3',text:'¿Se respeta el máximo de 2 horas extraordinarias diarias y se pagan con 50% de recargo?',risk:'a',peso:4,norm:'Arts. 31-32 CT',
         opts:[{l:'A',t:'Sí, con control del tope y pago correcto',p:4},{l:'B',t:'Se superan ocasionalmente sin control',p:1},{l:'C',t:'No se controla el límite',p:0}],
         cons:'Las horas extra sobre el límite son igualmente exigibles para el trabajador y generan multa por jornada excesiva.'},
        {id:'m4n3q4',text:'¿Se otorga el descanso semanal y se respetan los feriados legales con compensación cuando corresponde?',risk:'a',peso:4,norm:'Arts. 35-38 CT',
         opts:[{l:'A',t:'Sí, siempre',p:4},{l:'B',t:'Hay casos sin compensación adecuada',p:1},{l:'C',t:'No siempre se respeta',p:0}],
         cons:'Omisión del descanso semanal genera multa 1 a 20 UTM; laborar en feriado sin compensación, multa de 1 a 60 UTM.'},
        {id:'m4n3q5',text:'¿Se respeta el tiempo de colación de al menos 30 minutos, sin contarlo como parte de la jornada?',risk:'m',peso:3,norm:'Art. 34 CT',
         opts:[{l:'A',t:'Sí, siempre',p:3},{l:'B',t:'A veces no se respeta',p:1},{l:'C',t:'No tengo claro esto',p:0}],
         cons:'El tiempo de colación es obligatorio y, salvo acuerdo distinto, no se considera parte de la jornada.'},
        {id:'m4n3q6',text:'¿Ha identificado si algún trabajador está excluido del límite de jornada (ej. cargos de confianza sin supervisión directa)?',risk:'m',peso:3,norm:'Art. 22 inc. 2° CT',
         opts:[{l:'A',t:'Sí, identificado y documentado',p:3},{l:'B',t:'No estoy seguro de quién aplica',p:1},{l:'C',t:'No he revisado esto',p:0}],
         cons:'La exclusión de jornada es excepcional; aplicarla mal genera reclamos por horas extra no pagadas.'},
      ],
      n4:[
      {id:'m4n4q1',text:'¿La empresa mantiene registro de asistencia fidedigno para todos los trabajadores (biométrico, tarjeta, sistema digital)?',risk:'a',peso:5,norm:'Art. 33 CT',
       opts:[{l:'A',t:'Sí, sistema digital o biométrico inviolable',p:5},{l:'B',t:'Libro de asistencia en papel con control',p:3},{l:'C',t:'Control parcial o informal',p:1},{l:'D',t:'No existe control de asistencia',p:0}],
       cons:'Sin registro se presume que el trabajador laboró jornada completa con todas las horas extra reclamadas.'},
      {id:'m4n4q2',text:'¿La jornada ordinaria pactada cumple con el límite de 42 horas semanales vigente desde abril de 2026 según la Ley 21.561 (con tope final de 40 horas en abril de 2028)?',risk:'a',peso:5,norm:'Art. 22 CT; Ley 21.561',
       opts:[{l:'A',t:'Sí, ya adaptada a 42 horas o menos',p:5},{l:'B',t:'En transición, con plan documentado',p:3},{l:'C',t:'Aún en 44 horas sin actualización',p:0}],
       cons:'La reducción de jornada es gradual pero obligatoria. Empresas que no adecuen su jornada al calendario vigente incumplen la ley.'},
      {id:'m4n4q3',text:'¿Se respeta el máximo de 2 horas extraordinarias diarias y el tope de 12 horas semanales?',risk:'a',peso:4,norm:'Art. 31 CT',
       opts:[{l:'A',t:'Sí, con control estricto del tope diario y semanal',p:4},{l:'B',t:'Ocasionalmente se superan sin control',p:1},{l:'C',t:'No se controla el límite',p:0}],
       cons:'Las horas extra sobre el límite son igualmente exigibles para el trabajador y generan multa por jornada excesiva.'},
      {id:'m4n4q4',text:'¿Se otorga el descanso semanal de al menos un día completo (domingo o día compensatorio)?',risk:'a',peso:5,norm:'Art. 35 CT',
       opts:[{l:'A',t:'Sí, todos los trabajadores descansan al menos 1 día por semana',p:5},{l:'B',t:'Hay casos sin descanso compensatorio',p:0}],
       cons:'Omisión del descanso semanal genera multa 1 a 20 UTM y el trabajador puede demandar los días no descansados.'},
      {id:'m4n4q5',text:'¿Se respetan y pagan correctamente los feriados legales, con descanso compensatorio o recargo para quienes trabajan esos días?',risk:'a',peso:4,norm:'Arts. 35-38 CT',
       opts:[{l:'A',t:'Sí, con descanso compensatorio o pago diferenciado',p:4},{l:'B',t:'Se trabaja sin compensación adicional',p:0}],
       cons:'Laborar en feriado irrenunciable sin compensación genera multa de 1 a 60 UTM.'},
      {id:'m4n4q6',text:'¿La empresa ha adaptado los sistemas de control de jornada al calendario de reducción gradual de la Ley 21.561?',risk:'a',peso:3,norm:'Ley 21.561',
       opts:[{l:'A',t:'Sí, sistema actualizado y comunicado a trabajadores',p:3},{l:'B',t:'En proceso de actualización',p:1},{l:'C',t:'No se ha actualizado',p:0}],
       cons:'El no actualizar el sistema de control de jornada al calendario de reducción genera errores en el cálculo de horas extra desde el primer día de la nueva jornada.'},
      ],
      n5:[
        {id:'m4n5q1',text:'¿La empresa cuenta con sistema de control de asistencia biométrico o digital integrado al software de remuneraciones, con trazabilidad completa de entradas, salidas y horas extra?',risk:'a',peso:5,norm:'Art. 33 CT; Ley 21.561',
         opts:[{l:'A',t:'Sí, sistema integrado con trazabilidad completa',p:5},{l:'B',t:'Sistema parcialmente integrado',p:2},{l:'C',t:'Sin integración entre asistencia y remuneraciones',p:0}],
         cons:'Sin integración entre control de asistencia y remuneraciones, los errores en horas extra son inevitables a escala de 200+ trabajadores.'},
        {id:'m4n5q2',text:'¿La jornada ordinaria de todos los trabajadores cumple con el límite de 42 horas semanales vigente (Ley 21.561) y los contratos han sido actualizados para reflejar este cambio?',risk:'a',peso:5,norm:'Art. 22 CT; Ley 21.561 (vigente desde abril 2026)',
         opts:[{l:'A',t:'Sí, contratos actualizados y jornada adaptada',p:5},{l:'B',t:'Adaptado operacionalmente sin actualizar contratos',p:2},{l:'C',t:'Sin actualización',p:0}],
         cons:'La Ley 21.561 es de orden público: el sueldo no puede reducirse por la reducción de jornada. Los contratos que aún dicen 44 horas pueden ser usados como argumento para reclamar diferencias.'},
        {id:'m4n5q3',text:'¿Las horas extra son autorizadas por sistema formal (sistema digital o formulario firmado) y pagadas con 50% de recargo, respetando el tope de 12 horas semanales?',risk:'a',peso:5,norm:'Arts. 31-32 CT',
         opts:[{l:'A',t:'Sí, autorización digital y pago automático con recargo',p:5},{l:'B',t:'Autorización informal con pago manual',p:2},{l:'C',t:'Sin control de autorización ni tope',p:0}],
         cons:'Las horas extra no autorizadas o sin tope controlado son el mayor riesgo de jornada en empresa mediana. Un solo turno con 3 o más horas extra diarias genera multa y diferencias de haberes.'},
        {id:'m4n5q4',text:'¿Los trabajadores excluidos de límite de jornada (Art. 22 inc. 2°) están identificados formalmente con justificación documentada en su contrato o ficha de cargo?',risk:'a',peso:4,norm:'Art. 22 inc. 2° CT',
         opts:[{l:'A',t:'Sí, lista formal con justificación documentada por cargo',p:4},{l:'B',t:'Identificados informalmente sin documentación',p:1},{l:'C',t:'No se ha analizado la exclusión de jornada',p:0}],
         cons:'La exclusión de jornada aplicada sin justificación técnica es equivalente a no pagar horas extra. La DT revierte la exclusión y obliga a pagar todas las horas sobre jornada ordinaria.'},
        {id:'m4n5q5',text:'¿La empresa tiene política formal de descanso compensatorio para trabajadores que laboran en feriados, con registro documentado y pago diferenciado según normativa?',risk:'a',peso:4,norm:'Arts. 35-38 CT',
         opts:[{l:'A',t:'Sí, política documentada con registro de feriados trabajados',p:4},{l:'B',t:'Sin política formal aunque se otorga compensación',p:2},{l:'C',t:'Sin compensación ni registro',p:0}],
         cons:'El trabajo en feriados sin compensación correcta es infracción frecuente en empresas de turno. La multa puede llegar a 60 UTM por evento.'},
        {id:'m4n5q6',text:'¿Los trabajadores en turno o jornada excepcional (Art. 38 CT) tienen resolución de la DT vigente y los registros de turno se ajustan al ciclo autorizado?',risk:'a',peso:4,norm:'Art. 38 CT; DS 101',
         opts:[{l:'A',t:'Sí, resolución vigente y ciclos documentados',p:4},{l:'B',t:'Resolución vencida o en trámite de renovación',p:1},{l:'C',t:'Sin resolución DT para jornada excepcional',p:0},{l:'D',t:'No aplica (sin jornada excepcional)',p:4}],
         cons:'Operar con jornada excepcional sin resolución DT vigente equivale a jornada ordinaria, transformando los descansos del ciclo en días de trabajo no pagado reclamables por los trabajadores.'},
      ],
      n6:[
        {id:'m4n6q1',text:'¿El sistema de control de asistencia es biométrico o digital, integrado en tiempo real al HRIS, con auditoría mensual automatizada de consistencia entre asistencia, turno planificado y liquidación?',risk:'a',peso:5,norm:'Art. 33 CT; Ley 21.561',
         opts:[{l:'A',t:'Sí, integración en tiempo real con auditoría automática',p:5},{l:'B',t:'Integración parcial con auditoría manual',p:2},{l:'C',t:'Sin integración entre asistencia y HRIS',p:0}],
         cons:'En 500+ trabajadores, la falta de integración en tiempo real entre asistencia y remuneraciones genera errores sistemáticos que se acumulan mes a mes.'},
        {id:'m4n6q2',text:'¿La reducción de jornada Ley 21.561 está completamente implementada en contratos, sistemas y comunicación a trabajadores, con registro de aceptación?',risk:'a',peso:5,norm:'Ley 21.561; Art. 22 CT',
         opts:[{l:'A',t:'Sí, implementación completa con registro documentado',p:5},{l:'B',t:'Implementación operacional sin respaldo contractual',p:2},{l:'C',t:'Sin implementación documentada',p:0}],
         cons:'En gran empresa, cualquier incumplimiento de la Ley 21.561 que afecte a decenas de trabajadores puede transformarse en demanda colectiva con impacto económico y reputacional significativo.'},
        {id:'m4n6q3',text:'¿Las horas extra son aprobadas por sistema digital con niveles de autorización (jefatura directa + RRHH), límite automático al tope legal y pago integrado al software de nómina?',risk:'a',peso:5,norm:'Arts. 31-32 CT',
         opts:[{l:'A',t:'Sí, proceso digital completo con límite automático',p:5},{l:'B',t:'Aprobación digital sin límite automático',p:2},{l:'C',t:'Sin proceso formal digitalizado',p:0}],
         cons:'A escala de 500+ trabajadores, incluso un pequeño porcentaje de horas extra no controladas puede representar millones en diferencias de haberes anuales.'},
        {id:'m4n6q4',text:'¿La política de trabajo en feriados incluye registro automatizado, pago diferenciado según turno y compensación documentada, con reporte mensual a RRHH y gerencia?',risk:'a',peso:4,norm:'Arts. 35-38 CT',
         opts:[{l:'A',t:'Sí, proceso automatizado con reporte mensual',p:4},{l:'B',t:'Proceso manual con registro',p:2},{l:'C',t:'Sin política ni registro formal',p:0}],
         cons:'En gran empresa con múltiples turnos y centros de trabajo, la gestión de feriados sin automatización genera errores en cientos de liquidaciones simultáneamente.'},
        {id:'m4n6q5',text:'¿Los trabajadores excluidos de límite de jornada están documentados formalmente con análisis legal de cada cargo, actualizado en los últimos 12 meses?',risk:'a',peso:4,norm:'Art. 22 inc. 2° CT',
         opts:[{l:'A',t:'Sí, lista formal con análisis legal por cargo actualizado',p:4},{l:'B',t:'Lista sin análisis legal actualizado',p:1},{l:'C',t:'Sin documentación formal',p:0}],
         cons:'En gran empresa, la DT puede solicitar la justificación de exclusión para cientos de cargos simultáneamente. Sin análisis legal actualizado, la empresa queda expuesta a un riesgo masivo.'},
        {id:'m4n6q6',text:'¿Las jornadas excepcionales (Art. 38 CT) tienen resoluciones DT vigentes, ciclos planificados en el sistema de turnos y auditoría semestral de cumplimiento del ciclo autorizado?',risk:'a',peso:4,norm:'Art. 38 CT; DS 101',
         opts:[{l:'A',t:'Sí, resoluciones vigentes y auditoría semestral documentada',p:4},{l:'B',t:'Resoluciones vigentes sin auditoría formal',p:2},{l:'C',t:'Sin resoluciones o con vencimientos no controlados',p:0},{l:'D',t:'No aplica',p:4}],
         cons:'La jornada excepcional vencida en gran empresa puede afectar a cientos de trabajadores simultáneamente, con riesgo de pago retroactivo de todas las horas trabajadas en el ciclo.'},
        {id:'m4n6q7',text:'¿La empresa tiene KPIs de jornada (horas extra por área, ausentismo, trabajo en feriados, violaciones del tope de jornada) con reporte mensual al directorio?',risk:'m',peso:3,norm:'Buenas prácticas de gobierno corporativo; Ley 21.561',
         opts:[{l:'A',t:'Sí, KPIs mensuales con reporte al directorio',p:3},{l:'B',t:'KPIs internos sin reporte al directorio',p:1},{l:'C',t:'Sin KPIs de jornada',p:0}],
         cons:'Sin visibilidad del directorio sobre los KPIs de jornada, es imposible detectar patrones de riesgo que podrían generar contingencias laborales masivas.'},
      ],
    },
    questions:[
      {id:'m4q1',text:'¿La empresa mantiene registro de asistencia fidedigno para todos los trabajadores (biométrico, tarjeta, sistema digital)?',risk:'a',peso:5,norm:'Art. 33 CT',
       opts:[{l:'A',t:'Sí, sistema digital o biométrico inviolable',p:5},{l:'B',t:'Libro de asistencia en papel con control',p:3},{l:'C',t:'Control parcial o informal',p:1},{l:'D',t:'No existe control de asistencia',p:0}],
       cons:'Sin registro se presume que el trabajador laboró jornada completa con todas las horas extra reclamadas.'},
      {id:'m4q2',text:'¿La jornada ordinaria pactada cumple con el límite de 42 horas semanales vigente desde abril de 2026 según la Ley 21.561 (con tope final de 40 horas en abril de 2028)?',risk:'a',peso:5,norm:'Art. 22 CT; Ley 21.561',
       opts:[{l:'A',t:'Sí, ya adaptada a 42 horas o menos',p:5},{l:'B',t:'En transición, con plan documentado',p:3},{l:'C',t:'Aún en 44 horas sin actualización',p:0}],
       cons:'La reducción de jornada es gradual pero obligatoria. Empresas que no adecuen su jornada al calendario vigente incumplen la ley.'},
      {id:'m4q3',text:'¿Se respeta el máximo de 2 horas extraordinarias diarias y el tope de 12 horas semanales?',risk:'a',peso:4,norm:'Art. 31 CT',
       opts:[{l:'A',t:'Sí, con control estricto del tope diario y semanal',p:4},{l:'B',t:'Ocasionalmente se superan sin control',p:1},{l:'C',t:'No se controla el límite',p:0}],
       cons:'Las horas extra sobre el límite son igualmente exigibles para el trabajador y generan multa por jornada excesiva.'},
      {id:'m4q4',text:'¿Se otorga el descanso mínimo de 30 minutos de colación, no imputable a la jornada de trabajo?',risk:'m',peso:3,norm:'Art. 34 CT',
       opts:[{l:'A',t:'Sí, siempre garantizado y no descontado de la jornada',p:3},{l:'B',t:'No siempre se respeta',p:1},{l:'C',t:'No se controla',p:0}],
       cons:'Omisión sistemática del descanso de colación puede exigirse como horas trabajadas no pagadas.'},
      {id:'m4q5',text:'¿Se otorga el descanso semanal de al menos un día completo (domingo o día compensatorio)?',risk:'a',peso:5,norm:'Art. 35 CT',
       opts:[{l:'A',t:'Sí, todos los trabajadores descansan al menos 1 día por semana',p:5},{l:'B',t:'Hay casos sin descanso compensatorio',p:0}],
       cons:'Omisión del descanso semanal genera multa 1 a 20 UTM y el trabajador puede demandar los días no descansados.'},
      {id:'m4q6',text:'¿Los trabajadores exceptuados de jornada tienen esa excepción expresamente establecida en su contrato?',risk:'a',peso:4,norm:'Art. 22 inc.2 CT',
       opts:[{l:'A',t:'Sí, contrato especifica expresamente la excepción',p:4},{l:'B',t:'Se aplica la excepción de hecho sin contrato',p:0},{l:'C',t:'No hay trabajadores sin jornada',p:4}],
       cons:'El abuso de la excepción del Art. 22 puede ser impugnado en juicio, obligando al pago retroactivo de horas extra.'},
      {id:'m4q7',text:'¿Los teletrabajadores tienen control de jornada acordado y documentado conforme a Ley 21.220?',risk:'a',peso:4,norm:'Ley 21.220; Art. 22 CT',
       opts:[{l:'A',t:'Sí, con herramienta de control acordada y documento firmado',p:4},{l:'B',t:'Sin control específico para teletrabajadores',p:1},{l:'C',t:'No hay teletrabajadores',p:4}],
       cons:'Teletrabajadores sin control de jornada pueden reclamar horas extra presumiendo jornada máxima legal.'},
      {id:'m4q8',text:'¿Los pactos de distribución de jornada especial (4x3, 5x2, turnos rotativos) están documentados por escrito y firmados?',risk:'m',peso:3,norm:'Art. 28 CT; Ley 21.561',
       opts:[{l:'A',t:'Sí, por escrito y firmados por ambas partes',p:3},{l:'B',t:'Acuerdos verbales sin respaldo escrito',p:0},{l:'C',t:'No hay pactos especiales',p:3}],
       cons:'Pactos de distribución sin acuerdo escrito son nulos; se aplica jornada ordinaria legal.'},
      {id:'m4q9',text:'¿Se respetan y pagan correctamente los feriados legales, con descanso compensatorio o recargo para quienes trabajan esos días?',risk:'a',peso:4,norm:'Arts. 35-38 CT',
       opts:[{l:'A',t:'Sí, con descanso compensatorio o pago diferenciado',p:4},{l:'B',t:'Se trabaja sin compensación adicional',p:0}],
       cons:'Laborar en feriado irrenunciable sin compensación genera multa de 1 a 60 UTM.'},
      {id:'m4q10',text:'¿Se cumplen los permisos parentales (postnatal paternal 5 días, lactancia, cuidado de hijos enfermos)?',risk:'a',peso:3,norm:'Arts. 195, 199, 206 CT; Ley 20.891',
       opts:[{l:'A',t:'Sí, todos garantizados y documentados',p:3},{l:'B',t:'Solo algunos se otorgan',p:1},{l:'C',t:'No siempre se conceden',p:0}],
       cons:'Negativa del postnatal paternal: multa 14 a 70 UTM. Negativa de sala cuna o reducción por lactancia: multa 14 a 70 UTM.'},
      {id:'m4q11',text:'¿Los regímenes especiales de jornada para actividades exceptuadas (comercio, hotelería, transporte) cuentan con resolución DT vigente?',risk:'a',peso:3,norm:'Art. 38 CT',
       opts:[{l:'A',t:'Sí, con resolución DT vigente y actualizada',p:3},{l:'B',t:'Se aplica sin resolución DT',p:0},{l:'C',t:'No aplica a la actividad',p:3}],
       cons:'Jornada excepcional sin resolución DT es ilegal; los días trabajados pueden exigirse como horas extra.'},
      {id:'m4q12',text:'¿Los trabajadores con jornada parcial no superan habitualmente las horas pactadas en el contrato?',risk:'a',peso:3,norm:'Art. 40 bis CT',
       opts:[{l:'A',t:'Sí, se controla que no superen las horas del contrato',p:3},{l:'B',t:'Ocasionalmente las superan',p:1},{l:'C',t:'Regularmente las superan',p:0},{l:'D',t:'No hay jornada parcial',p:3}],
       cons:'Superar habitualmente las horas pactadas en jornada parcial puede transformar el contrato en jornada completa con retroactividad.'},
      {id:'m4q13',text:'¿El registro de asistencia está protegido contra adulteraciones (marcas por terceros, duplicación de marcas)?',risk:'a',peso:4,norm:'Art. 33 CT; circulares DT',
       opts:[{l:'A',t:'Sí, biometría o sistema con control de integridad',p:4},{l:'B',t:'Solo libro en papel; posibilidad de adulteración',p:1},{l:'C',t:'No se controla la integridad del sistema',p:0}],
       cons:'Registros adulterados invalidan el control de jornada y dejan sin defensa a la empresa ante demandas por horas extra.'},
      {id:'m4q14',text:'¿Los trabajadores con modalidad de disponibilidad o turno de llamada tienen el régimen documentado y compensado?',risk:'m',peso:2,norm:'Arts. 22 bis, 38 CT',
       opts:[{l:'A',t:'Sí, documentado y compensado conforme a la ley',p:2},{l:'B',t:'Hay disponibilidad informal sin compensación',p:0},{l:'C',t:'No aplica',p:2}],
       cons:'La disponibilidad no remunerada puede configurar trabajo no pagado exigible retroactivamente.'},
      {id:'m4q15',text:'¿Los contratos de aprendizaje tienen la jornada diferenciada aplicada correctamente (máx. 8 hrs/día, sin horas extra)?',risk:'b',peso:1,norm:'Arts. 77-80 CT',
       opts:[{l:'A',t:'Sí, jornada diferenciada aplicada',p:1},{l:'B',t:'No hay aprendices',p:1},{l:'C',t:'No se aplica diferencia',p:0}],
       cons:'Los aprendices tienen jornada máxima de 8 horas diarias y no pueden realizar horas extra.'},
      {id:'m4q16',text:'¿Se monitorea el uso del tiempo de colación y otros descansos para asegurar que no se conviertan en tiempo efectivo de trabajo no pagado?',risk:'m',peso:2,norm:'Art. 34 CT',
       opts:[{l:'A',t:'Sí, con supervisión activa',p:2},{l:'B',t:'Solo en puestos críticos',p:1},{l:'C',t:'No se monitorea',p:0}],
       cons:'Si el trabajador habitualmente trabaja durante la colación y puede demostrarlo, ese tiempo es exigible como jornada extraordinaria.'},
      {id:'m4q17',text:'¿Los cambios de turno o modificaciones de jornada se comunican con la anticipación suficiente y se documentan?',risk:'m',peso:2,norm:'Art. 45 CT',
       opts:[{l:'A',t:'Sí, con planilla escrita y anticipación mínima de 1 semana',p:2},{l:'B',t:'Comunicación verbal con poca anticipación',p:1},{l:'C',t:'Sin planificación formal',p:0}],
       cons:'Cambios unilaterales frecuentes de turno sin comunicación pueden configurar modificación unilateral de contrato.'},
      {id:'m4q18',text:'¿La empresa ha adaptado los sistemas de control de jornada al calendario de reducción gradual de la Ley 21.561?',risk:'a',peso:3,norm:'Ley 21.561',
       opts:[{l:'A',t:'Sí, sistema actualizado y comunicado a trabajadores',p:3},{l:'B',t:'En proceso de actualización',p:1},{l:'C',t:'No se ha actualizado',p:0}],
       cons:'El no actualizar el sistema de control de jornada al calendario de reducción genera errores en el cálculo de horas extra desde el primer día de la nueva jornada.'},
      {id:'m4q19',text:'¿Los supervisores y jefaturas conocen y aplican correctamente las normas de jornada y horas extra?',risk:'a',peso:3,norm:'Art. 32 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, capacitación formal y control de cumplimiento',p:3},{l:'B',t:'Conocimiento informal sin capacitación',p:1},{l:'C',t:'No hay instrucción a jefaturas en esta materia',p:0}],
       cons:'La jefatura que autoriza verbalmente horas extra sin control genera responsabilidad directa para la empresa.'},
      {id:'m4q20',text:'¿Existe un procedimiento para registrar y gestionar los permisos individuales (médicos, personales, sindicales) con respaldo documental?',risk:'m',peso:2,norm:'Arts. 66, 199, 249 CT',
       opts:[{l:'A',t:'Sí, con formulario y archivo por trabajador',p:2},{l:'B',t:'Registro informal',p:1},{l:'C',t:'No hay registro de permisos',p:0}],
       cons:'Sin registro de permisos, la empresa no puede distinguir entre ausencias justificadas y abandono, ni controlar el saldo de licencias.'},
      {id:'m4q21',text:'¿Los trabajadores con sistema de turnos rotativos tienen su ciclo de turnos documentado y respetan los descansos mínimos entre turno y turno?',risk:'a',peso:3,norm:'Art. 28 CT; DS 594 (fatiga laboral)',
       opts:[{l:'A',t:'Sí, ciclo documentado con descansos mínimos respetados',p:3},{l:'B',t:'Turnos rotativos sin descanso mínimo garantizado',p:0},{l:'C',t:'No hay turnos rotativos',p:3}],
       cons:'Turnos rotativos sin descanso suficiente entre ciclos generan fatiga laboral, mayor riesgo de accidentes y posible responsabilidad por enfermedad profesional.'},
      {id:'m4q22',text:'¿La empresa controla que el sistema de marcaje de entrada y salida registre también las salidas a colación cuando corresponde?',risk:'m',peso:2,norm:'Art. 33-34 CT',
       opts:[{l:'A',t:'Sí, se registra entrada, salida a colación, regreso y salida final',p:2},{l:'B',t:'Solo se registra entrada y salida general',p:1},{l:'C',t:'No se registra colación',p:0}],
       cons:'Sin registro de colación, no es posible verificar si efectivamente se otorgó el descanso o si fue trabajo efectivo no remunerado como tal.'},
      {id:'m4q23',text:'¿Los trabajadores que realizan jornada de gestación o tienen fuero maternal cuentan con adecuaciones de jornada cuando es médicamente necesario?',risk:'a',peso:3,norm:'Art. 202 CT; Art. 195 CT',
       opts:[{l:'A',t:'Sí, se otorgan adecuaciones con certificado médico',p:3},{l:'B',t:'No se han presentado solicitudes',p:3},{l:'C',t:'Se han negado adecuaciones solicitadas',p:0}],
       cons:'Negar una adecuación de jornada por embarazo respaldada médicamente puede configurar vulneración de derechos fundamentales y discriminación por maternidad.'},
      {id:'m4q24',text:'¿Se controla el cumplimiento del límite de jornada para trabajadores con más de un empleador (pluriempleo), evitando jornadas combinadas excesivas?',risk:'b',peso:1,norm:'Art. 22 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, se consulta al ingreso si hay otro empleo',p:1},{l:'B',t:'No se consulta ni controla',p:0}],
       cons:'Aunque el control de pluriempleo no es obligación directa del empleador, ayuda a prevenir riesgos de fatiga y posibles conflictos de horario.'},
      {id:'m4q25',text:'¿El sistema de control de jornada permite identificar y reportar de forma automática las desviaciones (atrasos, ausencias, horas extra no autorizadas)?',risk:'m',peso:2,norm:'Buenas prácticas; Art. 33 CT',
       opts:[{l:'A',t:'Sí, con reportes automáticos y alertas',p:2},{l:'B',t:'Revisión manual periódica',p:1},{l:'C',t:'No hay reportes de desviaciones',p:0}],
       cons:'Sin reportes automáticos, las desviaciones de jornada se acumulan sin control y solo se detectan al cierre de cada período de pago.'},
      {id:'m4q26',text:'¿Los choferes y trabajadores de transporte cumplen con los límites de conducción continua y descanso establecidos en la normativa especial?',risk:'a',peso:3,norm:'Art. 25 CT (choferes); Ley 21.484',
       opts:[{l:'A',t:'Sí, con bitácora de conducción y descansos',p:3},{l:'B',t:'No hay trabajadores de transporte',p:3},{l:'C',t:'Sin control de tiempos de conducción',p:0}],
       cons:'El incumplimiento de descansos en conductores genera riesgo de accidentes de tránsito graves con responsabilidad civil y penal para la empresa.'},
      {id:'m4q27',text:'¿Se respeta el derecho a un día de descanso adicional cuando coinciden dos días de descanso semanal consecutivos por trabajo en sistema excepcional?',risk:'m',peso:2,norm:'Art. 38 inc. 4 CT',
       opts:[{l:'A',t:'Sí, se respeta cuando corresponde',p:2},{l:'B',t:'No aplica este sistema excepcional',p:2},{l:'C',t:'No se ha verificado este punto',p:0}],
       cons:'En sistemas excepcionales de jornada, omitir el día de descanso adicional que corresponda genera multa y compensación pendiente al trabajador.'},
      {id:'m4q28',text:'¿La empresa cuenta con protocolo de gestión de jornada para trabajadores en comisión de servicios o viajes de trabajo (cómputo de horas de traslado)?',risk:'m',peso:2,norm:'Jurisprudencia DT sobre tiempo de traslado',
       opts:[{l:'A',t:'Sí, protocolo claro sobre cómputo de horas de viaje',p:2},{l:'B',t:'No hay viajes de trabajo frecuentes',p:2},{l:'C',t:'Sin criterio definido',p:0}],
       cons:'El tiempo de traslado en comisión de servicios puede considerarse jornada laboral según el caso, generando horas extra no contempladas.'},
      {id:'m4q29',text:'¿Existe control de jornada diferenciado para trabajadores con jornada de menos de 5 días a la semana (4 días, jornada comprimida)?',risk:'m',peso:2,norm:'Ley 21.561; Art. 28 CT',
       opts:[{l:'A',t:'Sí, control diferenciado correctamente implementado',p:2},{l:'B',t:'No hay jornada comprimida',p:2},{l:'C',t:'Se aplica sin control diferenciado',p:0}],
       cons:'La jornada comprimida exige distribución pactada por escrito; sin control diferenciado puede generar errores en el cómputo de horas extra.'},
      {id:'m4q30',text:'¿Se garantiza el cumplimiento del descanso de al menos 12 horas continuas entre el término de una jornada y el inicio de la siguiente?',risk:'a',peso:3,norm:'Principio de descanso interjornada; DS 594 (fatiga)',
       opts:[{l:'A',t:'Sí, siempre se respetan al menos 12 horas',p:3},{l:'B',t:'En ocasiones se reduce este descanso',p:1},{l:'C',t:'No se controla este aspecto',p:0}],
       cons:'Jornadas con descanso interjornada insuficiente incrementan el riesgo de fatiga laboral y accidentes, con responsabilidad del empleador en caso de siniestro.'},
      {id:'m4q31',text:'¿Los registros de asistencia se conservan por el plazo mínimo requerido para sustentar eventuales fiscalizaciones o demandas (al menos 2 años)?',risk:'m',peso:2,norm:'Art. 33 CT; Art. 510 CT',
       opts:[{l:'A',t:'Sí, se conservan al menos 2 años',p:2},{l:'B',t:'Se conservan menos de 1 año',p:0},{l:'C',t:'No hay política de retención definida',p:0}],
       cons:'Sin registros históricos de asistencia, la empresa no puede defenderse de demandas por horas extra de períodos anteriores dentro del plazo de prescripción.'},
      {id:'m4q32',text:'¿La empresa diferencia correctamente la jornada de trabajadores agrícolas o de temporada según las normas especiales aplicables al sector?',risk:'m',peso:2,norm:'Art. 88-91 CT (trabajadores agrícolas)',
       opts:[{l:'A',t:'Sí, normas especiales aplicadas correctamente',p:2},{l:'B',t:'No aplica (no es sector agrícola)',p:2},{l:'C',t:'Se aplica el régimen general sin diferenciación',p:0}],
       cons:'Los trabajadores agrícolas tienen régimen de jornada diferenciado por estacionalidad; aplicar el régimen general incorrectamente puede generar incumplimientos específicos.'},
      {id:'m4q33',text:'¿Se controla que los trabajadores no laboren de forma encubierta durante sus vacaciones (ej. responder correos, llamadas de trabajo)?',risk:'m',peso:2,norm:'Art. 67-73 CT; derecho a desconexión',
       opts:[{l:'A',t:'Sí, política de no contacto durante vacaciones',p:2},{l:'B',t:'Es común el contacto laboral durante vacaciones',p:0},{l:'C',t:'No se ha evaluado',p:0}],
       cons:'Si el trabajador acredita haber trabajado efectivamente durante su feriado, puede reclamar que este no se le otorgó realmente, generando el pago de un nuevo período.'},
      {id:'m4q34',text:'¿Los trabajadores que cumplen funciones de guardia o vigilancia nocturna tienen su jornada y descansos especialmente regulados conforme a la ley?',risk:'a',peso:3,norm:'Art. 38 CT; jurisprudencia DT sobre vigilantes',
       opts:[{l:'A',t:'Sí, jornada y descansos especialmente regulados',p:3},{l:'B',t:'No hay personal de vigilancia',p:3},{l:'C',t:'Se aplica jornada ordinaria sin diferenciación',p:0}],
       cons:'El personal de vigilancia nocturna suele requerir un régimen de jornada excepcional autorizado por la DT; su omisión genera el régimen general con horas extra exigibles.'},
      {id:'m4q35',text:'¿Existe una política clara sobre cómo se gestionan los días de duelo, fallecimiento de familiares y otros permisos especiales no remunerados o remunerados por ley?',risk:'m',peso:2,norm:'Art. 66 CT (permiso por fallecimiento)',
       opts:[{l:'A',t:'Sí, política clara y conforme a la ley',p:2},{l:'B',t:'Se otorgan caso a caso sin política',p:1},{l:'C',t:'No se conoce o no se aplica la normativa',p:0}],
       cons:'Negar el permiso legal por fallecimiento de un familiar directo (7 a 10 días según el caso) genera multa y posible reclamo ante la Inspección del Trabajo.'},
    ]
  },

  mod5: {
    name:'Ley Karin y protección de datos personales',
    niveles:{n1:12,n2:18,n3:14,n4:13,n5:12,n6:11},
    questionsByLevel:{
      n1:[
        {id:'m5n1q1',text:'¿Tiene un procedimiento (aunque sea simple) para recibir y resolver denuncias de acoso laboral o sexual?',risk:'a',peso:8,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, sé qué hacer si llega una denuncia',p:8},{l:'B',t:'Algo tengo, pero no está escrito',p:3},{l:'C',t:'No tengo ningún procedimiento',p:0}],
         cons:'La Ley Karin exige un procedimiento, sin importar el tamaño de la empresa. No tener nada definido es la infracción más grave: multa hasta 60 UTM.'},
        {id:'m5n1q2',text:'¿Sus trabajadores saben a quién acudir si quieren denunciar acoso o maltrato en el trabajo?',risk:'a',peso:6,norm:'Art. 211-B CT',
         opts:[{l:'A',t:'Sí, lo saben claramente',p:6},{l:'B',t:'Más o menos, no está formalizado',p:2},{l:'C',t:'No, no se ha comunicado nada',p:0}],
         cons:'Si nadie sabe cómo denunciar, en la práctica no existe protección real, aunque exista un papel que lo diga.'},
      ],
      n2:[
        {id:'m5n2q1',text:'¿Tiene un procedimiento, aunque sea simple, para recibir y resolver denuncias de acoso laboral o sexual (Ley Karin)?',risk:'a',peso:7,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, sé qué hacer y tengo un plazo definido (máx. 30 días hábiles)',p:7},{l:'B',t:'Algo tengo, pero no está escrito',p:3},{l:'C',t:'No tengo ningún procedimiento',p:0}],
         cons:'La Ley Karin exige un procedimiento, sin importar el tamaño de la empresa. No tener nada definido es la infracción más grave: multa hasta 60 UTM.'},
        {id:'m5n2q2',text:'¿Sus trabajadores saben a quién acudir y conocen el canal para denunciar acoso o maltrato en el trabajo?',risk:'a',peso:6,norm:'Art. 211-B CT',
         opts:[{l:'A',t:'Sí, canal conocido y comunicado',p:6},{l:'B',t:'Existe pero pocos lo conocen',p:2},{l:'C',t:'No se ha comunicado nada',p:0}],
         cons:'Sin canal conocido, en la práctica no existe protección real ante una denuncia.'},
        {id:'m5n2q3',text:'¿Ha capacitado, aunque sea informalmente, a su equipo sobre qué es y qué no es acoso laboral o sexual?',risk:'m',peso:4,norm:'Art. 211-A CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, lo hemos hablado o capacitado',p:4},{l:'B',t:'No lo hemos conversado formalmente',p:1},{l:'C',t:'No, nunca se ha tocado el tema',p:0}],
         cons:'La capacitación, aunque sea básica, reduce el riesgo de denuncias y demuestra buena fe ante una eventual fiscalización.'},
        {id:'m5n2q4',text:'¿Guarda con cuidado y confidencialidad los datos personales de sus trabajadores (RUT, dirección, datos de salud)?',risk:'m',peso:5,norm:'Ley 19.628; Ley 21.719 (vigencia 1-dic-2026)',
         opts:[{l:'A',t:'Sí, con acceso restringido',p:5},{l:'B',t:'Están guardados pero sin mucho control',p:2},{l:'C',t:'No tengo controles de acceso',p:0}],
         cons:'Desde diciembre de 2026 la nueva Ley de Protección de Datos exige más cuidado en el manejo de esta información. Las empresas según Ley 20.416 reciben amonestación antes de multa en la primera infracción.'},
        {id:'m5n2q5',text:'¿Tiene identificado quién dentro de su empresa sería responsable de actuar frente a una denuncia Ley Karin?',risk:'m',peso:4,norm:'Art. 211-B CT',
         opts:[{l:'A',t:'Sí, hay alguien claramente designado',p:4},{l:'B',t:'No está claro quién asumiría esto',p:1},{l:'C',t:'No lo he pensado',p:0}],
         cons:'Sin un responsable claro, una denuncia puede perderse o tramitarse mal, generando más exposición legal para la empresa.'},
      ],
      n3:[
        {id:'m5n3q1',text:'¿Tiene un procedimiento formal para recibir y resolver denuncias de acoso laboral o sexual (Ley Karin), con plazo definido?',risk:'a',peso:7,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, escrito, difundido, con plazo de 30 días hábiles',p:7},{l:'B',t:'En elaboración, aún no implementado',p:3},{l:'C',t:'No tengo procedimiento',p:0}],
         cons:'La Ley Karin exige un procedimiento, sin importar el tamaño. Su ausencia es la infracción más grave: multa hasta 60 UTM.'},
        {id:'m5n3q2',text:'¿El canal de denuncias es conocido por todos los trabajadores y garantiza confidencialidad?',risk:'a',peso:5,norm:'Art. 211-B CT',
         opts:[{l:'A',t:'Sí, canal conocido y confidencial',p:5},{l:'B',t:'Existe pero pocos lo conocen',p:2},{l:'C',t:'No existe canal formal',p:0}],
         cons:'Sin canal conocido, en la práctica no existe protección real ante una denuncia.'},
        {id:'m5n3q3',text:'¿Se ha capacitado a jefaturas y trabajadores sobre Ley Karin, con registro de asistencia?',risk:'a',peso:5,norm:'Art. 211-A CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, con registro de asistencia',p:5},{l:'B',t:'Solo informalmente, sin registro',p:2},{l:'C',t:'No se ha capacitado',p:0}],
         cons:'Sin evidencia de capacitación la empresa no puede demostrar cumplimiento ante la Dirección del Trabajo.'},
        {id:'m5n3q4',text:'¿Guarda con cuidado y confidencialidad los datos personales de sus trabajadores, con acceso restringido?',risk:'m',peso:5,norm:'Ley 19.628; Ley 21.719 (vigencia 1-dic-2026)',
         opts:[{l:'A',t:'Sí, con acceso restringido y políticas claras',p:5},{l:'B',t:'Guardados pero sin mucho control',p:2},{l:'C',t:'Sin controles de acceso',p:0}],
         cons:'Desde diciembre de 2026 la nueva Ley de Protección de Datos exige más cuidado en el manejo de esta información.'},
        {id:'m5n3q5',text:'¿Sabe que en diciembre de 2026 entra en vigencia una ley más estricta de protección de datos y ha empezado a revisar sus procesos?',risk:'b',peso:3,norm:'Ley 21.719',
         opts:[{l:'A',t:'Sí, ya estoy revisando mis procesos',p:3},{l:'B',t:'Sabía algo, sin acción concreta',p:1},{l:'C',t:'No tenía conocimiento',p:0}],
         cons:'Conviene anticiparse: revisar qué datos guarda, dónde, y quién tiene acceso antes de la fiscalización activa.'},
        {id:'m5n3q6',text:'¿Tiene identificado quién sería responsable de actuar frente a una denuncia Ley Karin y de coordinar la respuesta a la Ley 21.719?',risk:'m',peso:4,norm:'Art. 211-B CT; Ley 21.719',
         opts:[{l:'A',t:'Sí, responsable claramente designado para ambos temas',p:4},{l:'B',t:'No está claro quién asumiría esto',p:1},{l:'C',t:'No lo he pensado',p:0}],
         cons:'Sin un responsable claro, tanto una denuncia Karin como una solicitud de datos personales pueden perderse o tramitarse mal.'},
      ],
      n4:[
      {id:'m5n4q1',text:'¿La empresa cuenta con un procedimiento formal de denuncia e investigación de acoso laboral y sexual conforme a Ley 21.643 (Ley Karin)?',risk:'a',peso:6,norm:'Art. 211-B CT; Ley 21.643 (vigente desde 01-ago-2024)',
       opts:[{l:'A',t:'Sí, procedimiento escrito, difundido y con responsable designado',p:6},{l:'B',t:'En elaboración, aún no implementado',p:2},{l:'C',t:'Solo se mencionó en el RIOHS sin procedimiento',p:1},{l:'D',t:'No existe ningún procedimiento',p:0}],
       cons:'Incumplimiento de Ley Karin: multa hasta 60 UTM. La ausencia total de procedimiento es la infracción más grave y genera responsabilidad solidaria de la empresa ante demandas de tutela.'},
      {id:'m5n4q2',text:'¿El canal de denuncias es accesible para todos, garantiza confidencialidad, y los trabajadores saben cómo y a quién denunciar?',risk:'a',peso:5,norm:'Art. 211-B CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, canal formal, conocido y con garantías explícitas documentadas',p:5},{l:'B',t:'Canal existe pero pocos trabajadores lo conocen',p:2},{l:'C',t:'Solo informalmente',p:1},{l:'D',t:'No existe canal',p:0}],
       cons:'Sin canal conocido y accesible, el incumplimiento es inmediato. La empresa también es responsable ante represalias contra el denunciante.'},
      {id:'m5n4q3',text:'¿El procedimiento incluye medidas de resguardo inmediatas para el denunciante durante la investigación, y el proceso se resuelve en máximo 30 días hábiles?',risk:'a',peso:5,norm:'Art. 211-B CT',
       opts:[{l:'A',t:'Sí, con protocolo de medidas cautelares y plazo documentado',p:5},{l:'B',t:'Hay plazo pero sin medidas de resguardo',p:2},{l:'C',t:'No se han definido plazos ni medidas',p:0}],
       cons:'Sin medidas de resguardo la empresa puede ser responsable del daño adicional al denunciante. Procedimiento que supere 30 días hábiles puede declararse nulo.'},
      {id:'m5n4q4',text:'¿Se ha capacitado formalmente a jefaturas y trabajadores sobre Ley Karin, con registro de asistencia?',risk:'a',peso:5,norm:'Art. 211-A CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, capacitación a todos con registro y evaluación',p:5},{l:'B',t:'Solo a jefaturas',p:2},{l:'C',t:'Solo información distribuida, sin capacitación formal',p:1},{l:'D',t:'No se ha capacitado',p:0}],
       cons:'Sin evidencia de capacitación la empresa no puede demostrar cumplimiento ante la DT. La ley exige capacitación periódica, no solo una vez.'},
      {id:'m5n4q5',text:'¿La empresa ha realizado un diagnóstico de brechas ante la Ley 21.719 de Protección de Datos Personales y tiene un plan de adecuación antes del 1-dic-2026?',risk:'a',peso:5,norm:'Ley 21.719 (vigencia 1-dic-2026), Art. 49',
       opts:[{l:'A',t:'Sí, diagnóstico formal con plan aprobado, responsable y presupuesto',p:5},{l:'B',t:'Solo se ha leído la ley, sin diagnóstico ni plan',p:1},{l:'C',t:'No se ha tomado ninguna acción',p:0}],
       cons:'La APDP fiscaliza desde el 1-dic-2026. Sin plan de adecuación, la empresa no alcanzará el cumplimiento en plazo. Multas hasta 20.000 UTM (o 4% ingresos en reincidencia grave).'},
      {id:'m5n4q6',text:'¿Los datos biométricos (huella, rostro), videovigilancia y geolocalización de trabajadores cuentan con consentimiento escrito, finalidad declarada y política documentada?',risk:'a',peso:5,norm:'Ley 21.719 Arts. 2, 9, 14; Art. 5 CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, todo documentado con consentimiento y política',p:5},{l:'B',t:'Se usan pero sin documentación formal',p:1},{l:'C',t:'No se usa ninguno de estos sistemas',p:5},{l:'D',t:'No se ha revisado la base legal',p:0}],
       cons:'Datos biométricos son datos sensibles; su tratamiento ilícito es infracción grave (hasta 10.000 UTM). La videovigilancia sin aviso visible también vulnera el Art. 5 CT.'},
      {id:'m5n4q7',text:'¿La empresa tiene procedimiento para responder solicitudes de derechos ARCO+ (Acceso, Rectificación, Cancelación, Oposición, Portabilidad) en 15 días hábiles?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 19-29',
       opts:[{l:'A',t:'Sí, con canal, responsable y plazo documentado',p:4},{l:'B',t:'Se atendería caso a caso sin procedimiento',p:1},{l:'C',t:'No existe procedimiento',p:0}],
       cons:'No atender una solicitud ARCO+ en plazo es infracción sancionable. Los ex trabajadores también tienen derecho a solicitar eliminación de sus datos.'},
      {id:'m5n4q8',text:'¿La empresa tiene protocolo de notificación de brechas de datos personales a la APDP en 72 horas y controles técnicos de seguridad (cifrado, control de accesos, logs)?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 45-46 y 16',
       opts:[{l:'A',t:'Sí, protocolo de 72 hrs documentado y controles técnicos auditados',p:4},{l:'B',t:'Solo controles básicos (contraseñas), sin protocolo de brecha',p:1},{l:'C',t:'Sin controles técnicos ni protocolo',p:0}],
       cons:'No notificar una brecha en 72 horas es infracción grave (hasta 10.000 UTM). Una brecha por falta de controles básicos puede calificarse como infracción grave adicional.'},
      ],
      n5:[
        {id:'m5n5q1',text:'¿La empresa cuenta con un procedimiento formal Ley Karin con responsable designado, canal confidencial, medidas de resguardo inmediatas y plazo máximo de 30 días hábiles para resolución?',risk:'a',peso:6,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, procedimiento completo, auditado y difundido a todos',p:6},{l:'B',t:'Procedimiento parcial sin algunos requisitos',p:2},{l:'C',t:'Sin procedimiento formal',p:0}],
         cons:'La ausencia de procedimiento completo es la infracción más grave de Ley Karin. A escala de 200+ trabajadores, la probabilidad de una denuncia es alta y la empresa debe estar preparada.'},
        {id:'m5n5q2',text:'¿El canal de denuncias Ley Karin está implementado, es accesible para todos los trabajadores (incluyendo sucursales y teletrabajadores) y garantiza anonimato cuando se solicita?',risk:'a',peso:5,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, canal digital o físico accesible en todos los centros',p:5},{l:'B',t:'Canal solo en casa matriz',p:2},{l:'C',t:'Sin canal formal',p:0}],
         cons:'Un canal inaccesible para trabajadores en sucursales o en teletrabajo es equivalente a no tenerlo para esos trabajadores, generando incumplimiento en esos centros.'},
        {id:'m5n5q3',text:'¿El procedimiento Ley Karin incluye medidas de resguardo inmediatas (separación preventiva, cambio de tareas, etc.) para el denunciante durante la investigación?',risk:'a',peso:5,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, protocolo de medidas cautelares documentado y conocido',p:5},{l:'B',t:'Se aplican caso a caso sin protocolo',p:2},{l:'C',t:'Sin medidas de resguardo definidas',p:0}],
         cons:'Sin medidas de resguardo, la empresa puede ser responsable del daño adicional al denunciante durante la investigación, incluyendo indemnizaciones por daño moral.'},
        {id:'m5n5q4',text:'¿La empresa registra y hace seguimiento de todas las denuncias Ley Karin recibidas, con indicadores de tiempo de resolución, tipo de denuncia y acciones adoptadas?',risk:'a',peso:4,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, registro centralizado con KPIs',p:4},{l:'B',t:'Registro parcial sin KPIs',p:1},{l:'C',t:'Sin registro',p:0}],
         cons:'Sin registro y seguimiento, la empresa no puede demostrar cumplimiento del proceso y no detecta patrones que requieran intervención organizacional.'},
        {id:'m5n5q5',text:'¿Se ha capacitado formalmente a jefaturas y trabajadores sobre Ley Karin con registro de asistencia, evaluación y plan de refuerzo anual?',risk:'a',peso:5,norm:'Art. 211-A CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, capacitación anual con registro, evaluación y plan de refuerzo',p:5},{l:'B',t:'Capacitación inicial sin plan de refuerzo',p:2},{l:'C',t:'Sin capacitación formal',p:0}],
         cons:'La Ley Karin exige capacitación periódica, no solo una vez. Sin registro de asistencia y evaluación, la empresa no puede demostrar cumplimiento ante la DT.'},
        {id:'m5n5q6',text:'¿La empresa tiene diagnóstico de brechas Ley 21.719 completado, con inventario de datos personales, análisis de bases de legitimación y plan de adecuación con plazos?',risk:'a',peso:6,norm:'Ley 21.719; vigencia 1-dic-2026',
         opts:[{l:'A',t:'Sí, diagnóstico formal con plan aprobado y presupuesto asignado',p:6},{l:'B',t:'Diagnóstico iniciado sin plan formal',p:2},{l:'C',t:'Sin diagnóstico',p:0}],
         cons:'La APDP fiscaliza desde diciembre de 2026. Sin diagnóstico completado, la empresa no alcanzará el cumplimiento en plazo. Multas hasta 20.000 UTM.'},
        {id:'m5n5q7',text:'¿Existe un Responsable de Protección de Datos (DPO voluntario o coordinador interno) designado formalmente, con atribuciones y recursos asignados?',risk:'a',peso:4,norm:'Ley 21.719 Art. 50; buenas prácticas',
         opts:[{l:'A',t:'Sí, designado formalmente con atribuciones escritas',p:4},{l:'B',t:'Responsable informal sin designación formal',p:1},{l:'C',t:'Sin responsable designado',p:0}],
         cons:'Sin un responsable formal de datos personales, las solicitudes ARCO+ y las brechas no tienen un punto de contacto claro, generando incumplimiento por omisión.'},
        {id:'m5n5q8',text:'¿Los tratamientos de datos biométricos, videovigilancia y geolocalización de trabajadores tienen base de legitimación explícita, política documentada y consentimiento o base legal alternativa?',risk:'a',peso:5,norm:'Ley 21.719 Arts. 2, 9, 14; Art. 5 CT',
         opts:[{l:'A',t:'Sí, todo documentado con base legal y política',p:5},{l:'B',t:'Se usan sin base legal documentada',p:1},{l:'C',t:'No se usan estos tratamientos',p:5}],
         cons:'Los datos biométricos son datos sensibles bajo Ley 21.719. Su tratamiento sin base legal expresa es infracción grave (hasta 10.000 UTM) desde la entrada en vigor en diciembre 2026.'},
        {id:'m5n5q9',text:'¿La empresa tiene protocolo documentado para responder solicitudes ARCO+ (Acceso, Rectificación, Cancelación, Oposición, Portabilidad) en el plazo legal de 15 días hábiles?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 19-29',
         opts:[{l:'A',t:'Sí, protocolo con canal, responsable y plazo documentado',p:4},{l:'B',t:'Se atendería caso a caso sin protocolo',p:1},{l:'C',t:'Sin protocolo',p:0}],
         cons:'No responder una solicitud ARCO+ en plazo es infracción sancionable. Los ex trabajadores también tienen derechos sobre sus datos y pueden ejercerlos después del término de la relación laboral.'},
      ],
      n6:[
        {id:'m5n6q1',text:'¿La empresa cuenta con un sistema centralizado de gestión de denuncias Ley Karin integrado al HRIS, con workflow automatizado, alertas de plazos y reportería al directorio?',risk:'a',peso:6,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, sistema integrado con alertas automáticas y reporte al directorio',p:6},{l:'B',t:'Sistema de gestión sin integración al HRIS',p:2},{l:'C',t:'Gestión manual de denuncias',p:0}],
         cons:'En 500+ trabajadores, la gestión manual de denuncias Ley Karin es un riesgo operacional. Un caso mal gestionado por error de seguimiento puede generar responsabilidad directa de la empresa.'},
        {id:'m5n6q2',text:'¿Los canales de denuncia Ley Karin incluyen canal digital anónimo, línea telefónica, correo específico y opción de denuncia ante la DT, disponibles en todos los centros y para teletrabajadores?',risk:'a',peso:5,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, multicanal disponible en todos los centros',p:5},{l:'B',t:'Canal único con cobertura parcial',p:2},{l:'C',t:'Sin canal formal',p:0}],
         cons:'En gran empresa con múltiples centros y trabajadores remotos, el canal único o de acceso restringido equivale a denegar el acceso a protección para cientos de trabajadores.'},
        {id:'m5n6q3',text:'¿Los investigadores de denuncias Ley Karin son personas designadas, capacitadas formalmente en técnicas de investigación y con independencia del área involucrada en la denuncia?',risk:'a',peso:5,norm:'Art. 211-B CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, equipo capacitado con protocolo de independencia',p:5},{l:'B',t:'Investigadores designados sin capacitación formal',p:2},{l:'C',t:'Sin investigadores designados',p:0}],
         cons:'Una investigación conducida por personas sin capacitación o con conflicto de interés puede ser declarada nula, reiniciando el proceso con plazos y costos adicionales.'},
        {id:'m5n6q4',text:'¿La empresa publica métricas anuales de Ley Karin (número de denuncias, tipo, tiempo de resolución, acciones adoptadas) en su reporte ESG o memoria de sostenibilidad?',risk:'m',peso:4,norm:'Ley 21.643; estándares GRI',
         opts:[{l:'A',t:'Sí, métricas publicadas en reporte ESG anual',p:4},{l:'B',t:'Métricas internas sin publicación',p:1},{l:'C',t:'Sin métricas formales',p:0}],
         cons:'La transparencia en métricas Ley Karin es un indicador ESG creciente. Su ausencia en gran empresa puede afectar la reputación y la calificación ESG de la empresa.'},
        {id:'m5n6q5',text:'¿La empresa tiene un programa formal de compliance en protección de datos personales (Ley 21.719), con DPO designado, inventario de datos, PIA para tratamientos de alto riesgo y auditoría anual?',risk:'a',peso:6,norm:'Ley 21.719; vigencia 1-dic-2026',
         opts:[{l:'A',t:'Sí, programa formal con DPO, inventario, PIA y auditoría',p:6},{l:'B',t:'Programa parcial sin DPO ni auditoría',p:2},{l:'C',t:'Sin programa formal',p:0}],
         cons:'La APDP puede sancionar con hasta el 4% de los ingresos anuales en casos de reincidencia grave. Para gran empresa, esto puede representar decenas de millones.'},
        {id:'m5n6q6',text:'¿Las transferencias internacionales de datos de trabajadores (proveedores de nube extranjeros, casas matrices) cumplen con los requisitos de la Ley 21.719 (garantías adecuadas o consentimiento)?',risk:'a',peso:5,norm:'Ley 21.719 Arts. 27-28',
         opts:[{l:'A',t:'Sí, cláusulas contractuales estándar o garantías documentadas',p:5},{l:'B',t:'Transferencias sin evaluación de cumplimiento',p:1},{l:'C',t:'Sin transferencias internacionales de datos',p:5}],
         cons:'Las transferencias internacionales de datos de trabajadores sin base legal adecuada bajo Ley 21.719 son infracción grave. En gran empresa, esto puede involucrar a todos los sistemas de nube corporativos.'},
        {id:'m5n6q7',text:'¿El programa de capacitación Ley Karin incluye niveles diferenciados (investigadores, jefaturas, trabajadores generales), con evaluación de comprensión y reentrenamiento para brechas detectadas?',risk:'a',peso:5,norm:'Art. 211-A CT; Ley 21.643',
         opts:[{l:'A',t:'Sí, capacitación diferenciada con evaluación y reentrenamiento',p:5},{l:'B',t:'Capacitación uniforme sin diferenciación ni reentrenamiento',p:2},{l:'C',t:'Sin capacitación diferenciada',p:0}],
         cons:'En gran empresa, una sola capacitación genérica no es suficiente. Los investigadores necesitan formación específica; las jefaturas, conocimiento de sus obligaciones como primeros receptores.'},
        {id:'m5n6q8',text:'¿La empresa realiza Evaluaciones de Impacto en Protección de Datos (PIA) para todos los tratamientos de alto riesgo que involucren datos de trabajadores?',risk:'a',peso:4,norm:'Ley 21.719 Art. 24',
         opts:[{l:'A',t:'Sí, PIA documentado para todos los tratamientos de alto riesgo',p:4},{l:'B',t:'PIA solo para algunos sistemas',p:1},{l:'C',t:'Sin PIA realizados',p:0}],
         cons:'Los tratamientos sin PIA en tratamientos de alto riesgo constituyen infracción bajo Ley 21.719 y pueden resultar en la suspensión del tratamiento por la APDP.'},
        {id:'m5n6q9',text:'¿El protocolo de brecha de datos personales ha sido probado mediante simulacro, con validación del plazo de 72 horas para notificar a la APDP y proceso de comunicación a los afectados?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 45-46',
         opts:[{l:'A',t:'Sí, protocolo probado con simulacro documentado',p:4},{l:'B',t:'Protocolo escrito sin simulacro',p:2},{l:'C',t:'Sin protocolo ni simulacro',p:0}],
         cons:'Un protocolo no probado puede fallar bajo presión real. El plazo de 72 horas para notificar una brecha es estricto; sin simulacro, es imposible garantizar el cumplimiento.'},
        {id:'m5n6q10',text:'¿La empresa tiene mapeado el ciclo de vida completo de los datos de trabajadores (recolección, almacenamiento, uso, transferencia, eliminación) con política de retención documental?',risk:'a',peso:4,norm:'Ley 21.719 Art. 14; Art. 510 CT',
         opts:[{l:'A',t:'Sí, mapeo completo con política de retención documentada',p:4},{l:'B',t:'Mapeo parcial sin política formal',p:1},{l:'C',t:'Sin mapeo del ciclo de vida de datos',p:0}],
         cons:'Sin mapeo del ciclo de vida, la empresa no puede cumplir el principio de minimización ni el derecho de cancelación de datos de ex trabajadores bajo Ley 21.719.'},
      ],
    },
    questions:[
      {id:'m5q1',text:'¿La empresa cuenta con un procedimiento formal de denuncia e investigación de acoso laboral y sexual conforme a Ley 21.643 (Ley Karin)?',risk:'a',peso:6,norm:'Art. 211-B CT; Ley 21.643 (vigente desde 01-ago-2024)',
       opts:[{l:'A',t:'Sí, procedimiento escrito, difundido y con responsable designado',p:6},{l:'B',t:'En elaboración, aún no implementado',p:2},{l:'C',t:'Solo se mencionó en el RIOHS sin procedimiento',p:1},{l:'D',t:'No existe ningún procedimiento',p:0}],
       cons:'Incumplimiento de Ley Karin: multa hasta 60 UTM. La ausencia total de procedimiento es la infracción más grave y genera responsabilidad solidaria de la empresa ante demandas de tutela.'},
      {id:'m5q2',text:'¿El canal de denuncias es accesible para todos, garantiza confidencialidad, y los trabajadores saben cómo y a quién denunciar?',risk:'a',peso:5,norm:'Art. 211-B CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, canal formal, conocido y con garantías explícitas documentadas',p:5},{l:'B',t:'Canal existe pero pocos trabajadores lo conocen',p:2},{l:'C',t:'Solo informalmente',p:1},{l:'D',t:'No existe canal',p:0}],
       cons:'Sin canal conocido y accesible, el incumplimiento es inmediato. La empresa también es responsable ante represalias contra el denunciante.'},
      {id:'m5q3',text:'¿El procedimiento incluye medidas de resguardo inmediatas para el denunciante durante la investigación, y el proceso se resuelve en máximo 30 días hábiles?',risk:'a',peso:5,norm:'Art. 211-B CT',
       opts:[{l:'A',t:'Sí, con protocolo de medidas cautelares y plazo documentado',p:5},{l:'B',t:'Hay plazo pero sin medidas de resguardo',p:2},{l:'C',t:'No se han definido plazos ni medidas',p:0}],
       cons:'Sin medidas de resguardo la empresa puede ser responsable del daño adicional al denunciante. Procedimiento que supere 30 días hábiles puede declararse nulo.'},
      {id:'m5q4',text:'¿Se ha capacitado formalmente a jefaturas y trabajadores sobre Ley Karin, con registro de asistencia?',risk:'a',peso:5,norm:'Art. 211-A CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, capacitación a todos con registro y evaluación',p:5},{l:'B',t:'Solo a jefaturas',p:2},{l:'C',t:'Solo información distribuida, sin capacitación formal',p:1},{l:'D',t:'No se ha capacitado',p:0}],
       cons:'Sin evidencia de capacitación la empresa no puede demostrar cumplimiento ante la DT. La ley exige capacitación periódica, no solo una vez.'},
      {id:'m5q5',text:'¿El RIOHS fue actualizado con las sanciones disciplinarias por acoso y las disposiciones de Ley Karin, y fue registrado ante la DT?',risk:'a',peso:4,norm:'Art. 211-A CT; Art. 154 N°10 CT',
       opts:[{l:'A',t:'Sí, RIOHS actualizado con Ley Karin y registrado en DT',p:4},{l:'B',t:'Actualizado pero no registrado en DT',p:2},{l:'C',t:'No actualizado',p:0}],
       cons:'RIOHS sin Ley Karin es sancionable con multa de hasta 60 UTM. Sin sanciones tipificadas, no es posible despedir a quien incurra en acoso por justa causa.'},
      // Ley 21.719 - 5 preguntas clave integradas
      {id:'m5q6',text:'¿La empresa ha realizado un diagnóstico de brechas ante la Ley 21.719 de Protección de Datos Personales y tiene un plan de adecuación antes del 1-dic-2026?',risk:'a',peso:5,norm:'Ley 21.719 (vigencia 1-dic-2026), Art. 49',
       opts:[{l:'A',t:'Sí, diagnóstico formal con plan aprobado, responsable y presupuesto',p:5},{l:'B',t:'Solo se ha leído la ley, sin diagnóstico ni plan',p:1},{l:'C',t:'No se ha tomado ninguna acción',p:0}],
       cons:'La APDP fiscaliza desde el 1-dic-2026. Sin plan de adecuación, la empresa no alcanzará el cumplimiento en plazo. Multas hasta 20.000 UTM (o 4% ingresos en reincidencia grave).'},
      {id:'m5q7',text:'¿Los datos biométricos (huella, rostro), videovigilancia y geolocalización de trabajadores cuentan con consentimiento escrito, finalidad declarada y política documentada?',risk:'a',peso:5,norm:'Ley 21.719 Arts. 2, 9, 14; Art. 5 CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, todo documentado con consentimiento y política',p:5},{l:'B',t:'Se usan pero sin documentación formal',p:1},{l:'C',t:'No se usa ninguno de estos sistemas',p:5},{l:'D',t:'No se ha revisado la base legal',p:0}],
       cons:'Datos biométricos son datos sensibles; su tratamiento ilícito es infracción grave (hasta 10.000 UTM). La videovigilancia sin aviso visible también vulnera el Art. 5 CT.'},
      {id:'m5q8',text:'¿Los contratos de trabajo incluyen aviso de privacidad que informe al trabajador sobre el tratamiento de sus datos personales (finalidad, destinatarios, plazo de conservación)?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 14-15; Art. 9 CT',
       opts:[{l:'A',t:'Sí, cláusula de privacidad en todos los contratos y en postulaciones',p:4},{l:'B',t:'Solo en contratos nuevos',p:2},{l:'C',t:'No existe aviso de privacidad',p:0}],
       cons:'Tratar datos sin informar al titular es infracción leve (hasta 5.000 UTM). Aplica desde el proceso de reclutamiento.'},
      {id:'m5q9',text:'¿La empresa tiene procedimiento para responder solicitudes de derechos ARCO+ (Acceso, Rectificación, Cancelación, Oposición, Portabilidad) en 15 días hábiles?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 19-29',
       opts:[{l:'A',t:'Sí, con canal, responsable y plazo documentado',p:4},{l:'B',t:'Se atendería caso a caso sin procedimiento',p:1},{l:'C',t:'No existe procedimiento',p:0}],
       cons:'No atender una solicitud ARCO+ en plazo es infracción sancionable. Los ex trabajadores también tienen derecho a solicitar eliminación de sus datos.'},
      {id:'m5q10',text:'¿La empresa tiene protocolo de notificación de brechas de datos personales a la APDP en 72 horas y controles técnicos de seguridad (cifrado, control de accesos, logs)?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 45-46 y 16',
       opts:[{l:'A',t:'Sí, protocolo de 72 hrs documentado y controles técnicos auditados',p:4},{l:'B',t:'Solo controles básicos (contraseñas), sin protocolo de brecha',p:1},{l:'C',t:'Sin controles técnicos ni protocolo',p:0}],
       cons:'No notificar una brecha en 72 horas es infracción grave (hasta 10.000 UTM). Una brecha por falta de controles básicos puede calificarse como infracción grave adicional.'},
      {id:'m5q11',text:'¿Las denuncias Ley Karin que involucran a gerentes o personal directivo se investigan con el mismo rigor e imparcialidad que las del resto de la organización?',risk:'a',peso:4,norm:'Art. 211-B CT; Ley 21.643',
       opts:[{l:'A',t:'Sí, mismo procedimiento sin excepción por jerarquía',p:4},{l:'B',t:'No se han presentado casos con directivos',p:3},{l:'C',t:'Se han tratado de forma distinta o informal',p:0}],
       cons:'Tratar con menor rigor las denuncias contra personal directivo expone a la empresa a un riesgo reputacional y legal mayor, además de configurar una vulneración del deber de protección.'},
      {id:'m5q12',text:'¿La empresa cuenta con un registro histórico (anonimizado para fines estadísticos) de denuncias Ley Karin para identificar áreas o jefaturas con mayor incidencia?',risk:'m',peso:2,norm:'Art. 211-B CT; gestión preventiva',
       opts:[{l:'A',t:'Sí, con análisis de tendencias por área',p:2},{l:'B',t:'Registro básico sin análisis',p:1},{l:'C',t:'No existe este análisis',p:0}],
       cons:'Sin análisis de tendencias, la empresa no puede identificar focos de riesgo recurrentes ni demostrar una gestión preventiva activa ante la Dirección del Trabajo.'},
      {id:'m5q13',text:'¿Los formularios y plataformas digitales de la empresa (postulación, evaluación de desempeño, encuestas) cumplen con principios de minimización de datos (solo se pide lo necesario)?',risk:'m',peso:2,norm:'Ley 21.719, principio de minimización (Art. 15)',
       opts:[{l:'A',t:'Sí, se revisó y se solicita solo lo estrictamente necesario',p:2},{l:'B',t:'No se ha revisado este aspecto',p:0},{l:'C',t:'Se solicitan datos excesivos sin necesidad clara',p:0}],
       cons:'Recolectar datos personales más allá de lo necesario para la finalidad declarada infringe el principio de minimización y aumenta la superficie de riesgo ante una brecha.'},
      {id:'m5q14',text:'¿La empresa ha identificado si actúa como "responsable" o "encargado" del tratamiento en cada relación con terceros que procesan datos de trabajadores?',risk:'m',peso:2,norm:'Ley 21.719, Arts. 17-18',
       opts:[{l:'A',t:'Sí, roles identificados y documentados por proveedor',p:2},{l:'B',t:'No se ha analizado esta distinción',p:0}],
       cons:'No distinguir el rol de responsable vs. encargado impide asignar correctamente las obligaciones contractuales y la responsabilidad ante una infracción de datos.'},
      {id:'m5q15',text:'¿Existe un canal de comunicación interna que informe a los trabajadores sobre los avances de la adecuación a la Ley 21.719 antes de su entrada en vigencia?',risk:'b',peso:1,norm:'Ley 21.719; principio de transparencia',
       opts:[{l:'A',t:'Sí, comunicación periódica sobre avances',p:1},{l:'B',t:'No se ha comunicado nada al respecto',p:0}],
       cons:'La falta de comunicación interna sobre los cambios en el tratamiento de datos puede generar desconfianza y consultas masivas de trabajadores una vez vigente la ley.'},
      {id:'m5q16',text:'¿La empresa ha evaluado el impacto de cámaras corporales, GPS en herramientas de trabajo o software de monitoreo de productividad (keylogger, capturas de pantalla) en equipos de trabajadores remotos?',risk:'a',peso:4,norm:'Ley 21.719 Arts. 2, 14, 41; Art. 5 CT',
       opts:[{l:'A',t:'Sí, evaluación de impacto realizada con base legal documentada',p:4},{l:'B',t:'Se usa monitoreo de productividad sin evaluación',p:1},{l:'C',t:'No se usa este tipo de monitoreo',p:4},{l:'D',t:'No se ha revisado',p:0}],
       cons:'El monitoreo invasivo de productividad sin base legal y sin informar al trabajador puede vulnerar derechos fundamentales y constituir tratamiento ilícito de datos bajo la Ley 21.719.'},
      {id:'m5q17',text:'¿La empresa ha designado formalmente a un Delegado de Protección de Datos (DPD) o responsable equivalente con dedicación y reporte directo a la alta dirección?',risk:'m',peso:2,norm:'Ley 21.719, Art. 49 (modelo de prevención)',
       opts:[{l:'A',t:'Sí, DPD designado con reporte directo a la dirección',p:2},{l:'B',t:'Hay un responsable informal sin reporte directo',p:1},{l:'C',t:'No se ha designado a nadie',p:0}],
       cons:'Sin un responsable con autoridad y reporte directo, las decisiones sobre tratamiento de datos personales quedan dispersas entre áreas, dificultando una respuesta coordinada ante una fiscalización de la APDP.'},
    ]
  },

  mod6: {
    name:'Relaciones laborales',
    niveles:{n2:9,n3:11,n4:9,n5:9,n6:8},
    questionsByLevel:{
      n2:[
        {id:'m6n2q1',text:'¿La empresa respeta el fuero sindical de los dirigentes sindicales, si los hay?',risk:'a',peso:6,norm:'Arts. 224-229 CT',sindical:true,
         opts:[{l:'A',t:'Sí, respeto absoluto del fuero',p:6},{l:'B',t:'Ha habido tensiones pero sin actos formales',p:2},{l:'C',t:'Ha habido intentos de desafuero irregular',p:0},{l:'D',t:'No hay sindicato',p:6}],
         cons:'Desafuero sindical irregular genera nulidad del despido, reintegro forzoso y daño moral. Multa 10 a 150 UTM.'},
        {id:'m6n2q2',text:'¿Se otorgan los permisos sindicales a los dirigentes sin descuentos improcedentes de remuneración?',risk:'a',peso:5,norm:'Art. 249 CT',sindical:true,
         opts:[{l:'A',t:'Sí, permisos respetados y remuneración íntegra',p:5},{l:'B',t:'Se han descontado permisos sindicales',p:0},{l:'C',t:'No hay sindicato',p:5}],
         cons:'Descuento de permisos sindicales es práctica antisindical con multa 10 a 150 UTM.'},
        {id:'m6n2q3',text:'¿Se han presentado denuncias por prácticas antisindicales contra la empresa en los últimos 3 años?',risk:'a',peso:5,norm:'Arts. 289-294 CT',sindical:true,
         opts:[{l:'A',t:'No, ninguna denuncia',p:5},{l:'B',t:'Sí, 1-2 denuncias archivadas sin sanción',p:2},{l:'C',t:'Sí, con sanciones vigentes',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'Historial de prácticas antisindicales incrementa la fiscalización y puede resultar en multas de 10 a 150 UTM.'},
        {id:'m6n2q4',text:'¿La empresa respeta el procedimiento legal para la constitución de nuevos sindicatos, sin obstaculizar el proceso?',risk:'a',peso:4,norm:'Arts. 227-228 CT',sindical:true,
         opts:[{l:'A',t:'Sí, sin obstáculos a la constitución de sindicatos',p:4},{l:'B',t:'Se han generado dificultades administrativas',p:0},{l:'C',t:'No hay sindicato',p:4}],
         cons:'Obstaculizar la constitución de un sindicato es práctica antisindical grave, sancionable con multa de 10 a 150 UTM.'},
      ],
      n3:[
        {id:'m6n3q1',text:'¿La empresa respeta el fuero sindical de los dirigentes sindicales, si los hay?',risk:'a',peso:5,norm:'Arts. 224-229 CT',sindical:true,
         opts:[{l:'A',t:'Sí, respeto absoluto del fuero',p:5},{l:'B',t:'Ha habido tensiones sin actos formales',p:2},{l:'C',t:'Ha habido intentos de desafuero irregular',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'Desafuero sindical irregular genera nulidad del despido, reintegro forzoso y daño moral. Multa 10 a 150 UTM.'},
        {id:'m6n3q2',text:'¿Se han presentado denuncias por prácticas antisindicales contra la empresa en los últimos 3 años?',risk:'a',peso:5,norm:'Arts. 289-294 CT',sindical:true,
         opts:[{l:'A',t:'No, ninguna denuncia',p:5},{l:'B',t:'1-2 denuncias archivadas sin sanción',p:2},{l:'C',t:'Sanciones vigentes o en tribunal',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'Historial de prácticas antisindicales incrementa la fiscalización y puede resultar en multas de 10 a 150 UTM.'},
        {id:'m6n3q3',text:'¿Se otorgan los permisos sindicales a los dirigentes sin descuentos improcedentes de remuneración?',risk:'a',peso:4,norm:'Art. 249 CT',sindical:true,
         opts:[{l:'A',t:'Sí, permisos respetados y remuneración íntegra',p:4},{l:'B',t:'Se han descontado permisos',p:0},{l:'C',t:'No hay sindicato',p:4}],
         cons:'Descuento de permisos sindicales es práctica antisindical con multa 10 a 150 UTM.'},
        {id:'m6n3q4',text:'¿Se cumplen los plazos y procedimientos básicos de negociación colectiva, si la tiene?',risk:'a',peso:4,norm:'Arts. 303-350 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, con plazos respetados',p:4},{l:'B',t:'No hay negociación colectiva vigente',p:4},{l:'C',t:'Se han incumplido plazos',p:0},{l:'D',t:'No hay sindicato',p:4}],
         cons:'Incumplimiento de plazos de negociación colectiva puede declararse práctica antisindical automáticamente.'},
        {id:'m6n3q5',text:'Si tiene 100 o más trabajadores, ¿cumple con la cuota de inclusión laboral del 1% para personas con discapacidad?',risk:'a',peso:4,norm:'Ley 21.015',
         opts:[{l:'A',t:'Sí, cuota cumplida y registrada en SENADIS',p:4},{l:'B',t:'Tengo menos de 100 trabajadores (no aplica)',p:4},{l:'C',t:'No cumple la cuota sin razón fundada',p:0}],
         cons:'Multa 25 a 150 UTM por incumplimiento de cuota de inclusión laboral, exigible desde 100 trabajadores.'},
      ],
      n4:[
      {id:'m6n4q1',text:'¿La empresa respeta el fuero sindical de los dirigentes sindicales (no hay desafueros irregulares ni presión para abandonar el sindicato)?',risk:'a',peso:5,norm:'Arts. 224-229 CT',sindical:true,
       opts:[{l:'A',t:'Sí, respeto absoluto del fuero, sin conflictos',p:5},{l:'B',t:'Ha habido tensiones pero sin actos formales',p:2},{l:'C',t:'Ha habido intentos de desafuero irregular',p:0},{l:'D',t:'No hay sindicato',p:5}],
       cons:'Desafuero sindical irregular genera nulidad del despido, reintegro forzoso y daño moral. Multa 10 a 150 UTM.'},
      {id:'m6n4q2',text:'¿Se han presentado denuncias por prácticas antisindicales contra la empresa en los últimos 3 años?',risk:'a',peso:5,norm:'Arts. 289-294 CT',sindical:true,
       opts:[{l:'A',t:'No, ninguna denuncia',p:5},{l:'B',t:'Sí, 1-2 denuncias archivadas sin sanción',p:2},{l:'C',t:'Sí, con sanciones vigentes o en tribunal',p:0},{l:'D',t:'No hay sindicato',p:5}],
       cons:'Historial de prácticas antisindicales incrementa la fiscalización y puede resultar en multas de 10 a 150 UTM.'},
      {id:'m6n4q3',text:'¿Se cumplen los plazos y procedimientos de negociación colectiva reglada o adaptada?',risk:'a',peso:4,norm:'Arts. 303-350 CT; Ley 20.940',sindical:true,
       opts:[{l:'A',t:'Sí, con asesoría legal y plazos respetados',p:4},{l:'B',t:'No hay negociación colectiva vigente',p:4},{l:'C',t:'Se han incumplido plazos',p:1},{l:'D',t:'Se desconocen los procedimientos',p:0},{l:'E',t:'No hay sindicato',p:4}],
       cons:'Incumplimiento de plazos de negociación colectiva puede declararse práctica antisindical automáticamente.'},
      {id:'m6n4q4',text:'¿Se otorgan los permisos sindicales a los dirigentes sin descuentos improcedentes de remuneración?',risk:'a',peso:4,norm:'Art. 249 CT',sindical:true,
       opts:[{l:'A',t:'Sí, permisos respetados y remuneración íntegra',p:4},{l:'B',t:'Se han descontado permisos sindicales',p:0},{l:'C',t:'No hay sindicato',p:4}],
       cons:'Descuento de permisos sindicales es práctica antisindical con multa 10 a 150 UTM.'},
      {id:'m6n4q5',text:'¿La empresa cumple con la cuota de inclusión laboral del 1% para personas con discapacidad (obligatorio para 100+ trabajadores)?',risk:'a',peso:4,norm:'Ley 21.015',
       opts:[{l:'A',t:'Sí, cuota cumplida y registrada en SENADIS',p:4},{l:'B',t:'Empresa con menos de 100 trabajadores (no aplica)',p:4},{l:'C',t:'No cumple la cuota sin razón fundada registrada',p:0}],
       cons:'Multa 25 a 150 UTM por incumplimiento de cuota de inclusión laboral.'},
      {id:'m6n4q6',text:'¿La empresa respeta el quórum y procedimiento legal para la constitución de nuevos sindicatos sin obstaculizar el proceso?',risk:'a',peso:4,norm:'Arts. 227-228 CT',sindical:true,
       opts:[{l:'A',t:'Sí, sin obstáculos a la constitución de sindicatos',p:4},{l:'B',t:'Se han generado dificultades administrativas al proceso',p:0},{l:'C',t:'No hay sindicato',p:4}],
       cons:'Obstaculizar la constitución de un sindicato es práctica antisindical grave, sancionable con multa de 10 a 150 UTM además del riesgo reputacional.'},
      ],
      n5:[
        {id:'m6n5q1',text:'¿La empresa tiene una política formal de relacionamiento sindical aprobada por la gerencia, con roles y responsabilidades definidos y actualizada en los últimos 12 meses?',risk:'a',peso:5,norm:'Arts. 212-229 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, política formal con roles definidos y actualizada',p:5},{l:'B',t:'Política informal no documentada',p:2},{l:'C',t:'Sin política de relacionamiento sindical',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'Sin una política formal, el relacionamiento sindical queda expuesto a la improvisación de jefaturas, aumentando el riesgo de prácticas antisindicales no intencionadas.'},
        {id:'m6n5q2',text:'¿La empresa respeta estrictamente el fuero sindical de todos los dirigentes, con control activo de nómina que impide procesar desvinculaciones de aforados sin desafuero judicial?',risk:'a',peso:5,norm:'Arts. 224-229 CT',sindical:true,
         opts:[{l:'A',t:'Sí, control automático en sistema de RRHH',p:5},{l:'B',t:'Control manual sin sistema de alerta',p:2},{l:'C',t:'Sin control formal de fuero sindical',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'El desafuero irregular genera nulidad del despido, reintegro forzoso, pago retroactivo de remuneraciones y multas hasta 150 UTM. En empresa mediana, el error puede ser costoso.'},
        {id:'m6n5q3',text:'¿Los procesos de negociación colectiva cuentan con asesoría legal especializada, estrategia documentada y representante de la empresa con mandato formal?',risk:'a',peso:5,norm:'Arts. 303-350 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, con asesoría legal y estrategia documentada',p:5},{l:'B',t:'Sin asesoría legal formal',p:2},{l:'C',t:'Sin negociación colectiva vigente',p:5},{l:'D',t:'No hay sindicato',p:5}],
         cons:'Una negociación colectiva mal gestionada puede resultar en un convenio desfavorable que se extiende hasta 4 años, o en una huelga que paralice operaciones.'},
        {id:'m6n5q4',text:'¿La empresa tiene plan de contingencia documentado para garantizar operaciones mínimas durante una huelga legal, cumpliendo los servicios mínimos y equipos de emergencia exigidos por la DT?',risk:'a',peso:5,norm:'Arts. 359-363 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, plan documentado y validado por la DT',p:5},{l:'B',t:'Plan informal sin validación DT',p:2},{l:'C',t:'Sin plan de contingencia ante huelga',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'La empresa debe determinar los servicios mínimos con la organización sindical antes de la huelga. Sin plan validado, la huelga puede paralizar operaciones críticas.'},
        {id:'m6n5q5',text:'¿Se registra toda comunicación formal con el sindicato (actas de reunión, entrega de documentos, acuerdos extrajudiciales) con firma de ambas partes?',risk:'a',peso:4,norm:'Arts. 220, 289-294 CT',sindical:true,
         opts:[{l:'A',t:'Sí, registro sistemático de todas las comunicaciones',p:4},{l:'B',t:'Registro parcial sin firma de ambas partes',p:1},{l:'C',t:'Sin registro formal',p:0},{l:'D',t:'No hay sindicato',p:4}],
         cons:'Sin registro formal de comunicaciones con el sindicato, la empresa queda en desventaja ante denuncias de prácticas antisindicales, ya que no puede demostrar que actuó de buena fe.'},
        {id:'m6n5q6',text:'¿Se han presentado denuncias por prácticas antisindicales contra la empresa en los últimos 3 años, y si es así, ¿se implementaron acciones correctivas documentadas?',risk:'a',peso:5,norm:'Arts. 289-294 CT',sindical:true,
         opts:[{l:'A',t:'No hay denuncias en los últimos 3 años',p:5},{l:'B',t:'Sí, con acciones correctivas documentadas',p:3},{l:'C',t:'Sí, sin acciones correctivas formales',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'El historial de prácticas antisindicales aumenta la probabilidad de fiscalización DT y puede resultar en la inhabilidad para contratar con el Estado.'},
        {id:'m6n5q7',text:'¿La empresa cumple con la cuota de inclusión laboral del 1% para personas con discapacidad (Ley 21.015) y tiene la razonabilidad fundada debidamente registrada en SENADIS si no puede cumplirla?',risk:'a',peso:4,norm:'Ley 21.015',
         opts:[{l:'A',t:'Sí, cuota cumplida y registrada',p:4},{l:'B',t:'Razón fundada registrada en SENADIS',p:3},{l:'C',t:'No cumple ni tiene razón fundada',p:0}],
         cons:'Multa entre 25 y 150 UTM por incumplimiento. Además, el incumplimiento puede inhabilitar la participación en licitaciones públicas.'},
        {id:'m6n5q8',text:'¿La empresa tiene mecanismos de diálogo social (comités bipartitos, mesas de trabajo) más allá de la negociación colectiva formal, para abordar temas laborales preventivamente?',risk:'m',peso:3,norm:'Buenas prácticas; OIT Convenio 98',sindical:true,
         opts:[{l:'A',t:'Sí, espacios de diálogo formalizados y activos',p:3},{l:'B',t:'Comunicación informal sin estructura',p:1},{l:'C',t:'Sin mecanismos de diálogo',p:0},{l:'D',t:'No hay sindicato',p:3}],
         cons:'Las empresas con mecanismos de diálogo activos tienen menor tasa de conflictos laborales y mejores resultados en negociaciones colectivas.'},
      ],
      n6:[
        {id:'m6n6q1',text:'¿La empresa tiene una estrategia de relacionamiento sindical aprobada por el directorio, con objetivos medibles, responsable ejecutivo designado y revisión anual de resultados?',risk:'a',peso:5,norm:'Arts. 212-229 CT; Ley 20.940; buenas prácticas corporativas',sindical:true,
         opts:[{l:'A',t:'Sí, estrategia formal aprobada por directorio con KPIs',p:5},{l:'B',t:'Estrategia documentada sin aprobación del directorio',p:2},{l:'C',t:'Sin estrategia formal',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'En gran empresa con múltiples sindicatos, la ausencia de estrategia corporativa de relacionamiento sindical genera respuestas inconsistentes que pueden escalar en conflictos colectivos.'},
        {id:'m6n6q2',text:'¿El control de fuero sindical está automatizado en el HRIS, con bloqueo técnico de procesamiento de desvinculaciones de aforados sin desafuero judicial previo validado?',risk:'a',peso:5,norm:'Arts. 224-229 CT',sindical:true,
         opts:[{l:'A',t:'Sí, bloqueo automático en HRIS',p:5},{l:'B',t:'Alerta manual sin bloqueo automático',p:2},{l:'C',t:'Sin control automatizado',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'En gran empresa con múltiples centros y cientos de desvinculaciones anuales, un error manual de fuero sindical puede multiplicarse y resultar en múltiples nulidades simultáneas.'},
        {id:'m6n6q3',text:'¿La empresa tiene equipo interno o externo especializado en negociación colectiva, con bitácora de cada proceso y análisis post-negociación para mejorar la estrategia?',risk:'a',peso:5,norm:'Arts. 303-350 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, equipo especializado con bitácora y análisis post-negociación',p:5},{l:'B',t:'Apoyo legal puntual sin análisis sistemático',p:2},{l:'C',t:'Sin equipo ni análisis',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'En gran empresa con múltiples sindicatos y negociaciones simultáneas, la ausencia de un equipo especializado aumenta el riesgo de acuerdos incoherentes entre grupos y costos laborales futuros.'},
        {id:'m6n6q4',text:'¿El plan de contingencia ante huelga fue validado con la DT, está actualizado y contempla servicios mínimos y equipos de emergencia para todos los centros de trabajo?',risk:'a',peso:5,norm:'Arts. 359-363 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, plan validado, actualizado y con cobertura total',p:5},{l:'B',t:'Plan parcial o no actualizado',p:2},{l:'C',t:'Sin plan de contingencia',p:0},{l:'D',t:'No hay sindicato',p:5}],
         cons:'En gran empresa, una huelga sin plan de contingencia puede paralizar operaciones por semanas, con impacto en clientes, cadena de suministro y continuidad del negocio.'},
        {id:'m6n6q5',text:'¿La empresa cumple con la cuota de inclusión laboral del 1% (Ley 21.015) con registro en SENADIS, y tiene programa activo de inclusión con métricas reportadas al directorio?',risk:'a',peso:4,norm:'Ley 21.015',
         opts:[{l:'A',t:'Sí, cuota cumplida con programa activo y métricas al directorio',p:4},{l:'B',t:'Cuota cumplida sin programa ni métricas',p:2},{l:'C',t:'No cumple',p:0}],
         cons:'En gran empresa, la inclusión laboral es un indicador ESG monitorizado por inversionistas. El incumplimiento afecta tanto el cumplimiento legal como la calificación ESG.'},
        {id:'m6n6q6',text:'¿La empresa publica indicadores de clima laboral, satisfacción y relacionamiento sindical en su reporte ESG o memoria anual, con compromisos de mejora medibles?',risk:'m',peso:3,norm:'Estándares GRI; buenas prácticas corporativas',sindical:true,
         opts:[{l:'A',t:'Sí, indicadores publicados con compromisos medibles',p:3},{l:'B',t:'Indicadores internos sin publicación',p:1},{l:'C',t:'Sin indicadores formales',p:0}],
         cons:'Los inversionistas institucionales y clasificadoras de riesgo ESG evalúan la calidad del relacionamiento laboral como indicador de riesgo operacional y reputacional.'},
        {id:'m6n6q7',text:'¿Existen protocolos para gestión de conflictos colectivos que escalan fuera de la negociación formal (huelgas ilegales, paros, protestas), con escalada a gerencia general y directorio?',risk:'a',peso:4,norm:'Arts. 375, 464 CT; Ley 20.940',sindical:true,
         opts:[{l:'A',t:'Sí, protocolo de escalada documentado y probado',p:4},{l:'B',t:'Protocolo informal sin documentar',p:1},{l:'C',t:'Sin protocolo de escalada',p:0},{l:'D',t:'No hay sindicato',p:4}],
         cons:'Un conflicto colectivo no gestionado correctamente puede escalar a huelga ilegal, ocupación de instalaciones o paralización de cadena productiva, con consecuencias irreversibles.'},
      ],
    },
    questions:[
      {id:'m6q1',text:'¿La empresa respeta el fuero sindical de los dirigentes sindicales (no hay desafueros irregulares ni presión para abandonar el sindicato)?',risk:'a',peso:5,norm:'Arts. 224-229 CT',sindical:true,
       opts:[{l:'A',t:'Sí, respeto absoluto del fuero, sin conflictos',p:5},{l:'B',t:'Ha habido tensiones pero sin actos formales',p:2},{l:'C',t:'Ha habido intentos de desafuero irregular',p:0},{l:'D',t:'No hay sindicato',p:5}],
       cons:'Desafuero sindical irregular genera nulidad del despido, reintegro forzoso y daño moral. Multa 10 a 150 UTM.'},
      {id:'m6q2',text:'¿Se han presentado denuncias por prácticas antisindicales contra la empresa en los últimos 3 años?',risk:'a',peso:5,norm:'Arts. 289-294 CT',sindical:true,
       opts:[{l:'A',t:'No, ninguna denuncia',p:5},{l:'B',t:'Sí, 1-2 denuncias archivadas sin sanción',p:2},{l:'C',t:'Sí, con sanciones vigentes o en tribunal',p:0},{l:'D',t:'No hay sindicato',p:5}],
       cons:'Historial de prácticas antisindicales incrementa la fiscalización y puede resultar en multas de 10 a 150 UTM.'},
      {id:'m6q3',text:'¿Se cumplen los plazos y procedimientos de negociación colectiva reglada o adaptada?',risk:'a',peso:4,norm:'Arts. 303-350 CT; Ley 20.940',sindical:true,
       opts:[{l:'A',t:'Sí, con asesoría legal y plazos respetados',p:4},{l:'B',t:'No hay negociación colectiva vigente',p:4},{l:'C',t:'Se han incumplido plazos',p:1},{l:'D',t:'Se desconocen los procedimientos',p:0},{l:'E',t:'No hay sindicato',p:4}],
       cons:'Incumplimiento de plazos de negociación colectiva puede declararse práctica antisindical automáticamente.'},
      {id:'m6q4',text:'¿Se otorgan los permisos sindicales a los dirigentes sin descuentos improcedentes de remuneración?',risk:'a',peso:4,norm:'Art. 249 CT',sindical:true,
       opts:[{l:'A',t:'Sí, permisos respetados y remuneración íntegra',p:4},{l:'B',t:'Se han descontado permisos sindicales',p:0},{l:'C',t:'No hay sindicato',p:4}],
       cons:'Descuento de permisos sindicales es práctica antisindical con multa 10 a 150 UTM.'},
      {id:'m6q5',text:'¿Existe comunicación formal y periódica entre la empresa y el o los sindicatos (reuniones con actas)?',risk:'m',peso:3,norm:'Art. 243 CT',sindical:true,
       opts:[{l:'A',t:'Sí, reuniones periódicas con actas firmadas',p:3},{l:'B',t:'Solo cuando hay conflicto',p:1},{l:'C',t:'Sin comunicación formal',p:0},{l:'D',t:'No hay sindicato',p:3}],
       cons:'La falta de comunicación formal incrementa el riesgo de conflictos que escalan a huelga o demandas colectivas.'},
      {id:'m6q6',text:'¿Existe un proceso de gestión de conflictos internos (mediación interna) antes de que escalen a la Inspección del Trabajo o tribunales?',risk:'m',peso:3,norm:'Buenas prácticas; Art. 420 CT',
       opts:[{l:'A',t:'Sí, con protocolo de mediación interna documentado',p:3},{l:'B',t:'Se trata caso a caso sin protocolo',p:1},{l:'C',t:'No existe proceso formal',p:0}],
       cons:'Sin proceso de resolución interna los conflictos escalan más rápidamente, incrementando el costo y el riesgo de demanda.'},
      {id:'m6q7',text:'¿Se lleva registro formal de medidas disciplinarias aplicadas (amonestaciones, suspensiones) con expediente por trabajador?',risk:'a',peso:4,norm:'Art. 154 N°10 CT',
       opts:[{l:'A',t:'Sí, expediente disciplinario documentado por trabajador',p:4},{l:'B',t:'Registro informal sin expediente',p:1},{l:'C',t:'No se registran las medidas disciplinarias',p:0}],
       cons:'Sin registro disciplinario el despido por reincidencia puede impugnarse como injustificado por falta de prueba.'},
      {id:'m6q8',text:'¿La empresa cumple con la cuota de inclusión laboral del 1% para personas con discapacidad (obligatorio para 100+ trabajadores)?',risk:'a',peso:4,norm:'Ley 21.015',
       opts:[{l:'A',t:'Sí, cuota cumplida y registrada en SENADIS',p:4},{l:'B',t:'Empresa con menos de 100 trabajadores (no aplica)',p:4},{l:'C',t:'No cumple la cuota sin razón fundada registrada',p:0}],
       cons:'Multa 25 a 150 UTM por incumplimiento de cuota de inclusión laboral.'},
      {id:'m6q9',text:'¿Los jefes y supervisores han recibido formación en gestión de personas, liderazgo y prevención de conflictos laborales?',risk:'m',peso:3,norm:'Art. 184 CT; buenas prácticas',
       opts:[{l:'A',t:'Sí, capacitación formal y periódica con registro',p:3},{l:'B',t:'Solo para nuevas jefaturas',p:1},{l:'C',t:'No hay formación de jefaturas',p:0}],
       cons:'La mala gestión de jefaturas es la principal causa de reclamos Ley Karin, rotación excesiva y demandas laborales.'},
      {id:'m6q10',text:'¿Existe política de igualdad de oportunidades y no discriminación comunicada formalmente a todos los trabajadores?',risk:'m',peso:3,norm:'Art. 2 CT; Ley 20.609',
       opts:[{l:'A',t:'Sí, política escrita y difundida formalmente',p:3},{l:'B',t:'Solo mención en el RIOHS de forma general',p:1},{l:'C',t:'No existe política antidiscriminación',p:0}],
       cons:'La ausencia de política antidiscriminación expone a demandas de tutela de derechos fundamentales con recargos del 30% al 80%.'},
      {id:'m6q11',text:'¿Se realizan encuestas de clima organizacional al menos anualmente y se implementan planes de acción con los resultados?',risk:'b',peso:2,norm:'Buenas prácticas; Res. Ex. 336 MINSAL (riesgo psicosocial)',
       opts:[{l:'A',t:'Sí, encuesta anual con plan de acción documentado',p:2},{l:'B',t:'Solo informal o sin plan de acción',p:1},{l:'C',t:'No se realizan',p:0}],
       cons:'Sin diagnóstico de clima, los problemas de relaciones laborales se detectan tarde, incrementando el costo de gestión y el riesgo de conflicto.'},
      {id:'m6q12',text:'¿La empresa está inscrita y al día en el Registro de Empleadores (RTLE) del Ministerio del Trabajo?',risk:'m',peso:2,norm:'Ley 21.289; normativa MINTRAB',
       opts:[{l:'A',t:'Sí, inscrita y al día',p:2},{l:'B',t:'No inscrita',p:0}],
       cons:'El RTLE permite a la DT identificar incumplimientos laborales; la no inscripción puede generar alertas de fiscalización proactiva.'},
      {id:'m6q13',text:'¿Se aplican evaluaciones de riesgo psicosocial laboral (ISTAS-21 u otra metodología validada) de forma periódica?',risk:'m',peso:2,norm:'Res. Ex. 336 MINSAL; ISTAS-21',
       opts:[{l:'A',t:'Sí, con instrumento validado y plan de intervención',p:2},{l:'B',t:'Solo evaluación general de clima',p:1},{l:'C',t:'No se realizan',p:0}],
       cons:'La evaluación de riesgo psicosocial es obligatoria según MINSAL y puede ser fiscalizada por la Inspección del Trabajo.'},
      {id:'m6q14',text:'¿Existe plan de retención de talento y se mide y gestiona la tasa de rotación de personal?',risk:'b',peso:1,norm:'Buenas prácticas RRHH',
       opts:[{l:'A',t:'Sí, con KPI de rotación y plan de retención',p:1},{l:'B',t:'Solo acciones informales',p:0},{l:'C',t:'No existe',p:0}],
       cons:'Alta rotación incrementa el costo de entrenamiento, el riesgo de errores y las desvinculaciones frecuentes que generan demandas.'},
      {id:'m6q15',text:'¿La empresa respeta el quórum y procedimiento legal para la constitución de nuevos sindicatos sin obstaculizar el proceso?',risk:'a',peso:4,norm:'Arts. 227-228 CT',sindical:true,
       opts:[{l:'A',t:'Sí, sin obstáculos a la constitución de sindicatos',p:4},{l:'B',t:'Se han generado dificultades administrativas al proceso',p:0},{l:'C',t:'No hay sindicato',p:4}],
       cons:'Obstaculizar la constitución de un sindicato es práctica antisindical grave, sancionable con multa de 10 a 150 UTM además del riesgo reputacional.'},
      {id:'m6q16',text:'¿Existen instancias formales de participación de los trabajadores en decisiones que afectan condiciones de trabajo (comités bipartitos, mesas de diálogo)?',risk:'b',peso:2,norm:'Buenas prácticas; Art. 184 CT',
       opts:[{l:'A',t:'Sí, instancias formales y periódicas',p:2},{l:'B',t:'Solo instancias informales',p:1},{l:'C',t:'No existen instancias de participación',p:0}],
       cons:'La ausencia de canales formales de participación incrementa el riesgo de conflictos no resueltos y reduce el compromiso organizacional.'},
      {id:'m6q17',text:'¿Se gestionan adecuadamente los conflictos entre trabajadores de distintas generaciones o con diferencias culturales (incluyendo trabajadores migrantes)?',risk:'m',peso:2,norm:'Ley 20.609; Art. 2 CT',
       opts:[{l:'A',t:'Sí, con protocolos de integración y mediación intercultural',p:2},{l:'B',t:'Se gestiona de forma reactiva sin protocolo',p:1},{l:'C',t:'No se ha identificado esta necesidad',p:0}],
       cons:'Conflictos interculturales no gestionados pueden derivar en denuncias de discriminación por nacionalidad u origen étnico, protegidas por la Ley Zamudio.'},
      {id:'m6q18',text:'¿La empresa cuenta con un protocolo de actuación específico ante huelgas legales, incluyendo equipos de emergencia y servicios mínimos cuando corresponde?',risk:'a',peso:3,norm:'Arts. 359-363 CT (servicios mínimos y equipos de emergencia)',sindical:true,
       opts:[{l:'A',t:'Sí, protocolo y equipos de emergencia definidos con anticipación',p:3},{l:'B',t:'No hay negociación colectiva ni riesgo de huelga',p:3},{l:'C',t:'No existe protocolo definido',p:0}],
       cons:'No definir oportunamente los equipos de emergencia y servicios mínimos antes de una huelga puede paralizar funciones críticas y generar responsabilidad por daños a terceros.'},
      {id:'m6q19',text:'¿Se controla que las evaluaciones de desempeño se aplican con criterios objetivos y no se usan como represalia tras una denuncia o actividad sindical?',risk:'a',peso:3,norm:'Art. 5 CT; Art. 289 CT (prácticas antisindicales)',
       opts:[{l:'A',t:'Sí, criterios objetivos y trazables documentados',p:3},{l:'B',t:'Criterios subjetivos sin trazabilidad',p:0},{l:'C',t:'No se realizan evaluaciones de desempeño formales',p:1}],
       cons:'Una evaluación de desempeño que coincide temporalmente con una denuncia o actividad sindical del trabajador puede presumirse represalia, derivando en demanda de tutela.'},
      {id:'m6q20',text:'¿La empresa ha implementado canales de comunicación interna (newsletter, reuniones) que informen sobre cambios normativos laborales relevantes a los trabajadores?',risk:'b',peso:1,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, comunicación periódica',p:1},{l:'B',t:'Solo cuando es obligatorio (RIOHS)',p:0},{l:'C',t:'No existe comunicación de este tipo',p:0}],
       cons:'La falta de comunicación sobre cambios normativos genera desconocimiento de derechos y mayor probabilidad de conflictos por malentendidos.'},
      {id:'m6q21',text:'¿Se realiza seguimiento posterior a los procesos de desvinculación masiva (reestructuraciones) para verificar el correcto cálculo de todas las indemnizaciones?',risk:'a',peso:3,norm:'Arts. 161, 163 CT (necesidades de la empresa)',
       opts:[{l:'A',t:'Sí, auditoría posterior a cada proceso masivo',p:3},{l:'B',t:'No se han realizado desvinculaciones masivas',p:3},{l:'C',t:'Se han realizado sin auditoría posterior',p:0}],
       cons:'Los procesos de desvinculación masiva sin control de calidad posterior son la principal fuente de demandas colectivas por diferencias de cálculo o causales mal invocadas.'},
      {id:'m6q22',text:'¿La empresa tiene una política definida sobre relaciones de pareja o parentesco entre trabajadores y sus jefaturas directas, para prevenir conflictos de interés?',risk:'b',peso:1,norm:'Buenas prácticas de gobierno corporativo',
       opts:[{l:'A',t:'Sí, política de conflicto de interés documentada',p:1},{l:'B',t:'No existe política al respecto',p:0}],
       cons:'La ausencia de política puede derivar en percepciones de trato preferencial o discriminatorio que afectan el clima laboral y exponen a la empresa a reclamos.'},
      {id:'m6q23',text:'¿Existen mecanismos de reconocimiento y compensación no monetaria (flexibilidad, capacitación) que contribuyan a un clima laboral saludable?',risk:'b',peso:1,norm:'Buenas prácticas RRHH',
       opts:[{l:'A',t:'Sí, programa formal de reconocimiento',p:1},{l:'B',t:'Acciones aisladas sin programa formal',p:0},{l:'C',t:'No existen mecanismos de reconocimiento',p:0}],
       cons:'La ausencia de reconocimiento no monetario es un factor de riesgo psicosocial que incrementa la rotación y el ausentismo laboral.'},
      {id:'m6q24',text:'¿La empresa cuenta con un protocolo claro para gestionar la relación con sindicatos interempresa cuyos afiliados trabajan en la organización?',risk:'m',peso:2,norm:'Arts. 216-226 CT (sindicatos interempresa)',sindical:true,
       opts:[{l:'A',t:'Sí, protocolo claro de relación e información',p:2},{l:'B',t:'No hay afiliados a sindicatos interempresa',p:2},{l:'C',t:'No existe protocolo definido',p:0}],
       cons:'La falta de protocolo para sindicatos interempresa puede generar conflictos sobre el ejercicio de fuero y permisos de dirigentes que no son trabajadores directos de la empresa.'},
    ]
  },

  mod7: {
    name:'Fiscalizaciones e historial',
    niveles:{n1:20,n2:12,n3:17,n4:13,n5:9,n6:7},
    questionsByLevel:{
      n1:[
        {id:'m7n1q1',text:'¿Alguna vez le ha llegado una carta, multa o citación de la Inspección del Trabajo?',risk:'a',peso:10,norm:'Art. 505 CT',
         opts:[{l:'A',t:'No, nunca',p:10},{l:'B',t:'Sí, hace tiempo y ya se resolvió',p:5},{l:'C',t:'Sí, tengo algo pendiente de pago o respuesta',p:0}],
         cons:'Una multa pendiente sin pagar genera intereses y puede convertirse en cobranza judicial contra la empresa o su dueño.'},
        {id:'m7n1q2',text:'¿Algún ex trabajador lo ha demandado o amenazado con demandarlo por temas laborales?',risk:'a',peso:10,norm:'Art. 420 CT',
         opts:[{l:'A',t:'No, nunca',p:10},{l:'B',t:'Sí, hace tiempo y ya se resolvió',p:4},{l:'C',t:'Sí, tengo algo pendiente o en curso',p:0}],
         cons:'Las demandas laborales suelen costar mucho más que haber cumplido la norma desde el principio, sin contar el desgaste de tiempo.'},
      ],
      n2:[
        {id:'m7n2q1',text:'¿La empresa ha recibido inspecciones de la Dirección del Trabajo en los últimos 3 años?',risk:'a',peso:5,norm:'Art. 505 CT',
         opts:[{l:'A',t:'No ha sido inspeccionada',p:5},{l:'B',t:'1-2 inspecciones sin multa',p:3},{l:'C',t:'Inspecciones con amonestaciones',p:1},{l:'D',t:'Inspecciones con multas formales',p:0}],
         cons:'El historial de multas incrementa la probabilidad de fiscalizaciones futuras y el monto de las multas por reincidencia (hasta el triple).'},
        {id:'m7n2q2',text:'¿Tiene multas laborales vigentes o pendientes de pago ante la Inspección del Trabajo?',risk:'a',peso:5,norm:'Arts. 506-511 CT',
         opts:[{l:'A',t:'No hay multas pendientes',p:5},{l:'B',t:'Multas históricas ya pagadas',p:3},{l:'C',t:'Multas vigentes en proceso de pago',p:1},{l:'D',t:'Multas impugnadas en tribunales',p:1}],
         cons:'Multas no pagadas derivan en cobranza ejecutiva con aumento por reajuste e interés. Reincidencia dentro de 2 años triplica el monto.'},
        {id:'m7n2q3',text:'¿La empresa tiene demandas laborales activas en el Juzgado del Trabajo?',risk:'a',peso:5,norm:'Art. 420 CT',
         opts:[{l:'A',t:'No hay demandas activas',p:5},{l:'B',t:'1 demanda en tramitación',p:2},{l:'C',t:'2 o más demandas activas',p:0}],
         cons:'Múltiples demandas activas son señal de incumplimiento sistémico y pueden derivar en demandas colectivas.'},
        {id:'m7n2q4',text:'¿Se han presentado reclamos ante la Inspección del Trabajo en los últimos 3 años (aunque no hayan derivado en multas)?',risk:'a',peso:4,norm:'Art. 474 CT',
         opts:[{l:'A',t:'Ningún reclamo',p:4},{l:'B',t:'1 a 3 reclamos archivados',p:2},{l:'C',t:'4 o más reclamos',p:0}],
         cons:'Alta frecuencia de reclamos puede activar fiscalización proactiva de la DT.'},
        {id:'m7n2q5',text:'¿La empresa tiene toda su documentación laboral organizada y disponible para presentarla en una inspección sin demora?',risk:'a',peso:4,norm:'Art. 505 CT',
         opts:[{l:'A',t:'Sí, organizada y accesible',p:4},{l:'B',t:'Parcialmente organizada',p:2},{l:'C',t:'Desorganizada o incompleta',p:0}],
         cons:'Documentación incompleta o inaccesible durante una inspección equivale a presunción de incumplimiento.'},
        {id:'m7n2q6',text:'¿Existen sentencias judiciales ejecutoriadas contra la empresa por materias laborales?',risk:'a',peso:3,norm:'Art. 463 CT',
         opts:[{l:'A',t:'No hay sentencias',p:3},{l:'B',t:'Sí, sentencias ya cumplidas',p:1},{l:'C',t:'Sí, sentencias en proceso de ejecución',p:0}],
         cons:'Sentencias en ejecución generan embargo de bienes y aparición en el Boletín de Infractores Laborales.'},
      ],
      n3:[
        {id:'m7n3q1',text:'¿La empresa ha recibido inspecciones de la Dirección del Trabajo en los últimos 3 años?',risk:'a',peso:4,norm:'Art. 505 CT',
         opts:[{l:'A',t:'No ha sido inspeccionada',p:4},{l:'B',t:'1-2 inspecciones sin multa',p:3},{l:'C',t:'Inspecciones con amonestaciones',p:1},{l:'D',t:'Inspecciones con multas formales',p:0}],
         cons:'El historial de multas incrementa la probabilidad de fiscalizaciones futuras y el monto de las multas por reincidencia (hasta el triple).'},
        {id:'m7n3q2',text:'¿Tiene multas laborales vigentes o pendientes de pago ante la Inspección del Trabajo?',risk:'a',peso:4,norm:'Arts. 506-511 CT',
         opts:[{l:'A',t:'No hay multas pendientes',p:4},{l:'B',t:'Multas históricas ya pagadas',p:2},{l:'C',t:'Multas vigentes en proceso',p:1},{l:'D',t:'Multas impugnadas en tribunales',p:1}],
         cons:'Multas no pagadas derivan en cobranza ejecutiva con reajuste e interés. Reincidencia dentro de 2 años triplica el monto.'},
        {id:'m7n3q3',text:'¿La empresa tiene demandas laborales activas en el Juzgado del Trabajo?',risk:'a',peso:4,norm:'Art. 420 CT',
         opts:[{l:'A',t:'No hay demandas activas',p:4},{l:'B',t:'1 demanda en tramitación',p:2},{l:'C',t:'2 a 5 demandas activas',p:1},{l:'D',t:'Más de 5 demandas activas',p:0}],
         cons:'Múltiples demandas activas son señal de incumplimiento sistémico y pueden derivar en demandas colectivas.'},
        {id:'m7n3q4',text:'¿Se han presentado reclamos ante la Inspección del Trabajo en los últimos 3 años?',risk:'a',peso:3,norm:'Art. 474 CT',
         opts:[{l:'A',t:'Ningún reclamo',p:3},{l:'B',t:'1 a 3 reclamos archivados',p:1},{l:'C',t:'4 o más reclamos',p:0}],
         cons:'Alta frecuencia de reclamos puede activar fiscalización proactiva de la DT.'},
        {id:'m7n3q5',text:'¿Existen sentencias judiciales ejecutoriadas contra la empresa por materias laborales?',risk:'a',peso:4,norm:'Art. 463 CT',
         opts:[{l:'A',t:'No hay sentencias',p:4},{l:'B',t:'Sí, sentencias ya cumplidas',p:1},{l:'C',t:'Sí, en proceso de ejecución',p:0}],
         cons:'Sentencias en ejecución generan embargo de bienes y aparición en el Boletín de Infractores Laborales.'},
        {id:'m7n3q6',text:'¿La empresa tiene toda su documentación laboral organizada y disponible para una inspección sin demora?',risk:'a',peso:4,norm:'Art. 505 CT',
         opts:[{l:'A',t:'Sí, organizada y accesible',p:4},{l:'B',t:'Parcialmente organizada',p:2},{l:'C',t:'Desorganizada o incompleta',p:0}],
         cons:'Documentación incompleta o inaccesible durante una inspección equivale a presunción de incumplimiento.'},
        {id:'m7n3q7',text:'¿La empresa realiza auditorías laborales internas de forma preventiva, al menos cada 2 años?',risk:'m',peso:3,norm:'Buenas prácticas',
         opts:[{l:'A',t:'Sí, con informe documentado',p:3},{l:'B',t:'Solo cuando hay problemas',p:1},{l:'C',t:'Nunca se ha realizado',p:0}],
         cons:'Sin auditorías preventivas, los incumplimientos se acumulan silenciosamente hasta que aparecen en una fiscalización o demanda.'},
      ],
      n4:[
      {id:'m7n4q1',text:'¿La empresa ha recibido inspecciones de la Dirección del Trabajo en los últimos 3 años?',risk:'a',peso:4,norm:'Art. 505 CT',
       opts:[{l:'A',t:'No ha sido inspeccionada',p:4},{l:'B',t:'1-2 inspecciones sin multa',p:3},{l:'C',t:'Inspecciones con amonestaciones',p:1},{l:'D',t:'Inspecciones con multas formales',p:0}],
       cons:'El historial de multas incrementa la probabilidad de fiscalizaciones futuras y el monto de las multas por reincidencia (hasta el triple).'},
      {id:'m7n4q2',text:'¿Tiene multas laborales vigentes o pendientes de pago ante la Inspección del Trabajo?',risk:'a',peso:5,norm:'Arts. 506-511 CT',
       opts:[{l:'A',t:'No hay multas pendientes',p:5},{l:'B',t:'Multas históricas ya pagadas',p:3},{l:'C',t:'Multas vigentes en proceso de pago',p:1},{l:'D',t:'Multas impugnadas en tribunales',p:1}],
       cons:'Multas no pagadas derivan en cobranza ejecutiva con aumento por reajuste e interés. Reincidencia dentro de 2 años triplica el monto.'},
      {id:'m7n4q3',text:'¿La empresa tiene demandas laborales activas en el Juzgado del Trabajo?',risk:'a',peso:5,norm:'Art. 420 CT',
       opts:[{l:'A',t:'No hay demandas activas',p:5},{l:'B',t:'1 demanda en tramitación',p:2},{l:'C',t:'2 a 5 demandas activas',p:1},{l:'D',t:'Más de 5 demandas activas',p:0}],
       cons:'Múltiples demandas activas son señal de incumplimiento sistémico y pueden derivar en demandas colectivas.'},
      {id:'m7n4q4',text:'¿Se han presentado reclamos ante la Inspección del Trabajo en los últimos 3 años (aunque no hayan derivado en multas)?',risk:'a',peso:4,norm:'Art. 474 CT',
       opts:[{l:'A',t:'Ningún reclamo',p:4},{l:'B',t:'1 a 3 reclamos archivados',p:2},{l:'C',t:'4 o más reclamos',p:0}],
       cons:'Alta frecuencia de reclamos puede activar fiscalización proactiva de la DT y afectar la reputación laboral de la empresa.'},
      {id:'m7n4q5',text:'¿Existen sentencias judiciales ejecutoriadas contra la empresa por materias laborales?',risk:'a',peso:5,norm:'Art. 463 CT',
       opts:[{l:'A',t:'No hay sentencias',p:5},{l:'B',t:'Sí, sentencias ya cumplidas',p:2},{l:'C',t:'Sí, sentencias en proceso de ejecución',p:0}],
       cons:'Sentencias en ejecución generan embargo de bienes y aparición en el Boletín de Infractores Laborales, afectando licitaciones públicas.'},
      {id:'m7n4q6',text:'¿La empresa tiene toda su documentación laboral organizada y disponible para presentarla en una inspección sin demora?',risk:'a',peso:5,norm:'Art. 505 CT',
       opts:[{l:'A',t:'Sí, carpetas o sistema digital organizado y accesible',p:5},{l:'B',t:'Parcialmente organizada',p:2},{l:'C',t:'Desorganizada o incompleta',p:0}],
       cons:'Documentación incompleta o inaccesible durante una inspección equivale a presunción de incumplimiento.'},
      {id:'m7n4q7',text:'¿La empresa realiza auditorías laborales internas de forma preventiva al menos cada 2 años?',risk:'m',peso:3,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, con informe documentado y plan de cierre',p:3},{l:'B',t:'Solo cuando hay problemas o fiscalización',p:1},{l:'C',t:'Nunca se ha realizado una auditoría laboral',p:0}],
       cons:'Sin auditorías preventivas, los incumplimientos se acumulan silenciosamente y solo se detectan ante una fiscalización o demanda.'},
      {id:'m7n4q8',text:'¿Se han identificado y corregido oportunamente observaciones menores detectadas en fiscalizaciones previas, evitando que se repitan en la siguiente visita?',risk:'a',peso:3,norm:'Art. 505 CT; Art. 474 CT',
       opts:[{l:'A',t:'Sí, seguimiento y cierre formal de observaciones',p:3},{l:'B',t:'Se corrigen sin seguimiento formal',p:1},{l:'C',t:'No se ha hecho seguimiento de observaciones previas',p:0}],
       cons:'Repetir la misma observación en una fiscalización posterior agrava la sanción por reincidencia, incluso si la primera vez no derivó en multa.'},
      ],
      n5:[
        {id:'m7n5q1',text:'¿La empresa ha recibido inspecciones de la Dirección del Trabajo en los últimos 3 años, y en caso afirmativo, ¿todas las observaciones fueron cerradas formalmente con evidencia?',risk:'a',peso:5,norm:'Arts. 474, 505-511 CT',
         opts:[{l:'A',t:'Sin inspecciones o con cierre formal documentado de todas las observaciones',p:5},{l:'B',t:'Inspecciones con observaciones parcialmente cerradas',p:2},{l:'C',t:'Observaciones sin cierre formal',p:0}],
         cons:'El cierre incompleto de observaciones previas puede ser considerado reincidencia en la siguiente inspección, triplicando el monto de las multas.'},
        {id:'m7n5q2',text:'¿La empresa tiene multas laborales vigentes, impugnadas o en proceso de pago, con responsable designado y calendario de resolución documentado?',risk:'a',peso:5,norm:'Arts. 506-511 CT',
         opts:[{l:'A',t:'Sin multas pendientes',p:5},{l:'B',t:'Multas vigentes con plan de pago documentado',p:2},{l:'C',t:'Multas vigentes sin plan formal',p:0}],
         cons:'Las multas impugnadas sin seguimiento pueden derivar en cobranza ejecutiva con embargo de bienes. El plan de pago documentado demuestra buena fe ante la DT.'},
        {id:'m7n5q3',text:'¿La empresa tiene demandas laborales activas, con seguimiento legal documentado y provisión contable por contingencias laborales reflejada en los estados financieros?',risk:'a',peso:5,norm:'Art. 420 CT; NIIF 37',
         opts:[{l:'A',t:'Sin demandas o con seguimiento legal y provisión contable',p:5},{l:'B',t:'Demandas con seguimiento sin provisión contable',p:2},{l:'C',t:'Demandas sin seguimiento ni provisión',p:0}],
         cons:'Las contingencias laborales no provisionadas son un riesgo de auditoría contable y pueden generar sorpresas financieras significativas al momento de la resolución.'},
        {id:'m7n5q4',text:'¿Existe un programa de auditoría laboral interna preventiva al menos anual, con informe a gerencia general y plan de cierre de brechas con responsables y plazos?',risk:'a',peso:5,norm:'Buenas prácticas; Arts. 505, 9 CT',
         opts:[{l:'A',t:'Sí, auditoría anual con informe formal y plan de cierre',p:5},{l:'B',t:'Auditoría ad hoc sin plan formal',p:2},{l:'C',t:'Sin auditoría preventiva',p:0}],
         cons:'Una empresa mediana sin programa de auditoría laboral preventiva solo detecta sus brechas cuando la DT ya está en la puerta. El costo de la corrección reactiva es 3 a 5 veces mayor que el preventivo.'},
        {id:'m7n5q5',text:'¿La documentación laboral de todos los centros de trabajo es accesible de forma centralizada y puede presentarse ante una fiscalización simultánea de múltiples sucursales?',risk:'a',peso:4,norm:'Art. 505 CT',
         opts:[{l:'A',t:'Sí, repositorio centralizado accesible en tiempo real',p:4},{l:'B',t:'Digital pero sin acceso centralizado',p:2},{l:'C',t:'Documentación física descentralizada',p:0}],
         cons:'La DT puede fiscalizar simultáneamente múltiples sucursales. Sin acceso centralizado, cada centro queda expuesto a multa por no disponibilidad inmediata de documentos.'},
        {id:'m7n5q6',text:'¿La empresa aparece en el Boletín de Infractores Laborales y, en caso afirmativo, ¿tiene plan documentado para regularizar su situación?',risk:'a',peso:4,norm:'Art. 506 bis CT',
         opts:[{l:'A',t:'No aparece en el Boletín',p:4},{l:'B',t:'Aparece con plan de regularización documentado',p:1},{l:'C',t:'Aparece sin plan de regularización',p:0}],
         cons:'Aparecer en el Boletín de Infractores inhabilita para contratar con el Estado e impacta negativamente en la reputación corporativa ante clientes y proveedores.'},
        {id:'m7n5q7',text:'¿El área legal tiene un mapa de contingencias laborales actualizado semestralmente, con valorización de los pasivos probables, posibles y remotos?',risk:'m',peso:3,norm:'NIIF 37; buenas prácticas',
         opts:[{l:'A',t:'Sí, mapa semestral con valorización y reporte a gerencia',p:3},{l:'B',t:'Inventario sin valorización',p:1},{l:'C',t:'Sin mapa de contingencias',p:0}],
         cons:'Sin valorización de contingencias, la gerencia financiera no puede planificar el flujo de caja para hacer frente a condenas judiciales o acuerdos extrajudiciales.'},
        {id:'m7n5q8',text:'¿La empresa realiza simulacros de fiscalización anualmente, verificando tiempos de acceso a documentación y brechas de cumplimiento antes de que la DT las detecte?',risk:'m',peso:3,norm:'Buenas prácticas',
         opts:[{l:'A',t:'Sí, simulacro anual documentado con plan de mejora',p:3},{l:'B',t:'Revisión informal sin simulacro formal',p:1},{l:'C',t:'Sin práctica de simulacros',p:0}],
         cons:'El simulacro de fiscalización es la herramienta más efectiva para detectar brechas antes de una inspección real. Las empresas que lo practican tienen un 70% menos de multas en fiscalizaciones.'},
      ],
      n6:[
        {id:'m7n6q1',text:'¿La empresa cuenta con un programa formal de relaciones con la DT, con responsable ejecutivo designado, protocolo de atención a inspectores y registro histórico de todas las inspecciones?',risk:'a',peso:5,norm:'Arts. 474, 505-511 CT',
         opts:[{l:'A',t:'Sí, programa formal con responsable y protocolo documentado',p:5},{l:'B',t:'Sin programa formal pero con responsable',p:2},{l:'C',t:'Sin programa ni responsable formal',p:0}],
         cons:'En gran empresa, la DT fiscaliza con frecuencia y en múltiples frentes simultáneos. Sin un protocolo de atención formal, la empresa queda expuesta a inconsistencias en la información entregada.'},
        {id:'m7n6q2',text:'¿Las contingencias laborales (multas, demandas, reclamos) están provisionadas en los estados financieros con dictamen del abogado externo sobre probabilidad y monto estimado?',risk:'a',peso:5,norm:'NIIF 37; Art. 420 CT',
         opts:[{l:'A',t:'Sí, provisión con dictamen externo y revisión trimestral',p:5},{l:'B',t:'Provisión estimada sin dictamen externo',p:2},{l:'C',t:'Sin provisión',p:0}],
         cons:'En gran empresa, las contingencias laborales no provisionadas pueden representar pasivos de cientos de millones que aparecen sorpresivamente en los estados financieros, afectando indicadores de deuda y covenants bancarios.'},
        {id:'m7n6q3',text:'¿Existe un programa de auditoría laboral interna trimestral con informe al directorio, y adicionalmente una auditoría externa anual por firma especializada en derecho laboral?',risk:'a',peso:5,norm:'Buenas prácticas; Arts. 505, 9 CT',
         opts:[{l:'A',t:'Sí, auditoría interna trimestral y externa anual documentadas',p:5},{l:'B',t:'Solo auditoría interna sin externa',p:2},{l:'C',t:'Sin programa de auditoría laboral',p:0}],
         cons:'En gran empresa, la auditoría externa anual por firma especializada es el estándar mínimo de due diligence laboral. Su ausencia es observada negativamente por inversionistas y en procesos de M&A.'},
        {id:'m7n6q4',text:'¿La empresa tiene un sistema de alerta temprana de riesgos laborales que monitorea indicadores como rotación, ausentismo, reclamos internos y denuncias anónimas antes de que escalen?',risk:'m',peso:4,norm:'Buenas prácticas de gobierno corporativo',
         opts:[{l:'A',t:'Sí, sistema de alertas con dashboard y reporte al directorio',p:4},{l:'B',t:'Monitoreo parcial sin sistema integrado',p:1},{l:'C',t:'Sin sistema de alerta temprana',p:0}],
         cons:'Las denuncias ante la DT o demandas laborales son la etapa terminal de un conflicto que generalmente tiene señales previas detectable si la empresa tiene los indicadores correctos.'},
        {id:'m7n6q5',text:'¿La empresa realiza simulacros de fiscalización semestrales con equipos internos y externos, verificando documentación, sistemas y accesibilidad en todos los centros de trabajo simultáneamente?',risk:'m',peso:3,norm:'Buenas prácticas',
         opts:[{l:'A',t:'Sí, simulacros semestrales en todos los centros',p:3},{l:'B',t:'Simulacros solo en casa matriz',p:1},{l:'C',t:'Sin simulacros',p:0}],
         cons:'En gran empresa con múltiples centros, un simulacro solo en casa matriz deja a todas las sucursales expuestas. El costo de un simulacro es mínimo comparado con las multas de una fiscalización real.'},
        {id:'m7n6q6',text:'¿Las lecciones aprendidas de cada fiscalización, demanda o reclamo se sistematizan en una base de conocimiento que alimenta el plan de mejora continua del área laboral?',risk:'m',peso:3,norm:'Buenas prácticas de gestión del riesgo',
         opts:[{l:'A',t:'Sí, base de conocimiento actualizada y accesible al equipo legal',p:3},{l:'B',t:'Lecciones aprendidas informalmente',p:1},{l:'C',t:'Sin sistematización',p:0}],
         cons:'Sin sistematización, la empresa repite los mismos errores en cada proceso, pagando el costo de aprendizaje en cada fiscalización o demanda en lugar de mejorar estructuralmente.'},
      ],
    },
    questions:[
      {id:'m7q1',text:'¿La empresa ha recibido inspecciones de la Dirección del Trabajo en los últimos 3 años?',risk:'a',peso:4,norm:'Art. 505 CT',
       opts:[{l:'A',t:'No ha sido inspeccionada',p:4},{l:'B',t:'1-2 inspecciones sin multa',p:3},{l:'C',t:'Inspecciones con amonestaciones',p:1},{l:'D',t:'Inspecciones con multas formales',p:0}],
       cons:'El historial de multas incrementa la probabilidad de fiscalizaciones futuras y el monto de las multas por reincidencia (hasta el triple).'},
      {id:'m7q2',text:'¿Tiene multas laborales vigentes o pendientes de pago ante la Inspección del Trabajo?',risk:'a',peso:5,norm:'Arts. 506-511 CT',
       opts:[{l:'A',t:'No hay multas pendientes',p:5},{l:'B',t:'Multas históricas ya pagadas',p:3},{l:'C',t:'Multas vigentes en proceso de pago',p:1},{l:'D',t:'Multas impugnadas en tribunales',p:1}],
       cons:'Multas no pagadas derivan en cobranza ejecutiva con aumento por reajuste e interés. Reincidencia dentro de 2 años triplica el monto.'},
      {id:'m7q3',text:'¿La empresa tiene demandas laborales activas en el Juzgado del Trabajo?',risk:'a',peso:5,norm:'Art. 420 CT',
       opts:[{l:'A',t:'No hay demandas activas',p:5},{l:'B',t:'1 demanda en tramitación',p:2},{l:'C',t:'2 a 5 demandas activas',p:1},{l:'D',t:'Más de 5 demandas activas',p:0}],
       cons:'Múltiples demandas activas son señal de incumplimiento sistémico y pueden derivar en demandas colectivas.'},
      {id:'m7q4',text:'¿Se han presentado reclamos ante la Inspección del Trabajo en los últimos 3 años (aunque no hayan derivado en multas)?',risk:'a',peso:4,norm:'Art. 474 CT',
       opts:[{l:'A',t:'Ningún reclamo',p:4},{l:'B',t:'1 a 3 reclamos archivados',p:2},{l:'C',t:'4 o más reclamos',p:0}],
       cons:'Alta frecuencia de reclamos puede activar fiscalización proactiva de la DT y afectar la reputación laboral de la empresa.'},
      {id:'m7q5',text:'¿La empresa ha sido citada a comparendo ante la Inspección del Trabajo en los últimos 12 meses?',risk:'a',peso:3,norm:'Art. 474 CT',
       opts:[{l:'A',t:'No',p:3},{l:'B',t:'Sí, 1-2 comparendos ya resueltos',p:1},{l:'C',t:'Sí, con comparendos pendientes de resolución',p:0}],
       cons:'Comparendos pendientes pueden derivar en multas con recargo del 100% si hay reincidencia en la misma materia.'},
      {id:'m7q6',text:'¿Existen sentencias judiciales ejecutoriadas contra la empresa por materias laborales?',risk:'a',peso:5,norm:'Art. 463 CT',
       opts:[{l:'A',t:'No hay sentencias',p:5},{l:'B',t:'Sí, sentencias ya cumplidas',p:2},{l:'C',t:'Sí, sentencias en proceso de ejecución',p:0}],
       cons:'Sentencias en ejecución generan embargo de bienes y aparición en el Boletín de Infractores Laborales, afectando licitaciones públicas.'},
      {id:'m7q7',text:'¿La empresa tiene registro de demandas de tutela de derechos fundamentales en su contra?',risk:'a',peso:4,norm:'Arts. 485-495 CT',
       opts:[{l:'A',t:'No, ninguna',p:4},{l:'B',t:'Sí, históricas archivadas ya resueltas',p:1},{l:'C',t:'Sí, demandas de tutela activas',p:0}],
       cons:'Las demandas de tutela pueden resultar en recargos del 30% al 80% sobre las indemnizaciones, más daño moral.'},
      {id:'m7q8',text:'¿La empresa tiene toda su documentación laboral organizada y disponible para presentarla en una inspección sin demora?',risk:'a',peso:5,norm:'Art. 505 CT',
       opts:[{l:'A',t:'Sí, carpetas o sistema digital organizado y accesible',p:5},{l:'B',t:'Parcialmente organizada',p:2},{l:'C',t:'Desorganizada o incompleta',p:0}],
       cons:'Documentación incompleta o inaccesible durante una inspección equivale a presunción de incumplimiento.'},
      {id:'m7q9',text:'¿Existe un sistema de control de cumplimiento con alertas preventivas de vencimientos (cotizaciones, contratos, licencias, plazos legales)?',risk:'m',peso:3,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, con sistema digital y alertas automáticas',p:3},{l:'B',t:'Calendario manual con seguimiento',p:1},{l:'C',t:'No existe seguimiento formal',p:0}],
       cons:'Sin sistema de alertas los vencimientos de plazos legales son la fuente más frecuente de incumplimientos involuntarios pero igualmente sancionables.'},
      {id:'m7q10',text:'¿Existe un protocolo de atención ante inspecciones sorpresivas de la DT (quién atiende, qué documentos presentar, cómo registrar la visita)?',risk:'m',peso:3,norm:'Art. 505 CT',
       opts:[{l:'A',t:'Sí, con instrucciones escritas al equipo responsable',p:3},{l:'B',t:'Solo lo maneja RRHH de manera informal',p:1},{l:'C',t:'No existe protocolo',p:0}],
       cons:'Sin protocolo, durante una inspección pueden hacerse declaraciones o mostrarse documentos que perjudiquen a la empresa.'},
      {id:'m7q11',text:'¿Se monitorea el Boletín de Infractores Laborales del MINTRAB para verificar que la empresa no figure en él?',risk:'m',peso:2,norm:'Art. 511 CT',
       opts:[{l:'A',t:'Sí, revisión periódica',p:2},{l:'B',t:'No se monitorea',p:0}],
       cons:'Aparecer en el Boletín puede impedir la participación en licitaciones públicas y afectar contratos con clientes corporativos.'},
      {id:'m7q12',text:'¿La empresa realiza auditorías laborales internas de forma preventiva al menos cada 2 años?',risk:'m',peso:3,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, con informe documentado y plan de cierre',p:3},{l:'B',t:'Solo cuando hay problemas o fiscalización',p:1},{l:'C',t:'Nunca se ha realizado una auditoría laboral',p:0}],
       cons:'Sin auditorías preventivas, los incumplimientos se acumulan silenciosamente y solo se detectan ante una fiscalización o demanda.'},
      {id:'m7q13',text:'¿La empresa cuenta con asesoría legal laboral permanente o bajo demanda ante dudas normativas?',risk:'m',peso:2,norm:'Buenas prácticas',
       opts:[{l:'A',t:'Sí, abogado laboral en dotación o contrato fijo',p:2},{l:'B',t:'Consultas esporádicas según necesidad',p:1},{l:'C',t:'No tiene asesoría laboral',p:0}],
       cons:'Sin asesoría laboral los cambios normativos frecuentes generan incumplimientos no intencionales pero igualmente sancionables y multables.'},
      {id:'m7q14',text:'¿La empresa ha sido objeto de fiscalización por parte de la Superintendencia de Pensiones o de Seguridad Social en materia previsional?',risk:'a',peso:3,norm:'DL 3500; Ley 16.395 (SUSESO)',
       opts:[{l:'A',t:'No ha sido fiscalizada',p:3},{l:'B',t:'Sí, sin observaciones relevantes',p:2},{l:'C',t:'Sí, con observaciones u multas previsionales',p:0}],
       cons:'Observaciones previsionales no corregidas pueden derivar en juicios ejecutivos previsionales adicionales a las multas laborales ordinarias.'},
      {id:'m7q15',text:'¿Existen denuncias o fiscalizaciones pendientes de la SEREMI de Salud relacionadas con condiciones sanitarias o de seguridad del lugar de trabajo?',risk:'a',peso:3,norm:'DS 594 MINSAL; Código Sanitario',
       opts:[{l:'A',t:'No hay denuncias ni fiscalizaciones pendientes',p:3},{l:'B',t:'Hubo observaciones ya corregidas',p:2},{l:'C',t:'Hay observaciones o denuncias pendientes',p:0}],
       cons:'Observaciones sanitarias no corregidas pueden derivar en clausura temporal del lugar de trabajo por parte de la autoridad sanitaria.'},
      {id:'m7q16',text:'¿La empresa mide y reporta internamente sus indicadores de cumplimiento laboral a la alta dirección de forma periódica?',risk:'m',peso:2,norm:'Buenas prácticas de gobierno corporativo',
       opts:[{l:'A',t:'Sí, reporte periódico a la alta dirección o directorio',p:2},{l:'B',t:'Reporte informal o esporádico',p:1},{l:'C',t:'No existe reporte de cumplimiento laboral',p:0}],
       cons:'Sin visibilidad del cumplimiento laboral a nivel directivo, los riesgos laborales no se priorizan adecuadamente en la gestión estratégica de la empresa.'},
      {id:'m7q17',text:'¿La empresa cuenta con un seguro de responsabilidad civil que cubra contingencias laborales (demandas, indemnizaciones)?',risk:'b',peso:2,norm:'Buenas prácticas de gestión de riesgo',
       opts:[{l:'A',t:'Sí, póliza vigente que cubre contingencias laborales',p:2},{l:'B',t:'No cuenta con este tipo de cobertura',p:0},{l:'C',t:'No se ha evaluado esta opción',p:0}],
       cons:'Sin cobertura de seguro, el costo de demandas laborales relevantes debe asumirse íntegramente con flujo de caja de la empresa, afectando su operación.'},
      {id:'m7q18',text:'¿Se han identificado y corregido oportunamente observaciones menores detectadas en fiscalizaciones previas, evitando que se repitan en la siguiente visita?',risk:'a',peso:3,norm:'Art. 505 CT; Art. 474 CT',
       opts:[{l:'A',t:'Sí, seguimiento y cierre formal de observaciones',p:3},{l:'B',t:'Se corrigen sin seguimiento formal',p:1},{l:'C',t:'No se ha hecho seguimiento de observaciones previas',p:0}],
       cons:'Repetir la misma observación en una fiscalización posterior agrava la sanción por reincidencia, incluso si la primera vez no derivó en multa.'},
      {id:'m7q19',text:'¿La empresa participa o ha participado en algún programa de cumplimiento voluntario o sello de buenas prácticas laborales de la Dirección del Trabajo?',risk:'b',peso:1,norm:'Programas de cumplimiento voluntario DT; Sello Mujer y otros',
       opts:[{l:'A',t:'Sí, participa activamente',p:1},{l:'B',t:'No participa ni lo ha evaluado',p:0},{l:'C',t:'Lo está evaluando',p:1}],
       cons:'La participación en programas de cumplimiento voluntario reduce la probabilidad de fiscalización sorpresiva y mejora la reputación laboral de la empresa.'},
      {id:'m7q20',text:'¿Existe un presupuesto anual destinado específicamente a regularizar brechas de cumplimiento laboral identificadas en autoevaluaciones?',risk:'m',peso:2,norm:'Buenas prácticas de gestión de riesgo',
       opts:[{l:'A',t:'Sí, presupuesto anual asignado',p:2},{l:'B',t:'Se resuelve caso a caso sin presupuesto definido',p:1},{l:'C',t:'No existe presupuesto para este fin',p:0}],
       cons:'Sin presupuesto dedicado, las brechas identificadas en diagnósticos como este tienden a postergarse indefinidamente hasta que se materializa el riesgo.'},
      {id:'m7q21',text:'¿La empresa ha evaluado su exposición a demandas colectivas o de interés colectivo derivadas de prácticas laborales sistemáticas (no casos aislados)?',risk:'a',peso:3,norm:'Arts. 504-516 CT (procedimiento de tutela y otros)',
       opts:[{l:'A',t:'Sí, evaluación de riesgo de exposición colectiva realizada',p:3},{l:'B',t:'No se ha evaluado este riesgo específico',p:0},{l:'C',t:'Se ha identificado riesgo y está en gestión',p:1}],
       cons:'Las prácticas sistemáticas (ej. cálculo erróneo de un beneficio aplicado a toda la dotación) exponen a demandas colectivas con un impacto económico multiplicado por el número de afectados.'},
      {id:'m7q22',text:'¿Se revisa la exposición de la empresa ante el nuevo procedimiento de tutela laboral reforzado para denuncias relacionadas con Ley Karin?',risk:'a',peso:3,norm:'Ley 21.643; Arts. 485-495 CT',
       opts:[{l:'A',t:'Sí, evaluación legal específica realizada',p:3},{l:'B',t:'No se ha evaluado este riesgo específico',p:0},{l:'C',t:'En proceso de evaluación',p:1}],
       cons:'Las demandas de tutela vinculadas a Ley Karin combinan el riesgo reputacional con el legal, y suelen derivar en los recargos más altos contemplados por el Código del Trabajo.'},
    ]
  },

  // ------------------------------------------------------------
  // MÓDULOS AVANZADOS — Mediana y Gran Empresa
  // Bancos de preguntas redactados por el comité multidisciplinario BSR
  // mod8: N5+N6 · mod9: N5+N6 · mod10: N6 · mod11: N6
  // ------------------------------------------------------------
  mod8: {
    name:'Gobierno corporativo laboral y auditoría interna',
    niveles:{n5:11,n6:9},
    objetivo:'Verificar la existencia de políticas formales de gobierno laboral, comité de auditoría con competencia en materia laboral, y un programa de auditoría interna recurrente con informes al directorio o alta gerencia.',
    riesgoEvaluado:'Ausencia de supervisión estructurada sobre el cumplimiento laboral a nivel directivo; exposición reputacional y legal por falta de trazabilidad de decisiones.',
    evidenciaRequerida:'Actas de comité, programa anual de auditoría, informes de auditoría interna de los últimos 24 meses, matriz de riesgos aprobada por gerencia.',
    questions:[
      {id:'m8q1',text:'¿El directorio o la alta gerencia tiene en su agenda al menos una sesión anual dedicada a revisar los riesgos laborales y el estado de cumplimiento de la empresa?',risk:'a',peso:5,norm:'Buenas prácticas de gobierno corporativo; Ley 20.382',
       opts:[{l:'A',t:'Sí, sesión formal anual con acta y compromisos documentados',p:5},{l:'B',t:'El tema se trata de forma ad hoc sin sesión formal',p:2},{l:'C',t:'El directorio no aborda el cumplimiento laboral',p:0}],
       cons:'Un directorio que no supervisa el cumplimiento laboral no puede ejercer gobierno efectivo sobre el mayor pasivo operacional y reputacional de la empresa.'},
      {id:'m8q2',text:'¿Existe una Política de Gobierno Laboral aprobada por el directorio, que establezca los principios de relación con los trabajadores, sindicatos y la DT?',risk:'a',peso:5,norm:'Buenas prácticas; OIT Convenios 98 y 135',
       opts:[{l:'A',t:'Sí, política aprobada por directorio, publicada y revisada anualmente',p:5},{l:'B',t:'Política interna no aprobada por directorio',p:2},{l:'C',t:'Sin política formal',p:0}],
       cons:'La Política de Gobierno Laboral es el marco que da coherencia a todas las decisiones de RRHH. Sin ella, cada jefatura actúa con criterios propios, generando inconsistencias y riesgos.'},
      {id:'m8q3',text:'¿El comité de auditoría (o equivalente) incluye la revisión del cumplimiento laboral en su mandato y recibe informes laborales al menos semestralmente?',risk:'a',peso:5,norm:'Buenas prácticas de gobierno; NCG 461 CMF',
       opts:[{l:'A',t:'Sí, mandato formal y reporte semestral documentado',p:5},{l:'B',t:'Se incluye de forma ad hoc sin mandato formal',p:2},{l:'C',t:'El comité de auditoría no aborda temas laborales',p:0}],
       cons:'Sin revisión formal del cumplimiento laboral por el comité de auditoría, el directorio no tiene visibilidad independiente sobre el estado real de los riesgos laborales.'},
      {id:'m8q4',text:'¿Existe un programa formal de auditoría interna laboral anual (o más frecuente), con plan aprobado, alcance definido por tipo de riesgo, equipo independiente e informe al directorio?',risk:'a',peso:6,norm:'Marco IIA; buenas prácticas de auditoría laboral',
       opts:[{l:'A',t:'Sí, programa anual con plan aprobado, alcance definido e informe al directorio',p:6},{l:'B',t:'Auditoría laboral ad hoc sin programa formal',p:2},{l:'C',t:'Sin auditoría laboral interna',p:0}],
       cons:'Sin programa de auditoría laboral formal, la empresa no detecta sus brechas de cumplimiento hasta que la DT o un juicio lo hace, cuando el costo correctivo es máximo.'},
      {id:'m8q5',text:'¿Las observaciones detectadas en auditorías laborales internas tienen plan de cierre formal con responsables, plazos, evidencia de cierre y seguimiento por la gerencia?',risk:'a',peso:5,norm:'Buenas prácticas de auditoría interna',
       opts:[{l:'A',t:'Sí, proceso formal de tracking con evidencia de cierre',p:5},{l:'B',t:'Plan de cierre informal sin tracking formal',p:2},{l:'C',t:'Sin seguimiento de observaciones',p:0}],
       cons:'Una observación de auditoría sin cierre formal es equivalente a conocer un riesgo y no actuar sobre él, lo que puede agravarse si el mismo punto aparece luego en una fiscalización.'},
      {id:'m8q6',text:'¿La empresa tiene una Matriz de Riesgos Laborales aprobada por la gerencia, con probabilidad, impacto y planes de mitigación actualizados al menos semestralmente?',risk:'a',peso:6,norm:'ISO 31000; buenas prácticas de gestión de riesgos',
       opts:[{l:'A',t:'Sí, matriz formal aprobada, semestral, con planes de mitigación',p:6},{l:'B',t:'Registro de riesgos sin metodología formal ni planes',p:2},{l:'C',t:'Sin matriz de riesgos laborales',p:0}],
       cons:'Sin matriz de riesgos laborales, la empresa asigna recursos de cumplimiento al azar en vez de priorizarlos por impacto real.'},
      {id:'m8q7',text:'¿El gerente de RRHH o responsable de cumplimiento laboral reporta directamente a la gerencia general o al directorio sobre el estado de los riesgos laborales?',risk:'m',peso:4,norm:'Buenas prácticas de gobierno corporativo',
       opts:[{l:'A',t:'Sí, línea de reporte directa con agenda regular',p:4},{l:'B',t:'Reporte a través de gerencia intermedia',p:2},{l:'C',t:'Sin línea de reporte formal al directorio',p:0}],
       cons:'Sin acceso directo del responsable laboral al directorio, los riesgos pueden ser filtrados o minimizados por capas gerenciales intermedias, llegando tarde o incompletos.'},
      {id:'m8q8',text:'¿La empresa tiene un Código de Conducta Laboral publicado, que incluye principios de no discriminación, respeto a la libertad sindical, prohibición del trabajo forzado y mecanismo de reporte de infracciones?',risk:'a',peso:4,norm:'OIT Convenios 29, 87, 98, 100, 111; Ley 21.643',
       opts:[{l:'A',t:'Sí, código publicado, difundido y con mecanismo de reporte',p:4},{l:'B',t:'Código existente sin difusión ni mecanismo de reporte',p:2},{l:'C',t:'Sin código de conducta laboral',p:0}],
       cons:'Sin Código de Conducta Laboral, los trabajadores no tienen un marco de referencia claro sobre las expectativas de comportamiento y los mecanismos de reporte disponibles.'},
    ]
  },
  mod9: {
    name:'Compliance laboral avanzado y matrices de riesgo',
    niveles:{n5:9,n6:8},
    objetivo:'Evaluar la madurez del programa de compliance laboral: canal de denuncias unificado, matriz de riesgos actualizada, responsable de compliance designado y plan de mitigación documentado.',
    riesgoEvaluado:'Programas de compliance declarativos sin implementación real; matrices de riesgo desactualizadas que no reflejan cambios normativos recientes (Ley Karin, Ley 21.561, Ley 21.719).',
    evidenciaRequerida:'Matriz de riesgo laboral vigente, nombramiento de responsable de compliance, registro de incidentes y su resolución, plan de mitigación con plazos.',
    questions:[
      {id:'m9q1',text:'¿La empresa tiene un Programa de Compliance Laboral formal, con responsable designado (Compliance Officer o equivalente), recursos asignados y plan de trabajo anual?',risk:'a',peso:6,norm:'Buenas prácticas; Ley 20.393 (referencial)',
       opts:[{l:'A',t:'Sí, programa formal con responsable, recursos y plan anual',p:6},{l:'B',t:'Función informal de compliance sin programa documentado',p:2},{l:'C',t:'Sin programa de compliance laboral',p:0}],
       cons:'Sin un programa de compliance estructurado, el cumplimiento laboral depende de la proactividad individual de cada jefatura, lo que genera inconsistencias y puntos ciegos de riesgo.'},
      {id:'m9q2',text:'¿El canal de denuncias laboral (independiente del canal Ley Karin) permite reportar incumplimientos normativos, fraudes o conductas indebidas, con garantía de confidencialidad y no represalia?',risk:'a',peso:5,norm:'Ley 21.643; buenas prácticas',
       opts:[{l:'A',t:'Sí, canal independiente con confidencialidad y no represalia documentadas',p:5},{l:'B',t:'Canal único para todo tipo de denuncia sin garantías explícitas',p:2},{l:'C',t:'Sin canal de denuncias de compliance',p:0}],
       cons:'Un canal de denuncias sin garantía explícita de no represalia no es efectivo, ya que los trabajadores no lo usan por miedo. Sin reportes internos, la empresa pierde la oportunidad de detectar riesgos tempranamente.'},
      {id:'m9q3',text:'¿La Matriz de Riesgos Laborales incorpora los cambios normativos de los últimos 18 meses (Ley 21.561, Ley 21.643, Ley 21.719) con evaluación de probabilidad e impacto actualizada?',risk:'a',peso:5,norm:'ISO 31000; Ley 21.561; Ley 21.643; Ley 21.719',
       opts:[{l:'A',t:'Sí, matriz actualizada con nuevas normativas y riesgos evaluados',p:5},{l:'B',t:'Matriz existente sin incorporación de cambios normativos recientes',p:1},{l:'C',t:'Sin matriz de riesgos',p:0}],
       cons:'Una matriz que no refleja los cambios normativos recientes da una falsa sensación de seguridad, omitiendo riesgos que pueden materializarse en sanciones inmediatas.'},
      {id:'m9q4',text:'¿Los incidentes de compliance laboral (denuncias, sanciones, brechas detectadas) se registran en un sistema centralizado, se analizan mensualmente y generan lecciones aprendidas formalizadas?',risk:'a',peso:4,norm:'Buenas prácticas de compliance; ISO 37301',
       opts:[{l:'A',t:'Sí, sistema centralizado con análisis mensual y lecciones aprendidas',p:4},{l:'B',t:'Registro de incidentes sin análisis sistemático',p:1},{l:'C',t:'Sin registro de incidentes de compliance',p:0}],
       cons:'Sin análisis sistemático de incidentes, la empresa no puede detectar patrones de riesgo recurrentes ni mejorar sus controles antes de que el problema escale.'},
      {id:'m9q5',text:'¿El Programa de Compliance Laboral es objeto de evaluación periódica por parte de un externo independiente, con informe al directorio sobre la efectividad de los controles?',risk:'m',peso:3,norm:'Buenas prácticas; ISO 37301',
       opts:[{l:'A',t:'Sí, evaluación externa anual con informe al directorio',p:3},{l:'B',t:'Evaluación interna sin revisión externa',p:1},{l:'C',t:'Sin evaluación del programa',p:0}],
       cons:'La autoevaluación del programa de compliance tiene limitaciones estructurales. Una revisión externa independiente identifica puntos ciegos que el equipo interno no puede ver.'},
    ]
  },
  mod10: {
    name:'ESG laboral, diversidad e inclusión',
    niveles:{n6:7},
    objetivo:'Evaluar el reporte de indicadores laborales bajo estándares ESG (brecha salarial de género, accidentabilidad, rotación, diversidad en cargos de liderazgo) y su consistencia con la información pública de la empresa.',
    riesgoEvaluado:'Greenwashing laboral: reporte ESG que no coincide con la realidad operativa, exponiendo a la empresa ante inversionistas, reguladores de mercado de valores y opinión pública.',
    evidenciaRequerida:'Memoria de sostenibilidad o reporte ESG vigente, política de diversidad e inclusión, indicadores de brecha salarial por género (Ley 21.015), registro de denuncias Ley Karin asociado a discriminación.',
    questions:[
      {id:'m10q1',text:'¿La empresa publica una Memoria de Sostenibilidad o Reporte ESG anual con indicadores laborales verificables bajo estándares internacionales (GRI, SASB, TCFD o equivalente)?',risk:'a',peso:6,norm:'Estándares GRI; NCG 461 CMF (si cotiza en bolsa)',
       opts:[{l:'A',t:'Sí, reporte con indicadores bajo estándar reconocido y verificación externa',p:6},{l:'B',t:'Reporte ESG sin estándar formal ni verificación',p:2},{l:'C',t:'Sin reporte ESG publicado',p:0}],
       cons:'Los inversionistas institucionales y clasificadoras de riesgo ESG requieren datos laborales verificables. Sin reporte formal, la empresa queda excluida de carteras de inversión responsable y licitaciones que exigen criterios ESG.'},
      {id:'m10q2',text:'¿La empresa tiene análisis de brecha salarial de género actualizado, con plan formal de cierre de brechas no justificadas y reporte de avance al directorio?',risk:'a',peso:6,norm:'Ley 20.348; Ley 21.015; estándares GRI 405',
       opts:[{l:'A',t:'Sí, análisis actualizado con plan formal y reporte al directorio',p:6},{l:'B',t:'Análisis realizado sin plan de cierre ni reporte',p:2},{l:'C',t:'Sin análisis de brecha salarial de género',p:0}],
       cons:'La brecha salarial de género es el indicador laboral ESG más monitoreado por inversionistas institucionales. Su existencia sin plan de cierre puede considerarse discriminación bajo Ley 20.348.'},
      {id:'m10q3',text:'¿Los indicadores de accidentabilidad, frecuencia y gravedad de accidentes del trabajo son reportados públicamente y se comparan con el benchmark sectorial?',risk:'a',peso:5,norm:'Ley 16.744; estándares GRI 403',
       opts:[{l:'A',t:'Sí, reportados públicamente con comparativo sectorial',p:5},{l:'B',t:'Indicadores internos sin publicación',p:2},{l:'C',t:'Sin seguimiento formal de accidentabilidad',p:0}],
       cons:'Los inversionistas ESG ponderan fuertemente los indicadores de seguridad laboral. Una accidentabilidad alta sin plan de mejora publicado puede excluir a la empresa de fondos de inversión responsable.'},
      {id:'m10q4',text:'¿La empresa tiene política formal de diversidad e inclusión aprobada por el directorio, con metas medibles para cargos de liderazgo y mecanismos de no discriminación en selección?',risk:'m',peso:4,norm:'Ley 20.609; Ley 21.015; estándares GRI 405',
       opts:[{l:'A',t:'Sí, política aprobada con metas medibles y proceso de selección inclusivo',p:4},{l:'B',t:'Política declarativa sin metas ni proceso inclusivo',p:1},{l:'C',t:'Sin política de diversidad',p:0}],
       cons:'La diversidad en posiciones de liderazgo es un indicador ESG creciente. Sin política formal y metas medibles, la empresa no puede demostrar progreso ante clasificadoras e inversionistas.'},
    ]
  },
  mod11: {
    name:'Continuidad operacional y gestión sindical estratégica',
    niveles:{n6:6},
    objetivo:'Evaluar planes de continuidad operacional ante huelgas legales o conflictos colectivos prolongados, y la madurez de la estrategia de relacionamiento sindical a nivel corporativo.',
    riesgoEvaluado:'Paralización de operaciones sin plan de contingencia ante negociación colectiva reglada; relación sindical reactiva en lugar de estratégica, con escalamiento a conflictos de alto costo reputacional.',
    evidenciaRequerida:'Plan de continuidad operacional ante huelga, calendario de negociaciones colectivas vigentes y proyectadas, bitácora de mesas de diálogo social.',
    questions:[
      {id:'m11q1',text:'¿La empresa tiene un Plan de Continuidad Operacional (PCO) ante huelga legal que define servicios mínimos, equipos de emergencia, protocolos de comunicación y cronograma de activación?',risk:'a',peso:6,norm:'Arts. 359-363 CT; Ley 20.940',sindical:true,
       opts:[{l:'A',t:'Sí, PCO documentado, validado con DT y probado mediante simulacro',p:6},{l:'B',t:'PCO documentado sin validación DT ni simulacro',p:3},{l:'C',t:'Sin PCO ante huelga',p:0},{l:'D',t:'No hay sindicato',p:6}],
       cons:'Sin PCO ante huelga, la empresa puede ver paralizada su operación por semanas sin saber cómo reaccionar. En gran empresa, una huelga de 15 días puede significar pérdidas de cientos de millones.'},
      {id:'m11q2',text:'¿La empresa tiene un calendario prospectivo de negociaciones colectivas para los próximos 24 meses, con análisis de impacto económico y estrategia negociadora para cada proceso?',risk:'a',peso:5,norm:'Arts. 303-350 CT; Ley 20.940',sindical:true,
       opts:[{l:'A',t:'Sí, calendario con análisis de impacto y estrategia documentada',p:5},{l:'B',t:'Calendario sin análisis ni estrategia',p:2},{l:'C',t:'Sin planificación prospectiva de negociaciones',p:0},{l:'D',t:'No hay sindicato',p:5}],
       cons:'La negociación colectiva gestionada reactivamente sin estrategia previa resulta en acuerdos más costosos y convenios que limitan la flexibilidad operacional de la empresa.'},
      {id:'m11q3',text:'¿La empresa lleva una bitácora formal de las mesas de diálogo con el sindicato (reuniones ordinarias, acuerdos extrajudiciales, compromisos) con firma de ambas partes?',risk:'a',peso:4,norm:'Arts. 220, 289-294 CT',sindical:true,
       opts:[{l:'A',t:'Sí, bitácora formal firmada por ambas partes',p:4},{l:'B',t:'Registro informal sin firma sindical',p:1},{l:'C',t:'Sin bitácora de diálogo',p:0},{l:'D',t:'No hay sindicato',p:4}],
       cons:'Sin bitácora firmada, la empresa no puede demostrar la buena fe en el relacionamiento sindical ante una denuncia de prácticas antisindicales o un proceso judicial.'},
      {id:'m11q4',text:'¿La empresa tiene protocolo formal para gestión de conflictos colectivos que escalan fuera de la negociación (paros, huelgas ilegales, ocupaciones), con escalada definida al directorio?',risk:'a',peso:5,norm:'Arts. 375, 464 CT; Ley 20.940',sindical:true,
       opts:[{l:'A',t:'Sí, protocolo documentado con escalada al directorio y medidas de contención',p:5},{l:'B',t:'Sin protocolo formal aunque existe respuesta ad hoc',p:2},{l:'C',t:'Sin protocolo de conflictos',p:0},{l:'D',t:'No hay sindicato',p:5}],
       cons:'Una huelga ilegal o paro no contemplado sin protocolo de respuesta puede escalar a violencia, daño a instalaciones o bloqueo de accesos, con impacto legal y reputacional grave.'},
      {id:'m11q5',text:'¿La empresa reporta indicadores de relacionamiento sindical (número de negociaciones, duración promedio, cláusulas acordadas, conflictos resueltos vs escalados) en su reporte ESG?',risk:'m',peso:3,norm:'Estándares GRI 402, 407; OIT',sindical:true,
       opts:[{l:'A',t:'Sí, indicadores publicados en reporte ESG con tendencias',p:3},{l:'B',t:'Indicadores internos sin publicación',p:1},{l:'C',t:'Sin indicadores formales de relacionamiento sindical',p:0},{l:'D',t:'No hay sindicato',p:3}],
       cons:'Los inversionistas institucionales evalúan la calidad del relacionamiento sindical como indicador de riesgo operacional. Sin datos publicados, la empresa no puede demostrar una posición responsable.'},
    ]
  }

};

// ============================================================
// ESTADO
// ============================================================
const S = { answers:{}, m1:{}, scores:{}, ready:false };

// ============================================================
// CLASIFICACIÓN EN VIVO (Módulo 1)
// ============================================================
function onNTrabChange(){
  const n=document.getElementById('d_ntrab').value;
  const lv=getNivel(n);
  const box=document.getElementById('nivelBox');
  if(!lv){ box.style.display='none'; return; }
  box.style.display='block';
  box.innerHTML=`<div class="nivel-card" style="background:${lv.color}0d;border-color:${lv.color}55">
    <div class="nv-badge" style="background:${lv.color}">N${lv.orden}</div>
    <div>
      <div class="nv-name" style="color:${lv.color}">${lv.nombre} <span class="lvl-pill ${lv.cls}">Nivel ${lv.orden} de 6</span></div>
      <div class="nv-desc">${lv.desc}</div>
      <div class="nv-meta">
        <span><i class="ti ti-users" style="font-size:12px"></i> ${lv.min}${lv.max===Infinity?'+':'–'+lv.max} trabajadores</span>
        <span><i class="ti ti-list-check" style="font-size:12px"></i> ${lv.rangoPreg} preguntas</span>
        <span><i class="ti ti-clock" style="font-size:12px"></i> ~${lv.tiempoMin} min</span>
      </div>
    </div>
  </div>`;
  // Selector de modo rápido/experto — solo aplica a Nivel 4 (PyME),
  // único nivel que cuenta con un banco extendido de 180 preguntas
  // además del banco corto de 60 preguntas por defecto.
  const modoBox=document.getElementById('modoExpertoBox');
  if(lv.id==='n4'){
    modoBox.style.display='block';
    if(S.m1.modoExperto===undefined) S.m1.modoExperto=false;
  } else {
    modoBox.style.display='none';
    S.m1.modoExperto=false;
  }
}

function setModoExperto(val){
  S.m1.modoExperto=val;
  document.getElementById('modo-rapido-card').classList.toggle('sel-mode',!val);
  document.getElementById('modo-experto-card').classList.toggle('sel-mode',val);
}

// ============================================================
// LÓGICA SINDICATO
// ============================================================
function onSindicatoChange(){
  const v=document.getElementById('d_sind').value;
  document.getElementById('fg_sind_det').style.display=(v==='si')?'block':'none';
  S.m1.sindicato=v;
}

// ============================================================
// MÓDULOS ACTIVOS SEGÚN NIVEL
// ============================================================
function modulosActivos(){
  const lv=S.m1.nivelObj;
  if(!lv) return Object.keys(MODS);
  let activos=lv.modulosActivos.slice();
  if(lv.modulosOcultos) activos=activos.filter(m=>!lv.modulosOcultos.includes(m));
  return activos;
}

function pesoModulo(modId){
  const mod=MODS[modId]; if(!mod) return 0;
  const nivelId=S.m1.nivel||'n4';
  return mod.niveles[nivelId]||0;
}

// Devuelve el banco de preguntas correcto para un módulo según el
// nivel activo de la empresa. Si el módulo tiene `questionsByLevel`
// definido para ese nivel, se usa ese banco específico (preguntas
// redactadas a medida). Si no, cae al banco `questions` por defecto
// (heredado de N4/PyME) — esto permite ir poblando nivel por nivel
// sin romper los que aún no tienen banco propio.
//
// CASO ESPECIAL — Nivel 4 (PyME): existen dos bancos:
//   - Modo rápido (default, ~60 preguntas): questionsByLevel.n4
//   - Modo experto (opcional, ~180 preguntas): mod.questions
// El cliente elige el modo en el Módulo 1 (S.m1.modoExperto).
function getQuestions(modId){
  const mod=MODS[modId]; if(!mod) return [];
  const nivelId=S.m1.nivel||'n4';
  if(nivelId==='n4' && S.m1.modoExperto) return mod.questions||[];
  if(mod.questionsByLevel && mod.questionsByLevel[nivelId]) return mod.questionsByLevel[nivelId];
  return mod.questions||[];
}

// ============================================================
// RENDER PREGUNTAS
// ============================================================
function renderMod(modId){
  const mod=MODS[modId]; if(!mod) return;
  const cont=document.getElementById('q-'+modId); if(!cont) return;
  const qs=getQuestions(modId);

  if(mod.bancoEnConstruccion || !qs.length){
    cont.innerHTML=`<div class="modbank-empty">
      <i class="ti ti-tools"></i>
      <div class="mbe-t">Banco de preguntas en construcción</div>
      <div class="mbe-d">Este módulo aplica al nivel de su empresa según la matriz BSR, pero las preguntas específicas aún están siendo redactadas por el comité técnico. Quedará disponible en una próxima actualización.</div>
      ${mod.objetivo?`<div style="margin-top:14px;text-align:left;background:#fff;border:1px solid var(--g3);border-radius:8px;padding:12px 14px">
        <div style="font-size:11px;font-weight:700;color:var(--blue-m);text-transform:uppercase;letter-spacing:.04em;margin-bottom:4px">Objetivo del módulo</div>
        <div style="font-size:12px;color:var(--text-s);line-height:1.6;margin-bottom:8px">${mod.objetivo}</div>
        <div style="font-size:11px;font-weight:700;color:var(--blue-m);text-transform:uppercase;letter-spacing:.04em;margin-bottom:4px">Evidencia requerida</div>
        <div style="font-size:12px;color:var(--text-s);line-height:1.6">${mod.evidenciaRequerida||'Por definir'}</div>
      </div>`:''}
    </div>`;
    updateModCount(modId);
    return;
  }

  const noSind=(S.m1.sindicato==='no');
  cont.innerHTML='';
  let idx=0;
  qs.forEach(q=>{
    idx++;
    const blocked=q.sindical && noSind;
    const sel=S.answers[q.id]!==undefined?S.answers[q.id]:-1;
    const rc=q.risk==='a'?'tag-a':q.risk==='m'?'tag-m':'tag-b';
    const rl=q.risk==='a'?'Riesgo alto':q.risk==='m'?'Riesgo medio':'Riesgo bajo';
    let optsHtml=q.opts.map((o,oi)=>{
      const isSel=sel===oi;
      return `<div class="qopt ${isSel?'sel':''}" onclick="selOpt('${q.id}',${oi},this)">
        <input type="radio" name="${q.id}" value="${oi}" ${isSel?'checked':''}>
        <label><span class="ol">${o.l})</span> ${o.t}</label>
      </div>`;
    }).join('');
    cont.innerHTML+=`<div class="qcard ${blocked?'blocked':''}" id="qc-${q.id}">
      <div class="qhd">
        <span class="qnum">${modId.replace('mod','M')}P${idx}</span>
        <span class="qtag ${rc}">${rl}</span>
        <div><div class="qtxt">${q.text}${blocked?' <em style="color:var(--g4);font-size:11px">(No aplica — sin sindicato)</em>':''}</div>
        <div class="qnorm"><i class="ti ti-book" style="font-size:11px"></i> ${q.norm}</div></div>
      </div>
      <div class="qopts">${blocked?'<div style="font-size:12px;color:var(--g4);padding:8px">Esta pregunta no aplica porque la empresa no tiene sindicato. Se excluye del cálculo.</div>':optsHtml}</div>
      ${!blocked?`<div class="qcons"><i class="ti ti-alert-circle"></i><span><strong>Consecuencia:</strong> ${q.cons}</span></div>`:''}
    </div>`;
    if(blocked && S.answers[q.id]===undefined){ S.answers[q.id]='NA'; }
  });
  updateModCount(modId);
}

// Badge "X / Y" en el header de cada módulo: cuenta SOLO las preguntas
// activas (excluye las bloqueadas por sindicato) y cuántas de ellas
// ya están respondidas. Se actualiza al entrar al módulo y cada vez
// que se responde una pregunta.
function updateModCount(modId){
  const badge=document.getElementById('modcount-'+modId);
  if(!badge) return;
  const mod=MODS[modId];
  if(!mod || mod.bancoEnConstruccion){
    badge.innerHTML='<span class="mc-dot"></span>Sin preguntas aún';
    badge.className='modcount';
    return;
  }
  const qs=getQuestions(modId);
  const noSind=(S.m1.sindicato==='no');
  const activas=qs.filter(q=>!(q.sindical && noSind));
  const respondidas=activas.filter(q=>S.answers[q.id]!==undefined && S.answers[q.id]!=='NA').length;
  const total=activas.length;
  badge.innerHTML=`<span class="mc-dot"></span>${respondidas} / ${total} preguntas`;
  badge.className='modcount'+(total>0&&respondidas===total?' complete':respondidas>0?' partial':'');
}

function selOpt(qId,idx,el){
  const card=el.closest('.qcard');
  card.querySelectorAll('.qopt').forEach(o=>o.classList.remove('sel'));
  el.classList.add('sel');
  el.querySelector('input').checked=true;
  S.answers[qId]=idx;
  const modId=findMod(qId);
  calcModScore(modId);
  updateModCount(modId);
  updateProg();
  // Auto-save con debounce de 1.5s para no escribir en cada tecla
  clearTimeout(window._autoSaveTimer);
  window._autoSaveTimer=setTimeout(autoSave, 1500);
}

function findMod(qId){
  for(const modId of Object.keys(MODS)) if(getQuestions(modId).find(q=>q.id===qId)) return modId;
  return null;
}

function calcModScore(modId){
  if(!modId) return;
  const qs=getQuestions(modId);
  let sum=0,maxPts=0;
  qs.forEach(q=>{
    if(S.answers[q.id]==='NA') return; // sindicato bloqueado
    const m=Math.max(...q.opts.map(o=>o.p));
    maxPts+=m;
    if(S.answers[q.id]!==undefined && S.answers[q.id]!=='NA') sum+=q.opts[S.answers[q.id]].p;
  });
  S.scores[modId]=maxPts>0?Math.round((sum/maxPts)*100):0;
  const sl=document.getElementById('sl-'+modId);
  if(sl){
    const lv=getLv(S.scores[modId]);
    sl.innerHTML=`<span style="color:${lv.col}">Cumplimiento módulo: ${S.scores[modId]}%</span>`;
  }
}

function updateProg(){
  const activos=modulosActivos().filter(m=>MODS[m] && !MODS[m].bancoEnConstruccion && getQuestions(m).length);
  const total=activos.reduce((s,id)=>{
    const qs=getQuestions(id);
    return s+qs.filter(q=>!q.sindical||S.m1.sindicato!=='no').length;
  },0);
  const done=Object.keys(S.answers).filter(k=>S.answers[k]!=='NA').length;
  const pct=total>0?Math.round((done/total)*100):0;
  document.getElementById('progBar').style.width=pct+'%';
  document.getElementById('progLabel').textContent=`${done} / ${total} preguntas`;
}

// ============================================================
// SIDEBAR DINÁMICO SEGÚN NIVEL
// ============================================================
const MOD_NAV_META={
  mod2:{icon:'ti-file-text',label:'Contratos y doc. laboral'},
  mod3:{icon:'ti-cash',label:'Remuneraciones'},
  mod4:{icon:'ti-clock-hour-4',label:'Jornada y asistencia'},
  mod5:{icon:'ti-shield-check',label:'Ley Karin + Datos personales'},
  mod6:{icon:'ti-users-group',label:'Relaciones laborales'},
  mod7:{icon:'ti-gavel',label:'Fiscalizaciones'},
  mod8:{icon:'ti-building-bank',label:'Gobierno corporativo'},
  mod9:{icon:'ti-checklist',label:'Compliance avanzado'},
  mod10:{icon:'ti-leaf',label:'ESG laboral'},
  mod11:{icon:'ti-activity',label:'Continuidad operacional'}
};

function rebuildSidebar(){
  const nav=document.getElementById('sidebar');
  const activos=modulosActivos();
  // Limpiar nav-it de módulos previamente inyectados (mod2+)
  nav.querySelectorAll('.nav-it[data-mod]').forEach(el=>el.remove());
  const insertBeforeEl=nav.querySelector('.nav-sec.admin-only');
  let n=2;
  activos.forEach(modId=>{
    const meta=MOD_NAV_META[modId]; if(!meta) return;
    const div=document.createElement('div');
    div.className='nav-it';
    div.dataset.p=modId;
    div.dataset.mod='1';
    div.id='nv-'+modId;
    div.setAttribute('onclick',`goPanel('${modId}')`);
    div.innerHTML=`<span class="nn">${n}</span><span>${meta.label}</span>`;
    if(insertBeforeEl) nav.insertBefore(div, insertBeforeEl);
    else nav.appendChild(div);
    n++;
  });
  // Reconstruir cadena de navegación (anterior/siguiente) en los abar de cada módulo
  const chain=['mod1',...activos];
  chain.forEach((id,i)=>{
    const panel=document.getElementById('panel-'+id);
    if(!panel) return;
    const prevBtn=panel.querySelector('.abar .btn-o');
    const nextBtn=panel.querySelector('.abar .btn-p, .abar .btn-s');
    const prev=chain[i-1];
    const next=chain[i+1];
    if(prevBtn && prev) prevBtn.setAttribute('onclick',`goPanel('${prev}')`);
    if(nextBtn && next && id!=='mod1'){
      nextBtn.setAttribute('onclick',`nextMod('${id}','${next}')`);
    } else if(nextBtn && !next && id!=='mod1'){
      nextBtn.setAttribute('onclick','finalizeAndShow()');
      nextBtn.innerHTML='<i class="ti ti-chart-bar"></i> Generar diagnóstico completo';
      nextBtn.className='btn btn-s';
    }
  });
}

// ============================================================
// NAVEGACIÓN
// ============================================================
function goPanel(id){
  document.querySelectorAll('.panel').forEach(p=>p.classList.remove('active'));
  document.querySelectorAll('.nav-it').forEach(n=>n.classList.remove('active'));
  document.getElementById('panel-'+id).classList.add('active');
  const nv=document.querySelector(`[data-p="${id}"]`);
  if(nv) nv.classList.add('active');
  if(MODS[id]) renderMod(id);
  if(id==='calculadora') renderCalc();
  if(id==='multas') renderMultas();
  if(id==='directorio' && S.ready) genDirectorio();
  if(id==='config'){
    const utm=getUTMGuardada();
    document.getElementById('utmAdminDisplay').textContent='$'+utm.toLocaleString('es-CL');
    document.getElementById('adminUTMVal').value='';
    cargarConfigEJSEnPanel();
  }
  window.scrollTo(0,0);
  document.getElementById('mainContent').scrollTop=0;
}

function saveM1(){
  const ntrab=document.getElementById('d_ntrab').value;
  const nivelObj=getNivel(ntrab);
  if(!nivelObj){
    alert('Ingrese el número de trabajadores para clasificar la empresa.');
    return;
  }
  const modoExpertoPrevio=S.m1.modoExperto||false;
  S.m1={
    razon:document.getElementById('d_razon').value||'Empresa evaluada',
    rut:document.getElementById('d_rut').value,
    rep:document.getElementById('d_rep').value,
    cargo:document.getElementById('d_cargo').value,
    email:document.getElementById('d_email').value,
    tel:document.getElementById('d_tel').value,
    region:document.getElementById('d_region').value,
    ntrab:ntrab,
    nivel:nivelObj.id,
    nivelObj:nivelObj,
    act:document.getElementById('d_act').value,
    suc:document.getElementById('d_suc').value,
    rrhh:document.getElementById('d_rrhh').value,
    prev:document.getElementById('d_prev').value,
    sub:document.getElementById('d_sub').value,
    sindicato:document.getElementById('d_sind').value||'no',
    nsind:document.getElementById('d_nsind').value,
    esg:document.getElementById('d_esg').value,
    modoExperto:nivelObj.id==='n4'?modoExpertoPrevio:false
  };
  rebuildSidebar();
  const activos=modulosActivos();
  autoSave(); // guardar datos de empresa inmediatamente
  goPanel(activos[0]||'mod2');
}

function nextMod(cur,nxt){
  calcModScore(cur);
  const nv=document.getElementById('nv-'+cur);
  if(nv){ nv.classList.add('done'); nv.querySelector('.nn').innerHTML='<i class="ti ti-check" style="font-size:11px"></i>'; }
  autoSave(); // guardar progreso al cambiar de módulo
  goPanel(nxt);
}

// ============================================================
// SCORING ENGINE
// ============================================================
function getLv(pct){
  if(pct>=90) return{level:'Excelente',cls:'b',col:'var(--green)'};
  if(pct>=75) return{level:'Riesgo Bajo',cls:'m',col:'var(--teal)'};
  if(pct>=60) return{level:'Riesgo Medio',cls:'a',col:'var(--amber)'};
  if(pct>=40) return{level:'Riesgo Alto',cls:'a2',col:'#c2410c'};
  return{level:'Riesgo Crítico',cls:'c',col:'var(--red)'};
}

// El Score Global solo pondera módulos ACTIVOS para el nivel de la
// empresa y que ya tienen banco de preguntas redactado. Un módulo
// que no aplica a este nivel queda excluido del cálculo (no en 0),
// igual como ya ocurre con las preguntas sindicales bloqueadas.
function globalScore(){
  const activos=modulosActivos().filter(id=>MODS[id] && !MODS[id].bancoEnConstruccion && getQuestions(id).length);
  let tw=0,ws=0;
  activos.forEach(id=>{
    const mod=MODS[id];
    const peso=pesoModulo(id);
    const s=S.scores[id]||0;
    tw+=peso; ws+=s*peso;
  });
  return tw>0?Math.round(ws/tw):0;
}

// ============================================================
// FINALIZAR → mostrar pantalla cliente + generar resultados admin
// ============================================================
function finalizeAndShow(){
  // calcular solo módulos activos para este nivel
  const activos=modulosActivos();
  for(const id of activos) calcModScore(id);
  const gs=globalScore();
  const lv=getLv(gs);
  S.ready=true;
  autoSave(); // guardar estado final
  borrarBorrador(); // borrador ya no es necesario, el diagnóstico está completo

  // Pantalla cliente
  const colMap={b:'var(--green)',m:'var(--teal)',a:'var(--amber)',a2:'#c2410c',c:'var(--red)'};
  const col=colMap[lv.cls];
  document.getElementById('rc-score-val').textContent=gs;
  document.getElementById('rc-score-val').style.color=col;
  document.getElementById('rc-level-val').textContent=lv.level;
  document.getElementById('rc-level-val').style.color=col;
  document.getElementById('rc-bar').style.width=gs+'%';
  document.getElementById('rc-bar').style.background=col;
  document.getElementById('rc-msg').textContent=descScore(gs);

  // Mini módulos en pantalla cliente (solo los activos con banco de preguntas)
  let modsHtml='';
  activos.filter(id=>MODS[id] && !MODS[id].bancoEnConstruccion && getQuestions(id).length).forEach(id=>{
    const sc=S.scores[id]||0;
    const lvm=getLv(sc);
    const label=(MOD_NAV_META[id]&&MOD_NAV_META[id].label)||MODS[id].name;
    modsHtml+=`<div class="rc-mod-card"><div class="rmc-val" style="color:${colMap[lvm.cls]}">${sc}</div><div class="rmc-lbl">${label}</div></div>`;
  });
  document.getElementById('rc-mods').innerHTML=modsHtml;
  document.getElementById('resultScreen').classList.add('visible');

  // Generar resultados admin en background
  genDashboard(gs,lv);
  genInforme(gs,lv);
  genServicios(gs,lv);
  renderCalc();
  renderMultas();
  // Notificación EmailJS (async, no bloquea el flujo)
  const hall=getHallazgos();
  enviarNotificacionBSR(gs, lv, hall);
}

// ============================================================
// PANEL DE DIRECTORIO — renderizado integrado
// Se llama desde goPanel('directorio') al igual que genDashboard
// ============================================================
function dirScroll(id){
  const el=document.getElementById(id);
  if(el) el.scrollIntoView({behavior:'smooth',block:'start'});
}

function dScoreClass(v){if(v>=90)return'e';if(v>=75)return'b';if(v>=60)return'm';if(v>=40)return'a';return'c';}
function dScoreColor(v){if(v>=90)return'#1A7A4A';if(v>=75)return'#0A6E62';if(v>=60)return'#8A5A00';if(v>=40)return'#B84800';return'#A01010';}
function dScoreBg(v){if(v>=90)return'#D4F0E4';if(v>=75)return'#CCF0EA';if(v>=60)return'#FFF0CC';if(v>=40)return'#FFE0CC';return'#F8DDDD';}
function dScoreLabel(v){if(v>=90)return'Excelente';if(v>=75)return'Riesgo Bajo';if(v>=60)return'Riesgo Medio';if(v>=40)return'Riesgo Alto';return'Riesgo Crítico';}
function dDescDir(gs){
  if(gs>=90)return'La empresa alcanza un nivel de excelencia en cumplimiento laboral, con riesgo mínimo de sanciones o contingencias. Se recomienda mantener los controles actuales y establecer un programa de auditoría periódica preventiva.';
  if(gs>=75)return'La empresa presenta un nivel de cumplimiento satisfactorio con brechas menores identificadas. Las acciones correctivas son focalizadas y de bajo costo relativo. El riesgo está bajo control con intervención específica.';
  if(gs>=60)return'La empresa presenta brechas de cumplimiento que, si no se corrigen en el corto plazo, pueden escalar a contingencias económicas materiales. Se recomienda iniciar las acciones correctivas antes de la próxima fiscalización.';
  if(gs>=40)return'La empresa enfrenta un riesgo laboral alto con múltiples incumplimientos que generan exposición económica significativa. El Directorio debe priorizar la mitigación inmediata para evitar demandas, multas y daño reputacional.';
  return'La empresa se encuentra en estado crítico de cumplimiento laboral. La exposición económica acumulada puede comprometer la continuidad operacional. Se requiere intervención urgente e inmediata con asesoría especializada.';
}

function genDirectorio(){
  const gs = globalScore();
  const col = dScoreColor(gs);
  const lvl = dScoreLabel(gs);
  const hoy = new Date().toLocaleDateString('es-CL',{year:'numeric',month:'long',day:'numeric'});
  const utm = getUTMGuardada();
  const sc2=S.scores.mod2||0, sc3=S.scores.mod3||0, sc4=S.scores.mod4||0;
  const sc5=S.scores.mod5||0, sc6=S.scores.mod6||0, sc7=S.scores.mod7||0;
  const trab = parseInt(S.m1.ntrab||'50',10);
  const hallazgos = getHallazgos();
  const plan = getPlan(hallazgos);
  const rMulta = Math.max(0,Math.round(100-(sc7*0.4+sc3*0.35+sc2*0.25)));
  const rDemanda = Math.max(0,Math.round(100-(sc2*0.3+sc3*0.45+sc7*0.25)));
  const madurez = S.scores.mod6!==undefined ? Math.round(sc6*0.35+sc2*0.25+sc4*0.2+sc5*0.2) : Math.round(sc2*0.35+sc4*0.3+sc5*0.35);

  // ── PORTADA ──────────────────────────────────────────────
  const el = (id)=>document.getElementById(id);
  el('d-portada-empresa').textContent = S.m1.razon||'Empresa Evaluada';
  el('d-score-num').textContent = gs; el('d-score-num').style.color = col;
  el('d-score-level').textContent = lvl; el('d-score-level').style.color = col;
  el('d-score-desc').textContent = dDescDir(gs);
  el('d-meta-razon').textContent = S.m1.razon||'—';
  el('d-meta-nivel').textContent = S.m1.nivelObj?`Nivel ${S.m1.nivelObj.orden} · ${S.m1.nivelObj.nombre}`:'—';
  el('d-meta-trab').textContent = S.m1.ntrab ? S.m1.ntrab+' trabajadores' : '—';
  el('d-meta-region').textContent = S.m1.region||'—';
  el('d-meta-fecha').textContent = hoy;
  setTimeout(()=>{ const n=el('d-needle'); if(n) n.style.left=gs+'%'; },500);

  // ── SLIDE 1 KPIs ─────────────────────────────────────────
  const kpis=[
    {eye:'Score Global',val:gs,unit:'/100',label:lvl,sub:(S.m1.ntrab||'—')+' trabajadores · '+(S.m1.nivelObj?S.m1.nivelObj.nombre:'—'),cls:dScoreClass(gs)},
    {eye:'Riesgo de multas DT',val:rMulta,unit:'%',label:rMulta>=60?'Elevado':'Controlado',sub:'Historial fiscal + cumplimiento documental',cls:dScoreClass(100-rMulta)},
    {eye:'Riesgo de demandas',val:rDemanda,unit:'%',label:rDemanda>=60?'Elevado':'Moderado',sub:'Contratos + remuneraciones + historial litigioso',cls:dScoreClass(100-rDemanda)},
    {eye:'Madurez RRHH',val:madurez,unit:'%',label:dScoreLabel(madurez),sub:'Índice compuesto de gestión de personas',cls:dScoreClass(madurez)},
  ];
  el('d-kpi-row').innerHTML = kpis.map(k=>`
    <div class="d-kpi d-kpi-${k.cls}">
      <div class="d-kpi-eye">${k.eye}</div>
      <div class="d-kpi-val" style="color:${dScoreColor(k.val)}">${k.val}<span class="d-kpi-unit">${k.unit}</span></div>
      <div class="d-kpi-label">${k.label}</div>
      <div class="d-kpi-sub">${k.sub}</div>
    </div>`).join('');
  el('d-exec-reading').textContent = dDescDir(gs);

  // ── CHARTS SLIDE 1 ───────────────────────────────────────
  const actMods = modulosActivos().filter(id=>MODS[id]&&!MODS[id].bancoEnConstruccion&&getQuestions(id).length);
  const dModNombres={mod2:'Contratos',mod3:'Remuneraciones',mod4:'Jornada',mod5:'Ley Karin',mod6:'Rel. Laborales',mod7:'Fiscalizaciones',mod8:'Gov. Corp.',mod9:'Compliance',mod10:'ESG',mod11:'Continuidad'};
  const radarLabels=actMods.map(id=>dModNombres[id]||id);
  const radarVals=actMods.map(id=>S.scores[id]||0);

  // destruir charts previos si existen
  if(window._dChartC){ try{window._dChartC.destroy();}catch(e){} }
  if(window._dChartR){ try{window._dChartR.destroy();}catch(e){} }
  if(window._dChartB){ try{window._dChartB.destroy();}catch(e){} }

  if(typeof Chart !== 'undefined'){
    const cumplLabels=['Score Global','Contratos','Remuneraciones','Jornada','Ley Karin','Madurez RRHH'];
    const cumplVals=[gs,sc2,sc3,sc4,sc5,madurez];
    window._dChartC = new Chart(el('d-chartCumplimiento'),{
      type:'bar',
      data:{labels:cumplLabels,datasets:[{data:cumplVals,backgroundColor:cumplVals.map(dScoreBg),borderColor:cumplVals.map(dScoreColor),borderWidth:2,borderRadius:4}]},
      options:{indexAxis:'y',responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false},tooltip:{callbacks:{label:c=>c.raw+'%'}}},scales:{x:{min:0,max:100,ticks:{callback:v=>v+'%',font:{size:10}},grid:{color:'#ECEAE4'}},y:{ticks:{font:{size:10},color:'#4A4A6A'},grid:{display:false}}}}
    });
    window._dChartR = new Chart(el('d-chartRadar'),{
      type:'radar',
      data:{labels:radarLabels,datasets:[{data:radarVals,backgroundColor:'rgba(201,168,76,.12)',borderColor:col,borderWidth:2,pointBackgroundColor:col,pointRadius:4}]},
      options:{responsive:true,maintainAspectRatio:false,scales:{r:{min:0,max:100,ticks:{stepSize:25,callback:v=>v+'%',font:{size:9},color:'#8888A0'},grid:{color:'#ECEAE4'},pointLabels:{font:{size:10},color:'#4A4A6A'}}},plugins:{legend:{display:false}}}
    });
  }

  // ── SLIDE 2: MÓDULOS ─────────────────────────────────────
  const dModMeta={mod2:{n:'Contratos, Documentación y RIOHS',norm:'Arts. 9-11, 153-157 CT; Ley 21.643'},mod3:{n:'Remuneraciones y Cumplimiento Previsional',norm:'Arts. 41-62 CT; DL 3500; Ley 17.322'},mod4:{n:'Jornada de Trabajo y Asistencia',norm:'Arts. 22-40 CT; Ley 21.561 (42h)'},mod5:{n:'Ley Karin y Protección de Datos',norm:'Ley 21.643; Ley 21.719 (1-dic-2026)'},mod6:{n:'Relaciones Laborales y Gestión Sindical',norm:'Arts. 212-255, 289-294 CT'},mod7:{n:'Fiscalizaciones e Historial Laboral',norm:'Arts. 474, 505-511 CT'},mod8:{n:'Gobierno Corporativo Laboral',norm:'Normas OCDE; buenas prácticas'},mod9:{n:'Compliance Laboral Avanzado',norm:'Matrices de riesgo; normativa laboral'},mod10:{n:'ESG Laboral y Diversidad',norm:'Ley 21.015; estándares ESG'},mod11:{n:'Continuidad Operacional',norm:'Arts. 303-350 CT'}};
  el('d-mods-rows').innerHTML = actMods.map(id=>{
    const sc=S.scores[id]||0;
    const c=dScoreColor(sc);
    const m=dModMeta[id]||{n:id,norm:''};
    return `<div class="d-mod-row"><div><div class="d-mod-name">${m.n}</div><div class="d-mod-norm">${m.norm}</div></div><div><div class="d-mod-bar-wrap"><div class="d-mod-bar-fill" style="width:${sc}%;background:${c}"></div></div><div style="font-size:10px;color:${c};margin-top:2px;font-weight:600">${dScoreLabel(sc)}</div></div><div><div class="d-mod-score" style="color:${c}">${sc}</div><div class="d-mod-pct">/100</div></div></div>`;
  }).join('');

  if(typeof Chart !== 'undefined'){
    window._dChartB = new Chart(el('d-chartBarras'),{
      type:'bar',
      data:{labels:actMods.map(id=>dModMeta[id]?dModMeta[id].n.split(' ').slice(0,2).join(' '):id),datasets:[{data:radarVals,backgroundColor:radarVals.map(dScoreBg),borderColor:radarVals.map(dScoreColor),borderWidth:2,borderRadius:4}]},
      options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{y:{min:0,max:100,ticks:{callback:v=>v+'%',font:{size:10}},grid:{color:'#ECEAE4'}},x:{ticks:{font:{size:10}},grid:{display:false}}}}
    });
  }

  // ── SLIDE 3: HALLAZGOS ───────────────────────────────────
  el('d-hallazgos-list').innerHTML = hallazgos.slice(0,8).map(h=>`
    <div class="d-hallazgo d-h-${h.nivel==='alto'?'alto':'medio'}">
      <div class="d-h-ico d-h-${h.nivel==='alto'?'alto':'medio'}"><i class="ti ti-${h.nivel==='alto'?'alert-circle':'exclamation-mark'}"></i></div>
      <div><div class="d-h-title">${h.titulo}</div><div class="d-h-desc">${h.desc}</div><div class="d-h-mod">${h.mod}</div></div>
    </div>`).join('');
  const nalto=hallazgos.filter(h=>h.nivel==='alto').length;
  el('d-hallazgos-nota').textContent=`Se identificaron ${hallazgos.length} brechas: ${nalto} de riesgo alto y ${hallazgos.length-nalto} de riesgo medio. Los hallazgos de riesgo alto requieren atención en los próximos 30 días.`;

  // ── SLIDE 4: EXPOSICIÓN ECONÓMICA ────────────────────────
  const factorTrab = Math.min(4,Math.max(1,trab/50));
  const expoBase={multas:Math.max(0,Math.round((100-(sc7*0.4+sc3*0.35+sc2*0.25))/100*45*utm)),demandas:Math.max(0,Math.round((100-(sc2*0.3+sc3*0.45+sc7*0.25))/100*120*utm)),previsional:Math.max(0,Math.round((100-sc3)/100*80*utm)),karin:Math.max(0,Math.round((100-sc5)/100*60*utm))};
  const totalExpo = Math.round(Object.values(expoBase).reduce((a,b)=>a+b,0)*factorTrab);
  const fmt=n=>n.toLocaleString('es-CL');
  el('d-expo-total').textContent='$'+fmt(Math.round(totalExpo/1000))+'K';
  el('d-expo-range').textContent=`Rango estimado: $${fmt(Math.round(totalExpo*0.7/1000))}K – $${fmt(Math.round(totalExpo*1.5/1000))}K · ${trab} trabajadores · UTM ${fmt(utm)}`;
  el('d-expo-items').innerHTML=[
    {l:'Multas DT',v:expoBase.multas},{l:'Demandas laborales',v:expoBase.demandas},{l:'Deuda previsional',v:expoBase.previsional},{l:'Contingencias Ley Karin',v:expoBase.karin}
  ].map(i=>`<div class="d-expo-item"><span class="d-expo-item-name">${i.l}</span><span class="d-expo-item-val">$${fmt(Math.round(i.v/1000))}K</span></div>`).join('');
  el('d-expo-ctx-items').innerHTML=['Multas DT por incumplimientos (1-60 UTM, triplicables por reincidencia)','Demandas por despidos injustificados, diferencias de haberes y tutela','Deuda previsional con reajuste, intereses y multas','Contingencias Ley Karin: multas, indemnizaciones y daño moral']
    .map(t=>`<div class="d-expo-ctx-item"><div class="d-expo-ctx-dot"></div><div>${t}</div></div>`).join('');
  el('d-expo-norma').innerHTML='Reincidencia dentro de 2 años <strong>triplica la multa</strong> (Art. 477 CT). Vulneración de derechos fundamentales incluye recargo de <strong>30% a 100%</strong> (Art. 168 CT). No pago de cotizaciones configura <strong>responsabilidad penal</strong> del representante legal (Art. 13 Ley 17.322).';

  // ── SLIDE 5: PLAN DE ACCIÓN ──────────────────────────────
  const planFmt=(p,cls)=>`<div class="d-plan-item ${cls}">${p.acc}<div class="d-plan-norm">${p.norm}</div></div>`;
  el('d-plan-30').innerHTML=plan.filter(p=>p.plazo==='0-30 días').map(p=>planFmt(p,'d-plan-item-u')).join('');
  el('d-plan-90').innerHTML=plan.filter(p=>p.plazo==='31-90 días').map(p=>planFmt(p,'d-plan-item-i')).join('');
  el('d-plan-180').innerHTML=plan.filter(p=>p.plazo==='91-180 días').map(p=>planFmt(p,'d-plan-item-e')).join('');

  // ── SLIDE 6: PROPUESTA ───────────────────────────────────
  const services=[
    {icon:'ti-search',name:'Auditoría Laboral Integral',pain:'Sus incumplimientos no detectados hoy se convierten en multas mañana.',desc:'Revisamos contrato por contrato antes de que lo haga la DT. Informe ejecutivo con brechas y plan de cierre.',top:gs<75},
    {icon:'ti-coin',name:'Outsourcing de Remuneraciones',pain:'Cada error en una liquidación acumula deuda que cobra el trabajador al irse.',desc:'Liquidaciones, cotizaciones y gratificaciones procesadas por especialistas. Cero errores garantizados.',top:sc3<70},
    {icon:'ti-users',name:'Outsourcing de Gestión de Personal',pain:'Sin RRHH estructurado, cada desvinculación es un riesgo legal no controlado.',desc:'Contratos, finiquitos y relaciones con la DT. Usted se enfoca en su negocio.',top:gs<65||S.m1.rrhh==='no'},
    {icon:'ti-shield-check',name:'Implementación Ley Karin',pain:'Sin protocolo Karin, la primera denuncia llega directo a los tribunales.',desc:'Canal, protocolo, capacitación y seguimiento. Cumplimiento garantizado en 30 días.',top:sc5<70},
  ];
  el('d-prop-cards').innerHTML=services.map(s=>`
    <div class="d-prop-card ${s.top?'d-top':''}">
      ${s.top?'<div class="d-prop-tag">Recomendado</div>':''}
      <div class="d-prop-icon"><i class="ti ${s.icon}"></i></div>
      <div class="d-prop-name">${s.name}</div>
      <div class="d-prop-pain">"${s.pain}"</div>
      <div class="d-prop-desc">${s.desc}</div>
    </div>`).join('');
  el('d-prop-commitment').textContent=`Honorarios fijos por entregable. El costo de implementación de este plan es significativamente menor a la exposición estimada de $${fmt(Math.round(totalExpo/1000))}K. Comenzamos en 72 horas.`;

  // Slide 7: Comparativo histórico (solo si hay snapshots)
  const rut=(S.m1?.rut||'').replace(/[^0-9kK]/g,'');
  const snaps=listarSnapshots(rut);
  const linkComp=document.getElementById('dir-link-comp');
  if(snaps.length>0){
    if(linkComp) linkComp.style.display='inline-block';
    renderComparativo();
  } else {
    if(linkComp) linkComp.style.display='none';
    const s7=document.getElementById('dir-s7');
    if(s7) s7.style.display='none';
  }
}

function descScore(s){
  if(s>=90) return 'Su empresa presenta una gestión laboral excelente, sólida y organizada, con riesgo mínimo de sanciones. Mantenga los controles y actualice periódicamente.';
  if(s>=75) return 'Su empresa presenta un riesgo bajo, con oportunidades de mejora identificadas. El riesgo es manejable con acciones correctivas focalizadas en el corto plazo.';
  if(s>=60) return 'Su empresa presenta un riesgo medio. Se detectan incumplimientos que requieren atención en el corto plazo para evitar que escalen.';
  if(s>=40) return 'Su empresa presenta un riesgo alto. Existen incumplimientos relevantes que requieren atención inmediata para reducir la exposición a multas, demandas y contingencias económicas.';
  return 'Su empresa presenta riesgos laborales críticos que requieren intervención urgente. Un consultor BSR se pondrá en contacto con usted a la brevedad.';
}

// (acceso admin gestionado por openAdminLogin() desde botón en pantalla cliente)

// ============================================================
// DASHBOARD EJECUTIVO
// ============================================================
function genDashboard(gs,lv){
  const razon=S.m1.razon||'Empresa evaluada';
  const lvObj=S.m1.nivelObj;
  const nivelBadge=lvObj?` · <span class="lvl-pill ${lvObj.cls}" style="margin-left:4px">Nivel ${lvObj.orden} · ${lvObj.nombre}</span>`:'';
  document.getElementById('dash-sub').innerHTML=razon+' · '+new Date().toLocaleDateString('es-CL')+nivelBadge;

  const sc2=S.scores.mod2||0,sc3=S.scores.mod3||0,sc4=S.scores.mod4||0;
  const sc5=S.scores.mod5||0,sc6=S.scores.mod6,sc7=S.scores.mod7||0;
  const tieneMod6=(sc6!==undefined);
  const sc6v=tieneMod6?sc6:0;

  const rMulta=Math.max(0,Math.round(100-(sc7*0.4+sc3*0.35+sc2*0.25)));
  const rDemanda=Math.max(0,Math.round(100-(sc2*0.3+sc3*0.45+sc7*0.25)));
  const rPrev=Math.max(0,Math.round(100-sc3));
  const rKarin=Math.max(0,Math.round(100-sc5));
  const rDoc=Math.max(0,Math.round(100-(sc2*0.6+sc7*0.4)));
  const rRem=Math.max(0,Math.round(100-sc3));
  const madurez=tieneMod6?Math.round(sc6v*0.35+sc2*0.25+sc4*0.2+sc5*0.2):Math.round(sc2*0.35+sc4*0.3+sc5*0.35);

  function mc(label,val,isRisk=false){
    const pct=isRisk?Math.max(0,100-val):val;
    const lvm=getLv(pct);
    const cols={b:'var(--green)',m:'var(--teal)',a:'var(--amber)',a2:'#c2410c',c:'var(--red)'};
    const col=cols[lvm.cls];
    return `<div class="mc mc-${lvm.cls}">
      <div class="ml">${label}</div>
      <div class="mv">${val}%</div>
      <div class="mb"><div class="mbf" style="width:${val}%;background:${col}"></div></div>
      <div class="ms">${lvm.level}</div>
    </div>`;
  }

  const activos=modulosActivos().filter(id=>MODS[id] && !MODS[id].bancoEnConstruccion && getQuestions(id).length);
  const modLabels=activos.map(id=>(MOD_NAV_META[id]&&MOD_NAV_META[id].label)||MODS[id].name);
  const modVals=activos.map(id=>S.scores[id]||0);
  const bgC=modVals.map(v=>v>=90?'#dcfce7':v>=75?'#ccfbf1':v>=60?'#fef3c7':v>=40?'#fed7aa':'#fee2e2');
  const bdC=modVals.map(v=>v>=90?'#15803d':v>=75?'#0d7a6e':v>=60?'#b45309':v>=40?'#c2410c':'#b91c1c');

  document.getElementById('dash-content').innerHTML=`
  <div class="rb ${lv.cls}">
    <div class="rs">${gs}</div>
    <div class="ri"><div class="rl">${lv.level}</div><div class="rd">${descScore(gs)}</div></div>
    <div class="rbdg">${lv.level}</div>
  </div>
  <div class="st" style="margin-top:0"><i class="ti ti-layout-grid"></i> Índices de cumplimiento y riesgo</div>
  <div class="mgrid" style="grid-template-columns:repeat(4,1fr)">
    ${mc('Cumplimiento global',gs)}
    ${mc('Índice remuneraciones',sc3)}
    ${mc('Índice Ley Karin + Datos',sc5)}
    ${mc('Madurez RRHH',madurez)}
  </div>
  <div class="mgrid" style="grid-template-columns:repeat(4,1fr)">
    ${mc('Riesgo de multas DT',rMulta,true)}
    ${mc('Riesgo de demandas',rDemanda,true)}
    ${mc('Riesgo previsional',rPrev,true)}
    ${mc('Riesgo documental',rDoc,true)}
  </div>
  <div class="st"><i class="ti ti-chart-bar"></i> Cumplimiento por módulo</div>
  <div class="cc"><div style="position:relative;height:260px"><canvas id="chartMods" role="img" aria-label="Cumplimiento por módulo"></canvas></div></div>
  <div class="st"><i class="ti ti-radar"></i> Perfil de riesgo</div>
  <div class="cc"><div style="max-width:380px;margin:0 auto;position:relative;height:320px"><canvas id="chartRadar" role="img" aria-label="Radar de riesgo laboral"></canvas></div></div>
  <div class="abar" style="flex-wrap:wrap;gap:8px">
    <button class="btn btn-o" onclick="window.print()"><i class="ti ti-printer"></i> Imprimir</button>
    <button class="btn btn-o" onclick="goPanel('informe')"><i class="ti ti-file-text"></i> Informe</button>
    <button class="btn btn-o" style="border-color:#C9A84C;color:#8A5A00;background:#FFF8E8" onclick="goPanel('directorio')"><i class="ti ti-presentation-analytics"></i> Panel Directorio</button>
    <button class="btn btn-p" onclick="goPanel('servicios')"><i class="ti ti-briefcase"></i> Propuesta de servicios</button>
  </div>
  <div class="disc">Dashboard generado por BSR Score de Riesgo Laboral v3.0 · Clasificación adaptativa · Acceso restringido a administradores BSR · ${new Date().toLocaleDateString('es-CL')}</div>
  `;

  setTimeout(()=>{
    new Chart(document.getElementById('chartMods'),{
      type:'bar',
      data:{labels:modLabels,datasets:[{label:'Cumplimiento (%)',data:modVals,backgroundColor:bgC,borderColor:bdC,borderWidth:2,borderRadius:6}]},
      options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{y:{min:0,max:100,ticks:{callback:v=>v+'%'},grid:{color:'#e9ecef'}},x:{ticks:{maxRotation:20,font:{size:11}},grid:{display:false}}}}
    });
    new Chart(document.getElementById('chartRadar'),{
      type:'radar',
      data:{labels:modLabels,datasets:[{label:'Cumplimiento',data:modVals,backgroundColor:'rgba(37,99,195,.1)',borderColor:'#2563c3',pointBackgroundColor:'#2563c3',pointRadius:4}]},
      options:{responsive:true,maintainAspectRatio:false,scales:{r:{min:0,max:100,ticks:{stepSize:25,callback:v=>v+'%',font:{size:10}},grid:{color:'#e9ecef'}}},plugins:{legend:{display:false}}}
    });
  },150);
}

// ============================================================
// INFORME FINAL
// ============================================================
function genInforme(gs,lv){
  const hallazgos=getHallazgos();
  const plan=getPlan(hallazgos);

  const rows30=plan.filter(p=>p.plazo==='0-30 días').map(p=>`<tr><td><strong>${p.plazo}</strong></td><td><span class="pb pb-u">Urgente</span></td><td>${p.acc}</td><td style="font-size:11px;color:var(--g5)">${p.norm}</td></tr>`).join('');
  const rows90=plan.filter(p=>p.plazo==='31-90 días').map(p=>`<tr><td><strong>${p.plazo}</strong></td><td><span class="pb pb-i">Importante</span></td><td>${p.acc}</td><td style="font-size:11px;color:var(--g5)">${p.norm}</td></tr>`).join('');
  const rows180=plan.filter(p=>p.plazo==='91-180 días').map(p=>`<tr><td><strong>${p.plazo}</strong></td><td><span class="pb pb-e">Estratégico</span></td><td>${p.acc}</td><td style="font-size:11px;color:var(--g5)">${p.norm}</td></tr>`).join('');

  document.getElementById('inf-content').innerHTML=`
  <div style="background:linear-gradient(135deg,var(--navy),var(--blue-m));border-radius:12px;padding:24px 28px;color:#fff;margin-bottom:20px">
    <div style="font-size:12px;opacity:.65;margin-bottom:3px">Informe BSR Score de Riesgo Laboral · Confidencial</div>
    <div style="font-size:20px;font-weight:700;margin-bottom:4px">${S.m1.razon||'Empresa evaluada'}</div>
    <div style="font-size:12px;opacity:.7">${new Date().toLocaleDateString('es-CL',{year:'numeric',month:'long',day:'numeric'})} · ${lv.level}${S.m1.nivelObj?` · Nivel ${S.m1.nivelObj.orden} (${S.m1.nivelObj.nombre})`:''}</div>
    <div style="display:flex;gap:20px;margin-top:14px">
      <div><div style="font-size:44px;font-weight:900;line-height:1">${gs}</div><div style="font-size:11px;opacity:.6">Score global (0-100)</div></div>
      <div style="border-left:1px solid rgba(255,255,255,.2);padding-left:20px;max-width:340px">
        <div style="font-size:14px;font-weight:600;margin-bottom:4px">${lv.level}</div>
        <div style="font-size:12px;opacity:.75;line-height:1.6">${descScore(gs)}</div>
      </div>
    </div>
  </div>

  <div class="st"><i class="ti ti-alert-triangle"></i> Top hallazgos críticos</div>
  ${hallazgos.slice(0,10).map(h=>`
  <div class="fi">
    <div class="fi-ic fi-${h.nivel==='alto'?'a':h.nivel==='medio'?'m':'b'}"><i class="ti ti-${h.nivel==='alto'?'alert-circle':h.nivel==='medio'?'exclamation-mark':'check'}"></i></div>
    <div><div class="fi-ti">${h.titulo}</div><div class="fi-de">${h.desc}</div><div class="fi-mo">${h.mod}</div></div>
  </div>`).join('')}

  <div class="st" style="margin-top:20px"><i class="ti ti-calendar"></i> Plan de acción</div>
  <table class="pt">
    <thead><tr><th>Plazo</th><th>Prioridad</th><th>Acción recomendada</th><th>Normativa</th></tr></thead>
    <tbody>${rows30}${rows90}${rows180}</tbody>
  </table>
  <div class="disc" style="margin-top:14px">Informe generado automáticamente por BSR Score de Riesgo Laboral v3.0 · Clasificación adaptativa. Requiere validación profesional antes de su implementación. Normativa vigente al momento del diagnóstico; verifique actualizaciones en dt.gob.cl y bcn.cl.</div>
  `;
}

function getHallazgos(){
  const h=[];
  const activos=modulosActivos();
  for(const modId of activos){
    const mod=MODS[modId]; if(!mod) continue;
    getQuestions(modId).forEach(q=>{
      const ans=S.answers[q.id];
      if(ans===undefined||ans==='NA') return;
      const pts=q.opts[ans].p;
      const mx=Math.max(...q.opts.map(o=>o.p));
      const pct=mx>0?(pts/mx)*100:100;
      if(pct<70){
        h.push({nivel:pct<30?'alto':pct<60?'alto':'medio',titulo:q.text.substring(0,85)+(q.text.length>85?'...':''),desc:q.cons,mod:mod.name,peso:q.peso*(1-pct/100)});
      }
    });
  }
  return h.sort((a,b)=>b.peso-a.peso);
}

function getPlan(h){
  const plan=[];
  const sc3=S.scores.mod3||0,sc2=S.scores.mod2||0,sc5=S.scores.mod5||0,sc7=S.scores.mod7||0;

  if(sc3<75) plan.push({plazo:'0-30 días',acc:'Auditar liquidaciones de los últimos 24 meses: horas extra, gratificaciones, semana corrida y cotizaciones. Regularizar diferencias y deuda previsional.',norm:'Arts. 32, 45, 47, DL 3500'});
  if(sc5<80) plan.push({plazo:'0-30 días',acc:'Implementar procedimiento Ley Karin: canal de denuncias, medidas de resguardo, responsable designado y comunicación a todos los trabajadores.',norm:'Ley 21.643; Art. 211-B CT'});
  if(sc2<75) plan.push({plazo:'0-30 días',acc:'Revisar y actualizar contratos de trabajo. Suscribir anexos pendientes. Legalizar finiquitos que no cuentan con este requisito.',norm:'Arts. 9, 11, 177 CT'});
  if(sc7<70) plan.push({plazo:'0-30 días',acc:'Contratar asesoría legal laboral para gestionar multas y demandas activas. Organizar documentación para próxima inspección.',norm:'Arts. 506-511 CT'});

  h.filter(x=>x.nivel==='alto').slice(0,4).forEach(x=>{
    plan.push({plazo:'31-90 días',acc:`Corregir: "${x.titulo.substring(0,70)}". Documentar procedimiento y asignar responsable.`,norm:'CT; normas aplicables'});
  });

  plan.push({plazo:'31-90 días',acc:'Actualizar RIOHS con Ley Karin, Ley 21.561 y normativa reciente. Enviar a DT y SEREMI Salud. Entregar a todos los trabajadores con acuse de recibo.',norm:'Arts. 153-156 CT; Ley 21.643'});
  plan.push({plazo:'91-180 días',acc:'Iniciar diagnóstico de brechas Ley 21.719 (Protección de Datos Personales). Designar responsable de privacidad. Actualizar contratos con avisos de privacidad. Vigencia: 1-dic-2026.',norm:'Ley 21.719, Arts. 14-49'});
  plan.push({plazo:'91-180 días',acc:'Implementar sistema de gestión de cumplimiento laboral con alertas automáticas de vencimientos (cotizaciones, contratos, licencias, plazos DT).',norm:'Arts. 505, 62, 9 CT'});
  plan.push({plazo:'91-180 días',acc:'Capacitar jefaturas en gestión de personas, Ley Karin, jornada de 42 horas vigente y prevención de conflictos laborales. Registrar asistencia.',norm:'Ley 21.643; Ley 21.561; Art. 184 CT'});
  plan.push({plazo:'91-180 días',acc:'Realizar auditoría laboral integral externa con emisión de informe de brechas y plan de cierre supervisado por BSR Consulting.',norm:'Arts. 505-511 CT'});

  return plan;
}

// ============================================================
// SERVICIOS BSR (énfasis en el dolor del cliente)
// ============================================================
function genServicios(gs,lv){
  const sc3=S.scores.mod3||0,sc2=S.scores.mod2||0,sc5=S.scores.mod5||0,sc7=S.scores.mod7||0,sc6=S.scores.mod6||0;
  const lvObj=S.m1.nivelObj;
  const dotLabel=lvObj?`${lvObj.nombre} · ${lvObj.min}${lvObj.max===Infinity?'+':'-'+lvObj.max} trabajadores`:'';

  const services=[
    {
      id:'auditoria',
      name:'Auditoría Laboral Integral BSR',
      icon:'ti-search',
      top: gs<75,
      rec: gs<85,
      pain:'Su empresa tiene incumplimientos laborales activos que no ve hasta que llega una multa o una demanda.',
      desc:'Revisamos contrato por contrato, liquidación por liquidación, antes de que lo haga la Dirección del Trabajo. Emitimos un informe con hallazgos priorizados, estimación de exposición económica y plan de cierre de brechas con plazos y responsables.',
      resultado:'Las empresas que auditan antes de ser fiscalizadas reducen su exposición económica en un promedio del 60-80% respecto a quienes lo hacen después de recibir una multa.',
      trigger:`Score global: ${gs}/100. ${gs<60?'Riesgo crítico: intervención urgente requerida.':gs<75?'Brechas significativas detectadas.':'Existen áreas de mejora identificadas.'}`,
      norm:'Arts. 505-511 CT'
    },
    {
      id:'outsrem',
      name:'Outsourcing de Remuneraciones BSR',
      icon:'ti-coin',
      top: sc3<70,
      rec: sc3<82,
      pain:'Cada mes que pasa con liquidaciones incorrectas o cotizaciones atrasadas, la deuda crece. Y cuando el trabajador se va, cobra todo con reajuste e interés.',
      desc:'Procesamos sus liquidaciones con profesionales especializados en legislación laboral chilena, pagamos cotizaciones en plazo via Previred, calculamos correctamente gratificaciones, semana corrida, horas extra y vacaciones. Usted descansa.',
      resultado:'Nuestros clientes eliminan el riesgo de errores en remuneraciones desde el primer mes y evitan demandas por diferencias de haberes que en promedio representan 12-36 meses de sueldo en cobros retroactivos.',
      trigger:`Módulo remuneraciones: ${sc3}/100. ${sc3<60?'Riesgo crítico detectado.':sc3<75?'Brechas relevantes en cálculo de haberes.':'Oportunidades de mejora identificadas.'}`,
      norm:'Arts. 41-62, 67-76, 97-116 CT; DL 3500'
    },
    {
      id:'outsrrhh',
      name:'Outsourcing de Gestión de Personal BSR',
      icon:'ti-users',
      top: gs<65||S.m1.rrhh==='no'||(S.m1.nivel==='n1'||S.m1.nivel==='n2'),
      rec: gs<78,
      pain:'Sin un área de RRHH estructurada, cada contratación, cada desvinculación y cada cambio normativo es un riesgo no controlado. Y las multas y demandas no avisan cuando van a llegar.',
      desc:'Administramos su área de personas de forma integral: contratos, finiquitos, manejo de ausentismo, relaciones con la DT, actualización normativa permanente y gestión documental. Usted se enfoca en su negocio.',
      resultado:'Empresas sin RRHH interno que externalizan la gestión reducen hasta un 70% las incidencias laborales en los primeros 6 meses de servicio.',
      trigger:`Tamaño empresa: ${dotLabel}. Score global: ${gs}/100. Sin estructura de RRHH identificada en el diagnóstico.`,
      norm:'Arts. 9, 62, 153, 505 CT; normativa laboral vigente'
    },
    {
      id:'karin',
      name:'Implementación Ley Karin y Clima Organizacional',
      icon:'ti-shield',
      top: sc5<70,
      rec: sc5<85,
      pain:'La Ley Karin ya está vigente desde el 01-ago-2024. Si su empresa no tiene procedimiento, canal de denuncias y trabajadores capacitados, está en infracción hoy mismo, no mañana.',
      desc:'Diseñamos e implementamos su procedimiento Karin completo: canal de denuncias con garantías, protocolo de investigación, medidas de resguardo, actualización del RIOHS, capacitación con registro de asistencia y sistema de seguimiento.',
      resultado:'Empresas sin procedimiento Karin están expuestas a multas de hasta 60 UTM por infracción y hasta 150 UTM por reincidencia, más las indemnizaciones de las demandas de tutela.',
      trigger:`Módulo Ley Karin+Datos: ${sc5}/100. ${sc5<60?'Ausencia o implementación muy incompleta detectada.':'Brechas en implementación detectadas.'}`,
      norm:'Ley 21.643 (vigente 01-ago-2024); Art. 211-B CT'
    },
    {
      id:'datos',
      name:'Adecuación Ley 21.719 — Protección de Datos',
      icon:'ti-lock',
      top: sc5<75,
      rec: sc5<88,
      pain:'El 1 de diciembre de 2026 entra en vigencia la nueva Ley de Datos Personales. Biometría, videovigilancia, nómina en la nube, datos de salud: todo necesita base legal documentada. Las multas llegan hasta 20.000 UTM.',
      desc:'Realizamos el diagnóstico de brechas, inventariamos los datos que trata su empresa, actualizamos contratos con avisos de privacidad, implementamos el procedimiento ARCO+ y el protocolo de notificación de brechas en 72 horas.',
      resultado:'Las empresas que inician la adecuación ahora tienen 18 meses para implementar los cambios de forma ordenada y sin presión. Las que lo dejan para último minuto pagan 3-5 veces más en consultoría de emergencia.',
      trigger:`Preparación Ley 21.719 (en módulo 5): ${sc5}/100. Vigencia: 1-dic-2026.`,
      norm:'Ley 21.719 (vigencia 1-dic-2026); Arts. 14-49'
    },
    {
      id:'gerpart',
      name:'Gerencia de RRHH Part-Time BSR',
      icon:'ti-briefcase',
      top: false,
      rec: gs<80&&(S.m1.nivel==='n3'||S.m1.nivel==='n4'),
      pain:'No necesita un gerente de RRHH de tiempo completo, pero sí necesita a alguien que sepa lo que hace cuando el inspector llega o cuando un trabajador demanda.',
      desc:'Un gerente o subgerente de RRHH BSR con dedicación parcial lidera su área de personas: define procesos, toma decisiones difíciles, gestiona la relación con la DT y garantiza el cumplimiento normativo sin el costo de una dotación fija.',
      resultado:'Nuestros clientes con Gerencia Part-Time reducen el tiempo de respuesta ante contingencias laborales de semanas a horas.',
      trigger:`Empresa ${dotLabel} con brechas de gestión en cumplimiento laboral.`,
      norm:'CT; normativa laboral vigente'
    }
  ];

  const priority=services.filter(s=>s.top);
  const recommended=services.filter(s=>!s.top&&s.rec);
  const others=services.filter(s=>!s.top&&!s.rec);

  function svcCard(s){
    const cls=s.top?'sc top':'sc rec';
    const bdg=s.top?'<span class="scb scb-r"><i class="ti ti-flame" style="font-size:10px"></i> URGENTE PARA SU EMPRESA</span>':'<span class="scb scb-b">Recomendado</span>';
    return `<div class="${cls}">
      ${bdg}
      <h3><i class="ti ${s.icon}" style="font-size:15px;margin-right:5px"></i>${s.name}</h3>
      <div class="pain">⚠ ${s.pain}</div>
      <p>${s.desc}</p>
      <div style="background:var(--green-lt);border-radius:6px;padding:8px 10px;margin-bottom:10px;font-size:11.5px;color:var(--green);line-height:1.5"><i class="ti ti-check" style="font-size:12px"></i> <strong>Resultado esperado:</strong> ${s.resultado}</div>
      <div class="sctr"><i class="ti ti-info-circle" style="font-size:11px"></i> Detectado: ${s.trigger}</div>
    </div>`;
  }

  let html='';

  if(priority.length>0){
    html+=`<div class="danger"><i class="ti ti-alert-circle" style="font-size:18px;flex-shrink:0"></i><div><strong>Servicios urgentes detectados:</strong> El diagnóstico identifica ${priority.length} área${priority.length>1?'s':''} con riesgo crítico que requiere${priority.length>1?'n':''} intervención inmediata antes de la próxima fiscalización o demanda laboral.</div></div>`;
    html+=`<div class="st"><i class="ti ti-flame" style="color:var(--red)"></i> Intervención urgente</div>`;
    html+=`<div class="sg">${priority.map(svcCard).join('')}</div>`;
  }

  if(recommended.length>0){
    html+=`<div class="st" style="margin-top:20px"><i class="ti ti-star" style="color:var(--amber)"></i> Recomendados para su empresa</div>`;
    html+=`<div class="sg">${recommended.map(svcCard).join('')}</div>`;
  }

  if(others.length>0){
    html+=`<div class="st" style="margin-top:20px"><i class="ti ti-building"></i> Otros servicios BSR disponibles</div>`;
    html+=`<div class="sg">${others.map(svcCard).join('')}</div>`;
  }

  html+=`<div style="margin-top:24px;background:var(--navy);border-radius:12px;padding:22px 26px;color:#fff">
    <div style="font-size:16px;font-weight:700;margin-bottom:6px">¿Cuánto le está costando cada mes no resolver esto?</div>
    <div style="font-size:13px;color:rgba(255,255,255,.75);margin-bottom:14px;line-height:1.7">Cada liquidación incorrecta, cada cotización atrasada y cada contrato mal firmado es un pasivo laboral que crece silenciosamente. Un consultor BSR analizará su diagnóstico y le presentará una propuesta sin compromiso.</div>
    <div style="display:flex;gap:10px;flex-wrap:wrap">
      <a href="mailto:contacto@bsrconsulting.cl" style="background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);color:#fff;text-decoration:none;padding:9px 16px;border-radius:8px;font-size:12.5px;display:inline-flex;align-items:center;gap:6px"><i class="ti ti-mail"></i> contacto@bsrconsulting.cl</a>
      <span style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);color:rgba(255,255,255,.7);padding:9px 16px;border-radius:8px;font-size:12.5px;display:inline-flex;align-items:center;gap:6px"><i class="ti ti-world"></i> www.bsrconsulting.cl</span>
    </div>
  </div>
  <div class="disc" style="margin-top:14px">Propuesta referencial basada en el autodiagnóstico BSR. Precios y condiciones se acuerdan según el tamaño y complejidad de cada empresa. No constituye oferta comercial vinculante.</div>`;

  document.getElementById('serv-content').innerHTML=html;
}

// ============================================================
// CALCULADORA
// ============================================================
function renderCalc(){
  const utm=getUTMGuardada();
  const dot=parseInt(S.m1.ntrab,10)||50;
  document.getElementById('calc-content').innerHTML=`
  <div class="info"><i class="ti ti-info-circle" style="font-size:16px;flex-shrink:0"></i><div>Ajuste los parámetros. Los valores son referenciales. Verifique el valor de la UTM en <strong>sii.cl</strong>.</div></div>
  <div class="cc">
    <div class="fgrid" style="margin-bottom:18px">
      <div class="fg"><label class="fl">Valor UTM vigente ($)</label><input type="number" class="qi" id="cu" value="${utm}" oninput="calcExp()"></div>
      <div class="fg"><label class="fl">N° de trabajadores</label><input type="number" class="qi" id="cd" value="${dot}" min="1" oninput="calcExp()"></div>
      <div class="fg"><label class="fl">Remuneración promedio mensual ($)</label><input type="number" class="qi" id="cr" value="800000" oninput="calcExp()"></div>
      <div class="fg"><label class="fl">Antigüedad promedio (años)</label><input type="number" class="qi" id="ca" value="3" min="1" oninput="calcExp()"></div>
    </div>
    <div id="calc-res"></div>
  </div>
  <div class="st"><i class="ti ti-math-function"></i> Fórmulas utilizadas</div>
  <table class="pt">
    <thead><tr><th>Concepto</th><th>Fórmula</th><th>Normativa</th></tr></thead>
    <tbody>
      <tr><td>Indemnización por años</td><td>Última remun. × años × N° trabajadores afectados</td><td>Art. 163 CT</td></tr>
      <tr><td>Recargo 30% (despido injustificado)</td><td>Indemnización × 30%</td><td>Art. 168 CT</td></tr>
      <tr><td>Horas extra no pagadas</td><td>(Remun./190 hrs) × 1.5 × hrs extra mes × 12 × % dotación</td><td>Art. 32 CT</td></tr>
      <tr><td>Cotizaciones no pagadas</td><td>Remun. × 17% × meses × dotación</td><td>DL 3500; Ley 18.469</td></tr>
      <tr><td>Multas DT (estándar)</td><td>UTM × UTM por infracción</td><td>Art. 506 CT</td></tr>
      <tr><td>Multa Ley Karin</td><td>UTM × 30 UTM estimadas</td><td>Ley 21.643</td></tr>
      <tr><td>Multa Ley 21.719</td><td>UTM × hasta 10.000 UTM por infracción grave</td><td>Ley 21.719 (1-dic-2026)</td></tr>
    </tbody>
  </table>`;
  calcExp();
}

function calcExp(){
  const utm=parseFloat(document.getElementById('cu').value)||getUTMGuardada();
  const dot=parseInt(document.getElementById('cd').value)||50;
  const rem=parseFloat(document.getElementById('cr').value)||800000;
  const ant=parseFloat(document.getElementById('ca').value)||3;
  const fmt=n=>'$'+Math.round(n).toLocaleString('es-CL');
  const items=[
    {n:'Indemnización por años (8% dotación despedida)',v:rem*ant*Math.max(1,Math.round(dot*0.08)),norm:'Art. 163 CT'},
    {n:'Recargo despido injustificado (30%)',v:rem*ant*Math.max(1,Math.round(dot*0.08))*0.3,norm:'Art. 168 CT'},
    {n:'Horas extra no pagadas (25% dotación, 40 hrs/mes, 12 meses)',v:(rem/190)*1.5*40*12*Math.round(dot*0.25),norm:'Art. 32 CT'},
    {n:'Cotizaciones no pagadas (6 meses, dotación completa)',v:rem*0.17*6*dot,norm:'DL 3500'},
    {n:'Gratificación no pagada (anual)',v:rem*12*dot*0.25,norm:'Arts. 47-50 CT'},
    {n:'Multas DT (3 infracciones × 20 UTM)',v:utm*20*3,norm:'Art. 506 CT'},
    {n:'Multa Ley Karin (sin procedimiento)',v:utm*30,norm:'Ley 21.643'},
  ];
  const total=items.reduce((s,i)=>s+i.v,0);
  document.getElementById('calc-res').innerHTML=`
  <table class="pt" style="margin-bottom:14px">
    <thead><tr><th>Concepto</th><th>Exposición estimada</th><th>Normativa</th></tr></thead>
    <tbody>${items.map(i=>`<tr><td>${i.n}</td><td style="font-weight:700;color:var(--red)">${fmt(i.v)}</td><td style="font-size:11px;color:var(--g5)">${i.norm}</td></tr>`).join('')}
    <tr style="background:var(--navy)"><td style="color:#fff;font-weight:700">TOTAL ESCENARIO MÁXIMO</td><td style="color:#fca5a5;font-weight:800;font-size:14px">${fmt(total)}</td><td style="color:rgba(255,255,255,.5);font-size:11px">Escenario si todas las infracciones se materializan</td></tr></tbody>
  </table>
  <div class="warn"><i class="ti ti-alert-triangle" style="font-size:15px;flex-shrink:0"></i><div>Escenario <strong>peor caso</strong>. En la práctica no todos los riesgos ocurren simultáneamente. Use esta cifra para dimensionar la inversión en cumplimiento.</div></div>`;
}

// ============================================================
// MATRIZ DE MULTAS
// ============================================================
function renderMultas(){
  const multas=[
    {inf:'Trabajador sin contrato de trabajo',norm:'Art. 9 CT',rng:'1–5 UTM',grav:'Alto',rein:'Hasta 10 UTM'},
    {inf:'Contrato firmado fuera del plazo legal',norm:'Art. 9 CT',rng:'1–5 UTM',grav:'Medio',rein:'Hasta 10 UTM'},
    {inf:'No pago o pago tardío de cotizaciones previsionales',norm:'Art. 19 DL 3500; Ley 17.322',rng:'Multa+reajuste+interés; responsabilidad penal',grav:'Crítico',rein:'Juicio ejecutivo + acción penal'},
    {inf:'No emitir liquidación de sueldo',norm:'Art. 54 CT',rng:'1–5 UTM',grav:'Medio',rein:'Hasta 10 UTM'},
    {inf:'No pagar o subpagar horas extra',norm:'Art. 32 CT',rng:'1–20 UTM',grav:'Alto',rein:'Hasta 60 UTM'},
    {inf:'No llevar Libro de Remuneraciones',norm:'Art. 62 CT',rng:'1–5 UTM',grav:'Medio',rein:'Hasta 10 UTM'},
    {inf:'No otorgar vacaciones oportunamente',norm:'Arts. 67-73 CT',rng:'1–20 UTM',grav:'Alto',rein:'Hasta 60 UTM'},
    {inf:'No respetar descanso semanal',norm:'Art. 35 CT',rng:'1–20 UTM',grav:'Alto',rein:'Hasta 60 UTM'},
    {inf:'No tener RIOHS o estar desactualizado',norm:'Art. 153 CT',rng:'1–20 UTM',grav:'Alto',rein:'Hasta 40 UTM'},
    {inf:'No registrar asistencia (control de jornada)',norm:'Art. 33 CT',rng:'1–5 UTM',grav:'Medio',rein:'Hasta 10 UTM'},
    {inf:'Ausencia de procedimiento Ley Karin (Ley 21.643)',norm:'Art. 211-B CT; Ley 21.643',rng:'Hasta 60 UTM',grav:'Crítico',rein:'Hasta 150 UTM'},
    {inf:'No capacitar en Ley Karin',norm:'Art. 211-A CT',rng:'Hasta 60 UTM',grav:'Crítico',rein:'Hasta 150 UTM'},
    {inf:'Práctica antisindical',norm:'Arts. 289-294 CT',rng:'10–150 UTM',grav:'Crítico',rein:'150 UTM + acción penal'},
    {inf:'Finiquito sin legalizar',norm:'Art. 177 CT',rng:'1–5 UTM',grav:'Medio',rein:'Hasta 10 UTM'},
    {inf:'No cumplir cuota inclusión discapacidad',norm:'Ley 21.015',rng:'25–150 UTM',grav:'Alto',rein:'150 UTM'},
    {inf:'Accidente grave/fatal sin denuncia en 24 hrs',norm:'Art. 76 Ley 16.744',rng:'Hasta 150 UTM + paralización',grav:'Crítico',rein:'Responsabilidad penal'},
    {inf:'No proporcionar EPP a trabajadores',norm:'DS 594 MINSAL',rng:'1–20 UTM',grav:'Alto',rein:'Hasta 40 UTM'},
    {inf:'Incumplimiento jornada 40 hrs (Ley 21.561)',norm:'Art. 22 CT; Ley 21.561',rng:'1–20 UTM',grav:'Alto',rein:'Hasta 40 UTM'},
    {inf:'No conceder postnatal paternal (5 días)',norm:'Art. 195 CT; Ley 20.891',rng:'14–70 UTM',grav:'Alto',rein:'Hasta 150 UTM'},
    {inf:'No otorgar sala cuna o reducción por lactancia',norm:'Art. 206 CT',rng:'14–70 UTM',grav:'Alto',rein:'Hasta 150 UTM'},
    {inf:'Despido sin carta de término formal',norm:'Art. 162 CT',rng:'1 mes de rem. sustitutiva + recargos',grav:'Alto',rein:'Recargo 30%-100% (Art. 168)'},
    {inf:'No pago de semana corrida',norm:'Art. 45 CT',rng:'1–5 UTM por trabajador',grav:'Medio',rein:'Hasta 10 UTM'},
    // Ley 21.719
    {inf:'[Ley 21.719] Tratamiento de datos sin base legal o sin informar al titular',norm:'Ley 21.719 Arts. 14-15 (vig. 1-dic-2026)',rng:'Hasta 5.000 UTM',grav:'Crítico',rein:'Hasta 20.000 UTM o 4% ingresos'},
    {inf:'[Ley 21.719] Biometría o datos sensibles sin base legal',norm:'Ley 21.719 Arts. 2, 9, 16 (vig. 1-dic-2026)',rng:'Hasta 10.000 UTM',grav:'Crítico',rein:'Hasta 20.000 UTM + suspensión'},
    {inf:'[Ley 21.719] No notificar brecha de seguridad en 72 hrs a la APDP',norm:'Ley 21.719 Arts. 45-46 (vig. 1-dic-2026)',rng:'Hasta 10.000 UTM',grav:'Crítico',rein:'Hasta 20.000 UTM + publicación'},
    {inf:'[Ley 21.719] No atender solicitud ARCO+ en 15 días hábiles',norm:'Ley 21.719 Arts. 19-29 (vig. 1-dic-2026)',rng:'Hasta 5.000 UTM',grav:'Alto',rein:'Hasta 10.000 UTM'},
    {inf:'[Ley 21.719] Infracción gravísima (datos sensibles masivos sin protección)',norm:'Ley 21.719 Art. 35 (vig. 1-dic-2026)',rng:'Hasta 20.000 UTM o 4% ingresos',grav:'Crítico',rein:'Suspensión 30 días + Diario Oficial'},
  ];
  const gmap={'Crítico':'pb-u','Alto':'pb-i','Medio':'pb-e','Bajo':'pb-e'};
  document.getElementById('multas-content').innerHTML=`
  <div class="warn"><i class="ti ti-alert-triangle" style="font-size:16px;flex-shrink:0"></i><div>Valores referenciales según CT y leyes especiales. El monto exacto lo determina el inspector o la APDP según gravedad, tamaño de empresa y reincidencia. La reincidencia dentro de 2 años puede triplicar el monto. Verifique en <strong>dt.gob.cl</strong> y <strong>bcn.cl</strong>.</div></div>
  <table class="pt">
    <thead><tr><th>Infracción</th><th>Normativa</th><th>Rango multa</th><th>Gravedad</th><th>Con reincidencia</th></tr></thead>
    <tbody>${multas.map(m=>`<tr><td style="font-weight:500;font-size:12px">${m.inf}</td><td style="font-size:10.5px;color:var(--g5)">${m.norm}</td><td style="font-size:12px;font-weight:600;white-space:nowrap">${m.rng}</td><td><span class="pb ${gmap[m.grav]||'pb-e'}">${m.grav}</span></td><td style="font-size:11px;color:var(--red)">${m.rein}</td></tr>`).join('')}</tbody>
  </table>
  <div class="disc" style="margin-top:14px">Matriz referencial BSR Score de Riesgo Laboral v3.0 · Clasificación adaptativa. No constituye listado exhaustivo. Para el universo completo consulte Art. 506 y ss. CT y leyes especiales.</div>`;
}

// ============================================================
// DESCARGA — genera copia del HTML con respuestas embebidas
// ============================================================
function descargarDiagnostico(){
  const m1Clean={...S.m1}; delete m1Clean.nivelObj; // evitar serializar Infinity
  const stateData={
    answers:S.answers, m1:m1Clean, scores:S.scores,
    ready:S.ready, timestamp:new Date().toISOString(), version:'3.0'
  };

  // Obtener HTML completo del documento
  let html='<!DOCTYPE html>\n'+document.documentElement.outerHTML;

  // Inyectar estado guardado antes del cierre de </head>
  const inject=`\n<script>window.BSR_SAVED_STATE=${JSON.stringify(stateData)};<\/script>\n`;
  html=html.replace('</head>', inject+'</head>');

  // Crear y descargar el archivo
  const blob=new Blob([html],{type:'text/html;charset=utf-8'});
  const url=URL.createObjectURL(blob);
  const a=document.createElement('a');
  a.href=url;

  const empresa=(S.m1.razon||'diagnostico')
    .replace(/[^a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s]/g,'').trim()
    .replace(/\s+/g,'_').substring(0,40);
  const fecha=new Date().toLocaleDateString('es-CL').replace(/\//g,'-');
  a.download=`BSR_Score_${empresa}_${fecha}.html`;

  document.body.appendChild(a); a.click();
  document.body.removeChild(a); URL.revokeObjectURL(url);

  // Feedback visual en el botón
  const btn=document.querySelector('[onclick="descargarDiagnostico()"]');
  if(btn){
    const orig=btn.innerHTML;
    btn.innerHTML='<i class="ti ti-circle-check" style="font-size:16px"></i> ¡Descargado! Envíelo a BSR Consulting';
    btn.style.background='var(--green)';
    setTimeout(()=>{ btn.innerHTML=orig; btn.style.background='var(--navy)'; },4000);
  }
}

// ============================================================
// RESTAURAR ESTADO — si el archivo fue descargado con respuestas
// ============================================================
function restaurarEstado(){
  if(!window.BSR_SAVED_STATE) return false;
  const saved=window.BSR_SAVED_STATE;
  S.answers=saved.answers||{};
  S.m1=saved.m1||{};
  S.scores=saved.scores||{};
  S.ready=saved.ready||false;

  // Recalcular el objeto de nivel (no se serializa completo al exportar)
  if(S.m1.ntrab && !S.m1.nivelObj) S.m1.nivelObj=getNivel(S.m1.ntrab);

  // Restaurar campos del Módulo 1
  const campos={
    d_razon:S.m1.razon, d_rut:S.m1.rut,
    d_rep:S.m1.rep, d_cargo:S.m1.cargo,
    d_email:S.m1.email, d_tel:S.m1.tel,
    d_region:S.m1.region, d_ntrab:S.m1.ntrab,
    d_act:S.m1.act, d_suc:S.m1.suc, d_rrhh:S.m1.rrhh,
    d_prev:S.m1.prev, d_esg:S.m1.esg,
    d_sub:S.m1.sub, d_sind:S.m1.sindicato, d_nsind:S.m1.nsind
  };
  for(const[id,val] of Object.entries(campos)){
    const el=document.getElementById(id);
    if(el&&val) el.value=val;
  }

  // Mostrar clasificación de nivel y campo sindicato si corresponde
  if(S.m1.ntrab) onNTrabChange();
  if(S.m1.nivelObj && S.m1.nivelObj.id==='n4'){
    setModoExperto(S.m1.modoExperto||false);
  }
  if(S.m1.sindicato==='si'){
    const fg=document.getElementById('fg_sind_det');
    if(fg) fg.style.display='block';
  }

  // Reconstruir sidebar dinámico según el nivel restaurado, ANTES de marcar módulos
  if(S.m1.nivelObj) rebuildSidebar();

  // Marcar módulos completados en sidebar
  for(const modId of Object.keys(S.scores)){
    const nv=document.getElementById('nv-'+modId);
    if(nv){
      nv.classList.add('done');
      const nn=nv.querySelector('.nn');
      if(nn) nn.innerHTML='<i class="ti ti-check" style="font-size:11px"></i>';
    }
  }

  updateProg();

  // Si ya estaba completado, generar resultados y mostrar pantalla cliente
  if(S.ready){
    finalizeAndShow();
  }
  return true;
}

// ============================================================
// ============================================================
// AUTO-SAVE EN LOCALSTORAGE
// Guarda el estado del diagnóstico en curso automáticamente
// cada vez que se responde una pregunta o se avanza de módulo.
// Al cargar la página, si hay un borrador guardado se oferta
// al usuario la opción de continuar o empezar de nuevo.
// Clave: 'bsr_draft' — un solo borrador por navegador/dispositivo.
// ============================================================
const DRAFT_KEY = 'bsr_draft';

function autoSave(){
  try{
    if(!S.m1||!S.m1.razon) return; // no guardar si aún no se completó M1
    const m1Clean={...S.m1}; delete m1Clean.nivelObj;
    const draft={
      answers:S.answers, m1:m1Clean, scores:S.scores,
      ready:S.ready, ts:Date.now(), version:'3.0'
    };
    localStorage.setItem(DRAFT_KEY, JSON.stringify(draft));
  }catch(e){} // falla silenciosamente si localStorage está lleno
}

function borrarBorrador(){
  localStorage.removeItem(DRAFT_KEY);
}

function cargarBorrador(){
  try{
    const raw = localStorage.getItem(DRAFT_KEY);
    if(!raw) return null;
    return JSON.parse(raw);
  }catch(e){ return null; }
}

function mostrarBannerBorrador(draft){
  const razon = draft.m1?.razon || 'Empresa sin nombre';
  const ts = new Date(draft.ts).toLocaleString('es-CL',{day:'2-digit',month:'2-digit',hour:'2-digit',minute:'2-digit'});
  const nivel = draft.m1?.nivel || '';
  const respondidas = Object.keys(draft.answers||{}).filter(k=>draft.answers[k]!=='NA').length;
  const banner = document.createElement('div');
  banner.id = 'borradorBanner';
  banner.style.cssText='position:fixed;bottom:20px;right:20px;z-index:9998;background:var(--navy);color:#fff;border-radius:10px;padding:16px 18px;box-shadow:0 8px 32px rgba(0,0,0,.3);max-width:340px;font-family:inherit;border-left:3px solid var(--amber)';
  banner.innerHTML=`
    <div style="font-size:11px;color:var(--amber);font-weight:700;letter-spacing:.06em;text-transform:uppercase;margin-bottom:6px"><i class="ti ti-device-floppy" style="margin-right:4px"></i>Diagnóstico en curso</div>
    <div style="font-size:13px;font-weight:600;margin-bottom:2px">${razon}</div>
    <div style="font-size:11px;color:rgba(255,255,255,.5);margin-bottom:12px">${respondidas} respuestas · ${ts}</div>
    <div style="display:flex;gap:8px">
      <button onclick="continuarBorrador()" style="flex:1;background:var(--amber);color:var(--navy);border:none;border-radius:6px;padding:8px;font-size:12px;font-weight:700;cursor:pointer"><i class="ti ti-play"></i> Continuar</button>
      <button onclick="descartarBorrador()" style="background:rgba(255,255,255,.1);color:rgba(255,255,255,.6);border:none;border-radius:6px;padding:8px 12px;font-size:12px;cursor:pointer">Nuevo</button>
    </div>`;
  document.body.appendChild(banner);
}

function continuarBorrador(){
  const draft = cargarBorrador();
  if(!draft) return;
  const banner = document.getElementById('borradorBanner');
  if(banner) banner.remove();
  S.answers = draft.answers||{};
  S.m1 = draft.m1||{};
  S.scores = draft.scores||{};
  S.ready = draft.ready||false;
  if(S.m1.ntrab && !S.m1.nivelObj) S.m1.nivelObj = getNivel(S.m1.ntrab);
  restaurarEstado();
}

function descartarBorrador(){
  borrarBorrador();
  const banner = document.getElementById('borradorBanner');
  if(banner) banner.remove();
}

// INIT
// ============================================================
document.addEventListener('DOMContentLoaded',()=>{
  goPanel('welcome');
  updateProg();
  renderMultas();
  initEmailJS();
  if(window.BSR_SAVED_STATE){ restaurarEstado(); return; }
  const draft = cargarBorrador();
  if(draft && draft.m1?.razon && Object.keys(draft.answers||{}).length > 0){
    mostrarBannerBorrador(draft);
  }
});
</script>
</body>
</html>
