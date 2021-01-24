<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>weshare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

    <!-- bootstrap CSS and JS, JQuery, CSS Fonts-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- styling for labels in shelters page -->
	<style>
		lbl {
			display: inline-block;
			line-height: 1;
			text-align: center;
			white-space: nowrap;
			vertical-align: baseline;
			padding: 4px 8px;
			border-radius: 2px;
			font-size: 12px;
			font-weight: 400;
			border-width: 1px;
			border-style: solid;
			background-color: transparent;
			border-radius: 15px;
			color: #0098EF;
		}
	</style>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	
	 <div class="page-inner"> 
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a style="color: #f;" href="index.html">weshare <em>.</em></a></div>
				 </div>
			</div>
			
		</div>
	</nav>
	<header id="gtco-header" role="banner" style="background-image: url(images/img_6.jpg)"></header> 

	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC4BSvZmJoFcjxmvQ6iL_EsWsLFzQm8upc&callback=initMap" defer></script>
	<script src="js/project.js"></script>	

	<nav class="gtco-nav" style="background-color:#09C6AB;" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
				
					<div id="gtco-logo"><a href="index.html">weshare <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="index.html#gtco-features">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>	
				</div>
			</div>
		</div>
	</nav>
	<div class="gtco-section"  style="background-color:#09C6AB;">	
		<div class="gtco-container">	
		<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2 style="font-weight:bold; padding-bottom:1em; color:white;">weshare</h2>
						<p style="color:#e5f7c3;">Navigate the map to view shelters near you.</p>
						<p style="color:#e5f7c3;">Select a shelter to view more information.</p>					
				</div>
				</div>
		</div>
	</div>
	</div>	
	<div class="gtco-section" >
		<div class="gtco-container">
			<div class="col-lg-12 col-md-12 col-sm-12 map" style="padding-top: 0;">
				<div id="map" style="width:100%;height:400px;"></div>
			</div>
			<div>
				<h3>Shelters Near You</h3>
			</div>
			<div class="row">

            <!-- CARDS -->
                <!-- Card 1 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/youthshelter.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2 class="name">Kingston Youth Shelter</h2>
							<p>234 Brock St, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal1">View Details</span></p>
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                $locid = 0;
                                $sql = "select t.name
                                from   tag t
                                where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                $stmt = $pdo->prepare($sql);   #create the query
                                $stmt->execute();   #bind the parameters
                                $dom = new DOMDocument('1.0', 'utf-8');
                                while ($row = $stmt->fetch()) {
                                    $element = $dom->createElement('lbl', $row["name"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
                                }
                                echo $dom->saveXML();
                            ?>
						</div>
					</a>
                </div>
                
                <!-- Card 2 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/ryndale.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2 class="name">Ryndale Transitional Housing</h2>
							<p>669 Victoria St, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal2">View Details</span></p>
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                $locid = 1;
                                $sql = "select t.name
                                from   tag t
                                where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                $stmt = $pdo->prepare($sql);   #create the query
                                $stmt->execute();   #bind the parameters
                                $dom = new DOMDocument('1.0', 'utf-8');
                                while ($row = $stmt->fetch()) {
                                    $element = $dom->createElement('lbl', $row["name"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
                                }
                                echo $dom->saveXML();
                            ?>
						</div>
					</a>
                </div>
                
                <!-- Card 3 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/intervalhouse.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Kingston Interval House</h2>
							<p>449 Princess St, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal3">View Details</span></p>
                            <?php
                                    $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $locid = 2;
                                    $sql = "select t.name
                                    from   tag t
                                    where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
                                    $dom = new DOMDocument('1.0', 'utf-8');
                                    while ($row = $stmt->fetch()) {
										$element = $dom->createElement('lbl', $row["name"]);
                                        // We insert the new element as root (child of the document)
                                        $dom->appendChild($element);
                                    }
                                    echo $dom->saveXML();
                            ?>
						</div>
					</a>
                </div>

                <!-- Card 4 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/rufina.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Rufina's Bridal</h2>
							<p>561 1/2 Princess St, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal4">View Details</span></p>
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                $locid = 3;
                                $sql = "select t.name
                                from   tag t
                                where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                $stmt = $pdo->prepare($sql);   #create the query
                                $stmt->execute();   #bind the parameters
                                $dom = new DOMDocument('1.0', 'utf-8');
                                while ($row = $stmt->fetch()) {
                                    $element = $dom->createElement('lbl', $row["name"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
                                }
                                echo $dom->saveXML();
                            ?>
						</div>
					</a>
					
                </div>
                
                <!-- Card 5 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/dawnhouse.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dawn House</h2>
							<p>965 Milford Dr, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal5">View Details</span></p>
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                $locid = 4;
                                $sql = "select t.name
                                from   tag t
                                where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                $stmt = $pdo->prepare($sql);   #create the query
                                $stmt->execute();   #bind the parameters
                                $dom = new DOMDocument('1.0', 'utf-8');
                                while ($row = $stmt->fetch()) {
                                    $element = $dom->createElement('lbl', $row["name"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
                                }
                                echo $dom->saveXML();
                            ?>
						</div>
					</a>
                </div>
                
                <!-- Card 6 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/stvincent.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>St. Vincent de Paul Society</h2>
							<p>85 Stephen St, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal6">View Details</span></p>
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                $locid = 5;
                                $sql = "select t.name
                                from   tag t
                                where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                $stmt = $pdo->prepare($sql);   #create the query
                                $stmt->execute();   #bind the parameters
                                $dom = new DOMDocument('1.0', 'utf-8');
                                while ($row = $stmt->fetch()) {
                                    $element = $dom->createElement('lbl', $row["name"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
                                }
                                echo $dom->saveXML();
                            ?>
						</div>
					</a>
                </div>
                
                <!-- Card 7 -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<img src="images/elizabethfry.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Elizabeth Fry Kingston</h2>
							<p>127 Charles St, Kingston</p>
                            <p><span class="btn btn-primary" data-toggle="modal" data-target="#myModal7">View Details</span></p>
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                $locid = 6;
                                $sql = "select t.name
                                from   tag t
                                where  t.id in (select tag_id from locationtag where location_id =  $locid);";
                                $stmt = $pdo->prepare($sql);   #create the query
                                $stmt->execute();   #bind the parameters
                                $dom = new DOMDocument('1.0', 'utf-8');
                                while ($row = $stmt->fetch()) {
                                    $element = $dom->createElement('lbl', $row["name"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
                                }
                                echo $dom->saveXML();
                            ?>
						</div>
					</a>
                </div>
                
                <!-- MODALS -->
                <!-- Modal 1-->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Kingston Youth Shelter</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/youthshelter.jpg" alt="Image" class="img-responsive">
                                </figure>
								<h4>Hours</h4>
									<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 0";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                    
								<h4>Contact:</h4> 
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 0";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="https://kingstonyouthshelter.com/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 2-->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Ryndale Transitional Housing</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/ryndale.jpg" alt="Image" class="img-responsive">
                                </figure>
                                <h4>Hours</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 1";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <h4>Contact:</h4> <?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 1";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="https://ryndale.ca/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 3-->
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Kingston Interval House</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/intervalhouse.jpg" alt="Image" class="img-responsive">
                                </figure>
                                <h4>Hours</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 2";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
								<h4>Contact:</h4> 
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 2";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="http://kingstonintervalhouse.com/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 4-->
                <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Rufina's Bridal</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/rufina.jpg" alt="Image" class="img-responsive">
                                </figure>
                                <h4>Hours</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 3";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
								<h4>Contact:</h4> 
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 3";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="https://www.rufinasbridal.com/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 5-->
                <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Dawn House</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/dawnhouse.jpg" alt="Image" class="img-responsive">
                                </figure>
                                <h4>Hours</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 4";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
								<h4>Contact:</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 4";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="https://www.dawnhouse.ca/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 6-->
                <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">St. Vincent de Paul Society</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/stvincent.jpg" alt="Image" class="img-responsive">
                                </figure>
                                <h4>Hours</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 5";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
								<h4>Contact:</h4> 
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 5";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="http://www.svdpkingston.com/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 7-->
                <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Elizabeth Fry</h4>
                            </div>
                            <div class="modal-body">
                                <figure>
                                    <img src="images/elizabethfry.jpg" alt="Image" class="img-responsive">
                                </figure>
                                <h4>Hours</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select Hours
                                    from  location where id = 6";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["Hours"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
								<h4>Contact:</h4>
								<?php
									$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");
                                    $sql = "select PhoneNumber
                                    from  location where id = 6";
                                    $stmt = $pdo->prepare($sql);   #create the query
                                    $stmt->execute();   #bind the parameters
									$dom = new DOMDocument('1.0', 'utf-8');
									$row = $stmt->fetch();
                                    $element = $dom->createElement('label', $row["PhoneNumber"]);
                                    // We insert the new element as root (child of the document)
                                    $dom->appendChild($element);
									echo $dom->saveXML();
									?>
                                <a href="https://www.efrykingston.ca/"><h4 style="color:#069; text-decoration: underline;">Visit Website</h4></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
		</div>
	</div>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2021 weshare.</small> 
						<small class="block">Created by Catherine Wu, Emily Zhao and Joel Cross for QHacks.</a> </small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

