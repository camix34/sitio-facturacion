<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de facturación electrónica para El Salvador. Genera tus DTE de forma fácil y cumple con la normativa del Ministerio de Hacienda.">
    <meta name="keywords" content="facturación electrónica, DTE, El Salvador, Ministerio de Hacienda, factura electrónica">
    <title>@yield('title', 'Sistema de Facturación Electrónica - El Salvador')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
                <i class="bi bi-receipt-cutoff fs-3"></i>
                <span class="ms-2">FacturaElectrónicaSV</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('Inicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('acerca-de') ? 'active' : '' }}" href="{{ route('acerca-de') }}">{{ __('Acerca de') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#servicios">{{ __('Servicios') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('factura-electronica') ? 'active' : '' }}" href="{{ route('factura-electronica') }}">{{ __('Facturación Electrónica') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contacto">{{ __('Contacto') }}</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary btn-sm px-4" href="{{ route('home') }}#contacto">
                            <i class="bi bi-envelope me-2"></i>{{ __('Cotizar Proyecto') }}
                        </a>
                    </li>
                    <li class="nav-item ms-lg-2 d-flex align-items-center">
                        <div id="theme-toggle" class="dark-mode-toggle" title="Cambiar tema">
                            <i id="theme-icon" class="bi bi-moon-stars-fill"></i>
                        </div>
                    </li>
                    <li class="nav-item ms-lg-2 d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle language-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Cambiar idioma">
                                <i class="bi bi-translate me-1"></i>
                                <span id="current-lang">{{ app()->getLocale() == 'es' ? 'ES' : 'EN' }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                <li>
                                    <a class="dropdown-item {{ app()->getLocale() == 'es' ? 'active' : '' }}" href="{{ route('lang.switch', 'es') }}">
                                        <i class="bi bi-check-circle-fill me-2 {{ app()->getLocale() == 'es' ? '' : 'invisible' }}"></i>
                                        Español
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">
                                        <i class="bi bi-check-circle-fill me-2 {{ app()->getLocale() == 'en' ? '' : 'invisible' }}"></i>
                                        English
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <!-- Información de la empresa -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-receipt-cutoff"></i>
                        FacturaElectrónicaSV
                    </h5>
                    <p class="text-white-50">
                        Solución completa para la generación de facturas electrónicas en El Salvador,
                        cumpliendo con todas las normativas del Ministerio de Hacienda.
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-linkedin fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                </div>

                <!-- Enlaces rápidos -->
                <div class="col-md-2 mb-4">
                    <h6 class="fw-bold mb-3">Enlaces</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#inicio" class="text-white-50 text-decoration-none">Inicio</a></li>
                        <li class="mb-2"><a href="#caracteristicas" class="text-white-50 text-decoration-none">Características</a></li>
                        <li class="mb-2"><a href="#precios" class="text-white-50 text-decoration-none">Precios</a></li>
                        <li class="mb-2"><a href="#faq" class="text-white-50 text-decoration-none">FAQ</a></li>
                    </ul>
                </div>

                <!-- Recursos -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Recursos</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Documentación</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Términos y Condiciones</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Política de Privacidad</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Soporte Técnico</a></li>
                    </ul>
                </div>

                <!-- Contacto -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Contacto</h6>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2">
                            <i class="bi bi-envelope me-2"></i>
                            <a href="mailto:miguelbeja34@gmail.com" class="text-white-50 text-decoration-none">
                                miguelbeja34@gmail.com
                            </a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-phone me-2"></i>
                            <a href="tel:+50374838811" class="text-white-50 text-decoration-none">
                                +503 7483-8811
                            </a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-whatsapp me-2"></i>
                            <a href="https://wa.me/50374838811" class="text-white-50 text-decoration-none" target="_blank">
                                WhatsApp Business
                            </a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            San Salvador, El Salvador
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="border-secondary my-4">

            <div class="row">
                <div class="col-md-12 text-center text-white-50">
                    <p class="mb-0">
                        &copy; {{ date('Y') }} Camix34. Todos los derechos reservados.
                        Innovando en la creación de sistemas para un nuevo El Salvador.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
