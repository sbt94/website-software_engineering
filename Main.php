<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Nadav's diner" content="width=device-width, initial-scale=1.0">
    <title>Nadav's diner</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="Main.js"></script> 
</head>
<body>
    <script src="path_to_your_js_file/customerID.js"></script>
    <div id="container">
        <?php include 'menu.php'; ?>
            <div>
                <header>
                    <h1>Welcome to Nadav's Diner</h1>
                    <p>The heart of Tel Aviv's culinary scene. A place where the diverse flavors of the world meet the vibrant energy of our beloved city. Nestled in the bustling urban landscape, we're not just a small diner, but a haven for food lovers who seek an extraordinary dining experience.</p>
                </header>
            
                <main>
                    <section>
                        <h2>Our Menu</h2>
                        <p>From sunrise till starlight, our menu boasts an array of dishes to suit all palates. Kickstart your morning with our delectable breakfast spread - from traditional Middle Eastern shakshuka to classic pancakes loaded with syrup and crispy bacon, the choice is yours. Our lunch and dinner offerings transition beautifully, providing comfort food for the soul. From our signature burgers served with crispy fries to a Mediterranean salad bursting with freshness, we've got it all. If you have specific dietary preferences, please let us know, and we'll gladly accommodate.</p>
                    </section>
            
                    <section>
                        <h2>Drinks</h2>
                        <p>Here at Nadav's Diner, we believe in the power of a well-paired drink. You'll find an extensive selection of beverages - from locally sourced coffee to crafted cocktails. For those who prefer grape to grain, our carefully curated wine list features the best of Israeli and international vineyards.</p>
                    </section>
            
                    <section>
                        <h2>Ambience</h2>
                        <p>Our space radiates the warmth and authenticity of Tel Aviv. Inside, you'll discover a cozy, inviting interior, and outside, our charming patio offers the perfect spot to dine under the starry city sky. Our staff, always attentive and warm, is committed to making your dining experience memorable.</p>
                    </section>
            
                    <section>
                        <h2>Our Commitment</h2>
                        <p>Every dish at Nadav's Diner is a labor of love, a testament to our dedication to serving food that not only satiates your hunger but also delights your senses. We look forward to welcoming you to our diner - to share in our passion, enjoy our culinary delights, and immerse yourself in an authentic Tel Aviv dining experience.</p>
                    </section>
                </main>
            
                <footer>
                    <p>So explore our site, get to know us, and when you're ready, book a table. We can't wait to serve you.</p>
                    <p>Welcome to Nadav's Diner. Welcome to a celebration of good food and good times.</p>
                </footer>
            </div>
            <div id="footer">
                <h4>We're hiring!</h4>
                <label for="enter-name-textbox">Enter your name:</label>
                <input type="text" id="enter-name-textbox" name="enter-name-textbox">
                <label for="enter-phone-textbox">Phone:</label>
                <input type="text" id="enter-phone-textbox" name="enter-phone-textbox">
                <button type="button" onclick="clearText()">Submit</button>
                <p>Contact for more information: 972525442849</p>
                <p>&copy; Nadav's diner 2023</p>
            </div>
        </div>
    </div>
</body>
</html>
