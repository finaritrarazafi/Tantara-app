<h2 class="title-list"><?= $title ?> </h2><br>
<!-- il faut personnaliser -->


<?php echo form_open('posts/create');?>
<form>
    <div class="form-group">
        <label style="color:#154b61;">Titre :</label><br><br>
        <input type="text" class="form-controm" name="title" placeholder="Titre" required autofocus><br><br>
    </div>
    <div class="form-group">
        <label style="color:#154b61;">Contenu :</label><br><br>
        <textarea class="form-control" name="body" placeholder="Contenu du tantara" required autofocus></textarea>
    </div>
    <a class="btn btn-primary btn-cancel" href="<?php echo base_url();?>posts"> Annuler </a> <button type="submit" class="btn btn-primary btn-lire"> Partager </button>
</form> 