<?php

namespace ProdigyPHP\Prodigy\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use ProdigyPHP\Prodigy\Actions\BackupAction;
use Illuminate\Support\Facades\File;
use ProdigyPHP\Prodigy\Actions\CreateUserAction;

class UserCommand extends Command {

    public $signature = 'prodigy:user';
    public $description = 'Create a user.';

    public string $user_name;
    public string $email;
    public string $password;

    public function handle(): int
    {
        $this->comment('Creating a Laravel user...');

        $this->user_name = $this->ask('Full Name');
        $this->email = $this->ask('Email Address');
        $this->password = $this->secret('Password');

        $user = (new CreateUserAction($this->user_name, $this->email, $this->password))->execute();

        $this->line('------------------');
        $this->info('New user created!');
        $this->line('<fg=white;bg=blue> One more step! </>');
        $this->line('  Add email to the config/prodigy.php access_emails array.');
        $this->line('------------------');
        $this->ask('Once you\'ve added ' . $this->email . ' to config/prodigy.php, press enter.');

        return self::SUCCESS;
    }

}
