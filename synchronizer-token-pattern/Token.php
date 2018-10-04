<?php

class Token {
    
    // 2) Generate the CSRF token and store it in the server side
	// (The CSRF token is mapped to the session identifier)	
    public static function generateToken($sessionID){
        $_SESSION['sessionID'] = $sessionID;
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    }

    // Get the token issued for the session ID
    public static function getTokenBySession($sessionID){
        if(isset($_SESSION['sessionID']) && $sessionID == $_SESSION['sessionID']){
            return $_SESSION['token'];
        } 
        return false;  
    }

}

