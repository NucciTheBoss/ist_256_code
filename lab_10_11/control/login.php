<?php
    // Simple class to manage login info and establish mysqli connection
    // Prevent variables from being directly accessible from code
    class Login {
        public function create_conn(){
            return new mysqli("localhost", "root", "mysql", "student");
        }
    }
?>
