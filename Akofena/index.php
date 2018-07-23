<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="hotel.css"/>
	<title>welcome page</title>
</head>
<body  background="images/book_image.jpg">

		<header class="top" id="header"> 

			<div class="topnav" id="mynav">
				<a href="images/mainlogo1.png;" alt="logo" align="left"  ><img id="hlogo" src="images/mainlogo1.png"></a>
				<a href="index.php" style="align:right;">Home</a>
				<a href="booking.php">Booking</a>
				<a href="contact.php">Contact</a>
			</div>

		</header> 
		<div id="before-header">

		</div> 
		<div class="body_image">
			<img id="Imgs" src="images/food.jpg" name="slide">
		</div>
		<br>

		<div class="container" >
			<div class="row" style="text-align:center;">
				<h1 style="color:#f45942; font:20;">Welcome to Akofena International Hotel- Accra</h1>
				<p>Welcome to Akofena International Hotel. We invite you to 
				experience a 4-star hotel where class meets comfort in Accra, Ghana. Our 
			    hotel offers superior accommodations together with modern amenities 
				and unparalleled service to give you a tailored experience you should expect
				 from a first class business hotel. Our 100% smoke-free hotel is conveniently
				  located along the main road . We offer complimentary full breakfast, wireless internet,
				    state-of-the-art meeting facilities, and an on-site restaurant where you can 
				    enjoy breakfast, lunch or dinner.  </p>
			</div>
			<div class="row">
				<div class="col s3" style="text-align:centre;">
					<div class="accomodation-image"  style="align:centre;">
						<a href="PROJECT\images\accommodation.png">
							<img src="images/accommodation.png" alt="Accomodation">
						</a>
					</div>

					<h4 style="color:#f45942;">ACCOMODATION</h4>
					<p> Akofena International Hotel offers spacious, tastefully designed guest rooms and suites. 
					All our rooms are Air conditioned, and equipped with Flat Screen TV. </p>
				</div>

				<div class="col s3"  style="text-align:centre;">
					<div class="accomodation-image"  style="align:centre;">
						<a href="PROJECT\images\accommodation.png">
							<img src="images/dining.png" alt="Meetings and events">
						</a>
					</div>

					<h4 style="color:#f45942;">DINING</h4>
					<p>Akofena International Hotel offers culinary experience at its best with savory local and international cuisines.</p>
				</div>
				<div class="col s3"  style="text-align:centre;">
					<div class="accomodation-image" style="align:centre;">
						<a href="PROJECT\images\accommodation.png">
							<img src="images/meetings_events.png" alt="Meetings and events">
						</a>
					</div>
					<h4 style="color:#f45942;">MEETINGS AND EVENTS</h4>
					<p>4 state of the art air conditioned meeting rooms with natural 
					daylight perfect for business meetings. The largest meeting room 
					caters for up to 250 people.</p>
				</div>
				<div class="col s3"  style="text-align:centre;">
					<div class="accomodation-image"  style="align:centre;">
						<a href="PROJECT\images\accommodation.png">
							<img src="images\facilities.png" alt="Meetings and events">
						</a>
					</div>
					<h4 style="color:#f45942;">FACILITIES</h4>
					<p>Gym, outdoor swimming pool and gift shop. Departures to 
					nearby shopping malls like Accra available at an extra charge. </p>
				</div>
			</div>
		</div>
		<br>

		 
			
		<br>
		<div  class="opacityCol" style="text-align:center;">


		
			<table>
				<tr>
					<td>
					<div style="width:400px; height:300px;" >
						<a style="color:red;"  href="booking.php"><img src="images/double.jpg" alt="Norway" style="width:100%; height:100%;" ></a></div>
						<h2>Rooms</h2>
						<p>With unique color schemes, handmade furnishing, and state of the art facilities, 
						our rooms are to designed to appeal and make you experience your personal dream of Africa!.</p>
					</td>
					<td>
					<div style="width:400px; height:300px;" >
						<a style="color:red;"  href="restaurantNbar.php"><img src="images/restNbar.jpg" alt="Norway" style="width:100%; height:100%;"></a></div>
						<h2>Restaurants and Bar</h2>
						<p>Akofena's all day restaurant and bar offers culinary 
						experience at its best with savory local and international 
						cuisines,beverages and snack foods </p>
					</td>
					<td>
					<div style="width:400px; height:300px;" >
						<a style="color:red;"  href="conference.php"><img src="images/conferencehall.jpg" alt="Norway" style="width:100%; height:100%;"></a></div>
						<h2>Conference Hall</h2>
						<p>Akofena provides the perfect air conditioned meeting rooms and banquet 
						space with natural daylight perfect for business meetings.
						The largest meeting room caters for up to 250 people.</p>
					</td>
				</tr>
			</table>
				<h3 style="color:#f45942; text-align:center;"><u> HOTEL LAUNCH</u></h3>
			<div  style="background-color: #c3ccdb; padding-right: 300px; padding-left:300px; opacity: 1; font-size: 20px;">
				<table>
					<tr>
						<td style="width:250px; height:150px;">
							<img id="Imgs" src="images/launch.png" style="width:100%; height:100%; ">
						</td>
						<td>
							<p>Akofena International hotel will be officially 
							launched on the 30th of November 2017 at Accra. 
							For further information, call +266560223056</p>
						</td>
					</tr>
				</table>

			</div><br>
		</div>
		<br>


		<script type="text/javascript">
	//Array of images
	var Images=["images/food.jpg","images/hotel-restaurant.jpg","images/beach.jpg", "images/single.jpg","images/hotel-reception.jpg"];
	var step=1;
	function gallery(){
	//change image
	document.getElementById('Imgs').src=Images[step];
	if(step<Images.length-1){
		step++;
	}else{
		step=0;
	}
}
	//When the ready, set interval.
	window.onload=setInterval(gallery, 2500);


</script>

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