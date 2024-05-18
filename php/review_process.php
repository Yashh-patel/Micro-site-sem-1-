<?php
// by Utsav Patel
include('config.php'); // connection file to establish connection to database
    $username = $_POST['yourname']; // using POST user data will not reveal in URL 
    $useremail = $_POST['email'];
    $userreview = $_POST['review'];
    // SQL query to insert userInput into database
    $qry = "INSERT INTO user_reviews(name, email, comment)
        VALUES('" . $username . "', '" . $useremail . "', '" . $userreview . "')";
    $result = mysqli_query($connection, $qry);
    if ($result) // if QUERY is correct and data is insert and then it will redirect to reviews.php page
    {
        header("location:../reviews.php?success=1");
    } else { // if QUERY is not correct and data is not inserted and then it will rase some error
        echo "Something Went Wrong";
    }
mysqli_close($connection); // closing connection