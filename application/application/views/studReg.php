
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Table Booking Form a Flat Responsive Widget Template :: w3layouts </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Table Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- Meta tags -->
    <!--stylesheets-->
    <!--	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">-->
    <link rel="stylesheet" href="<?=base_url()?>Static/Style/style.css">
    <!--//style sheet end here-->
    <!-- Calendar -->
    <link rel="stylesheet" href="<?=base_url()?>Static/Style/jquery-ui.css" />
    <!-- //Calendar -->
    <link href="<?=base_url()?>Static/Style/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
    <!-- Time-script-CSS -->

    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
		Student Registration Form</h1>
	<div class="appointment-w3">
		<form action="<?=base_url('index.php/Student/studentAdd')?>" method="post">
			<div class="personal">
			
				<div class="main">
					<div class="form-left-w3l">

						<input type="text" class="top-up" name="name" placeholder="Name" required="">
					</div>
					<div class="form-left-w3l">

						<input type="text" name="father" placeholder="Father's Name" required="">
					</div>
                    <div class="form-left-w3l">

                        <input type="text" name="mother" placeholder="Mother's Name" required="">
                    </div>
					<div class="form-right-w3ls ">

						<input class="buttom" type="text" name="phone" placeholder="Phone Number" required="">
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
			<div class="information">
				
				
				<div class="main">

					
					<div class="form-left-w3l">
						<input name="roll" type="text" placeholder="Rec Number" required="">
                        <input name="session" type="text" placeholder="Session" required="">
                        <input name="acc" type="text" placeholder="Account Number" required="">
						<input type="text" name="class" placeholder="Class" required="">
						<input type="text" name="address" placeholder="Address" required="">
						<div class="clear"></div>
                        <input type="checkbox" name="conv" value="1"> <span style="color: white">Conveyance</span>
					</div>
				</div>
			</div>
			
			
			<div class="btnn">
				<input name="submit" type="submit" value="Submit">
			</div>
		</form>
	</div>
	<div class="copy">
		<p>&copy;2018 Student Registration Form. All Rights Reserved | Design by Ritronix Technology</p>
	</div>
	<!-- js -->
	<script type='text/javascript' src='<?=base_url()?>Static/Style/js/jquery-2.2.3.min.js'></script>
	<!-- //js -->

</body>

</html>