<?php

class CampaignMonitor 
{   
    public function subscribe($email)
    {
        die('Subscribing with Campaign Monitor');
    }
}

class Drip 
{   
    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}

class NewsletterSubscriptionController
{
    public function store($newsletter)
    {
        $email = 'ismail@moi.gov.qa';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();



var_dump($controller->store(new CampaignMonitor()));

