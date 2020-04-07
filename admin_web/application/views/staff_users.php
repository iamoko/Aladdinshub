
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Users Details</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Users and Customers</a>
                    </li>
                    <li class="active">
                        Staff Users
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
                                <a href="#add_staff">  
                                    <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add Staff</span> </button> 
                                </a>
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="white-box">
                                        <div class="table-responsive">
                                             <table id="example2" class="display table">
                                               <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Name</th>
                                                        <th></th>
                                                        <th>Email</th>
                                                        <th>Designation</th>
                                                        <th>Mobile No</th>
                                                        <th>Join Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Name</th>
                                                        <th></th>
                                                        <th>Email</th>
                                                        <th>Designation</th>
                                                        <th>Mobile No</th>
                                                        <th>Join Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Amoko</td>
                                                        <td></td>
                                                        <td>amokoivan@gmail.com</td>
                                                        <td>Buikwe</td>
                                                        <td>87465465</td>
                                                        <td>2020-03-02</td>
                                                        <td>
                                                            <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Approve"> <i class="fa fa-key"></i> </button>
                                                            <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="View"> <i class="fa fa-eye"></i> </button>
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


<div id="add_staff" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add Staff</h4><br>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Email Address</b></label>
                        <input type="email" class="form-control" name=""><br>

                        <label><b>Name <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Mobile No <span style="color: red">*</span></b></label>
                        <input type="number" class="form-control" name=""><br>

                        <label><b>State <span style="color: red">*</span></b></label>
                        <select class="form-control">
                            <option>Please Select</option>
                        </select> <br>
                    </div>
                    <div class="col-md-6">
                        <label><b>Password <span style="color: red">*</span></b></label>
                        <input type="password" class="form-control" name=""><br>

                        <label><b>Designation <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Country <span style="color: red">*</span></b></label>
                        <select class="form-control">
                            <option>Please Select</option>
                        </select> <br>

                        <label><b>City <span style="color: red">*</span></b></label>
                        <select class="form-control">
                            <option>Please Select</option>
                        </select> <br>
                    </div>

                    <div class="col-md-12">
                        <label><b>Address <span style="color: red">*</span></b></label>
                        <textarea class="form-control"></textarea> <br>
                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
