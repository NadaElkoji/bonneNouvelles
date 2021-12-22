<div id="contenu">
    <h2>Positivité</h2>
    <p>Bienvenue sur la page de la positivité !</p>
    <div id="contenu">

        <p>Bonjour, vueillez entrer votre message de bonheur ici, chaque mot doit être séparé par une virgule ex: Content,Parfait,etc.</p>
        <div id="notification"><?php echo $notification ?></div>
        <div class="formulaire">
            <form action="index.php?action=contact" method="post">

                <p><textarea rows="3" name="message">Entrez vos mots</textarea></p>
                <p><input type="submit" name="form_contact" value="Envoyer"></p>
            </form>
        </div>
    </div><!-- #contenu -->
</div><!-- #contenu -->