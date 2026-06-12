<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/agro_hero.png" type="image/png">
    <title>Registro de Usuarios - AgroStock</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <link href="../../public/css/custom.css" rel="stylesheet">
</head>
<body>

    <a href="../../public/index.php" class="back-to-home" title="Volver al Inicio" id="backToHomeBtn">
        <i class="bi bi-arrow-left fs-5"></i>
    </a>

    <div class="auth-wrapper">
        <div class="auth-bg-circle auth-bg-circle-1"></div>
        <div class="auth-bg-circle auth-bg-circle-2"></div>

        <div class="card auth-card">
            <div class="row g-0">
                
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

                <div class="col-lg-7 col-12 auth-form-side">
                    <div class="auth-form-header">
                        <h1 class="auth-form-title" id="formHeaderTitle">Crear Cuenta</h1>
                        <p class="auth-form-subtitle" id="formHeaderSubtitle">Regístrate gratis para comenzar a gestionar tu inventario</p>
                    </div>

                    <form action="../../controllers/auth/registerController.php" method="POST" id="registerForm">
                        
                        <div class="mb-3"> 
                            <label for="usuario" class="form-label-custom">Usuario</label>
                            <div class="auth-input-group">
                                <i class="bi bi-person auth-input-icon"></i>
                                <input type="text" class="form-control auth-input-control" id="usuario" name="usuario" placeholder="Ingrese Usuario" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label-custom">Correo Electrónico</label>
                            <div class="auth-input-group">
                                <i class="bi bi-envelope auth-input-icon"></i>
                                <input type="email" class="form-control auth-input-control" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="contraseña" class="form-label-custom">Contraseña</label>
                            <div class="auth-input-group">
                                <i class="bi bi-lock auth-input-icon"></i>
                                <input type="password" class="form-control auth-input-control" id="contraseña" name="contraseña" placeholder="Mínimo 8 caracteres" required>
                                <button type="button" class="password-toggle-btn" id="togglePassword" aria-label="Mostrar contraseña">
                                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terminos" name="terminos" required style="cursor: pointer;">
                            <label class="form-check-label text-muted fs-7" for="terminos" style="cursor: pointer; user-select: none;">
                                Acepto los <a href="#" class="text-primary-color text-decoration-none fw-semibold">Términos y Condiciones</a> y la <a href="#" class="text-primary-color text-decoration-none fw-semibold">Política de Privacidad</a>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary-custom auth-action-btn w-100 fw-bold mb-4" id="submitRegisterBtn">
                            <i class="bi bi-person-plus me-2"></i>Registrarse
                        </button>
                    </form>

                    <div class="text-center auth-form-footer">
                        <span class="text-muted">¿Ya tienes una cuenta?</span> 
                        <a href="login.php" id="goToLoginLink" class="text-primary-color text-decoration-none fw-semibold ms-1">Inicia Sesión</a>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const togglePasswordBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('contraseña');
            const toggleIcon = document.getElementById('toggleIcon');

            if (togglePasswordBtn && passwordInput && toggleIcon) {
                togglePasswordBtn.addEventListener('click', function () {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
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