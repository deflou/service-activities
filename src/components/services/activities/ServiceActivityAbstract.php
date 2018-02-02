<?php
namespace deflou\components\services\activities;

use deflou\interfaces\services\activities\IServiceActivity;

class ServiceActivityAbstract implements IServiceActivity
{
    protected $activity = [];

    public function __construct($activity = [])
    {
        $this->activity = $activity;
    }
}