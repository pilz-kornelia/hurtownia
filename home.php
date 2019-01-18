
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SKLEP SPORTOWY</title>

        <!-- Bootstrap -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                    <![endif]-->

    </head>

    <body>

        <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Demo: PHP and MySQL CRUD Operations using Jquery</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Records:</h3>

                    <div class="records_content"></div>
                </div>
            </div>
        </div>
        <!-- /Content Section -->


        <!-- Bootstrap Modals -->
        <!-- Modal - Add New Record/User -->
        <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">usr</label>
                            <input type="text" id="username" placeholder="First Name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" placeholder="First Name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" placeholder="First Name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" placeholder="First Name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">zip</label>
                            <input type="text" id="zipcode" placeholder="First Name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="adress">adrss</label>
                            <input type="text" id="adress" placeholder="Last Name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" id="password" placeholder="First Name" class="form-control"/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Modal -->

        <!-- Modal - Update User details -->
        <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Update</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="update_username">First Name</label>
                            <input type="text" id="update_username" placeholder="usr " class="form-control"/>
                        </div>update_first_name
                        <div class="form-group">
                            <label for="update_first_name">First Name</label>
                            <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="update_last_name">Last Name</label>
                            <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="update_city">First Name</label>
                            <input type="text" id="update_city" placeholder="city" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="update_zipcode">First Name</label>
                            <input type="text" id="update_zipcode" placeholder="zip" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="update_adress">First Name</label>
                            <input type="text" id="update_adress" placeholder="adrss" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="update_email">Email Address</label>
                            <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="update_password">First Name</label>
                            <input type="text" id="update_password" placeholder="paswrd" class="form-control"/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                        <input type="hidden" id="hidden_user_id">
                    </div>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>

</html>

