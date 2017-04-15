<?php

abstract class User
{
    protected $userId = 0;
    protected $isLoggedIn = true;
    protected $isStaff = false;
    public function getUserId()
    {
        return $this->userId;
    }
    public function isLoggedIn()
    {
        return $this->isLoggedIn;
    }
}

class Guest extends User
{
    protected $isLoggedIn = false;
}

class Member extends User{}

class Moderator extends Member
{
    protected $isStaff = true;
    public function hasPermission($permission)
    {
        // Some logic here and return TRUE or FALSE
    }
}

class Administrator extends Moderator
{
    public function hasPermission($permission)
    {
        return true; // Administrators can do anything
    }
}