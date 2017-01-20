<?php
session_start();
include "db.php"
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bibliotheque.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Lora|Francois+One|Montserrat+Alternates" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>




</head>





<body>

<?php include("header.php")?>

<div class="container-fluid margin_t_50">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Bibliotheque</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="games_list text-center margin_t_50">
                        <ul>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>







        </div>



    <div class="col-md-6 ">

            <div class="dropdown pos" style="position: absolute">
                <button class=" dropdown-toggle btn-5" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Catégorie
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>

            </div>
            <br>


        <input class="margin_t_30" type="search" placeholder="jeux"" title="Search" />
            <div class="box_games">
                <div class="row border_style">
                    <div class="col-md-3 col-sm-3 col-sm-offset-1"><img src="img/ms.jpg" class="img-responsive"></div>
                    <div class="col-md-8 col-sm-8">
                        <h2>Mass Effect Andreomeda</h2>
                        <br>
                        <p class="form_p">Nulla sit amet euismod eros. Donec commodo laoreet ex at blandit. Quisque nisi nulla, blandit id ligula sit amet, auctor consequat velit. Nullam lacus risus, faucibus pharetra nulla at, accumsan rutrum enim. Mauris eros ligula, aliquam nec facilisis nec, pharetra consequat arcu.Aenean ultricies nec sapien non hendrerit. Quisque ullamcorper lectus ac pharetra semper. Sed varius magna erat, eget viverra libero cursus ut. Cras quis massa consectetur, dignissim tellus et, rutrum urna. </p>
                        <div class="row margin_t_20">
                            <div class="col-xs-3 col-xs-offset-1"><span class="badge" style="padding: 15px"><img src="glyphicons_free/glyphicons/png/glyphicons-322-gamepad.png"> : 50h</span></div>
                            <div class="col-xs-4 col-xs-offset-1"><button class="btn btn-lg btn-success">JOUER</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <button type="button" class="amis margin_t_50" data-toggle="modal" data-target="#myModal">
                <h3>Amis en ligne</h3>
            </button>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            ICI liste amis
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php

?>