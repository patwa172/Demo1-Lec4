<?php

require '../helpers.php';

// http://127.0.0.1:8080/2-dealing-with-nasty/foo.php?name=Junko

vd($_GET);

// this won't work
// echo "I am so happy to meet you, $_GET['name'] !<br>";

// but this will
// echo "I am so happy to meet you, {$_GET['name']} !<br>";

// so will this, but don't use it (is name a constant? who knows?)
// echo "I am so happy to meet you, $_GET[name] !<br>";

// this might be surprisng
// echo "I am so happy to meet you, {$_GET['Name']} !<br>";

// http://127.0.0.1:8080/2-dealing-with-nasty/foo.php

// what about now? PREDICT
// echo "I am so happy to meet you, {$_GET['name']} !<br>";

// Q: how do we get around this?
// one way

// if (isset($_GET['name'])) {
//     msg = "I am so happy to meet you, {$_GET['name']} !<br>";
// } else {
//     msg = "Who the heck are you?!?!<br>";
// }
// echo $msg;

// a variant- the ternary operator
// $msg = isset($_GET['name']) ?
//     "I am so happy to meet you, {$_GET['name']} !<br>" :
//     "Who the heck are you?!?!<br>";

// echo $msg;
