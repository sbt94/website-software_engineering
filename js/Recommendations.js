function submitForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get the entered values
    var name = document.getElementById("name").value;
    var recommendation = document.getElementById("recommendation").value;
    var rating = document.getElementById("rating").value;

    // Create a new list item for the recommendation
    var listItem = document.createElement("li");
    listItem.innerHTML = `
    <div>
        ${name} - ${recommendation}
    </div>
    <div class="stars">
        ${getStars(rating)}
    </div>
    `;

    // Append the new recommendation to the list
    document.getElementById("recommendations-list").appendChild(listItem);

    // Reset the form
    document.getElementById("add-recommendation-form").reset();
}

function getStars(count) {
    var stars = "";
    for (var i = 0; i < count; i++) {
        stars += '<span>★</span>';
    }
    return stars;
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("add-recommendation-form").addEventListener("submit", submitForm);
});
