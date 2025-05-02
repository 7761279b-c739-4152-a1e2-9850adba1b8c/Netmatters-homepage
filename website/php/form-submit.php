<?php
// code to add form to database if its valid

if (strlen($_POST['message']) < 5) {
    $form_errors[] = 'The message must be at least 5 characters';
}

