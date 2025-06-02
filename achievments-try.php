<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build India Award 2024 - Medulla-Soft Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.pexels.com/photos/1387037/pexels-photo-1387037.jpeg') center/cover;
            color: white;
        }
        .project-card {
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .project-card:hover {
            transform: translateY(-10px);
        }
        .award-badge {
            width: 120px;
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Medulla-Soft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About Award</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container text-center" data-aos="zoom-in">
            <img src="https://cdn-icons-png.flaticon.com/512/2583/2583434.png" alt="Award" class="award-badge mb-4">
            <h1 class="display-4 fw-bold">Build India Infra Awards 2024</h1>
            <p class="lead">Recognizing Excellence in Infrastructure Innovation</p>
        </div>
    </section>

    <!-- About Award -->
    <section id="about" class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.pexels.com/photos/1387166/pexels-photo-1387166.jpeg" alt="Award Ceremony" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 py-5">
                    <h2 class="mb-4">Prestigious Recognition</h2>
                    <p class="lead">Medulla-Soft Technologies has been honored in the 'Innovation in Roads and Highways' category for our groundbreaking contributions to India's infrastructure development.</p>
                    <p>The Build India Infra Awards recognize exceptional projects that drive the nation's progress through technological innovation and sustainable solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <!-- Project 1 -->
            <div class="row mb-5 align-items-center" data-aos="fade-right">
                <div class="col-lg-6">
                    <img src="https://images.pexels.com/photos/6180794/pexels-photo-6180794.jpeg" alt="Traffic Simulation" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <div class="project-card p-4">
                        <h3>Hybrid Traffic Simulation Model</h3>
                        <span class="badge bg-primary mb-3">New Delhi</span>
                        <ul class="list-unstyled">
                            <li class="mb-2">• World's largest citywide traffic simulation model</li>
                            <li class="mb-2">• Reduces emissions and enhances urban mobility</li>
                            <li class="mb-2">• Advanced performance evaluation system</li>
                        </ul>
                        <p>This innovative solution helps optimize traffic flow and reduce queue lengths at intersections through predictive modeling and simulation techniques.</p>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="row mb-5 align-items-center" data-aos="fade-left">
                <div class="col-lg-6 order-lg-2">
                    <img src="https://images.pexels.com/photos/162034/network-bridge-clouds-fog-162034.jpeg" alt="Kalwa Bridge" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="project-card p-4">
                        <h3>Structural Health Monitoring System</h3>
                        <span class="badge bg-primary mb-3">Kalwa Bridge, Thane</span>
                        <ul class="list-unstyled">
                            <li class="mb-2">• Real-time structural assessment system</li>
                            <li class="mb-2">• Advanced corrosion & strain sensors</li>
                            <li class="mb-2">• Predictive maintenance solutions</li>
                        </ul>
                        <p>Our SHM system provides automated monitoring and predictive analytics for infrastructure safety and longevity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Medulla-Soft Technologies Pvt Ltd. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        AOS.init({duration: 1000, once: true});
        gsap.from(".award-badge", {scale: 0, duration: 1.5, ease: "elastic.out(1, 0.3)"});
    </script>
</body>
</html>