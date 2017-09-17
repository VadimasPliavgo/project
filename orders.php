<!DOCTYPE html>
<html>
<head>
  <title>Phone Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
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
  <!--navbar-->
  <div class="navbar navbar-invert  navbar-fixed-top" id="navbar">
   <div class="container-fluide">
     <a href="index.php" class="navbar-brand" style="width=10px;" ><b><font size="5">PhoneShop</font></b></a>
     <ul class="nav navbar-nav navbar-right">
         <li><a href="orders.php" id="navbarmeniu"><b>View Orders</b></a></li>
      </ul>
    </div>
 </div>

<script>
$(document).ready(function() {
    $('#resultable').DataTable();
} );
</script>
<div class="table-responsive" id="tableclass">
  <table  id="resultable" class="table table-striped table-bordered">
  <thead>

      <tr>
      <th><b> ID </b></th>
      <th><b> Name </b></th>
      <th><b> Phone color </b></th>
      <th><b> Phone number </b></th>
      <th><b> Email </b></th>
    </tr>
    </thead>
    <tbody>
    <?php include 'returndata.php'; ?>
  </tbody>
  </table>
</div>

<footer>
  <div class="bottom  bottom-fixed-bottom">
    <p>This Page is just introductory assignment to NFQ academy! It's not a real shop! Don't use your personal informacion, it might be stolen!</p>
  </div>
</footer>
</body>
</html>
