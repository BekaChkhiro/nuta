<?php

namespace App\Config;


class Person
{
    public $name = '';
    public $last_name = '';
    public $email = '';

    public function set_name($name)
    {
        $this->name = $name;
    }
    public function set_last_name($last_name)
    {
        $this->last_name = $last_name;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_last_name()
    {
        return $this->last_name;
    }
    public function get_email()
    {
        return $this->email;
    }
}
