<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM movies WHERE id={$_GET["id"]}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include("_header.php"); ?>

<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php" class="to-home">Home</a>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row["id"] ?>">

    <div>
        <label>Movie title:</label>
        <input type="text" name="title" value="<?= $row["title"] ?>">
    </div>
    <div>
        <label>Country:</label>
        <input type="text" name="country" value="<?= $row["country"] ?>">
    </div>
    <div>
        <label>Genre:</label>
        <input type="text" name="genre" value="<?= $row["genre"] ?>">
    </div>
    <button type="submit">Update</button>
</form>


<!-- Step 8: (2 points) Include your footer here -->
<?php include("_footer.php"); ?>


<!-- TOTAL POINTS POSSIBLE: 44 -->