<?php

session_start();
//strpos=search of string in string
if (strrpos($_SERVER['REQUEST_URI'], "FO") == false && !isset($_SESSION['signOn'])) {
    header('location: sign-in.php');
} else {
    //Cart
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}

class config
{
    private static $instance = NULL;

    function __autoload($className)
    {
        if (file_exists($className . '.php')) {
            require_once $className . '.php';
            return true;
        }
        return false;
    }

    public static function getConnexion()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=obladi', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
        return self::$instance;
    }
}

?>
