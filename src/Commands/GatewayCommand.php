<?php

namespace GetThingsDone\Gateway\Commands;

use Illuminate\Console\Command;

class GatewayCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
