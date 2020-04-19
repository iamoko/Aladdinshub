
        <!--Start  Footer -->
        
         <!--End footer -->
    </div>
    <footer class="footer-main"> <?=date('Y')?> &copy; Aladins Hub. </footer> 
        <!-- End Wrapper-->
  
    

       </div>
      <!--End main content -->
    


    <!--Begin core plugin -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/moment') ?>/moment.js"></script>
    <script  src="assets/js/jquery.slimscroll.js "></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/functions.js"></script>
    <!-- End core plugin -->

    
    <!--Begin Page Level Plugin-->
   <script src="assets/plugins/morris-chart/morris.js"></script>
    <script src="assets/plugins/morris-chart/raphael-min.js"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php //echo base_url('assets/pages') ?>/dashboard.js"></script>

    <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/plugins/summernote-master'/summernote.min.js"></script>

    <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/pages/table-data.js"></script>

 
    
    
    <script>
      $('.textarea').wysihtml5(); 
      $(document).ready(function() {
      $('#summernote').summernote();
    });
    </script>

    


    
    <!--End Page Level Plugin-->



    <!-- PopUp screens -->
<div id="profile" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">

      <div class="white-box">
        <div class="post-header">
          <div class="post-author-media">
              <img src="assets/images/profile-picture.png"  alt="">
          </div>
        
        <div class="post-author">
          <h4>Administrator</h4>
        </div>
        </div> <!-- /.post-header-->
        
    </div><!-- /.white-box-->
    <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputEmail3" placeholder="Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Re Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="Retype Password" type="password">
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                     </form>
                    </div>
    </div>
  </div>
</div>


















</body>

</html>

