const services = [
  {
    number: "01",
    title: "Traffic & Transportation",
    description:
      "Advanced micro-simulation solutions to optimize urban and highway traffic systems.",
    image: "./assets/images/banner-4.png",
  },
  {
    number: "02",
    title: "Pedestrian Mobility & Evacuations",
    description:
      "Simulations for pedestrian movement, safety, and evacuation planning.",
    image: "./assets/images/banner-4.png",
  },
  {
    number: "03",
    title: "Structural Health Monitoring",
    description:
      "Real-time Structural Health Monitoring for critical infrastructure.",
    image: "./assets/images/banner-4.png",
  },
  {
    number: "04",
    title: "3D Simulations",
    description:
      "High-fidelity 3D simulations for better planning and visualization.",
    image: "./assets/images/banner-4.png",
  },
  {
    number: "05",
    title: "Project Planning & Management",
    description:
      "Data-driven planning tools to improve project management and efficiency.",
    image: "./assets/images/banner-4.png",
  },
  {
    number: "06",
    title: "Project Analysis & Execution",
    description:
      "Tools to analyze, execute, and monitor large-scale public projects.",
    image: "./assets/images/banner-4.png",
  },
];

document.querySelectorAll(".service-item").forEach((item) => {
  item.addEventListener("mouseover", () => {
    const index = item.getAttribute("data-index");
    const service = services[index];
    document.getElementById("service-number-stroke").textContent =
      service.number;
    document.getElementById("service-title").textContent = service.title;
    document.getElementById("service-detail").textContent = service.description;
    document.getElementById("service-image").src = service.image;
  });
});

const dots = document.querySelectorAll(".service-dot");
let current = 0;
function animateNextDot() {
  // Remove 'pulse' from all
  dots.forEach((dot) => dot.classList.remove("pulse"));
  // Add 'pulse' to current dot
  dots[current].classList.add("pulse");
  // Move to next dot
  current = (current + 1) % dots.length;
  // Repeat after a delay
  setTimeout(animateNextDot, 1500);
}

animateNextDot();
