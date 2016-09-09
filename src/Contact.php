<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone;
        private $address;
//Constructors
        function __construct($first_name, $last_name, $phone, $address)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone = $phone;
            $this->address = $address;
        }
//Getters and Setters
        function setFirstName($new_first_name)
        {
            $this->first_name = (string) $new_first_name;
        }
        function getFirstName()
        {
            return $this->first_name;
        }
        function setLastName($new_last_name)
        {
            $this->last_name = (string) $new_last_name;
        }
        function getLastName()
        {
            return $this->last_name;
        }
        function setPhone($new_phone)
        {
            $this->phone = (int) $new_phone;
        }
        function getPhone()
        {
            return $this->phone;
        }
        function setAddress($new_address)
        {
            $this->address = $new_address;
        }
        function getAddress()
        {
            return $this->address;
        }
//Methods
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

//Static Methods
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
