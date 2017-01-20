<?php
include "db.php"
?>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">La Tour de la Terreur</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Accueil</a></li>
                    <li ><a href="histoire.php">Histoire</a></li>
                    <li><a href="photo.php">Avis</a></li>
                    <li><a href="actualites.php">actualités</a></li>
                    <li><a href="contacter.php">nous-contacter</a></li>

                     <?php
if (isset($_SESSION["id_members"])){
                    ?>
                    <li>
                        <a href="log_out.php">Log out</a>
                    </li>
                    <li>
                        <a href="dashboard.php">dashboard</a>
                    </li>
                    <li><a href="https://www.booktickets.disneylandparis.com/tnsa64/live/shop/1/MAINFRCD/pluto/index.php?vld=1&affid=SECUTIX&tduid=32454335543R"><button class="btn btn-success btn-sm">réserver</button></a></li>
                    <?php
                }
                
                   

                    else {
                    ?>
                  <ul class="nav navbar-nav navbar-right">
                    <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#myModal">Sign in</button>
                    <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#myModal1">login</button>
                  </ul>
                </ul>
                  <?php
                }
                  ?>
                  

                </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
            </nav>


 <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body">
                                   
                                          <h2>Inscription</h2>
                                          <form method="post" action="signin.php">
                                            <div class="form-group">
                                              <label for="email">pseudo</label>
                                              <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                                            </div>
                                            <div class="form-group">
                                              <label for="email">Email:</label>
                                              <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <label for="pwd">Password:</label>
                                              <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>        
                                            <button type="submit" class="btn btn-default" value="Sign In">Submit</button>
                                          </form>
                                   
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                        </div>

        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body">
                                   
                                          <h2>Connexion</h2>
                                          <form method="post" action="login.php">
                                            <div class="form-group">
                                              <label for="email">pseudo</label>
                                              <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                                            </div>
                                            <div class="form-group">
                                              <label for="pwd">Password:</label>
                                              <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>        
                                            <button type="submit" class="btn btn-default" value="Sign In">Submit</button>
                                          </form>
                                   
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                        </div>

