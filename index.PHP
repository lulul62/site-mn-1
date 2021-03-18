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
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Tarifs</a></li>
                <li><a href="#section1">description</a></li>
                <li><a href="#presentation">Présentation</a></li>
            </ul>
        </nav>
    
        <div id="image_principale">
            <h1>Pasithea</h1>
            <h3>Relaxation</h3>
            <div class="premier-trait"></div>
            <h4>Bien-être et gestion du stress</h4>
        </div>
   
    </header>

    <section id="presentation">

            <div id="texte-presentation">
                <h2>Bienvenue chez Pasithea</h2>
                <p>Découvrez à mon domicile votre nouvel espace
                    pour prendre soin de vous. 
                    Diplômée en praticien relaxation, je m'occupe de vous à travers mes diverses
                    compétences adaptées à votre bien-être.
                    N'hesitez pas à me contacter pour plus de renseignements.
                </p>
            </div>

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
                    <p>Je m'occupe de vous à travers mes diverses compétences
                         adaptées à votre bien-être</p>
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

    
    
    <section id="section1">

        <div class="description">
            <h5>LE MASSAGE AYURVEDIQUE</h5>
            <p>il  est réputé pour ses vertus relaxantes, tant sur le plan physique que mental.
                Modelage non-thérapeutique, il permet également d’éliminer les toxines du corps. <br><br>
                Le massage ayurvédique permet de vous relaxer profondément , en  permettant de relâcher les tensions nerveuses et musculaires qui entravent la libre circulation de l’énergie dans son corps.
                D’autres bénéfices du massage ayurvédique sont fréquemment constatés, tels qu’un apaisement des troubles du sommeil et une stimulation du système de défense immunitaire. <br><br>
                En débloquant les « noeuds » du corps, le massage ayurvédique agit également sur la circulation sanguine et la circulation lymphatique.
                Comment se passe le massage?
                 Vous serez en sous-vêtements sous une serviette et le corps sera massé sur la face interne et externe des orteils jusqu'a la racine des cheveux.</p>

        </div>

        <div class="image"></div>

    </section>
    
    
    
    <section class="section2">
        
        <div class="image"></div>
        
        <div class="description">
            <h5>LE MASSAGE PODALE (PIEDS)</h5>
            <p>Apporte une sensation de bien-être et de relaxation,
                ré-équilibre les fonctions vitales,
                stimule la circulation sanguine ainsi que le drainage lymphatique,
                détend les muscles,
                stimule les systèmes nerveux qui sont dans les pieds,
                permet d'avoir une meilleure qualité de sommeil.
                Pour ce massage, vous serez massé des pieds jusqu'au genoux.</p>

        </div>

    </section>
    
    
    
    <section class="section3">

        <div class="description">
            <h5>LE MASSAGE RELAXANT DU VISAGE</h5>
            <p>Le massage facial constitue un moment de détente, il permet de rétablir la circulation sanguine de votre visage afin de lui redonner de l'éclat.
                L'idéal pour ce massage est de venir non maquillée.<br><br>
                Et si vous souhaitez, vous pouvez associer au massage du visage, le massage du cuir chevelu.</p>

        </div>

        <div class="image"></div>

    </section>
    
    
    
    <section class="section4">
        
        <div class="image"></div>
        
        <div class="description">
            
            <h5>LE MASSAGE DU DOS</h5>
            <p>Le massage du dos vise principalement la détente et la relaxation. Il permet également d'évacuer les toxines et de stimuler la circulation sanguine, lymphatique et énergétique.</p>

        </div>

        

    </section>
    
    
    <section class="section5">

        <div class="description">
            <h5>LA POLARITE</h5>
            <p>La polarité vise à harmoniser l’énergie vitale dans l’organisme pour préserver ou améliorer la santé. En renforçant l’énergie du corps et le lien corps-esprit, cette thérapie prétend tirer profit des forces naturelles d’autoguérison présentes dans tout être humain. <br><br>De prime abord, elle peut donner l’impression d’un massage très délicat.
                Son action vise plutôt à rééquilibrer ou à remettre en action l’énergie de la personne. <br><br>En fonction des circuits énergétiques qu’il désire réharmoniser, le praticien place simplement ses mains sur des endroits précis du corps ou y exerce de légères pressions.
                La polarité du corps respecte les principes naturels de l'électromagnétisme.<br><br>
                La polarité s'adresse à tous.
                <br><br>Toutefois non recommandé en cas de fièvre, thrombose, phlébite, ulcère et zones variqueuses importantes.
                Un petit questionnaire sera effectué lors de votre première séance.</p>

        </div>

        <div class="image"></div>

    </section>

    
    
    
    <!-- <section id="tarifs">

        <h4>Les tarifs</h4>

        <div class="boite">
            <div class="devant">

            </div>
            <div class="arriere">
                
            </div>
        </div>


    </section> -->

    <section id="tarifs-mobile">
        
        <h4>Les tarifs</h4>
        <p>Massage ayurvédique: 80€ l'heure et demi.<br><br>
            Polarité: 60€ pour 1h.<br><br>
            Massage podale: 40€ les 45 minutes.<br><br>
            Massage du dos: 30€ les 30 minutes.<br><br>
            Massage visage et cuir chevelu: 30€ les 30 minutes.
            </p>

    </section>

    
    
    <footer>

        <h2 id="contact">Me contacter</h2>

       
            <input id="name" type="text" placeholder="nom">
            <input id="email" type="email" placeholder="email">
            <textarea id="content" type="text" placeholder="Votre message ici..."></textarea>
            <button onclick="sendMail()" class="btn">Envoyer</button>



        <div class="premier-trait"></div>



        <div class="footer">

            <div class="contenu_footer">
                    <div class="mes_services">
                        <h5>Mes services</h5>
                        <ul>
                            <li>Massage ayurvédique</li>
                            <li>Massage podale</li>
                            <li>Massage visage</li>
                            <li>Massage du dos</li>
                            <li>Polarité</li>
                        </ul>
                    </div>

                
                    <div class="horaire">
                        <h5>Mes horaires</h5>
                        <ul>
                            <li>❌ Lundi</li>
                            <li>✅ mardi 10h-18h</li>
                            <li>✅ mercredi 10h-18h</li>
                            <li>✅ jeudi 10h-18h</li>
                            <li>✅ vendredi 10h-18h</li>
                            <li>✅ samedi 10h-18h</li>
                            <li>❌ dimanche</li>
                        </ul>
                    </div>

                    <div class="reseaux_sociaux">
                        <h5>Mes réseaux</h5>
                        <ul>
                            <li><a href="#"><i class="far fa-envelope"></i> Email</a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </footer>

<script src="https://smtpjs.com/v3/smtp.js">

</script>

    
</body>
</html>