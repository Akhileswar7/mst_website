<?php include("includes/head.php")?>
<style>
     .parallax-hero {
        margin-top: 100px;
            background: linear-gradient(rgba(26, 69, 103, 0.3)), url("./assets/images/bhms-banner.jpg") center /cover;
        }
        .sensor-card {
            transition: transform 0.3s;
            border-left: 4px solid var(--primary-blue);
            height: 100%;
        }
        .sensor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .tech-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-blue);
        }
        .feature-icon {
            color: var(--primary-blue);
            margin-right: 8px;
        }
        .specs-table {
            font-size: 0.9rem;
        }
        .specs-table th {
            background-color: var(--light-blue);
        }
        .sensor-pills .nav-link.active {
        background-color: var(--primary-blue);
        margin: 0 30px;
    }

    .sensor-pills .nav-link:not(.active):is(:hover,:focus) {
        color: var(--light-blue);
        scale: 1.1;
    }

    .sensor-pills .nav-link {
        color: var(--primary-blue);
         padding:8px 12px;
        margin: 0 12px;
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
        
    </style>
</head>
<body>

    <?php include('./includes/header.php');?>

    <section id="service-hero" class="service-hero parallax-hero container-fluid">
          <div class="overlay" id="myOverlay"></div>
          <div class="d-flex container">
            <div class="mx-auto d-flex flex-column align-items-center ">
                <h1 class="hero-head display-3 fw-bold">Bridge Health Monitoring System</h1>
               <p class="lead hero-desc">Advanced sensor technology for real-time structural integrity assessment</p>
            </div>
          </div>
    </section>
   

    <!-- Overview Section -->
    <section id="overview" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>What is Bridge Health Monitoring?</h2>
                    <p class="lead">Continuous structural assessment through advanced sensor networks</p>
                    <p>Bridge Health Monitoring (BHMS) is a sophisticated process of damage detection and structural characteristic analysis by monitoring critical engineering parameters. This involves installing an array of sensors that detect and notify relevant personnel about any structural changes.</p>
                    
                    <div class="alert alert-primary mt-4">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        BHMS provides continuous surveillance from pre-construction through the entire lifespan of the structure, including historical bridges, ensuring optimal structural integrity.
                    </div>
                    
                    <h4 class="mt-4">How BHMS Works:</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill feature-icon"></i>
                            <strong>Data Collection:</strong> Network of sensors continuously monitors structural parameters
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill feature-icon"></i>
                            <strong>Feature Extraction:</strong> Identifies damage-sensitive characteristics from sensor data
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill feature-icon"></i>
                            <strong>Health Assessment:</strong> Analyzes data to determine current structural condition
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill feature-icon"></i>
                            <strong>Actionable Insights:</strong> Recommends maintenance or interventions when needed
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="img-container">
                        <img src="../assets/images/banner-4.png" alt="Bridge Monitoring" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sensor Systems -->
    <section id="sensors" class="py-5 bg-light">
        <div class="container">
            <div  class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Advanced BHMS Sensor Systems</h2>
                <p>Precision monitoring solutions for comprehensive bridge assessment</p>
            </div>
            
            <ul class="nav nav-pills sensor-pills mb-4 justify-content-center" id="sensorTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="corrosion-tab" data-bs-toggle="pill" data-bs-target="#corrosion" type="button">Corrosion Sensors</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="deformation-tab" data-bs-toggle="pill" data-bs-target="#deformation" type="button">Deformation Sensors</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="dynamic-tab" data-bs-toggle="pill" data-bs-target="#dynamic" type="button">Dynamic Sensors</button>
                </li>
            </ul>
            
            <div class="tab-content" id="sensorTabsContent">
                <div class="tab-pane fade show active" id="corrosion" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card sensor-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-droplet-half tech-icon text-primary"></i> CorroWatch Multisensor</h4>
                                    <p>Integrated into concrete cover of new constructions to measure critical corrosion parameters with four steel anodes and one noble metal cathode.</p>
                                    
                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Adjustable anode height for concrete cover thickness</li>
                                        <li>Current monitoring between anodes and cathode</li>
                                        <li>Specialized handheld ammeter or data logger compatible</li>
                                        <li>Current spikes indicate corrosion initiation</li>
                                    </ul>
                                    
                                    <div class="mt-4">
                                        <h5>Installation:</h5>
                                        <div class="img-container">
                                            <img src="../assets/images/banner-1.png" class="img-fluid rounded" alt="CorroWatch Installation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card sensor-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-shield-shaded tech-icon text-danger"></i> CorroRisk Probes</h4>
                                    <p>Designed for existing structures with measurement electrodes installed at predetermined depths within the concrete cover layer.</p>
                                    
                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Early corrosion prediction before visible signs appear</li>
                                        <li>Positioned between surface and outermost reinforcement</li>
                                        <li>Special ohm-ampere meter or custom data logger compatible</li>
                                        <li>Same measurement principles as CorroWatch</li>
                                    </ul>
                                    
                                    <div class="mt-4">
                                        <h5>Technical Specifications:</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered specs-table">
                                                <tr>
                                                    <th>Measurement Range</th>
                                                    <td>0-1000 μA</td>
                                                </tr>
                                                <tr>
                                                    <th>Resolution</th>
                                                    <td>1 μA</td>
                                                </tr>
                                                <tr>
                                                    <th>Operating Temp</th>
                                                    <td>-20°C to +60°C</td>
                                                </tr>
                                                <tr>
                                                    <th>Probe Material</th>
                                                    <td>Stainless steel housing</td>
                                                </tr>
                                                <tr>
                                                    <th>Installation</th>
                                                    <td>Drill-and-epoxy method</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="deformation" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card sensor-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-rulers tech-icon text-info"></i> SOFO Standard Deformation Sensor</h4>
                                    <p>For surface mounting or embedding in concrete with 20-year proven track record in structural deformation monitoring.</p>
                                    
                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Converts distance variations into optical path imbalances</li>
                                        <li>Two-part design: active (measurement) and passive (connection)</li>
                                        <li>E-2000 connector with protective cover</li>
                                        <li>Quick installation without calibration</li>
                                    </ul>
                                    
                                    <div class="mt-4">
                                        <h5>Technical Specifications:</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered specs-table">
                                                <tr>
                                                    <th>Active Zone Length</th>
                                                    <td>25cm-10m (standard), up to 20m custom</td>
                                                </tr>
                                                <tr>
                                                    <th>Passive Zone Length</th>
                                                    <td>1m-100m (standard), up to 2000m custom</td>
                                                </tr>
                                                <tr>
                                                    <th>Measurement Range</th>
                                                    <td>±0.5% to ±1% of LA</td>
                                                </tr>
                                                <tr>
                                                    <th>Precision</th>
                                                    <td>0.2% of measured deformation</td>
                                                </tr>
                                                <tr>
                                                    <th>Resolution</th>
                                                    <td>2μm RMS</td>
                                                </tr>
                                                <tr>
                                                    <th>Waterproof Rating</th>
                                                    <td>5 bars (15 bars with extra protection)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card sensor-card h-100">
                                <div class="card-body">
                                    <h4><i class="bi bi-speedometer2 tech-icon text-warning"></i> MuST FBG Deformation Sensor</h4>
                                    <p>Converts static/dynamic distance variations into Fiber Bragg Grating wavelength changes for precise measurement.</p>
                                    
                                    <h5 class="mt-4">Key Features:</h5>
                                    <ul>
                                        <li>Active part with pre-stressed FBG for deformation measurement</li>
                                        <li>Passive part for connection to reading unit</li>
                                        <li>Optional temperature compensation FBG</li>
                                        <li>Single-ended, double-ended, or chained arrangements</li>
                                    </ul>
                                    
                                    <div class="mt-4">
                                        <h5>Technical Specifications:</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered specs-table">
                                                <tr>
                                                    <th>Active Zone Length</th>
                                                    <td>20cm-2m</td>
                                                </tr>
                                                <tr>
                                                    <th>Passive Zone Length</th>
                                                    <td>1m-200m (extendable)</td>
                                                </tr>
                                                <tr>
                                                    <th>Pre-tensioning</th>
                                                    <td>0.5% of active zone length</td>
                                                </tr>
                                                <tr>
                                                    <th>Strain Range</th>
                                                    <td>-0.5% to +0.75%</td>
                                                </tr>
                                                <tr>
                                                    <th>Resolution</th>
                                                    <td>0.2με (2με accuracy)</td>
                                                </tr>
                                                <tr>
                                                    <th>Connectors</th>
                                                    <td>E-2000 AC (8°) or custom</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="dynamic" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center ">Dynamic Monitoring Solutions Coming Soon</h4>
                                    <p class="text-center">We're developing advanced accelerometers and vibration sensors for real-time dynamic response monitoring.</p>
                                    <div class="text-center my-4">
                                        <i class="bi bi-tools text-secondary" style="font-size: 3rem;"></i>
                                    </div>
                                    <p class="text-center">Contact us to be notified when our dynamic monitoring solutions become available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-5">
        <div class="container">
            <div  class="container section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>BHMS Operational Benefits</h2>
                <p >Transformative advantages for bridge owners and operators</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <i class="bi bi-shield-check tech-icon text-success"></i>
                            <h4>Enhanced Safety</h4>
                            <p>Continuous monitoring provides early warning of potential structural issues before they become critical safety concerns.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <i class="bi bi-cash-stack tech-icon text-danger"></i>
                            <h4>Cost Reduction</h4>
                            <p>Predictive maintenance reduces repair costs by 30-50% compared to reactive approaches, extending asset lifespan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <i class="bi bi-graph-up-arrow tech-icon"></i>
                            <h4>Data-Driven Decisions</h4>
                            <p>Historical performance data enables informed maintenance planning and post-event damage assessment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <i class="bi bi-building-down tech-icon text-info"></i>
                            <h4>Downtime Minimization</h4>
                            <p>Targeted interventions based on actual condition reduce unnecessary closures and traffic disruptions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-text tech-icon text-secondary"></i>
                            <h4>Regulatory Compliance</h4>
                            <p>Documented monitoring satisfies increasing regulatory requirements for critical infrastructure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <i class="bi bi-clipboard2-pulse tech-icon text-warning"></i>
                            <h4>Performance Benchmarking</h4>
                            <p>Establish baseline behavior and detect anomalies through continuous data collection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Process -->
   <section id="process" class="py-5">
  <div class="container">
    <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
      <h2>Structural Assessment Process</h2>
      <p >Systematic approach to bridge health monitoring</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="timeline">
          <div class="timeline-line"></div>

          <div class="timeline-item">
            <div class="timeline-number">1</div>
            <div class="timeline-content">
              <h2>Structural Assessment</h2>
              <p>Detailed evaluation of bridge components, materials, and potential failure modes through visual inspection and non-destructive testing.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-number">2</div>
            <div class="timeline-content">
              <h2>Sensor Network Design</h2>
              <p>Strategic placement planning for optimal sensor coverage based on structural analysis and monitoring objectives.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-number">3</div>
            <div class="timeline-content">
              <h2>System Installation</h2>
              <p>Non-invasive sensor deployment by certified technicians with structural engineering oversight.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-number">4</div>
            <div class="timeline-content">
              <h2>Calibration & Commissioning</h2>
              <p>System validation and baseline establishment under known loading conditions.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-number">5</div>
            <div class="timeline-content">
              <h2>Data Integration</h2>
              <p>Cloud-based platform setup with real-time dashboards and automated alert thresholds.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-number">6</div>
            <div class="timeline-content">
              <h2>Ongoing Monitoring</h2>
              <p>24/7 surveillance with periodic health reports and immediate anomaly notifications.</p>
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
  