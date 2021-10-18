<?php
    function sellerLoggedIn(){

        if (isset($_SESSION['sellerIdOfUser'])) {
    
          
            return $_SESSION['sellerIdOfUser'];
    
            
        }else{
    
            return false;
        }
    }

    
    
?>