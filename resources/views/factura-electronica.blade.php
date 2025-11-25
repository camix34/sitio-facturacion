@extends('layouts.app')

@section('title', 'Sistema de Facturación Electrónica - El Salvador | FacturaElectrónicaSV')

@section('content')

<!-- Hero Section -->
<section id="inicio" class="hero-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 600px;">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-6 text-white">
                <h1 class="display-4 fw-bold mb-4">
                    Simplifica tu facturación electrónica con nuestro sistema web
                </h1>
                <p class="lead mb-4">
                    Sistema completo para la generación de facturas electrónicas en El Salvador.
                    Cumple con todas las normativas del Ministerio de Hacienda de forma fácil y rápida.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#demo" class="btn btn-light btn-lg px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i>
                        Solicitar una demostración
                    </a>
                    <a href="#precios" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="bi bi-eye me-2"></i>
                        Ver planes
                    </a>
                </div>

                <!-- Características destacadas -->
                <div class="row mt-5">
                    <div class="col-6 col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill fs-4 me-2"></i>
                            <span>100% Legal</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-shield-check fs-4 me-2"></i>
                            <span>Seguro</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-lightning-fill fs-4 me-2"></i>
                            <span>Rápido</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="text-center">
                    <img src="{{ asset('images/dashboard-preview.png') }}"
                         alt="Dashboard Preview"
                         class="img-fluid rounded shadow-lg"
                         style="border: 8px solid rgba(255,255,255,0.2);"
                         onerror="this.src='https://via.placeholder.com/500x400/ffffff/667eea?text=Dashboard+Preview'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carrusel de Pantallas del Sistema -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Conoce nuestro sistema</h2>
            <p class="text-muted">Explora las funcionalidades que harán más fácil tu gestión de facturación</p>
        </div>

        <div id="systemCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#systemCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#systemCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#systemCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#systemCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#systemCarousel" data-bs-slide-to="4"></button>
            </div>

            <div class="carousel-inner rounded shadow">
                <div class="carousel-item active">
                    <img src="{{ asset('images/carousel/slide1.png') }}"
                         class="d-block w-100"
                         alt="Generación de facturas"
                         onerror="this.src='https://via.placeholder.com/1200x600/4A90E2/ffffff?text=Genera+tus+facturas+electr%C3%B3nicas+en+segundos'">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5 class="fw-bold">Genera tus facturas electrónicas en segundos</h5>
                        <p>Interfaz intuitiva y rápida para crear DTE de forma eficiente</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/slide2.png') }}"
                         class="d-block w-100"
                         alt="Cumplimiento normativo"
                         onerror="this.src='https://via.placeholder.com/1200x600/7B68EE/ffffff?text=Cumple+con+la+normativa+del+Ministerio+de+Hacienda'">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5 class="fw-bold">Cumple fácilmente con la normativa del Ministerio de Hacienda</h5>
                        <p>Sistema actualizado con todas las regulaciones vigentes de DTE</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/slide3.png') }}"
                         class="d-block w-100"
                         alt="Reportes y estadísticas"
                         onerror="this.src='https://via.placeholder.com/1200x600/50C878/ffffff?text=Visualiza+reportes+y+control+de+ventas'">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5 class="fw-bold">Visualiza reportes y control de tus ventas</h5>
                        <p>Análisis detallados de tu facturación y métricas de negocio</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/slide4.png') }}"
                         class="d-block w-100"
                         alt="Firma electrónica"
                         onerror="this.src='https://via.placeholder.com/1200x600/FF6347/ffffff?text=Firma+DTE+con+certificado+local'">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5 class="fw-bold">Firma DTE con tu certificado local</h5>
                        <p>Firma digital segura usando tu certificado de firmante autorizado</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/slide5.png') }}"
                         class="d-block w-100"
                         alt="Gestión de clientes"
                         onerror="this.src='https://via.placeholder.com/1200x600/FFD700/ffffff?text=Gesti%C3%B3n+completa+de+clientes+y+productos'">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5 class="fw-bold">Gestión completa de clientes y productos</h5>
                        <p>Administra tu catálogo y base de datos de clientes centralizadamente</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#systemCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#systemCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>

