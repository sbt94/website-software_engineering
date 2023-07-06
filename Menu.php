<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="Nadav's diner" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link rel="stylesheet" type="text/css" href="css/Menu.css" />
    <script src="Main.js"></script> 
  </head>
  <body>
  <script src="customerID.js"></script>
    <div id="container">
        <div id="menu">
            <?php include 'menu.php'; ?>

        <main class="container">
        <div class="menu">
            <h2 class="menu-group-heading">Appetizers</h2>
            <div class="menu-group">
            <div class="menu-item">
                <img src="css/Soup.jpg" alt="Soup" class="menu-item-img"/>
                <div class="menu-item-text">
                <h3 class="menu-item-heading">
                    <span class="menu-item-name">Tuscan Tomato & Basil Bisque</span>
                    <span class="menu-item-price">$12.90</span>
                </h3>
                <p class="menu-item-desc">
                    Immerse yourself in a burst of Italian flavors with our rich,
                    creamy Tuscan Tomato & Basil Bisque. Sun-kissed tomatoes blend with fresh basil,
                    garlic, and a hint of cream, creating a velvety soup that's both comforting and indulgent.
                    Served with a side of warm, crusty garlic bread, it's the perfect starter or light main course.
                </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="css/Bruschetta.jpg" alt="Black Placeholder Image" class="menu-item-img"/>
                <div class="menu-item-text">
                <h3 class="menu-item-heading">
                    <span class="menu-item-name">Classic Italian Bruschetta</span>
                    <span class="menu-item-price">$15.80</span>
                </h3>
                <p class="menu-item-desc">
                    Experience the vibrant flavors of Italy with our Classic Italian Bruschetta. 
                    We start with a slice of freshly toasted artisan bread,
                    rubbed with garlic and drizzled with high-quality olive oil.
                    The toast is then piled high with a colorful mix of ripe, juicy tomatoes, fragrant basil,
                    and a touch of red onion for an added crunch.
                </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="css/Wings.jpg" alt="Black Placeholder Image" class="menu-item-img"/>
                <div class="menu-item-text">
                <h3 class="menu-item-heading">
                    <span class="menu-item-name">Fiery Buffalo Hot Wings</span>
                    <span class="menu-item-price">$18.10</span>
                </h3>
                <p class="menu-item-desc">
                    Turn up the heat with our Fiery Buffalo Hot Wings.
                    Prepared using the finest chicken wings, each piece is marinated in a tangy,
                    homemade buffalo sauce that's been perfectly balanced for an explosive burst of flavor.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-group-heading">Main Course</h2>
            <div class="menu-group">
            <div class="menu-item">
                <img src="css/Salmon.jpg" alt="Black Placeholder Image" class="menu-item-img"/>
                <div class="menu-item-text">
                <h3 class="menu-item-heading">
                    <span class="menu-item-name">Honey-Glazed Grilled Salmon</span>
                    <span class="menu-item-price">$23.50</span>
                </h3>
                <p class="menu-item-desc">
                    Indulge in our Honey-Glazed Grilled Salmon, the star of our main course selections.
                    We use only the highest quality salmon fillets, seasoned and grilled to flaky perfection.
                    Each fillet is skillfully brushed with our homemade honey glaze, which caramelizes on the grill,
                    enveloping the salmon in a layer of sweet, sticky decadence that enhances its rich, natural flavor.
                </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="css/Burger.jpeg" alt="Black Placeholder Image" class="menu-item-img"/>
                <div class="menu-item-text">
                <h3 class="menu-item-heading">
                    <span class="menu-item-name">Signature Gourmet Hamburger</span>
                    <span class="menu-item-price">$30.90</span>
                </h3>
                <p class="menu-item-desc">
                    Take a bite of our Signature Gourmet Hamburger and be transported into a world of bold, hearty flavors.
                    We start with a hand-formed patty made from 100% prime beef, seasoned to perfection, and grilled to your liking.
                </p>
                </div>
            </div>
            <div class="menu-item">
                <img
                src="css/Pizza.jpg" alt="Black Placeholder Image" class="menu-item-img"/>
                <div class="menu-item-text">
                <h3 class="menu-item-heading">
                    <span class="menu-item-name">Neapolitan-Style Margherita Pizza</span>
                    <span class="menu-item-price">$25.30</span>
                </h3>
                <p class="menu-item-desc">
                    Experience authentic Italian flavors with our Neapolitan-Style Margherita Pizza.
                    Our hand-stretched crust, topped with San Marzano tomato sauce, creamy buffalo mozzarella, and fresh basil,
                    creates a harmonious blend of tastes and textures. Baked to perfection in our stone oven, the pizza emerges with a golden,
                    bubbly crust and a molten cheese layer.
                    Simplicity at its finest, every bite of our Margherita Pizza celebrates the timeless beauty of Italian cuisine.
                </p>
                </div>
            </div>
            </div>
        </div>


        <div class="menu">
            <h2 class="menu-group-heading">Drinks</h2>
            <div class="menu-group">
                <div class="menu-item">
                    <img src="css/Red_Wine.jpg" alt="Red Wine" class="menu-item-img"/>
                    <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Cabernet Sauvignon</span>
                        <span class="menu-item-price">$8.00</span>
                    </h3>
                    <p class="menu-item-desc">
                        A full-bodied red wine with a character of black currant, plum, and cherry notes.
                    </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="css/Chardonnay.jpg" alt="Chardonnay" class="menu-item-img"/>
                    <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Chardonnay</span>
                        <span class="menu-item-price">$8.00</span>
                    </h3>
                    <p class="menu-item-desc">
                        Crisp and refreshing white wine with notes of apple, pear, and a hint of oak.
                    </p>
                    </div>
                </div>
                
        </div>
        <div class="menu">
            <h2 class="menu-group-heading">Soft Drinks</h2>
            <div class="menu-group">
                <div class="menu-item">
                    <img src="css/Cola.jpg" alt="Coca-Cola" class="menu-item-img"/>
                    <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Coca-Cola</span>
                        <span class="menu-item-price">$2.00</span>
                    </h3>
                    <p class="menu-item-desc">
                        Classic Coca-Cola, chilled and refreshing.
                    </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="css/Sprite.jpg" alt="Sprite" class="menu-item-img"/>
                    <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Sprite</span>
                        <span class="menu-item-price">$2.00</span>
                    </h3>
                    <p class="menu-item-desc">
                        Refreshing and crisp Sprite, perfect for a quick thirst quencher.
                    </p>
                    </div>
                </div>                
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-group-heading">Desserts</h2>
            <div class="menu-group">
                <div class="menu-item">
                    <img src="css/Cheesecake.jpg" alt="Cheesecake" class="menu-item-img"/>
                    <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Classic New York Cheesecake</span>
                        <span class="menu-item-price">$8.50</span>
                    </h3>
                    <p class="menu-item-desc">
                        A creamy, silky-smooth classic New York cheesecake served with a tangy raspberry coulis.
                    </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="css/Tiramisu.jpg" alt="Tiramisu" class="menu-item-img"/>
                    <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Classic Tiramisu</span>
                        <span class="menu-item-price">$9.50</span>
                    </h3>
                    <p class="menu-item-desc">
                        A slice of heaven layered with creamy mascarpone and espresso-soaked ladyfingers, dusted with a rich cocoa topping.
                    </p>
                    </div>
                </div>
                
            </div>
        </div>


        </main>
    </div>
  </body>
</html>
