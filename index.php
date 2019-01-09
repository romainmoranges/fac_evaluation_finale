<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document de base</title>
</head>

<body>
    <!-- Sprite svg à importer une fois pour gagner du temps -->
    <div class='svgsprite'>
        <?php include './img/sprite_symbol_pictos.svg' ?>
    </div>

    <div class="main-container">

        <header>
            <div class="inner main-menu">
                <div class="top-menu">
                    <div class="logo"></div>
                    <div id="menu">
                        <nav class="main-nav">
                            <ul>
                                <li><a href="#">Actualités</a></li>
                                <li><a href="#">Nous connaître</a></li>
                                <li><a href="#">Nos installations</a></li>
                                <li><a href="#">Economisons</a></li>
                                <li><a href="#">En savoir plus</a></li>
                                <li id="souscrire"><a href="#">Souscrire</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <nav class="main-nav-mobile">
                    <ul>
                        <li><a href="#">Actualités</a></li>
                        <li><a href="#">Nous connaître</a></li>
                        <li><a href="#">Nos installations</a></li>
                        <li><a href="#">Economisons</a></li>
                        <li><a href="#">En savoir plus</a></li>
                        <li id="souscrire"><a href="#">Souscrire</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section>
            <div class="inner">
                <div class="image">
                    <img src="./img/logos/LogoEnergiesCollectives_main.jpg" alt="" srcset="">
                </div>
                <h1>L'énergie est notre affaire<span>Investissons dans la transition énergétique</span></h1>
                <div class="chiffres">
                    <div class="picto">
                        <svg class='svgicon'>
                            <use xlink:href="#picto_coop"></use>
                        </svg>
                        <p>coopérateurs</p>
                    </div>
                    <div class="picto">
                        <svg class='svgicon'>
                            <use xlink:href="#picto_photovoltaique"></use>
                        </svg>
                        <p>installations</p>
                    </div>
                    <div class="picto">
                        <svg class='svgicon'>
                            <use xlink:href="#picto_production_energie"></use>
                        </svg>
                        <p>production annuelle</p>
                    </div>
                    <div class="picto"><svg class='svgicon'>
                            <use xlink:href="#picto_capital"></use>
                        </svg>
                        <p>captial</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="description">
            <div class="inner desktop-flex">
                <h2>Produire et mieux consommer de l'électricité renouvlable et locale c'est possible! </h2>
                <div class='text'><p>Habitants, entreprises et collectivités de Serre-Ponçon agissent ensemble, a travers la coopérative
                    pour:</p>
                    <ul>
                        <li>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quae quis, optio atque</p>
                        </li>
                        <li>
                            <p>Voluptate libero sit voluptas cumque, odio dignissimos reiciendis velit similique</p>
                        </li>
                        <li>
                            <p>Dolorem reiciendis optio atque autem assumenda doloremque porro quis sint ad itaque!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="action">
            <div class="inner desktop-flex">
                <button>Comprendre notre modèle de production<svg class='svgicon'>
                        <use xlink:href="#plus"></use>
                    </svg></button>
            </div>
        </div>

        <div class="question">
            <div class="inner">
                <h2>Pourquoi devenir sociétaire d'Energies collectives?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis laboriosam dolorem, ex vitae quod
                    assumenda praesentium laborum atque quaerat nam odit temporibus eligendi cupiditate quia sequi illo
                    rem eaque dicta.<svg class='svgicon'>
                        <use xlink:href="#plus"></use>
                    </svg></p>
            </div>
        </div>

        <div class="souscrire">
            <div class="inner">
                <button>Souscrire!<svg class='svgicon'>
                        <use xlink:href="#schema_souscrire"></use>
                    </svg></button>
            </div>
        </div>

        <div class="actus">
            <article class='inner'>
                <div class="top-article">
                    <h3>actualités</h3>
                    <h3><svg class='svgicon'>
                            <use xlink:href="#fleche_droite"></use>
                        </svg></h3>
                </div>
                <div class="main-article">
                    <div class="image img-article">
                        <img src="./img/Photos/IMG_20170121_122143.jpg" alt="">
                    </div>
                    <div class="texte-article">
                        <h4>L'avant-première d'Après demain en vidéo</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit commodi ex doloremque
                            quisquam nihil voluptate voluptatibus perferendis iusto nulla delectus tenetur sed, eum rem
                            hic distinctio minus laboriosam dicta vitae?</p>
                        <svg class='svgicon'>
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </article>
        </div>

        <div class="demarche">
            <article class='inner'>
                <div class="top-article">
                    <h3>notre démarche</h3>
                    <h3><svg class='svgicon'>
                            <use xlink:href="#fleche_droite"></use>
                        </svg></h3>
                </div>
                <div class="main-article">
                    <div class="image img-article">
                        <img src="./img/Photos/IMG_20170121_122143.jpg" alt="">
                    </div>
                    <div class="texte-article">
                        <h4>Notre démarche</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit commodi ex doloremque
                            quisquam nihil voluptate voluptatibus perferendis iusto nulla delectus tenetur sed, eum rem
                            hic distinctio minus laboriosam dicta vitae?</p>
                        <svg class='svgicon'>
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </article>
        </div>

        <div class="installations">
            <article class='inner'>
                <div class="top-article">
                    <h3>Nos installations</h3>
                    <h3><svg class='svgicon'>
                            <use xlink:href="#fleche_droite"></use>
                        </svg></h3>
                </div>
                <div class="main-article">
                    <div class="image img-article">
                        <img src="./img/Photos/IMG_20170121_122143.jpg" alt="">
                    </div>
                    <div class="texte-article">
                        <h4>Notre démarche</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit commodi ex doloremque
                            quisquam nihil voluptate voluptatibus perferendis iusto nulla delectus tenetur sed, eum rem
                            hic distinctio minus laboriosam dicta vitae?</p>
                        <svg class='svgicon'>
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </article>
            <div class="action">
                <div class="inner">
                    <button>Voir toutes nos installations<svg class='svgicon'>
                            <use xlink:href="#plus"></use>
                        </svg></button>
                </div>
            </div>
        </div>

        <div class="temoignage">
            <article class='inner'>
                <div class="top-article">
                    <h3>témoignages</h3>
                    <h3><svg class='svgicon'>
                            <use xlink:href="#fleche_droite"></use>
                        </svg></h3>
                </div>
                <div class="main-article">
                    <div class="image img-article">
                        <img src="./img/Photos/IMG_20170121_122143.jpg" alt="">
                    </div>
                    <div class="texte-article">
                        <h4>Mairie de Puy-Sanières</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit commodi ex doloremque
                            quisquam nihil voluptate voluptatibus perferendis iusto nulla delectus tenetur sed, eum rem
                            hic distinctio minus laboriosam dicta vitae?</p>
                        <svg class='svgicon'>
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </article>
        </div>

        <footer>
            <div class="inner">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="#">Nous suivre</a></li>
                        <li><a href="#">Nous contacter<svg class='svgicon'>
                                    <use xlink:href="#mail"></use>
                                </svg></a></li>
                        <li><a href="#">Rechercher</a></li>
                    </ul>
                </nav>
                <div class="newsletter">
                    <p>Abonnez-vous à la newsletter</p>
                    <input type="text" name="" id="">
                    <span class="valider">
                        <svg class='svgicon'>
                            <use xlink:href="#schema_souscrire"></use>
                        </svg>
                    </span>

                </div>
                <div class="partenaires">
                    <h6>Nos partenaires: </h6>
                    <div class="partenaires-logo">
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                        <div class="image"><img src="./img/partenaires/arton82.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="./js/script.js"></script>

</body>

</html>