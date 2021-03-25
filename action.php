<?php 


if($_SERVER['REQUEST_METHOD'] == "POST"){
   // code
 //echo    $_GET['name'];
 
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  echo '    Name :  '.$name.'<br>'.'email : '.$email;

}else{

   echo 'Error in request method';


}
  




   






?>