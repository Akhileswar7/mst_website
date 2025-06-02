<?php include("includes/head.php")?>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <style>
      .parallax-hero{
        margin-top:100px;
          background: linear-gradient(rgba(26,69,103,0.3)), url('https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?auto=format&fit=crop&w=1400') center/cover;
      }
      .service-icon {
            width: 80px;
            height: 80px;
            background: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }
      .highlight {
        border-left: 4px solid #0d6efd;
        padding: 15px;
        margin-top: 20px;
      }
      .benefits-traffic ul i{
        color: var(--accent-color);
      }
  </style>

</head>

<body>

    <?php include('./includes/header.php');?>

    <main class="service-page">
      <section id="service-hero" class="service-hero parallax-hero container-fluid">
          <div class="overlay" id="myOverlay"></div>
          <div class="d-flex container">
            <div class="mx-auto d-flex flex-column align-items-center ">
              <h1 class="display-3 fw-bold hero-head">Traffic Impact Assessment (TIA)</h1>
              <p class="mb-4 hero-desc">Evaluating the effect of new developments on the existing road infrastructure.</p>
            </div>
          </div>
        </section>

      <section class="container pt-5">    
        <div class="row mb-4">
          <div class="col-md-6">
            <h1 class="display-6 fw-bold lh-1 mb-3" class="section-title">What is a TIA? </h1>
            <p  class="">
              A Traffic Impact Assessment evaluates how a proposed development project will affect the surrounding transportation network.
              It assesses congestion levels, infrastructure needs, and proposes mitigation strategies to maintain traffic safety and flow.
            </p>
          </div>
          <div class="col-md-6">
            <h1 class="display-6 fw-bold lh-1 mb-3" class="section-title">Why is it Important?</h1>
            <p class="">
              TIA helps urban planners, engineers, and government authorities ensure that infrastructure keeps up with development. It informs critical decision-making
              by identifying potential environmental risks, safety issues, and road capacity challenges.
            </p>
          </div>
        </div>

        <div class="highlight">
          <h4 class="fw-bold lh-1 mb-3">Who Needs a TIA?</h4>
          <p class="fst-italic">
            Real estate developers, urban planners, transport engineers, or local authorities proposing any major infrastructure, residential,
            commercial or industrial development must conduct a TIA as per regulatory norms.
          </p>
        </div>
          <section class="section benefits-traffic">
            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="./assets/images/Traffic-Impact-Assessment.jpg" class="img-fluid" alt=" thane traffic">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3 class="display-6">Benefits of a TIA:</h3>
                    <ul class="list-unstyled">
                      <li><i class="bi bi-check2-all mx-1"></i><span>Ensures road safety and efficient traffic movement</span></li>
                      <li><i class="bi bi-check2-all mx-1"></i><span>Identifies required infrastructure upgrades in advance</span></li>
                      <li><i class="bi bi-check2-all mx-1"></i><span>Reduces long-term transportation costs and disruptions</span></li>
                      <li><i class="bi bi-check2-all mx-1"></i><span>Helps secure approvals for major developments</span></li>
                  </ul>
               </div>
                </div>
            </div>
        </section> 
      </section>

<!-- Services Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Assessment Services</h2>
        <div class="row g-4">
            <div class="col-md-3 text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-car"></i>
                </div>
                <h5>PCU Analysis</h5>
                <p>Passenger Car Unit calculations for mixed traffic flow</p>
            </div>

            <div class="col-md-3 text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h5>Congestion Forecasting</h5>
                <p>Predictive modeling for future traffic patterns</p>
            </div>

            <div class="col-md-3 text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-road"></i>
                </div>
                <h5>SWEPT Analysis</h5>
                <p>Vehicle turning path verification</p>
            </div>

            <div class="col-md-3 text-center">
                <div class="service-icon mb-3">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h5>Management Plans</h5>
                <p>Comprehensive traffic control strategies</p>
            </div>
        </div>
    </div>
</section>


    </main>

    <?php include('./includes/footer.php');?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/script.js"></script>
</body>

</html>