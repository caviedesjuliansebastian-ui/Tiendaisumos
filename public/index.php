<?php
/**
 * AgroStock - Sistema de Control de Stock y Ventas de Insumos Agrícolas
 * Página de Presentación Principal (Landing Page)
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>SuperStock - Sistema de Control de Stock e Inventario de Insumos Agrícolas</title>
    <meta name="description" content="Optimiza la administración de tu agropecuaria. Control de lotes, alertas de stock mínimo, punto de venta (POS) y facturación para fertilizantes, semillas y pesticidas.">
    <meta name="keywords" content="inventario agricola, insumos agricolas, control de stock, punto de venta, agropecuaria, semillas, fertilizantes, pesticidas">
    <meta name="author" content="AgroStock Tech">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/agro_hero.png" type="image/png">
    
    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Custom Style Sheet -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="#inicio" id="navBrandLink">
                <i class="bi bi-leaf-fill"></i>
                <span>AgroStock</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation" id="navbarCollapseBtn">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio" id="navLinkInicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#caracteristicas" id="navLinkCaracteristicas">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#demo" id="navLinkDemo">Demo Interactiva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portales" id="navLinkPortales">Portales</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-primary-custom" href="../prueba/login.php" id="navBtnAcceder">
                            <i class="bi bi-person-fill-check me-2"></i>Acceder
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="hero-section" id="inicio">
        <div class="container text-center text-lg-start">
            <div class="row align-items-center py-5">
                <div class="col-lg-7 animated-fade-in-up">
                    <span class="badge bg-success mb-3 px-3 py-2 fs-7 fw-semibold text-uppercase">Tecnología para el Campo</span>
                    <h1 class="hero-title" id="mainHeroTitle">Optimiza tu Inventario Agrícola y Potencia tus Ventas</h1>
                    <p class="hero-subtitle" id="mainHeroSubtitle">Control total de fertilizantes, semillas, pesticidas y herramientas en tiempo real. La plataforma digital definitiva para distribuidores y almacenes de insumos agrícolas.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start mt-4">
                        <a href="../prueba/login.php" class="btn btn-primary-custom btn-lg px-4 py-3" id="heroBtnLogin">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                        </a>
                        <a href="#demo" class="btn btn-outline-custom btn-lg px-4 py-3" id="heroBtnDemo">
                            <i class="bi bi-play-circle me-2"></i>Ver Demo Interactiva
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 text-center animated-fade-in-up animation-delay-1 d-none d-lg-block">
                    <img src="img/agro_hero.png" alt="AgroStock Mockup" class="img-fluid rounded-4 shadow-lg border border-3 border-success border-opacity-25" style="max-height: 400px; object-fit: cover;" id="heroPromoImg">
                </div>
            </div>
        </div>
    </header>

    <!-- QUICK STATS BAR -->
    <section class="stats-container container">
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <div class="stat-card" id="statCardInsumos">
                    <div class="stat-icon"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                    <div class="stat-number">1,240+</div>
                    <div class="stat-label">Insumos Activos</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card" id="statCardPrecision">
                    <div class="stat-icon"><i class="bi bi-check-circle-fill"></i></div>
                    <div class="stat-number">99.8%</div>
                    <div class="stat-label">Precisión Stock</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card" id="statCardAlertas">
                    <div class="stat-icon text-danger"><i class="bi bi-exclamation-triangle-fill"></i></div>
                    <div class="stat-number">04</div>
                    <div class="stat-label">Alertas Críticas</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card" id="statCardVentas">
                    <div class="stat-icon"><i class="bi bi-graph-up-arrow"></i></div>
                    <div class="stat-number">+150</div>
                    <div class="stat-label">Pedidos Hoy</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SYSTEM FEATURES -->
    <section class="py-5 my-5" id="caracteristicas">
        <div class="container py-4">
            <div class="text-center mb-5 max-w-600 mx-auto">
                <h2 class="display-6 fw-bold mb-3" id="featuresSectionTitle">Gestión Inteligente para Distribuidores Agrícolas</h2>
                <p class="text-muted" id="featuresSectionDesc">Diseñado específicamente para las complejidades de la venta de agroinsumos: control estricto de químicos, vencimientos y dosificaciones.</p>
            </div>
            
            <div class="row g-4 mt-2">
                <!-- FEATURE 1 -->
                <div class="col-md-4">
                    <div class="feature-card" id="featureCardLotes">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h3 class="feature-title">Control de Lotes y Vencimientos</h3>
                        <p class="feature-description">Rastrea pesticidas y herbicidas por su número de lote. Recibe alertas tempranas de productos cercanos a expirar para evitar pérdidas y cumplir la normativa.</p>
                    </div>
                </div>
                <!-- FEATURE 2 -->
                <div class="col-md-4">
                    <div class="feature-card" id="featureCardVentas">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <h3 class="feature-title">Punto de Venta (POS) Ágil</h3>
                        <p class="feature-description">Facturación rápida para agricultores y clientes frecuentes. Registro de formas de pago en efectivo, crédito agropecuario o transferencias con cálculo automático de impuestos.</p>
                    </div>
                </div>
                <!-- FEATURE 3 -->
                <div class="col-md-4">
                    <div class="feature-card" id="featureCardStock">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-bell"></i>
                        </div>
                        <h3 class="feature-title">Alertas Inteligentes de Stock</h3>
                        <p class="feature-description">No te quedes sin stock en plena temporada de siembra. El sistema te notifica automáticamente cuando tus fertilizantes o semillas alcanzan el nivel de reorden mínimo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE DEMO (SIMULADOR DE INVENTARIO) -->
    <section class="py-5 bg-light" id="demo">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3" id="demoSectionTitle">Simulador de Inventario en Tiempo Real</h2>
                <p class="text-muted max-w-600 mx-auto" id="demoSectionDesc">Prueba las capacidades del sistema interactuando directamente con nuestra base de datos simulada. Busca productos y realiza ventas de prueba.</p>
            </div>

            <div class="demo-section" id="demoWidgetWrapper">
                <!-- Filters & Search -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6 col-lg-5">
                        <div class="search-box">
                            <i class="bi bi-search"></i>
                            <input type="text" id="searchInput" class="form-control py-2" placeholder="Buscar insumos (ej. Urea, Glifosato...)">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <select id="categoryFilter" class="form-select py-2">
                            <option value="all">Todas las Categorías</option>
                            <option value="Fertilizantes">Fertilizantes</option>
                            <option value="Herbicidas">Herbicidas / Fungicidas</option>
                            <option value="Semillas">Semillas de Cultivo</option>
                            <option value="Herramientas">Herramientas & Equipos</option>
                        </select>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-lg-end text-muted mt-2 mt-lg-0">
                        <span id="demoProductCount" class="fw-semibold">Mostrando 6 productos</span>
                    </div>
                </div>

                <!-- Table -->
                <div class="demo-table-container">
                    <div class="table-responsive">
                        <table class="table table-hover demo-table" id="inventoryTable">
                            <thead>
                                <tr>
                                    <th>Insumo Agrícola</th>
                                    <th>Categoría</th>
                                    <th>Lote / Ubicación</th>
                                    <th class="text-center">Stock Cantidad</th>
                                    <th class="text-center">Estado Stock</th>
                                    <th class="text-end">Acción Demo</th>
                                </tr>
                            </thead>
                            <tbody id="inventoryBody">
                                <!-- JavaScript will populate this -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTALS SECTION (ACCESOS DIRECTOS) -->
    <section class="py-5" id="portales">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3" id="portalsSectionTitle">Acceso Directo a los Portales del Sistema</h2>
                <p class="text-muted max-w-600 mx-auto" id="portalsSectionDesc">Ingresa al panel del sistema de acuerdo a tus credenciales registradas en la base de datos.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- ADMIN PORTAL -->
                <div class="col-md-5 col-lg-4">
                    <div class="portal-card" id="portalCardAdmin">
                        <div class="fs-1 text-primary-color mb-3"><i class="bi bi-shield-lock-fill"></i></div>
                        <h3 class="portal-title">Portal Administrador</h3>
                        <p class="portal-desc">Gestión completa de usuarios, auditorías de compras, reportes de rentabilidad, importación de lotes y configuración del sistema.</p>
                        <a href="../prueba/login.php" class="btn btn-primary-custom w-100 py-2" id="portalBtnAdmin">Ingresar como Admin</a>
                    </div>
                </div>
                
                <!-- SELLER/CLIENT PORTAL -->
                <div class="col-md-5 col-lg-4">
                    <div class="portal-card" id="portalCardSeller">
                        <div class="fs-1 text-success mb-3"><i class="bi bi-people-fill"></i></div>
                        <h3 class="portal-title">Portal Vendedor / Cliente</h3>
                        <p class="portal-desc">Facturación ágil en mostrador, consulta de existencias por pasillos, registro rápido de clientes y visualización de pedidos.</p>
                        <a href="../prueba/login.php" class="btn btn-outline-success border-2 w-100 py-2 fw-semibold" id="portalBtnSeller">Ingresar como Vendedor</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="text-muted">¿Aún no tienes una cuenta para tu almacén? <a href="../prueba/register.php" class="text-primary-color fw-bold text-decoration-none" id="portalRegisterLink">Regístrate gratis aquí</a></p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <!-- Col 1 Brand -->
                <div class="col-lg-4">
                    <h5 class="d-flex align-items-center gap-2 text-white">
                        <i class="bi bi-leaf-fill text-success"></i> AgroStock
                    </h5>
                    <p class="mt-3 text-white-50">Plataforma digital para la tecnificación y administración eficiente del inventario y las ventas de insumos en el sector agrícola.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-btn" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                
                <!-- Col 2 Categoría I: Software -->
                <div class="col-6 col-md-3 col-lg-2">
                    <h5>Módulos</h5>
                    <ul class="footer-links-list">
                        <li><a href="#inicio">Panel Principal</a></li>
                        <li><a href="#caracteristicas">Inventarios</a></li>
                        <li><a href="#demo">Facturación POS</a></li>
                        <li><a href="#portales">Reportes & Lotes</a></li>
                    </ul>
                </div>

                <!-- Col 3 Categoría II: Soporte -->
                <div class="col-6 col-md-3 col-lg-2">
                    <h5>Documentación</h5>
                    <ul class="footer-links-list">
                        <li><a href="../Documentación/SRS_Sistema_Inventario_y_Ventas_Agricolas.docx" target="_blank">Requerimientos SRS</a></li>
                        <li><a href="../Documentación/Historias_de_Usuario_Sistema_Agricola.xlsx" target="_blank">Historias de Usuario</a></li>
                        <li><a href="#">Base de Datos</a></li>
                        <li><a href="#">Soporte Técnico</a></li>
                    </ul>
                </div>

                <!-- Col 4 Categoría III: Empresa -->
                <div class="col-md-4 col-lg-3">
                    <h5>Contacto Almacén</h5>
                    <ul class="footer-links-list">
                        <li><span class="text-white-50"><i class="bi bi-geo-alt-fill me-2 text-success"></i> Calle Principal Agrícola #45, Zona Agro</span></li>
                        <li><span class="text-white-50"><i class="bi bi-telephone-fill me-2 text-success"></i> +57 (300) 123-4567</span></li>
                        <li><span class="text-white-50"><i class="bi bi-envelope-fill me-2 text-success"></i> soporte@agrostock.com</span></li>
                    </ul>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="row align-items-center justify-content-between text-center text-md-start">
                <div class="col-md-6 text-white-50">
                    <p class="mb-0">&copy; <?= date('Y') ?> AgroStock. Todos los derechos reservados. Diseñado para Tienda de Insumos.</p>
                </div>
                <div class="col-md-6 text-md-end text-white-50 mt-2 mt-md-0">
                    <p class="mb-0">Desarrollo Profesional HTML5 / Bootstrap 5 / PHP</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE TOAST FOR DEMO NOTIFICATION -->
    <div class="demo-toast" id="demoNotification">
        <i class="bi bi-check-circle-fill"></i>
        <span id="demoToastText">¡Venta simulada con éxito!</span>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Interactive Simulator JS Logic -->
    <script>
        // Mock inventory data for agricultural supply store
        const inventoryData = [
            { id: 1, name: "Urea Granulada 46% (50Kg)", category: "Fertilizantes", code: "Lote: UR-2026 / Pasillo A", stock: 45, price: 120000 },
            { id: 2, name: "Glifosato Concentrado (1 Litro)", category: "Herbicidas", code: "Lote: GL-9981 / Pasillo B", stock: 12, price: 65000 },
            { id: 3, name: "Semillas de Maíz Híbrido (Saco 60k sem)", category: "Semillas", code: "Lote: SM-8761 / Silo 2", stock: 8, price: 340000 },
            { id: 4, name: "Fungicida Orgánico Cobre (500g)", category: "Herbicidas", code: "Lote: FN-4040 / Pasillo C", stock: 24, price: 42000 },
            { id: 5, name: "Abono Completo NPK 15-15-15 (50Kg)", category: "Fertilizantes", code: "Lote: NP-3030 / Pasillo A", stock: 35, price: 135000 },
            { id: 6, name: "Fumigadora de Espalda Manual 20L", category: "Herramientas", code: "Lote: EQ-0105 / Pasillo D", stock: 5, price: 180000 }
        ];

        // Render Table Function
        function renderTable(filterText = "", filterCategory = "all") {
            const tbody = document.getElementById("inventoryBody");
            tbody.innerHTML = "";

            const filteredData = inventoryData.filter(item => {
                const matchesSearch = item.name.toLowerCase().includes(filterText.toLowerCase()) || 
                                      item.code.toLowerCase().includes(filterText.toLowerCase());
                const matchesCategory = filterCategory === "all" || item.category === filterCategory;
                return matchesSearch && matchesCategory;
            });

            // Update product count label
            document.getElementById("demoProductCount").textContent = `Mostrando ${filteredData.length} insumo${filteredData.length !== 1 ? 's' : ''}`;

            if (filteredData.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="bi bi-info-circle fs-4 d-block mb-2"></i>
                            No se encontraron insumos agrícolas coincidentes
                        </td>
                    </tr>
                `;
                return;
            }

            filteredData.forEach(item => {
                // Determine stock status pill and label
                let statusClass = "suficiente";
                let statusLabel = "Suficiente";
                
                if (item.stock === 0) {
                    statusClass = "agotado";
                    statusLabel = "Agotado";
                } else if (item.stock <= 10) {
                    statusClass = "critico";
                    statusLabel = "Crítico";
                }

                const tr = document.createElement("tr");
                tr.id = `row-${item.id}`;
                tr.innerHTML = `
                    <td class="fw-semibold text-primary-dark">${item.name}</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-20 px-2 py-1 fs-8">${item.category}</span></td>
                    <td class="text-muted fs-7">${item.code}</td>
                    <td class="text-center fw-bold" id="stock-${item.id}">${item.stock} uds</td>
                    <td class="text-center">
                        <span class="badge badge-stock ${statusClass}" id="badge-${item.id}">${statusLabel}</span>
                    </td>
                    <td class="text-end">
                        <button onclick="simulateSale(${item.id})" class="btn btn-sm btn-outline-success fw-bold px-3" ${item.stock === 0 ? 'disabled' : ''} id="btn-sale-${item.id}">
                            <i class="bi bi-cart-plus me-1"></i>Vender 1
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        // Simulate Sale function
        function simulateSale(id) {
            const item = inventoryData.find(i => i.id === id);
            if (item && item.stock > 0) {
                item.stock -= 1;
                
                // Animate row highlight
                const row = document.getElementById(`row-${id}`);
                row.classList.add("table-success");
                setTimeout(() => {
                    row.classList.remove("table-success");
                }, 400);

                // Update text and classes
                const stockEl = document.getElementById(`stock-${id}`);
                const badgeEl = document.getElementById(`badge-${id}`);
                const btnEl = document.getElementById(`btn-sale-${id}`);

                stockEl.textContent = `${item.stock} uds`;

                if (item.stock === 0) {
                    badgeEl.className = "badge badge-stock agotado";
                    badgeEl.textContent = "Agotado";
                    btnEl.disabled = true;
                    showToast(`¡Alerta! Se agotó el stock de ${item.name}`, "bi-exclamation-triangle-fill");
                } else if (item.stock <= 10) {
                    badgeEl.className = "badge badge-stock critico";
                    badgeEl.textContent = "Crítico";
                    showToast(`Venta exitosa. Stock crítico de ${item.name}: ${item.stock} uds restantes`, "bi-exclamation-circle-fill");
                } else {
                    showToast(`Vendido 1 unidad de ${item.name}. Stock actual: ${item.stock} uds`, "bi-check-circle-fill");
                }

                // Check general critical stock counter in stat-card
                updateCriticalAlertCounter();
            }
        }

        // Show Toast function
        function showToast(message, iconClass = "bi-check-circle-fill") {
            const toast = document.getElementById("demoNotification");
            const toastText = document.getElementById("demoToastText");
            
            toastText.innerHTML = `<i class="bi ${iconClass} me-2 text-warning"></i>${message}`;
            toast.classList.add("show");

            // Clear previous timeout if any
            if (window.toastTimeout) {
                clearTimeout(window.toastTimeout);
            }

            window.toastTimeout = setTimeout(() => {
                toast.classList.remove("show");
            }, 3500);
        }

        // Update critical items count dynamically on the stats panel
        function updateCriticalAlertCounter() {
            const criticalCount = inventoryData.filter(item => item.stock <= 10).length;
            const formatted = criticalCount < 10 ? `0${criticalCount}` : criticalCount;
            document.querySelector("#statCardAlertas .stat-number").textContent = formatted;
        }

        // Add Event Listeners for Filters
        document.getElementById("searchInput").addEventListener("input", (e) => {
            const filterText = e.target.value;
            const filterCategory = document.getElementById("categoryFilter").value;
            renderTable(filterText, filterCategory);
        });

        document.getElementById("categoryFilter").addEventListener("change", (e) => {
            const filterCategory = e.target.value;
            const filterText = document.getElementById("searchInput").value;
            renderTable(filterText, filterCategory);
        });

        // Initialize table rendering and alert counter
        document.addEventListener("DOMContentLoaded", () => {
            renderTable();
            updateCriticalAlertCounter();
            
            // Navbar transparent to solid on scroll
            window.addEventListener('scroll', () => {
                const navbar = document.getElementById('mainNavbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow-sm');
                    navbar.style.padding = "0.75rem 0";
                } else {
                    navbar.classList.remove('shadow-sm');
                    navbar.style.padding = "1rem 0";
                }
            });
        });
    </script>
</body>
</html>
