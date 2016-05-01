<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>instaRepair</title>
  <link rel="shortcut icon" type="images/x-icon" href="images/favicon.png">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

 <?php 
 require('header.php');
 ?>

  <main class="mdl-layout__content">
    <div class="page-content">
       <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">instaRepair</h1>
        <div class="row center">
          <h5 class="header col s12 black-text">Lets fix your Gadget</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

    
<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
         
          <h3>Customer Login</h3>
          <div class="row">
                      <form class="col s12" method="post" action="index.php">
                        <div class="row">
                        
                          
                          
                          <div class="input-field col s12 m12 l6 offset-l3">
                            <i class="material-icons prefix">note_add</i>
                            <input id="user_name" name="user_name" for="reference" type="text" length="10" class="validate">
                            <label for="reference">Username</label>
                          </div>
                          
                          
                         
                          <div class="input-field col s12 m12 l6 offset-l3">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" name="password" for="password" type="password" class="validate" length="50">
                            <label for="password">Password</label>
                          </div>
                        
                         
                          <div class="input-field col s12 m12 l6 offset-l3 center">
                             <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                <i class="material-icons right">send</i>
                              </button>
                          </div>
                        </div>
                      </form>
                  </div>
        </div>
      </div>

    </div>
  </div>

  

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">instaRepair</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Navigation</h5>
          <ul>
            <li><a class="white-text" href="#!">About Us</a></li>
            <li><a class="white-text" href="#!">Login</a></li>
            <li><a class="white-text" href="#!">Register</a></li>
            <li><a class="white-text" href="#!">Repairs</a></li>
           
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact Us</h5>
          <ul>
            
            <li><a class="white-text" href="#!">dev.lovepreetsingh@gmail.com</a></li>
            
            <li><a class="white-text" href="#!">jaydeepjaina@gmail.com</a></li>
           
            <li><a class="white-text" href="#!">panchariyalokesh@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="white-text" href="http://materializecss.com">Lavi Jady Lokesh</a>
      </div>
    </div>
  </footer>

    </div>
  </main>
</div>
  
  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/material.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
