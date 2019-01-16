function addRecord() {
    // get values
    var username = $("#username").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var city = $("#city").val();
    var zipcode = $("#zipcode").val();
    var adress = $("#adress").val();
    var email = $("#email").val();
    var password = $("#password").val();

    // Add record
    $.post("ajax/addRecord.php", {
        username: first_name,
        first_name: first_name,
        last_name: last_name,
        city: city,
        zipcode: zipcode,
        adress: adress,
        email: email,
        password: password
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#username").val("");
        $("#first_name").val("");
        $("#last_name").val("");
        $("#city").val("");
        $("#zipcode").val("");
        $("#adress").val("");
        $("#email").val("");
        $("#password").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
            id: id
        },
                function (data, status) {
                    // reload Users by using readRecords();
                    readRecords();
                }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
        id: id
    },
            function (data, status) {
                // PARSE json data
                var user = JSON.parse(data);
                // Assing existing values to the modal popup fields

                $("#update_username").val();
                $("#update_first_name").val();
                $("#update_last_name").val();
                $("#update_city").val();
                $("#update_zipcode").val();
                $("#update_adress").val();
                $("#update_email").val();
                $("#update_password").val();
            }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var username = $("#update_username").val();
    var first_name = $("#update_first_name").val();
    var last_name = $("#update_last_name").val();
    var city = $("#update_city").val();
    var zipcode = $("#update_zipcode").val();
    var adress = $("#update_adress").val();
    var email = $("#update_email").val();
    var password = $("#update_password").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
        id: id,
        username: first_name,
        first_name: first_name,
        last_name: last_name,
        city: city,
        zipcode: zipcode,
        adress: adress,
        email: email,
        password: password
    },
            function (data, status) {
                // hide modal popup
                $("#update_user_modal").modal("hide");
                // reload Users by using readRecords();
                readRecords();
            }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});