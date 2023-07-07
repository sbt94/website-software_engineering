
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
  console.log("Clearing text...");
  var nameBox = document.getElementById("enter-name-textbox");
  var phoneBox = document.getElementById("enter-phone-textbox");
  var fileBox = document.getElementById("enter-file-textbox");

  // Check if all textboxes are filled
  if (nameBox.value.trim() === "" || phoneBox.value.trim() === "" || fileBox.value.trim() === "") {
      alert("Please fill in all fields.");
      console.log("Please fill in all fields.");
      return;  // exit the function
  }

  // If all fields are filled, clear them and display the submission message
  nameBox.value = "Thank you for your submission!";
  phoneBox.value = "";
  fileBox.value = "";
  console.log("Details submitted!");
  document.getElementById("message").innerHTML = "Thank you for your submission!";
  alert("Details submitted!");
}





