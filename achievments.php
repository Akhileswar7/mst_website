<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medulla Soft Technologies - Award-Winning Modelling & Simulation Solutions</title>
    <meta name="description" content="Recognized for excellence in infrastructure innovation. Discover our award-winning modelling and simulation software solutions in India.">
    <meta name="keywords" content="Modelling and Simulation Software, Infrastructure Awards, Structural Health Monitoring, Traffic Simulation, Medulla Soft Technologies">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Vendor CSS Files -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./vendor/aos/aos.css" rel="stylesheet">
    <link href="./vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <style>
        :root {
            --primary-color: #0d92a1;
            --secondary-color: #34b4d7;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('./assets/images/tech-pattern.png') center/cover;
            opacity: 0.1;
        }
        
        .hero-head {
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Award Header */
        .award-header {
            background: linear-gradient(165deg, rgba(52, 180, 215, 0.2), rgba(13, 146, 161, 0.3));
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            margin-top:80px;
        }
        
        .award-badge {
            width: 80px;
            height: auto;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }
        
        /* Project Cards */
        .project-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }
        
        .project-image-box {
            width: 100%;
            height: 300px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        
        .project-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-image-box:hover img {
            transform: scale(1.05);
        }
        
        /* Key Achievements */
        .key-achievement {
            background: rgba(13, 146, 161, 0.1);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 0 4px 4px 0;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-section {
                padding: 100px 0 60px;
            }
            
            .project-card, .project-image-box {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0 40px;
            }
            
            .hero-head {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body class="achievements-page">
    <?php include('includes/header.php'); ?>
    
    <main class="main">
        
        <!-- Build India Infra Award -->
        <div class="award-header">
            <div class="container text-center" data-aos="zoom-in">
                <h1 class="display-4 mb-4">Build India Infra Awards 2024</h1>
                <div class="badge bg-warning text-dark fs-5 mb-4 px-3 py-2">Winner: Innovation in Roads & Highways</div>
                <p class="lead text-dark fw-medium">Recognizing Excellence in Infrastructure Innovation</p>
            </div>
        </div>
        
        <!-- About Award -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-4" data-aos="fade-right">
                        <h2 class="mb-4 text-primary">Prestigious Recognition</h2>
                        <p class="lead">Medulla-Soft Technologies has been honored in the 'Innovation in Roads and Highways' category for our groundbreaking contributions to India's infrastructure development.</p>
                        <p>The Build India Infra Awards recognize exceptional projects that drive the nation's progress through technological innovation and sustainable solutions.</p>
                        <div class="mt-4 key-achievement">
                            <h5>Key Impact</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">• 30% improvement in road construction efficiency</li>
                                <li class="mb-2">• 25% reduction in maintenance costs</li>
                                <li class="mb-0">• Enhanced safety through predictive analytics</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="./assets/images/build-infra-award.jpg" alt="Build India Infra Award Ceremony" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- ASSOCHAM Recognition Section -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="position-relative">
                            <div id="assochamCarousel" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">
                                <div class="carousel-inner rounded">
                                    <div class="carousel-item active">
                                        <img src="./assets/images/assocham-1.jpg" 
                                            class="d-block w-100 img-fluid" 
                                            alt="ASSOCHAM Award Ceremony">
                                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-bottom">
                                            <p class="mb-0">ASSOCHAM Award Ceremony 2024</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/images/assocham-2.jpg" 
                                            class="d-block w-100 img-fluid" 
                                            alt="Award Presentation">
                                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-bottom">
                                            <p class="mb-0">Receiving the ASSOCHAM Excellence Award</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#assochamCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#assochamCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-4" data-aos="fade-left">
                        <div class="ps-lg-4">
                            <h2 class="mb-4 d-flex align-items-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/681/681392.png" 
                                    alt="ASSOCHAM Award" 
                                    class="award-badge me-3">
                                <span>ASSOCHAM Excellence Award 2024</span>
                            </h2>
                            
                            <div class="bg-light p-4 rounded mb-4">
                                <h4 class="text-primary mb-3">Integrated Structural Health Monitoring</h4>
                                <p class="lead">Honored by India's Oldest Apex Commerce Chamber</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2 d-flex align-items-start">
                                        <span class="badge bg-primary me-2 mt-1">✓</span>
                                        Recognized for advanced corrosion & strain sensing technology
                                    </li>
                                    <li class="mb-2 d-flex align-items-start">
                                        <span class="badge bg-primary me-2 mt-1">✓</span>
                                        Pioneer in distributed sensing mechanics implementation
                                    </li>
                                    <li class="mb-2 d-flex align-items-start">
                                        <span class="badge bg-primary me-2 mt-1">✓</span>
                                        Industry-first real-time bridge monitoring solution
                                    </li>
                                </ul>
                                <p class="mb-0">This prestigious award acknowledges our groundbreaking work in infrastructure preservation through intelligent sensor networks and predictive maintenance systems.</p>
                            </div>
                            
                            <div class="bg-primary text-white p-4 rounded">
                                <h5 class="mb-3">Key Achievements:</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-2 d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            98.7% Monitoring Accuracy
                                        </p>
                                        <p class="mb-2 d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            40% Maintenance Cost Reduction
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2 d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            24/7 Structural Integrity Assurance
                                        </p>
                                        <p class="mb-0 d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            AI-powered Predictive Analytics
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="display-5">Our Award-Winning Projects</h2>
                        <p class="lead text-muted">Innovative solutions transforming India's infrastructure</p>
                    </div>
                </div>
                
                <div class="row mb-5 align-items-center" data-aos="fade-up">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="project-card p-4 h-100">
                            <h3 class="mb-3">Hybrid Traffic Simulation Model</h3>
                            <span class="badge bg-primary mb-3">New Delhi</span>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-primary me-2 mt-1">•</span>
                                    World's largest citywide traffic simulation model
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-primary me-2 mt-1">•</span>
                                    Reduces emissions and enhances urban mobility
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-primary me-2 mt-1">•</span>
                                    Advanced performance evaluation system
                                </li>
                            </ul>
                            <p class="mb-0">This innovative solution helps optimize traffic flow and reduce queue lengths at intersections through predictive modeling and simulation techniques.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-image-box">
                            <img src="./assets/images/traffic-new-delhi.png" alt="Traffic Simulation in New Delhi" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center" data-aos="fade-up">
                    <div class="col-lg-6 mb-4 mb-lg-0 order-lg-2">
                        <div class="project-card p-4 h-100">
                            <h3 class="mb-3">Structural Health Monitoring System</h3>
                            <span class="badge bg-primary mb-3">Kalwa Bridge, Thane</span>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-primary me-2 mt-1">•</span>
                                    Real-time structural assessment system
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-primary me-2 mt-1">•</span>
                                    Advanced corrosion & strain sensors
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-primary me-2 mt-1">•</span>
                                    Predictive maintenance solutions
                                </li>
                            </ul>
                            <p class="mb-0">Our SHM system provides automated monitoring and predictive analytics for infrastructure safety and longevity.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-image-box">
                            <img src="./assets/images/kalwa-bridge-SHM.png" alt="Kalwa Bridge Structural Monitoring" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/aos/aos.js"></script>
    <script src="./vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/main.js"></script>
</body>

</html>