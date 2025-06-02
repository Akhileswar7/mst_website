
<div class="container-fluid light-background footer position-relative overflow-hidden" id="footer">
    <canvas class="particles-canvas"></canvas>
    
    <footer class="pt-5 position-relative">
            <div class="row px-3">
                <div class="col-sm-6 col-12 col-lg-2 col-md-4" >
                    <h5 class="mb-4 pb-2 footer-head" style="border-bottom-width: 50px;">Quick
                        Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2">
                                <i class="bi bi-chevron-right"></i>References</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>Team</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>Success Stories</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>About Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-12 col-lg-3 col-md-4">
                    <h5 class="mb-4 pb-2 footer-head">Services</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2 "><i
                                    class="bi bi-chevron-right"></i>Structural Health Monitoring
                            </a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2 "><i
                                    class="bi bi-chevron-right"></i>
                                Pedestrian Evacuation Planning
                            </a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2 "><i
                                    class="bi bi-chevron-right"></i>
                                Traffic Simulation and Modelling
                            </a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2 "><i
                                    class="bi bi-chevron-right"></i>
                                Traffic Impact Assessment
                            </a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2 "><i
                                    class="bi bi-chevron-right"></i>Inland Water Transportation (IWT)</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-12 col-lg-2 col-md-4">
                    <h5 class="mb-4 pb-2 footer-head">Important Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2">
                                <i class="bi bi-chevron-right"></i>References</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>Team</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>Success Stories</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>About Us Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 pb-2"><i
                                    class="bi bi-chevron-right"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-8 col-12 col-lg-4 col-md-12">
                    <!-- <h5 class="mb-4 pb-2 footer-head" style="border-bottom-width: 50px;">About Us</h5> -->
                    <h5 class="mb-4 pb-2 footer-head footer-head-comp">Medulla Soft Technologies</h5>
                    <div class="d-flex flex-column align-content-start justify-content-center gap-3 text-center">
                        <!-- <h2 class="text-capitalize" style="font-size:1.6rem;color: black;transform:translateX(25px)scale(1.1)">Medulla Soft Technologies</h2> -->
                        <div class="ms-3 text-center d-flex align-items-start justify-content-center flex-row gap-1">
                            <div>
                                <i class="bi bi-map"></i>
                            </div>
                            <div>
                                <a href="#" class=" border-bottom-style d-inline nav-link p-1">A203/A204 Logix Technova IT
                                Park
                                , Sector 132, Noida, Noida-Greater Noida Expressway, Uttar Pradesh, India, 201301</a>
                        
                            </div>   
                        </div>
                        <div class="ms-3 text-center d-flex align-items-start justify-content-center flex-row gap-1">
                            <div>
                                <i class="bi bi-telephone-fill p-2"></i>
                            </div>
                            <div>
                                <a href="#" class=" border-bottom-style d-inline nav-link p-1"><span>Abhishek Sharma
                                    </span>:<span> +91 98717 00035</span></a><br>
                                <a href="#" class=" border-bottom-style d-inline nav-link p-1"><span>Parag Bedarkar
                                    </span>:<span>+91 9028033239</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    
    <div class="d-flex flex-column align-items-center pt-2 justify-content-around copyright">
        <p>Copyright&copy; 2022 Medulla-Soft Technologies. All rights reserved.</p><br>
    </div>
</div>

<script>
    // Three.js Particle Animation
    function initParticles() {
        const canvas = document.querySelector('.particles-canvas');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);

        // Create particles
        const particlesGeometry = new THREE.BufferGeometry();
        const particleCount = 1000;
        const posArray = new Float32Array(particleCount * 3);

        for(let i = 0; i < particleCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 10;
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
        
        const particlesMaterial = new THREE.PointsMaterial({
            size: 0.005,
            color: '#2c74b3'
        });

        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particlesMesh);

        camera.position.z = 2;

        function animate() {
            requestAnimationFrame(animate);
            particlesMesh.rotation.y += 0.001;
            renderer.render(scene, camera);
        }

        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    }

    // GSAP Animations
    gsap.from(".footer h5", {
        duration: 1,
        y: 50,
        opacity: 0,
        stagger: 0.2,
        ease: "power3.out"
    });

    gsap.from(".nav-item", {
        duration: 0.8,
        x: -30,
        opacity: 0,
        stagger: 0.1,
        ease: "back.out(1.7)"
    });

    gsap.from(".company-name", {
        duration: 1.5,
        scale: 0.8,
        opacity: 0,
        ease: "elastic.out(1, 0.5)"
    });   
    document.addEventListener('DOMContentLoaded', initParticles);
</script>