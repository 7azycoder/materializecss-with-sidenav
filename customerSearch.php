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
  <?php
   require('header.php');
   ?>


  <div class="row">

      <div class="col s12 m4 l3 grey lighten-2"> 
          <div class="container">
          <div class="section">
          <form method="post" action="index.php">
                    
                          <div class="input-field">
                             <select>
                              <option value="" disabled selected>Select City</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                            
                            
                          </div>

                           <div class="input-field">
                             <select>
                                <option value="" disabled selected>Select Repair Type</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                              </select>
                              
                          </div>
                          
                          
                         
                          <div class="input-field">
                             <select>
                                <option value="" disabled selected>Select Budget</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                              </select>
                              
                             
                          </div>
                        
                         
                          <div class="input-fieldcenter">
                             <button class="btn waves-effect waves-light" type="submit" name="action">Apply
                                <i class="material-icons right">send</i>
                              </button>
                          </div>
                    
                    
          </form>
          </div>
          </div>

      </div>

      <div class="col s12 m8 l9">
          <div class="container">
          <div class="section">
               <h1 class="header center teal-text text-lighten-2">View Results</h1>
         </div>
         </div>
      </div>
  </div>

 
      

  <!--footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">instaRepair</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer-->
  <script type="text/javascript">
     $('.button-collapse').sideNav({
     
    }
  );
  </script>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
