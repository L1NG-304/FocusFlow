<?php
    class UserModel{
        private int $ID;
        private string $name;
        private string $email;
        private string $password;
        private string $role;
        function getID():int
        {
            return $this->ID;
        }
        function setID(int $ID):void
        {
            $this->ID = $ID;
        }
        function getRole():string
        {
            return $this->role;
        }
        function setRole(string $role):void
        {
            $this->role = $role;
        }
        function getPassword():string
        {
            return $this->password;
        }
        function setPassword(string $password):void
        {
            $this->password = $password;
        }
        function getEmail():string{
            return $this->email;
        }
        function setEmail(string $email):void{
            $this->email = $email;
        }
        function getName():string{
            return $this->name;
        }
        function setName(string $name):void{
            $this->name = $name;
        }
        function __construct(int $ID,string $name,string $email,string $password,string $role_ID="2"){
            $this->ID = $ID;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role_ID;
        }
    }
?>