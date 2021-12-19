<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?=$meta['title']?></title>
    <meta name="description" content="<?=$meta['desc']?>">
    <meta name="keywords" content="<?=$meta['keywords']?>"
    <script src="<?=APP_PATH?>public/js/jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!-- header -->
<?php include('includes/header.php')?>
<!-- tags menu -->
<?php if(!empty($menu)):?>
    <div class="col-3">
        <ul>
            <?php foreach($menu as $tag):?>
                <li><a href="#"><?=$tag['title']?></a></li>
            <?php endforeach;?>
        </ul>
    <h1><?=$content?></h1>
<?php endif;?>
<!-- end tags menu -->

<?php include('includes/footer.php')?>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    const url = 'app/view/';

    $('#send').click(function (){
        $.ajax({
            url: url+'main/test.php',
            type: 'POST',
            data: {'id': 2},
            dataType: 'html',
            success: function (result){
                console.log(result);
            },
            error: function (){
                alert('Error!');
            }
        });
    });
</script>
</body>
</html>