<?php include("includes/head.php")?>
    <style>
       
        .parallax-hero {
            margin-top:100px;
            background: linear-gradient(rgba(26, 69, 103, 0.3)), url('./assets/images/water-banner.jpg') center /cover;
        }
        .benefit-card {
            transition: transform 0.3s;
            height: 100%;
            border: 1px solid blue;
        }
        .benefit-card:hover {
            transform: translateY(-10px);
        }
        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
        .img-container {
            overflow: hidden;
            border-radius: 10px;
        }
        .img-container img {
            transition: transform 0.5s;
        }
        .img-container:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    
    <?php include('./includes/header.php');?>

     <section id="service-hero" class="service-hero parallax-hero container-fluid">
          <div class="overlay" id="myOverlay"></div>
          <div class="d-flex container">
            <div class="mx-auto d-flex flex-column align-items-center ">
             <h1 class="display-3 fw-bold hero-head">Inland Water Transport Solutions</h1>
            <p class="lead hero-desc">Transforming logistics through sustainable waterway networks</p>
            </div>
          </div>
    </section>

    
    <!-- Why Inland Water Transport -->
    <section id="benefits" class="py-5 bg-light">
        <div class="container">
             <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Introduction</h2>
            </div>
            <div class="my-5">
                <h2 class="display-6">Why Choose Inland Water Transport?</h2>
                <p class="lead">The most sustainable and cost-effective logistics solution</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card benefit-card shadow">
                        <div class="card-body text-center">
                            <div class="service-icon">🚢</div>
                            <h4>Cost Effective</h4>
                            <p>Water transport is significantly cheaper than road or rail for bulk cargo, with approximately 1/5th the fuel consumption per ton-km.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card shadow">
                        <div class="card-body text-center">
                            <div class="service-icon">🌱</div>
                            <h4>Eco-Friendly</h4>
                            <p>Produces 85% less CO2 emissions compared to road transport and reduces road congestion and associated pollution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card shadow">
                        <div class="card-body text-center">
                            <div class="service-icon">⚡</div>
                            <h4>Energy Efficient</h4>
                            <p>Moves 1 ton of freight 647 km per gallon of fuel, compared to 477 km for rail and 145 km for trucks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Our Comprehensive Services</h2>
                <p class="lead">End-to-end solutions for inland water transport development</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-4 img-container">
                                <img src="../assets/images/banner-1.png" class="img-fluid rounded-start h-100 w-100" alt="Survey">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Waterway Surveys & Analysis</h5>
                                    <ul>
                                        <li>Origin-Destination Traffic Surveys</li>
                                        <li>Mid-Block Counts and User Shift Surveys</li>
                                        <li>Comprehensive Secondary Data Analysis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-4 img-container">
                                <img src="../assets/images/banner-2.png" class="img-fluid rounded-start h-100 w-100" alt="Bathymetric">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Bathymetric & Geotechnical Surveys</h5>
                                    <ul>
                                        <li>High-precision Bathymetric surveys (WGS-84 datum)</li>
                                        <li>Seismic and Side Scan Sonar surveys</li>
                                        <li>Soil Sampling and Geotechnical investigations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-4 img-container">
                                <img src="../assets/images/banner-1.png" class="img-fluid rounded-start h-100 w-100" alt="Environmental">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Environmental Compliance</h5>
                                    <ul>
                                        <li>Environmental Impact Assessments</li>
                                        <li>Technical approvals from NCSCM, MoEF</li>
                                        <li>Coastal Regulation Zone clearances</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-4 img-container">
                                <img src="../assets/images/banner-3.png" class="img-fluid rounded-start h-100 w-100" alt="Planning">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Waterway Development Planning</h5>
                                    <ul>
                                        <li>Feasibility studies and route optimization</li>
                                        <li>Terminal and port development planning</li>
                                        <li>Multi-modal integration strategies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Importance Section -->
    <section id="importance" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>The Strategic Importance of Inland Water Transport</h2>
                    <p class="lead">A game-changer for sustainable logistics infrastructure</p>
                    <div class="accordion mt-4" id="importanceAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Infrastructure Utilization
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#importanceAccordion">
                                <div class="accordion-body">
                                    Waterways represent ready-built natural infrastructure requiring minimal capital investment compared to building new roads or railways. They can be immediately utilized with proper surveys and minor modifications.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Economic Benefits
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#importanceAccordion">
                                <div class="accordion-body">
                                    Developing waterways can reduce logistics costs from 18% of GDP to 12%, saving billions annually. It enables movement of oversized cargo (like wind turbine blades) that's impossible by road.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Environmental Advantages
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#importanceAccordion">
                                <div class="accordion-body">
                                    Water transport emits only 20-30 grams of CO2 per ton-km compared to 60-150 grams for trucks. It reduces road maintenance costs and prevents thousands of truck-related accidents annually.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="img-container">
                        <img src="../assets/images/banner-1.png" alt="Inland Water Transport" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cargo Types -->
    <section class="py-5">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <!-- <h2>Introduction</h2> -->
            </div>
            <div class="mb-5">
                <h2>Ideal Cargo for Water Transport</h2>
                <p class="lead">Maximizing efficiency for specific freight types</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="service-icon">⛽</div>
                            <h5>Bulk Commodities</h5>
                            <p>Coal, minerals, grains, fertilizers, and other non-perishable bulk goods</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="service-icon">🏗️</div>
                            <h5>Construction Materials</h5>
                            <p>Cement, sand, steel, and other heavy building materials</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="service-icon">🛢️</div>
                            <h5>Petroleum Products</h5>
                            <p>Crude oil, refined products, and liquid chemicals</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <div class="service-icon">🚛</div>
                            <h5>Oversized Cargo</h5>
                            <p>Heavy machinery, wind turbine components, and large industrial equipment</p>
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