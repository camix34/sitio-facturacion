@extends('layouts.app')

@section('title', 'Inicio - Desarrollo Web y Sistemas de Facturación | El Salvador')

@section('content')

<!-- Hero Section -->
<section id="inicio" class="hero-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 600px;">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-3 fw-bold mb-4">
                    {{ __('Soluciones Tecnológicas para tu Negocio') }}
                </h1>
                <p class="lead mb-5">
                    {{ __('Desarrollamos páginas web personalizadas y sistemas de facturación electrónica que impulsan el crecimiento de tu empresa en El Salvador.') }}
                </p>
                <div class="d-flex gap-3 flex-wrap justify-content-center">
                    <a href="#servicios" class="btn btn-light btn-lg px-4 py-3">
                        <i class="bi bi-grid-3x3-gap me-2"></i>
                        {{ __('Ver nuestros servicios') }}
                    </a>
                    <a href="#contacto" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="bi bi-envelope me-2"></i>
                        {{ __('Contáctanos') }}
                    </a>
                </div>

                <!-- Características destacadas -->
                <div class="row mt-5 justify-content-center">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <i class="bi bi-award-fill fs-1 mb-2"></i>
                            <span>{{ __('Calidad garantizada') }}</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <i class="bi bi-people-fill fs-1 mb-2"></i>
                            <span>{{ __('Atención personalizada') }}</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <i class="bi bi-lightning-charge-fill fs-1 mb-2"></i>
                            <span>{{ __('Entrega rápida') }}</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <i class="bi bi-headset fs-1 mb-2"></i>
                            <span>{{ __('Soporte continuo') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Servicios Principales -->
<section id="servicios" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Nuestros Servicios</h2>
            <p class="text-muted">Soluciones tecnológicas adaptadas a las necesidades de tu negocio</p>
        </div>

        <div class="row g-4">
            <!-- Servicio 1: Páginas Web Personalizadas -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-lg hover-card">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-laptop text-primary" style="font-size: 4rem;"></i>
                            </div>
                            <h3 class="fw-bold mb-3">Páginas Web Personalizadas</h3>
                            <p class="text-muted lead">
                                Creamos sitios web únicos, diseñados específicamente para tu negocio
                            </p>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">¿Qué incluye?</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Diseño personalizado</strong> - Tu visión hecha realidad
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Responsive design</strong> - Perfecto en todos los dispositivos
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>SEO optimizado</strong> - Mejor posicionamiento en Google
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Administración fácil</strong> - Panel de control intuitivo
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Integraciones</strong> - Redes sociales, pagos, WhatsApp
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Hosting y dominio</strong> - Configuración incluida
                                </li>
                            </ul>
                        </div>

                        <div class="bg-light rounded p-3 mb-4">
                            <h6 class="fw-bold mb-2">Tipos de sitios web:</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">Corporativos</span>
                                <span class="badge bg-primary">E-commerce</span>
                                <span class="badge bg-primary">Landing Pages</span>
                                <span class="badge bg-primary">Portafolios</span>
                                <span class="badge bg-primary">Blogs</span>
                                <span class="badge bg-primary">Catálogos</span>
                            </div>
                        </div>

                        <div class="d-grid">
                            <a href="#contacto" class="btn btn-primary btn-lg">
                                <i class="bi bi-chat-dots me-2"></i>
                                Solicitar cotización
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicio 2: Sistema de Facturación Electrónica -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-lg hover-card position-relative">
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-success px-3 py-2">Nuevo</span>
                    </div>
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-receipt-cutoff text-success" style="font-size: 4rem;"></i>
                            </div>
                            <h3 class="fw-bold mb-3">Sistema de Facturación Electrónica</h3>
                            <p class="text-muted lead">
                                Solución completa para generar DTE cumpliendo con el Ministerio de Hacienda
                            </p>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">Características principales:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Emisión de DTE</strong> - Todos los tipos de documentos
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Firma electrónica</strong> - Certificado digital integrado
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>100% Legal</strong> - Cumple con normativa vigente
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Reportes completos</strong> - Análisis de tu facturación
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Almacenamiento seguro</strong> - En la nube
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong>Soporte técnico</strong> - Asistencia continua
                                </li>
                            </ul>
                        </div>

                        <div class="bg-light rounded p-3 mb-4">
                            <h6 class="fw-bold mb-2">Planes desde:</h6>
                            <div class="d-flex align-items-baseline">
                                <span class="display-6 fw-bold text-success">$150</span>
                                <span class="text-muted ms-2">/mes</span>
                            </div>
                            <small class="text-muted">Plan básico con DTE-01 incluido</small>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="{{ route('factura-electronica') }}" class="btn btn-success btn-lg">
                                <i class="bi bi-arrow-right-circle me-2"></i>
                                Ver sistema completo
                            </a>
                            <a href="#contacto" class="btn btn-outline-success">
                                <i class="bi bi-play-circle me-2"></i>
                                Solicitar demostración
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Por qué elegirnos -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">¿Por qué elegirnos?</h2>
            <p class="text-muted">Somos tu aliado tecnológico en El Salvador</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-hand-thumbs-up text-primary" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Experiencia</h5>
                    <p class="text-muted">
                        Años desarrollando soluciones tecnológicas para empresas salvadoreñas
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-gem text-info" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Calidad</h5>
                    <p class="text-muted">
                        Código limpio, diseños modernos y tecnología de punta
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-shield-check text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Confiabilidad</h5>
                    <p class="text-muted">
                        Sistemas seguros y estables que funcionan cuando los necesitas
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-currency-dollar text-warning" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Precios justos</h5>
                    <p class="text-muted">
                        Inversión accesible con excelente relación calidad-precio
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Proceso de trabajo -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">¿Cómo trabajamos?</h2>
            <p class="text-muted">Proceso simple y transparente</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold">1</span>
                        </div>
                        <h5 class="fw-bold mb-3">Contacto inicial</h5>
                        <p class="text-muted">
                            Conversamos sobre tu proyecto, necesidades y objetivos
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-info text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold">2</span>
                        </div>
                        <h5 class="fw-bold mb-3">Propuesta</h5>
                        <p class="text-muted">
                            Te enviamos una cotización detallada y plan de trabajo
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold">3</span>
                        </div>
                        <h5 class="fw-bold mb-3">Desarrollo</h5>
                        <p class="text-muted">
                            Creamos tu solución con actualizaciones constantes
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold">4</span>
                        </div>
                        <h5 class="fw-bold mb-3">Entrega y soporte</h5>
                        <p class="text-muted">
                            Lanzamos tu proyecto y te acompañamos en el camino
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Contacto -->
<section id="contacto" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">¿Listo para comenzar tu proyecto?</h2>
                <p class="lead text-muted mb-4">
                    Cuéntanos sobre tu idea y te ayudaremos a hacerla realidad.
                    Sin compromiso, respuesta en menos de 24 horas.
                </p>

                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Cotización gratuita</h6>
                        <p class="text-muted mb-0">Evaluamos tu proyecto sin costo</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Asesoría personalizada</h6>
                        <p class="text-muted mb-0">Te guiamos en la mejor solución para ti</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Respuesta rápida</h6>
                        <p class="text-muted mb-0">Te contactamos en menos de 24 horas</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre completo *</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="empresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa" name="empresa">
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
                                <label for="servicio" class="form-label">Servicio de interés</label>
                                <select class="form-select" id="servicio" name="servicio">
                                    <option value="">Seleccione un servicio</option>
                                    <option value="pagina-web">Página Web Personalizada</option>
                                    <option value="facturacion">Sistema de Facturación Electrónica</option>
                                    <option value="ambos">Ambos servicios</option>
                                    <option value="otro">Otro servicio</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="mensaje" class="form-label">Cuéntanos sobre tu proyecto *</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required placeholder="Describe tu idea, necesidades o preguntas..."></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send me-2"></i>
                                    Enviar mensaje
                                </button>

                                <a href="https://wa.me/50374838811?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20sus%20servicios"
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

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Innovando en la creación de sistemas para un nuevo El Salvador</h2>
        <p class="lead mb-4">
            Tu socio tecnológico de confianza para llevar tu negocio al siguiente nivel
        </p>

        <div class="row justify-content-center g-4 mt-4">
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
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .min-vh-50 {
        min-height: 50vh;
    }

    .service-icon {
        transition: transform 0.3s ease;
    }

    .hover-card:hover .service-icon {
        transform: scale(1.1);
    }
</style>
@endpush

@push('scripts')
<script>
    // Smooth scrolling
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
        alert('¡Gracias por tu interés! Nos pondremos en contacto contigo pronto.');
        this.reset();
    });
</script>
@endpush
