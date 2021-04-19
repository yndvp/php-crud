<!-- Step 1: (2 points) Include your header here -->
<?php include("_header.php") ?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php" class="to-home">Go back to Home</a>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="insert.php" method="post">
    <div>
        <label>Movie title:</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Country:</label>
        <input type="text" name="country">
    </div>
    <div>
        <label>Genre:</label>
        <input type="text" name="genre">
    </div>
    <button type="submit">Create</button>
</form>

<!-- Step 5: (2 points) Include your footer here -->
<?php include("_footer.php"); ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->