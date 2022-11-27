<?php
// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit();
}
// check cookies
if (!isset($_COOKIE['user'])) {
    header("Location: /login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <? echo $args['pageTitle'] ?>
    </title>
</head>

<body>

    <main id="blog_page">
        <h2>
            <? echo $args['pageTitle'] ?>
        </h2>
        <div class="blog_posts-wrapper">

        </div>
    </main>
</body>

</html>