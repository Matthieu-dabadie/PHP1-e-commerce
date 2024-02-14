<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Exercice 10</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Application e-commerce</h1>
        </header>
        <main>
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">

                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/car1.jpg" class="d-block w-100" alt="un clavier">
                                        <div class="carousel-caption d-none d-md-block" style="color: white; font-weight: bold;">
                                            <h5>Super Clavier</h5>
                                            <p>Top Promo ! Stock limité</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/car2.jpg" class="d-block w-100" alt="tapie de souris">
                                        <div class="carousel-caption d-none d-md-block" style="color: black; font-weight: bold;">
                                            <h5>Tapie de souris Gamer !</h5>
                                            <p>Quantité limité !</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/car3.png" class="d-block w-100" alt="imprimante">
                                        <div class="carousel-caption d-none d-md-block" style="color: red; font-weight: bold;">
                                            <h5>Imprimante Pro !</h5>
                                            <p>Top vente de la semaine !</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </article>
            <section>
                <div id="articles" class="container">
                    <div class="row">
                        <div class="col-12 bg-primary text-center liste">
                            <h2>Liste des produits disponibles en magasinw</h2>
                        </div>
                    </div>
                </div>
                <div class="container artLineOne">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <img src="img/img1.jpg" alt="" width="200px">
                            <p>Disque dur 1 To | 80€ | <br><a id="ajouterHDD" class="btn btn-primary" href="modifierPanier.php?hdd=1" role="button">Ajouter</a></p>
                        </div>
                        <div class="col-5">
                            <img src="img/img2.jpg" alt="" width="200px">
                            <p>Mémoire Haute Performance 16 Go | 75€ | <br><a id="ajouterRAM" class="btn btn-primary" href="modifierPanier.php?ram=1" role="button">Ajouter</a></p>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
                <hr>
                <div class="container artLineTwo">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <img src="img/img3.png" alt="" width="200px">
                            <p>Super écran | 120€ | <br><a id="ajouterSCREEN" class="btn btn-primary" href="modifierPanier.php?screen=1" role="button">Ajouter</a></p>
                        </div>

                        <div class="col-5">
                            <img src="img/img4.png" alt="" width="120px">
                            <p>Super souris | 50€ | <br><a id="ajouterCOMPUTERMOUSE" class="btn btn-primary" href="modifierPanier.php?computerMouse=1" role="button">Ajouter</a></p>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

            </section>
            <section>
                <div id="afterValidate" class="container recap">
                    <div class="row">
                        <h3>Récapitulatif commande :</h3>

                        <div class="col-4">
                            <?php
                            echo '<br>';
                            if (isset($_SESSION['hdd'])) {
                                echo $_SESSION['hdd'] . ' Disque dur 1 To' . ' ( ' . $_SESSION['hdd'] * 80 . ' € )<br />';
                            }
                            if (isset($_SESSION['ram'])) {
                                echo $_SESSION['ram'] . ' Mémoire Haute Performance 16 Go' . ' ( ' . $_SESSION['ram'] * 75 . ' € )<br />';
                            }
                            if (isset($_SESSION['screen'])) {
                                echo $_SESSION['screen'] . ' Super écran' . ' ( ' . $_SESSION['screen'] * 120 . ' € )<br />';
                            }
                            if (isset($_SESSION['computerMouse'])) {
                                echo $_SESSION['computerMouse'] . ' Super souris' . ' ( ' . $_SESSION['computerMouse'] * 50 . ' € )<br />';
                            }
                            ?>
                        </div>
                        <div class="col-2">
                            <h4>Vider Panier</h4>
                            <a class="btn btn-warning" href="modifierPanier.php?vider=1" role="button">Vider</a>
                        </div>
                        <div class="col-4">
                            <h3>Total commande :
                                <?php
                                echo ($_SESSION['hdd'] * 80) + ($_SESSION['ram'] * 75) + ($_SESSION['screen'] * 120) + ($_SESSION['computerMouse'] * 50) . '€';
                                ?>
                            </h3>
                            <a id="afterValidate" class="btn btn-primary" href="modifierPanier.php?valider=1" role="button">Valider mon panier</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <?php
                            if (isset($_SESSION['commande'])) {
                                echo $_SESSION['commande'];
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <br><br><br><br>
            <legend><i>Matthieu Dabadie-Courtin - CEFii</i></legend>
        </footer>
    </div>
</body>

</html>