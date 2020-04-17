<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Aladdins Hub</title>
                                <link rel="stylesheet" type="text/css" href="css/nav.css"> 
                                <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
                                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                                <script type="text/javascript" src="js/jquery.min.js"></script>
                                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                                <style type="text/css">
                                    .login-form{
                                        margin: 0 auto;
                                        padding: 50px;
                                        background-color: #fff
                                    }
                                    .logo, .copy-text{
                                        display: flex;justify-content: center;
                                    }
                                    .gmail{
                                        background-color: red;
                                        border: 1px solid red;
                                    }.container{
                                        background-color: grey
                                    }.row{
                                        margin-top: 30px
                                    }
                                </style>
                            </head>
                            <body style="background-color: grey;overflow: hidden;">
                               

                <div class="row">
                     <div class="login-form col-md-4">
                       <div class="login-inner">
                         <div class="logo">
                             <img src="images/logo.jpg"  alt="logo"/>
                           </div>
                           <h2 class="header-title text-center" style="font-size: 20px;text-transform: uppercase; margin-bottom: 10px">Sign Up</h2>


                             <form>
                               <div class="form-group">
                                   <input type="email" class="form-control"  placeholder="Email" required>
                               </div>
                               
                               <div class="form-group">
                                   <input type="text" class="form-control"  placeholder="Username" required>
                               </div>

                               <div class="form-group">
                                   <input type="password" class="form-control"  placeholder="Password" required>
                               </div>

                       </div>
                           <div class="form-group">
                                   <div class="checkbox primary">
                                  <input  id="checkbox-1" type="checkbox">
                                  <label for="checkbox-1">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                             </div>
                              
                           <div class="form-group">
                               <input type="submit" value="Sign Up" class="btn btn-primary btn-block" >
                           </div>
                           </form>

                           <div class="form-group">
                               <input type="submit" value="Join using Gmail" class="btn btn-primary btn-block gmail" >
                           </div>
                           
                           <div class="form-group text-center">
                            Already have an account?  <a href="">Sign In </a>
                           </div>


                       
                       <div class="copy-text"> 
                         <p class="m-0"><?=date('Y')?> &copy; Aladins Hub</p>
                        </div>
                   </div>

                `	</div>

    
                        </div>

                            </body>
                        </html>

                        <!-- Amoko Ivan -->