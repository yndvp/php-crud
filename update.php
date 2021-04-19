<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");

  // Step 2: (20 points) Update the existing 'supers' row in the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "UPDATE movies SET
    title = '{$_POST['title']}',
    country = '{$_POST['country']}',
    genre = '{$_POST['genre']}'
    WHERE id = {$_POST['id']}
  ";
  $result = mysqli_query($conn, $sql);

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
  if($result) {
    $_SESSION["message"] = "The new movie was updated successfully";
  } else {
    $_SESSION["message"] = "There was an error updating the new movie: " . mysqli_error($conn);
  }
  header("Location: notification.php");
  exit;

  // TOTAL POINTS POSSIBLE: 38
?>