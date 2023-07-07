<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Menu</title>
    <link rel="stylesheet" type="text/css" href="css/Menu.css" />
    <script src="Main.js"></script> 
  </head>
  <body>
  <script src="customerID.js"></script>
    <div id="container">
      <?php include 'menu.php'; ?>
    
    <main class="container">
    <script>
      fetch('menu.json') 
        .then(response => response.json())
        .then(menu => {
          const menuContainer = document.getElementById('menu');
          menu.forEach(category => {
            // Create category heading
            const heading = document.createElement('h2');
            heading.classList.add('menu-group-heading');
            heading.textContent = category.category;
            menuContainer.appendChild(heading);

            const group = document.createElement('div');
            group.classList.add('menu-group');

            // Create each menu item
            category.items.forEach(item => {
              const menuItem = document.createElement('div');
              menuItem.classList.add('menu-item');

              const img = document.createElement('img');
              img.src = item.img;
              img.alt = item.name;
              img.classList.add('menu-item-img');
              menuItem.appendChild(img);

              const textContainer = document.createElement('div');
              textContainer.classList.add('menu-item-text');
              menuItem.appendChild(textContainer);

              const heading = document.createElement('h3');
              heading.classList.add('menu-item-heading');
              textContainer.appendChild(heading);

              const name = document.createElement('span');
              name.classList.add('menu-item-name');
              name.textContent = item.name;
              heading.appendChild(name);

              const price = document.createElement('span');
              price.classList.add('menu-item-price');
              price.textContent = '$' + item.price.toFixed(2);
              heading.appendChild(price);

              const desc = document.createElement('p');
              desc.classList.add('menu-item-desc');
              desc.textContent = item.description;
              textContainer.appendChild(desc);

              const button = document.createElement('button');
              button.textContent = 'Add to Cart';
              button.addEventListener('click', () => itemClicked(item));
              textContainer.appendChild(button);

              group.appendChild(menuItem);
            });

            menuContainer.appendChild(group);
          });
        })
        .catch(error => console.error('Error:', error));

      function itemClicked(item) {
        alert('You added ' + item.name + ' to your cart.');

            // Retrieve the customer ID from local storage
        var customerID = localStorage.getItem('customerID');

          // Create a new object that includes the item data and the customer ID
        var dataToSend = {
            ...item,
             customerID: customerID
            };

        fetch("db.php", {
            mode: 'no-cors',
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataToSend),
        })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch((error) => {
            console.error('Error:', error);
        });

      }
    </script>
    </main>
  </body>
</html>

