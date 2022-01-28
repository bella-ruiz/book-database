<?php
	include 'database.php';
	$query = "SELECT * FROM book ORDER BY title";
	$books = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Database of Iconic Fiction </title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">
<header>
<h1>Database of Iconic Fiction</h1>

<p><a href="enter_new_record.php">Add an entry</a></p>
</header>
<table class="table">
 <thead class="thead-light">
	<!-- table column headings -->
	<tr>
	  <th scope="col">Title</th>
	  <th scope="col">Author</th>
	  <th scope="col">Genre</th>
	  <th scope="col">Difficulty</th>
	</tr>


<?php while ($row = mysqli_fetch_assoc($books)) :  ?>

<tr>
  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
  <td><?php echo stripslashes($row['title']); ?></td>
  <td><?php echo stripslashes ($row['author']); ?></td>
  <td><?php echo $row['genre']; ?></td>
  <td><?php echo $row['difficulty']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;
?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<!-- close the form -->
</form>

</div> <!-- close container -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
