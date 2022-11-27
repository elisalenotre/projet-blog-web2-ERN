<form method="post" action="/register" class="form_register">
    <h1>Inscription : </h1>

    <label for="email">Email :
        <input class="form_email-input" type="email" name="email">
    </label>

    <label for="username">Username :
        <input class="form_username-input" type="text" name="username">
    </label>

    <label for="firstName"> First Name :
        <input class="form_first-name-input" type="text" name="firstName">
    </label>

    <label for="lastName"> Last Name :
        <input class="form_last-name-input" type="text" name="lastName">
    </label>

    <label for="gender">Gender:
        <select name="gender" class="form_gender-inputs">
            <option value="">--Please select a gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </label>

    <label for="password">Password :
        <input class="form_password-input" type="password" name="password">
    </label>


    <label for="confirm">Confirm password :
        <input class="form_password-confirm-input" type="password" name="confirm">
    </label>

    <label for="gender">Role:
        <select name="gender" class="form_role-inputs">
            <option value="simple">Simple</option>
            <option value="moderator">Moderator</option>
            <option value="admin">Admin</option>
        </select>
    </label>

    <p class="form_error-msg"></p>
    <button type="submit" class="form_submit-btn">Envoyer</button>
    <hr />
    <button onclick="window.location.href = '/login'">Se connecter</button>
</form>

<script>
<?php require_once(dirname(__DIR__, 2) . "/form/register/register.js"); ?>
</script>