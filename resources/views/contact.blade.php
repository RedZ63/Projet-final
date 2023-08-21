<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <!-- Styles -->
    <link href="../assets/css/styles.css" rel="stylesheet" />
</head>

<body>

    <x-app-layout>
    <div class="hero2">
            <h1 class="titre_services">The Secret Beauty</h1>
            <h2 class="sous_titre_service">Contact</h2>
        </div>

        <main class="contact">
            <div class="intro_contact">
                <h2>Restons en contact</h2>
                <p>Dans le cadre d'une amélioration continue de nos services, <br>nous sommes disponible via ce formulaire afin de répondre à toutes vos autres. </p>
            </div>
            
            <div class="form-container">
                <h2>Le formulaire</h2>
                <form action="#" method="post">
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom de famille...">
                    </div>
                    <div>
                        <label for="Prénom">Prénom</label>
                        <input type="text" id="Prénom" name="Prénom" placeholder="Votre prénom...">
                    </div>
                    <div>
                        <label for="tel">Numéro de téléphone</label>
                        <input type="tel" id="tel" name="tel" placeholder="Votre numéro de téléphone...">
                    </div>
                    <div>
                        <label for="mail">Adresse mail</label>
                        <input type="email" id="mail" name="mail" placeholder="Votre adresse mail...">
                    </div>
                    <label class="contact_titre">Votre message concerne :</label>
                    <div class="contact_display">
                        <input type="checkbox" id="blanchiment" name="blanchiment" >
                        <label for="blanchiment">Le blanchiment dentaire</label>
                        
                    </div>
                    <div class="contact_display">
                        <input type="checkbox" id="presso" name="presso">
                        <label for="presso">Presso thérapie</label>
                    </div>
                    <div class="contact_display">
                        <input type="checkbox" id="autre" name="autre">
                        <label for="autre">Autre</label>
                    </div>
                    <div class="contact_display">
                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" placeholder="Écrivez ici..."></textarea>
                    </div>
                    <input type="submit" value="Envoyer" class="bouton2">
                </form>
                <div class="contact-info">
                    <div class="contact-liste">
                        <img src="{{url('/img/icon_téléphone.png')}}" class="contact-icone">
                        <a href="tel:0473788573">04 73 78 85 73</a>
                    </div>
                    <div class="contact-liste">
                        <img src="{{url('/img/icon_adresse.png')}}" class="contact-icone">
                        <p>12 rue de la villette 63400 <br>Chamalières, FRANCE</p>
                    </div>
                    <div class="contact-liste">
                        <img src="{{url('/img/icon_mail.png')}}" class="contact-icone">
                        <a href="mailto:whitebeauty@gmail.com">whitebeauty@gmail.com</a>
                    </div>
                </div>
            </div>
        </main>

    </x-app-layout>
    @include('layouts.footer')

</body>

</html>