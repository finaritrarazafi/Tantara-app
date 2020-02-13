<!-- on affiche ce qui a été mis dans la variable $post(tableau) depuis le controller -->
<h2 class="title-list"> <?php echo $post['titre']; ?> </h2><br>
<small class="post-date"> Partagé le : <?php echo $post['date_creation']; ?></small> <br>
<div class='post-body'>
    <?php echo $post['contenu']; ?>
</div>
<br>
<a href="<?php echo base_url(); ?>posts"> Revenir à la liste </a>