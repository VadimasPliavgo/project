<!DOCTYPE html>
<html>
<head>
  <title>Phone Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  table {
    border-collapse: collapse;
  }
  table, td, th {
    border: 2px solid black;
   padding: 6px;
  }
</style>
</head>
<body style="background-color:#1284B7;">
  <nav class="navbar navbar-default  navbar-fixed-top" id="navbar">
    <div class="container">
      <a href="index.php" class="navbar-brand" ><b><font size="5" color="#377BB5">PhoneShop</font></b></a>
      <ul class="nav navbar-nav">
          <li><a href="index.php" id="navbarmeniu">Home</a></li>
          <li><a href="orders.php" id="navbarmeniu">View Orders</a></li>
       </ul>
     </div>
  </nav>
</div>
<table id="resultable" align="center" >
  <?php include 'returndata.php'; ?>
</table>
<footer>
  <div class="bottom  bottom-fixed-bottom">
    <p>This Page is just introductory assignment to NFQ academy! It's not a real shop! Don't use your personal informacion, it might be stolen!</p>
  </div>
</footer>
</body>
</html>
