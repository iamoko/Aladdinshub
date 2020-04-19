<?php include('includes/log_header.php') ?>
<section class="login-section">
       <div class="container">
           <div class="row">
               <div class="login-wrapper">
                   <div class="login-inner">
                       
                       <div class="logo">
                         <img src="assets/images/logo-dark.png"  alt="logo"/>
                       </div>
                   		
                   		<h2 class="header-title text-center">Sign Up</h2>
                        
                       <form>
                           <div class="form-group">
                               <input type="text" class="form-control"  placeholder="Email" >
                           </div>
                           
                           <div class="form-group">
                               <input type="text" class="form-control"  placeholder="Username" >
                           </div>

                           <div class="form-group">
                               <input type="text" class="form-control"  placeholder="Password" >
                           </div>

						<div class="form-group">
                           <div class="pull-left">
                               <div class="checkbox primary">
                              <input  id="checkbox-1" type="checkbox">
                              <label for="checkbox-1">I accept <a href="#">Terms and Conditions</a></label>
                            </div>
                           </div>
                         </div>
                          
                           <div class="form-group">
                               <input type="submit" value="Sign Up" class="btn btn-primary btn-block" >
                           </div>
                           
                           <div class="form-group text-center">
                            Already have an account?  <a href="login.php">Sign In </a>
                           </div>
                           
                       </form>
                       
                        <div class="copy-text"> 
                         <p class="m-0"><?=date('Y')?> &copy; Aladins Hub</p>
                        </div>
                    
                   </div>
               </div>
               
           </div>
       </div>
  </section>

  <?php include('includes/log_footer.php') ?>