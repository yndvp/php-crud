<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "
      INSERT INTO movies (
          title,
          country,
          genre
      ) VALUES (
          '{$_POST['title']}',
          '{$_POST['country']}',
          '{$_POST['genre']}'
      )
  ");

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
  if($result) {
      $_SESSION['message'] = "The new movie was created successfully";
  } else {
      $error = mysqli_error($conn);
      $_SESSION['message'] = "There was an error creating the new movie: " . $error;
  }

  header("Location: notification.php");
  exit();


  // TOTAL POINTS POSSIBLE: 35
?>