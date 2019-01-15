<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SKLEP SPORTOWY</title>

        <!-- Bootstrap -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                    <![endif]-->

        <style>
            .simpleCart_shelfItem {
                padding: 20px;
                transition: all .4s;
                -webkit-transition: all .4s;
            }
            .simpleCart_shelfItem:hover {
                transform: scale(1.05);
                -ms-transform: scale(1.05);
                -webkit-transform: scale(1.05);
                box-shadow: 0 0 20px #888;
                background-color: #fff;
            }

            .simpleCart_items img {
                max-width: 64px;
                max-height: 64px;
            }
            .item-quantity, .item-decrement, .item-increment {
                text-align: center;
            }
            .mix {
                display: none;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">SKLEP SPORTOWY</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php" class="nav-link">Strona główna</a></li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>






                    <p>&nbsp;</p>
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
        </div><!-- /container -->






        <div id="Container" class="container">


            <div class="col text-center mix">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">



                            <div class="header">
                                <h2>Rejestracja</h2>
                            </div>

                            <form method="post" action="register.php">

                                <?php echo display_error(); ?>

                                <form class="dropdown-menu p-4">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Nazwa Użytkownika</label>
                                        <input type="text" name="username" class="form-control" id="exampleDropdownFormUsername" value="<?php echo $username; ?>" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Imię</label>
                                        <input type="text" name="first_name" class="form-control" id="exampleDropdownFormUsername" value="<?php echo $first_name; ?>" placeholder="Imię">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Nazwisko</label>
                                        <input type="text" name="last_name" class="form-control" id="exampleDropdownFormUsername" value="<?php echo $last_name; ?>" placeholder="Nazwisko">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Miasto</label>
                                        <input type="text" name="city" class="form-control" id="exampleDropdownFormText1" value="<?php echo $city; ?>" placeholder="Miasto">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Kod Pocztowy</label>
                                        <input type="text" name="zipcode" class="form-control" id="exampleDropdownFormText2" value="<?php echo $zipcode; ?>" placeholder="Kod Pocztowy">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Adress</label>
                                        <input type="text" name="adress" class="form-control" id="exampleDropdownFormText3" value="<?php echo $adress; ?>" placeholder="Adres">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleDropdownFormPassword1" value="<?php echo $email; ?>" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Hasło</label>
                                        <input type="password" name="password_1" class="form-control" id="exampleDropdownFormPassword1" placeholder="Hasło">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword1">Potwierdź hasło</label>
                                        <input type="password" name="password_2" class="form-control" id="exampleDropdownFormPassword2" placeholder="Potwierdź hasło">
                                    </div>
                                    <button type="submit" name="register_btn" class="btn btn-warning">Zarejestruj się</button>

                                    <p></p>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index2.php">Masz już konto?? Zaloguj się </a>
                                </form>

                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>
                </div>
                <!--PHP login1-->

                <div class="container">
                    <div class="row">
                        <div class="col">



                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <script src="js/simpleCart.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.2"></script>
        <script>
            simpleCart({
                // array representing the format and columns of the cart,
                // see the cart columns documentation
                cartColumns: [{
                        attr: "name",
                        label: "Produkt"
                    },
                    {
                        view: 'image',
                        attr: 'thumb',
                        label: false
                    },
                    {
                        view: "currency",
                        attr: "price",
                        label: "Cena"
                    },
                    {
                        view: "decrement",
                        label: false,
                        text: '<span class="glyphicon glyphicon-minus"></span>'
                    },
                    {
                        attr: "quantity",
                        label: "Ilość"
                    },
                    {
                        view: "increment",
                        label: false,
                        text: '<span class="glyphicon glyphicon-plus"></span>'
                    },
                    {
                        view: "currency",
                        attr: "total",
                        label: "Razem"
                    },
                    {
                        view: "remove",
                        text: '<span class="glyphicon glyphicon-remove"></span>',
                        label: false
                    }
                ],

                // "div" or "table" - builds the cart as a 
                // table or collection of divs
                cartStyle: "table",

                // how simpleCart should checkout, see the 
                // checkout reference for more info 
                checkout: {
                    type: "PayPal",
                    email: "poczta@adrianbienias.pl"
                },

                // set the currency, see the currency 
                // reference for more info
                currency: "PLN",

                // collection of arbitrary data you may want to store 
                // with the cart, such as customer info
                data: {},

                // set the cart langauge 
                // (may be used for checkout)
                language: "english-us",

                // array of item fields that will not be 
                // sent to checkout
                excludeFromCheckout: [],

                // custom function to add shipping cost
                shippingCustom: null,

                // flat rate shipping option
                shippingFlatRate: 15,

                // added shipping based on this value 
                // multiplied by the cart quantity
                shippingQuantityRate: 0,

                // added shipping based on this value 
                // multiplied by the cart subtotal
                shippingTotalRate: 0,

                // tax rate applied to cart subtotal
                taxRate: 0,

                // true if tax should be applied to shipping
                taxShipping: false,

                // event callbacks 
                beforeAdd: null,
                afterAdd: null,
                load: null,
                beforeSave: null,
                afterSave: null,
                update: null,
                ready: null,
                checkoutSuccess: null,
                checkoutFail: null,
                beforeCheckout: null,
                beforeRemove: null
            });

            // basic callback example
            simpleCart.bind("afterAdd", function () {
                $(".koszyk").fadeOut(500).fadeIn(500);
            });

            simpleCart.bind('update', function () {
                if (simpleCart.quantity() == 0) {
                    $(".hideIfEmpty").hide();
                    $(".showIfEmpty").show();
                } else {
                    $(".hideIfEmpty").show();
                    $(".showIfEmpty").hide();
                }
            });

            $(function () {
                $('#Container').mixItUp();
            });
        </script>

    </body>

</html>
