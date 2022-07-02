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
        
        $datos = "algo en la consola";
        $this->$info($datos);
        
        $res = shell_exec('git pull');

        $this->runPull();

        if(!$this->runPull()) {

            $this->error("An error occurred while executing 'git pull'. \nLogs:");

<<<<<<< HEAD
            foreach($this->pullLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }
=======
             foreach($this->pullLog as $logLine) {
                 $this->info($logLine);
             }

             return;
        }
        
        $this->holaMundo();
>>>>>>> 7f956c1a60e1a86658822f6c8ee909d5cae5694c

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
    
    
    private function holaMundo()
    {
        $this->info('Cambios desde github');
    }

}
