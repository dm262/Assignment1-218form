<?php include('form_test.php'); ?>
<div>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Registration</h1>
        <fieldset>
            <input placeholder="Your first name" type="text" name="firstname" value="<?= $firstname ?>"  >
            <span><?= $firstname_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Your last name" type="text" name="lastname" value="<?= $lastname ?>"  >
            <span><?= $lastname_error ?></span>
        </fieldset>


        <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>"  >
            <span><?= $email_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Birthday" type="date" name="birthday" value="<?= $birthday ?>"  >
            <span><?= $birthday_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Password" type="password" name="password" value="<?= $password ?>"  >
            <span><?= $password_error ?></span>
        </fieldset>

        <button name="submit" type="submit"  data-submit="...Sending">Submit</button>

        <div><?= $success ?></div>

    </form>
