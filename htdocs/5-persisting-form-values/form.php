<?php

// http://127.0.0.1:8080/5-persisting-form-values/form.php

// Let's do this now. If we're coming in from a POST - that is, if
// someone has submitted the form - we'll REDISPLAY the form...but
// we want to have all the filled in form stuff there.

// If someone is coming in via a GET, then we just want to display
// the form!

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require 'views/form.view.php';
} else if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require 'views/form.view.php';
}


// 1. Come in via a GET ... a blank form. No surprises. Buuuuut....
// 2. ...if you fill in the form and submit...where did all my beautiful entries go?!?!
