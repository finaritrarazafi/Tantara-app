<h2 class='title-list'> <?php echo $title; ?> </h2>
<br>

<!--chemin vers la vue-->
<?php echo form_open('users/login'); ?>

    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4">            
            <div class="form-group">
                
                <input type="text" name="pseudo" class="form-group" placeholder="Entrer Pseudo" required autofocus/>
            </div>
            <div class="form-group">
                
                <input type="text" name="mdp" class="form-group" placeholder="Entrer Mot de passe" required autofocus/>
            </div>
            <button type='submit' class="btn btn-primary btn-valid"> Connexion </button>
        </div>
    </div>

<?php echo form_close(); ?>