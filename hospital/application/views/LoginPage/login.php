<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Psychia' Care: Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("css/bootstrap.min.css"); ?>"  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	
	<!--Styling the Login Form: CSS-->
	<style type="text/css">
		body {
        background-color: #444;
        background: url("<?php echo base_url("images/login_bg.jpg"); ?>");
        
			}
    .form-signin input[type="text"] {
        margin-bottom: 5px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
									}				
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
										}
    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
							}
    .vertical-offset-100 {
        padding-top: 100px;
						}
    .img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
    margin: auto;
					}
    .panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.75);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			}
	
	</style>
	<!--End of Login Styling-->
	
	

  </head>
  <body id="loginpage">
	<header>
	<h2> Psyche' Care Login </h2> 
		 
	<br> House of Psyche Mental_hospital</br>
	</header>
    <!--The login snippet from Bootsnipp-->
	        <script src="<?php echo base_url("js/TweenLite.min.js"); ?>" ></script>
        <body>
		
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="<?php echo base_url("images/login_logo.png"); ?>"  class="img-responsive" alt="Console Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php
                                    $attributes = array('class' => 'form-signin', 
                                                        'role' => 'form'
                                                        );
                                ?>
                                <?php echo form_open('login/validate_credentials', $attributes); ?>
                               
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" id="username" type="text" name="username">
                                        <input class="form-control" placeholder="Password" id="password" type="password" name="password">
                                        <br></br>
                                        
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »" name="submit">
                                    </fieldset>
                                <?php echo form_close(); ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
            </div>
	
	
	
	<!--END OF LOGIN HTML CODE-->
	
	<footer>
	 <p> by : Yunita Prastiti </p>
	
	</footer>
	<!--END OF PAGE-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("js/jquery.min.js"); ?>" > </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("js/bootstrap.min.js"); ?>" > </script>
	<script src="<?php echo base_url("js/login.js"); ?>" > </script>
  </body>
</html>