@extends('layouts.app')

@section('title', 'Acerca de Nosotros - Nuestro Equipo | FacturaElectrónicaSV')

@section('content')

<!-- Hero Section -->
<section class="hero-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 400px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-4">
                    Acerca de Nosotros
                </h1>
                <p class="lead mb-4">
                    Somos un equipo de profesionales apasionados por la tecnología,
                    comprometidos con la innovación y el desarrollo de soluciones de calidad para El Salvador.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Nuestra Misión y Visión -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="bi bi-bullseye text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="fw-bold text-center mb-3">Nuestra Misión</h3>
                        <p class="text-muted text-center">
                            Proporcionar soluciones tecnológicas innovadoras y de alta calidad que impulsen
                            el crecimiento y la transformación digital de las empresas salvadoreñas,
                            facilitando sus procesos y maximizando su eficiencia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="bi bi-eye text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="fw-bold text-center mb-3">Nuestra Visión</h3>
                        <p class="text-muted text-center">
                            Ser la empresa líder en desarrollo de software y soluciones digitales en El Salvador,
                            reconocida por nuestra excelencia técnica, innovación constante y compromiso
                            con el éxito de nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestro Equipo -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Nuestro Equipo</h2>
            <p class="text-muted lead">
                Conoce a los profesionales que hacen posible nuestras soluciones tecnológicas
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Ing. Miguel Ángel Ayala -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-lg team-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-4">
                            <div class="team-photo-wrapper mx-auto mb-3">
                                <img src="{{ asset('images/team/miguel-ayala.jpg') }}"
                                     alt="Ing. Miguel Ángel Ayala"
                                     class="team-photo rounded-circle img-fluid shadow"
                                     onerror="this.src='https://ui-avatars.com/api/?name=Miguel+Ayala&size=200&background=667eea&color=fff&bold=true&font-size=0.4'">
                            </div>
                            <h4 class="fw-bold mb-2">Ing. Miguel Ángel Ayala</h4>
                            <span class="badge bg-primary mb-3">Full Stack Developer</span>
                        </div>

                        <p class="text-muted mb-4">
                            Ingeniero en sistemas con amplia experiencia en el desarrollo de aplicaciones web
                            robustas y escalables. Especializado en arquitecturas modernas y mejores prácticas
                            de desarrollo.
                        </p>

                        <div class="mb-3">
                            <h6 class="fw-bold mb-3">Tecnologías:</h6>
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-code-square me-1"></i>PHP (Laravel)
                                </span>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-cup-hot me-1"></i>Java (Spring Boot)
                                </span>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-filetype-ts me-1"></i>TypeScript (Angular)
                                </span>
                            </div>
                        </div>

                        <div class="skills-list text-start">
                            <h6 class="fw-bold mb-2">Experiencia en:</h6>
                            <ul class="list-unstyled text-muted small">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Desarrollo full stack web
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    APIs RESTful
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Arquitectura de microservicios
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Bases de datos SQL y NoSQL
                                </li>
                            </ul>
                        </div>

                        <div class="social-links mt-3">
                            <a href="#" class="text-primary me-3" title="LinkedIn">
                                <i class="bi bi-linkedin fs-5"></i>
                            </a>
                            <a href="#" class="text-dark me-3" title="GitHub">
                                <i class="bi bi-github fs-5"></i>
                            </a>
                            <a href="#" class="text-info" title="Email">
                                <i class="bi bi-envelope fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ing. Carlos Humberto Posada -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-lg team-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-4">
                            <div class="team-photo-wrapper mx-auto mb-3">
                                <img src="{{ asset('images/team/carlos-posada.jpg') }}"
                                     alt="Ing. Carlos Humberto Posada"
                                     class="team-photo rounded-circle img-fluid shadow"
                                     onerror="this.src='https://ui-avatars.com/api/?name=Carlos+Posada&size=200&background=28a745&color=fff&bold=true&font-size=0.4'">
                            </div>
                            <h4 class="fw-bold mb-2">Ing. Carlos Humberto Posada</h4>
                            <span class="badge bg-success mb-3">Backend Developer</span>
                        </div>

                        <p class="text-muted mb-4">
                            Ingeniero especializado en desarrollo backend con sólida experiencia en la creación
                            de APIs robustas y seguras. Experto en arquitecturas orientadas a servicios y
                            seguridad de aplicaciones.
                        </p>

                        <div class="mb-3">
                            <h6 class="fw-bold mb-3">Tecnologías:</h6>
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-cup-hot me-1"></i>Spring Boot
                                </span>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-code-square me-1"></i>Laravel
                                </span>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-shield-lock me-1"></i>JWT/JWS
                                </span>
                            </div>
                        </div>

                        <div class="skills-list text-start">
                            <h6 class="fw-bold mb-2">Experiencia en:</h6>
                            <ul class="list-unstyled text-muted small">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Desarrollo de API REST
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Manejo avanzado de JSON
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Autenticación y autorización (JWT/JWS)
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Integración de servicios externos
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Optimización de bases de datos
                                </li>
                            </ul>
                        </div>

                        <div class="social-links mt-3">
                            <a href="#" class="text-primary me-3" title="LinkedIn">
                                <i class="bi bi-linkedin fs-5"></i>
                            </a>
                            <a href="#" class="text-dark me-3" title="GitHub">
                                <i class="bi bi-github fs-5"></i>
                            </a>
                            <a href="#" class="text-info" title="Email">
                                <i class="bi bi-envelope fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gabo - Product Owner -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-lg team-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-4">
                            <div class="team-photo-wrapper mx-auto mb-3">
                                <img src="{{ asset('images/team/gabo.jpg') }}"
                                     alt="Gabo - Product Owner"
                                     class="team-photo rounded-circle img-fluid shadow"
                                     onerror="this.src='https://ui-avatars.com/api/?name=Gabo&size=200&background=ffc107&color=000&bold=true&font-size=0.4'">
                            </div>
                            <h4 class="fw-bold mb-2">produc owner</h4>
                            <span class="badge bg-warning text-dark mb-3">Product Owner</span>
                        </div>

                        <p class="text-muted mb-4">
                            Profesional enfocado en la gestión de productos y experiencia de usuario.
                            Responsable de definir la visión del producto, priorizar funcionalidades
                            y asegurar que las soluciones cumplan con las necesidades del cliente.
                        </p>

                        <div class="mb-3">
                            <h6 class="fw-bold mb-3">Áreas de expertise:</h6>
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-kanban me-1"></i>Gestión de Proyectos
                                </span>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-people me-1"></i>Scrum/Agile
                                </span>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-graph-up me-1"></i>Product Strategy
                                </span>
                            </div>
                        </div>

                        <div class="skills-list text-start">
                            <h6 class="fw-bold mb-2">Responsabilidades:</h6>
                            <ul class="list-unstyled text-muted small">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    Definición de roadmap del producto
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    Gestión del backlog de desarrollo
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    Comunicación con stakeholders
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    Análisis de requerimientos
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    Validación de entregables
                                </li>
                            </ul>
                        </div>

                        <div class="social-links mt-3">
                            <a href="#" class="text-primary me-3" title="LinkedIn">
                                <i class="bi bi-linkedin fs-5"></i>
                            </a>
                            <a href="#" class="text-dark me-3" title="Twitter">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                            <a href="#" class="text-info" title="Email">
                                <i class="bi bi-envelope fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestros Valores -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Nuestros Valores</h2>
            <p class="text-muted">Principios que guían nuestro trabajo diario</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center p-4">
                    <i class="bi bi-award text-primary" style="font-size: 3rem;"></i>
                    <h5 class="fw-bold mt-3 mb-2">Excelencia</h5>
                    <p class="text-muted small">
                        Buscamos la máxima calidad en cada proyecto que desarrollamos
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="text-center p-4">
                    <i class="bi bi-lightbulb text-warning" style="font-size: 3rem;"></i>
                    <h5 class="fw-bold mt-3 mb-2">Innovación</h5>
                    <p class="text-muted small">
                        Utilizamos las últimas tecnologías y metodologías del mercado
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="text-center p-4">
                    <i class="bi bi-handshake text-success" style="font-size: 3rem;"></i>
                    <h5 class="fw-bold mt-3 mb-2">Compromiso</h5>
                    <p class="text-muted small">
                        Nos dedicamos al éxito de cada cliente y proyecto
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="text-center p-4">
                    <i class="bi bi-shield-check text-info" style="font-size: 3rem;"></i>
                    <h5 class="fw-bold mt-3 mb-2">Integridad</h5>
                    <p class="text-muted small">
                        Actuamos con honestidad y transparencia en todo momento
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">¿Quieres trabajar con nosotros?</h2>
        <p class="lead mb-4">
            Estamos listos para ayudarte a llevar tu proyecto al siguiente nivel
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('home') }}#contacto" class="btn btn-light btn-lg px-5">
                <i class="bi bi-envelope me-2"></i>
                Contáctanos
            </a>
            <a href="{{ route('home') }}#servicios" class="btn btn-outline-light btn-lg px-5">
                <i class="bi bi-grid-3x3-gap me-2"></i>
                Ver servicios
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .team-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.2) !important;
    }

    .team-photo-wrapper {
        width: 200px;
        height: 200px;
        position: relative;
    }

    .team-photo {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border: 5px solid #f8f9fa;
        transition: transform 0.3s ease;
    }

    .team-card:hover .team-photo {
        transform: scale(1.05);
    }

    .social-links a {
        transition: transform 0.3s ease, color 0.3s ease;
        display: inline-block;
    }

    .social-links a:hover {
        transform: translateY(-3px);
    }

    .skills-list {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 1rem;
    }

    .badge {
        font-weight: 500;
        padding: 0.5rem 1rem;
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
</script>
@endpush
