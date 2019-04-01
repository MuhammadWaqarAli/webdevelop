<!DOCTYPE html>
<html class="bg-black">
    <head >
        <style type="text/css">
            .fade{
                opacity: 1.0 !important;
            }
        </style>
        <meta charset="UTF-8">
        <title>Medical Equipment | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      
    </head>
    <body class="bg-black" >
         
        <div class="form-box" id="login-box">
            <?php 
                session_start();
                if( isset($_SESSION['error']) &&  $_SESSION['error'] == true ) { ?>
                   
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>  <?php echo $_SESSION['message'] ;?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   
                    
                    <?php  
                            $_SESSION['error'] = false;
                        ?>
            <?php  }  ?>
            <div class="header">Sign In</div>
           
            <form action="logic.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" required placeholder="*********"/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="login_submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>