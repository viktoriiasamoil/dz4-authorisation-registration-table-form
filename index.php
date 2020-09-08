<?php

require_once "libs/Smarty.class.php";
require_once "functions.php";
require_once "session.php";

$smarty = new Smarty();
$smarty->setTemplateDir('templates');

$action = $_GET['action'] ?? 'main';

switch ($action) {
    case "login":
        loginEndpoint();
        break;
    case "register":
        registerEndpoint();
        break;
    case "logout":
        logoutEndpoint();
        break;
    case "session":
        print_r($_SESSION);
        break;
    case "create":
        showTableForm();
            if (empty($_POST['name']) || empty($_POST['phone'])) {
                die("Name and phone should not be empty");
            }

            createContact($_POST['name'], $_POST['phone']);
        break;
    default:
        mainEndpoint();
        break;
      
}