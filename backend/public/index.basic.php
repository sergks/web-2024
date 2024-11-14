<?php

namespace backend\public;
$a = 10;
$b = '1abs';
$c = $a + (int)$b;

$list = [1, 2, 3, false, 'Строка'];

class User
{
    private $name;
    private $age;
    public $languages = [];

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function addLang($lang)
    {
        $this->languages[] = $lang;
    }

    public function hasLang($lang)
    {
        return in_array($lang, $this->languages);
    }
}

$user = new \backend\public\User('Иван', 22);
$user->addLang('ru');
$user->addLang('en');

var_dump($user->hasLang('ru'));
