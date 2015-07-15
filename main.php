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
		<header id='header' class='header'>
			<figure id='logo' class='logo'>Logo</figure>
			<section id='banner_top' class='banner_top'>
				banner_top
			</section>
			<section id='login' class='login'>
				login
			</section>
			<nav id='nav_horizontal_top' class='nav_horizontal_top'>
				nav_horizontal_top
			</nav>
		</header>
		<main id='main' class='main'>
			<aside id='aside_left' class='aside_left'>
				aside_left
				<nav id='nav_vertical_left' class='nav_vertical_left'>
					nav_vertical_left
				</nav>
				<section id='banner_left' class='banner_left'>
					banner_left
				</section>
			</aside>
			<article id='article' class='article'>
				<header><h1 id='main_header' class='main_header'>main_header</h1></header>
				<section id='main_section' class='main_section'>
				<input type=button onclick=See('commum1',1,1,1) value='see box'>
				<input type=button onclick=See('commum2',1,1,1) value='see box'>
				main_section
				</section>
				<footer id='main_footer' class='main_footer' >main_footer</footer>
			</article>
			<aside id='aside_right' class='aside_right'>
				aside_right
				<nav id='nav_vertical_right' class='nav_vertical_right'>
					nav_vertical_right
				</nav>
				<section id='banner_right' class='banner_right'>
					banner_right
				</section>
			</aside>
		</main>
		<footer id='footer' class='footer'>	
			<nav id='nav_horizontal_bottom' class='nav_horizontal_bottom'>
				nav_horizontal_bottom
			</nav>		
			<section id='banner_bottom' class='banner_bottom'>
				banner_bottom
			</section>
			footer
		</footer>
		<script>
			Box('commum1','Commum','content',1)
			Box('commum2','Commum','content',0)
		</script>
	</body>
</html>