<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<title>Database of Iconic Fiction</title>

</head>
<body>
<header>
        <div id="container">
             <h1>What's the best fiction book you've ever read?</h1>
            <p><a href="book_entries.php">View all entries</a></p>
             <p> This database serves to compile the best fiction books ever written, as determined by <em>you!</em></p>

  </div>
</header>
<div id="books" class="col-lg-3 ml-auto">
<form id="bookform" method="post" action="" autocomplete="off">
        <div class="form-group">
          <label>Title</label>
           <label for="title">
             <input class="form-control" type="text" name="title" id="title" required></label>
        </div>

        <div class="form-group">
          <label>Author</label>
          <label for="author">
            <input class="form-control" type="text" name="author" id="author" required></label>
        </div>

        <div class="dropdown">
         <label for="genre">What's the genre?</label>
           <select name="genre" id="genre" required>
            <option value=""></option>
            <option value="Fantasy">Fantasy</option>
            <option value="Romance">Romance</option>
            <option value="Mystery">Mystery</option>
            <option value="Horror">Horror</option>
            <option value="Manga">Manga</option>
            <option value="Classics">Classics</option>
          </select>
        </div>

        <div class="dropdown">
         <label for="difficulty">Rate the difficulty</label>
           <select name="difficulty" id="difficulty" required>
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>

       <input type="submit" value="Submit to database!">
       <input type="reset" value="Reset">

  </form>
</div>
      <!-- empty div -->
      <div class="col-lg-3 ml-auto" id="response"></div>





<script src="js/enter.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
</html>
