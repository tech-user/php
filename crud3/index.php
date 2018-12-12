<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud in PHP</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="js/script.js" type="text/javascript"></script>

</head>
<body>

<div class="container border border-warning mt-3 pt-2">
<h3 class="text text-danger text-center">PHP - CRUD - 3</h3>
<hr>
<br>
<h4 class="text text-info">Tutorial Features:</h4>

<ol>
    <li>Insert records into MySQL Database</li>
    <li>Read the records from Database and list</li>
    <li>Update the record</li>
    <li>Delete the record.</li>
</ol>

<br>

<h4 class="text text-info">Technologies Used:</h4>

<ol>
    <li>HTML</li>
    <li>PHP with MySQL</li>
    <li>jquery</li>
    <li>BootStrap 4.1</li>
    <li>CSS</li>
    <li>JSON</li>
</ol>


<p>Let’s start of creating our demo web application to learn <code>CRUD</code> operations, first thing we are going see is to create a database and tables required. ( if you have your database ready in mysql go ahead and create tables using following sql code) I am assuming that you have database created and ready to use.</p>

<h5 class="example">Create Database with Table 'users'</h5>

<pre>CREATE TABLE  `test`.`users` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`first_name` VARCHAR( 40 ) NOT NULL ,
`last_name` VARCHAR( 40 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL
) ENGINE = InnoDB ;</pre>

<br>

<div class="row">
<div class="col-md-12">
<h4 class="text text-info">PHP and MySQL CRUD Operations</h4>
<div class="float-right">
<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h5>Records:</h5>
<div class="records_content"></div>
</div>
</div>


<br>

<!-- Bootstrap Modal to Add new record-->

<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div><!-- model header-->

            <div class="modal-body">

                <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" placeholder="First Name" class="form-control">
                </div><!-- first_name form group end-->

                <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" placeholder="Last Name" class="form-control">
                </div><!-- last_name form group end-->

                <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" placeholder="Email Address" class="form-control" />
                </div><!-- email form group end-->


            </div><!-- modal body end-->


            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>

            </div><!--modal footer end-->


        </div><!-- modal-content end-->

    </div><!-- modal diablog end -->
</div><!-- modal fade end-->









</div><!--container div end-->

</body>

</html>
