<style>
.header {
    background-color: rgba(255, 255, 255, 0.8) !important; /* transparent white */
}
.header .navmenu ul li a,
.header .logo,
.header .navmenu ul li a span {
    color: #000 !important; /* black text */
}
.header .navmenu ul li a.active {
    color: #000 !important;
    font-weight: bold;
}
</style>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="../index" class="logo d-flex align-items-center">
            <img src="../assets/images/logo-medulla-soft.png" alt="Medulla Soft Technologies" width="100" height="50">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="../index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="../aboutus.php" class="<?= basename($_SERVER['PHP_SELF']) == 'aboutus.php' ? 'active' : '' ?>">About Us</a></li>
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="../services/traffic-simulation-and-modelling.php">Traffic Simulation and Modelling</a></li>
                        <li><a href="../services/traffic-impact-assessment.php">Traffic Impact Assessment</a></li>
                        <li><a href="../services/inland-water-transport.php">Inland Water Transport</a></li>
                        <li><a href="../services/structural-health-monitoring.php">Structural Health Monitoring</a></li>
                        <li><a href="../services/bhms.php">Bridge Health Monitoring System</a></li>
                        <li><a href="../services/pedestrian-evacuation-planning.php">Pedestrian Evacuation Planning</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>References</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="../services/citywide-simulation-model.php">Citywide Simulation Model</a></li>
                        <li><a href="../services/structural-health-monitoring.php">Structural Health Monitoring</a></li>
                        <li><a href="../services/traffic-impact-assessment.php">Traffic Impact Assessment</a></li>
                    </ul>
                </li>
                <li><a href="../success-stories.php" class="<?= basename($_SERVER['PHP_SELF']) == 'success-stories.php' ? 'active' : '' ?>">Our Success Stories</a></li>
                <li><a href="../achievments.php" class="<?= basename($_SERVER['PHP_SELF']) == 'achievements.php' ? 'active' : '' ?>">Achievements</a></li>
                <li><a href="../contactus.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'active' : '' ?>">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>

<style>
    /* Mobile responsive styles */
    @media (max-width: 1199.98px) {
        .header {
            padding: 10px 0;
            height: auto;
        }
        
        .navmenu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%; /* Full width */
            height: 100vh;
            background: #fff;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            z-index: 9998;
            overflow-y: auto;
        }
        
        .navmenu.active {
            right: 0;
        }
        
        .navmenu ul {
            display: flex;
            flex-direction: column;
            padding: 80px 20px 20px;
        }
        
        .navmenu ul li {
            margin-bottom: 15px;
        }
        
        .navmenu .dropdown ul {
            position: static;
            display: none;
            padding: 10px 0 0 20px;
            margin: 0;
            box-shadow: none;
        }
        
        .mobile-nav-toggle {
            display: block !important;
            position: fixed;
            right: 15px;
            top: 15px;
            z-index: 9999;
            font-size: 28px;
            cursor: pointer;
            color: #333;
            background: none;
            border: none;
            transition: all 0.3s;
        }
        
        .mobile-nav-toggle:hover {
            color: black;
        }
        
        /* Show X when menu is active */
        .mobile-nav-toggle.bi-x {
            transform: rotate(180deg);
        }
    }
    
   
    /* Prevent body scroll when mobile menu is open */
    body.mobile-nav-active {
        overflow: hidden;
    }
</style>

<script>
    // Mobile navigation toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const navmenu = document.querySelector('#navmenu');
        
        mobileNavToggle.addEventListener('click', function(e) {
            navmenu.classList.toggle('active');
            document.body.classList.toggle('mobile-nav-active');
            this.classList.toggle('bi-list');
            this.classList.toggle('bi-x');
        });
        
        // Close mobile menu when clicking on a dropdown toggle
        document.querySelectorAll('.navmenu .dropdown > a').forEach(function(element) {
            element.addEventListener('click', function(e) {
                if (window.innerWidth < 1200) { // Only for mobile
                    e.preventDefault();
                    this.parentElement.classList.toggle('active');
                    const dropdown = this.nextElementSibling;
                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                }
            });
        });
        
        // Close mobile menu when clicking a nav link (except dropdown toggles)
        document.querySelectorAll('.navmenu ul:not(.dropdown ul) a').forEach(function(navlink) {
            if (!navlink.parentElement.classList.contains('dropdown')) {
                navlink.addEventListener('click', function() {
                    if (navmenu.classList.contains('active')) {
                        navmenu.classList.remove('active');
                        document.body.classList.remove('mobile-nav-active');
                        mobileNavToggle.classList.remove('bi-x');
                        mobileNavToggle.classList.add('bi-list');
                    }
                });
            }
        });
    });
</script>
<script>
    // Mobile navigation toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const navmenu = document.querySelector('#navmenu');
        
        mobileNavToggle.addEventListener('click', function(e) {
            navmenu.classList.toggle('active');
            document.body.classList.toggle('mobile-nav-active');
            this.classList.toggle('bi-list');
            this.classList.toggle('bi-x');
        });
        
        // Close mobile menu when clicking on a dropdown toggle
        document.querySelectorAll('.navmenu .dropdown > a').forEach(function(element) {
            element.addEventListener('click', function(e) {
                if (document.querySelector('.mobile-nav-toggle').style.display !== 'none') {
                    e.preventDefault();
                    this.parentElement.classList.toggle('active');
                    const dropdown = this.nextElementSibling;
                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                }
            });
        });
        
        // Close mobile menu when clicking a nav link (except dropdown toggles)
        document.querySelectorAll('.navmenu ul:not(.dropdown ul) a').forEach(function(navlink) {
            if (!navlink.parentElement.classList.contains('dropdown')) {
                navlink.addEventListener('click', function() {
                    if (navmenu.classList.contains('active')) {
                        navmenu.classList.remove('active');
                        document.body.classList.remove('mobile-nav-active');
                        mobileNavToggle.classList.toggle('bi-list');
                        mobileNavToggle.classList.toggle('bi-x');
                    }
                });
            }
        });
    });
</script>