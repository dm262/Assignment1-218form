<?php include('form_test.php'); ?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<div class="container">
    <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3>LOGIN</h3>

        <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="1" autofocus>
            <span class="error"><?= $email_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Password" type="password" name="password" value="<?= $password ?>" tabindex="2">
            <span class="error"><?= $password_error ?></span>
        </fieldset>

        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>

        <div class="success"><?= $success ?></div>

    </form>
