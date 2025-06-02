<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Medulla Soft Technologies | Leading Simulation Experts in India</title>
    <meta name="description"
        content="Medulla Soft Technologies is a pioneering company in Micro-Simulation and 3D Simulation Technologies, helping Indian cities improve mobility and reduce congestion through advanced solutions.">
    <meta name="keywords" content="simulation software India, traffic modeling Delhi, 3D simulation technologies, TomTom partner India, urban planning solutions">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Medulla Soft Technologies">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">

    <!-- Vendor CSS Files -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./vendor/aos/aos.css" rel="stylesheet">
    <link href="./vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/about.css">

    <!-- Preload important resources -->
    <link rel="preload" href="./assets/images/banner-2.png" as="image">
    <link rel="preload" href="./assets/images/banner-3.png" as="image">
</head>
<style>
    /* Hero Section Styles */


.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 33, 71, 0.7);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-subtitle {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.btn-hero {
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-hero:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Section Header Styles */
.section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.section-subtitle {
    display: inline-block;
    color: #007bff;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section-title {
    margin-top:40px;
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
}

.section-divider {
    width: 80px;
    height: 4px;
    background: #007bff;
    margin: 0 auto 1.5rem;
    margin-top:-50px;
    border-radius: 2px;
}

.section-description {
    font-size: 1.2rem;
    color: #6c757d;
    max-width: 700px;
    margin: 0 auto;
}

/* About Section Styles */
.about-section {
    padding: 100px 0;
    background-color: #f8f9fa;
}

.about-image-container {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 51, 102, 0.1), rgba(0, 51, 102, 0.3));
}

.about-heading {
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1.5rem;
}

.about-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #495057;
    margin-bottom: 2rem;
}

.about-features {
    margin-top: 2rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.feature-icon {
    font-size: 1.5rem;
    color: #007bff;
    margin-right: 1rem;
    margin-top: 0.3rem;
}

.about-card {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.card-text {
    color: #6c757d;
    line-height: 1.7;
}

/* Video Section Styles */
.video-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.video-container {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    max-width: 900px;
    margin: 0 auto;
}

.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 51, 102, 0.2);
}

.video-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: #007bff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 2rem;
    transition: all 0.3s ease;
    z-index: 3;
}

.video-play-btn:hover {
    background: #0062cc;
    transform: translate(-50%, -50%) scale(1.1);
}

.video-caption p {
    font-size: 1.1rem;
    color: #495057;
    font-style: italic;
}
/* Responsive Adjustments */
@media (max-width: 992px) {
    .hero-title {
        font-size: 2.8rem;
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
    }
    
    .section-title {
        font-size: 2.2rem;
    }
}

@media (max-width: 768px) {
    .hero-section {
        height: 60vh;
        min-height: 400px;
    }
    
    .hero-title {
        font-size: 2.2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .about-heading {
        font-size: 1.8rem;
    }
    
    .cta-title {
        font-size: 2rem;
    }
    
    .member-image img {
        height: 250px;
    }
}

@media (max-width: 576px) {
    .hero-section {
        height: 50vh;
    }
    
    .hero-title {
        font-size: 1.8rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .btn-hero {
        padding: 10px 20px;
    }
}
</style>
<body class="about-page">

    <?php include('includes/header.php');?>

    <main class="main">
        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">About Medulla Soft Technologies</h2>
                    <div class="section-divider"></div>
                    <p class="section-description">A trusted partner for urban planning and traffic management solutions across India</p>
                </div>

                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-container" data-aos="fade-up">
                            <img src="assets/images/banner-2.png" class="img-fluid about-image" alt="Medulla Soft Technologies simulation visualization">
                            <div class="image-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="about-heading">Pioneers in Simulation Technology</h3>
                            <p class="about-text">
                                Founded in 2010 by IIT alumni, Medulla Soft Technologies has established itself as a leader in micro-simulation and 3D simulation technologies. Our mission is to transform urban planning through data-driven solutions.
                            </p>
                            <div class="about-features">
                                <div class="feature-item">
                                    <i class="bi bi-gear-fill feature-icon"></i>
                                    <div>
                                        <h4>Advanced Simulation</h4>
                                        <p>Cutting-edge modeling for accurate urban planning</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-building feature-icon"></i>
                                    <div>
                                        <h4>Urban Solutions</h4>
                                        <p>Improving mobility and reducing congestion in Indian cities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="about-card" data-aos="fade-up">
                            <h4 class="card-title">Delhi Traffic Simulation Project</h4>
                            <p class="card-text">
                                Our comprehensive citywide Traffic Simulation Model for Delhi analyzes current traffic conditions to improve safety, efficiency, and road design. This innovative approach is now being applied to National Highways to identify bottlenecks using the latest simulation tools.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-card" data-aos="fade-up" data-aos-delay="100">
                            <h4 class="card-title">TomTom Partnership</h4>
                            <p class="card-text">
                                As an official distributor partner of global mapping leader TomTom, we deliver granular traffic analytics to Indian cities for diverse transportation applications, providing unprecedented insights into urban mobility patterns.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section class="video-section">
            <div class="container">
                <div class="video-container" data-aos="zoom-in">
                    <img src="assets/images/banner-3.png" class="img-fluid video-poster" alt="Medulla Soft Technologies video presentation">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="video-play-btn glightbox">
                        <i class="bi bi-play-fill"></i>
                        <span class="sr-only">Play Video</span>
                    </a>
                    <div class="video-overlay"></div>
                </div>
                <div class="video-caption text-center mt-4">
                    <p>Watch our overview video to learn more about our simulation technologies</p>
                </div>
            </div>
        </section>  

        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Team</h2>
                <p>Meet Our Experts</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="./assets/images/team/team-1.jpg" class="img-fluid"
                                    alt="Shantanu Sharma CEO">
                            </div>
                            <div class="member-info">
                                <h4>Shantanu Sharma</h4>
                                <span>Founder & CEO</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque consectetur delectus
                                    repellendus aut optio sapiente obcaecati aliquid adipisci nobis suscipit.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/images/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Capt. Abhishek Sharma</h4>
                                <span>Managing Director</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/images/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bhushan Burande</h4>
                                <span>Transport Modeller</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>GBL Chowdury</h4>
                                <span>Head of Structural Health Monitoring (SHM) Division</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Parag Bedarkar</h4>
                                <span>Head - Sales and Marketing</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section>

    </main>

    <?php include('includes/footer.php');?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/aos/aos.js"></script>
    <script src="./vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/main.js"></script>

</body>

</html>