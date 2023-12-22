<?php
$servername = "localhost";
$username = "nodexyz_dbadmin";
$password = "redheadnoob8";
$dbname = "nodexyz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

   
    $sql = "SELECT username, joinDate, blurb, about FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $joinDate = $row['joinDate'];
        $blurb = $row['blurb'];
        $about = $row['about'];

  
        $badgeSql = "SELECT badgeName, badgeImage FROM badges WHERE ownedBy = '$username'";
        $badgeResult = $conn->query($badgeSql);

        $userBadges = [];
        $numBadges = $badgeResult->num_rows;

        if ($numBadges > 0) {
            while ($badgeRow = $badgeResult->fetch_assoc()) {
                $userBadges[] = $badgeRow;
            }
        }
    } else {
        header("Location: 404.php");
        exit();
    }
} else {
    header("Location: 404.php");
    exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html><!--<![endif]--><head>
    <title>Node16.xyz</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="NODE16 Revival">
    <meta property="description" content="View <?php echo $username ?>'s profile on NODE16.  NODE16 is the place for free games online, where people like <?php echo $username ?> imagine, build, and share their creations with their friends in a kid-safe environment.  There are millions of free games on NODE16.  3 of them are NODE16's pics on NODE16 for best free games.  <?php echo $username ?> is the creator of ? free games.  Visit NODE16 now to play <?php echo $username ?>'s free games and discover thousands of others!">

    
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">

    
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">

    
    
<link rel="stylesheet" href="/CSS/df0905bc79d485acb8e852a87a6d32a5_m.css">

    
<link rel="stylesheet" href="/CSS/19a01cafd8e30e79f427c446bca839e5_m.css">

    
    
    
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js//jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery-migrate-1.2.1.js'><\/script>")</script>


    
    <script type="text/javascript" src="https://js.rbxcdn.com/35442da4b07e6a0ed6b085424d1a52cb.js"></script>


    
    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">




    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer)\.roblox\.com|robloxlabs\.com)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>

<div id="fb-root"></div>

<div class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">


<div id="header" class="navbar-fixed-top rbx-header" role="navigation" data-domain="roblox.com">
    <div class="container-fluid">
        <div class="rbx-navbar-header">
            <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                
                <div class="rbx-nav-notification hide rbx-font-xs" title="0">
                    
                </div>
                
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="https://www.node16.xyz/"><span class="logo"></span></a>
            </div>
        </div>
        <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
            <li>
                <a href="/games">Games</a>
            </li>
            <li>
                <a href="/catalog">Catalog</a>
            </li>
            <li>
                <a href="/develop">Develop</a>
            </li>
            <li>
                <a class="buy-robux" href="robux.php">ROBUX</a>
            </li>
        </ul><!--rbx-navbar-->
        <div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3" data-behavior="univeral-search" role="search">
            <div class="input-group rbx-input-group">

                <input id="navbar-search-input" class="form-control rbx-input-field" type="text" placeholder="Search" maxlength="120">
                <div class="input-group-btn rbx-input-group-btn">
                    <button id="navbar-search-btn" class="rbx-input-addon-btn" type="submit">
                        <span class="rbx-icon-nav-search"></span>
                    </button>
                </div>
            </div>
            <ul data-toggle="dropdown-menu" class="rbx-dropdown-menu" role="menu">
                <li class="rbx-navbar-search-option selected" data-searchurl="/search/users?keyword=">
                    <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
                </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/games/?Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/groups/search.aspx?val=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Library</span>
                        </li>
            </ul>
        </div><!--rbx-navbar-search-->
        <div class="navbar-right rbx-navbar-right col-xs-4 col-sm-3">
                <ul class="nav navbar-right rbx-navbar-right-nav" data-display-opened="False">
                    <li>
                        <a id="header-login" class="rbx-navbar-login" data-behavior="login" data-toggle="popover" data-bind="popover-login" data-viewport="#header" data-original-title="" title="">Log In</a>
                    </li>
                    <div id="iFrameLogin" class="rbx-popover-content" data-toggle="popover-login" role="menu">
                        <iframe class="rbx-navbar-login-iframe" src="/Login/QuickLogin" scrolling="no" frameborder="0" width="320" data-ruffle-polyfilled=""></iframe>
                    </div>
                    <li>
                        <a class="rbx-navbar-signup" href="/Login/NewAge.php">Sign Up</a>
                    </li>
                    <li class="rbx-navbar-right-search" data-toggle="toggle-search">
                        <a class="rbx-menu-icon">
                            <span class="rbx-icon-nav-search-white"></span>
                        </a>
                    </li>
                </ul>
        </div><!-- navbar right-->
        <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
            <li>
                <a href="games">Games</a>
            </li>
            <li>
                <a href="catalog.php">Catalog</a>
            </li>
            <li>
                <a href="develop.php">Develop</a>
            </li>
            <li>
                <a class="buy-robux" href="robux.php">ROBUX</a>
            </li>
        </ul><!--rbx-navbar-->
    </div>
