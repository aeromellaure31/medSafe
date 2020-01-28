<?php 
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION['login'])){
            if(!$_SESSION[login]){
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }
?>