<!-- Sección de Características -->
<section id="caracteristicas" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Características principales</h2>
            <p class="text-muted">Todo lo que necesitas para gestionar tu facturación electrónica</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-file-earmark-text text-primary" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Emisión de DTE</h5>
                    <p class="text-muted">
                        Genera todos los tipos de documentos tributarios electrónicos:
                        DTE-01, DTE-03, DTE-05, DTE-14 y más.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-shield-lock text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Firma electrónica local</h5>
                    <p class="text-muted">
                        Firma tus documentos con certificado digital de forma segura
                        directamente desde tu computadora.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-cloud-check text-info" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Almacenamiento seguro</h5>
                    <p class="text-muted">
                        Todos tus documentos almacenados de forma segura en la nube
                        con respaldo automático.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-graph-up text-warning" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Reportes y estadísticas</h5>
                    <p class="text-muted">
                        Visualiza el desempeño de tu negocio con reportes detallados
                        y gráficas en tiempo real.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-gear text-danger" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Integración con API</h5>
                    <p class="text-muted">
                        Conecta el sistema con tus aplicaciones existentes
                        mediante nuestra API REST.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-people text-primary" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Multi-usuario</h5>
                    <p class="text-muted">
                        Gestiona múltiples usuarios con diferentes roles
                        y permisos personalizados.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-exclamation-triangle text-warning" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Eventos de contingencia</h5>
                    <p class="text-muted">
                        Maneja eventos de contingencia e invalidación
                        según normativa del Ministerio de Hacienda.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-card">
                    <div class="mb-3">
                        <i class="bi bi-search text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Consulta de DTE</h5>
                    <p class="text-muted">
                        Consulta el estado de tus DTE directamente
                        en el Ministerio de Hacienda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Planes y Precios -->
<section id="precios" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Planes y precios</h2>
            <p class="text-muted">Elige el plan que mejor se adapte a las necesidades de tu negocio</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Plan Básico -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Básico</h3>
                            <div class="my-4">
                                <span class="display-4 fw-bold text-primary">$150</span>
                                <span class="text-muted">/mes</span>
                            </div>
                        </div>

                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Requisitos para ser emisor DTE
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Factura de Consumidor Final (DTE-01)
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Soporte por correo electrónico
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Almacenamiento en la nube
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Reportes básicos
                            </li>
                        </ul>

                        <div class="d-grid mt-4">
                            <a href="#demo" class="btn btn-outline-primary btn-lg">
                                Comenzar ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plan Profesional (Destacado) -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-primary shadow position-relative" style="border-width: 2px !important;">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <span class="badge bg-primary px-4 py-2">Más popular</span>
                    </div>

                    <div class="card-body p-4">
                        <div class="text-center mb-4 mt-3">
                            <h3 class="fw-bold">Profesional</h3>
                            <div class="my-4">
                                <span class="display-4 fw-bold text-primary">$250</span>
                                <span class="text-muted">/mes</span>
                            </div>
                        </div>

                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Todo lo del plan Básico</strong>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Comprobante de Crédito Fiscal (DTE-03)
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Nota de Crédito (DTE-05)
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Factura Sujeto Excluido (DTE-14)
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Soporte prioritario
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Usuarios ilimitados
                            </li>
                        </ul>

                        <div class="d-grid mt-4">
                            <a href="#demo" class="btn btn-primary btn-lg">
                                Comenzar ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plan Empresarial -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Empresarial</h3>
                            <div class="my-4">
                                <span class="display-4 fw-bold text-primary">$500</span>
                                <span class="text-muted">/mes</span>
                            </div>
                        </div>

                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Todo lo del plan Profesional</strong>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Todos los tipos de DTE
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Evento de Contingencia
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Evento de Invalidación
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Consulta DTE en Ministerio de Hacienda
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Acceso a API completa
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Soporte 24/7
                            </li>
                        </ul>

                        <div class="d-grid mt-4">
                            <a href="#demo" class="btn btn-outline-primary btn-lg">
                                Comenzar ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Testimonios -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Lo que dicen nuestros clientes</h2>
            <p class="text-muted">Innovando en la creación de sistemas para un nuevo El Salvador</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-4">
                        "Excelente sistema, nos ha facilitado enormemente la gestión de nuestra facturación.
                        El soporte técnico es muy rápido y eficiente."
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 50px; height: 50px;">
                            MG
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 fw-bold">María González</h6>
                            <small class="text-muted">Comercial La Salvadoreña</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-4">
                        "La integración con nuestra API fue sencilla. Ahora generamos DTE automáticamente
                        desde nuestro sistema de ventas. Muy recomendado."
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 50px; height: 50px;">
                            CR
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 fw-bold">Carlos Rodríguez</h6>
                            <small class="text-muted">TechSolutions SV</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-4">
                        "Llevamos 6 meses usando el sistema y estamos muy satisfechos. Los reportes nos han
                        ayudado a tomar mejores decisiones de negocio."
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="bg-info rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 50px; height: 50px;">
                            AL
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 fw-bold">Ana López</h6>
                            <small class="text-muted">Distribuidora El Progreso</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección FAQ -->