</div>


<!-- LEFT NAV MENU -->
    <div class="container-main    ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="rbx-alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>
            
        <div class="content  ">

                                        <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                    

    <iframe allowtransparency="true" frameborder="0" height="110" scrolling="no" src="/userads.php?id=1" width="728" data-js-adtype="iframead" data-ruffle-polyfilled=""></iframe>

                </div>
            


<script type="text/javascript">
    var Roblox = Roblox || {};
</script>

<div class="profile-container ng-scope" ng-modules="robloxApp, profile, robloxApp.helpers">

<div class="section profile-header">
    <div class="profile-avatar-image" ng-non-bindable="">
        <span class="avatar-image-link" data-3d-url="/avatar-thumbnail-3d/json?userId=1" data-js-files="http://js.rbxcdn.com/1b5ff54032ecaa6588a0c5f2ad7e1a4c.js"><img alt="<?php echo $username ?>" class="" src="https://web.archive.org/web/20150924194635im_/http://t7.rbxcdn.com/c81e2592378ba0829a02fbcf33b48f58"></span>
    </div>
    <div class="profile-header-content ng-scope" ng-controller="profileHeaderController">


<div data-userid="0" data-profileuserid="1" data-profileusername="<?php echo $username ?>" data-friendscount="0" data-followerscount="140865" data-followingscount="0" data-acceptfriendrequesturl="/api/friends/acceptfriendrequest" data-incomingfriendrequestid="0" data-arefriends="false" data-friendurl="/friends.aspx" data-incomingfriendrequestpending="false" data-maysendfriendinvitation="false" data-friendrequestpending="false" data-sendfriendrequesturl="/api/friends/sendfriendrequest" data-removefriendrequesturl="/api/friends/removefriend" data-mayfollow="false" data-isfollowing="false" data-followurl="/user/follow" data-unfollowurl="/api/user/unfollow" data-canmessage="true" data-messageurl="/messages/compose?recipientId=1" data-canbefollowed="false" data-canpartywithuser="false" data-canchatwithuser="false" data-cantrade="false" data-isblockbuttonvisible="false" data-getfollowscript="" data-ismorebtnvisible="false" data-isvieweeblocked="false" data-mayimpersonate="false" data-impersonateurl="" profile-header-data="" profile-header-layout="profileHeaderLayout" class="hidden ng-isolate-scope"></div>
        <div class="header-title">
            <h1><?php echo $username ?></h1>
                <!--<span class="rbx-icon-obc"></span>-->
        </div>
        <div class="header-userstatus">
            <span ng-non-bindable="">"<?php echo $blurb ?>"</span>
        </div>
        <div class="header-details">
            <ul class="details-info">
                <li>
                    <div>Friends</div>
                    <div class="rbx-lead">
                        <a class="rbx-link ng-binding" href="friends.php?id=<?php echo $userId?>">0</a>
                    </div>
                </li>
                <li>
                    <div>Followers</div>
                    <div class="rbx-lead">
                        <a class="rbx-link ng-binding" href="friends.php?id=<?php echo $userId?>">0</a>
                    </div>
                </li>
                <li>
                    <div>Following</div>
                    <div class="rbx-lead">
                        <a class="rbx-link ng-binding" href="friends.php?id=<?php echo $userID?>">0</a>
                    </div>
                </li>
            </ul>

            <ul class="details-actions">
                     <!-- ngIf: !profileHeaderLayout.areFriends --><!-- ngIf: !profileHeaderLayout.areFriends --><li class="btn-friends ng-scope" ng-if="!profileHeaderLayout.areFriends">
                         <!-- ngIf: profileHeaderLayout.incomingFriendRequestPending -->
                         <!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                        && profileHeaderLayout.maySendFriendInvitation -->
                         <!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                    && !profileHeaderLayout.maySendFriendInvitation
                                    && profileHeaderLayout.friendRequestPending -->
                         <!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                    && !profileHeaderLayout.maySendFriendInvitation
                                    && !profileHeaderLayout.friendRequestPending --><!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                    && !profileHeaderLayout.maySendFriendInvitation
                                    && !profileHeaderLayout.friendRequestPending --><button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                    &amp;&amp; !profileHeaderLayout.maySendFriendInvitation
                                    &amp;&amp; !profileHeaderLayout.friendRequestPending" class="rbx-btn-control-sm disabled ng-scope">
                             Send Friend Request
                         </button><!-- end ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                    && !profileHeaderLayout.maySendFriendInvitation
                                    && !profileHeaderLayout.friendRequestPending --><!-- end ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                    && !profileHeaderLayout.maySendFriendInvitation
                                    && !profileHeaderLayout.friendRequestPending -->

                     </li><!-- end ngIf: !profileHeaderLayout.areFriends --><!-- end ngIf: !profileHeaderLayout.areFriends -->
                    <!-- ngIf: profileHeaderLayout.areFriends -->
                <li class="btn-messages">
                    <button class="rbx-btn-control-sm" ng-disabled="!profileHeaderLayout.canMessage || profileHeaderLayout.userId == 0" ng-click="sendMessage()" disabled="disabled">
                        Message
                    </button>
                </li>
                <!-- ngIf: profileHeaderLayout.mayFollow -->
            </ul>
        </div><!--header-details-->
        <p ng-show="profileHeaderLayout.hasError" class="rbx-font-sm rbx-text-danger header-details-error ng-binding ng-hide"></p>
        <div id="profile-header-more" class="profile-header-more ng-hide" ng-show="profileHeaderLayout.isMoreBtnVisible">
            <a id="popover-link" class="rbx-menu-item" data-toggle="popover" data-bind="profile-header-popover-content" data-original-title="" title="">
                <span class="rbx-icon-more"></span>
            </a>
            <div id="popover-content" class="rbx-popover-content" data-toggle="profile-header-popover-content">
                <ul class="rbx-dropdown-menu" role="menu">
                    <li ng-show="profileHeaderLayout.canBeFollowed" class="ng-hide"><a id="profile-join-game">Join Game</a></li>
                    <li ng-show="profileHeaderLayout.canPartyWithUser" class="ng-hide"><a ng-click="inviteToParty()" id="profile-invite-to-party">Invite To Party</a></li>
                    <li ng-show="profileHeaderLayout.canChatWithUser" class="ng-hide"><a ng-click="startChatting()" id="profile-start-chatting">Start Chatting</a></li>
                    <li ng-show="profileHeaderLayout.canTrade" class="ng-hide"><a ng-click="tradeItems()" id="profile-trade-items">Trade Items</a></li>
                    <li ng-show="profileHeaderLayout.isBlockButtonVisible" class="ng-hide">
                        <a ng-bind="!profileHeaderLayout.isVieweeBlocked ? 'Block User' : 'Unblock User'" ng-click="blockUser()" id="profile-block-user" class="ng-binding">Block User</a>
                    </li>
                </ul>
            </div>
