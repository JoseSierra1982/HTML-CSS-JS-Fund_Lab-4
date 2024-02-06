<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Subscribe | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>Thank You for Subscribing</h3>
<!-- STEP 10: We will add some script to run on the server when this page is called inside the below PHP delimiter tags -->
<?php 
$email = _GET ['email'];
echo "Your email address,".$email."has been added to our list of subscribers.";
// STEP 11: Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called, '$emailAddress'

// STEP 12: Set the above variable to equal $_GET['emailAddress'], and end the line with a semicolon (;)
// STEP 13: Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address - it should read, "Your email address, name@domain.com has been added to our list of subscribers." - use the $emailAddress variable and concatenate it inside the paragraph content -->
	
// STEP 14: Test your index.php and the subscribe.php pages by using the form
// STEP 15: Check all your HTML and PHP code for formatting, and accuracy - then submit the URL to Lab 4 for credit
?>
			</section>
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
