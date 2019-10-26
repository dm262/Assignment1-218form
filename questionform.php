<?php
include('form_test.php'); ?>
<div>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3>QuestionForm</h3>


        <fieldset>
            <input placeholder="Question name" type="text" name="questionname" value="<?= $questionname ?>" tabindex="1" autofocus>
            <span><?= $questionname_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Question body" type="text" name="questionbody" value="<?= $questionbody ?>" tabindex="2" autofocus>
            <span><?= $questionbody_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Question skills" type="text" name="questionskills" value="<?= $questionskills ?>" tabindex="3" autofocus>
            <span><?= $questionskills_error ?></span>
        </fieldset>

        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>

        <div><?= $success ?></div>

    </form>
