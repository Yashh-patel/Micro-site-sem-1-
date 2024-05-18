<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Micro-Site | Reviews</title>
  <!-- It is used to add external css (css/style.css)-->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <!-- script for alter box when adding review -->
  <script>
    function myfuction() {
      alert("Thank You! for your response");
    }
  </script>
</head>
<?php
// Config File is used to connect to database (phpmyadmin) 
include('php/config.php');
// Header (Global Navigation Links) 
include('includes/header.php');
?>

<body <?php if (isset($_REQUEST['success'])) {
        echo "onload='myfuction()'";
      } ?>>

  <!-- display user reviews -->
  <section class="userReivews">
    <h2><img src="images/rating.png" style="width:19px; margin-right: 2px;" alt="User_Reviews"> User Reviews</h2>
    <?php
    $sql = "SELECT * FROM user_reviews";
    $check = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($check)) {
      echo "<table style='padding:5px; background:#FF4500; border:6px solid #FFFFF0; text-align:center; color:#fff;'>";
      echo "<tr'>";
      echo "<td style='width:50px;'><img src='images/user.png' width='20px;'></td>";
      echo "<td style='width:150px;'>" . $row['name'] . "</td>";
      echo "<td style='width:250px;'><i>" . $row['email'] . "</i></td>";
      echo "<td style='width:400px;'><i>" . $row['comment'] . "</i></td>";
      echo "</table>";
    } ?>
    </div>
  </section>
  <!-- FORM elements (for Write a review) -->
  <div class="container">
    <header>
      <h2><img src="images/writing.png" style="width:18px; margin-right: 5px;" alt="write_your_review">Write your review</h2>
    </header>
    <form action="php/review_process.php" method="POST">
      <div class="row">
        <div class="col-25">
          <label for="fname">Your Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="yourname" autocomplete="off" required name="yourname" placeholder="Your name...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email Adddress</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" autocomplete="off" required name="email" placeholder="Your email adddress...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Comment</label>
        </div>
        <div class="col-75">
          <textarea id="review" autocomplete="off" required name="review" placeholder="Write your review..." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Add review">
      </div>
    </form>
  </div>
</body>
<!-- Footer -->
<?php
include('includes/footer.php');
?>

</html>