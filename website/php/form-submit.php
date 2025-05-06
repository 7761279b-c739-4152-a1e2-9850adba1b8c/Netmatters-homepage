<?php

const email_regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
const phone_regex = '/^((?:\+|00)[17](?: |\-)?|(?:\+|00)[1-9]\d{0,2}(?: |\-)?|(?:\+|00)1\-\d{3}(?: |\-)?)?(0\d|\([0-9]{3}\)|[1-9]{0,3})(?:((?: |\-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |\-)[0-9]{3}(?: |\-)[0-9]{4})|([0-9]{7}))$/';


if (strlen($_POST['email']) < 1) {
    $form_errors[] = 'The email field is required.';
} elseif (!preg_match(email_regex, $_POST['email'])) {
    $form_errors[] = 'The email format is invalid.';
}
if (strlen($_POST['message']) < 1) {
    $form_errors[] = 'The message field is required.';
} elseif (strlen($_POST['message']) < 5) {
    $form_errors[] = 'The message must be at least 5 characters';
}
if (strlen($_POST['name']) < 1) {
    $form_errors[] = 'The name field is required.';
}
if (strlen($_POST['phone']) < 1) {
    $form_errors[] = 'The telephone field is required.';
} elseif (!preg_match(phone_regex, $_POST['phone'])) {
    $form_errors[] = 'The telephone format is incorrect.';
}


if (!empty($form_errors)) {
    return;

}

require 'php/database.php';

$db = new Database();
$db->query('insert into form_responses(name, company, email, phone, message, marketing) values(:name, :company, :email, :phone, :message, :marketing)', [
    'name' => $_POST['name'],
    'company' => $_POST['company'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'message' => $_POST['message'],
    'marketing' => isset($_POST['marketing']) ? 1 : 0
]);

$form_success = true;
