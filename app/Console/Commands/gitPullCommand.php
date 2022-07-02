<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class gitPullCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ejecutar de forma automatica git pull';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $res = shell_exec('git pull');

        $this->runPull();

        // if(!$this->runPull()) {

        //     $this->error("An error occurred while executing 'git pull'. \nLogs:");

        //     foreach($this->pullLog as $logLine) {
        //         $this->info($logLine);
        //     }

        //     return;
        // }

    }
    
    
    private function runPull()
    {

        $process = new Process(['git pull']);
        $this->info("Running 'git pull'");

        $process->run(function($type, $buffer) {
            $this->pullLog[] = $buffer;

            if($buffer == "Already up to date.\n") {
                $this->alreadyUpToDate = TRUE;
            }
            
        });

        return $process->isSuccessful();
    }

}
