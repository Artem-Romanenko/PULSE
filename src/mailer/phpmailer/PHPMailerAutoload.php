<?php
/**
 * PHPMailer SPL autoloader.
 * PHP Version 5+
 * @package PHPMailer
 * @link https://github.com/PHPMailer/PHPMailer/
 */

/**
 * PHPMailer SPL autoloader.
 * @param string $classname The name of the class to load
 */
function PHPMailerAutoload($classname)
{
    $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'class.' . strtolower($classname) . '.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

// Використовуємо тільки spl_autoload_register(), без __autoload()
spl_autoload_register('PHPMailerAutoload', true, true);
