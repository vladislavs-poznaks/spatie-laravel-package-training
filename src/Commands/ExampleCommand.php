<?php

namespace VladislavsPoznaks\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'spatie-laravel-package-training';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
