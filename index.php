<?php

include './config.php';

/** turn on output buffering */
//ob_start();

/** prepare session cookie */
session_name(SESSNAME);
session_start();

/** logout */
if(isset($_GET['logout']))
    $_SESSION['id'] = false;

/** redirect logged in users to main page. */
if($_SESSION['id'])
    err();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>ZhenFund @ Harvard</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/login.css" rel="stylesheet">
	</head>
	<body>
		<div id='app'>
			<header class="cf">
				<div id="header_wrap">
					<div class="make_hcenter">
						<div id="top_nav">
							<ul>
							    <li class="logo">
									<a href="http://www.zhenfund.com/"><span id="Zhen">Zhen</span><span id="Fund">Fund</span> @ Harvard</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<div id="wrap" class="clearfix">
				<div id="wrap_main">
					<div id="container_main" class="container clearfix">
						<div id="main_login" class="large">
							<ul class="main_field">
								<li>
									<h1>Login</h1>
								</li>
							</ul>
							<form action="login.php" id="login" method="post">
								<ul id="login-password-fields" class="main_field">
									<li>
										<input class="form-text large" id="user_password"  placeholder="Password" maxlength="20" name="passwd" size="8" type="password">
									</li>
								</ul>
								<div class="main_button">
									<input id="save_button_login" type="submit" value="Login"/>
									<a href='main.php'>View Results</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div id="footer_wrap">
					<div class="top_row">
						<div class="links_container">
							<div class="small_links">
								<a href='admin.php' target='_blank'>&copy;</a> Proudely Powered by <a href='https://huangtao.me/'>Tao Huang</a>, <a href='https://www.facebook.com/zilinj'>Zilin Jiang</a>, 2011
							</div>
						</div>
						<div class="feedback_link_container">
							<a href="http://www.cmu.edu/">Carnegie Mellon University</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>

