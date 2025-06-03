<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our story</title>
</head>
    <style>
        #background-video {
  height: 100vh;
  width: 100vw;
  object-fit:fill;
  position: relative;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  
}
        .animation-container {
            position:absolute;
            top: -100px; /* Start off-screen */
            left: 50%;
            transform: translateX(-50%);
            font-size: 100px;
            color: #fff;
            animation: slideIn 4s ease forwards;
        }

        @keyframes slideIn {
            to {
                top: 46%;
            }
        }

.write{
  position: absolute;
  margin: 10%;
  margin-top: -13cm;
  font-size:large;
color: rgb(88, 89, 91);
letter-spacing: 1.2px;
word-spacing: 2.9px;
font-family: 'Monstserrat', serif;
font-weight: bolder;
}

.heading1{
  margin-left: 45%;
  margin-top: -47%;
  font-size: 250%; 
  font-family: "Red Rose",serif ;
}
.heading2{
  margin-left: 33%;
  margin-top: 2%;
  font-size: 400%;
  font-family: 'Special Elite', serif;
}

@media (max-width: 750px) {
    #background-video { display: none; }
    body {
      background: url("pexels-taryn-elliott-7172136\ \(2160p\).mp4") no-repeat;
      background-size: cover;
    }
}
    </style>
<body>
    <video id="background-video" autoplay loop muted poster="pexels-taryn-elliott-7172136 (2160p).mp4">
        <source src="pics/pexels-taryn-elliott-7172136 (2160p).mp4" type="video/mp4">
      </video>
      <div class="animation-container">Our Story
      </div>
      <div class="images">
        <img src="pics/ourstorybackground.jpg" alt="" style="width:100%; opacity: 9%; height: 21cm; ">
        <div class="write">PizzaDeAmigos was born out of a passion for delicious vegetarian food and a desire to create a welcoming space for friends to come together and enjoy a meal. Our journey started in the vibrant city of Kishangarh, Rajasthan, India, where we saw a need for a vegetarian pizza joint that could cater to the diverse tastes of our community.

          With a team of talented chefs and a commitment to using the freshest ingredients, we set out to create a menu that would satisfy even the most discerning palates. We experimented with different flavors, toppings, and combinations, always striving to strike the perfect balance between taste and quality.
          
          As word spread about our mouthwatering vegetarian pizzas, PizzaDeAmigos quickly became a local favorite. Friends would gather around our tables, sharing laughter, stories, and of course, slices of pizza. We realized that our mission was not just about serving great food, but also about fostering connections and creating memorable moments.
          
         <br>
         <br>
         Driven by this realization, we expanded our menu to include an array of desserts and refreshing cold drinks, ensuring that every aspect of the dining experience at PizzaDeAmigos would be a delight for our customers. From creamy cheesecakes to warm brownies and indulgent ice cream sundaes, our desserts are the perfect sweet ending to a satisfying meal.
          
          Today, PizzaDeAmigos continues to be a place where friends can come together, enjoy delicious vegetarian fare, and make lasting memories. We take pride in providing exceptional service, and our dedicated team is always ready to welcome you with a smile.
          
          Thank you for being a part of our story, and we look forward to serving you at PizzaDeAmigos!
        
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Lakki+Reddy&family=Montserrat:wght@200&family=Red+Rose:wght@300;400&family=Special+Elite&display=swap" rel="stylesheet"></p>   
  </div>
      </div>
      <section>
      <div class="heading1"> About
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lakki+Reddy&family=Red+Rose:wght@300;400&family=Special+Elite&display=swap" rel="stylesheet">
      </div>
              <div class="heading2">PizzaDeAmigos
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Lakki+Reddy&family=Special+Elite&display=swap" rel="stylesheet">
              </div>
              </section>
</body>
</html>