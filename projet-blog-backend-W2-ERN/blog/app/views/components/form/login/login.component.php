<form method="post" action="/login" class="form_login">
    <h1>Connexion : </h1>
    <label for="username">Username :</label>
    <input id="username" type="text" name="username" class="form_username-input">
    <label for="password">Password :</label>
    <input id="password" type="password" name="password" class="form_password-input">

    <p class="form_error-message"></p>
    <button class="form_submit-btn">Envoyer</button>
    <hr />
    <button onclick="window.location.href = '/register';">Créer un compte</button>
</form>


<script>
<?php require_once(dirname(__DIR__, 2) . "/form/login/login.js"); ?>
</script>