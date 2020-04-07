
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Suppliers and Products</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Category</a>
                    </li>
                    <li class="active">
                        Suppliers and Products
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
                                <a href="#add_category">
                                    <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add Category</span> </button>
                                </a>
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="white-box">
                                        <div class="table-responsive">
                                             <table id="example2" class="display table">
                                               <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Category</th>
                                                        <th></th>
                                                        <th>Category Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Category</th>
                                                        <th></th>
                                                        <th>Category Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Books</td>
                                                        <td></td>
                                                        <td>.com</td>
                                                        <td>
                                                            <button class="btn btn-success"> <i class="fa fa-key"></i> </button>
                                                            <button class="btn btn-warning"> <i class="fa fa-eye"></i> </button>
                                                            <button class="btn btn-info"> <i class="fa fa-pencil-square-o"></i> </button>
                                                            <button class="btn btn-danger"> <i class="fa fa-remove"></i> </button>
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

<div id="add_category" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add Staff</h4><br>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <label><b>Name <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Keyword <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <label><b>Description <span style="color: red">*</span></b></label>
                        <textarea class="form-control"></textarea><br>

                        <label><b>Choose Image <span style="color: red">*</span></b></label>
                        <input type="file" class="form-control" name=""><br>
                        <button type="submit" class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Submit</span> </button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
