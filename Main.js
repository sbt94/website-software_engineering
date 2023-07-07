
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

function clearText() {
    document.getElementById("enter-name-textbox").value = "";
    document.getElementById("enter-phone-textbox").value = "";
    alert("Details submitted!");
    document.write("Thank you for your submission!");
}


