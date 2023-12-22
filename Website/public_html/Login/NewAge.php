<?php

session_start();

$servername = "localhost";
$username = "nodexyz_dbadmin";
$password = "redheadnoob8";
$dbname = "nodexyz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitizeInput($_POST["userName"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // we don't want blank users
    if ($username == "" or $password == "")
    {
        echo "Username or password is blank. We don't want that!!!!";
        die();
    }
    
    $birthYear = ($_POST["lstYears"] !== "Year") ? sanitizeInput($_POST["lstYears"]) : null;
    $birthMonth = ($_POST["lstMonths"] !== "Month") ? sanitizeInput($_POST["lstMonths"]) : null;
    $birthDay = ($_POST["lstDays"] !== "Day") ? sanitizeInput($_POST["lstDays"]) : null;

    $gender = sanitizeInput($_POST["gender"]);

    $joinDate = date("n/j/Y");

    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkUsernameQuery);

    if ($result && $result->num_rows > 0) {
        echo "Username already exists";
    } else {

        $sql = "INSERT INTO users (username, password, birthYear, birthMonth, birthDay, gender, joinDate, isAdmin) 
                VALUES ('$username', '$password', '$birthYear', '$birthMonth', '$birthDay', '$gender', '$joinDate', '1')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['username'] = $username;
            $_SESSION['isAdmin'] = '1';

            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<html>
    <link rel="stylesheet" type="text/css" href="https://web-static.archive.org/_static/css/banner-styles.css?v=S1zqJCYt">
    <link rel="stylesheet" type="text/css" href="https://web-static.archive.org/_static/css/iconochive.css?v=qtvMKcIJ">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="W3knzRZJ1pUe4D1CGluqZfKUoa76WkFp6zqJF5qn">
	<title>Landing Page - NODE16</title>
	<meta name="og:title" content="Landing Page - NODE16">
	<meta name="author" content="NODE16 Development Team">
	<meta name="description" content="Node16, it is website. He is for old brick-builder. Good for use.">
	<meta name="og:description" content="Node16, it is website. He is for old brick-builder. Good for use.">
	<meta name="og:site_name" content="Node16">
	<meta name="og:type" content="website">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://web.archive.org/web/20150131175641cs_/http://www.roblox.com/CSS/Base/CSS/FetchCSS?path=leanbase___71f465fc3508bdea4bb0caae519e9836_m.css">
    <link rel="stylesheet" href="https://web.archive.org/web/20150131175641cs_/http://www.roblox.com/CSS/Base/CSS/FetchCSS?path=page___a938a4bf12deea341396461a93a11c31_m.css">
    <script type="text/javascript" src="https:////web.archive.org/web/20150131175641js_/http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
    <script type="text/javascript" src="//web.archive.org/web/20150131175641js_/http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
    <script type="text/javascript" src="https://web.archive.org/web/20150131175641js_/http://js.rbxcdn.com/1bf50930091a736277db231362dd6c29.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var _gaq = _gaq || [];

		_gaq.push(['_setAccount', 'UA-11419793-1']);
		_gaq.push(['_setCampSourceKey', 'rbx_source']);
		_gaq.push(['_setCampMediumKey', 'rbx_medium']);
		_gaq.push(['_setCampContentKey', 'rbx_campaign']);
		_gaq.push(['_setDomainName', 'roblox.com']);
		_gaq.push(['b._setAccount', 'UA-486632-1']);
		_gaq.push(['b._setCampSourceKey', 'rbx_source']);
		_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
		_gaq.push(['b._setCampContentKey', 'rbx_campaign']);
		_gaq.push(['b._setDomainName', 'roblox.com']);
        _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
        _gaq.push(['b._trackPageview']);    
		_gaq.push(['c._setAccount', 'UA-26810151-2']);
		_gaq.push(['c._setDomainName', 'roblox.com']);
		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://web.archive.org/web/20150131175641/https://ssl' : 'https://web.archive.org/web/20150131175641/http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
    <script src="https://web.archive.org/web/20150131175641js_/http://www.roblox.com/web/20150131175642/http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
    .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
    .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://web.archive.org/web/20150131175641/http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style>
</head>
<body data-twttr-rendered="true">




 

<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://web.archive.org/web/20150131175641if_/http://static.ak.facebook.com/connect/xd_arbiter/DU1Ia251o0y.js?version=41#channel=f3ab413f23bfaaa&amp;origin=http%3A%2F%2Fwww.roblox.com" style="border: none;" allow="autoplay 'self'; fullscreen 'self'" data-ruffle-polyfilled=""></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://web.archive.org/web/20150131175641if_/https://s-static.ak.facebook.com/connect/xd_arbiter/DU1Ia251o0y.js?version=41#channel=f3ab413f23bfaaa&amp;origin=http%3A%2F%2Fwww.roblox.com" style="border: none;" allow="autoplay 'self'; fullscreen 'self'" data-ruffle-polyfilled=""></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https:///web.archive.org/web/20150131175641/http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    

<style type="text/css">
    .coverSprite {
        background-repeat: no-repeat;
        background-image: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/20e7d1543d2c5caf201184d86530fc35.png');
    }

    #RollerContainer {
        background-image: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/dcbdfaf1c08058e71f65c09f7b98ff04.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .special-dropdown select {
        border: 0 !important;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/379f4f1018f31cbb62ef52a22d9f2118.png') no-repeat;
        background-position: 92% 40%;
        width: 100px;
        text-indent: 0.01px;
        text-overflow: "";
    }
    #InnerWhatsRobloxContainer1 {
        height: 70%;
        background-image: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/cca69eca62f23ca413fc920549e936ea.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 30% center;
        color: white;
    }
    #GameImage1 {
        background-image: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/42268b6264d89827401ef912f174f288.jpg');
        margin-right: 5px;
    }

    #GameImage2 {
        background-image: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/04baeb33ef66ef1395cd5464309fece6.jpg');
        margin-right: 5px;
    }

    #GameImage3 {
        background-image: url('https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/e8b89d14690203420d64b5b2fda0b461.jpg');
        margin-right: -10px;
        width: calc(33.333333% - 10px);
    }