<div>
</div>
<div>
</div>
        </div>
    </div><!--profile-header-content-->
</div><!-- profile-header -->
    <div class="rbx-tabs-horizontal">
        <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
            <li class="rbx-tab active">
                <a class="rbx-tab-heading" href="#about" id="tab-about">
                    <span class="rbx-lead">About</span>
                    <span class="rbx-tab-subtitle"></span>
                </a>
            </li>
            <li class="rbx-tab">
                <a class="rbx-tab-heading" href="#creations" id="tab-creations">
                    <span class="rbx-lead">Creations</span>
                    <span class="rbx-tab-subtitle"></span>
                </a>
            </li>
        </ul>
        <div class="tab-content rbx-tab-content">
            <div class="tab-pane active" id="about">
                
<div class="section profile-about ng-scope" ng-controller="profileUtilitiesController">
    <div class="container-header">
        <h3>ABOUT</h3>
    </div>
    <div class="profile-about-content">
        <p class="ng-isolate-scope" ng-class="{'profile-blurb-more': !layoutContent.showMore}" truncate="" layout-content="layoutContent">
            <span class="profile-about-content-text" ng-non-bindable=""><?php echo $about ?></span>
        </p>
        <span class="rbx-font-bold show-more-link ng-binding ng-hide" ng-show="layoutContent.hasMoreContent" ng-click="toggleContent(layoutContent.showMore)">Read More</span>
    </div>
    <div class="rbx-font-sm profile-about-footer">
            <a href="/web/20150924194635/http://www.roblox.com/abusereport/UserProfile?id=1&amp;redirectUrl=%2Fusers%2F1%2Fprofile" class="abuse-report-link">
                <span class="rbx-text-danger">Report Abuse</span>
            </a>


    </div>
