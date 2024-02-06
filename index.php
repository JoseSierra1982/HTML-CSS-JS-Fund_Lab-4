<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<!-- STEP 1: Save this file as index.php instead of index.html -->
		<!-- STEP 2: Connect to your Web server, and upload all of the files in this lab to a new folder called 'lab4' inside the 'week4' directory we created during this week's lesson -->
		<!-- STEP 3: Make sure that you can browse to this page on the server - the URL that you would have to enter into the address bar in a browser might look something like https://mysitename.azurewebsites.net/week4/lab4/index.php (for Microsoft Azure) -->
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section>
				<h3>Building Blocks In The News</h3>
				<!-- First Article -->
				<article>
					<h4>Latest Research Reveals Building Blocks are Cool</h4>
					<p>by Blocky Blockhead<br /><time datetime="2018-03-29">March 29, 2018</time></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing. Platea dictumst vestibulum rhoncus est pellentesque. Read more…</p>
				</article>
				<article>
					<h4>Building Blocks Aren’t Just For Kids</h4>
					<p>by Rectangle Square<br /><time datetime="2017-06-17">June 17, 2017</time></p>
					<p>Amet risus nullam eget felis eget nunc lobortis. Eget arcu dictum varius duis at consectetur lorem donec. Arcu felis bibendum ut tristique et egestas quis. Turpis tincidunt id aliquet risus feugiat in ante metus. Read more…</p>
				</article>
				<article>
					<h4>Investors Bet Big on Building Block Toys</h4>
					<p>by Right Angle<br /><time datetime="2018-02-15">February 15, 2018</time></p>
					<p>At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Arcu cursus euismod quis viverra nibh cras. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Aenean sed adipiscing diam donec adipiscing. Read more…</p>
				</article>
			</section>
			<!-- Side Notes / Related Information -->
             <aside>
            <h3>Subscribe to newsletter</h3>

<form action="Subscribe to NewsLetter.php" method="get">
<fieldset>
<legend>Get:</legend>
 <label for="email">Email:</label>
 <input type="email" id="email" name="email"><br><br>
<label for="birthday">BirthDay:</label>
<input type="date" id="birthDay" name="birthDay"><br><br>
<input type="submit" value="Subscribe">
</fieldset>
</form>
<!-- STEP 4: Create a pair of FORM tags so that visitors can sign up for a newsletter -->

<!-- STEP 5: Add an action attribute to the FORM start tag that points to a file called "subscribe.php", and set the method attribute to "get" -->
<!-- STEP 6: Add an H3 element inside the FORM tags that reads, "Subscribe to Newsletter" -->

<!-- STEP 7a: Add a LABEL element for the email address -->

<!-- STEP 7b: Add an INPUT element for the user to type their email address - set the type of INPUT to "email", add a name attribute that is set to "emailAddress", and an id attribute that is set to "emailAddress" -->

<!-- STEP 7c: Add the 'for' attribute to the above LABEL element, and set the value to match the 'id' value of the INPUT element -->
<!-- STEP 7d: Include the 'required' attribute on the above INPUT element so that users are forced to enter an email address before the form is submitted -->
<!-- STEP 8a: Add a BUTTON element with the attribute type="submit" -->
					
<!-- STEP 8b: Set the content of the BUTTON element to read, "Subscribe" -->
<!-- STEP 8c: Upload the changed index.php file that you've now edited to the server and refresh the page to view the changes - try adding an email address and submitting the form -->
<!-- STEP 9: Open up subscribe.php in your code editor and head to STEP 10 -->

				<h3>Did You Know…?</h3>
				<p>One of the most important components of effective life-long learning is <em>play</em>. Learning a new skill (like Web development) should include a certain amount of play. Renowned children’s programming entertainer Mr. Rogers certainly knew about the value that play represented:</p>
				<!-- Quotation -->
				<blockquote cite="https://www.brainyquote.com/quotes/fred_rogers_193081">
					<p>Play is often talked about as if it were a relief from serious learning. But for children, play <em>is</em> serious learning. Play is really the work of childhood. –Fred Rogers</p>
				</blockquote>
				<p>Take a little time every day to just <strong>play</strong> with technology – you’ll be surprised how much you learn.</p>
				<img src="images/mini-figure.png" width="176" height="285" alt="Mini figure">
			</aside>
<!-- STEP 10: Make sure all of your HTML code is properly formatted, indenting nested tags with the tab key appropriately. All done! -->
			<!-- Mini figure by Vanja (Public Domain) https://openclipart.org/detail/224315/clip-is-a-brick-minifig-4 -->
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
