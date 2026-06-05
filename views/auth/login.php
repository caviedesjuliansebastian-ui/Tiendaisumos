<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/agro_hero.png" type="image/png">
    <title>Iniciar Sesión - AgroStock</title>
    
    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Custom Style Sheet -->
    <link href="../../public/css/custom.css" rel="stylesheet">
</head>
<body>

    <!-- Back to Home Floating Button -->
    <a href="../../public/index.php" class="back-to-home" title="Volver al Inicio" id="backToHomeBtn">
        <i class="bi bi-arrow-left fs-5"></i>
    </a>

    <div class="auth-wrapper">
        <!-- Decorative background circles -->
        <div class="auth-bg-circle auth-bg-circle-1"></div>
        <div class="auth-bg-circle auth-bg-circle-2"></div>

        <div class="card auth-card">
            <div class="row g-0">
                
                <!-- Left Side: Branding and Info -->
                <div class="col-lg-5 d-none d-lg-flex auth-brand-side">
                    <div>
                        <a href="../../public/index.php" class="auth-brand-logo" id="brandLogo">
                            <i class="bi bi-leaf-fill"></i>
                            <span>AgroStock</span>
                        </a>
                        
                        <ul class="auth-features-list">
                            <li class="auth-feature-item">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                                <span>Control de Lotes y Vencimientos</span>
                            </li>
                            <li class="auth-feature-item">
                                <i class="bi bi-receipt"></i>
                                <span>Punto de Venta POS Ágil</span>
                            </li>
                            <li class="auth-feature-item">
                                <i class="bi bi-bell-fill"></i>
                                <span>Alertas de Stock Mínimo</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="auth-brand-footer">
                        <span>&copy; <?= date('Y') ?> AgroStock. Todos los derechos reservados.</span>
                    </div>
                </div>

                <!-- Right Side: Form -->
                <div class="col-lg-7 col-12 auth-form-side">
                    <div class="auth-form-header">
                        <h1 class="auth-form-title" id="formHeaderTitle">Acceso al Sistema</h1>
                        <p class="auth-form-subtitle" id="formHeaderSubtitle">Ingresa tus datos para ingresar al panel de AgroStock</p>
                    </div>

                    <form action="guardar_usuario.php" method="POST" id="loginForm">
                        
                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="correo" class="form-label-custom">Correo Electrónico</label>
                            <div class="auth-input-group">
                                <i class="bi bi-envelope auth-input-icon"></i>
                                <input type="email" class="form-control auth-input-control" id="correo" name="correo" placeholder="ejemplo@agrostock.com" required>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="contraseña" class="form-label-custom mb-0">Contraseña</label>
                                <a href="#" class="text-primary-color text-decoration-none fs-7 fw-semibold" id="forgotPasswordLink">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="auth-input-group">
                                <i class="bi bi-lock auth-input-icon"></i>
                                <input type="password" class="form-control auth-input-control" id="contraseña" name="contraseña" placeholder="••••••••" required>
                                <button type="button" class="password-toggle-btn" id="togglePassword" aria-label="Mostrar contraseña">
                                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe" style="cursor: pointer;">
                                <label class="form-check-label text-muted fs-7" for="rememberMe" style="cursor: pointer; user-select: none;">
                                    Mantener sesión iniciada
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary-custom auth-action-btn w-100 fw-bold" id="submitLoginBtn">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                        </button>
                    </form>

                    <!-- Navigation Footer -->
                    <div class="auth-links-footer">
                        ¿No tienes una cuenta aún? 
                        <a href="register.php" id="goToRegisterLink">Regístrate gratis</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Vanilla JS for password visibility toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const togglePasswordBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('contraseña');
            const toggleIcon = document.getElementById('toggleIcon');

            if (togglePasswordBtn && passwordInput && toggleIcon) {
                togglePasswordBtn.addEventListener('click', function () {
                    // Toggle type attribute
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Toggle icon class and accessibility attribute
                    if (type === 'text') {
                        toggleIcon.classList.remove('bi-eye-slash');
                        toggleIcon.classList.add('bi-eye');
                        togglePasswordBtn.setAttribute('aria-label', 'Ocultar contraseña');
                    } else {
                        toggleIcon.classList.remove('bi-eye');
                        toggleIcon.classList.add('bi-eye-slash');
                        togglePasswordBtn.setAttribute('aria-label', 'Mostrar contraseña');
                    }
                });
            }
        });
    </script>
</body>
</html>