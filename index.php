<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");

  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM movies");
  $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include("_header.php"); ?>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<nav>
  <li>
    <a href="index.php">Home</a>
  </li>
  <li>
    <a href="new.php">New Movies</a>
  </li>
</nav>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table>
    <thead>
        <tr>
            <td>Title</td>
            <td>Country</td>
            <td>Genre</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($movies as $movie): ?>
            <tr>
                <td><?= $movie['title'] ?></td>
                <td><?= $movie['country'] ?></td>
                <td><?= $movie['genre'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $movie['id'] ?>">Edit</a>
                    |
                    <a href="delete.php?id=<?= $movie['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<!-- Step 7: (2 points) Include your footer here -->
<?php include("_footer.php"); ?>


<!-- TOTAL POINTS POSSIBLE: 34 -->