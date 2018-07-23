

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="hotel.css"/>
  <title>Confirmation</title>
</head>
<body background="images/book_image.jpg">

  <header id="header"> 
    <div class="topnav" id="mynav">
      <a href="images/mainlogo1.png;" alt="logo" align="left"  ><img id="hlogo" src="images/mainlogo1.png"></a>
      <!-- <img src="logo.png">  -->
      <a href="index.php" style="align:right;">Home</a>
      <a href="confirmation.php">Confirmation</a>
      <a href="booking.php">Booking</a>
      <a href="contact.php">Contact</a>
    </div>

  </header> 
  <div class="row" id="details">


    <?php
// define variables and set to empty values
  $datein=$monthin=$yearin=$dateout=$monthout=$yearout=$adults = $kids = $roomtype= $firstname = $lastname = $email = $address = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datein = test_input($_POST["dayin"]);
    $monthin = test_input($_POST["monthin"]);
    $yearin = test_input($_POST["yearin"]);
    $dateout = test_input($_POST["dayout"]);
    $monthout = test_input($_POST["monthout"]);
    $yearout = test_input($_POST["yearout"]);
    $adults = test_input($_POST["adults"]);
    $kids = test_input($_POST["kids"]);
    $roomtype = test_input($_POST["roomtype"]);
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $address = test_input($_POST["address"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $servername = "35.166.18.143";
  $username = "claire.chemutai";
  $password = "claire.chemutai";
  $dbname = "webtech_claire_chemutai";


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }


  $sql = "INSERT INTO bookingdetails (datein,monthin,yearin,dateout,monthout,yearout,adults, kid,roomtype,firstname,lastname,email,address)
  VALUES ('$datein','$monthin','$yearin','$dateout','$monthout','$yearout','$adults','$kids','$roomtype','$firstname','$lastname','$email','$address')";

  if (mysqli_query($conn, $sql)) {
    print("<center><h2>Congratulations!! You have successfully booked</h2></center>");
  } else {
    echo "Error: ".$sql."<br>".mysqli_error($conn);
  }

  mysqli_close($conn);


  ?>


      <div  style="width:900px; height:300px; padding-left:50px; padding-right:50px;  padding-top:20px; padding-bottom:50px;">
        <img src="images/maker.jpg", width="100%" height="100%" >
      </div>


</div>

<br>

<div class="footer">
	<div class="col-container" style="background-color:#dba39b">
		<div class="col">
			<td>

						<div  style="padding-left: 80px;">

							<h2 id="contactinfo">Contact Info</h2>
							<div id="googleMap" style="width:400px;height:200px;"></div>
							<script>
								function myMap() {
									var mapProp= {
										center:new google.maps.LatLng(5.6067605,-0.2341247),
										zoom:13,
									};
									var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
								}
							</script>

							<script	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVx3dr5cuuSwi9XDm3gSUTOVLRQJ1za1c&callback=myMap"></script>

							<p>Akofena international Hotel<br>Accra<br>+233560223056</p>
						</div>
		</div>

		<div class="col" style="font-size: 20px;
    font-weight: bold; ">
			<h2>Quick links </h2>
			<a href="index.php" >Home</a><br>
				<a href="booking.php">Our Rooms</a><br>
				<a href="contact.php">Contact</a><br>
				<a href="single.php">Single Room</a><br>
				<a href="double.php">Double Room</a><br>
				<a href="deluxe.php">Deluxe Room</a><br>
				<a href="details.php">Book Room</a><br>
		</div>

		<div class="col">
			
			<form class="contactform" action="contact.php" method="post" id="mycontactform" >
								<h2 id="contactform-title">Send Us Your Feedback</h2>
								<div class="">
									<label id="edit-name">My Name</label>
									<input type="text" id="edit-name" name="name" value="" size="60" maxlength="255" style="padding-left: 65px;">
								</div>
								<br>
								<div>
									<label for="edit-mail">My Email</label>
									<input type="text" id="edit-mail" name="email" size="60" maxlength="255" style="padding-left: 65px;"> 
								</div>
								<br>
								<div>
									<label for="edit-subject">My Subject</label>
									<input type="text" id="edit-subject" name="subject"  size="60" maxlength="255" style="padding-left: 65px;">
								</div>
								<br>
								<div class="">
									<label for="edit-message">My Message</label>
									<div class=""> 
										<textarea id="edit-message" name="message" cols="60" rows="5" ></textarea>
									</div>
								</div>
								<br>

								<div class="form-actions form-wrapper" id="edit-actions">
									<input type="submit" id="edit-submit" name="send" value="Send message" class="form-submit">
								</div>

							</form>
		</div>
	</div>
	<center><div id="copyright" style="background-color:#302523; padding:8px;">
    <p>Copyright © 2017 Akofena Hotel. All Rights Reserved.</p>
  </div></center>
</div>
</body>
</html>