<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Maching - Tecnología de Vanguardia</title>
    <link rel="stylesheet" href="style/s.css">
    <style>
        /* ============================================
           LOADING OVERLAY
           ============================================ */
        #loading-overlay {
            position: fixed;
            inset: 0;
            background: #000;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: opacity 0.8s ease;
        }

        #loading-overlay.hide {
            opacity: 0;
            pointer-events: none;
        }

        /* Spline del loader */
        #loading-overlay .spline-wrap {
            position: relative;
        }

        #loading-overlay spline-viewer {
            width: 480px;
            height: 480px;
            opacity: 0;
            animation: splineFadeIn 1s ease 0.4s forwards;
        }

        @keyframes splineFadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to   { opacity: 1; transform: scale(1); }
        }

        /* Tapa el logo de Spline */
        #loading-overlay .spline-wrap::after {
            content: '';
            position: absolute;
            bottom: 0; right: 0;
            width: 250px;
            height: 96px;
            background: #000;
            z-index: 100;
        }


        .progress-bar {
            width: 200px;
            height: 2px;
            background: #1a1a1a;
            border-radius: 2px;
            margin: 14px auto 0;
            overflow: hidden;
            opacity: 0;
            animation: logoFadeIn 0.5s ease 1.4s forwards;
        }

        .progress-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #333, #e7e7e7, #333);
            background-size: 200%;
            border-radius: 2px;
            animation:
                progressGrow 2.6s ease 1.5s forwards,
                shimmer 1.5s linear 1.5s infinite;
        }

        @keyframes logoFadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes progressGrow {
            from { width: 0%; }
            to   { width: 100%; }
        }
        @keyframes shimmer {
            to { background-position: 200%; }
        }
    </style>
</head>

