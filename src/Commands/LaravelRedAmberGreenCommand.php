<?php

namespace Ontherocksoftware\LaravelRedAmberGreen\Commands;

use Illuminate\Console\Command;

class LaravelRedAmberGreenCommand extends Command
{
    public $signature = 'laravel-red-amber-green';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
