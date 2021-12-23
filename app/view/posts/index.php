<?php if(!empty($posts)):?>
    <!-- post -->
    <?php foreach($posts as $post):?>
        <div class="card mb-3 post">
            <img src="../../../public/img/blog-img.jpg" class="card-img-top" alt="title img">
            <div class="card-body">
                <h5 class="card-title"><?=$post['title']?>></h5>
                <p class="card-text"><?=$post['content']?>></p>
                <p class="card-text"><small class="text-muted">Create: <?=$post['create_date']?></small></p>
            </div>
        </div>
    <?php endforeach;?>
    <!-- pagination -->
    <?php if($pageno->totalPages > 1):?>
        <?=$pageno;?>
    <?php endif?>
<?php endif;?>