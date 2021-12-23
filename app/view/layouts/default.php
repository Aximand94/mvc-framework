<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../public/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <!-- Title -->
    <title>Blog</title>
</head>
<body>
<!-- Header -->
<?php require('includes/header.php') ?>
<!-- end header -->
<!-- main -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <!-- Main content -->
            <?=$content?>
            <!-- end main content -->
        </div>
        <div class="col-md-2">
            <!-- Navbar menu -->
            <div class="nav-menu">
                <span>Category:</span>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category one</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category two</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category thee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category four</a>
                    </li>
                </ul>
            </div>
            <!-- end navbar -->
        </div>
    </div>
</div>
<!-- end main -->
<!-- footer -->
<?php require('includes/footer.php') ?>
<!-- end footer -->
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