<?php

// http://127.0.0.1:8080/5-persisting-form-values/form.php

// Last push - validation.



// The general idea: If we're coming in from a GET, we just act as
// we always do and show the form.
// 
// BUT if we're coming in from a POST, we've got form data to validate! 
// Here's one reasonably simple way to do this:
//   1. Check each entry that needs validating, shoving error messages 
//      into an array of such messages.
//   2. If our error array is empty, everything is fine! Show whatever
//      thing it is you want to show, or redirect. (We'll be redirecting
//      in The Project, but won't talk about it today.)
//   3. If our error array is NOT empty, we want to re-show our
//      form and use the error array to add messages to the form in
//      reasonable places.

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require 'views/form.view.php';
} else if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $errors = [];
    // validate length with strlen

    // if (empty($errors))
    //   everything ok, so go where you want to go
    // else
    //   there are errors, so go back to your form
}
