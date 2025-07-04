<?php

spl_autoload_register(callback: 'Appautoloader');

function AppAutoLoader($classname): void
{
    //Define base directories
    $baseDirs = [
         "./../Config/",
        "Mailer/PHPMailer/phpmailer/phpmailer/src/",
        "./../Controller/",
        "./../Dialog/",
        "./../Hook/",
        "./../Json/",
        "./../Model/",
        "./../Module/",
        "./../Security/",
        "./../Service/",
        "./../View/",
        "./../View/Analytic/",
        "./../View/Assignment/",
        "./../View/Fee/",
        "./../View/MarksSheet/",
        "./../View/Scholar/",
        "./../View/ShareHolder/",
        "./../View/Staff/",
        "./../View/Subject/"
    ];

    //Define file extension
    $extension = ".php";

    //sanitize class name to prevent directory ttraversal
    $classname = str_replace(search: ['..', '/', '\\'], replace: '', subject: $classname);

    // Attempt to load the class file fron each base directory
    foreach ($baseDirs as $baseDir) {
        $file = $baseDir . $classname . $extension;
        if (file_exists(filename: $file)) {
            require_once $file;
            return;
        }
    }
}