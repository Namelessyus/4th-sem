<?php

class Student{
    public $name;
    private $email;
    protected $contact;

    // public method to store and access private and protected properties
    // so we need setter and getter methods
    // getter -> return the value
    // setter -> stores the value
    public function set_email($param_email){
        $this->email = $param_email;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_contact($param_contact){
        $this->contact = $param_contact;
    }

    public function get_contact(){
        return $this->contact;
    }
}