<section id="faq" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Preguntas frecuentes</h2>
            <p class="text-muted">Resolvemos tus dudas más comunes</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Qué es un DTE?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Un DTE (Documento Tributario Electrónico) es un documento digital que cumple con las
                                regulaciones del Ministerio de Hacienda de El Salvador. Reemplaza las facturas físicas
                                tradicionales y es legalmente válido para efectos tributarios.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Necesito un certificado digital?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, para firmar tus DTE necesitas un certificado digital emitido por una entidad
                                certificadora autorizada. Nosotros te guiamos en el proceso de obtención y configuración.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Puedo usar el sistema desde cualquier lugar?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, nuestro sistema es 100% web. Solo necesitas conexión a internet y un navegador
                                moderno. Puedes acceder desde cualquier dispositivo: computadora, tablet o móvil.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                ¿Cómo funciona el soporte técnico?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ofrecemos soporte por correo electrónico, WhatsApp y teléfono. Los planes Profesional
                                y Empresarial incluyen soporte prioritario. El plan Empresarial incluye soporte 24/7.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                ¿Puedo cambiar de plan después?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Por supuesto. Puedes actualizar o cambiar tu plan en cualquier momento según las
                                necesidades de tu negocio. El cambio se refleja de inmediato sin pérdida de datos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Contacto/Demo -->
<section id="demo" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">Solicita una demostración gratuita</h2>
                <p class="lead text-muted mb-4">
                    ¿Listo para transformar tu facturación? Completa el formulario y nuestro equipo
                    se pondrá en contacto contigo para programar una demostración personalizada.
                </p>

                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Sin compromiso</h6>
                        <p class="text-muted mb-0">Conoce el sistema sin ninguna obligación</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Demostración personalizada</h6>
                        <p class="text-muted mb-0">Adaptada a las necesidades de tu negocio</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Asesoría gratuita</h6>
                        <p class="text-muted mb-0">Te ayudamos a elegir el plan adecuado</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre completo *</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="empresa" class="form-label">Empresa *</label>
                                <input type="text" class="form-control" id="empresa" name="empresa" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono *</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                            </div>

                            <div class="mb-3">
                                <label for="plan" class="form-label">Plan de interés</label>
                                <select class="form-select" id="plan" name="plan">
                                    <option value="">Seleccione un plan</option>
                                    <option value="basico">Básico - $150/mes</option>
                                    <option value="profesional">Profesional - $250/mes</option>
                                    <option value="empresarial">Empresarial - $500/mes</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos sobre tu negocio y tus necesidades..."></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send me-2"></i>
                                    Solicitar demostración
                                </button>

                                <a href="https://wa.me/50374838811?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20el%20sistema%20de%20facturación%20electrónica"
                                   class="btn btn-success btn-lg"
                                   target="_blank">
                                    <i class="bi bi-whatsapp me-2"></i>
                                    Contactar por WhatsApp
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Contacto adicional -->
<section id="contacto" class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">¿Tienes alguna pregunta?</h2>
        <p class="lead mb-4">Nuestro equipo está listo para ayudarte</p>

        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="p-4">
                    <i class="bi bi-envelope fs-1 mb-3 d-block"></i>
                    <h5 class="fw-bold mb-2">Email</h5>
                    <a href="mailto:miguelbeja34@gmail.com" class="text-white text-decoration-none">
                        miguelbeja34@gmail.com
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4">
                    <i class="bi bi-phone fs-1 mb-3 d-block"></i>
                    <h5 class="fw-bold mb-2">Teléfono</h5>
                    <a href="tel:+50374838811" class="text-white text-decoration-none">
                        +503 7483-8811
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4">
                    <i class="bi bi-whatsapp fs-1 mb-3 d-block"></i>
                    <h5 class="fw-bold mb-2">WhatsApp</h5>
                    <a href="https://wa.me/50374838811" class="text-white text-decoration-none" target="_blank">
                        Chat directo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .min-vh-50 {
        min-height: 50vh;
    }

    body {
        font-family: 'Inter', sans-serif;
    }

    .navbar-brand {
        font-size: 1.25rem;
    }

    .carousel-item img {
        object-fit: cover;
        height: 600px;
    }

    @media (max-width: 768px) {
        .carousel-item img {
            height: 300px;
        }
    }

    .accordion-button:not(.collapsed) {
        background-color: #f8f9fa;
        color: #667eea;
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }
</style>
@endpush

@push('scripts')
<script>
    // Smooth scrolling para los enlaces del menú
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Manejar el formulario de contacto
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Aquí puedes agregar la lógica para enviar el formulario
        // Por ahora solo mostraremos un mensaje de éxito
        alert('¡Gracias por tu interés! Nos pondremos en contacto contigo pronto.');
        this.reset();
    });

    // Añadir clase active al enlace del menú según la sección visible
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
</script>
@endpush
