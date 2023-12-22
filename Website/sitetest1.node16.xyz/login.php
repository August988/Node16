<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Login</title>

        <link rel="icon" href="textures/ico.png"> 

        <style>

            

            <?php 

            include 'data/main.css';

            ?>

        </style>

        

    </head>

    <body>









		<form name="aspnetForm" method="post" action="data/logaction.php" id="aspnetForm">



            

			<div id="Container">

			    

                    

<div id="AdvertisingLeaderboard">

     <script type="text/javascript"><!--

	    google_ad_client = "pub-2247123265392502";

	    google_ad_width = 728;

	    google_ad_height = 90;

	    google_ad_format = "728x90_as";

	    google_ad_type = "text_image";

	    google_ad_channel = "";

	    //-->

    </script>

    

</div>



       			

				<div id="Header">

					<div id="Banner">

						<div id="Options">

							<div id="Authentication">

								<span><a id="ctl00_lsLoginStatus" href="login.php">Login</a></span>

							</div>

							<div id="Settings">

								<span id="ctl00_lSettings"></span>

							</div>

						</div>

						<div id="Logo"><a id="ctl00_rbxImage_Logo" title="LUCKBLOX" href="home.php" style="display:inline-block;cursor:pointer;"><img src="textures/logo.png" border="0" id="img" alt="LUCKBLOX"></a>

						</div>

						<div id="Alerts"><table style="width:100%;height:100%"><tbody><tr><td valign="middle"><a id="ctl00_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" href="signup.php"><img src="textures/SignupBanner.png" alt="Sign-up and Play!" border="0"></a>



</td></tr></tbody></table></div>

					</div>

					<div class="Navigation">

						<span><a id="ctl00_hlMyLUCKBLOX" class="MenuItem" href="user.php">My LUCKBLOX</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlGames" class="MenuItem" href="games.php">Games</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlCatalog" class="MenuItem" href="catalog.php">Catalog</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

                        <span><a id="ctl00_hlBuildersClub" class="MenuItem" href="browse.php">Browse</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlNews" class="MenuItem" href="https://discord.gg/5DGsVHKtVT" target="_blank">News</a>&nbsp;<a id="ctl00_hlNewsFeed" href="https://discord.gg/5DGsVHKtVT"><img src="textures/feed-icon-14x14.png" border="0"></a></span>

						

 					</div>

				</div>

				<div id="Body">

					

	<div id="SplashContainer">

		<div id="SignInPane">

			



<div id="LoginViewContainer">

	

			<div id="LoginView">

				<h5>Member Login</h5>

				

<div class="AspNet-Login">

						<div class="AspNet-Login">

							<div class="AspNet-Login-UserPanel">

                                <?php 

      if (isset($_GET['error'])){ 

          if (!empty ($_GET['error'])){

          if (strpos($_GET['error'], 'script') == false){

      ?>

        <h4 class="error" style='text-align: center;'><?php echo $_GET['error']; ?></h4>

    <?php 

    }

    } 

    } 

    ?>

								<label for="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_UserName" id="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_UserNameLabel" class="Label">Character Name</label>

								<input name="username" type="text" id="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_UserName" tabindex="1" class="Text">

							</div>

							<div class="AspNet-Login-PasswordPanel">

								<label for="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_Password" id="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_PasswordLabel" class="Label">Password</label>

								<input name="password" type="password" id="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_Password" tabindex="2" class="Text">

							</div>

							<!--div class="AspNet-Login-RememberMePanel"-->

								

							<!--/div-->

							<div class="AspNet-Login-SubmitPanel">

								<input id="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_Login" type='submit' tabindex="4" class="Button" value='Login'>

							</div>

							<div class="AspNet-Login-PasswordRecoveryPanel">

								<a id="ctl00_cphLUCKBLOX_rbxLoginView_lvLoginView_lSignIn_hlPasswordRecovery" tabindex="5" href="data/resetlogpass.php">Forgot your password?</a>

							</div>

						</div>

					

</div>

			</div>

		

</div>



			<div id="ctl00_cphLUCKBLOX_pFigure">

	

			

</div>

			

		</div>

		<div id="LUCKBLOXAtAGlance">

			<h2>LUCKBLOX Virtual Playworld</h2>

			<h3>LUCKBLOX is Free!</h3>

			<ul id="ThingsToDo">

				<li id="Point1">

					<h3>Build your personal Place</h3>

					<div>Create buildings, vehicles, scenery, and traps with thousands of virtual bricks.</div>

				</li>

				<li id="Point2">

					<h3>Meet new friends online</h3>

					<div>Visit your friend's place, chat in 3D, and build together.</div>

				</li>

				<li id="Point3">

					<h3>Battle in the Brick Arenas</h3>

					<div>Play with the slingshot, rocket, or other brick battle tools.  Be careful not to get "bloxxed".</div>

				</li>

			</ul>

			<div id="Showcase" onload="MM_CheckFlashVersion('8,0,0,0','Content on this page requires a newer version of Macromedia Flash Player. Do you want to download it now?');">

					<video style="width:400px; height:326px;" controls>

                        <source src="Gran Turismo - Like the wind.mp4" type="video/mp4">  

                    </video> 

			</div>

			<div id="Install">

				<div id="CompatibilityNote"><div id="ctl00_cphLUCKBLOX_pCompatibilityNote">

	Works with your<br>Windows PC!

</div></div>



			</div>

			<div id="ctl00_cphLUCKBLOX_pForParents">

	



				</div>

			

</div>

		</div>

		<div id="UserPlacesPane">

			<div id="UserPlaces_Content">

			    

				<table id="ctl00_cphLUCKBLOX_DataListCoolPlace" cellspacing="0" border="0" width="100%">

	<tbody><tr>

		<td class="UserPlace">


					</td>

	</tr>

</tbody></table>

			</div>

			<div id="UserPlaces_Header">

				<h3>This isnt a used site this is just a testing thingy</h3>

				<p>i'm not a skid !</p>

			</div>

			<div id="ctl00_cphLUCKBLOX_ie6_peekaboo" style="clear: both"></div>

		</div>

	</div>



				</div>

				<div id="Footer">

					

<hr>

<p class="Legalese">

         LUCKBLOX, "Online Building Toy", characters, logos, names, and all related indicia

    are trademarks of ROBLOX,  ©2007-2021. Patents pending.

        <br>LUCKBLOX is not affliated with ROBLOX, Lego, MegaBloks, Bionicle, Pokemon, Nintendo, Lincoln Logs, Yu Gi Oh, K'nex, Tinkertoys, Erector Set, or the Pirates of the Caribbean. ARrrr!. This is a fan site!

        <br>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="tos.php">Terms and Conditions</a>.

    </p>



				</div>

			</div>

    

            

		



</form>

	

    </body>

</html>