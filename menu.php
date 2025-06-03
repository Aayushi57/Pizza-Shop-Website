<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color:#e9d6cd;
}
.logo{
  padding-left: 27%;
  padding-top: 20px;

}
.heading{
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
margin-bottom: 5%;
}
.heading2{
  text-align: center;
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
  font-size: 20px;
margin-bottom: 5%;
margin-top:1%;
}
nav{
    /* display: flex; */
    /* justify-content: center; */
    margin-right: 27%;
    margin-left: -4%;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

}
nav :hover{
    color: rgba(201, 127, 62, 0.979);
}
nav a{
    color: black;
    text-decoration: none;
font-family: "Red Hat Display", sans-serif;
}

ul li{
    display: inline-flex;
    margin-top: 5%;
    margin-bottom: 5%;
    padding: 2%;
font-size: 20px;
padding-right: 1%;
text-indent: 10px;
}
.menu-item {
    background-color: #fff;
    border: 1px solid #ccc;
    margin: 10px;
    padding: 10px;
    display: inline-block; /* Display items horizontally */
    text-align: center; /* Center elements horizontally */
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
    margin-left: 7%;

}
.menu-item img{
  height: 200px;
  width: 200px;
}

.item-info {
    margin: 10px 0; /* Add some vertical spacing between elements */
}

.add-to-cart {
    background-color: rgb(53, 103, 241);
    color: white;
    border: none;
    padding: 7px 10px;
    cursor: pointer;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);

}
.add-to-cart:hover{
background-color: rgb(232, 90, 90);
}

#cart-count {
    background-color: #4caf4f00;
    color: rgb(15, 15, 18);
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: right;
    align-items: right;
    margin-left: 30px;
    margin-top: -20px;
}

#cart-items {
    border: 1px solid #ccc;
    padding: 10px;
    margin-top: 20px;
}

#total-amount {
    font-weight: bold;
}

</style>
<body>
  <div class="logo">
    <img src="pics/Picsart_23-10-16_22-59-35-480.png" alt="" usemap="#logolink" width="65%" height="100px">
    <map name="logolink">
        <area shape="default" coords="34,44,270,350" alt="ooops" href="file:///C:/Users/Education/Desktop/website/homepage.html">
        <nav>
          <ul>
              <li><a href="index.php" >Home </a></li>
              <li><a href="menu.php" >Menu </a></li>
              <li><a href="contactus.php">Contact Us</a></li>
              <li><a href="behind the scene.php">Behind The Scene</a></li>
              <li><a href="our story.php">Our Story
                  <link rel="preconnect" href="https://fonts.googleapis.com">
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet"> </a></li>
              <li>
                <div class="item">
                  <a href="cart.php">
                      <i class="fa fa-shopping-cart"></i>
                      <span id="cart-count">0</span>
                  </a>
              </div>
            </li>
                </ul>
      </nav>
        
</div>
  <div class="heading">
  <h1> Our Menu</h1>
  </div>
  <div class="heading2">
  <h2>Pizza</h2>
  </div>
    <div class="menu-item">
      <img src="pics/mpic.webp" alt="Item 1">
      <div class="item-info">
          <h2>Margherita</h2>
          <p>Price: ₹200</p>
      </div>
      <button class="add-to-cart" data-name="Margherita" data-price="200">Add to Cart</button>
  </div>
  <div class="menu-item">
      <img src="pics/onion tomato pizza.jpg" alt="Item 2">
      <div class="item-info">
          <h2>Onion Tomato Pizza</h2>
          <p>Price: ₹190</p>
      </div>
      <button class="add-to-cart" data-name="onion tomato pizza" data-price="190">Add to Cart</button>
  </div>
  <div class="menu-item">
    <img src="pics/spicy paneer pizza.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Spicy Paneer Pizza</h2>
        <p>Price: ₹200</p>
    </div>
    <button class="add-to-cart" data-name="spicy paneer pizza" data-price="200">Add to Cart</button>
</div>

<div class="menu-item">
    <img src="pics/americana pizza.jpg" alt="Item 2">
    <div class="item-info">
        <h2>Americana Pizza </h2>
        <p>Price: ₹300</p>
    </div>
    <button class="add-to-cart" data-name="Americana Pizza" data-price="300">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Four-Cheese-Pizza.jpg" alt="Item 2">
    <div class="item-info">
        <h2>Four-Cheese-Pizza</h2>
        <p>Price: ₹280</p>
    </div>
    <button class="add-to-cart" data-name="Four-Cheese-Pizza" data-price="280">Add to Cart</button>
</div>

