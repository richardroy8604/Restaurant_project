<!DOCTYPE html>
<html>
<?php
    include 'connection.php';
    ?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./mac-book-pro-14-4.css" />
  <link rel="stylesheet" href="styles.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Libre Baskerville:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Segoe UI:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"
    />
    
  <style>
    /* Your existing CSS */

    /* Additional CSS for positioning "booking data" */
    .admin-dashboard {
      position: relative;
    }

    

    
  </style>
  <style>
  /* Existing CSS... */

  /* Styles for the tables */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2px;
  }

  th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  /* Additional styles for better spacing and alignment */
  

  
</style>
<style>
  /* Additional CSS for Menu Table */
  .menu-table {
    position: absolute;
    top: 300px; /* Adjust the top position as needed */
    left: 20%; /* Adjust the left position as needed */
    transform: translateX(-50%);
    z-index: 9999; /* Ensure a high z-index to place it above other elements */
    background-color: white; /* Optional: set background color for better visibility */
    padding: 2px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 80%;
    margin: 20px auto;
    overflow-x: auto;
  }

  /* Other styles remain unchanged */
</style>
<style>
    /* Additional CSS for Input Boxes */
    .input-container {
      position: absolute;
      top: 700px; /* Adjust the top position as needed */
      left: 10%; /* Adjust the left position as needed */
      display: flex;
  flex-direction: column;
  margin-top: 20px;
    }

    .input-box {
      width: 200px; /* Adjust width as needed */
      height: 30px; /* Adjust height as needed */
      margin-bottom: 10px; /* Adjust spacing between boxes */
      border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box; /* Include padding and border in width calculation */
  font-size: 16px;
    }
  </style>
  </head>
  <body>
    
  

    
      <img class="image-7-icon2" alt="" src="./public/image-7@2x.png" />

      <div class="macbook-pro-14-4-child"></div>
      <div class="rectangle-parent13">
        <div class="group-child62"></div>
        <div class="rectangle-parent14">
          <div class="group-child63"></div>
          <img class="group-child64" alt="" src="./public/rectangle-33.svg" />

          <div class="ra-wrapper2">
            <div class="ra10">R&A</div>
          </div>
        </div>
        <div class="menu-parent7">
          <div class="menu10">Menu</div>
          <div class="menu10">Reservation</div>
          <div class="menu10">About</div>
          <div class="menu10">Contact</div>
        </div>
        <div class="rectangle-parent15">
          <div class="group-child62"></div>
          <div class="group-child66"></div>
          <img class="group-child67" alt="" src="./public/rectangle-33.svg" />

          <div class="ra11">R&A</div>
          <div class="macbook-pro-14-4-item"></div>
          <div class="reservation19">Reservation</div>
          <div class="frame-parent4">
            <div class="menu-parent8">
              <div class="menu10">Menu</div>
              <div class="menu10">Reservation</div>
              <div class="menu10">About</div>
              <div class="menu10">Contact</div>
            </div>
            <div class="home6">Home</div>
          </div>
        </div>
        <div class="rectangle-parent15">
          <div class="group-child62"></div>
          <div class="group-child66"></div>
          <img class="group-child67" alt="" src="./public/rectangle-33.svg" />

          <div class="ra11">R&A</div>
          <div class="macbook-pro-14-4-item"></div>
          <div class="reservation21" id="reservationText3">Reservation</div>
          <div class="frame-parent4">
            <div class="menu-parent8">
              <div class="menu12" id="menuText2">Menu</div>
              <div class="menu12" id="reservationText4">Reservation</div>
              <div class="about13" id="adminloginText1">AdminLogin</div>
            </div>
            <div class="home7" id="homeText1">Home</div>
          </div>
        </div>
      </div>
      <div class="macbook-pro-14-4-item"></div>
      <div class="reservation23">Reservation</div>
      <b class="menu13 admin-dashboard">MENU
    <!-- Booking Data -->
  
  </b>
      
    </div>

    
  <div class="menu-table">
  <?php
  // SQL query to fetch menu items from the database (assuming table name is 'menu_items')
  $sql_menu = "SELECT * FROM menu";
  $result_menu = $connect->query($sql_menu);

  if ($result_menu->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>Item Number</th><th>Item</th><th>Price</th></tr>';

    while ($row_menu = $result_menu->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row_menu["item_number"] . '</td>';
      echo '<td>' . $row_menu["item"] . '</td>';
      echo '<td>' . $row_menu["price"] . '</td>';
      echo '</tr>';
    }

    echo '</table>';
  } else {
    echo 'No menu items found';
  }
  ?>
</div>

  

    <script>
      var reservationText3 = document.getElementById("reservationText3");
      if (reservationText3) {
        reservationText3.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var menuText2 = document.getElementById("menuText2");
      if (menuText2) {
        menuText2.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-4.php";
        });
      }
      
      var reservationText4 = document.getElementById("reservationText4");
      if (reservationText4) {
        reservationText4.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var homeText1 = document.getElementById("homeText1");
      if (homeText1) {
        homeText1.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-3.php";
        });
      }
      var homeText1 = document.getElementById("adminloginText1");
      if (homeText1) {
        homeText1.addEventListener("click", function (e) {
          window.location.href = "adminlogin.html";
        });
      }
    </script>
    
</body>
</html>
