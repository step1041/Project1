<?php
  // Start the session
  require_once('startsession.php');
  
  require_once('connectvars.php'); // database username and password files
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  
  
  
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>
   
</head>
<body>
<!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <h3>
            Services
        </h3>
        <div style=" text-align:center">
            <img style="width: 288px; height: 100px" src="./img/logo.png">
        </div>
    </div>
    <div data-role="content">
         <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="./login.php" data-transition="fade" data-theme="a">
                        Login
                    </a>
                </li>
                <li>
                    <a href="./logout.php" data-transition="fade" data-theme="a">
                       <?php echo("Log Out: " . $_SESSION['username'] ) ?>
                    </a>
                </li>
            </ul>
        </div>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="./index.php" data-transition="fade" data-theme="a" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="./about.php" data-transition="fade" data-theme="a" data-icon="info">
                        About Me
                    </a>
                </li>
                <li>
                    <a href="./contacts.php" data-transition="fade" data-theme="a" data-icon="edit">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="./projects.php" data-transition="fade" data-theme="a" data-icon="gear">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="./services.php" data-transition="fade" data-theme="a" data-icon="check"
                    class="ui-btn-active ui-state-persist">
                        Services
                    </a>
                </li>
                 <li>
                    <a href="./business.php" data-transition="fade" data-theme="a" data-icon="grid">
                        Business Contacts
                    </a>
                </li>
            </ul>
        </div>
        <h2>
            Custom sites for your needs
        </h2>
        <h5>
            
                                   <p>The site I build is for you, so it should be tailored for your needs, no more template designed web sites. </p>
                                   <p>I do it all! I will work on your project from start to finish to ensure it is built to your needs and specifications.</p>
                                   <p>Working with speed and efficiency your web site will be done as soon as possible.</p>
                                   <p>Readable code is important, so I make sure that the final code is readable for you to make changes and add parts as needed.</p>
                                   <p>Creating websites couldn't be easier! Contact me for a quote today!</p>
        </h5>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h3>
            Copyright 2013
        </h3>
    </div>
</div>
</body>
</html>
