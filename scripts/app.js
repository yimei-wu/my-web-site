document.addEventListener("DOMContentLoaded", () => {
  createCustomCursor();
});

const createCustomCursor = () => {
  const element = document.querySelector("#custom-cursor");
  document.addEventListener("mousemove", (event) => {
    const x = event.clientX;
    const y = event.clientY;

    const target = event.target;
    const isHovering =
      target.closest("a") ||
      target.closest("h1") ||
      target.closest("h2") ||
      target.closest("p");

    gsap.to(element, {
      x: x - 12,
      y: y - 12,
      scale: isHovering ? 3 : 1,
      ease: "power4",
      opacity: 1,
    });
  });
  document.addEventListener("mouseleave", () => {
    gsap.to(element, {
      opacity: 0,
    });
  });
};

const target = document.getElementById("target");
const results = Splitting({ target: target, by: "chars" });

// document
//   .getElementById("drawingArea")
//   .addEventListener("mousedown", startDrawing);
// document.getElementById("drawingArea").addEventListener("mouseup", stopDrawing);

// let drawing = false;
// let lastMousePos = { x: 0, y: 0 };

// function startDrawing(e) {
//   drawing = true;
//   drawLine(lastMousePos, { x: e.clientX, y: e.clientY });
// }

// function stopDrawing() {
//   drawing = false;
// }

// function drawLine(from, to) {
//   const linesGroup = document.getElementById("lines");
//   const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
//   line.setAttribute("x1", from.x + "px");
//   line.setAttribute("y1", from.y + "px");
//   line.setAttribute("x2", to.x + "px");
//   line.setAttribute("y2", to.y + "px");
//   line.setAttribute("stroke-width", "5");
//   line.setAttribute("stroke-linecap", "round");
//   line.setAttribute("stroke", "black");
//   linesGroup.appendChild(line);
//   lastMousePos = to;
// }

// document
//   .getElementById("drawingArea")
//   .addEventListener("mousemove", function (e) {
//     if (!drawing) return;
//     drawLine(lastMousePos, { x: e.clientX, y: e.clientY });
//   });
const home = document.getElementById("home");
const about = document.getElementById("about");
const works = document.getElementById("works");
const hidden = document.getElementsByClassName("hidden");

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    console.log(this.getAttribute("href"));
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

const changeVisibility = () => {
  if (home.classList.contains("active")) {
    home.classList.remove("hidden");
  }
  if (about.classList.contains("active")) {
    about.classList.remove("hidden");
  }
  if (works.classList.contains("active")) {
    works.classList.remove("hidden");
  }
};

changeVisibility();
