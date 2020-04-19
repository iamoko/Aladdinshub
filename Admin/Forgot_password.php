<?php include('includes/log_header.php') ?>
<section class="login-section">
       <div class="container">
           <div class="row">
               <div class="login-wrapper">
                   <div class="login-inner">
                       
                       <div class="logo">
                         <img src="assets/images/logo-dark.png"  alt="logo"/>
                       </div>
                      
                      <h2 class="header-title text-center">Reset Password </h2>
                        
                        <div class="alert alert-info alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                          </button>
                          Enter your <b>Email</b> and instructions will be sent to you!
                        </div>
                        
                       <form action="reset_password.php">
                           <div class="form-group">
                               <input type="email" class="form-control"  placeholder="Enter Email" >
                           </div>
                           
                          
                           <div class="form-group">
                               <input type="submit" value="Reset" class="btn btn-primary btn-block" >
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