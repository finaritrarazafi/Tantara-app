<h2 class="title-list"><?= $title ?> </h2>
<br>

<?php echo validation_errors(); ?>
<!-- chemin url -->
<?php echo form_open('users/register'); ?> 

    <div class="form-group">
        <label>Nom : </label>
        <input type='text' class='form-control' name="nom" placeholder='Nom' required autofocus/>    
    </div>
    <div class="form-group">
        <label>Email : </label>
        <input type='email' class='form-control' name="email" placeholder='Email' required autofocus/>    
    </div>
    <div class="form-group">
        <label>Pseudo : </label>
        <input type='text' class='form-control' name="pseudo" placeholder='Pseudo' required autofocus/>    
    </div>
    <div class="form-group">
        <label>Mot de passe : </label>
        <input type='password' class='form-control' name="mdp" placeholder='Mot de passe' required autofocus/>    
    </div>
    <div class="form-group">
        <label>Confirmer mot de passe : </label>
        <input type='password' class='form-control' name="mdp2" placeholder='Confirmer mot de passe' required autofocus/>    
    </div>
        <button type='submit' class="btn btn-primary btn-valid">Valider</button>  
   

<?php echo form_close(); ?>