</div>
<div class="container-list profile-avatar">
    <h3>CURRENTLY WEARING</h3>
    <div class="col-sm-6 profile-avatar-left">


<div id="UserAvatar" class="thumbnail-holder" data-reset-enabled-every-page="" data-3d-thumbs-enabled="" data-url="" style="width:300px; height:300px;">
    <span class="thumbnail-span" data-3d-url="/avatar-thumbnail-3d/json?userId=1" data-js-files="http://js.rbxcdn.com/1b5ff54032ecaa6588a0c5f2ad7e1a4c.js"><img alt="<?php echo $username ?>" class="" src="https://web.archive.org/web/20150924194635im_/http://t7.rbxcdn.com/c81e2592378ba0829a02fbcf33b48f58"></span>
        <img class="user-avatar-overlay-image thumbnail-overlay" src="https://web.archive.org/web/20150924194635im_/http://images.rbxcdn.com/57ede1145c87db28cf51e2355909ee49.png" alt="">
    <span class="enable-three-dee btn-control btn-control-small disabled" style="visibility: visible;">3D</span>
</div>


    </div>
    <div class="col-sm-6 profile-avatar-right">
        <div class="profile-avatar-mask">

<div class="profile-accoutrements-container ng-scope" ng-controller="profileAccoutrementsController">
<div data-numberofaccoutrements="1" data-accoutrementsperpage="8" profile-accoutrements-data="" profile-accoutrements-layout="profileAccoutrementsLayout" class="hidden ng-isolate-scope"></div>
    <div id="accoutrements-slider" class="profile-accoutrements-slider ng-isolate-scope" profile-accoutrements-slider="" profile-accoutrements-layout="profileAccoutrementsLayout" style="width: 100%;">
                    <ul class="accoutrement-items-container" style="width: 100%;">
                <li class="accoutrement-item" ng-non-bindable="">
                    <a href="/catalogitem.php?id=8561741">
                        <img title="Guest Shirt" alt="Guest Shirt" class="accoutrement-image" src="https://web.archive.org/web/20150924194635im_/http://t0.rbxcdn.com/0c3e218c9f1288125e14eff6865464f8">
                    </a>
                </li>

</ul></div><!--profile-accoutrement-slider-->
    <div id="accoutrements-page" class="profile-accoutrements-page-container ng-isolate-scope" profile-accoutrements-page="" profile-accoutrements-layout="profileAccoutrementsLayout">
        <span class="profile-accoutrements-page hidden page-active" ng-class="{'page-active': profileAccoutrementsLayout.currentPageNumber == 0}" ng-click="getAccoutrementsPage(0)"></span>
        <span class="profile-accoutrements-page hidden" ng-class="{'page-active': profileAccoutrementsLayout.currentPageNumber == 1}" ng-click="getAccoutrementsPage(1)"></span>
    </div>
</div>
    </div>
</div>
</div>


        <div class="section profile-collections ng-scope" ng-controller="profileCollectionsController">
        <div class="container-header">
            <h3>Collections</h3>
            <div class="collection-btns">
                            </div>
        </div>
        <ul class="hlist collections-list item-list">
                    
                    
                    
                    
                    
                    <li class="list-item asset-item collections-item">
                        <a href="/catalogitem.php?id=293236908" class="collections-link" title="RBX-90 Helm">
                            <img src="https://web.archive.org/web/20150924194635im_/http://t4.rbxcdn.com/6c12750c9c00efe3d0171639732d1780" alt="RBX-90 Helm" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t4.rbxcdn.com/6c12750c9c00efe3d0171639732d1780&quot;,&quot;RetryUrl&quot;:null}" image-retry="" class="ng-isolate-scope">
                            <span class="item-name">RBX-90 Helm</span>
                        </a>
            
                    </li>

            
        </ul>
    </div>





    
