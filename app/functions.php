<?php
    // tehcblog - nazovstranky
function getTitle():string
{
    $page = basename($_SERVER['SCRIPT_NAME'], '.php');
    return 'DESIGNER - ' . $page;
}

//function redirect(string $url):void{
//    header('Location: ' . $url);
//    exit();
//}
//
//function saveMessage(){
//    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//        $name = $_POST['name'];
//        $email = $_POST['email'];
//        $message = $_POST['message'];
//
//        if (empty($name) || empty($email) || empty($message)) {
//            echo "Vypln vsetky polia";
//            return;
//        }
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            echo "invalid email";
//            return;
//
//        }
//        $zaznam = "------------------------------------------------".PHP_EOL;
//        $zaznam .= "Name: $name".PHP_EOL;
//        $zaznam .= "Email: $email".PHP_EOL;
//        $zaznam .= "Message: $message".PHP_EOL;
//        $zaznam .="Datum: ".date('d.m.Y H:i').PHP_EOL;
//
//        file_put_contents('../log/message.txt', $zaznam, FILE_APPEND);
//    }
//}
//?><!--    -->