<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="hotel.css"/>
  <title>Details</title>
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
    <div class="row" id="details">


      <center><h3 style="color:#f45942;"><b><i>Akofena International Hotel</i></b></h3></center>


      <form class="contactform" action="confirmation.php" method="post" id="mycontactform" >
        <h2 id="contactform-title">Book With Us</h2>
        <div class="col">
        <table>
          
          <tr>
                  <td>Check In Date</td>
                  <td>day
                    <select name="dayin">
                      <option value=1>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    &nbsp;month&nbsp;&nbsp; <select name="monthin">
                    <option value="january">january</option>
                    <option value="february">february</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>&nbsp;&nbsp; year<select name="yearin">
                  <option value="2017">2017</option>
                  <option value="2018">2018</option></select>
                </td>
              </tr>
            
            <br>

            
              <tr>
                <td>Check Out Date</td>
                <td>day<select name="dayout">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>&nbsp;
                month&nbsp;&nbsp; <select name="monthout">
                <option value="january">january</option>
                <option value="february">february</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>&nbsp;&nbsp; year<select name="yearout">
              <option value="2017">2017</option>
              <option value="2018">2018</option></select>
            </td>
          </tr>
          </table>

        
        <br>

        <div >
          <label> Adults</label>
          <input class="w3-input w3-border" type="number" value="1" name="adults" min="1" max="6">
        </div><br>
        <div >
          <label> Kids</label>
          <input class="w3-input w3-border" type="number" value="0" name="kids" min="0" max="6">
        </div><br>
        <br>
        <div>
          <label> Room Type</label>
          <input type="radio" name="roomtype" checked="checked" value="Single">Single
          <input type="radio" name="roomtype" value="Double">Double
          <input type="radio" name="roomtype" value="Deluxe">Deluxe
          <br>
        </div>
      </div>

      <div class="col" style="padding-left:20px;">

      
        <div>
          <label> First Name</label>
          <input class="w3-input w3-border" type="text" placeholder="firstname"  name="firstname"  required>
        </div><br>
        <div >
          <label>Last Name</label>
          <input class="w3-input w3-border" type="text" placeholder="lastname"  name="lastname" required>
        </div><br>
        <div >
          <label> Email</label>
          <input class="w3-input w3-border" type="email"  placeholder="claire@gmail.com" name="email" min="1" max="6" required>
        </div>
        <br>
        <div >
          <label> Address</label>
          <input class="w3-input w3-border" type="text"  name="address" min="1" max="6" required>
        </div><br>
        <div class="row">
          <div class="col"><p>Mode of payment</p></div>
          <div class="col">

            <select>
              <option value="visa">Visa</option>
              <option value="bitcoin">Bitcoin</option>
              <option value="paypal">Paypal</option>

            </select>
          </div>
        </div>

      </div>

      <center>
      <div class="form-actions form-wrapper" id="edit-actions">
        <input type="submit" id="edit-submit" class="btn" name="send" value="Submit" class="form-submit">
      </div>
    </center>
    


  </form>


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