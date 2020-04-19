 <?php include('includes/header.php') ?>  
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Currency Management</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Currency Management
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->   
             <!--Start row-->
            <div class="row" style="color: #000">

                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="panel panel-border panel-inverse">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body">
                                <!--Start row-->
                                <a href="#new_currency">  
                                    <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add New Currency</span> </button> 
                                </a>

                                <a href="#default_curr">  
                                    <button class="btn btn-info"><span>Select Dafault Currency</span> </button> 
                                </a>

                                
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="white-box">
                                        <div class="table-responsive">
                                             <table id="example2" class="display table">
                                               <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Currency Name</th>
                                                        <th></th>
                                                        <th>Symbol</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Currency Name</th>
                                                        <th></th>
                                                        <th>Symbol</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th>Shillings</th>
                                                        <td></td>
                                                        <td>UGX</td>
                                                        <td>
                                                           <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Approve"> <i class="fa fa-key"></i> </button>
                                                            <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-pencil-square-o"></i> </button>
                                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-remove"></i> </button>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                           </table>
                                       </div>
                                       </div>
                                   </div>
                               </div>
                               <!--End row-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End row-->  


<div id="new_currency" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add New Country</h4><br>
            <form action="" method="POST">
                <div class="row">

                    <div class="col-md-12">
                        <label><b>Currency Name</b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Symbol <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>


<div id="default_curr" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add New Country</h4><br>
            <form action="" method="POST">
                <div class="row">

                    <div class="col-md-12">
                        <label><b>Currency Name</b></label>
                        <select class="form-control">
                            <option>Select an option</option>
                        </select><br>

                        <label><b>Symbol <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>

 <?php include('includes/footer.php') ?>  