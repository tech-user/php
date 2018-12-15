//Add Record

function addRecord(){
    // get values
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();

    // Add record
    $.post("addRecord.php", {
        first_name: first_name,
        last_name: last_name,
        email: email
    }, function (data, status) {
        // close popup
        $("#add_new_record_modal").modal("hide");

        // read records
            readRecords();
        // clear fields from the popup
            $("#first_name").val("");
            $("#last_name").val("");
            $("#email").val("");
    });
}

//Read Records

function readRecords() {
    $.get("readRecords.php", {}, function (data, status){
        $(".records_content").html(data);
    });
    
}

$(document).ready(function(){
        //Read records on page load
        readRecords();
});


//Delete user function

function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete user");
    if (conf == true) {
        $.post("deleteUser.php", {
                id: id
        }, 
        function (data, status){
            //Reload users
            readRecords();
            }
        );
     
    }
}

//Get User details

function GetUserDetails(id){
        //Add user ID to the hidden field for future usage
    $("#hidden_user_id").val(id);
    $.post("readUserDetails.php", {
        id: id
    }, function (data, status) {
         //PARSE json data
        var user = JSON.parse(data);
        //Assign existing values to the modal popup fields
                $("#update_first_name").val(user.first_name);
                $("#update_last_name").val(user.last_name);
                $("#update_email").val(user.email);
        }
        );
//open modal popup
    $("#update_user_modal").modal("show");
}


function UpdateUserDetails() {
    //get values

    var first_name = $("#update_first_name").val();
    var lastst_name = $("#update_last_name").val();
    var email = $("#update_email").val();

    //get hidden field value

    var id = $("#hidden_user_id").val();

    $.post("updateUserDetails.php", {
            id: id,
            first_name: first_name,
            last_name: last_name,
            email: email
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );


}
