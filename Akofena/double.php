
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="hotel.css"/>
  <title>Double Rooms</title>
</head>
<body background="images/book_image.jpg">
  <header id="header"> 
   <div class="topnav" id="mynav">
    <a href="images/mainlogo1.png;" alt="logo" align="left"  ><img id="hlogo" src="images/mainlogo1.png"></a>
    <!-- <img src="logo.png">  -->
    <a href="index.php" style="align:right;">Home</a>
    <a href="booking.php">Booking</a>
    <a href="contact.php">Contact</a>
  </div>

</header> 
<br>
<div  class="opacityCol" >

<center><h3 style="color:#f45942; text-align:center;" ><b><i>
  Double rooms
</i></b></h3></center>


<table>
<tr>
 <td>
      <img  src="images/double.jpg" alt="The Hotel" width="800px" height="400px"> 
  </td>
  
  <td >

   <ul>
    <h2><b><i>All Akofena Single rooms have</i></b></h2>
    <b><i>Double Room (25 square meters)</i></b>
    <li>air conditioner with ceiling fan</li>
    <li> Bathroom with shower</li>
    <li> Telephone and Wi-Fi access</li>
    <li> mosquito net</li>
    <li> room safe</li>
    <li> mini-bar</li></ul>
     <center><a class="btn" href="details.php">BOOK NOW</a> </center>
    
  </td>
  
 <!--  <td >

    <h2>Akofena International Hotel</h2>
    <form action=" " target="_blank">
      <div>
        <label> Check In</label>
        <input class="w3-input w3-border" type="date"  name="checkIn" required>
      </div><br>
      <div >
        <label>Check Out</label>
        <input class="w3-input w3-border" type="date"  name="checkOut" required>
      </div><br>
      <div >
        <label> Adults</label>
        <input class="w3-input w3-border" type="number" value="1" name="adults" min="1" max="6">
      </div><br>
      <div >
        <label> Kids</label>
        <input class="w3-input w3-border" type="number" value="0" name="kids" min="0" max="6">
      </div><br>
      <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
    </form>
  </td> -->
 
  </tr>
</table>
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

              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVx3dr5cuuSwi9XDm3gSUTOVLRQJ1za1c&callback=myMap"></script>

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