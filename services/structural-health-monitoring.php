<?php include("includes/head.php")?>
    <style>
                
        .parallax-hero {
            margin-top: 100px;
            background: linear-gradient(rgba(26, 69, 103, 0.3)), url('./assets/images/shms-banner.jpg') center/cover ;
        }
        .benefit-card {
            transition: transform 0.3s;
            height: 100%;
            border-left: 4px solid #0d6efd;
        }
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .tech-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
        .img-container {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .img-container img {
            transition: transform 0.5s;
        }
        .img-container:hover img {
            transform: scale(1.05);
        }
        .stat-card {
            background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
            color: white;
            border-radius: 10px;
            padding: 20px;
            height: 100%;
        }
    </style>
</head>
<body>
   <?php include('./includes/header.php');?>

     <section id="service-hero" class="service-hero parallax-hero container-fluid">
          <div class="overlay" id="myOverlay"></div>
          <div class="d-flex container">
            <div class="mx-auto d-flex flex-column align-items-center ">
              <h1 class="hero-head display-3 fw-bold">Structural Health Monitoring</h1>
              <p class="lead hero-desc">Real-time intelligence to prevent failures and extend structural lifespan</p>
            </div>
          </div>
    </section>

    <!-- Why SHM Matters -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5">Why Structural Health Monitoring?</h2>
                    <p class="lead">The increasing size and complexity of modern structures demand a new paradigm in monitoring</p>
                    <p>High-rise buildings, stadiums, bridges, and historical monuments are complex systems with multiple interacting components. These structures experience stress from environmental factors, usage patterns, and aging, making continuous monitoring essential for safety and longevity.</p>
                    <div class="alert alert-warning mt-4">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        Structural failures cause billions in damages annually. SHM provides early warning to prevent catastrophic events.
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Complex Structures" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Benefits -->
    <section id="benefits" class="py-5">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Key Benefits of SHM</h2>
                <p>Transformative advantages for building owners and operators</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card benefit-card h-100">
                        <div class="card-body">
                            <i class="bi bi-graph-up tech-icon"></i>
                            <h4>Lifetime Extension</h4>
                            <p>Proactively identify and address structural issues to extend asset lifespan by 20-30%, significantly reducing long-term costs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card h-100">
                        <div class="card-body">
                            <i class="bi bi-shield-check tech-icon text-success"></i>
                            <h4>Enhanced Safety</h4>
                            <p>Continuous monitoring provides early warning of potential failures, protecting both lives and property from catastrophic events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card h-100">
                        <div class="card-body">
                            <i class="bi bi-cash-coin tech-icon text-secondary"></i>
                            <h4>Cost Savings</h4>
                            <p>Reduce maintenance costs by 30-40% through predictive maintenance and avoid expensive emergency repairs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card h-100">
                        <div class="card-body">
                            <i class="bi bi-building-check tech-icon text-warning"></i>
                            <h4>Insurance Advantages</h4>
                            <p>Qualify for reduced insurance premiums (typically 15-25% lower) with documented monitoring systems in place.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card h-100">
                        <div class="card-body">
                            <i class="bi bi-database tech-icon text-danger"></i>
                            <h4>Data-Driven Decisions</h4>
                            <p>Make informed post-disaster assessments with historical performance data, accelerating recovery efforts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card h-100">
                        <div class="card-body">
                            <i class="bi bi-bar-chart-line tech-icon text-info"></i>
                            <h4>Value Enhancement</h4>
                            <p>Monitoring systems increase property value by 5-10% and serve as a unique selling proposition for developers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SHM Statistics -->
    <section class="py-5 text-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <h3 class="display-4 text-white fw-bold">40%</h3>
                        <p>Reduction in maintenance costs with predictive SHM</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <h3 class="display-4 text-white fw-bold">25%</h3>
                        <p>Lower insurance premiums for monitored structures</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <h3 class="display-4 text-white fw-bold">30+</h3>
                        <p>Years lifespan extension for historical monuments</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <h3 class="display-4 text-white fw-bold">0</h3>
                        <p>Catastrophic failures in properly monitored structures</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section id="technology" class="py-5">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Advanced SHM Technologies</h2>
                <p>High-performance autonomous sensing systems for real-time monitoring</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="SHM Technology" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="techAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="bi bi-vibrate me-2"></i> Vibration Sensors
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#techAccordion">
                                <div class="accordion-body">
                                    High-sensitivity accelerometers detect minute vibrations and resonance patterns that indicate structural stress or damage. Our MEMS-based sensors achieve 0.1mg resolution with wireless data transmission.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="bi bi-strain me-2"></i> Strain Gauges
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                                <div class="accordion-body">
                                    Fiber-optic and electrical resistance gauges measure micro-deformations in structural elements with 1με precision. Embedded sensors provide continuous load monitoring without affecting structural integrity.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    <i class="bi bi-thermometer-high me-2"></i> Environmental Sensors
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                                <div class="accordion-body">
                                    Temperature, humidity, and corrosion sensors track environmental factors contributing to material degradation. Our multi-parameter nodes provide comprehensive microclimate analysis.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    <i class="bi bi-camera-fill me-2"></i> Computer Vision
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                                <div class="accordion-body">
                                    AI-powered image analysis detects cracks, deformations, and other visual indicators of structural issues with 99.2% accuracy, even in low-light conditions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section id="applications" class="py-5 bg-light">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>SHM Applications</h2>
                <p>Protecting critical infrastructure across sectors</p>
            </div>
            <div class="text-center mb-5">
                <h2></h2>
                <p class="lead"></p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="img-container">
                            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="High-Rise Buildings">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">High-Rise Buildings</h5>
                            <p class="card-text">Monitor sway, foundation settlement, and facade integrity in real-time to ensure skyscraper safety and comfort.</p>
                            <ul>
                                <li>Wind response analysis</li>
                                <li>Creep and shrinkage monitoring</li>
                                <li>Elevator shaft alignment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="img-container">
                            <img src="https://images.unsplash.com/photo-1471295253337-3ceaaedca402?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Bridges">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bridges & Infrastructure</h5>
                            <p class="card-text">Continuous load monitoring detects fatigue cracks and corrosion before they become critical safety issues.</p>
                            <ul>
                                <li>Bearing wear monitoring</li>
                                <li>Scour detection</li>
                                <li>Traffic load analysis</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="img-container">
                            <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Historical Monuments">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Historical Monuments</h5>
                            <p class="card-text">Non-invasive monitoring preserves heritage structures while detecting subtle movements and material decay.</p>
                            <ul>
                                <li>Micro-vibration analysis</li>
                                <li>Material degradation tracking</li>
                                <li>Seismic protection</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section id="process" class="py-5">
        <div class="container">
             <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>SHM Implementation Process</h2>
                <p>A systematic approach to structural safety</p>
            </div>
            <div class="timeline-wrapper">
                <div class="col-lg-12">
                     <div class="timeline">
                        <div class="timeline-line"></div>
                        <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h2>Structural Assessment</h2>
                            <p>Detailed evaluation of critical components and potential failure modes using advanced simulation tools.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h2>Sensor Network Design</h2>
                            <p>Optimal placement of wireless sensors to capture all relevant structural parameters with minimal intrusion.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h2>System Installation</h2>
                            <p>Non-destructive installation of monitoring equipment by certified technicians with structural engineering oversight.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h2>Data Integration</h2>
                            <p>Cloud-based platform setup with real-time dashboards and automated alert systems for stakeholders.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-number">5</div>
                        <div class="timeline-content">
                            <h2>Ongoing Monitoring</h2>
                            <p>24/7 monitoring with quarterly health reports and immediate notifications for any anomalies detected.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('./includes/footer.php');?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/aos/aos.js"></script>
    <script src="../vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/script.js"></script>
</body>

</html>
  
