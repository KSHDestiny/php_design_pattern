<?php

include_once 'email.php';

class MockEmail extends Email
{
    public function send()
    {
        echo __CLASS__ . " - This would not have sent an email.";
        return true;
    }
}