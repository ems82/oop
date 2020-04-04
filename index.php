<?php
class User {
    public $name = "Имя";

    public function Hello() {
        echo "Hello {$this->name}";
        echo "Hello". $this->name;
    }
}
$admin = new User();
$admin->name = "Максим";
$admin->Hello();