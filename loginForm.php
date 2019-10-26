<?php include('form_test.php'); ?>
<div >
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3>LOGIN</h3>

        <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="1" autofocus>
            <span ><?= $email_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Password" type="password" name="password" value="<?= $password ?>" tabindex="2">
            <span ><?= $password_error ?></span>
        </fieldset>

        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>

        <div><?= $success ?></div>

    </form>
