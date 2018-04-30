
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Update Fee</title>
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
		Search Student</h1>
	<div class="appointment-w3">

<!--    search by rollno.    -->
        <form action="<?=base_url('index.php/student/findStudent')?>" method="post">
			<div class="information">
				<div class="main">
					<div class="form-left-w3l">
						<input name="acc" type="text" placeholder="Account Number" required="">
						<div class="clear"></div>
					</div>
				</div>
			</div>
            <input type="submit" name="submit" value="Search by Account Number">
		</form>
        <!--	search by class	-->
        <form action="<?=base_url('index.php/student/findStudentClass')?>" method="post">
            <div class="information">
                <div class="main">
                    <div class="form-left-w3l">
                        <input name="class" type="text" placeholder="Class" required="">
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" value="Search by Class">
        </form>
        <hr>
<!--    Pending students of 3 months    -->
        <form action="<?=base_url('index.php/student/unpaidList')?>" method="post">
            <input type="submit" value="Pending list of 3 months">
        </form>
<!--    Pending students of 2 months    -->
        <form action="<?=base_url('index.php/student/unpaidListTwo')?>" method="post">
            <input type="submit" value="Pending list of 2 months">
        </form>
        <br>
	</div>


	<div class="copy">
		<p>&copy;2018 Student Registration Form. All Rights Reserved | Design by Ritronix Technology</p>
	</div>
	<!-- js -->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
</body>

</html>