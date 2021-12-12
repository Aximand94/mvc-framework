<div class="container mb-2">
    <?php if(!empty($posts)):?>
        <?php foreach($posts as $post):?>
            <h3><?=$post['title']?></h3>
            <span><i><?=$post['id']?></i><i><?=$post['create_date']?></i></span>
            <p><?=$post['content']?></p>
        <?php endforeach?>
    <?php endif?>
</div>