<div class="container-list">
    <h3>GROUPS</h3>
<div class="profile-slide-container">
    <div id="groups-switcher" class="rbx-switcher slide-switcher groups ng-isolate-scope" switcher="" itemscount="switcher.groups.itemsCount" currpage="switcher.groups.currPage">
                    <ul class="slide-items-container rbx-switcher-items hlist">
                <li class="rbx-switcher-item profile-slide-item active" ng-class="{'active': switcher.groups.currPage == 0}" data-index="0">
                    <div class="col-sm-6 profile-slide-item-left">
                        <div class="slide-item-emblem-container">
                            <a href="/web/20150924194635/http://www.roblox.com/groups/group.aspx?gid=7">
                    <img class="group-item-image" src="https://web.archive.org/web/20150924194635im_/http://t0.rbxcdn.com/62f65426264fef3291fc1674ee43f468" data-src="https://web.archive.org/web/20150924194635/http://t0.rbxcdn.com/62f65426264fef3291fc1674ee43f468" data-emblem-id="13757480">


                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 profile-slide-item-right groups">
                        <div class="slide-item-info">
                            <h2 class="slide-item-name groups" ng-non-bindable="">Roblox</h2>
                            <p class="slide-item-description groups" ng-non-bindable="">placeholder</p>
                        </div>
                        <div class="slide-item-stats">
                            <ul class="hlist">
                                <li class="list-item">
                                    <p class="slide-item-stat-title rbx-font-bold">Members</p>
                                    <p class="slide-item-members-count rbx-font-bold">0</p>
                                </li>
                                <li class="list-item">
                                    <p class="slide-item-stat-title rbx-font-bold">Rank</p>
                                    <p class="slide-item-my-rank rbx-font-bold groups" ng-non-bindable="">Owner</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="rbx-switcher-item profile-slide-item " ng-class="{'active': switcher.groups.currPage == 1}" data-index="1">
                    
                </li>
                

    </div>
</div>

</div>




    <div class="section ng-scope" ng-controller="profileUtilitiesController">
            <div class="container-header">
                <h3>Node16 Badges (<?php echo $numBadges; ?>)</h3>

                <a ng-click="toggleContent(layoutContent.showMore)" class="rbx-btn-secondary-xs btn-more ng-binding ng-hide" ng-show="layoutContent.hasMoreContent">See More</a>
            </div>

            <ul class="hlist badge-list ng-isolate-scope" truncate="" layout-content="layoutContent" ng-class="{'badge-list-more': !layoutContent.showMore}">
                
                
                
                

     <?php foreach ($userBadges as $badge): ?>
    <li class="list-item badge-item asset-item">
        <a href="#" class="badge-link" title="<?php echo $badge['badgeName']; ?>">
            <img src="<?php echo $badge['badgeImage']; ?>" alt="<?php echo $badge['badgeName']; ?>" width="50" height="50">
            <span class="item-name"><?php echo (strlen($badge['badgeName']) > 15) ? substr($badge['badgeName'], 0, 18) . '...' : $badge['badgeName']; ?></span>
        </a>
    </li>
<?php endforeach; ?>


    
                
                
                
               <!--<li class="list-item badge-item asset-item" ng-non-bindable="">
                    <a href="/web/20150924194635/http://www.roblox.com/Badges.aspx#Badge1" class="badge-link" title="Administrator">
                        <span class="rbx-icon-administrator" title="Administrator"></span>
                        <span class="item-name">Administrator</span>
                    </a>
                </li>-->
                
                
        </ul>

