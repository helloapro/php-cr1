<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address;
//Constructors
        function __construct($name, $phone, $address = array())
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }
//Getters and Setters
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }
        function getName()
        {
            return $this->name;
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
