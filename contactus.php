<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style2.css"/>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
			font-family: sans-serif;
		}

		.container {
			width: 800px;
			background-color: #fff;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
		}

		h2 {
			text-align: center;
			margin-top: 0;
			margin-bottom: 20px;
			font-weight: 400;
			color: #444;
		}

		.contact-form {
			margin: 0 auto;
			max-width: 600px;
			background-color: #f1f1f1;
			padding: 20px;
			box-sizing: border-box;
		}

		.contact-form .form-control {
			width: 100%;
			margin-bottom: 20px;
			background-color: transparent;
			border: 1px solid #c7c7c7;
			padding: 10px;
			font-size: 14px;
			box-sizing: border-box;
		}

		.contact-form .form-control:focus {
			border-color: #444;
		}

		.contact-form .submit-button {
			background-color: #444;
			border: 0;
			padding: 10px;
			color: #fff;
			font-size: 14px;
			cursor: pointer;
			margin-top: 10px;
		}

		.contact-form .submit-button:hover {
			background-color: #000;
		}

		.contact-form p {
			margin: 0;
			font-size: 14px;
			color: #444;
			text-align: center;
		}

		.contact-form p a {
			color: #444;
			text-decoration: none;
		}
	</style>
</head>
<body>

<div class="topnav">

        <a class="active " href="index.php">Home</a>
        <a class="active " href="register1.html">Register</a>
        <a class="active " href="certificate.html">Certificate</a>
        <a class="active" href="contactus.php">Contact us</a>
    </div>

	<div class="container">
		<h2>Contact Us</h2>
		<div class="contact-form">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div>
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
				</div>
				<div>
					<label for="subject">Subject</label>
					<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
				</div>
				<div>
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message" required></textarea>
				</div>
				<div>
					<input type="submit" value="Send Message" class="submit-button">
				</div>
			</form>
			<p>For any queries related to Blood Bank , please contact us at <a href="dnyaneshagarkar2211@gmail.com">dnyaneshagarkar2211@gmail.com</a></p>
		</div>
	</div>
</body>
</html>