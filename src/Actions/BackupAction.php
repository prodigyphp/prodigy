<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class BackupAction
{
    protected Carbon $reference_date;

    protected string $destination_path;

    public function __construct()
    {
        $this->reference_date = now();
        $this->setupBackupFolder();
    }

    public function execute()
    {
        return $this->backupMedia()->backupDatabase();
    }

    /**
     * Make sure we have a folder to go to.
     */
    protected function setupBackupFolder(): self
    {
        $backups_path = storage_path('backups');

        if (! File::isDirectory($backups_path)) {
            File::makeDirectory($backups_path);
        }
        $this->destination_path = $backups_path.'/'.str($this->reference_date)->slug('_');
        File::makeDirectory($this->destination_path);

        return $this;
    }

    public function backupMedia(): self
    {
        $media_path = config('filesystems.disks.prodigy.root');
        File::copyDirectory($media_path, $this->destination_path.'/media');

        return $this;
    }

    /**
     * @TODO fix to allow multiple database names.
     */
    public function backupDatabase(): self
    {
        $database_path = env('DB_DATABASE');
//        $database = collect(glob($database_path . '*.sqlite'))->first();
        File::copy($database_path, $this->destination_path.'/prodigy.sqlite');

        return $this;
    }
}
