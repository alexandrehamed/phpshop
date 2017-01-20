<?php
include ('db.php')
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
    <link rel="stylesheet" type="text/css" href="css/magasin.css">
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
            <h1>Magasin</h1>
        </div>
    </div>


    <div class="row">


        <div class="col-md-6 col-md-offset-3 ">

                <div class="gallery">

                    <?php
                    $request= $db->prepare("
                  SELECT jeux.id, jeux.nom, jeux.resume, jeux.prix, jeux.image, jeux.pegi, categorie.nom FROM jeux INNER JOIN categorie ON jeux.categorie = categorie.id ");
                    $request->execute(
                        array(
                    ));

                    ?>
                    <?php
                    while ($data = $request->fetch()){

                    ?>
                    <ul>
                        <li>
                            <h2><?php echo $data ["nom"];?></h2>
                            <a href="#" title="" target="_blank">
                                <img src="<?php echo $data ["image"];?>" alt="" />
                                <div class="info"><h1 class="title"><?php echo $data ["resume"];?></h1></div>
                            </a>
                        </li>
                        <?php
                        }
                        $request->closeCursor();?>




                    </ul>
                </div><!-- .gallery -->

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
<script>
    //Direction aware image gallery effect
    //created by http://8bit-code.com
    //tutorial at http://www.8bit-code.com/tutorials/direction-aware-image-gallery-effect

    $(function () {
        $(".gallery li").on("mouseenter mouseleave", function(e){

            /** the width and height of the current div **/
            var w = $(this).width();
            var h = $(this).height();

            /** calculate the x and y to get an angle to the center of the div from that x and y. **/
            /** gets the x value relative to the center of the DIV and "normalize" it **/
            var x = (e.pageX - this.offsetLeft - (w/2)) * ( w > h ? (h/w) : 1 );
            var y = (e.pageY - this.offsetTop  - (h/2)) * ( h > w ? (w/h) : 1 );

            /** the angle and the direction from where the mouse came in/went out clockwise (TRBL=0123);**/
            /** first calculate the angle of the point,
             add 180 deg to get rid of the negative values
             divide by 90 to get the quadrant
             add 3 and do a modulo by 4  to shift the quadrants to a proper clockwise TRBL (top/right/bottom/left) **/
            var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180 ) / 90 ) + 3 )  % 4;



            /** check for direction **/
            switch(direction) {
                case 0:
                    // direction top
                    var slideFrom = {"top":"-100%", "right":"0"};
                    var slideTo = {"top":0};

                    var imgSlide = "0, 60";
                    break;
                case 1: //
                    // direction right
                    var slideFrom = {"top":"0", "right":"-100%"};
                    var slideTo = {"right":0};

                    var imgSlide = "-60, 0";
                    break;
                case 2:
                    // direction bottom
                    var slideFrom = {"top":"100%", "right":"0"};
                    var slideTo = {"top":0};

                    var imgSlide = "0, -60";
                    break;
                case 3:
                    // direction left
                    var slideFrom = {"top":"0", "right":"100%"};
                    var slideTo = {"right":0};

                    var imgSlide = "60, 0";
                    break;
            }



            if( e.type === 'mouseenter' ) {

                var element = $(this);

                element.find(".info").removeClass("transform").css(slideFrom);
                element.find("img").addClass("transform").css("transform","matrix(1, 0, 0, 1,"+imgSlide+")");

                setTimeout(function(){
                    element.find(".info").addClass("transform").css(slideTo);
                },1);


            }else {

                var element = $(this);

                element.find(".info").addClass("transform").css(slideFrom);
                element.find("img").removeClass("transform").css("transform","matrix(1, 0, 0, 1,"+imgSlide+")");

                setTimeout(function(){
                    element.find("img").addClass("transform").css("transform","matrix(1, 0, 0, 1,0,0)");
                },1);

            }

        });

    });
</script>
</body>
</html>
<?php
?>