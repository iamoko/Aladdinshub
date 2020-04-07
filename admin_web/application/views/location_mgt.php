
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Location Management</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Location Management
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
                                <a href="#country">  
                                    <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add New Country</span> </button> 
                                </a>
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="white-box">
                                        <div class="table-responsive">
                                             <table id="example2" class="display table">
                                               <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Country</th>
                                                        <th></th>
                                                        <th>Flag</th>
                                                        <th>Banner</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                        <th>Available Home Search</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Country</th>
                                                        <th></th>
                                                        <th>Flag</th>
                                                        <th>Banner</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                        <th>Available Home Search</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th>Uganda</th>
                                                        <td></td>
                                                        <td>flag</td>
                                                        <td>banner</td>
                                                        <td>state</td>
                                                        <td>Kampala</td>
                                                        <td>
                                                        	<div class="checkbox primary">
	                                                            <input type="checkbox" checked id="checkbox-2">
	                                                            <label for="checkbox-2"></label>
	                                                          </div>
                                                        </td>
                                                        <td>
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


<div id="country" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add New Country</h4><br>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Country Address</b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Search Word <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Flag Image <span style="color: red">*</span></b></label>
                        <input type="file" class="form-control" name=""><br>

                        
                    </div>
                    <div class="col-md-6">
                        <label><b>State <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>City <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Banner <span style="color: red">*</span></b></label>
                        <input type="file" class="form-control" name=""><br>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>

