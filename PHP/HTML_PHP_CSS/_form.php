            <!--Formulaire-->
            <div id="Contact" class="box-social-link  hide_desktop">
                <a href='mailto:test@mail.fr'><i class="far fa-envelope fa-3x"></i></a>
            </div>

            <div id="Formulaire_Contact" class="hide_mobile" >
                <div class="tittle_form">Contact</div>
                <div class="texte"> 
                    <form name="form1" method="post" action="mailto:test@mail.fr?subject=Ceci%20est%20le%20sujet">
                        <input name="nom" type="text" id="nom" size="20" placeholder="Votre nom" required><br><br>
                        <input name="prenom" type="text" id="prenom" size="20" placeholder="Votre prenom" required><br><br>
                        <input name="tel" type="tel" id="tel" size="20" placeholder="votre tel"  required pattern="[0-9]{10}" ><br><br>
                        <input name="email" type="email" id="email" size="20" placeholder="Votre email" required><br><br>
                        <textarea name="message" cols="20" rows="8" id="message" placeholder="Votre message" required></textarea><br><br>
                        <input type="submit" name="Submit" value="Envoyer" class="button"><br><br>
                    </form>		
                </div>
            </div>
            <!--Fin Formulaire-->