</div>

    <div class="section ng-scope" ng-controller="profileUtilitiesController">
            <div class="container-header">
                <h3>Player Badges (0)</h3>

                <a ng-click="toggleContent(layoutContent.showMore)" class="rbx-btn-secondary-xs btn-more ng-binding ng-hide" ng-show="layoutContent.hasMoreContent">See More</a>
            </div>

            <ul class="hlist badge-list ng-isolate-scope" truncate="" layout-content="layoutContent" ng-class="{'badge-list-more': !layoutContent.showMore}">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <li class="list-item badge-item asset-item">
                    <a href="/gameitem.php?id=74386997" class="badge-link" title="Temple run VIP">
                        <img src="https://web.archive.org/web/20150924194635im_/http://t5.rbxcdn.com/2f2a4b0131ef4ac9ece5e657e4621618" alt="Temple run VIP" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t5.rbxcdn.com/2f2a4b0131ef4ac9ece5e657e4621618&quot;,&quot;RetryUrl&quot;:null}" image-retry="" class="ng-isolate-scope">
                        <span class="item-name" ng-non-bindable="">Temple run VIP</span>
                    </a>
                </li>
        </ul>

</div>


<div class="section profile-statistics">
    <h3>STATISTICS</h3>

    <table class="profile-table">
        <tbody><tr>
            <th>Join Date</th>
            <th>Place Visits</th>
            
        </tr>
        <tr>
            <td class="rbx-lead profile-statistics-knockouts"><?php echo $joinDate ?></td>
            <td class="rbx-lead profile-statistics-place-visits">0</td>
            
        </tr>
    </tbody></table>
</div>

            </div>
            <div class="tab-pane" id="creations">
                
    <div class="profile-game ng-scope" ng-controller="profileGamesController">
        <div class="container-header">
            <h3 ng-non-bindable="">Games</h3>
            <div class="container-buttons">
                <button class="profile-games-selector rbx-btn-secondary-xs" title="Slideshow View" type="button" ng-click="updateDisplay(false)" ng-class="{'rbx-btn-secondary-xs': !isGrid, 'rbx-btn-control-xs': isGrid}">
                    <span class="rbx-icon-slideshow selected" ng-class="{'selected': !isGrid}"></span>
                </button>
                <button class="profile-games-selector rbx-btn-control-xs" title="Grid View" type="button" ng-click="updateDisplay(true)" ng-class="{'rbx-btn-secondary-xs': isGrid, 'rbx-btn-control-xs': !isGrid}">
                    <span class="rbx-icon-grid" ng-class="{'selected': isGrid}"></span>
                </button>
            </div>
        </div>
        <div ng-show="isGrid" class="game-grid ng-hide">
            <ul class="hlist game-list" style="max-height: 472px">
                        <div class="game-container shown" ng-class="{'shown': 0 < visibleItems}">



<li class="list-item game">
    <a href="game.php?id=1" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb ng-isolate-scope" src="https://web.archive.org/web/20150924194635im_/http://t6.rbxcdn.com/5f90e26bcd68fae355b981b3fa94a56c" alt="Crossroads" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t6.rbxcdn.com/5f90e26bcd68fae355b981b3fa94a56c&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Crossroads" ng-non-bindable="">
            Crossroads
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            0 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="1707" data-downvotes="163" data-voting-processed="true">
                    <div class="background "></div>
                    <div class="votes" style="width: 91%;"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/user.php?id=1">ROBLOX</cite>
        </span>
    </a>
</li>

   </div>

            </ul>

            <a ng-click="loadMore()" class="btn rbx-btn-control-xs load-more-button ng-hide" ng-show="12 > 6 * Display">Load More</a>
        </div>
        <div id="games-switcher" class="rbx-switcher slide-switcher games ng-isolate-scope" ng-hide="isGrid" switcher="" itemscount="switcher.games.itemsCount" currpage="switcher.games.currPage">
                        <ul class="slide-items-container rbx-switcher-items hlist">
                  
                  <li class="rbx-switcher-item profile-slide-item active" ng-class="{'active': switcher.games.currPage == 0}" data-index="0">
                        <div class="col-sm-6 profile-slide-item-left">
                            <div class="slide-item-emblem-container">
                                <a href="/web/20150924194635/http://www.roblox.com/Crossroads-place?id=1818">
                            <img class="game-item-image ng-isolate-scope" data-src="https://web.archive.org/web/20150924194635/http://t6.rbxcdn.com/5f90e26bcd68fae355b981b3fa94a56c" data-emblem-id="1818" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t6.rbxcdn.com/5f90e26bcd68fae355b981b3fa94a56c&quot;,&quot;RetryUrl&quot;:null}" image-retry="" src="https://web.archive.org/web/20150924194635im_/http://t6.rbxcdn.com/5f90e26bcd68fae355b981b3fa94a56c">

                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 profile-slide-item-right games">
                            <div class="slide-item-info">
                                <h2 class="slide-item-name games" ng-non-bindable="">Crossroads</h2>
                                <p class="slide-item-description games" ng-non-bindable="">The classic ROBLOX level is back!</p>
                            </div>
                            <div class="slide-item-stats">
                                <ul class="hlist">
                                    <li class="list-item">
                                        <p class="slide-item-stat-title rbx-font-bold">Online</p>
                                        <p class="slide-item-members-count rbx-font-bold">0</p>
                                    </li>
                                    <li class="list-item">
                                        <p class="slide-item-stat-title rbx-font-bold">Visits</p>
                                        <p class="slide-item-my-rank rbx-font-bold games">0</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        
                      
                    
                    <li class="rbx-switcher-item profile-slide-item " ng-class="{'active': switcher.games.currPage == 1}" data-index="1">
                       
    </div>
    </div>






            </div>
        </div>
    </div>
