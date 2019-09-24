<?php
if(isset($_POST['Submit'])) {
	save();
   }
   function save()
   {

   	    $name = $_POST["user_name"]; //You have to get the form data
    $email = $_POST["user_email"];
    $phone = $_POST["user_phone"];
    $gender = $_POST["gender"];
    $file = fopen('newapp_datainternprogram.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = $name. PHP_EOL .$email. PHP_EOL .$phone . PHP_EOL .$gender;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    echo "hello ".$_POST["user_name"];
   }
?>