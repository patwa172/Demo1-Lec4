<?php require 'partials/head.php'; ?>
<!-- https://developer.mozilla.org/en-US/docs/Learn/Forms/Your_first_form -->
<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <ul>
        <li>
            <label for="name">Name:</label>
            <!-- what attribute lets you add text to a text input? -->
            <input type="text" id="name" name="user_name">
        </li>
        <li>
            <label for="password">Password:</label>
            <!-- what attribute lets you add text to a text input? -->
            <input type="password" id="password" name="user_pw">
        </li>
        <li>
            <label for="msg">Message:</label>
            <!-- what attribute lets you add text to a textarea? Careful! -->
            <textarea id="msg" name="user_message"></textarea>
        </li>
        <li class="button">
            <button type="submit">Post It</button>
        </li>
    </ul>
</form>
<?php require 'partials/footer.php'; ?>