<?php require 'partials/head.php'; ?>

<h1>Form Results</h1>
<p>name: <?= $_POST['user_name'] ?></p>
<p>password: <?= $_POST['user_pw'] ?></p>
<p>msg: <?= $_POST['user_message'] ?></p>

<?php require 'partials/footer.php'; ?>