</style>
<div class="navbar navbar-landing navbar-fixed-top ng-scope" role="navigation" ng-modules="robloxApp, LandingSignup">
    <div class="container">
        <div class="row">
            <div class="navbar-header col-md-6">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#LandingNavbar">
                    Log In
                </button>
                <div class="navbar-brand hidden-xs"><img class="robloxLogo" src="../static/images/e870a0b9bcd987fbe7f730c8002f8faa.png"></div>
                <ul id="TopLeftNavLinks" class="nav navbar-nav">
                    <li id="PlayLink" class="pull-left"><a href="javascript:" onclick="scrollTo(1, '#RollerContainer')">Play</a></li>
                    <li id="AboutLink" class="pull-left"><a href="javascript:" onclick="scrollTo(2, '#WhatsRobloxContainer')">About</a></li>
                    <li id="PlatformLink" class="pull-left"><a href="javascript:" onclick="scrollTo(3, '#RobloxDeviceText')">Platforms</a></li>
                    <li id="magic-line" style="left: 41px; width: 61px;"></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse col-sm-6 ng-scope" id="LandingNavbar" ng-controller="LoginController">
                <form name="loginForm" action="https://web.archive.org/web/20150131175641/https://www.roblox.com/newlogin" id="LogInForm" class="navbar-form form-inline navbar-right ng-invalid ng-invalid-required ng-dirty" ng-submit="submitLogin($event)" method="post" role="form" novalidate="">
                    <div class="form-group" ng-class="{ 'has-error': loginForm.username.$invalid &amp;&amp; badSubmit}">
                        <input id="LoginUsername" type="text" placeholder="Username" class="form-control ng-pristine ng-invalid ng-invalid-required" name="username" ng-required="true" ng-model="login.username" required="required">
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': loginForm.password.$invalid &amp;&amp; badSubmit}">
                        <input id="LoginPassword" type="password" placeholder="Password" class="form-control ng-dirty ng-valid ng-valid-required" name="password" ng-required="true" ng-model="login.password" auto-fill-sync="" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" id="LoginButton" class="form-control" value="Log In">
                    </div>
                    <a id="HeaderForgotPassword" class="navbar-link" href="./ResetPasswordRequest.aspx">Forgot Username/Password?</a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ng-scope" ng-modules="robloxApp, LandingSignup">
    <!-- Roller Coaster-->
    <section class="row full-height-section" id="RollerContainer">
        <div class="col-md-12 inner-full-height-section" id="InnerRollerContainer">
            <div id="MainCenterContainer" class="row">
                <div class="col-xs-12 col-md-6">
                    <div id="MainLogo" class="text-right">
                        <div id="LogoAndSlogan" class="text-center">
                            <img id="MainLogoImage" title="ROBLOX" class="center-block img-responsive" src="../static/images/39ae3ca577c8488487ef492031b8e264.png">
                            <div class="clearfix"></div>
                            <h1>Powering Imagination</h1>

                        </div>
                    </div>
                </div>

                

