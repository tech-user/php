//Add record

function addRecord(){
    //get vaules

    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();

    //Add record

    $.post("addrecord.php", {
        first_name : first_name,
        last_name: last_name,
        email: email
    }, function (data, status) {
        //close the popup
        $("#add_new_record_modal").modal("hide");

        //read records again
        readRecords();

        //Clear fields from popup
        $("#first_name").val("");
        $("#last_name").val("");
        $("#email").val("");
    });
}

//Read records
function readRecords(){
    $.get("readrecords.php", {}, function (data, status){
        $(".records_content").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});