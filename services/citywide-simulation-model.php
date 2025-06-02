<?php include("includes/head.php")?>
</head>

<body>
    <?php include('./includes/header.php');?>

    <main class="service-page">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <style>
            :root {
                --primary: #2563eb;
                --primary-dark: #1e40af;
                --secondary: #10b981;
                --dark: #1f2937;
                --light: #f9fafb;
                --gray: #6b7280;
                --accent: #f59e0b;
                --section-gap: 120px;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f5f7fa;
                color: var(--dark);
                line-height: 1.6;
                overflow-x: hidden;
            }

             /* Hero Section */
            .hero-container {
                position: relative;
                min-height: 90vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px 20px;
            }

            .hero-content {
                text-align: center;
                max-width: 1200px;
                margin: 0 auto;
                background: rgba(255,255,255,0.95);
                border-radius: 24px;
                box-shadow: 0 8px 32px rgba(37,99,235,0.1);
                padding: 40px 20px;
                width: 100%;
            }

            .hero-title {
                font-size: 2.5rem;
                font-weight: 800;
                margin-bottom: 1rem;
                line-height: 1.2;
                color: var(--primary);
            }

            .hero-subtitle {
                font-size: 1.1rem;
                color: var(--dark);
                max-width: 800px;
                margin: 0 auto 2rem;
                font-weight: 400;
            }

            .hero-stats {
                display: flex;
                justify-content: center;
                gap: 15px;
                margin-bottom: 2rem;
                flex-wrap: wrap;
            }

            .hero-stat {
                padding: 15px 20px;
                border-radius: 12px;
                min-width: 150px;
                flex: 1;
            }

            .hero-stat-number {
                font-size: 1.8rem;
                font-weight: 700;
                margin-bottom: 5px;
            }

            .hero-stat-label {
                font-size: 0.9rem;
            }


            /* Project Showcase */
            .project-showcase {
                max-width: 1600px;
                margin: 0 auto var(--section-gap);
                padding: 0 20px;
                margin-top:-70px;
            }

            .section-title {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 3rem;
                text-align: center;
                position: relative;
                display: inline-block;
                left: 50%;
                transform: translateX(-50%);
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 0;
                width: 100%;
                height: 4px;
                background: linear-gradient(90deg, var(--primary), var(--secondary));
                border-radius: 2px;
            }

            /* Project Cards - 8 Unique Designs */
            .project-card {
                margin-bottom: 120px;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            /* Card 1 - Full Width Image with Overlay Content */
            .project-card-1 {
                height: 700px;
                display: flex;
                align-items: flex-end;
            }

            .project-card-1 .project-image {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: 0;
            }

            .project-card-1 .project-content {
                position: relative;
                z-index: 1;
                background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0) 100%);
                color: white;
                padding: 80px 60px 60px;
                width: 100%;
            }

            /* Card 2 - Split Screen Design */
            .project-card-2 {
                display: grid;
                grid-template-columns: 1fr 1fr;
                min-height: 600px;
            }

            .project-card-2 .project-media {
                position: relative;
            }

            .project-card-2 .project-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .project-card-2 .project-content {
                padding: 60px;
                background: white;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            /* Card 3 - Floating Content Over Image */
            .project-card-3 {
                height: 700px;
                position: relative;
            }

            .project-card-3 .project-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .project-card-3 .project-content {
                position: absolute;
                top: 50%;
                right: 60px;
                transform: translateY(-50%);
                background: rgba(255, 255, 255, 0.95);
                width: 45%;
                padding: 40px;
                border-radius: 12px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            }

            /* Card 4 - Vertical Stack with Map */
            .project-card-4 {
                display: flex;
                flex-direction: column;
            }

            .project-card-4 .project-media {
                height: 500px;
                position: relative;
            }

            .project-card-4 .project-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .project-card-4 .project-content {
                padding: 60px;
                background: white;
            }

            .project-card-4 .project-map {
                height: 400px;
                background: #f0f0f0;
            }

            /* Card 5 - Image Left with Extended Content */
            .project-card-5 {
                display: grid;
                grid-template-columns: 40% 60%;
            }

            .project-card-5 .project-media {
                position: relative;
            }

            .project-card-5 .project-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .project-card-5 .project-content {
                padding: 60px;
                background: white;
            }

            /* Card 6 - Minimalist with Sidebar */
            .project-card-6 {
                display: grid;
                grid-template-columns: 300px 1fr;
                min-height: 500px;
            }

            .project-card-6 .project-sidebar {
                background: var(--primary);
                color: white;
                padding: 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .project-card-6 .project-content {
                padding: 60px;
                background: white;
            }

            /* Card 7 - Centered Content with Background */
            .project-card-7 {
                height: 600px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            .project-card-7 .project-image {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: 0;
            }

            .project-card-7 .project-content {
                position: relative;
                z-index: 1;
                background: rgba(255, 255, 255, 0.95);
                width: 70%;
                max-width: 800px;
                padding: 60px;
                border-radius: 12px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
                text-align: center;
            }

            /* Card 8 - Timeline Style */
            .project-card-8 {
                display: grid;
                grid-template-columns: 1fr 1fr;
                position: relative;
            }

            .project-card-8::before {
                content: '';
                position: absolute;
                top: 0;
                left: 50%;
                width: 4px;
                height: 100%;
                background: linear-gradient(to bottom, var(--primary), var(--secondary));
                transform: translateX(-50%);
            }

            .project-card-8 .project-media {
                padding: 60px 60px 60px 0;
                display: flex;
                align-items: center;
            }

            .project-card-8 .project-content {
                padding: 60px 0 60px 60px;
                display: flex;
                align-items: center;
            }

            .project-card-8 .project-image {
                width: 100%;
                border-radius: 12px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            }

            /* Common Project Styles */
            .project-title {
                font-size: 2rem;
                font-weight: 700;
                margin-bottom: 1rem;
            }

            .project-location {
                display: flex;
                align-items: center;
                margin-bottom: 1.5rem;
                color: var(--gray);
            }

            .project-card-1 .project-location,
            .project-card-6 .project-location,
            .project-card-7 .project-location {
                color: rgba(255, 255, 255, 0.9);
            }

            .project-location i {
                margin-right: 8px;
                color: var(--accent);
            }

            .project-stats {
                display: flex;
                gap: 15px;
                margin-bottom: 2rem;
                flex-wrap: wrap;
            }

            .stat-item {
                background: rgba(255, 255, 255, 0.2);
                color: white;
                padding: 8px 16px;
                border-radius: 30px;
                font-size: 0.9rem;
                font-weight: 500;
                display: flex;
                align-items: center;
                backdrop-filter: blur(5px);
            }

            .project-card-2 .stat-item,
            .project-card-3 .stat-item,
            .project-card-4 .stat-item,
            .project-card-5 .stat-item,
            .project-card-7 .stat-item,
            .project-card-8 .stat-item {
                background: var(--light);
                color: var(--primary);
            }

            .stat-item i {
                margin-right: 8px;
                font-size: 1rem;
            }

            .project-description {
                margin-bottom: 2rem;
                line-height: 1.8;
            }

            .project-card-1 .project-description,
            .project-card-6 .project-description,
            .project-card-7 .project-description {
                color: rgba(255, 255, 255, 0.9);
            }

            .tech-used {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .tech-tag {
                background: rgba(255, 255, 255, 0.2);
                color: white;
                padding: 6px 16px;
                border-radius: 30px;
                font-size: 0.85rem;
                font-weight: 600;
                backdrop-filter: blur(5px);
                transition: all 0.3s ease;
            }

            .project-card-2 .tech-tag,
            .project-card-3 .tech-tag,
            .project-card-4 .tech-tag,
            .project-card-5 .tech-tag,
            .project-card-7 .tech-tag,
            .project-card-8 .tech-tag {
                background: var(--light);
                color: var(--primary);
                border: 1px solid rgba(37, 99, 235, 0.2);
            }

            .tech-tag:hover {
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .project-card-1 .tech-tag:hover,
            .project-card-6 .tech-tag:hover,
            .project-card-7 .tech-tag:hover {
                background: white;
                color: var(--primary);
            }

            .project-card-2 .tech-tag:hover,
            .project-card-3 .tech-tag:hover,
            .project-card-4 .tech-tag:hover,
            .project-card-5 .tech-tag:hover,
            .project-card-8 .tech-tag:hover {
                background: var(--primary);
                color: white;
            }

            /* Map Styles */
            .map-container {
                width: 100%;
                height: 100%;
            }

            .map-container iframe {
                width: 100%;
                height: 100%;
                border: none;
            }

            /* Animations */
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
                40% { transform: translateY(-20px) translateX(-50%); }
                60% { transform: translateY(-10px) translateX(-50%); }
            }

            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
            }

            .floating {
                animation: float 6s ease-in-out infinite;
            }

            /* Responsive Design */
            @media (max-width: 1600px) {
                .project-showcase {
                    max-width: 1400px;
                }
            }

            @media (max-width: 1400px) {
                .hero-title {
                    font-size: 3.8rem;
                }
                
                .hero-subtitle {
                    font-size: 1.3rem;
                }
                
                .project-card-3 .project-content {
                    width: 50%;
                }
                
                .project-card-8 {
                    grid-template-columns: 1fr;
                }
                
                .project-card-8::before {
                    display: none;
                }
                
                .project-card-8 .project-media {
                    padding: 60px;
                }
                
                .project-card-8 .project-content {
                    padding: 0 60px 60px;
                }
            }

            @media (max-width: 1200px) {
                .hero-title {
                    font-size: 3.2rem;
                }
                
                .hero-stat {
                    min-width: 160px;
                    padding: 15px 20px;
                }
                
                .hero-stat-number {
                    font-size: 2rem;
                }
                
                .project-card-2,
                .project-card-5 {
                    grid-template-columns: 1fr;
                }
                
                .project-card-2 .project-media,
                .project-card-5 .project-media {
                    height: 400px;
                }
                
                .project-card-3 .project-content {
                    width: 60%;
                    right: 30px;
                }
            }

            @media (max-width: 992px) {
                .hero-title {
                    font-size: 2.8rem;
                }
                
                .hero-stats {
                    gap: 15px;
                }
                
                .section-title {
                    font-size: 2rem;
                }
                
                .project-card-1,
                .project-card-3,
                .project-card-7 {
                    height: auto;
                    min-height: 600px;
                }
                
                .project-card-3 .project-content {
                    position: relative;
                    top: auto;
                    right: auto;
                    transform: none;
                    width: 100%;
                    margin-top: -100px;
                }
                
                .project-card-6 {
                    grid-template-columns: 1fr;
                }
                
                .project-card-6 .project-sidebar {
                    padding: 30px;
                }
                
                .project-content {
                    padding: 40px 30px !important;
                }
            }

            @media (max-width: 768px) {
                .hero-title {
                    font-size: 2.4rem;
                }
                .hero-container{
                    margin-top: 80px;
                }
                .project-showcase{
                    margin-top:60px;
                }
                .hero-subtitle {
                    font-size: 1.1rem;
                }
                
                .hero-stat {
                    min-width: 120px;
                    padding: 10px 15px;
                }
                
                .hero-stat-number {
                    font-size: 1.5rem;
                }
                
                .project-title {
                    font-size: 1.8rem;
                }
                
                .project-stats {
                    flex-direction: column;
                    gap: 10px;
                }
                
                .project-card-7 .project-content {
                    width: 90%;
                }
            }

            @media (max-width: 576px) {
                .hero-title {
                    font-size: 2rem;
                }
                
                .hero-stat {
                    min-width: 100%;
                }
                
                .project-card-4 .project-media {
                    height: 300px;
                }
                
                .project-card-4 .project-map {
                    height: 300px;
                }
            }
        </style>

        <!-- Hero Section -->
     <!-- Hero Section -->
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Revolutionizing Urban Mobility</h1>
                <p class="hero-subtitle">
                    <span style="background: linear-gradient(90deg,#2563eb22,#10b98122); border-radius: 8px; padding: 2px 8px;">Advanced traffic simulation</span> solutions that transform city planning, reduce congestion, and create <span style="color:#10b981;font-weight:600;">sustainable transportation</span> ecosystems for smart cities of tomorrow.
                </p>
                <div class="hero-stats">
                    <div class="hero-stat" style="background: #2563eb11; color: #2563eb;">
                        <div class="hero-stat-number">8+</div>
                        <div class="hero-stat-label">Major Cities</div>
                    </div>
                    <div class="hero-stat" style="background: #10b98111; color: #10b981;">
                        <div class="hero-stat-number">500+</div>
                        <div class="hero-stat-label">Intersections</div>
                    </div>
                    <div class="hero-stat" style="background: #f59e0b11; color: #f59e0b;">
                        <div class="hero-stat-number">42%</div>
                        <div class="hero-stat-label">Avg. Improvement</div>
                    </div>
                    <div class="hero-stat" style="background: #1e40af11; color: #1e40af;">
                        <div class="hero-stat-number">2030</div>
                        <div class="hero-stat-label">Future Planning</div>
                    </div>
                </div>
                <a href="#projects" class="btn btn-primary">
                    <i class="fas fa-arrow-right" style="margin-right:8px;"></i>Explore Our Projects
                </a>
            </div>
        </div>


        <!-- Project Showcase -->
        <div class="project-showcase" id="projects">
            <h2 class="section-title">Our Portfolio of Urban Solutions</h2>

            <!-- Project 1 - Full Width Image with Overlay -->
            <div class="project-card project-card-1" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1601758003835-a5bd0b5e7f08?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Thane City Traffic" class="project-image">
                <div class="project-content">
                    <h3 class="project-title">Thane City Simulation</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Thane, Maharashtra, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-road"></i> 350 Km Network
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-traffic-light"></i> 200 Intersections
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-car"></i> 50,000+ Vehicles
                        </div>
                    </div>
                    <p class="project-description">
                        Our comprehensive traffic simulation model for Thane city provides urban planners with powerful 
                        tools to optimize traffic flow and plan future infrastructure. The model accurately predicts 
                        traffic patterns during peak hours and special events, enabling data-driven decision making.
                    </p>
                    <div class="tech-used">
                        <span class="tech-tag">VISSIM</span>
                        <span class="tech-tag">GIS Integration</span>
                        <span class="tech-tag">Traffic Flow Analysis</span>
                        <span class="tech-tag">Machine Learning</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 - Split Screen Design -->
            <div class="project-card project-card-2" data-aos="fade-up">
                <div class="project-media">
                    <img src="https://images.unsplash.com/photo-1581093196277-1c8d47ab5b5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Delhi Metro Traffic" class="project-image">
                </div>
                <div class="project-content">
                    <h3 class="project-title">Delhi Metro Area Model</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        New Delhi, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-road"></i> 16,000+ Km Network
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-traffic-light"></i> 2,000 Intersections
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-subway"></i> Metro Integration
                        </div>
                    </div>
                    <p class="project-description">
                        The Delhi metropolitan area simulation represents one of the most comprehensive urban traffic 
                        models in India. Incorporating multi-modal transportation including metro, buses, and pedestrian 
                        pathways, this model provides a holistic view of mobility patterns across the capital region.
                    </p>
                    <div class="tech-used">
                        <span class="tech-tag">AIMSUN</span>
                        <span class="tech-tag">Big Data Analysis</span>
                        <span class="tech-tag">Multi-modal Integration</span>
                        <span class="tech-tag">AI Predictive Modeling</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 - Floating Content Over Image -->
            <div class="project-card project-card-3" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1601758003835-a5bd0b5e7f08?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bhumkar Chowk Intersection" class="project-image">
                <div class="project-content">
                    <h3 class="project-title">Bhumkar Chowk Optimization</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Pune, Maharashtra, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-car"></i> 25,000+ Vehicles/Day
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-users"></i> Pedestrian Flow
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-clock"></i> 42% Wait Time Reduction
                        </div>
                    </div>
                    <p class="project-description">
                        The Bhumkar Chowk intersection was experiencing severe congestion during peak hours. 
                        Our microsimulation identified optimal signal timing and lane configurations that 
                        reduced average wait times by 42% while improving pedestrian safety through better 
                        crosswalk design and timing.
                    </p>
                    <div class="tech-used">
                        <span class="tech-tag">VISSIM</span>
                        <span class="tech-tag">Signal Optimization</span>
                        <span class="tech-tag">Queue Analysis</span>
                        <span class="tech-tag">Pedestrian Modeling</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 - Vertical Stack with Map -->
            <div class="project-card project-card-4" data-aos="fade-up">
                <div class="project-media">
                    <img src="https://images.unsplash.com/photo-1601758003835-a5bd0b5e7f08?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Nashik Highway" class="project-image">
                </div>
                <div class="project-content">
                    <h3 class="project-title">Nashik Highway Projection</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Nashik, Maharashtra, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-highway"></i> 18 Km Highway
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-chart-line"></i> Growth Projection
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-clock"></i> 2030 Forecast
                        </div>
                    </div>
                    <p class="project-description">
                        This highway segment simulation helped planners understand future traffic growth patterns 
                        and design appropriate infrastructure upgrades. Our model projected demand through 2030, 
                        enabling the city to plan phased expansions that align with expected growth while 
                        minimizing disruption.
                    </p>
                    <div class="tech-used">
                        <span class="tech-tag">AIMSUN</span>
                        <span class="tech-tag">Growth Modeling</span>
                        <span class="tech-tag">Capacity Planning</span>
                        <span class="tech-tag">Scenario Analysis</span>
                    </div>
                </div>
                <div class="project-map">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.272785714286!2d73.7628514!3d18.6518904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9e76c8fa689%3A0x1b8e3a7e0a6b0b0b!2sNashik%20Phata-Khed%20Segment!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <!-- Project 5 - Image Left with Extended Content -->
            <div class="project-card project-card-5" data-aos="fade-up">
                <div class="project-media">
                    <img src="https://images.unsplash.com/photo-1601758003835-a5bd0b5e7f08?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mumbai Traffic Simulation" class="project-image">
                </div>
                <div class="project-content">
                    <h3 class="project-title">Mumbai Coastal Road Project</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Mumbai, Maharashtra, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-road"></i> 29.2 Km Corridor
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-bridge"></i> 8 Interchanges
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-clock"></i> 70% Travel Time Reduction
                        </div>
                    </div>
                    <p class="project-description">
                        Our simulation of the Mumbai Coastal Road project helped optimize the design of this 
                        ambitious infrastructure project. The model predicted traffic flow patterns, identified 
                        potential bottlenecks, and suggested optimal interchange designs to maximize throughput 
                        while minimizing environmental impact.
                    </p>
                    <div class="tech-used">
                        <span class="tech-tag">VISSIM</span>
                        <span class="tech-tag">Microsimulation</span>
                        <span class="tech-tag">Environmental Impact</span>
                        <span class="tech-tag">Capacity Analysis</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 - Minimalist with Sidebar -->
            <div class="project-card project-card-6" data-aos="fade-up">
                <div class="project-sidebar">
                    <h3 class="project-title">Bengaluru Metro Integration</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Bengaluru, Karnataka, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-subway"></i> 6 Metro Lines
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-bus"></i> 200+ Bus Routes
                        </div>
                    </div>
                    <div class="tech-used">
                        <span class="tech-tag">Multi-modal</span>
                        <span class="tech-tag">AIMSUN</span>
                        <span class="tech-tag">Passenger Flow</span>
                    </div>
                </div>
                <div class="project-content">
                    <p class="project-description">
                        Bengaluru's rapid metro expansion required careful integration with existing transportation 
                        networks. Our simulation modeled passenger flows between metro stations and bus routes, 
                        optimizing transfer points and scheduling to create seamless multi-modal transportation 
                        throughout the city. The model helped reduce average transfer times by 35% during peak hours.
                    </p>
                    <div class="project-media" style="margin-top: 30px;">
                        <img src="https://images.unsplash.com/photo-1601758003835-a5bd0b5e7f08?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bengaluru Metro" style="width: 100%; border-radius: 8px;">
                    </div>
                </div>
            </div>

            <!-- Project 7 - Centered Content with Background -->
            <div class="project-card project-card-7" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1601758003835-a5bd0b5e7f08?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Chennai Smart City" class="project-image">
                <div class="project-content">
                    <h3 class="project-title">Chennai Smart City Initiative</h3>
                    <div class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Chennai, Tamil Nadu, India
                    </div>
                    <div class="project-stats">
                        <div class="stat-item">
                            <i class="fas fa-city"></i> 175 Sq Km Area
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-traffic-light"></i> 450+ Signals
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-bolt"></i> Adaptive Control
                        </div>
                    </div>
                    <p class="project-description">
                        As part of Chennai's Smart City initiative, we developed a comprehensive traffic management 
                        system using adaptive signal control technology. The system dynamically adjusts signal timing 
                        based on real-time traffic conditions, reducing average travel times by 28% and decreasing 
                        idling emissions by an estimated 15%.
                    </p>
                    <div class="tech-used">
                        <span class="tech-tag">SCATS</span>
                        <span class="tech-tag">Adaptive Control</span>
                        <span class="tech-tag">IoT Sensors</span>
                        <span class="tech-tag">Emission Modeling</span>
                    </div>
                </div>
            </div>

            <!-- Project 8 - Timeline Style -->
           
        </div>

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true,
                easing: 'ease-out-quart'
            });
            
            // Smooth scroll for hero button
            document.querySelector('.btn-light').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#projects').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        </script>
    </main>

    <?php include('./includes/footer.php');?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/aos/aos.js"></script>
    <script src="./assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/script.js"></script>
</body>
</html>