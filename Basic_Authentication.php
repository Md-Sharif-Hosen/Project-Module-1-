<?php 
    define("USER_NAME","ADMIN");
    define("PASSWORD",'sharif39');


    echo "Enter UserName: ";
    //  $username = trim(fgets(STDIN));
     $username= readline();

     echo "Enter Password: ";
     $password = trim(fgets(STDIN));

     if($username == USER_NAME && $password == PASSWORD){
         echo "Login Successful!";
     }elseif($username == USER_NAME && $password != PASSWORD){
         echo "Incorrect Password!";
     }elseif( $username!= USER_NAME && $password == PASSWORD ){
         echo "Invalid Username!";
     }
     else{
        echo "Both Username and Password are incorrect!";
     }
?>

?>