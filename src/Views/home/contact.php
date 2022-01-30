<section>

    <div id="formulaire">
        <div class="container">
            <div class="row">
                <div class="nir">
                    <div class="titre_contact">
                        <div class="titreLeçon">
                            <h2>Contactez nous...</h2>
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <div class="text-center">
                    <span class="d-block mt-3">Pour toute demande d'information, vous pouvez également remplir le formulaire ci-dessous. </span>
                </div>

                <form id="FormContact" method="post" enctype="multipart/form-data">
                    <div class="row row contact">
                        <div class="col-md-6">

                            <div class="input-group input-group-contact">
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required="">

                            </div>

                            <div class="input-group input-group-contact">
                                <input type="text" name="prenom" class="form-control" id="nom" placeholder="Prénom" required="">
                            </div>

                            <div class="input-group input-group-contact">
                                <input type="text" name="societe" class="form-control" id="tel" placeholder="Téléphone" required="">
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="input-group input-group-contact">
                                <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse" required="">
                            </div>

                            <div class="input-group input-group-contact">
                                <input type="text" name="codePostal" class="form-control" id="codePostal" placeholder="Code Postal" required="">
                            </div>

                            <div class="input-group input-group-contact">
                                <input type="text" name="ville" class="form-control" id="ville" placeholder="Ville" required="">
                            </div>

                            <div class="input-group input-group-contact">
                                <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail" required="">
                            </div>

                        </div>
                        <p>&nbsp;</p>
                        <textarea id="message" name="message" placeholder="Votre message" rows="4" cols="137"></textarea>

                        <button type="submit" id="envoi" class="btn btn-primary" alt="envoyer" title="envoyer">ENVOYER</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>