<!-- Modal -->
<div id="BootstrapConfirmationModal" data-modal-handle="bootstrap-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="roblox-close-btn" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                    <img class="GenericModalImage" alt="generic image">
                </div>
                <p class="modal-body-text"></p>
                <p id="roblox-captcha-error" class="text-center text-danger"></p>
            </div>
            <div class="modal-footer">
                <button type="button" id="roblox-decline-btn" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="roblox-confirm-btn" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    Roblox = Roblox || {};
    Roblox.Resources = Roblox.Resources || {};

    //<sl:translate>
    Roblox.Resources.GenericConfirmation = {
        yes: "Yes",
        No: "No",
        Confirm: "Confirm",
        Cancel: "Cancel"
    };
    //</sl:translate>

    //<sl:translate>
    Roblox.Resources.CaptchaModal = {
        title: "Are you human?",
        message: "To finish, please verify that you are human.",
        captchaEmptyMessage: "The CAPTCHA field should not be empty, please fill it.",
        captchaErrorMessage: "The CAPTCHA you entered is invalid. Please try again.",
        finish: "Finish"
    };
    //</sl:translate>
</script>

                <div class="clearfix visible-sm"></div>
                <div class="col-xs-12 col-md-6">
                    <div id="SignUpFormContainer" class="ng-scope" ng-controller="SignUpController">
                        <form name="signupForm" id="SignUpForm" method="POST" action="NewAge.php" role="form" novalidate="" autocomplete="off" class="ng-pristine ng-invalid-required ng-invalid-moderated ng-invalid">

                            <input name="__RequestVerificationToken" type="hidden" value="PVIMoZOfKqc_dMmmIYLQNcq3PJhjo-Fcg571sBXYYp1UkGEAvzc1gpbJcQiaokSJIVvV2GcX1ujPNGYELNdfwBSb7qY1">
                            <h3 class="text-left">Sign up and start having fun!</h3>
                            <div class="form-group" ng-class="{ 'has-error': (badSubmit &amp;&amp; signupForm.userName.$invalid) || signupForm.userName.$showError, 'has-success': signupForm.userName.$showSuccess  }">
                                <input id="SignupUsername" ng-model="signup.username" type="text" name="userName" class="form-control input-lg ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-unique ng-invalid-moderated" placeholder="Username (3-20 characters, no spaces)" ng-maxlength="20" maxlength="20" ng-required="true" rbx-valid-username="" rbx-show-error="" autocomplete="off" autofocus="autofocus" data-last-username="" required="required">
                                <div id="UsernameError" class="text-danger ng-binding ng-hide" ng-show="signupForm.userName.$showError" ng-bind="signupForm.userName.$usernameMessage">Can't be used</div>
                            </div>
                            <div class="form-group" ng-class="{ 'has-error': (badSubmit &amp;&amp; signupForm.password.$invalid) || signupForm.password.$showError, 'has-success': signupForm.password.$showSuccess  }">
                                <input id="SignupPassword" ng-model="signup.password" type="password" name="password" class="form-control input-lg ng-pristine ng-invalid ng-invalid-required" placeholder="Password (4 letters and 2 numbers minimum)" ng-required="true" autocomplete="off" rbx-show-error="" rbx-valid-password="" data-last-password="" required="required">
                                <div id="PasswordError" class="text-danger ng-binding ng-hide" ng-show="signupForm.password.$showError" ng-bind="signupForm.password.$passwordMessage"></div>
                            </div>
                            <div class="form-group" ng-class="{ 'has-error': (badSubmit &amp;&amp; signupForm.passwordConfirm.$invalid) || signupForm.passwordConfirm.$showError, 'has-success': signupForm.passwordConfirm.$showSuccess  }">
                                <input id="SignupPasswordConfirm" ng-model="signup.passwordConfirm" type="password" name="passwordConfirm" class="form-control input-lg ng-isolate-scope ng-pristine ng-invalid ng-invalid-required ng-valid-match" placeholder="Confirm Password" ng-required="true" match="signup.password" autocomplete="off" rbx-show-error="" data-last-password="" required="required">
                                <div class="text-danger ng-hide" ng-show="signupForm.passwordConfirm.$showError &amp;&amp; signupForm.passwordConfirm.$error.match">Passwords don't match</div>
                            </div>
                            <div class="form-group" ng-class="{'has-error': badSubmit &amp;&amp; !validBirthday(), 'has-success':validBirthday()}">
                                <div class="form-control fake-input-lg form-inline">
                                    <label>Birthday</label>
                                    <input name="lstMonths" ng-value="submitMonth()" type="hidden" value="NaN">
                                    <input name="lstDays" ng-value="signup.birthdayDay" type="hidden" value="">
                                    <input name="lstYears" ng-value="signup.birthdayYear" type="hidden" value="">
                                    <div class="special-dropdown month-special-dropdown">
                                        <select id="birthdayMonthSelect" ng-model="signup.birthdayMonth" class="noHighlight ng-pristine ng-invalid ng-invalid-required" ng-required="true" autocomplete="off" data-last-selected="" required="required">
                                            <option value="">Month</option>
                                            <option value="0">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                            <option value="4">May</option>
                                            <option value="5">June</option>
                                            <option value="6">July</option>
                                            <option value="7">August</option>
                                            <option value="8">September</option>
                                            <option value="9">October</option>
                                            <option value="10">November</option>
                                            <option value="11">December</option>
                                        </select>
                                    </div>
                                    <div class="special-dropdown day-special-dropdown">
                                        <select id="birthdayDaySelect" ng-model="signup.birthdayDay" ng-options="day for day in days" class="noHighlight ng-pristine ng-invalid ng-invalid-required" ng-required="true" autocomplete="off" data-last-selected="" required="required"><option value="" class="">Day</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option><option value="5">6</option><option value="6">7</option><option value="7">8</option><option value="8">9</option><option value="9">10</option><option value="10">11</option><option value="11">12</option><option value="12">13</option><option value="13">14</option><option value="14">15</option><option value="15">16</option><option value="16">17</option><option value="17">18</option><option value="18">19</option><option value="19">20</option><option value="20">21</option><option value="21">22</option><option value="22">23</option><option value="23">24</option><option value="24">25</option><option value="25">26</option><option value="26">27</option><option value="27">28</option><option value="28">29</option><option value="29">30</option><option value="30">31</option></select>
                                    </div>
                                    <div class="special-dropdown year-special-dropdown">
                                        <select id="birthdayYearSelect" ng-model="signup.birthdayYear" ng-options="year for year in years" class="noHighlight ng-pristine ng-invalid ng-invalid-required" ng-required="true" autocomplete="off" data-last-selected="" required="required"><option value="" class="">Year</option><option value="0">2015</option><option value="1">2014</option><option value="2">2013</option><option value="3">2012</option><option value="4">2011</option><option value="5">2010</option><option value="6">2009</option><option value="7">2008</option><option value="8">2007</option><option value="9">2006</option><option value="10">2005</option><option value="11">2004</option><option value="12">2003</option><option value="13">2002</option><option value="14">2001</option><option value="15">2000</option><option value="16">1999</option><option value="17">1998</option><option value="18">1997</option><option value="19">1996</option><option value="20">1995</option><option value="21">1994</option><option value="22">1993</option><option value="23">1992</option><option value="24">1991</option><option value="25">1990</option><option value="26">1989</option><option value="27">1988</option><option value="28">1987</option><option value="29">1986</option><option value="30">1985</option><option value="31">1984</option><option value="32">1983</option><option value="33">1982</option><option value="34">1981</option><option value="35">1980</option><option value="36">1979</option><option value="37">1978</option><option value="38">1977</option><option value="39">1976</option><option value="40">1975</option><option value="41">1974</option><option value="42">1973</option><option value="43">1972</option><option value="44">1971</option><option value="45">1970</option><option value="46">1969</option><option value="47">1968</option><option value="48">1967</option><option value="49">1966</option><option value="50">1965</option><option value="51">1964</option><option value="52">1963</option><option value="53">1962</option><option value="54">1961</option><option value="55">1960</option><option value="56">1959</option><option value="57">1958</option><option value="58">1957</option><option value="59">1956</option><option value="60">1955</option><option value="61">1954</option><option value="62">1953</option><option value="63">1952</option><option value="64">1951</option><option value="65">1950</option><option value="66">1949</option><option value="67">1948</option><option value="68">1947</option><option value="69">1946</option><option value="70">1945</option><option value="71">1944</option><option value="72">1943</option><option value="73">1942</option><option value="74">1941</option><option value="75">1940</option><option value="76">1939</option><option value="77">1938</option><option value="78">1937</option><option value="79">1936</option><option value="80">1935</option><option value="81">1934</option><option value="82">1933</option><option value="83">1932</option><option value="84">1931</option><option value="85">1930</option><option value="86">1929</option><option value="87">1928</option><option value="88">1927</option><option value="89">1926</option><option value="90">1925</option><option value="91">1924</option><option value="92">1923</option><option value="93">1922</option><option value="94">1921</option><option value="95">1920</option><option value="96">1919</option><option value="97">1918</option><option value="98">1917</option><option value="99">1916</option><option value="100">1915</option></select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" ng-class="{'has-error': badSubmit &amp;&amp; !validGender(), 'has-success':validGender()}">
                                <div class="form-control fake-input-lg">
                                    <input type="hidden" id="GenderInput" name="gender" ng-value="signup.gender" data-last-gender-male="False" data-last-gender-female="False">
                                    <div class="pull-left"><label>Gender:</label></div>
                                    <div title="Female" class="gender-circle noHighlight" tabindex="0" ng-class="{'selected-gender': signup.gender === 'female'}" ng-click="selectFemale()">
                                        <div class="coverSprite gender female"></div>
                                    </div>
                                    <div title="Male" class="gender-circle noHighlight" tabindex="0" ng-class="{'selected-gender': signup.gender === 'male'}" ng-click="selectMale()">
                                        <div class="coverSprite gender male"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input id="SignUpButton" type="submit" class="form-control input-lg submit sign-up-button" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="attribution hidden-xs">
            <span class="notranslate">Game: ROBLOX Point</span><br>
            Developer: <span class="notranslate">StarMarine614</span>
        </div>
    </section>

    <!-- What is Roblox -->
    <section class="row full-height-section" id="WhatsRobloxContainer">

        <div class="col-md-12 inner-full-height-section">

            <div class="row" id="InnerWhatsRobloxContainer1">
                <div id="WhatIsRobloxTextBg" class="col-sm-5 col-sm-offset-6 col-xs-8 col-xs-offset-2">
                    <h1 class="text-center">What is ROBLOX?</h1>
                    <p class="lead text-justify">ROBLOX is the Game Powered by Players. Build your own game world and bring it to life, publish and share it, experience what others have created, play with friends. ROBLOX is the leader in user-generated creation and gaming for all ages. What will you build?</p>
                </div>
            </div>

            <div class="row" id="InnerWhatsRobloxContainer2">
                <div id="GameImage1" class="col-sm-4 col-xs-12 game-image"></div>
                <div id="GameImage2" class="hidden-xs col-sm-4 game-image"></div>
                <div id="GameImage3" class="col-sm-4 hidden-xs game-image"></div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <!-- Roblox on your device -->
    <section id="DeviceSection">
        <div class="row" id="RobloxDeviceText">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2>ROBLOX on your device.</h2>
                <p class="lead center-block">Play ROBLOX on your desktop, your tablet, or your phone. Access your account, games, and inventory; connect with your friends; and play games whether you're at home or on the go.</p>
            </div>
        </div>

        <div id="AppStoreContainer" class="row text-center">
            <a href="https://web.archive.org/web/20150131175641/https://itunes.apple.com/us/app/roblox-mobile/id431946152" target="_blank">
                <img class="app-store-logo" src="https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/9819a104fc46fb90d183387ba81065a0.png" title="ROBLOX on App Store">
            </a>
            <a href="https://web.archive.org/web/20150131175641/https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en" target="_blank">
                <img class="app-store-logo" src="https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/75ba3866ee59c113220b369c2432c7f9.png" title="ROBLOX on Google Play">
            </a>
        </div>

        <div class="row" id="DeviceImageContainer">
            <div class="col-md-12">
                <div class="row text-center">
                    <img id="ComputerImgSmall" class="center-block img-responsive hidden-lg ComputerImg" src="https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/5ed7d6f37de88cc74c581d9a97fdcbb2.png">
                    <img class="center-block img-responsive visible-lg-block ComputerImg" src="https://web.archive.org/web/20150131175641im_/http://images.rbxcdn.com/6288b7c9683f37f50efef75a5e10f2ad.png">

                </div>
            </div>
        </div>
    </section>

    <footer class="row">
        <div class="col-xs-12">
            <div id="FooterBigLinks" class="row">
                <div class="col-md-12 text-center" style="font-weight: lighter; font-size; 14px;">
                    <a href="#http://corp.node16.xyz" target="_blank">About Us</a>
                    <a href="#http://corp.node16.xyz/jobs" target="_blank">Jobs</a>
                    <a href="http://blog.node16.xyz/" target="_blank">Blog</a>
                    <a href="../Info/Privacy.aspx" target="_blank">Privacy</a>
                    <a href="#http://corp.roblox.com/parents" target="_blank">Parents</a>
                    <a href="http://wiki.node16.xyz/" target="_blank">Help</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div id="FooterLegalText" class="col-xs-11 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-justify" style="text-align: center; font-size: 14px;">
                    Node16, characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="http://corp.roblox.com/">ROBLOX Corporation</a>, 2023-2024. NODE16 is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, K'Nex, ROBLOX, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="#info/terms-of-service" target="_blank">Terms and Conditions</a>.
                </div>
            </div>
            <div id="FooterLanguage" class="row">
                <div class="col-xs-12 text-center">
                    <a href="/web/20150131175641/http://www.roblox.com/userlanguage/languageredirect?languageCode=en&amp;relativePath=%2F">English</a>
                    <a href="/web/20150131175641/http://www.roblox.com/userlanguage/languageredirect?languageCode=de&amp;relativePath=%2F">Deutsch</a>
                </div>
            </div>
            
        </div>
    </footer>
