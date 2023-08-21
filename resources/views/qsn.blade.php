<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Nos services</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />


    <!-- Styles -->

</head>
<x-app-layout>

<body>

<div class="hero2">
    <h1 class="titre_services">White Beauty</h1>
    <h2 class="sous_titre_service">Qui sommes-nous ?</h2>
</div>

<main class="qsn">
    <!-- Contenu de la page "Qui sommes-nous ?" -->
    <h2 class="titre_qsn">Qui sommes-nous ?</h2>

    <div class="qsn_1">
    <div class="qsn_texte">
            <h2>Notre histoire</h2>
            <div class="espaceur_2"></div>
            <p class="qsn_description">Notre approche du Soin Esthétique sur mesure repose sur l'alliance
                parfaite du savoir-faire, de la haute technologie et de la cosmétique active.
                Chez White Beauty, nous avons créé une véritable synergie d'actifs ultra-performants pour
                répondre à toutes vos attentes en matière de beauté et de bien-être.</p>
        </div>
        <div class="qsn_1_image">
            <img src="{{ url('/img/Service1.jpg') }}" alt="Image 1">
        </div>
        
    </div>

    <div class="qsn_2">
        <div class="qsn_texte">
            <p class="qsn_description">
                Grâce à des mesures précises de votre peau et à une analyse approfondie de vos habitudes
                beauté, de votre mode de vie et de votre état d'esprit du moment, nous créerons un parcours
                de Soins et de Gestuelles entièrement adapté à vos besoins.
            </p>
        </div>
        <div class="qsn_2_image">
            <img src="{{ url('/img/Logo3.png') }}" alt="Image 2" class="logo3">
        </div>
    </div>

    <div class="qsn_3">
        <div class="qsn_texte">
            <p class="qsn_description">Chacun de nos soins est conçu avec une attention particulière pour
                vous offrir une expérience exceptionnelle. Nous sommes passionnés par l'amélioration de
                votre bien-être et de votre confiance en vous. Rejoignez-nous pour vivre une expérience de
                soin esthétique sur mesure, où vos besoins et vos objectifs sont notre priorité absolue.
            </p>
        </div>
    </div>

    <div class="qsn_4">
        <div class="qsn_4_gauche">
            <p class="qsn_bandeau_titre">Quelques chiffres</p>
        </div>
        <div class="qsn_4_droite">
            <p class="qsn_bandeau_texte">+ 350 clients satisfaits</p>
            <p class="qsn_bandeau_texte">+ 80 recommandations</p>
            <p class="qsn_bandeau_texte">+ 40 avis google</p>
        </div>
    </div>
</main>
</body>

</html>

</x-app-layout>
@include('layouts.footer')
