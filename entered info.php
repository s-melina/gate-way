<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Preview</title>
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container">
    <h3>اطلاعات وارد شده</h3>
    <UL class="list-group">
        <?php foreach($_POST as $key => $value) { ?>
            <li class="list-group-item"><?php echo $key. ":" . $value; ?></li>
        <?php } ?>
    </UL>

</div>



<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
