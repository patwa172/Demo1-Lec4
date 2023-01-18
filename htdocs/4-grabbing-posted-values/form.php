<?php

// http://127.0.0.1:8080/4-grabbing-posted-values/form.php

// Let's do this: if we're coming in from a POST - that is, if
// someone has submitted the form - we'll display that info.

// If someone is coming in via a GET, then we just want to display
// the form!

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require 'form.view.php';
} else if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require 'form-results.view.php'; // we'll make this
} else {
    // don't worry about this...they won't come into play for us
}
