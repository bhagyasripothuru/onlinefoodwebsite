<!DOCTYPE html>
<!DOCTYPE html> 
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Yummy Treats</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="booking.css" type="text/css"/>
        
<body>
<?php
                require 'header2.php';
            ?>


    <h2 >Book a Table</h2>
    <form action="book_table.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br><br>

        <label for="time">Time:</label>
        <input type="time" name="time" required><br><br>

        <label for="guests">Number of Guests:</label>
        <input type="number" name="guests" required><br><br>

        <button type="submit">Book Table</button>
    </form>
    <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="https://projectworlds.in">Welcome World</a> . All Rights Reserved.</p>
                   <p>This website is developed by Yummy Treats.</p>
               </center>
               </div>
           </footer>
</body>
</html>
