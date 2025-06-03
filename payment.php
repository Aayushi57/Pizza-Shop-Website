<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Page</title>
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color:#e9d6cd;
  margin: 0;
  padding: 0;
}
.heading{
  margin-top: 5%;
  font-size: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

}
.container {
  width: 80%;
  margin: 20px auto;
  background-color: #ffffff2e;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 350px;
  display: flex;
  flex-direction: column;
  padding: 0 15px 0 15px;
  margin-top:5%;
  justify-content: center;
  align-items: center;    
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"] {
  width: calc(100% - 12px);
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  text-align:center;
}

button {
  padding: 10px 20px;
  background-color:#c98769;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  justify-content: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 2%;
}
button:hover {
  background-color:#c66f46;
}
.modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color:#c98769;
      padding: 20px;
      border-radius: 10px;
      animation: heartbeat 1s infinite;
    }

    @keyframes heartbeat {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }

</style>
<body>
  <div class="heading">
    <h1>Payment Method</h1>
  </div>
  <div class="container">
       <div id="addressDisplay">
      <p id="displayAreaLocality"></p>
      <p id="displayHouseNo"></p>
      <p id="displayLandmark"></p>
    </div>
    <h3>Select Payment Method:</h3>
    <form>
      <label for="cod">Cash on Delivery</label>
      <input type="radio" id="cod" name="paymentMethod" value="COD" checked><br>
      <!-- <label for="online">Online Payment</label>
      <input type="radio" id="online" name="paymentMethod" value="Online"><br><br> -->
      <button type="button" onclick="showConfirmation()">Pay Now</button>
    </form>
  </div>
  <div class="modal" id="confirmationModal">
    <div class="modal-content">
      <p>Order Confirm!</p>
    </div>
  </div>
  <script>
    const storedAddress = localStorage.getItem("addressDetails");
    if (storedAddress) {
      const address = JSON.parse(storedAddress);
      document.getElementById("displayAreaLocality").innerText = `Area/Locality: ${address.areaLocality}`;
      document.getElementById("displayHouseNo").innerText = `House No/Flat: ${address.houseNo}`;
      document.getElementById("displayLandmark").innerText = `Nearby Landmark: ${address.landmark}`;
    }
    // Function to show confirmation modal
    function showConfirmation() {
      const modal = document.getElementById("confirmationModal");
      modal.style.display = "flex";
    }

    // Close modal when clicking outside the content
    window.onclick = function(event) {
      const modal = document.getElementById("confirmationModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  </script>
</body>
</html>

