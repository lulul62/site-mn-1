<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Pasithea</title>
</head>
<body>
<script>
    function sendMail() {
      const name = document.getElementById('name').value
      const email = document.getElementById('email').value
      const content = document.getElementById('content').value

      Email.send({
    Host : "smtp.elasticemail.com",
    Username : "leplan.ludwig@yopmail.com",
    Password : "031D6DFBA00A5BA5DF319F5F967804461511",
    To : 'boulinguez.yves@orange.fr',
    From : "leplan.ludwig@yopmail.com",
    Port: 2525,
    Subject : "Nouvelle demande de contact",
    Body : `Email : ${email} Nom : ${name} sujet:${content}`
}).then(
  message => alert(message)
);
  }
</script>

    <header>
        <nav>
            <ul>
                <li id="logo"><a href="#">Pasithea</a></li>
                <li><a href="#presentation">Services</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    
    <div id="image_principale">
        <h1>Pasithea</h1>
        <div class="premier-trait"></div>
        <h3>Naturopathie</h3>
    </div>
   
    </header>

    <section id="presentation">

        <div id="texte-presentation">
            <h2>Bienvenue chez Pasithea</h2>
            <p>Découvrez à mon domicile votre nouvel espace
                pour prendre soin de vous. Je m'occupe de vous à travers mes diverses compétences
                en sophrologie, polarité et massage ayurvédique.Je vous accompagne en naturopathie par des conseils
                et des protocoles personnalisés adaptés aux besoins
                de chacun.</p>
        </div>

        <!-- <div id="services">
            <div class="image_service">
                <h4>Bien être et relaxation</h4>
                <a href="#"><img src="photo3.jpg" alt="image"></a>
            </div>
            <div class="image_service">
                <h4>La santé au naturel</h4>
                <a href="#"><img src="photo4.jpg" alt="image"></a>
            </div>
            <div class="image_service">
                <h4>Un espace reposant</h4>
                <a href="#"><img src="photo_pasithea.jpg" alt="image"></a>
            </div>
            <div class="image_service">
                <h4>Un protocole personnalisé</h4>
                <a href="#"><img src="photo5.png" alt="image"></a>
            </div>
        </div> -->

        <div class="container">
            <div class="carte">
                <div class="image-carte">
                    <img src="photo_pasithea.jpg">
    
                </div>
                <div class="details-carte">
                    <h2>Votre futur espace santé</h2>
                    <p>Découvrez à mon domicile votre nouvel espace pour prendre soin de vous.</p>
                </div>
            </div> 
    
            <div class="carte">
                <div class="image-carte">
                    <img src="photo4.jpg">
    
                </div>
                <div class="details-carte">
                    <h2>Bien être et détente</h2>
                    <p>Je m'occupe de vous à travers mes diverses compétences en sophrologie, polarité et massage ayurvédique.</p>
                </div>
            </div>
    
            <div class="carte">
                <div class="image-carte">
                    <img src="photo5.png">
    
                </div>
                <div class="details-carte">
                    <h2>Votre santé au naturel</h2>
                    <p>Je vous accompagne en naturopathie par des conseils et des protocoles personnalisés adaptés aux besoins de chacun</p>
                </div>
            </div>
    
    
        
        </div>

    </section>

    <footer>

        <h2 id="contact">Me contacter</h2>

       
            <input id="name" type="text" placeholder="nom">
            <input id="email" type="email" placeholder="email">
            <textarea id="content" type="text" placeholder="Votre message ici..."></textarea>
            <button onclick="sendMail()" class="btn">Envoyer</button>



        <div class="premier-trait"></div>

        <div id="copy_and_icons">
            <div id="copyright">
                <span> © Pasithea 2021</span>
             </div>
             <div id="icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a></i> 
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
             </div>
        </div>


    </footer>

    <script src="https://smtpjs.com/v3/smtp.js">

</script>

    
</body>
</html>