<div class="menu-item">
    <img src="pics/la mexicana pizza.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>La Mexicana Pizza </h2>
        <p>Price: ₹300</p>
    </div>
    <button class="add-to-cart" data-name="La Mexicana Pizza" data-price="300">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/mix n match pizza.webp" alt="Item 2">
    <div class="item-info">
        <h2>Mix And Match Pizza </h2>
        <p>Price: ₹250</p>
    </div>
    <button class="add-to-cart" data-name="mix n match pizza" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Cheese Capsicum Corn Pizza.jpg" alt="Item 3">
    <div class="item-info">
        <h2>Cheese-Capsicum <br> Corn Pizza</h2>
        <p>Price: ₹150</p>
    </div>
    <button class="add-to-cart" data-name="Cheese Capsicum Corn Pizza" data-price="15">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/PizzaDeAmigos special pizza.jpg" alt="Item 2">
    <div class="item-info">
        <h2>PizzaDeAmigos<br>Special Pizza</h2>
        <p>Price: ₹500</p>
    </div>
    <button class="add-to-cart" data-name="PizzaDeAmigos special pizza" data-price="500">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/shzewan spice paneer pizza.jpg" alt="Item 2">
    <div class="item-info">
        <h2>Shzewan Spice<br>Paneer Pizza</h2>
        <p>Price: ₹250</p>
    </div>
    <button class="add-to-cart" data-name="Shzewan spice paneer pizza" data-price="250">Add to Cart</button>
</div>
<div class="heading2">
  <h2>Beverages</h2>
  </div>
  <div class="menu-item">
    <img src="pics/Strawberry Soda.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Strawberry Soda</h2>
        <p>Price: ₹310</p>
    </div>
    <button class="add-to-cart" data-name="Strawberry Soda" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Beaujolais.jpg" alt="Item 2">
    <div class="item-info">
        <h2>Beaujolais</h2>
        <p>Price: ₹250</p>
    </div>
    <button class="add-to-cart" data-name="Beaujolais" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Cabernet Sauvignon'.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Cabernet Sauvignon</h2>
        <p>Price: ₹450</p>
    </div>
    <button class="add-to-cart" data-name="Cabernet Sauvignon" data-price="250">Add to Cart</button>
</div>

<div class="menu-item">
    <img src="pics/Chardonnay.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Chardonnay</h2>
        <p>Price: ₹200</p>
    </div>
    <button class="add-to-cart" data-name="Chardonnay" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/CocaCola.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>CocaCola</h2>
        <p>Price: ₹200</p>
    </div>
    <button class="add-to-cart" data-name="CocaCola" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Curious Elixirs.webp" alt="Item 2">
    <div class="item-info">
        <h2>Curious Elixirs</h2>
        <p>Price: ₹350</p>
    </div>
    <button class="add-to-cart" data-name="Curious Elixirs" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Iced Tea.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Iced Tea</h2>
        <p>Price: ₹230</p>
    </div>
    <button class="add-to-cart" data-name="Iced Tea" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Italian Soda.webp" alt="Item 2">
    <div class="item-info">
        <h2>Italian Soda</h2>
        <p>Price: ₹250</p>
    </div>
    <button class="add-to-cart" data-name="Italian Soda" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Lemon Lime Soda.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Lemon Lime Soda</h2>
        <p>Price: ₹150</p>
    </div>
    <button class="add-to-cart" data-name="Lemon Lime Soda" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Raspberry Lime Rickey.jpg" alt="Item 2">
    <div class="item-info">
        <h2>Raspberry Lime <br> Rickey</h2>
        <p>Price: ₹350</p>
    </div>
    <button class="add-to-cart" data-name="Raspberry Lime Rickey" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Pinot Noir.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Pinot Noir</h2>
        <p>Price: ₹200</p>
    </div>
    <button class="add-to-cart" data-name="Pinot Noir" data-price="250">Add to Cart</button>
</div>
<div class="menu-item">
    <img src="pics/Casamara Club'.jpeg" alt="Item 2">
    <div class="item-info">
        <h2>Casamara Club</h2>
        <p>Price: ₹120</p>
    </div>
    <button class="add-to-cart" data-name="Casamara Club" data-price="250">Add to Cart</button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartCount = document.getElementById('cart-count');

        let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        function updateCartCount() {
            cartCount.textContent = cartItems.length;
        }

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function () {
                const name = button.getAttribute('data-name');
                const price = parseFloat(button.getAttribute('data-price'));
                const image = button.parentElement.querySelector('img').src;

                cartItems.push({ name, price, image });
                localStorage.setItem('cart', JSON.stringify(cartItems));

                updateCartCount();
            });
        });

        updateCartCount();
    });
</script>
</body>
</html>