document.addEventListener("DOMContentLoaded", () => {
  createCustomCursor();

  if (document.querySelector(".swiper")) {
    initWorksSlider();
  }
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

const initWorksSlider = () => {
  const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    loop: true,
    navigation: {
      nextEl: ".custom-next-button",
      prevEl: ".custom-prev-button",
    },
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
