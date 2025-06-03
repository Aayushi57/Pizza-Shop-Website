<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Pairings</title>
    <style>
        body {
    font-family: 'Montserrat', Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    background-image: url(pics/pizza-wine-1.jpg);
}

header {
    background-color: #333;
    color: #fff;
    padding: 15px;
    text-align: center;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 30px;
    background-color: #ffffffc8;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.196);
}

h1 {
    color: #fdfbfb;
    font-family: "DM Serif Display",serif;
    
}

h2 {
    font-family: 'Kalnia', serif;
    text-align: center;
    padding-bottom: 4%;
    padding-top: 3%;
    font-size: 200%;
}
h3{
    font-weight: lighter;
}

select {
    padding: 10px;
    font-size: 16px;
    margin-bottom: 20px;
    width: 100%;
}

#pairings-list {
    list-style-type: none;
    padding: 0;
    font-weight: bolder;
}

.pairing-item {
    margin-bottom: 10px;
}
</style>
</head>

<body>
    <header>
        <h1>Pizza Pairings
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Exo+2:ital@1&family=Kalnia:wght@100&family=Lakki+Reddy&family=Lobster&family=Montserrat:wght@200&family=Red+Rose:wght@300;400&family=Special+Elite&display=swap" rel="stylesheet">
        </h1>
        <!-- <h2> the perfect beverage, side dish, or dessert to pair with different types of pizza.</h2> -->
    </header>
    <h2> Grab our Perfect Beverages to pair with our Pizzas.
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100&family=Lakki+Reddy&family=Lobster&family=Montserrat:wght@200&family=Red+Rose:wght@300;400&family=Special+Elite&display=swap" rel="stylesheet">    </h2>

    <main>
        <label for="pizza-type">Select a Pizza:<br><br></label>
        <select id="pizza-type">
            <option value="pizzaDeAmigos">PizzaDeAmigos</option>
            <option value="margherita">Margherita</option>
            <option value="onion Tomato">Onion Tomato</option>
            <option value="spicy paneer">Spicy Paneer</option>
            <option value="americana">Americana</option>
            <option value="four cheese">Four Cheese</option>
            <option value="lamexicana">La Mexicana</option>
            <option value="mix and Match">Mix and Match</option>
            <option value="cheese capsicun corn">Cheese Capsicum Corn</option>
            <option value="schezwan spice paneer">Schezwan Spice Paneer</option>
        </select>

        <h3>Pairings: </h3>
        <ul id="pairings-list"></ul>
    </main>

    <script>
        document.getElementById('pizza-type').addEventListener('change', updatePairings);

        function updatePairings() {
            const selectedPizza = document.getElementById('pizza-type').value;
            const pairingsList = document.getElementById('pairings-list');

            // Clear previous pairings
            pairingsList.innerHTML = '';

            // Add pairings based on the selected pizza
            switch (selectedPizza) {
                case 'margherita':
                    addPairing(' Chardonnay');
                    addPairing('Sparkling Water');
                    break;
                case 'pizzaDeAmigos':
                    addPairing(' Cabernet Sauvignon');
                    addPairing('Casamara Club');
                    break;
                case 'onion Tomato':
                    addPairing(' Syrah');
                    
                    addPairing('Curious Elixirs');
                    break;
                case 'spicy paneer':
                    addPairing('Zinfandel');
                    addPairing('Virgin Mojito');
                    break;    
                case 'americana':
                    addPairing(' Pinot Noir');
                    addPairing('Raspberry Lime Rickey');
                    break;
                case 'four cheese':
                    addPairing(' Sauvignon Blanc');
                    addPairing('CocaCola');
                    break;
                case 'lamexicana':
                    addPairing('Pinot Gris');
                    addPairing(' Iced Tea');
                    break;
                case 'mix and Match':
                    addPairing(' Riesling');
                    addPairing('Strawberry Soda');
                    break;
                case 'cheese capsicun corn':
                    addPairing('Beaujolais');
                    addPairing('Lemon Lime Soda');
                    break;
                case 'schezwan spice paneer':
                    addPairing(' Bordeaux');
                    addPairing('Italian Soda');
                    break;
                // Add more cases for other pizza options
                default:
                    addPairing('No specific pairings available');
            }
        }

        function addPairing(pairing) {
            const pairingsList = document.getElementById('pairings-list');
            const pairingItem = document.createElement('li');
            pairingItem.classList.add('pairing-item');
            pairingItem.textContent = pairing;
            pairingsList.appendChild(pairingItem);
        }
        updatePairings();
    </script>
</body>

</html>