</div>
 

<img src="/web/20150131175641im_/http://www.roblox.com/timg/rbx">
<script>
    Roblox.Resources.AnimatedSignupFormValidator = {
        //<sl:translate>
        doesntMatch: "Doesn't match",
        requiredField: "Required",
        tooLong: "Too long",
        tooShort: "Too short",
        maxValid: "Too many accounts use this email",
        needsFourLetters: "Needs 4 letters",
        needsTwoNumbers: "Needs 2 numbers",
        noSpaces: "No spaces allowed",
        weakKey: "You suck at making passwords.",
        invalidName: "Can't be your character name",
        alreadyTaken: "Already taken",
        cantBeUsed: "Can't be used",
        invalidBirthday: "Invalid birthday",
        loginFieldsRequired: "Username and Password are required.",
        loginFieldsIncorrect: "Your username or password is incorrect.",
        invalidEmail: "Invalid email"
        //</sl:translate>
    };
</script>
<script src="https://web.archive.org/web/20150131175641js_/https://apis.google.com/js/platform.js" gapi_processed="true"></script>
    
    
    <script type="text/javascript" src="https://web.archive.org/web/20150131175641js_/http://js.rbxcdn.com/7704f6e0c7e62588b176909ccc6c9bc8.js"></script>


    
<script type="text/javascript" src="https://web.archive.org/web/20150131175641js_/http://js.rbxcdn.com/056992985a5375a353985b5556d925a1.js"></script>
    
    
    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/a2ff3787d1fd8d3c2492b5f5c5ec70b6.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/4eb48eec34ca711d5a7b08a4291ac753.js';Roblox.config.paths['Pages.Messages'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/fbb86cf0752d23f389f983419d3085b4.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/838ec9c8067ba6fd6793a8bdbdb48a5c.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://web.archive.org/web/20150131175641/http://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script>

    
    <script>
        Roblox.XsrfToken.setToken('gV3zXowkxKNg');
    </script>

    
    <script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
    

<script type="text/javascript">
$(function(){
    function trackReturns() {
	    function dayDiff(d1, d2) {
		    return Math.floor((d1-d2)/86400000);
	    }
        if (!localStorage) return; 

	    var cookieName = 'RBXReturn';
	    var cookieOptions = {expires:9001};
        var cookie = localStorage.getItem(cookieName) || {};

	    if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
	        localStorage.setItem(cookieName, { ts: new Date().toDateString() });
		    return;
	    }

	    var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
	    if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
		    RobloxEventManager.triggerEvent('rbx_evt_odr', {});
		    cookie.odr = 1;
	    }
	    if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
		    RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
		    cookie.sdr = 1;
	    }
	
	    localStorage.setItem(cookieName, cookie);
    }
    
        GoogleListener.init();
    
   
    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
    
    
    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();
    

});

</script>


    

        <script type="text/javascript">
        $(function () {
            RobloxEventManager.triggerEvent('rbx_evt_newuser', {});
        });

    </script>

    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>

    
    <script type="text/javascript" src="https://web.archive.org/web/20150131175641js_/http://js.rbxcdn.com/84241a93127bec72d4eb6357af8b540a.js"></script>



</body></html>