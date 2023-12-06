<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="center">
        
        <div class="container">
                <div class="iamge">
                    <img src="WDT LA.png" >
                </div>
                <div class="formcontainer">
                    <div class="formheading white">
                        <h1>Login</h1>
                            <p>Authentication</p>
                            <p>A Web Development Task by <u>Devtern</u></p>
                    </div>

                    <div class="formcontent">
                        <div class="formlayout">
                        
                            <form action="action.php" method="post" onsubmit="return validateFormLogin()">
                            <div id="success" class="success">
                                <?php 
                                
                               

                                if(isset($_SESSION['username'])) { 
                                  echo '<script>
                                  Swal.fire({
                                      title: "Welcome User!",
                                      text: "'.$_SESSION['username'].'!",                                     
                                      icon: "success"
                                    });
                                  </script>'; 
                                  session_destroy();
                                }  
                                 
                                 
                                              
                              
                             
                                if(isset($_GET['msg'])){  
                                      echo '<script>
                                      Swal.fire({
                                          title: " User!",
                                          text: "'. $_GET['msg'].'!",
                                          icon: "success"
                                        });
                                      </script>'; 
                                      
                                    }
                              
                                   ?>

                               
                                </div>
                                <p class="error"><span class="errormessage" id="errormessage">
                                
                               
                                </span></p>
                                <div class="formelments">
                                  <label for="email" class="block">Email</label>
                                  <input type="text" id="email" name="email" class="email size">
                                </div>
  
                                <div class="formelements">
                                  <label for="password" class="block">Password</label>
                                  <input type="password" id="password" name="password" class="password size">
                                </div>
  
                                <div class="formelements ">
                                  <div class="checkinfo">
                                      <input type="checkbox"  id="check"  name="name"   />
                                      <label for="checked" class="white">Keep me logged in</label>
                                      <a href="#" class="white">Forgot Password?</a>
                                  </div>
                                </div>
                               
                                <div class="formelements">
                                  <button name="login" id="login" class="loginbutton white">Login</button>
                                </div>

                                <div class="formelments">
                                    <a class="user white" href="index.php">New User Registration</a>
                                  </div>
                              </form>
                              
                        </div>
                    </div>
                </div>
        </div>
    </div>
     <!--javascript-->
     <script src="script.js"></script>
     
</body>
</html>