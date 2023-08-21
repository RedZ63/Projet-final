<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
<x-app-layout>
    <main class="accueil">

        <body>

            <div class="hero">
                <h1 class="titre_accueil">White Beauty</h1>
                <h2 class="sous_titre_accueil">blanchiment dentaire & presso thérapie</h2>
            </div>
            <div class="partie_1">

                <div class="services">
                    <div class="service1">
                        <img src="{{ url('/img/Service1.jpg') }}">
                        <h2>Blanchiment dentaire</h2>
                    </div>
                    <div class="service2">
                        <img src="{{ url('/img/Service2.jpg') }}">
                        <h2>Presso thérapie</h2>
                    </div>
                    <div class="service3">
                        <img src="{{ url('/img/Service3.jpg') }}">
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
            <div class="container2">
                    <div class="overlay2">
                        <div class="items2">
                            <div class="items head">
                                <p>Présso thérapie</p>
                                <hr>
                            </div>
                            <div class="items price2">
                                <p class="old">Découvrez le bien-être total avec la pressothérapie de Seret Beauty.
                                    Notre traitement de pointe vous transporte dans un monde de relaxation profonde et
                                    de revitalisation. En utilisant des techniques de compression pneumatique avancées,
                                    la pressothérapie stimule la circulation sanguine et lymphatique, favorisant ainsi
                                    l'élimination des toxines et la réduction de la rétention d'eau.</p>
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
                                <a href="#" class="bouton">En savoir +</a>
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
                                <p class="old">Découvrez le bien-être total avec la pressothérapie de Seret Beauty.
                                    Notre traitement de pointe vous transporte dans un monde de relaxation profonde et
                                    de revitalisation. En utilisant des techniques de compression pneumatique avancées,
                                    la pressothérapie stimule la circulation sanguine et lymphatique, favorisant ainsi
                                    l'élimination des toxines et la réduction de la rétention d'eau.</p>
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
                                <a href="#" class="bouton">En savoir +</a>
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
                                <p class="old">Découvrez le bien-être total avec la pressothérapie de Seret Beauty.
                                    Notre traitement de pointe vous transporte dans un monde de relaxation profonde et
                                    de revitalisation. En utilisant des techniques de compression pneumatique avancées,
                                    la pressothérapie stimule la circulation sanguine et lymphatique, favorisant ainsi
                                    l'élimination des toxines et la réduction de la rétention d'eau.</p>
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
                                <a href="#" class="bouton">En savoir +</a>
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
                    <a href="#" class="bouton">Découvrir</a>
                </div>
            </div>
            <!-- affichage de 3 articles -->
            <div class="partie_3">

                <h2 class="titre_partie3">Nos derniers articles</h2>

                <div class="espaceur"></div>

                @if ($post->isNotEmpty())
                    <ul class= "articles_accueil">
                        @foreach ($post as $post)
                            <li class= "articles_accueil">
                                <div class= "articles_accueil">
                                    <h3 class="">{{ Str::limit($post->title, 40) }}</h3>
                                    <img src="{{ asset('/storage/' . $post->image) }}" class="img_article">
                                    <p style="color: black;margin-bottom:1rem;">{{ Str::limit($post->content, 75) }}
                                    </p>
                                    <a href="{{ route('posts.show', $post) }}" class="bouton3">en savoir +</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
            <!-- Footer -->
            @include('layouts.footer')
        </body>
    </main>

</html>

</x-app-layout>
