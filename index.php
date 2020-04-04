<?php
class User {
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Мыло";
    public $city = "город";
    public function Hello() {
        echo "Hello {$this->name}";
        echo "Hello". $this->name;
    }
}
$admin = new User();
$admin->Hello;