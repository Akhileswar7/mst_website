<?php include("includes/head.php")?>
<style>
    .parallax-hero {
        margin-top: 100px;
        background: linear-gradient(rgba(26, 69, 103, 0.3)), url('./assets/images/pedestrian-banner.jpg') center/cover ;
    }
    .hero-section {
        background-size: cover;
        background-position: center;
        color: white;
        padding: 120px 0;
        margin-bottom: 30px;
    }

    .modeling .feature-card {
        transition: transform 0.3s;
        border-left: 4px solid var(--primary-blue);
        height: 100%;
    }

    .modeling .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .modeling .model-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--primary-blue);
    }

    .pep-overview .overview-icon {
        color: var(--primary-blue);
        margin-right: 8px;
    }

    .modeling .phase-card {
        border:2px solid  var(--light-blue);
        border-radius: 10px;
        padding: 20px;
        height: 100%;
    }

    .modeling-pills .nav-link.active {
        background-color: var(--primary-blue);
        margin: 0 30px;
    }

    .modeling-pills .nav-link:not(.active):is(:hover,:focus) {
        color: var(--light-blue);
        scale: 1.1;
    }

    .modeling-pills .nav-link {
        color: var(--primary-blue);
         padding:8px 12px;
        margin: 0 12px;
    }

    .img-container {
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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

    <!-- Hero Section -->
    <section id="service-hero" class="service-hero parallax-hero container-fluid">
        <div class="overlay" id="myOverlay"></div>
        <div class="d-flex container">
            <div class="mx-auto d-flex flex-column align-items-center ">
                <h1 class="hero-head display-3 fw-bold">Pedestrian Evacuation Planning</h1>
                <p class="hero-desc lead">Advanced crowd modeling for safer emergency egress</p>
            </div>
    </section>

    <section id="pep-overview" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5">Why Pedestrian Evacuation Planning?</h2>
                    <p class="lead">Critical for safety during emergencies in crowded spaces</p>
                    <p>Emergency situations like earthquakes, fires, or security threats create dangerous crowd
                        movements that can lead to injuries or fatalities. Effective evacuation planning is essential to
                        guide people to safety quickly and efficiently.</p>

                    <div class="alert alert-danger mt-4">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        Proper evacuation planning can reduce evacuation times by up to 40% and prevent crowd crushes in
                        emergency scenarios.
                    </div>

                    <h4 class="mt-4">Key Challenges Addressed:</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-people-fill overview-icon"></i>
                            <strong>Bottleneck Identification:</strong> Locating potential choke points in pedestrian
                            flow
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-speedometer2 overview-icon"></i>
                            <strong>Egress Optimization:</strong> Calculating optimal evacuation routes and timing
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-building-exclamation overview-icon"></i>
                            <strong>Facility Assessment:</strong> Evaluating structural capacity for emergency loads
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-signpost-split overview-icon"></i>
                            <strong>Wayfinding Solutions:</strong> Designing effective signage and guidance systems
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="img-container">
                        <img src="../assets/images/banner-1.png"
                            alt="Crowd Evacuation" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modeling Approaches -->
    <section id="modeling" class="py-5 bg-light">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2 >Crowd Modeling Approaches</h2>
                <p>Advanced simulation techniques for accurate evacuation planning</p>
            </div>

            <ul class="nav nav-pills modeling-pills mb-4 justify-content-center" id="modelTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="micro-tab" data-bs-toggle="pill" data-bs-target="#micro"
                        type="button">Microsimulation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="macro-tab" data-bs-toggle="pill" data-bs-target="#macro"
                        type="button">Macrosimulation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="hybrid-tab" data-bs-toggle="pill" data-bs-target="#hybrid"
                        type="button">Hybrid Models</button>
                </li>
            </ul>

            <div class="tab-content" id="modelTabsContent">
                <div class="tab-pane fade show active" id="micro" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card feature-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-person-bounding-box model-icon"></i> Agent-Based Modeling</h4>
                                    <p>Simulates individual pedestrian behaviors and decision-making during evacuations
                                        with realistic movement patterns.</p>

                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Individual decision-making algorithms</li>
                                        <li>Variable speed and mobility parameters</li>
                                        <li>Social group interactions</li>
                                        <li>Panic behavior modeling</li>
                                    </ul>

                                    <div class="mt-4">
                                        <h5>Applications:</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-info">Stadiums</span>
                                            <span class="badge bg-info">Airports</span>
                                            <span class="badge bg-info">Shopping Malls</span>
                                            <span class="badge bg-info">Metro Stations</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card feature-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-diagram-3 model-icon text-success"></i> Cellular Automata</h4>
                                    <p>Grid-based approach modeling pedestrian movement through discrete space and time
                                        intervals.</p>

                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>High computational efficiency</li>
                                        <li>Clear visualization of density patterns</li>
                                        <li>Rule-based movement algorithms</li>
                                        <li>Quick scenario testing</li>
                                    </ul>

                                    <div class="mt-4">
                                        <h5>Technical Specifications:</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Grid Resolution</th>
                                                    <td>40cm × 40cm typical</td>
                                                </tr>
                                                <tr>
                                                    <th>Speed Range</th>
                                                    <td>0.6-1.7 m/s adjustable</td>
                                                </tr>
                                                <tr>
                                                    <th>Max Agents</th>
                                                    <td>50,000+ simultaneous</td>
                                                </tr>
                                                <tr>
                                                    <th>Output Metrics</th>
                                                    <td>Density, flow, velocity, evacuation time</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="macro" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card feature-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-water model-icon text-danger"></i> Fluid Dynamics Models</h4>
                                    <p>Treats crowds as continuous flows with density, speed and flow relationships
                                        similar to fluids.</p>

                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Large-scale crowd analysis</li>
                                        <li>Density-flow relationships</li>
                                        <li>Quick area-wide assessments</li>
                                        <li>Infrastructure capacity analysis</li>
                                    </ul>

                                    <div class="mt-4">
                                        <h5>Applications:</h5>
                                        <div class="img-container">
                                            <img src="https://images.unsplash.com/photo-1470004914212-05527e49370b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                class="img-fluid rounded" alt="Fluid Dynamics Model">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card feature-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-node-plus model-icon text-info"></i> Network Models</h4>
                                    <p>Represents facilities as nodes and links to analyze system-wide evacuation
                                        performance.</p>

                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Building connectivity analysis</li>
                                        <li>Route capacity calculations</li>
                                        <li>Emergency exit optimization</li>
                                        <li>Multi-floor integration</li>
                                    </ul>

                                    <div class="mt-4">
                                        <h5>Technical Specifications:</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Node Types</th>
                                                    <td>Rooms, corridors, stairs, exits</td>
                                                </tr>
                                                <tr>
                                                    <th>Link Parameters</th>
                                                    <td>Width, length, capacity, flow rate</td>
                                                </tr>
                                                <tr>
                                                    <th>Analysis Methods</th>
                                                    <td>Shortest path, capacity constrained</td>
                                                </tr>
                                                <tr>
                                                    <th>Output Metrics</th>
                                                    <td>Clearance time, queue lengths, bottlenecks</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="hybrid" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4><i class="bi bi-lightning-charge model-icon text-danger"></i> Multi-Model Integration</h4>
                                    <p class="lead">Combining micro and macro approaches for comprehensive analysis</p>
                                    <p>Our hybrid modeling approach integrates agent-based detail with network-level
                                        analysis to provide both granular behavior insights and system-wide performance
                                        metrics.</p>

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="phase-card">
                                                <h5><i class="bi bi-zoom-in benefit-icon"></i> Detailed Areas</h5>
                                                <p>Agent-based modeling for critical zones like exits, stairwells, and
                                                    bottlenecks</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="phase-card">
                                                <h5><i class="bi bi-globe benefit-icon"></i> Overall Facility</h5>
                                                <p>Network modeling for complete building analysis and route
                                                    optimization</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <h5>Hybrid Model Benefits:</h5>
                                        <div class="d-flex flex-wrap justify-content-center gap-3">
                                            <div class="text-center p-3">
                                                <i class="bi bi-speedometer2"
                                                    style="font-size: 2rem; color: var(--primary-blue);"></i>
                                                <p>Balanced computational load</p>
                                            </div>
                                            <div class="text-center p-3">
                                                <i class="bi bi-clipboard2-data text-success "
                                                    style="font-size: 2rem; color: var(--primary-blue);"></i>
                                                <p>Comprehensive data outputs</p>
                                            </div>
                                            <div class="text-center p-3">
                                                <i class="bi bi-clock-history text-info"
                                                    style="font-size: 2rem; color: var(--primary-blue);"></i>
                                                <p>Faster scenario testing</p>
                                            </div>
                                            <div class="text-center p-3">
                                                <i class="bi bi-palette text-warning"
                                                    style="font-size: 2rem; color: var(--primary-blue);"></i>
                                                <p>Customizable detail levels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PEC Benefits -->
    <section id="benefits" class="py-5">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Pedestrian Evacuation Model (PEC) Benefits</h2>
                <p>Comprehensive emergency preparedness through advanced modeling</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5><i class="bi bi-shield-check benefit-icon"></i> Disaster Prevention</h5>
                            <p>Identify and mitigate potential hazards before emergencies occur through facility design
                                optimization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5><i class="bi bi-graph-down benefit-icon"></i> Risk Mitigation</h5>
                            <p>Reduce severity and consequences of emergencies through evidence-based planning.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5><i class="bi bi-building-gear benefit-icon"></i> Capacity Building</h5>
                            <p>Enhance organizational preparedness through staff training and resource allocation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5><i class="bi bi-lightning-charge benefit-icon"></i> Emergency Preparedness</h5>
                            <p>Develop effective response protocols through realistic scenario testing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5><i class="bi bi-activity benefit-icon"></i> Rapid Response</h5>
                            <p>Enable prompt reaction to developing situations through predefined action plans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5><i class="bi bi-clipboard2-pulse benefit-icon"></i> Impact Assessment</h5>
                            <p>Evaluate potential disaster effects through comprehensive simulation analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="py-5">
        <div class="container">
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Evacuation Planning Process</h2>
                <p>Methodical approach to creating effective evacuation strategies</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline">
                        <div class="timeline-line"></div>

                        <div class="timeline-item">
                            <div class="timeline-number">1</div>
                            <div class="timeline-content">
                                <h2>Facility Assessment</h2>
                                <p>Comprehensive evaluation of physical layout, capacity, and existing safety measures.
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">2</div>
                            <div class="timeline-content">
                                <h2>Data Collection</h2>
                                <p>Gathering pedestrian flow data, occupancy patterns, and emergency protocols.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">3</div>
                            <div class="timeline-content">
                                <h2>Model Development</h2>
                                <p>Creating customized simulation models matching facility characteristics.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">4</div>
                            <div class="timeline-content">
                                <h2>Scenario Testing</h2>
                                <p>Running multiple emergency scenarios to identify weaknesses and opportunities.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">5</div>
                            <div class="timeline-content">
                                <h2>Plan Optimization</h2>
                                <p>Refining evacuation routes, signage, and procedures based on simulation results.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">6</div>
                            <div class="timeline-content">
                                <h2>Training & Implementation</h2>
                                <p>Staff training and physical implementation of recommended improvements.</p>
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