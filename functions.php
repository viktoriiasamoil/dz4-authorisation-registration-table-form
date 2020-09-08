<?php

const USERS_FILE = 'users.json';
const CONTACTS_FILE = 'contacts.json';

function loginEndpoint()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        global $smarty;

        $smarty->display('login.tpl');

        return;
    }
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    makeLogin($email, $password);
}

function makeLogin(string $email, string $password)
{
    $email = strtolower($email);

    if (strpos($email, '@') === false) {
        header("Location: /?action=login&error=Email should be correct");

        return;
    }

    if (strlen($password) < 8) {
        header("Location: /?action=login&error=Password should be at least 8 characters");

        return;
    }

    $users = readFromFile(USERS_FILE);

    foreach ($users as $user) {
        if ($email === $user['email']) {
            if (!password_verify($password, $user['password'])) {
                header("Location: /?action=login&error=Credentials are incorrect or user does not exist");

                return;
            }

            header("Location: /");

            $_SESSION['user'] = $user;
            return;
        }
    }

    header("Location: /?action=login&error=Credentials are incorrect or user does not exist");
}

function registerEndpoint()
{

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        global $smarty;

        $smarty->display('register.tpl');

        return;
    }

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    makeRegistration($email, $password);
}

function makeRegistration(string $email, string $password)
{
    $email = strtolower($email);

    if (strpos($email, '@') === false) {
        header("Location: /?action=register&error=Email should be correct");

        return;
    }

    if (strlen($password) < 8) {
        header("Location: /?action=register&error=Password should be at least 8 characters");

        return;
    }

    $users = readFromFile(USERS_FILE);

    foreach ($users as $user) {
        if ($email === $user['email']) {
            header("Location: /?action=register&error=User already exists");
            return;
        }
    }

    $users[] = $user = [
        'id' => md5(time() . rand(1,1000000)),
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'is_admin' => 0,
        'created_at' => date("d-m-Y")
    ];

    if (!writeFile(USERS_FILE, $users)) {
        header("Location: /?action=register&error=Server error. Not able to create user");

        return;
    }

    $_SESSION['user'] = $user;

    header("Location: /");
}

function logoutEndpoint()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }

    header("Location: /");
}


function mainEndpoint()
{    
global $smarty;

$smarty->display('layout.tpl');
}


function getContacts(): array
{
    $contactsString = file_get_contents(CONTACTS_FILE);
    $c = explode(PHP_EOL, $contactsString);

    $contacts = [];

    foreach ($c as $contactsRow) {
        $parts = explode(';', $contactsRow);
        $contacts = [];
        foreach ($parts as $keyValue) {
            $p = explode('=', $keyValue);
            $key = $p[0];
            $value = $p[1];
            $contact[$key] = $value;

            global $smarty;
            $smarty->assign('name', $name);
            $smarty->assign('phone', $phone);
            $smarty->assign('items', $contacts);
            $smarty->display('layout.tpl');
            $smarty->display('index.tpl');

        }

        $contacts[] = $contact;
    }

    return $contacts;
}


function createContact(string $name, string $phone) {

    $contacts = getContacts();
    $contacts[] = [
        'name' => $name,
        'phone' => $phone
    ];
    global $smarty;
    $smarty->assign('name', $name);
    $smarty->assign('phone', $phone);
    $smarty->assign('items', $contacts);
    $smarty->display('layout.tpl');
}


function showTableForm() {
    
    global $smarty;
    $smarty->display('index.tpl');
}

function readFromFile(string $fileName, $default = [])
{
    if (!file_exists($fileName)) {
        return $default;
    }

    $json = file_get_contents($fileName);

    return json_decode($json, true);
}