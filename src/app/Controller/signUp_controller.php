<?php
    require_once "../app/Model/sign_up.php";

    class SignUpController{

        public function displayPage(){
            
            $signUp = new SignUp();
            $signUp -> check();
            $signUp -> store();
            require "../app/View/users/sign_up.php";
        }
    }
   
