<?php

switch ($menu) {
    case 'login':
        require_once './pages/login.php';
        break;
    case 'regisztracio':
        require_once './pages/regisztracio.php';
        break;
    case 'logout':
        require_once './pages/logout.php';
        break;
    case 'rolunk':
        require_once './pages/rolunk.php';
        break;
    case 'termekek':
        require_once './pages/termekek.php';
        break;
    default:
        require_once './pages/home.php';
        break;
}

