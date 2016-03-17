<DOCTYPE! html>

<head>
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\articles.css">
		<script src="Javascript\articles.js"></script>
		<script src="Javascript\hefo.js"></script>



</head>
<body>
		<!-- Header -->
	<div id="header">

		<div id = "home">
			<a href="index.php" >
				ProB
			</a>
		</div>




		<div id="menu">
			<ul id="pages">
				<li>
					<a href="about.php" class="header">
						<div class="navig">
							About
						</div>
					</a>
				</li >
				<li>
					<a href="foundations.php" class="header">
						<div class="navig">
							Foundations
						</div>
					</a>
				</li>
				<li>
					<a href="learnMore.php" class="header">
						<div class="navig">
							Learn More
						</div>
					</a>
				</li>
				<li>
					<a href="articles.php" class="header">
						<div class="navig">
							Articles
						</div>
					</a>
				</li>
				<li>
					<a href="contribute.php" class="header">
						<div class="navig">
							Contribute
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>

<!-- Main -->
<div id="content">
	<div id="section1">
		<div id = "featured">
			<h1 class="part">Featured</h1>
			<hr/>
			<div class="video" id = "video_wrapper" onclick="CloseImage()">
				<img id="thumb" src="articles\TheRealPrice.png" width="300" height="200">

				<iframe id="yv" width="300" height="200" src="https://www.youtube.com/embed/o9-KQepO3t8"
					frameborder="0" allowfullscreen></iframe>
			</div>
			<div id = "video_desc">
				<div id="vidtit">
				<h1>The Real Price Of Bananas</h1>
				</div>
				<hr/>
				<div id="viddet">
				<table id="video_info">
					<tr>
						<td class = "ltd">Short Documentary</td>
						<td class = "rtd">Sep 6, 2014</td>
					</tr>
					<tr>
						<td>By</td>
					</tr>
					<tr>
						<td class = "ltd">Jose Daniel Lopez</td>
						<td class = "rtd">
						<a href="https://www.youtube.com/watch?v=o9-KQepO3t8">
							<div id = "youtube_ref">
								<p><b>YouTube</b></p>
							</div>
						</a>
						</td>
					</tr>
				</table>
				</div>
				<div id="vidtext">
				<p id="video_anotation">
					"The banana production in Ecuador
					represents a big business for local
					corporations and a big headache for small
					local producers. This documentary
					investigates the economic and social
					problems caused by agrochemical companies
					in the banana plantations of Ecuador."
				</p>
				</div>
			</div>
		</div>

		<div id = "find_more">
			<h1 class="part">Find More</h1>
			<hr/>
			<ul id = "portals">
				<li>
					<a href="http://www.agra.org/">
					<img src="articles\agra.png">
					</a>
				</li>
				<li>
					<a href="http://qz.com/">
					<img src="articles\quartz.png" >
					</a>
				</li>
				<li>
					<a href="http://www.theguardian.com/uk/environment">
					<img src="articles\theguardian.png" >
					</a>
				</li>
				<li>
					<a href="http://www.freshfruitportal.com/">
					<img src="articles\freshfruit.png" >
					</a>
				</li>
				<li>
					<a href="https://nacla.org/">
					<img src="articles\naclarep.png" >
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div id = "morenews">
	<hr/>
		<div id="selector">
		<ul id = "news_tiles">
			<li>
			<div class= "arrow">
				<img src="articles\arrowleft.png" height="140">
			</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="articles\tote.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="http://www.theguardian.com/business/2016/feb/11/fyffes-accused-disrespecting-workers-rights">
							<div id="One">
								<p>Fyffes accused of disrespecting
									plantation workers' rights
								</p>

								<p>
									http://www.theguardian.com/business/2016/feb/11/fyffes-accused-disrespecting-workers-rights
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="articles\woman.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="http://www.foodispower.org/bananas/">
							<div id="Two">
								<p>Peeling Back the Truth on Bananas
								</p>

								<p>
									http://www.foodispower.org/bananas/
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="articles\plant.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="https://nacla.org/photo-essay/watching-fruit-fall/">
							<div id="Three">
								<p>Watching the Fruit Fall
								</p>

								<p>
									https://nacla.org/photo-essay/watching-fruit-fall
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="article_tile">
					<div class="newim">
					<img src="articles\tour.jpg" width="140" height="140">
					</div>
					<div class = "news_overlap">
						<a href ="https://www.washingtonpost.com/news/wonk/wp/2015/12/04/the-worlds-most-popular-banana-could-go-extinct/">
							<div id="Four">
								<p>Bye, bye, bananas
								</p>

								<p>
									https://www.washingtonpost.com/news/wonk/wp/2015/12/04/the-worlds-most-popular-banana-could-go-extinct/
								</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
			<div class= "arrow">
				<img src="articles\arrowright.png" height="140">
			</div>
			</li>
		</ul>
		</div>
	</div>
