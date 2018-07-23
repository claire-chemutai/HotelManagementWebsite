<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="hotel.css"/>
	<title>Contact</title>

</head>
<body background="images/book_image.jpg">


	<header id="header"> 
		<div class="topnav" id="mynav">
			<a href="images/mainlogo1.png;" alt="logo" align="left"  ><img id="hlogo" src="images/mainlogo1.png"></a>
			<a href="index.php" style="align:right;">Home</a>
			<a href="booking.php">Booking</a>
			<a href="contact.php">Contact</a>
		</div>

	</header> 
	<br>
	<center>
		<div  class="opacityCol row" >

			<center><h3 style="color:#f45942; text-align:center;" ><i>CONTACT US</i></h3></center>


			<?php
// define variables and set to empty values
			$name = $email = $subject = $message = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$subject = test_input($_POST["subject"]);
				$message = test_input($_POST["message"]);

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


			$sql = "INSERT INTO feedback (name, email, subject, message)
			VALUES ('$name','$email','$subject','$message')";

			if (mysqli_query($conn, $sql)) {
				echo " ";
			} else {
				// echo "Error: ".$sql."<br>".mysqli_error($conn);
			}

			mysqli_close($conn);


			?>



			<table>
				<tr>
					<td>
						<div class="col s6 ">
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



					</td>

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
					</td>
				</tr>
			</table>

		</div>
	</center>
	<br>

	<div class="opacityCol">
          <label>Rate us</label>
          <p>where 1 is Terrible, 2 is Poor, 3 is Good, 4 is Very Good and 5 is Excellent</p>
          <input type="radio" name="rate"  value="1">1
          <input type="radio" name="rate" value="2">2
          <input type="radio" name="rate" value="3">3
          <input type="radio" name="rate" value="4">4
          <input type="radio" name="rate" value="5">5
          <br>
        </div>
        <br>

	<div class="opacityCol">
		<?php

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
		$sql = "SELECT name, email,subject, message FROM feedback";
		$result = mysqli_query($conn, $sql);
		print("<p><h2><b><u>Feedback</u></b></h2></p>");



		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "Name: ".$row["name"];
				echo "Email: ".$row["email"];
				echo "<br>";
				echo "Subject: ".$row["subject"];
				echo "Message: ".$row["message"];
				echo "<br>";
				echo ("<p style='color:#780616;'> ****************************************************</p>");
				echo "<br>";
			}
		} else {
			echo "0 results";
		}

		mysqli_close($conn);



		?>
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