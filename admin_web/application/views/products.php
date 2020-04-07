
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Product Details</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li class="active">
                        Products
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
                                <a href="#add_prod">  
                                    <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add Product</span> </button> 
                                </a>
                                <!-- <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add Product</span> </button> -->
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="white-box">
                                        <div class="table-responsive">
                                             <table id="example2" class="display table">
                                               <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Image</th>
                                                        <th></th>
                                                        <th>Product Details</th>
                                                        <th>Approved</th>
                                                        <th>Wholesale</th>
                                                        <th>Bulk</th>
                                                        <th>Daily</th>
                                                        <th>Hot</th>
                                                        <th>Limit Offer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Image</th>
                                                        <th></th>
                                                        <th>Product Details</th>
                                                        <th>Approved</th>
                                                        <th>Wholesale</th>
                                                        <th>Bulk</th>
                                                        <th>Daily</th>
                                                        <th>Hot</th>
                                                        <th>Limit Offer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th>image</th>
                                                        <td></td>
                                                        <td>Glass cards</td>
                                                        <td>
                                                          <div class="checkbox primary">
                                                            <input type="checkbox" checked id="checkbox-2">
                                                            <label for="checkbox-2"></label>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox primary">
                                                            <input type="checkbox"  id="checkbox-2">
                                                            <label for="checkbox-2"></label>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox primary">
                                                            <input type="checkbox"  id="checkbox-2">
                                                            <label for="checkbox-2"></label>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox primary">
                                                            <input type="checkbox"  id="checkbox-2">
                                                            <label for="checkbox-2"></label>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox primary">
                                                            <input type="checkbox"  id="checkbox-2">
                                                            <label for="checkbox-2"></label>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox primary">
                                                            <input type="checkbox"  id="checkbox-2">
                                                            <label for="checkbox-2"></label>
                                                          </div>
                                                        </td>

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

<div id="add_prod" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add New Product</h4><br>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Category</b></label>
                        <select class="form-control">
                          <option>Select Option</option>
                        </select> <br>
                        
                        <label><b>Name <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>


                        
                    </div>
                    <div class="col-md-6">
                        <label><b>Image <span style="color: red">*</span></b></label>
                        <input type="file" class="form-control" name=""><br>

                      
                    </div>

                    <div class="col-md-12">
                        <label><b>Details <span style="color: red">*</span></b></label>
                        <textarea class="form-control"></textarea> <br>
                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>

