<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Apple Style SearchBar Overlay</title>


  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/magasin.css">



</head>


<body>
  <div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Cover</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li ><a href="#">Accueil</a></li>
                            <li class="active"><a href="#">Magasin</a></li>
                            <li><a href="#">Bibliotheque</a></li>
                            <li><a href="#">panier</a></li>
                            <li><a href="#">Deconnexion</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

  <a class="mk-search-trigger mk-fullscreen-trigger" href="#" style="display: table-cell; padding: 0 30px 0 20px; vertical-align: middle;" id="search-button-listener">
    <div id="search-button"><i class="fa fa-search"></i></div>
  </a>
  <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
    <div id="mk-fullscreen-search-wrapper">
      <form method="get" id="mk-fullscreen-searchform" action="">
        <input type="text" value="" placeholder="Search..." id="mk-fullscreen-search-input">
        <i class="fa fa-search fullscreen-search-icon"><input value="" type="submit"></i>
      </form>
    </div>
  </div>

</div>
</div>

  <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>

    <script src="js/magasin.js"></script>

</body>
</html>
