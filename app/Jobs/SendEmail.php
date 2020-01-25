<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Carbon\Carbon;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
public $int;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($int)
    {
        $this->int = $int;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info(Carbon::now()."\n".'TEST: '.$this->int);
    }
}
