<!DOCTYPE html>
<html>
<head>
	<title>School management</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="awasome/css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>

<!-- navbar -->
<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navidation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" onclick="navshow()" data-target=".navbar-collapse">
			 <i class="fa fa-align-justify fa-3x  "></i>
		</button>
		<a href="#" class="navbar-brand">Rahaso it solution</a>
	</div> <!-- end navbar header -->
	<div class="navbar-collapse collapse">
		<ul id="toka" class="nav navbar-nav navbar-right">
			<li><a href="#header" onclick="hidenav()">Home</a></li>
			<li><a href="#service" onclick="hidenav()">Services</a></li>
			<li><a href="index.php" onclick="hidenav()">Blog</a></li>
			<li><a href="#team" onclick="hidenav()">team</a></li>
			<li><a href="#client" onclick="hidenav()">client</a></li>
			<li><a href="#contact" onclick="hidenav()">Contact</a></li>
		</ul>
	</div>

</div>

</div> 
<!--header section -->
<div id="header" class="header">
	<div class="container">
      <div class="row">
      	
      </div>
		
	</div>
</div> 
<!--header end-->

<!--services   -->

<div id="service" class="service">
	<div class="container">
		<div class="row">
		<h1>SERVICES</h1>
		<p>We provide the following services in our company</p>
			<div class="col-lg-3 col-md-3">
				
				<i class="fa fa-desktop fa-3x"  aria-hidden="true"></i>
				<h4>Web design</h4>
				<p>We design  a best and responsive websites at cheap prizes and we also host the websites </p>
			</div>
			<div class="col-lg-3 col-md-3">
				
				<i class="fa fa-server fa-3x"  aria-hidden="true"></i>
				<h4>Pc Maintainance</h4>
				<p>Pc maintainance and repair,network design and troubleshooting, network installation</p>
			</div>
			<div class="col-lg-3 col-md-3" >
				
				<i class="fa fa-database fa-3x"  aria-hidden="true"></i>
				<h4>Database design</h4>
				<p>Design a normalized database using Mysql,sql server and Oracle</p>
			</div>
			<div class="col-lg-3 col-md-3">
				
				<i class="fa fa-mobile fa-3x"  aria-hidden="true"></i>
				<h4>Software Development</h4>
				<p>All software development mobile apps,web apps and desktop application</p>
			</div>
		</div>
	</div>
</div>
<!-- end services -->

<!-- team -->
<div id="team" class="team">
	<div class="container">
		<div class="row">
		<h2>Meet our team</h2>
		<p>Below is among of the leader of team member of our company</p>
			<div class="col-lg-3 col-md-3">
				<img src="img/cover.jpg" class="img-circle">
				<h3>Ramadhani Sadick</h3>
				<b>Backend developer</b>
				<p></p>
				<a href=""> <i class="fab fa-facebook" ></i></a>
				<a href=""><i class="fab fa-twitter" ></i></a>
				
				<a href=""><i class="fab fa-linkedin"  ></i></a>
				
			</div>
			<div class="col-lg-3 col-md-3">
				<img src="img/cover.jpg" class="img-circle">
				<h3>Rahim Mohamedi</h3>
				<b>Database designer</b>
				<p></p>
				<a href=""> <i class="fab fa-facebook" ></i></a>
				<a href=""><i class="fab fa-twitter" ></i></a>
				
				<a href=""><i class="fab fa-linkedin"></i></a>
			</div>
			<div class="col-lg-3 col-md-3">
				<img src="img/cover.jpg" class="img-circle">
				<h3>Habib Khamisi</h3>
				<b>Pc Mainatinance</b>
				<p></p>
				<a href=""> <i class="fab fa-facebook" ></i></a>
				<a href=""><i class="fab fa-twitter"  ></i></a>
				
				<a href=""><i class="fab fa-linkedin" ></i></a>
			</div>
			<div class="col-lg-3 col-md-3">
				<img src="img/cover.jpg" class="img-circle">
				<h3></h3>
				<b>FrontEnd developer</b>
				<p></p>
				<a href=""> <i class="fab fa-facebook" ></i></a>
				<a href=""><i class="fab fa-twitter"  ></i></a>
				
				<a href=""><i class="fab fa-linkedin" ></i></a>
			</div>
		</div>
	</div>
</div>
<!--end team -->
<!--contact -->
<div id="contact" class="contact"> 
<div class="container">
	<div class="row">
	<h2>Contact us</h2>
		<div class="col-lg-6 col-md-6">
           <div class="input-group input-group-lg">
           	<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user"></i></span>
           	<input type="text" class="form-control" arial-describedby="sizing-addon1" placeholder="Fullname">
           </div>
            <div class="input-group input-group-lg">
           <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope"></i></span>
           	<input type="email" class="form-control" arial-describedby="sizing-addon2" placeholder="Email Address">
          </div>
           <div class="input-group input-group-lg">
           <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-phone"></i></span>
           	<input type="phone" class="form-control" arial-describedby="sizing-addon3" placeholder="Phone number">
           	 
           </div>
		</div>
		<div class="col-lg-6 col-md-6"> 
         <div class="input-group">
         	<textarea cols="80" rows="20" class="form-control"></textarea>
         	<button class="btn btn-lg">submit Your massage</button>
         </div>
		</div>
	</div>
</div>
</div>
<!--end contact -->
<!-- footer -->
<div id="footer" class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<h4>Contact us</h4>
				<p> <i class="fa fa-home"></i>  123 Mkunazi street,Kariakoo</p>
				<p><i class="fa fa-envelope"></i> info.rahasoit@gmail.com</p>
				<p><i class="fa fa-phone"></i> +225 0717 023787</p>
				<p> <i class="fa fa-globe"></i> www.rahasoitsolution.com</p>
			</div>
			<div class="col-lg-4 col-md-4">
			<h4>About</h4>
			<p><i class="fa fa-square"> About us</i></p>
			<p><i class="fa fa-square"> Privacy</i></p>
            <p><i class="fa fa-square"> Terms & conditions</i></p>
             </div>
			<div class="col-lg-4 col-md-4 ">
				<h4>Social Media</h4>
				<a href=""> <i class=" social fab fa-facebook" ></i></a>
				<a href=""><i class=" social fab fa-twitter"  ></i></a>
				
				<a href=""><i class="social fab fa-linkedin" ></i></a>
				<a href=""><i class="social fab fa-youtube" ></i></a>
				<a href=""><i class="social fab fa-github" ></i></a>
				<input type="email" name="" placeholder="subscribe for update">
				<button class="btn btn-success">subscribe</button>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function hidenav() {
		document.getElementById('toka').style.display='';
		// body...
	}
</script>
<script type="text/javascript">
	function navshow() {
		document.getElementById('toka').style.display='';
		// body...
	}
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>