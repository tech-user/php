<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-CRUD-3</title>

    <!-- css part -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


</head>
<body>

<div class="container mt-4 border border-warning p-2">
    <h3 class="text-center text text-warning">PHP-CRUD</h3>
<br>

<div class="row">
    <div class="col-md-12">

        <h4 class="text text-info">PHP and MySQL CRUD Operations</h4>

        <div class="float-right">
         <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#add_new_record_modal">+ Add New</button>
        </div>


    </div><!-- col-md-12 end-->

</div><!-- row1end-->

<div class="row">
        <div class="col-md-12">
            <h5 class="text text-secondary">Records:</h5>
            <div class="records_content"></div>
        </div>
</div><!-- row2 end-->

</div><!-- container end-->






<!-- BootStrap Modal Section -->

<!-- modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text text-success" id="myModalLabel">Add New Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    
                </div>


                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" placeholder="First Name" class="form-control" />
                    </div><!-- from group end-->
 
                <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" placeholder="Last Name" class="form-control" />
                </div><!-- from group end-->
 
                <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" placeholder="Email Address" class="form-control" />
                </div><!-- from group end-->

                </div><!-- modal-body end-->


                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="addRecord()">Add Record</button>
                </div><!-- footer end-->

            </div>

        </div>

</div><!-- modal end -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-secondary" id="myModalLabel">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                
            </div>
            <div class="modal-body">
 
                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>
 
                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>
 
                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>

        </div>
    </div>
</div>
<!-- // Modal -->










</body>

<!-- Jquery JS file -->
<script type="text/JavaScript" src="js/jquery.min.js"></script>

<!--BootStrap JS File -->
<script type="text/JavaScript" src="js/bootstrap.min.js"></script>

<!--custom js file-->
<script type="text/JavaScript" src="js/script.js"></script>


</html>