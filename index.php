<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Code-pandora</title>

	<link rel="shortcut icon" href="gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="styles.css">

	<!--[if lt IE 9]> <script src="html5shiv.js"></script> <![endif]-->
	
	<script>
				function myAgeValidation() {

				var lre = /^\s*/;
				var datemsg = "";

				var inputDate = document.dobcalculator.myDate.value;
				inputDate = inputDate.replace(lre, "");
				document.dobcalculator.myDate.value = inputDate;
				datemsg = isValidDate(inputDate);
				if (datemsg != "") {
				alert(datemsg);
				return;
				}
				else {
				//Now find the Age based on the Birth Date
				getAge(new Date(inputDate));
				}

				}

				function getAge(birth) {

				var today = new Date();
				var nowyear = today.getFullYear();
				var nowmonth = today.getMonth();
				var nowday = today.getDate();

				var birthyear = birth.getFullYear();
				var birthmonth = birth.getMonth();
				var birthday = birth.getDate();

				var age = nowyear - birthyear;
				var age_month = nowmonth - birthmonth;
				var age_day = nowday - birthday;

				if(age_month < 0 || (age_month == 0 && age_day <0)) {
				age = parseInt(age) -1;
				}
				alert("You are :"+age+" years old");

				if ((age <= 18)) {
				}
				else {
				alert("Your weigth must be between 60-62!!Stay in shape");
				}
				
						
				}

				function isValidDate(dateStr) {


				var msg = "";
				// Checks for the following valid date formats:
				// MM/DD/YY   MM/DD/YYYY   MM-DD-YY   MM-DD-YYYY
				// Also separates date into month, day, and year variables

				// To require a 2 & 4 digit year entry, use this line instead:
				//var datePat = /^(\d{1,2})(\/|-)(\d{1,2})\2(\d{2}|\d{4})$/;
				// To require a 4 digit year entry, use this line instead:
				var datePat = /^(\d{1,2})(\/|-)(\d{1,2})\2(\d{4})$/;

				var matchArray = dateStr.match(datePat); // is the format ok?
				if (matchArray == null) {
				msg = "Date is not in a valid format.";
				return msg;
				}

				month = matchArray[1]; // parse date into variables
				day = matchArray[3];
				year = matchArray[4];


				if (month < 1 || month > 12) { // check month range
				msg = "Month must be between 1 and 12.";
				return msg;
				}

				if (day < 1 || day > 31) {
				msg = "Day must be between 1 and 31.";
				return msg;
				}

				if ((month==4 || month==6 || month==9 || month==11) && day==31) {
				msg = "Month "+month+" doesn't have 31 days!";
				return msg;
				}

				if (month == 2) { // check for february 29th
				var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
				if (day>29 || (day==29 && !isleap)) {
				msg = "February " + year + " doesn't have " + day + " days!";
				return msg;
				}
				}

				if (day.charAt(0) == '0') day= day.charAt(1);

				//Incase you need the value in CCYYMMDD format in your server program
				//msg = (parseInt(year,10) * 10000) + (parseInt(month,10) * 100) + parseInt(day,10);

				return msg;  // date is valid
				}

// --> </SCRIPT>
	
	
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="guy.jpg" alt="">
			<span class="title" style="color:brown">Sourav Biswas</span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted">Physical fitness is not only one of the most important keys to a healthy body,
 it is the basis of dynamic and creative intellectual activity.</p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Fun Quest</span></h2>
			<div class="row">
				<div class="col-sm-12">
					<h3 class="text-center">What's your D.O.B </h3>
						<form name="dobcalculator">
						Enter Birth Date:  <input type="text" name="myDate" size=10 maxlength=10> (in MM/DD/YYYY format)
						<input type="button" value="Find Age" onclick="Javascript:myAgeValidation()">
						</form>
				</div>
			</div>
		</div> <!-- / section -->
	
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Choose from a plethora of options below to stay fit</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<span class="img">
							<img src="yoga.jpg" alt="">
						</span>
									 <!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">YOGA</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">

							<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">YOGA-FAQ</h4>
										</div>
									<div class="modal-body">
							<p>Yoga  is a physical, mental, and spiritual practice or discipline which originated in ancient India. There is a broad variety of Yoga schools, practices, and goals in Hinduism, Buddhism, and Jainism. Among the most well-known types of yoga are Hatha yoga and Raja yoga.</p>
									</div>
										<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
					</div>
					
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<span class="img">
							<img src="gym.jpg" alt="">
						</span>
									 <!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Gymnasium</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">

							<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Gymnasium-FAQ</h4>
										</div>
									<div class="modal-body">
							<p>A gym, short for gymnasium, is an open air or covered location for gymnastics, athletics, and gymnastic services. The word is derived from the ancient Greek gymnasium.They are commonly found in athletic and fitness centers, and as activity and learning spaces in educational institutions. "Gym" is also slang for "fitness center", which is often an indoor facility.</p>
									</div>
										<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
					</div>
					
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<span class="img">
							<img src="jog.jpg" alt="">
						</span>
									 <!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Jogging</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">

							<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Jogging-FAQ</h4>
										</div>
									<div class="modal-body">
							<p>Jogging is running at a gentle pace. The definition of jogging as compared with running is not standard. One definition describes jogging as running slower than 6 miles per hour 

Jogging is also distinguished from running by having a wider lateral spacing of foot strikes, creating side-to-side movement that likely adds stability at slower speeds or when coordination is lacking </p>
									</div>
										<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
					</div>
				
				
		</div> <!-- /section -->

		<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>Its seems you are enjoying reading.</p>
				</div> 
			</div></div>
		</div> <!-- /section -->

		<div class="row section clients topspace">
			<h2 class="section-title"><span>Thank's for visiting</span></h2>
			<div class="col-lg-12">
				<p>
					<img src="thanks.png" alt="">
				</p>
			</div>
		</div> <!-- /section -->

	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+91-7276157125<br>
						<a href="mailto:Sourabh.biswas30@gmail.com">Sourabh.biswas30@gmail.com</a><br>
						<br>
						Pune,Maharastra
					</p>	
				</div>
			</div>

			
			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
				<div class="widget-body">
				<p class="text-right">
						<p class="follow-me-icons" >
							<a href=""><i class="fa fa-twitter fa-2"></i></a>
							<a href=""><i class="fa fa-facebook fa-2"></i></a>
						</p>
				   </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright@Sourav </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
