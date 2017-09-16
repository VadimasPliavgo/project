<!DOCTYPE html>
<html>
<head>
  <title>Phone Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-invert  navbar-fixed-top" id="navbar">
   <div class="container">
     <a href="index.php" class="navbar-brand" ><b><font size="5">PhoneShop</font></b></a>
     <ul class="nav navbar-nav">
         <li><a href="index.php" id="navbarmeniu">Home</a></li>
         <li><a href="orders.php" id="navbarmeniu">View Orders</a></li>
      </ul>
    </div>
 </nav>
<section class="Order">
  <div class="Orderbutton">
    <div class="button">
        <button type="button" class="btn " data-target="#orderModel" data-toggle="modal" style="text-decoration:none">Order Now</a>
    </div>
  </div>
</section>

<!--modal popup-->
<div class="modal" id="orderModel" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><b>Order</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-7">
              <div class="center-block">
                <img src="images/order.png" alt="Samsung S8" class="details img-responsive" />
                <h4 style="font-size:18px"><b>Order Detales:</b></h4>
                <p style="font-size:12px">
                  This Page is just introductory assignment to NFQ academy! It's not a real shop! Don't use your personal informacion, it might be stolen!
                </p>
                <br />
              </div>
            </div>
            <table>
              <br /><br />
              <tr>
                <p><b>Price: 800 &euro;</b></p>
              </tr>
              <br />
            <!--order form-->
              <form action="ordertosql.php" id="firstform" method="POST" class="ajax">
                  <tr><b>Select color:</b></tr>
                  <tr>
                    <select required  name="color" id="color" class="form-control" style="width:200px">
                      <option value="" disabled selected style="color:grey">Select color</option>
                      <option value="Orchid Gray">Orchid Grey</option>
                      <option value="Midnight Black">Midnight Black</option>
                      <option value="Arctic Silver">Arctic Silver</option>
                      <<option value="Coral Blue">Coral Blue</option>
                    </select>
                  </tr>
                  <tr><b>Full name:</b></tr>
                    <tr>
                      <input required  type="text" pattern="[A-Za-z\s]+" class="form-control" id="Name" name="name" placeholder="Name Surname" style="width:200px" >
                    </tr>
                    <tr><b>Phone number:</b></tr>
                    <tr>
                      <input required type="tel" pattern="[\+]\d{11}" class="form-control" id="Number" name="phone" placeholder="+370xxxxxxxx" style="width:200px" >
                    </tr>
                    <tr><b>Email:</b></tr>
                    <tr>
                      <input required  type="email" class="form-control" id="email" name="email" placeholder="example@example.com" style="width:200px" >
                    </tr><br /><br /><br />
                    <tr>
                        <button class="btn btn-default" data-dismiss="modal" style="color:black">Close</button>
                        <button class="btn btn-warning" type="submit" style=" margin-left:30px; color:black" >Order</button>
                      </form>
                      <!--end of form-->
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--end of popup-->

<script>
$('form.ajax').on('submit',function(){
    $('#orderModel').modal('hide');
    $('#ordersucc').modal('show');
});
</script>

<script>
 function reset() {
document.getElementById("firstform").reset();
 }
</script>

<!--Succsess popup-->
<div class="modal modal2" id="ordersucc" tabindex="-1" >
  <div class="modal-dialog" id="center">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" onclick="reset()" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><b>Order was submitted successfully!</b></h4>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="bottom">
    <p>This Page is just introductory assignment to NFQ academy! It's not a real shop! Don't use your personal informacion, it might be stolen!</p>
  </div>
</footer>
</body>
</html>