</div>
<div>
    
</div>

            
        </div>
            </div> 




<footer class="container-footer">
    <div class="footer">
        <ul class="row footer-links">
            <li class="col-xs-4 col-sm-2 footer-link">
                <a href="//web.archive.org/web/20150924194635/http://corp.roblox.com/" class="roblox-interstitial" target="_blank">
                    <h2>About Us</h2>
                </a>
            </li>
            <li class="col-xs-4 col-sm-2 footer-link">
                <a href="//web.archive.org/web/20150924194635/http://corp.roblox.com/jobs" class="roblox-interstitial" target="_blank">
                    <h2>Jobs</h2>
                </a>
            </li>
            <li class="col-xs-4 col-sm-2 footer-link">
                <a href="//web.archive.org/web/20150924194635/http://blog.roblox.com/" class="roblox-interstitial" target="_blank">
                    <h2>Blog</h2>
                </a>
            </li>
            <li class="col-xs-4 col-sm-2 footer-link">
                <a href="/web/20150924194635/http://www.roblox.com/Info/Privacy.aspx" target="_blank">
                    <h2>Privacy</h2>
                </a>
            </li>
            <li class="col-xs-4 col-sm-2 footer-link">
                <a href="//web.archive.org/web/20150924194635/http://corp.roblox.com/parents" class="roblox-interstitial" target="_blank">
                    <h2>Parents</h2>
                </a>
            </li>
            <li class="col-xs-4 col-sm-2 footer-link">
                <a href="//web.archive.org/web/20150924194635/http://en.help.roblox.com/" class="roblox-interstitial" target="_blank">
                    <h2>Help</h2>
                </a>
            </li>
        </ul>
        <p class="footer-note">
            ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="//web.archive.org/web/20150924194635/http://corp.roblox.com/" class="rbx-link roblox-interstitial">ROBLOX Corporation</a>, ©2015.
            Patents pending. ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended.
            Use of this site signifies your acceptance of the <a href="/web/20150924194635/http://www.roblox.com/info/terms-of-service" target="_blank" class="rbx-link">Terms and Conditions</a>.
        </p>
        
    </div>
</footer>


</div> 



    <script type="text/javascript">function urchinTracker() {}</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-protocol-handler-launch-enabled="False" data-is-user-logged-in="False" data-os-name="Unknown" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img src="https://web.archive.org/web/20150924194635im_/http://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress">
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
        </div>
    </div>
</div>
<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img src="/web/20150924194635im_/http://www.roblox.com/images/Logo/logo_meatball.svg" width="90" height="90" alt="R">
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img src="https://web.archive.org/web/20150924194635im_/http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24">
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerAreYouInstalled" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">
            <span class="rbx-icon-close simplemodal-close"></span>
        </div>
        <div class="ph-logo-row">
            <img src="/web/20150924194635im_/http://www.roblox.com/images/Logo/logo_meatball.svg" width="90" height="90" alt="R">
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                You're moments away from getting into the game!
            </p>
            <div>
                <button type="button" class="btn rbx-btn-primary-sm" id="ProtocolHandlerInstallButton">
                    Download and Install ROBLOX
                </button>
            </div>
            <div class="rbx-small rbx-text-notes">
                <a href="https://web.archive.org/web/20150924194635/https://en.help.roblox.com/hc/en-us/articles/204473560" class="rbx-link" target="_blank">Click here for help</a>
            </div>

        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="rbx-icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click <img src="https://web.archive.org/web/20150924194635im_/http://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application">  in the dialog box above to join games faster in the future!
    </p>
