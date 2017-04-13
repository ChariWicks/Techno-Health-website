

<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<title>ContactUs</title>
		<link rel = "stylesheet" type = "text/css" href = "css/HomePageStylingSheet.css">
		
	</head>
	<body>
	<?php include 'header.php';  ?>

	</br>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   
</head>
<body>
<div class="container">
<div class="page-header">
    <h1>Contact Us</small></h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
						 <p><strong><center>
							<input type="checkbox" name = "update">
								Receive updates by email</strong></p></center>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>
                        <p><strong>Rate :
   <span class="rating">
        <input type="radio" name="stars" id="5_stars" value="4" >
        <label class="stars" for="4_stars">5 stars</label>
        <input type="radio" name="stars" id="4_stars" value="3" >
        <label class="stars" for="3_stars">4 stars</label>
        <input type="radio" name="stars" id="3_stars" value="2" >
        <label class="stars" for="2_stars">3 stars</label>
        <input type="radio" name="stars" id="2_stars" value="1" >
        <label class="stars" for="1_stars">2 star</label>
        <input type="radio" name="stars" id="1_stars" value="0" required>
        <label class="stars" for="0_stars">1 star</label>
        <span  class="label"> Rating: </span>
</span>

   </strong></p>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button style = "height:30px;width:80px" type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                        
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                        Information Institute of Technology<br />
                        57,Ramakrishna Road, Colombo 06, Sri Lanka.<br />
                        +94 (11) 2360 212<br />
                        udari.2014273@iit.ac.lk<br/>
                        www.iit.ac.lk<br/>
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(6.865540,79.861996);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>
<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
<!-- Contact with Map - END -->
</div>
	<center><a href = "#NameBar" class = "arrow"><img class = "totop" src = "images/arrow.png" style="width:30px;height:30px;" align = "middle"></a></center></br></br>
	<footer id = "fo">
	</br>
	Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</br>
	Last modified date : 15th April 2016</br>
	Created by : Tharindu De Zoysa - 2015188 - tharindu.2015188@iit.ac.lk
	</br></br>
	</footer>
	</body>
</html>
