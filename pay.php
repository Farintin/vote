<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pay :: Nigeria's 1st Online voting platform&trade;</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/pay.css">
	</head>
	<body>
		<div class="wrapper">
            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="http://nigerianqueen.org/vote/images/38.jpg" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Vote for Juliet</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="First Name" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Last Name" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Your Email" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Phone Number" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Age" class="form-control">
								</div>
								<div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
									<div class="checkbox-tick">
										<label class="male">
											<input type="radio" name="gender" value="male" checked> Male<br>
											<span class="checkmark"></span>
										</label>
										<label class="female">
											<input type="radio" name="gender" value="female"> Female<br>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="checkbox-circle">
								<label>
									<input type="checkbox" checked> Nor again is there anyone who loves or pursues or desires to obtaini.
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="http://nigerianqueen.org/vote/images/38.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Please fill with additional info</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<input type="text" placeholder="Address" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="City" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Zip Code" class="form-control">
								</div>
							</div>

							<div class="form-row">
								<div class="select">
									<div class="form-holder">
										<div class="select-control">Your country</div>
										<i class="zmdi zmdi-caret-down"></i>
									</div>
									<ul class="dropdown">
										<li rel="United States">United States</li>
										<li rel="United Kingdom">United Kingdom</li>
										<li rel="Viet Nam">Viet Nam</li>
									</ul>
								</div>
								<div class="form-holder"></div>
							</div>
						</div>
					</div>
                </section>

                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="http://nigerianqueen.org/vote/images/38.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Send an optional message</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<textarea name="" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
								</div>
							</div>
							<div class="checkbox-circle mt-24">
								<label>
									<input type="checkbox" checked>  Please accept <a href="#">terms and conditions ?</a>
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/pay.js"></script>
		
</body>
</html>