</div>

<!-- Footer -->
	<div id = "footer">

		<!-- to enter -->
		<div id="account_form_in">

					<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
									<!-- SHOWN WHEN THE USER HAS NOT LOGGED IN -->
					<div class="closeform" onclick="HideAccountEnter()">
								<p>X</p>
							</div>
				<form action="http://www.example.com/login.php">
							<p>E-Mail:
								<input type="text" name="e-mail" size="15"
								maxlength="30" />
							</p>
							<p>Password:
								<input type="password" name="password" size="15"
								maxlength="30" />
							</p>
							</form>
							<input class="bttn" type="submit" name="sign_in"
								value="Sign In" />
							<!-- A way to make the button act like a link-->
							<form action="signup.php" method="get">
							<input class="bttn" type="submit" name="sign_up"
								value="Sign Up" />
							</form>

					</div>

		<!-- SHOWN WHEN THE USER HAS LOGGED IN -->

					<div id="account_form_out">
							<p>Hello, XXXX</p>
							<!-- WHERE XXXX IS THE USER'S NAME  -->
							<input class="bttn" type="submit" name="sign_out"
								value="Sign Out" />
					</div>


		<!-- A FORM SHOWN ON CLICK SENDER'S NAME IS OPTIONAL -->
					<div id="share_form">
					<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
						<div class="closeform" onclick="HideShare()">
								<p>X</p>
							</div>
						<form action="http://www.example.com/login.php">
							<p>Recipient*:
								<input type="text" name="rec_name" size="15"
								maxlength="30" />
							</p>
							<p>E-Mail*:
								<input type="text" name="e-mail" size="15"
								maxlength="30" />
							</p>
							<hr/>
							<p>Sender:
								<input type="text" name="send_name" size="15"
								maxlength="30" />
							</p>
							</form>
							<input class="bttn" type="submit" name="send_to_friend"
								value="Send" />

					</div>



		<!-- to send us messages -->
		<div id="contact_us_form">
				<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
					<div class="closeform" onclick="HideContactUs()">
							<p>X</p>
						</div>
					<form action="http://www.example.com/login.php">
						<p>Sender*:
							<input type="text" name="rec_name" size="15"
							maxlength="30" />
						</p>
						<p>E-Mail*:
							<input type="text" name="e-mail" size="15"
							maxlength="30" />
						</p>
						<hr/>
							<textarea name="comments" cols="20" rows="4"></textarea>
						</p>
					</form>
						<input class="bttn" type="submit" name="send_to_friend"
							value="Send" />

				</div>


<!--					DIVISION							-->
		<div class="footermenu">
			<ul class="footermenu">
			<li>
				<div>
					<h5 onclick="ShowAccountEnter()">ACCOUNT</h5>
				</div>
			</li>

			<li>
				<div>
					<h5 onclick="ShowShare()">SHARE WITH A FRIEND</h5>

				</div>
			</li>
			<li>
				<div>
					<h5 onclick="ShowContactUs()">CONTACT US</h5>


				</div>
			</li>
			</li>
		</div>
		<div id="noover">
		<div id="Contacts">
			<h5 class = "NormalCharacterStyle1">Project Banana</h5>
			<p class = "NormalCharacterStyle">Rachelsmolen</p>
			<p class = "NormalCharacterStyle">5612 MA</p>
			<p class = "NormalCharacterStyle">Eindhoven</p>
			<p class = "NormalCharacterStyle">Nederland</p>
		</div>
		<div id="social">
			<ul>
			<li>
			<!-- FACEBOOK -->
				<a href="default.php" >
				<img
					src="ImgContent\Default\Facebook.png"
						alt="FACEBOOK LINK">
				</a>
			</li>
			<li>
			<!-- FACEBOOK -->
				<a href="default.php" >
				<img
					src="ImgContent\Default\Twitter.png"
						alt="Twitter LINK">
				</a>
			</li>
			<li>
			<!-- FACEBOOK -->
				<a href="default.php" >
				<img
					src="ImgContent\Default\Google.png"
						alt="GOOGLE LINK">
				</a>
			</li>
			</li>
		</div>
		</div>
	</div>




</body>
</html>