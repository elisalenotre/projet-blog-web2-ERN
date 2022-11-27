<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <? echo $args['pageTitle'] ?>
    </title>
    <link rel="stylesheet" href="../../styles/globals.css" />
</head>

<body>

    <main id="auth_page">
        <div class="img-wrapper">
            <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                alt="background image">
        </div>
        <div class="form-wrapper">
            <!-- Un des deux formulaire dispo dans components/form -->
            <?
            require_once $args['authForm'];
            ?>
        </div>
    </main>

</body>

</html>