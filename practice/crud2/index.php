<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Crud Application Dashboard</title>
   
<!--
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script> 
-->

<!--
<link rel="stylesheet" href="css/style.css" type="text/css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script> 
-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
</script>


</head>
<body>
<div class="container border border-warning">

<h2>PHP MySQL CRUD Application</h2>
<h3>What is CRUD</h3>

<p>CRUD is an acronym for <strong>C</strong>reate, <strong>R</strong>ead, <strong>U</strong>pdate, and <strong>D</strong>elete. CRUD operations are basic data manipulation for database. We've already learned how to perform create (i.e. insert), read (i.e. select), update and delete operations in previous chapters. In this tutorial we'll create a simple PHP application to perform all these operations on a MySQL database table at one place.</p>

<h3>Creating the Config File</h3>

<p>After creating the table, we need create a PHP script in order to connect to the MySQL database server. Let's create a file named "config.php" and put the following code inside it.</p>
<p>We'll later include this config file in other pages using the PHP <code>require_once()</code> function.</p>

<h3>Creating the Landing Page</h3>

<p>First we will create a landing page for our <strong>CRUD</strong> application that contains a data grid showing the records from the employees database table. It also has action icons for each record displayed in the grid, that you may choose to view its details, update it, or delete it.</p>


<p>We'll also add a create button on the top of the data grid that can be used for creating new records in the employees table.</p>

<br>

<div class="row">
                <div class="col-md-12">
                    
                <div class="page-header clearfix">
                        <h4 class="pull-left">Employees Details</h4> <br>

                    

                        <div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="btn btn-success pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"> Add New Employee</a>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Adding New Employee</h3>
                </div>
                <div class="modal-body">
                    <p>Pleae fill this form and submit to add employee record to the database.</p>
                   
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">



                    <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>"> 
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php $name_err; ?></span>
                    </div><!-- name -->


                    <div class="form-group <?php echo (!empty($address_err)) ? 'has-error ': ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?> </textarea>
                            <span class="help-block"><?php $address_err; ?></span>
                    </div> <!-- address -->

                    <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                    </div> <!-- salary -->

                    <button type="submit" class="btn btn-primary" value="Add"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                    

                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            

                </form>

                </div>
                
            </div>
        </div>
    </div>
</div>    





                    </div> <!-- page header end-->
                    
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";

                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        
                                        echo "<td>";

                                        
                                        echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";

                                        echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";

                                        echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        
                                        echo "</td>";
                                    
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";

                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div> 

<p>Once employees table is populated with some records the landing page i.e. the CRUD data grid may look something like the picture shown below:</p>


<h3>Creating the Create Page</h3>
<p>In this section we'll build the <strong>C</strong> functionality of our <strong>CRUD</strong> application.</p>

<p>Let's create a file named "<a href="create.php" target="_blank">create.php</a>" and put the following code inside it. It will generate a web form that can be used to insert records in the employees table.</p>

<br>

<h3>Creating the Read Page</h3>
<p>Now it's time to build the <strong>R</strong> functionality of our <strong>CRUD</strong> application.</p>

<p>Let's create a file named ""<a href="read.php" target="_blank">read.php</a>" and put the following code inside it. It will simply retrieve the records from the employees table based the id attribute of the employee.</p>

<br>

<h3>Creating the Update Page</h3>
<p>Similarly, we can build the <strong>Update</strong> functionality of our CRUD application.</p>
<p>Let's create a file named "<a href="update.php" target="_blank">update.php</a>" and put the following code inside it. It will update the existing records in the employees table based the id attribute of the employee.</p>

<br>
<h3>Creating the Delete Page</h3>
<p>Finally, we will build the <strong>D</strong>elete functionality of our CRUD application.</p>
<p>Let's create a file named "<a href="delete.php" target="_blank">delete.php</a>" and put the following code inside it. It will delete the existing records from the employees table based the id attribute of the employee.</p>






<br>
<br>
<br>
</div><!--container part end -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>