<?php
spl_autoload_register(function ($class) {
    // Only autoload Altcha classes
    if (strpos($class, 'AltchaOrg\\Altcha\\') === 0) {
        // Remove "Altcha\" namespace prefix
        $relativeClass = substr($class, strlen('AltchaOrg\\Altcha\\'));

        // Convert namespace to file path
        $file = __DIR__ . '/altcha/src/' . str_replace('\\', '/', $relativeClass) . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
});
?>
