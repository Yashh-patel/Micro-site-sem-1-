<!-- Project by Group_AB-->
<!DOCTYPE html>
<html>

<head>
   <title>Micro-Site | Home</title>
   <!-- It is used to add external css (css/style.css)-->
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<?php
// connection file (config.php) is used to connect to database
include('php/config.php');
// Header (Global Navigation Links) 
include('includes/header.php');
?>

<body>
   <!-- Main section of the page -->
   <main>
      <!-- section for product images -->
      <section class="productImg">
         <img src="images/radio_img1.jpg" alt="Radio Image 1" class="mainImg">
         <img src="images/radio_img2.jpg" alt="Radio Image 2" class="mainImg"><br>
         <img src="images/radio_img3.jpg" alt="Radio Image 3" class="mainImg">
         <img src="images/radio_img4.jpg" alt="Radio Image 4" class="mainImg">
      </section>
      <!-- Some basic product description -->
      <section class="productDescription">
         <h3>
            <b style="color: #FF4500;">|</b> Old Antique Wood ZENITH Vintage Art Deco Radio
         </h3>
         <p>Country / Region of Manufacture: <i>USA<br></i>Brand: <i>Zenith</i></p>
         <!-- Specifications of product -->
         <h3>
            <b style="color: #FF4500;">|</b> Item Description
         </h3>
         <table>
            <tr>
               <th>Dimensions</th>
               <td>16W * 10H * 10D</td>
            </tr>
            <tr>
               <th>Playtime</th>
               <td>30-Hour Playtime! (With a hour charge)</td>
            </tr>
            <tr>
               <th>Drivers</th>
               <td>Titanium Drivers</td>
            </tr>
         </table>
         <!-- Reviews of user -->
         <h3>
            <b style="color: #FF4500;">|</b> User Reviews <a href="reviews.php"><button class="mybtn">Add Review</button></a>
         </h3>
         <?php // This block is used to display User Reviews from the database
         $sql = "SELECT * FROM user_reviews"; // SQL query used to fetch data from the table 'user_reviews'
         $check = mysqli_query($connection, $sql);
         while ($row = mysqli_fetch_array($check)) {
            echo "<p><span style='background-color: #FFF8DC; color: #000; padding:1px;'>" . $row['name'] . "</span> " . "<i>" . $row['comment'] . "</i><br></p>";
         } ?>

         <!-- User Support -->
         <h3>
            <b style="color: #FF4500;">|</b> User Support <a href="support.php"><button class="mybtn">Support</button></a>
         </h3>
         <p>If you need any support or further assistance, please click on <i>'Support'</i> button.</p>
         <br>
         <h3>
            <b style="color: #FF4500;">|</b> User Rating:
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color: #fff;"></span>
         </h3>
         <p>4.1 average based on 75 reviews.</p>
         <hr style="border:3px solid #f1f1f1">

         <div class="row">
            <div class="side">
               <div>5 star</div>
            </div>
            <div class="middle">
               <div class="bar-container">
                  <div class="bar-5"></div>
               </div>
            </div>
            <div class="side right">
               <div>35</div>
            </div>
            <div class="side">
               <div>4 star</div>
            </div>
            <div class="middle">
               <div class="bar-container">
                  <div class="bar-4"></div>
               </div>
            </div>
            <div class="side right">
               <div>15</div>
            </div>
            <div class="side">
               <div>3 star</div>
            </div>
            <div class="middle">
               <div class="bar-container">
                  <div class="bar-3"></div>
               </div>
            </div>
            <div class="side right">
               <div>3</div>
            </div>
            <div class="side">
               <div>2 star</div>
            </div>
            <div class="middle">
               <div class="bar-container">
                  <div class="bar-2"></div>
               </div>
            </div>
            <div class="side right">
               <div>2</div>
            </div>
            <div class="side">
               <div>1 star</div>
            </div>
            <div class="middle">
               <div class="bar-container">
                  <div class="bar-1"></div>
               </div>
            </div>
            <div class="side right">
               <div>20</div>
            </div>
         </div>
      </section>
   </main>
</body>
<?php
// Footer 
include('includes/footer.php');
?>

</html>