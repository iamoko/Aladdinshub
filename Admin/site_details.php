 <?php include('includes/header.php') ?>  
<!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Site Details</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                    <li class="active">
                        Site Details
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->   
             <!--Start row-->
            <div class="row" style="color: #000">

                <div class="col-md-12">
                        <div class="panel panel-border panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="color: #000"><b>Site Details</b></h3>
                            </div>
                            <div class="panel-body">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name: <span style="color: red">*</span></label>
                                    <input class="form-control" placeholder="Aladdins Hub Inc" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Company Address: <span style="color: red">*</span></label>
                                    <input class="form-control" placeholder="Aladdins Hub Inc 14 Joanne Dr" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Phone: <span style="color: red">*</span></label>
                                    <input data-mask="99-99-9999" class="form-control" placeholder="7745200000" type="number">
                                </div>
                                <div class="form-group">
                                    <label>Email: <span style="color: red">*</span></label>
                                    <input data-mask="99:99:99" class="form-control" placeholder="info@aladdinshub.com" type="email">
                                </div>
                                <div class="form-group">
                                    <label>Webmaster Email: <span style="color: red">*</span></label>
                                    <input data-mask="99-99-9999 99:99:99" class="form-control" placeholder="info@aladdinshub.com" type="email">
                                </div>
                                <div class="form-group">
                                    <label>Set Default Time Zone: <span style="color: red">*</span></label>
                                    <select class="form-control">
                                      <option>Select</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Fax: <span style="color: red">*</span></label>
                                    <input class="form-control"  type="text">
                                </div>
                                <div class="form-group">
                                    <label>Support Email: <span style="color: red">*</span></label>
                                    <input class="form-control" placeholder="info@aladdinshub.com" type="email">
                                </div>
                               <div class="form-group">
                                    <label>Page Row: <span style="color: red">*</span></label>
                                    <input class="form-control" type="number">
                                </div>
                                <div class="form-group">
                                    <label>Auto Approval ON/OFF</label><br>
                                    <input type="radio" name=""> ON   <input type="radio" name=""> OFF
                                </div>
                            </div>
                            <div class="form-group" style="padding-left: 16px;">
                                <button type="submit" class="btn btn-inverse" style="background: #03a9f3">Submit</button>
                            </div>
                            


                            </div>
                        </div>
                    </div>

              




             
            </div>
            <!--End row-->  
     <?php include('includes/footer.php') ?>  