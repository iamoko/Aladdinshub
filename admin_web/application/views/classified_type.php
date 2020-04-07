
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Classified Type</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Classified</a>
                    </li>
                    <li class="active">
                        Classified Type
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
                                <a href="#type">
                                    <button class="btn btn-info"> <i class="fa fa fa-plus"></i> <span>Add Type</span> </button>
                                </a>
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="white-box">
                                        <div class="table-responsive">
                                             <table id="example2" class="display table">
                                               <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Main Category</th>
                                                        <th></th>
                                                        <th>Sub Category</th>
                                                        <th>Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Main Category</th>
                                                        <th></th>
                                                        <th>Sub Category</th>
                                                        <th>Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <th>5</th>
                                                        <td>Electronics Applications</td>
                                                        <td></td>
                                                        <td>TV</td>
                                                        <td>Samsung</td>
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


<div id="type" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
        <div class="content">
            <h4>Add Type</h4><br>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <label><b>Select Main Category <span style="color: red">*</span></b></label>
                        <select class="form-control">
                            <option>Please Select</option>
                        </select> <br>

                        <label><b>Select Sub category <span style="color: red">*</span></b></label>
                        <select class="form-control">
                            <option>Please Select</option>
                        </select> <br>

                        <label><b>Type Name <span style="color: red">*</span></b></label>
                        <input type="text" class="form-control" name=""><br>

                        <button type="submit" class="btn btn-info"><span>Add Type</span> </button> 
                    </div>
                    
                    
                    
                </div>
            </form>
        </div>
    </div>
</div>

