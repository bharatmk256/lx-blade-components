<?php

namespace Parth1895\LxBladeComponents\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lx:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the lx components';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'lx-views', '--force' => true]);
        $this->output->writeln(PHP_EOL.'<bg=blue;fg=black> INFO </> '. 'Publishing [lx-views] assets.'. PHP_EOL . PHP_EOL .'   Copying directory [vendor/parth1895/lxbladecomponents/resources/views] to [resources/views/components/lx] .......................................... DONE' .PHP_EOL);
    }

    public function __construct()
    {
        parent::__construct();
    }
}