<body>

    <!-- ============================================
         LOADING OVERLAY
         ============================================ -->
    <div id="loading-overlay">
        <div class="spline-wrap">
            <spline-viewer url="https://prod.spline.design/f8mO05uZshU09pHn/scene.splinecode"></spline-viewer>
        </div>
        <div class="loader-logo">
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
    </div>

    <!-- ============================================
         PÁGINA PRINCIPAL
         ============================================ -->
    <img class="image-gradient" src="image/gradient.png" alt="gradient">
    <div class="layer-blur"></div>

    <!-- HEADER -->
    <header>
        <a class="logo" href="index.html">SMART MACHING</a>
        <nav>
            <ul>
                <li><a href="index.html" class="active">Inicio</a></li>
                <li><a href="php/herramientas.php">Herramientas</a></li>
                <li><a href="php/servicios.php">Servicios</a></li>
                <li><a href="html/chatbot.html">IA</a></li>
                <li><a href="php/ra.php">Realidad Aumentada</a></li>
            </ul>
        </nav>
    </header>

    <!-- HERO -->
    <div class="conteiner">
        <main>
            <div class="content">
                <h1>SMART<br>MACHING</h1>
                <p>Transformando la producción con tecnología de vanguardia. Soluciones inteligentes para el mecanizado
                    moderno, impulsadas por IA y automatización.</p>
                <div class="buttons">
                    <a href="php/herramientas.php" class="btn-signing-main">EXPLORAR CATÁLOGO</a>
                    <a href="html/chatbot.html" class="btn-signing-secondary">IA</a>
                </div>
            </div>
        </main>

        <div class="spline-wrapper">
            <spline-viewer class="robot-3d" url="https://prod.spline.design/GNu0n115D2Pr-I8O/scene.splinecode"></spline-viewer>
            <div class="spline-cover"></div>
        </div>
    </div>

    <!-- FEATURES -->
    <section class="features-bar">
        <div class="feature-item">
            <h3>25,000+</h3>
            <p>HERRAMIENTAS</p>
        </div>
        <div class="divider"></div>
        <div class="feature-item">
            <h3>24/7</h3>
            <p>SOPORTE IA</p>
        </div>
        <div class="divider"></div>
        <div class="feature-item">
            <h3>3D</h3>
            <p>VISUAL</p>
        </div>
    </section>

    <!-- TECHNOLOGY -->
    <section id="ia" class="technology">
        <h2>TECNOLOGÍA DE VANGUARDIA</h2>
        <p>Soluciones inteligentes para el mecanizado moderno</p>
        <div class="tech-cards">
            <div class="tech-card">
                <div class="tech-card-icon">
                    <img src="image/herr.png" alt="Catálogo">
                </div>
                <h3>Catálogo de Herramientas</h3>
                <p>Acceso a más de 500 tecnologías de corte y herramientas especializadas para cualquier tipo de mecanizado.</p>
            </div>
            <div class="tech-card">
                <div class="tech-card-icon">
                    <img src="image/ia.jpg" alt="Asistencia IA">
                </div>
                <h3>Asistencia IA</h3>
                <p>Sistema con respuesta rápida, conectado con información actualizada para optimizar tu producción.</p>
            </div>
            <div class="tech-card">
                <div class="tech-card-icon">
                    <img src="image/ra.jpg" alt="Realidad Aumentada">
                </div>
                <h3>Realidad Aumentada</h3>
                <p>Mejora tu inversión con proyecciones virtuales de herramientas antes de comprar.</p>
            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section class="why-us">
        <h2>¿POR QUÉ ELEGIRNOS?</h2>
        <p>Porque combinamos tecnología, precisión y automatización en una sola plataforma digital.
            Acceso instantáneo a especificaciones técnicas, IA integrada y realidad aumentada.</p>
        <div class="why-content">
            <div class="why-item">
                <h3>3D Modelados</h3>
                <p>Visualiza cada herramienta en detalle con modelos 3D interactivos de alta precisión.</p>
            </div>
            <div class="why-item">
                <h3>Tipos de Maquinarias</h3>
                <p>Soluciones compatibles con tornos, fresadoras, centros de mecanizado y más.</p>
            </div>
            <div class="why-item">
                <h3>Especificaciones Técnicas</h3>
                <p>Información detallada de materiales, geometrías, recubrimientos y aplicaciones.</p>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section id="herramientas" class="products">
        <h2>Productos Destacados</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="image/Inserto de torneado de carburo.jpg" alt="Inserto de Carburo">
                </div>
                <div class="product-info">
                    <h3>Inserto de Carburo WNMG</h3>
                    <p>Inserto de torneado con recubrimiento especial para alto rendimiento en aceros y fundiciones.</p>
                    <a href="#" class="product-link">Consultar especificaciones →</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="image/Broca Helicoidal HSS.jpg" alt="Broca HSS">
                </div>
                <div class="product-info">
                    <h3>Broca Helicoidal HSS</h3>
                    <p>Broca de acero de alta velocidad para perforaciones precisas en diversos materiales metálicos.</p>
                    <a href="#" class="product-link">Consultar especificaciones →</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="image/fresa_carburo.png" alt="Fresa de Carburo">
                </div>
                <div class="product-info">
                    <h3>Fresa de Carburo</h3>
                    <p>Fresa rotativa de carburo para desbaste y acabado en diversos materiales con alta eficiencia.</p>
                    <a href="#" class="product-link">Consultar especificaciones →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODELOS 3D -->
    <section id="3D" class="productos">
        <h2>Modelos 3D Destacados</h2>
        <div class="products-grid">
            <div class="productos-card">
                <div class="product-image">
                    <img src="image/Inserto de torneado de carburo.jpg" alt="Inserto de Carburo">
                </div>
                <div class="product-info">
                    <h3>Inserto WNMG 08</h3>
                    <p>Geometría optimizada para operaciones de torneado con excelente evacuación de viruta.</p>
                    <a href="#" class="product-link">Consultar especificaciones →</a>
                </div>
            </div>
            <div class="productos-card">
                <div class="product-image">
                    <img src="image/Broca Helicoidal HSS.jpg" alt="Broca HSS">
                </div>
                <div class="product-info">
                    <h3>Broca Industrial HSS</h3>
                    <p>Diseño helicoidal optimizado para alta productividad y larga vida útil.</p>
                    <a href="#" class="product-link">Consultar especificaciones →</a>
                </div>
            </div>
            <div class="productos-card">
                <div class="product-image">
                    <img src="image/fresa_carburo.png" alt="Fresa de Carburo">
                </div>
                <div class="product-info">
                    <h3>Fresa de Terminado</h3>
                    <p>Herramienta especializada para acabados superficiales de alta calidad.</p>
                    <a href="#" class="product-link">Consultar especificaciones →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-col logo-col">
                <h2>SMART MACHING</h2>
                <p>Transformamos la producción con tecnología de vanguardia.
                    Desde herramientas inteligentes hasta realidad aumentada,
                    llevamos el mecanizado al futuro.</p>
                <div class="socials">
                    <a href="#">LinkedIn</a>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Empresa</h3>
                <ul>
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Soluciones</h3>
                <ul>
                    <li><a href="#">Catálogo</a></li>
                    <li><a href="#">Asistencia IA</a></li>
                    <li><a href="#">Realidad Aumentada</a></li>
                    <li><a href="#">Modelado 3D</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Soporte</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Ayuda Técnica</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            © 2026 Smart Maching. Todos los derechos reservados.
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.12.58/build/spline-viewer.js"></script>

    <script>
        // Overlay visible ~4.5s, luego fade de 0.8s y se elimina del DOM
        const SHOW_TIME = 4500;
        const FADE_TIME = 800;

        const overlay = document.getElementById('loading-overlay');

        setTimeout(() => {
            overlay.classList.add('hide');
            setTimeout(() => overlay.remove(), FADE_TIME);
        }, SHOW_TIME);
    </script>

</body>
</html>