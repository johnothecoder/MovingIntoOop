<?php

class Scope
{

    // I will never change
    const GITHUBURL = 'https://github.com/johnothecoder';

    // I can be called from the class, without instantiation, and can be shared across multiple instances
    public static $fullName = 'Matt Johnson';

    // I can be access from anywhere the object exists
    public $alias = 'JohnoTheCoder';

    // I can only be accessed from within Scope or a class which extends Scope
    protected $name = 'Matt Johnson';

    // I can be called from anywhere
    public function getAlias()
    {
        return $this->alias;
    }

    // I can be only be called within Scope (or classes which extend scope)
    protected function getName()
    {
        return $this->name;
    }

}

// Executing some code

echo Scope::GITHUBURL;
echo Scope::$fullName;

$scope = new Scope();
echo $scope->alias;
echo $scope->getAlias();

// But I can't do this
echo $scope->name;
// Or this
echo $scope->getName();