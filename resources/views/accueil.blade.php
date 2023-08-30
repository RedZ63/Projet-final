<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Découvrez White Beauty, votre destination pour des sourires éclatants et une peau radieuse. Profitez de nos services de blanchiment dentaire, presso-thérapie et soins hydra-faciaux pour illuminer votre beauté naturelle.">

    <title>Accueil</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <!-- Styles -->

</head>
<div class="loader-container">
    <div class="spinner"></div>
    <img src="../img/loader.gif" class="logo" alt="Logo">
</div>
<x-app-layout>
    <main class="accueil">

        <body>

            <div class="hero" alt="image hero">
                <h1 class="titre_accueil">White Beauty</h1>
                <h2 class="sous_titre_accueil">blanchiment dentaire & presso thérapie</h2>
            </div>
            <div class="partie_1">

                <div class="services">
                    <div class="service1">
                        <img src="{{ url('/img/Service1.jpg') }}" alt="image blanchiment dentaire">
                        <h2>Blanchiment dentaire</h2>
                    </div>
                    <div class="service2">
                        <img src="{{ url('/img/Service2.jpg') }}"alt="image presso thérapie">
                        <h2>Presso thérapie</h2>
                    </div>
                    <div class="service3">
                        <img src="{{ url('/img/Service3.jpg') }}"alt="image soins hydra facial">
                        <h2>Soins hydra-facial</h2>
                    </div>
                </div>
            </div>

            <div class="contenenair_partie_2">
                <div class="partie_2">
                    <div class="texte_partie_2">
                        <h1 class="titre_partie_2">NOS PRESTATIONS<h1>
                                <p classe="texte_2">Notre souhait premier est de vous offrir un service d’une qualité
                                    irréprochable, c’est pourquoi, chez WHITE BEAUTY, <br>nous travaillons avec des
                                    équipements à la pointe de l’innovation.</p>
                                <button>
                                    <a href="{{ url('/nos_services') }}"></a>
                                </button>
                    </div>
                </div>
            </div>
            <div class="image_partie_2">
            <div class="container1">
                    <div class="overlay1">
                        <div class="items1">
                            <div class="items head">
                                <p>Blanchiment Dentaire</p>
                                <hr>
                            </div>
                            <div class="items price1">
                                <p class="old">Notre expertise en blanchiment dentaire vous offre un sourire radieux et confiant. Grâce à des méthodes sûres et efficaces, nous éliminons les taches et les décolorations, révélant la beauté naturelle de vos dents. Notre équipe qualifiée utilise des techniques avancées pour vous offrir un résultat éclatant et durable, vous aidant à afficher un sourire éclatant.</p>
                                <p></p>
                            </div>
                            <div class="items cart1">
                            </div>
                        </div>
                        <div class="items1">
                            <div class="items head1">
                                <p></p>
                            </div>
                            <div class="items cart1">
                                <a href="/nos_services/#BD1" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="overlay2">
                        <div class="items2">
                            <div class="items head">
                                <p>Présso thérapie</p>
                                <hr>
                            </div>
                            <div class="items price2">
                                <p class="old">La presso-thérapie est notre méthode pour vous aider à améliorer la circulation sanguine, réduire la rétention d'eau et favoriser la détente. Grâce à des traitements spécialisés, nous utilisons des pressions pneumatiques pour stimuler votre système lymphatique, éliminant les toxines et revitalisant votre corps. Profitez d'une expérience relaxante et revitalisante avec notre presso-thérapie experte.</p>
                                <p></p>
                            </div>
                            <div class="items cart2">
                            </div>
                        </div>
                        <div class="items2">
                            <div class="items head2">
                                <p></p>
                            </div>
                            <div class="items cart2">
                                <a href="nos_services/#PT1" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container3">
                    <div class="overlay3">
                        <div class="items3">
                            <div class="items head">
                                <p>Soins Hydra-facial</p>
                                <hr>
                            </div>
                            <div class="items price3">
                                <p class="old">Nos soins hydra-faciaux offrent une approche personnalisée pour révéler une peau éclatante et saine. En utilisant des techniques avancées, nous nettoyons en profondeur, exfolions en douceur et hydratons intensément votre peau. Les résultats sont une apparence rajeunie et revitalisée. Détendez-vous pendant que notre équipe professionnelle transforme votre peau avec nos soins hydra-faciaux apaisants.</p>
                                <p></p>
                            </div>
                            <div class="items cart3">
                            </div>
                        </div>
                        <div class="items3">
                            <div class="items head3">
                                <p></p>
                            </div>
                            <div class="items cart3">
                                <a href="nos_services/#HF1" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="espaceur"></div>
            <div class="baniere">
                <h1 class="titre_banniere">Vous venez nous voir régulièrement ?</h1>
                <p class="texte_baniere">Profitez de vos avantages fidélité dès maintenant !</p>
                <div class="btn_center">
                    <a href="qsn/#avantage" class="bouton">Découvrir</a>
                </div>
            </div>
            <!-- affichage de 3 articles -->
            <div class="partie_3">

                <h2 class="titre_partie3">Nos derniers articles</h2>

                <div class="espaceur"></div>

             
                    <ul class= "articles_accueil">
                        @foreach ($posts as $post)
                            <li class= "articles_accueil">
                                <div class= "articles_accueil">
                                    <h3 class="">{{ Str::limit($post->title, 40) }}</h3>
                                    <img src="{{ asset('/storage/' . $post->image) }}" class="img_article">
                                        <p style="color: black;margin-bottom:1rem;width:90%;    ">{{ Str::limit($post->content, 75) }}
                                    </p>
                                    <a href="{{ route('posts.show', $post) }}" class="bouton3">en savoir +</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
            </div>
            <!-- Footer -->
            @include('layouts.footer')
            <script src="../js/scripts.js"></script>
        </body>
    </main>

</html>

</x-app-layout>
