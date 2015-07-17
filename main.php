<?PHP
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>WebKoom</title>
		<meta charset='UTF-8'>
		<meta name='generator' content='WebKoom 1.0'>
		<meta name='author' content='Luiz Roberto Nogueira Junior'>
		<meta name='reply-to' content='spiderpoison@gmail.com'>
		<meta name='description' content='Content management system'>
		<meta name='keywords' content='content,management,system'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='stylesheet' href='stylesheet/css.css'>
		<script src='javascript/js.js'></script>
		<script src='javascript/box.js'></script>
	</head>
	<body class='fibonacci'>
		<!--header-->
		<header id='header' class='header'>
			<!--logo-->
			<figure id='figure' itemscope itemtype='http://www.webkoom.com/Organization'>
				<img id='logo' class='logo' src='image/logo.png' alt='WebKoom' title='WebKoom' width='119' itemprop="logo">
			</figure>
			<!--banner_top-->
			<div id='banner_top' class='banner_top'>
				banner_top
			</div>
			<!--nav_horizontal_top-->
			<nav id='nav_top' class='nav_top'>
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Clients</a>
				<a href="#">Contact Us</a>
			</nav>
			<!--login-->
			<div id='login' class='login'>
				login
			</div>
		</header>
		<!--main-->
		<main id='main' class='main'>
			<!--aside_left-->
			<aside id='aside_left' class='aside_left'>
				<!--nav_vertical_left-->
				<nav id='nav_left' class='nav_left'>
					<a href="#">Home</a>
					<a href="#">About</a>
					<a href="#">Clients</a>
					<a href="#">Contact Us</a>
				</nav>
				<!--banner_left-->
				<div id='banner_left' class='banner_left'>
					banner_left
				</div>
			</aside>
			<!--article-->
			<article id='article' class='article'>
				<!--main_header-->
				<header>
					<h1 id='main_header' class='main_header'>main_header</h1>
				</header>
				<!--main_section-->
				<div id='content' class='content'>
					<input type=button onclick='See("commum1",1,1,1)' value='see box'>
					<input type=button onclick='See("commum2",1,1,1)' value='see box'>
					<p>You can drag the box across the screen if you desire.</p>					
				</div>
				<!--main_footer-->
				<footer id='main_footer' class='main_footer' >main_footer</footer>
			</article>
			<!--aside_right-->
			<aside id='aside_right' class='aside_right'>
				<!--nav_right-->
				<nav id='nav_right' class='nav_right'>
					<a href="#">Home</a>
					<a href="#">About</a>
					<a href="#">Clients</a>
					<a href="#">Contact Us</a>
				</nav>
				<!--banner_right-->
				<div id='banner_right' class='banner_right'>
					banner_right
				</div>
			</aside>
		</main>
		<!--footer-->
		<footer id='footer' class='footer'>
			<!--banner_bottom-->
			<div id='banner_bottom' class='banner_bottom'>
				banner_bottom
			</div>
			<!--nav_bottom-->
			<nav id='nav_bottom' class='nav_bottom'>
				nav_horizontal_bottom
			</nav>
			<!--vcard-->
			<div id='organization' class='organization' itemscope itemtype='http://www.webkoom.com/Organization'>
				<span id='name' class='name' itemprop='name'>Organization name</span>
				<span id='tel' class='tel' itemprop='tel'>16 99115 2166</span>
				<span id='email' class='email' itemprop='email'>mail@domain.com</span>
				<span  id='address' itemprop='address' itemscope itemtype='http://www.webkoom.com/Address'>
					<span id='street_address' class='street_address' itemprop='street-address'>street_address</span>
					<span id='locality' class='locality' itemprop='locality'>locality</span>
					<span id='region' class='region' itemprop='region'>region</span>
					<span id='country_name' class='country_name' itemprop='country-name'>country_name</span>
					<span id='postal_code' class='postal_code' itemprop='postal-code'>postal_code</span>
				</span>				
			</div>			
		</footer>
		<script>
			Box('commum1','Commum','content',1)
			Box('commum2','Commum','content',0)
		</script>
	</body>
</html>