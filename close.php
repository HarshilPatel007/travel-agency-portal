<?php

session_start();
    
if(isset($_SESSION['user_id']) && isset($_SESSION['name']) && isset($_SESSION['email'])){
    session_destroy();

}else{

}

?>