<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="Nadav's diner" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Cart</title>
    <link rel="stylesheet" type="text/css" href="css/Menu.css" />
    <script src="Main.js"></script> 
  </head>
  <body>
  <script src="customerID.js"></script>
    <div id="container">
        <div id="menu">
            <?php include 'menu.php'; ?>
    </div>


    <div id="menu">
     <!-- read from mysql database and display the cart items -->
     <script>
        var customerID = localStorage.getItem('customerID');
        fetch(`http://34.239.35.228/db_get.php?customerID=${customerID}`)
        .then(response => response.json())
        .then(data => {
            // get a reference to the parent container where you want to append your items
            const menuContainer = document.getElementById('menu');
            menuContainer.classList.add('menu-group-heading');
            // loop through the data and create DOM elements for each item
            data.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('menu-item-text');

            const nameElement = document.createElement('h3');
            nameElement.textContent = item.name;
            itemDiv.appendChild(nameElement);

            const priceElement = document.createElement('p');
            priceElement.textContent = `Price: $${item.price}`;
            itemDiv.appendChild(priceElement);

            // append the item to the parent container
            menuContainer.appendChild(itemDiv);
            });
        })
        .catch(error => console.error('Error:', error));

        function deleteItems() {
            fetch("http://34.239.35.228/db_remove.php", {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(),
            })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch((error) => {
                console.error('Error:', error);
            });
    }
     </script>
    </div>
  
  </body>
</html>
