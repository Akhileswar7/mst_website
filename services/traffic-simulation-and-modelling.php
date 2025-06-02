<?php include("includes/head.php")?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="../vendor/leaflet/leaflet.css">
<style>
  .parallax-hero {
    margin-top:100px;
    background: linear-gradient(rgba(26, 69, 103, 0.3)), url('./assets/images/traffic-simulation-banner.jpg')  ;
  }
  .card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s ease-in-out;
  }

  .card i {
    color: var(--accent-color);
  }

  .card:hover {
    transform: translateY(-5px);
  }


  #delhiMap {
    height: 400px;
    border-radius: 10px;
  }

  .section-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }

  .framework-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
  }

  .framework-card {
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .framework-card h3 {
    color: var(--default-color);
    margin-bottom: 15px;
    border-left: 4px solid var(--light-blue);
    padding-left: 10px;
  }

  .implementation-section {
    padding: 4rem 0;
    border-bottom: 3px solid #f0f0f0;
  }

  

  .tech-stack {
    border-left: 4px solid var(--light-blue);
    padding-left: 1rem;
    margin: 2rem 0;
  }

  .metric-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
  }

  .metric-item {
    text-align: center;
    padding: 1rem;
    background: rgba(122, 122, 122, 0.28);
    border-radius: 8px;
  }
  .outcome-card {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    height: 100%;
  }

  .card-icon {
    font-size: 2rem;
    color: var(--primary-blue);
    margin-bottom: 1rem;
  }

  .outcome-card .metric {
    font-size: 2.5rem;
    font-weight: bold;
    color: var(--primary-blue);
    margin: 1rem 0;
  }

  .outcome-list {
    list-style: none;
    padding-left: 0;
    text-align: left;
  }

  .outcome-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
  }

  .outcome-list li:last-child {
    border-bottom: none;
  }
  .approach-card {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 10px;
    border-left: 4px solid var(--light-blue);
  }

  .results-card {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  }

  .results-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    text-align: center;
  }

  .result-value {
    font-size: 2rem;
    font-weight: bold;
    color: var(--primary-blue);
  }

  .projects-card {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    border: 1px solid #eee;
  }

  .project-item {
    display: flex;
    gap: 1rem;
    align-items: center;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
  }

  .metrics-card {
    background: var(--light-blue);
    color: white;
    padding: 2rem;
    border-radius: 10px;
    text-align: center;
  }

  .metric-value {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
  }

  .card-icon {
    font-size: 1.5rem;
    color: var(--primary-blue);
    margin-bottom: 1rem;
  }
</style>
</head>

