<div class="container mb-2">
    <div class="col-9">
    <div>
        <button class="btn btn-primary" id="send">Send</button>
    </div>
    <?php new \app\lib\Menu()?>
    <div class="container">
        <?php if(!empty($posts)):?>
            <?php foreach($posts as $post):?>
                <h3><?=$post['title']?></h3>
                <span>ID: <i><?=$post['id']?> </i>DATE: <i><?=$post['create_date']?></i></span>
                <p><?=$post['content']?></p>
            <?php endforeach?>
        <?php endif?>
    </div>

    </div>
</div>