</div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd"></div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="/web/20150924194635/http://www.roblox.com/Upgrades/BuildersClubMemberships.aspx?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            if (Roblox.VideoPreRoll) {
                Roblox.VideoPreRoll.showVideoPreRoll = false;
                Roblox.VideoPreRoll.isPrerollShownEveryXMinutesEnabled = true;
                Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
                Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation"; 
                    Roblox.VideoPreRoll.videoOptions.categories = "AgeUnknown,GenderUnknown";
                                     Roblox.VideoPreRoll.videoOptions.id = "games";
                Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
                Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
                Roblox.VideoPreRoll.videoLogNote = "NotWindows";
                Roblox.VideoPreRoll.logsEnabled = true;
                Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
                Roblox.VideoPreRoll.adTime = 15;
                    
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 192800;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
                
                                    
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 2370766;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Category = "lego";
                
                $(Roblox.VideoPreRoll.checkEligibility);
            }
        });
    </script>


<div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
    </div>
    <div class="Title">
        Choose Your Character
    </div>
    <div style="min-height: 275px; background-color: white;">
        <div style="clear:both; height:25px;"></div>

        <div style="text-align: center;">
            <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
            <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;"></div>
        </div>
        <div style="clear:both; height:25px;"></div>
        <div class="RevisedFooter">
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="/web/20150924194635/http://www.roblox.com/?returnUrl=%2Fusers%2F1%2Fprofile"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="/web/20150924194635/http://www.roblox.com/newlogin?returnUrl=%2Fusers%2F1%2Fprofile">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location = '/install/unsupported.aspx'; return false;
    }

</script>

<style>
    #win_firefox_install_img .activation {
    }

    #win_firefox_install_img .installation {
        width: 869px;
        height: 331px;
    }

    #mac_firefox_install_img .activation {
    }

    #mac_firefox_install_img .installation {
        width: 250px;
    }

    #win_chrome_install_img .activation {
    }

    #win_chrome_install_img .installation {
    }

    #mac_chrome_install_img .activation {
        width: 250px;
    }

    #mac_chrome_install_img .installation {
    }
</style>
<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
    <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
    <div style="padding-bottom:10px;text-align:center">
        <br><br>
    </div>
</div>



<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute" data-ruffle-polyfilled=""></iframe>

<script type="text/javascript" src="https://web.archive.org/web/20150924194635js_/http://js.rbxcdn.com/453a3526187103f27673584103a84bc7.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = false;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
    </script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="" id="roblox-confirm-btn"><span></span></a>
            <a href="" id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
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
    </script>
</div>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>





    
    <script type="text/javascript" src="https://web.archive.org/web/20150924194635js_/http://js.rbxcdn.com/eb2c38a17735382dfb8c08291b7dd25a.js"></script>


    
<script type="text/javascript" src="https://web.archive.org/web/20150924194635js_/http://js.rbxcdn.com/38872b085d34e0da00fcc66e8c2f5a9d.js"></script>
            <script type="text/javascript" src="https://web.archive.org/web/20150924194635js_/http://js.rbxcdn.com/822491cace41a2d39fd76db6cfd17800.js"></script>


    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/1612c57544c7977e19cd15c824f7ecc3.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/209f2b781ea84e8d0332648ddf547d57.js';Roblox.config.paths['Pages.Messages'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/fbb86cf0752d23f389f983419d3085b4.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/8babd891cf420dfe3999b3824a0154cb.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://web.archive.org/web/20150924194635/http://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script>

    
    <script>
        Roblox.XsrfToken.setToken('vRxNAbC2Z55J');
    </script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
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
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
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
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
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

    
    <script type="text/javascript" src="https://web.archive.org/web/20150924194635js_/http://js.rbxcdn.com/5073617cee40369d46c7fa721dbf6007.js"></script>



<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon="{&quot;rayId&quot;:&quot;833aae062bbab04a&quot;,&quot;r&quot;:1,&quot;version&quot;:&quot;2023.10.0&quot;,&quot;token&quot;:&quot;cafe2feda5a34b64bc6b27abd6ac9c7d&quot;}" crossorigin="anonymous"></script>
</body></html>