<body>

  <?php include('./includes/header.php');?>

  <main class="traffic-simulation-and-modelling-page">

    <section id="service-hero" class="service-hero parallax-hero container-fluid">
      <div class="overlay" id="myOverlay"></div>
      <div class="d-flex container">
        <div class="mx-auto d-flex flex-column align-items-center ">
          <h1 class="display-3 fw-bold hero-head">Traffic Simulation & Modelling</h1>
          <p class="mb-4 hero-desc">Creating smarter, safer cities with cutting-edge hybrid simulation technology.</p>
        </div>
      </div>
    </section>

    <div class="container card mt-3 border-primary">
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p class="lead">"Medulla Soft leads India's smart mobility transformation through world-class simulation
            technology, combining global expertise with localized solutions to create congestion-free cities."</p>
          <footer class="blockquote-footer mt-3">Featured in <cite>Urban Mobility Report 2023</cite></footer>
        </blockquote>
      </div>
    </div>

    <section class="intro">
      <section class="container col-xxl-12 px-2">
        <div class="container section-title" data-aos="fade-up">
          <h2>Introduction</h2>
        </div>
        <div class="row flex-lg-row-reverse align-items-center ">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="./assets/images/Traffic-Simulation-hero.jpg" class="d-block mx-lg-auto img-fluid"
              alt="Bootstrap Themes" width="400" height="200" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3" class="section-title">What is Traffic Simulation? </h1>
            <p class="lead">Traffic simulation is a digital method to recreate real-world traffic scenarios using
              computer
              models. It helps us predict how vehicles, pedestrians, and infrastructure interact under different
              conditions.
            </p>
          </div>
        </div>
      </section>

      <section class="container col-xxl-12 px-2 ">
        <div data-aos="fade-up">
          <h1 class=" display-6 fw-bold lh-2 mb-3 pb-3">Why Use Traffic Simulation?</h1>
        </div>
        <div class="flex-lg-column align-items-center ">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 text-center p-3">
                <i class="bi bi-bar-chart-line display-4  mb-2"></i>
                <h5>Forecast Congestion</h5>
                <p>Analyze traffic hotspots and avoid future bottlenecks.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 text-center p-3">
                <i class="bi bi-tools text-warning display-4  mb-2"></i>
                <h5>Design Infrastructure</h5>
                <p>Plan smarter infrastructure with data-driven insights.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 text-center p-3">
                <i class="bi bi-shield-check text-success display-4  mb-2"></i>
                <h5>Improve Safety</h5>
                <p>Identify high-risk zones and improve traffic safety.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section>
      <div class="container section-title" data-aos="fade-up">
        <h2>Smart Urban Mobility Solutions</h2>
        <p>Combining global expertise with localized traffic management strategies</p>
      </div>
      <div class="container">
        <div id="challenge" class="row g-4 align-items-center">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <i class="fas fa-globe section-icon text-primary"></i>
                <h3>Global Urban Challenge</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <i class="fas fa-car-crash text-danger me-2"></i>
                    $1.4T annual global congestion cost
                  </li>
                  <li class="list-group-item">
                    <i class="fas fa-city text-info me-2"></i>
                    68% population in cities by 2050 (UN)
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <i class="fas fa-handshake section-icon text-success"></i>
                <h3>Our Commitment</h3>
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3 border rounded">
                      <small>Capacity Built</small>
                      <div class="h4 mb-0">15+ Years</div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border rounded">
                      <small>Partnerships</small>
                      <div class="h4 mb-0">20+ Global</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container section-title" data-aos="fade-up">
        <h2>City Decongestion Solutions</h2>
        <p>Advanced Traffic Simulation Technology</p>
      </div>
      <div class="container framework-section">
        <div class="framework-card">
          <h3>Problem Identification</h3>
          <ul>
            <li>Bottleneck detection</li>
            <li>Traffic pattern analysis</li>
            <li>Blackspot identification</li>
          </ul>
        </div>

        <div class="framework-card">
          <h3>Solution Evaluation</h3>
          <ul>
            <li>Dynamic performance testing</li>
            <li>Option comparison</li>
            <li>Cost-benefit analysis</li>
          </ul>
        </div>

        <div class="framework-card">
          <h3>Holistic Planning</h3>
          <ul>
            <li>Cross-area impact analysis</li>
            <li>Displacement prevention</li>
            <li>Zone coordination</li>
          </ul>
        </div>

        <div class="framework-card">
          <h3>Smart Investment</h3>
          <ul>
            <li>ITS infrastructure planning</li>
            <li>Future-ready designs</li>
            <li>ROI optimization</li>
          </ul>
        </div>
      </div>
    </section>
  </main>


  <!-- Thane Implementation -->
  <section class="implementation-section">
    <div class="container">
      <div class="scale-badge">Pioneering Urban Simulation</div>
      <h2>Thane Municipal Corporation</h2>
      <div class="tech-stack">
        <h5>Created India's First Full-City Traffic Model</h5>
        <ul>
          <li>Developed comprehensive simulation framework</li>
          <li>Processed city-wide traffic patterns</li>
          <li>Established baseline for Indian urban planning</li>
        </ul>
      </div>
      <div class="metric-grid">
        <div class="metric-item">
          <div class="h3">1st</div>
          <small>City-wide Model in India</small>
        </div>
        <div class="metric-item">
          <div class="h3">100%</div>
          <small>Urban Area Coverage</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Delhi Implementation -->
  <section class="implementation-section">
   <div class="container">
  <!-- Project & Map Section -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6">
      <div class="scale-badge">Global Hybrid Model</div>
      <h2 class="display-5">Delhi Traffic Revolution</h2>
      <div class="tech-stack">
        <h4>Implemented Multi-Level Simulation</h4>
        <ul>
          <li>Integrated LiDAR mapping technology</li>
          <li>Combined macro/meso/micro analysis</li>
          <li>Automated bottleneck detection system</li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
  <!-- Embedded Google Map with markers at your coordinates -->
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28032.87317737834!2d77.209!3d28.6139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin&markers=color:red%7C28.6745,77.0912&markers=color:red%7C28.5560,77.1624&markers=color:red%7C28.5355,77.2143"
    width="100%"
    height="400"
    style="border:0; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"
    allowfullscreen=""
    loading="lazy">
  </iframe>
