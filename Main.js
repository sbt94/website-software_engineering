
// function replaceWithText(img) {
//     img.src = "text.png";
//   }
  
//   function replaceWithImage(img) {
//     img.src = "image.png";
//   }


// document.addEventListener("DOMContentLoaded", function() {
//   const images = document.querySelectorAll(".menu-list img");

//   images.forEach(image => {
//       image.addEventListener("mouseover", showText);
//       image.addEventListener("mouseout", hideText);
//   });
// });

// function showText(event) {
//   const image = event.target;
//   const title = image.getAttribute("data-title");

//   const tooltip = document.createElement("div");
//   tooltip.classList.add("tooltip");
//   tooltip.innerText = title;
//   tooltip.style.position = "absolute";
//   tooltip.style.left = event.clientX + "px";
//   tooltip.style.top = event.clientY + "px";

//   image.tooltip = tooltip;
//   document.body.appendChild(tooltip);
// }

// function hideText(event) {
//   const image = event.target;
//   if (image.tooltip) {
//       document.body.removeChild(image.tooltip);
//       image.tooltip = null;
//   }
// }

document.addEventListener("DOMContentLoaded", function() {
  const images = document.querySelectorAll(".menu-list img");

  images.forEach(image => {
      image.addEventListener("mouseover", showText);
      image.addEventListener("mouseout", hideText);
  });
});

function showText(event) {
  const image = event.target;
  const text = image.nextElementSibling;
  text.style.display = "block";
}

function hideText(event) {
  const image = event.target;
  const text = image.nextElementSibling;
  text.style.display = "none";
}

