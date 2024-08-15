<?php

class Email
{
    protected $to = '';
    protected $from = '';
    protected $body = '';
    protected $subject = '';

    public function setProperties($to, $from, $subject, $body)
    {
        $this->to = $to;
        $this->from = $from;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function send()
    {
        echo __CLASS__ . " - This would have sent an email.";
        // mail($this->to, $this->subject, $this->body);
    }
}