</div>
  </div>
</div>

      <!-- Outcome Cards Section -->
      <div class="row g-4">
        <div class="col-md-4">
          <div class="outcome-card">
            <div class="card-icon">
              <i class="fas fa-crosshairs text-info"></i>
            </div>
            <h3>Infrastructure Analysis</h3>
            <div class="metric">2,000+</div>
            <p>Intersections Optimized</p>
            <ul class="outcome-list">
              <li>Peak hour capacity increased</li>
              <li>Signal timing improved</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="outcome-card">
            <div class="card-icon">
              <i class="fas fa-shield text-success"></i>
            </div>
            <h3>Safety Improvements</h3>
            <div class="metric">103</div>
            <p>Blackspots Neutralized</p>
            <ul class="outcome-list">
              <li>40% accident reduction</li>
              <li>Pedestrian safety enhanced</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="outcome-card">
            <div class="card-icon">
              <i class="fas fa-tachometer-alt text-warning"></i>
            </div>
            <h3>Efficiency Gains</h3>
            <div class="metric">16,000km</div>
            <p>Road Network Optimized</p>
            <ul class="outcome-list">
              <li>30% travel time reduction</li>
              <li>25% lower emissions</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Highways Implementation -->
  <section class="implementation-section">
    <div class="container">
      <div class="scale-badge">National Infrastructure</div>
      <h2 class="mb-4">Highway Network Optimization</h2>

      <!-- Approach & Results -->
      <div class="row g-4 mb-5">
        <div class="col-md-6">
          <div class="approach-card">
            <div class="card-icon d-flex flex-row gap-1">
              <i class="fas fa-rocket"></i>
              <h3>Scientific Traffic Analysis</h3>
            </div>
            <ul class="tech-list">
              <li>Dynamic flow modeling</li>
              <li>Peak hour capacity planning</li>
              <li>Emission impact forecasting</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="results-card">
            <h4>Documented Outcomes</h4>
            <div class="results-grid">
              <div class="result-item">
                <div class="result-value">30%</div>
                <div class="result-label">Faster Travel Times</div>
              </div>
              <div class="result-item">
                <div class="result-value">25%</div>
                <div class="result-label">Accident Reduction</div>
              </div>
              <div class="result-item">
                <div class="result-value">15%</div>
                <div class="result-label">Lower Emissions</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Projects & Metrics -->
      <div class="row g-4">
        <div class="col-md-8">
          <div class="projects-card">
            <h4>Key Implementations</h4>
            <div class="project-list">
              <div class="project-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                  <h5>Bhumkar Chowk, Pune</h5>
                  <p>500+ km highway optimized</p>
                </div>
              </div>
              <div class="project-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                  <h5>Nashik-Khed Corridor</h5>
                  <p>Interconnected network analysis</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="metrics-card">
            <div class="metric">
              <div class="metric-value">2</div>
              <div class="metric-label">Major Projects Executed</div>
            </div>
            <div class="metric">
              <div class="metric-value">500+</div>
              <div class="metric-label">KM Upgraded</div>
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
  <script src="../vendor/jquery-3.6.0.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="./assets/js/script.js"></script>

 

</body>

</html>