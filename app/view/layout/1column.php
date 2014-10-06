<!DOCTYPE html>
<html>
<head>
    <title>VK</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<?php include BASE_PATH . '/app/view/header.php' ?>
<section class="main">
    <?php include BASE_PATH . '/app/view/' . $view . '.php' // app/view/user/registration.php ?>
</section>
<?php include BASE_PATH . '/app/view/footer.php'; ?>
</body>
</html>