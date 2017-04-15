<?php

interface Emailable
{
    public function getRecipientName();
    public function getEmailAddress();
    public function acceptsHtmlEmail();
}

class Client implements Emailable
{
    public function getRecipientName()
    {
        return 'Very Important Company Plc';
    }
    public function getEmailAddress()
    {
        return 'someone.somewhere@clientwebsite.com';
    }
    public function acceptsHtmlEmail()
    {
        return true;
    }
}

class Employee implements Emailable
{
    public function getRecipientName()
    {
        return 'John Doe';
    }
    public function getEmailAddress()
    {
        return 'john.doe@ourcorporateemail.com';
    }
    public function acceptsHtmlEmail()
    {
        return false;
    }
}