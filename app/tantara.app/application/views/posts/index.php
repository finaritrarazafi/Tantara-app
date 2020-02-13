<h2 class = 'title-list'><?= $title ?></h2>

<div style="background:#aec1f">

    <?php foreach($posts as $post) : ?>
        <h3 class="title"> <strong><?php echo $post['titre']; ?> </strong></h3>
        <div class="post-date">
            <small > Ecrit par : <strong><?php echo $post['nom']; ?></strong></small> <br/>
            <small > Partagé le : <strong><?php echo $post['date_creation']; ?></strong></small>     
        </div> <br/>  
        <div> <?php echo word_limiter($post['contenu'], 50); ?> </div>
        <br> 
        <p><a class="btn btn-primary" style="background:#23409c;color:#ffffff" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> Lire la suite </a></p>
        
        <hr class='hr'/>         
    <?php endforeach; ?>
    <div class='pagination-links'>
        <?php echo $this->pagination->create_links(); ?> 
    </div>
</div>
