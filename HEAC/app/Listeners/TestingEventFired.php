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
            Log::info("New User is registerd");
            // die;
        }else{
            echo "Can't";
        }
    }
}
