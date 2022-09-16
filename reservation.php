<!doctype html>
<html lang="en">
  <head>
    <title>Reservation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />
    <script src="js/modernizer.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   </head>
   <body>
  
   <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $occasion = $_POST['occasion'];
   
      // connecting to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "bookings";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
      $sql = "INSERT INTO `customer` (`Name`, `Email id`, `Contact no.`, `Occasion`) VALUES ('$name', '$email', '$phone', '$occasion')";
      $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<script> alert("your table is booked successfully......")</script>';
        }
        else{
            echo '<script> alert("we are unable to book your table please try later......")</script>';
        }
     }

    }
?>

    <form action="/CRUD/reservation.php" method="post">
    <div>
    <h2 class="block-title text-center">
	    Reservations			
	</h2>
    <h4 class="form-title">BOOKING FORM</h4>
    <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" style="width:322px;height:32px">
        </div>
    <div class="form-group">
        <label for="email">Email ID</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" style="width:322px;height:32px"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact number</label>
        <input type="phone" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" style="width:322px;height:32px">
    </div>
    <div class="form-group">
        <label for="occasiion">Occasion</label>
        <input type="text" name="occasion" class="form-control" id="occasion" aria-describedby="emailHelp" style="width:322px;height:32px">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
        
    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <script src="js/all.js"></script>   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
