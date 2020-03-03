<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class GenerateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:generate {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'crée des users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        factory(User::class, 'user')->create();
    }
}
