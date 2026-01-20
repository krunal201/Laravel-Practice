<?php

namespace App\Listeners;

use App\Events\TestingEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class TestingEventFired
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TestingEvent $event)
    {
        if($event->userdata){
            echo "register";
            die;
        }else{
            echo "Can't";
        }
    }
}
