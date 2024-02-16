<?php
         if (session_status() == PHP_SESSION_NONE) 
         { 
            session_start();
         }

        // Encryption settings
        $encryptionMethod = 'AES-256-CBC';
        $encryptionKey = random_bytes(32); // 256-bit key for AES-256
        $iv = random_bytes(16); // Initialization Vector for AES-256

        // Function to encrypt data
        function encryptData($data) {
            global $encryptionMethod, $encryptionKey, $iv;
            return base64_encode(openssl_encrypt($data, $encryptionMethod, $encryptionKey, 0, $iv));
        }

        // Function to decrypt data
        function decryptData($data) {
            global $encryptionMethod, $encryptionKey, $iv;
            return openssl_decrypt(base64_decode($data), $encryptionMethod, $encryptionKey, 0, $iv);
        }

        // Check if the user is logged in and retrieve encrypted data from the session
        if (isset($_SESSION['admin_username'])) 
        {
            // Check if the 'Encrypted_data' key exists in the session
            $encryptedData = isset($_SESSION['Encrypted_data']) ?
             $_SESSION['Encrypted_data'] : '';

            // Decrypt the data
            $decryptedData = decryptData($encryptedData);
        }
?>
