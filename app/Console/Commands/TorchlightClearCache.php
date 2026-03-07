<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TorchlightClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torchlight:clear-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear torchlight cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $keep = ['.gitignore'];
        $path = storage_path('torchlight/cache');

        if (File::exists($path)) {
            // Keep some files
            $backups = [];
            foreach ($keep as $file) {
                $filePath = (string) $path.'/'.$file;
                if (File::exists($filePath)) {
                    $backups[$file] = File::get($filePath);
                }
            }

            // Clear
            File::cleanDirectory($path);

            // Restore kept files
            foreach ($backups as $file => $content) {
                $filePath = (string) $path.'/'.$file;
                File::put($filePath, $content);
            }

            $this->components->info('Torchlight cache cleared successfully');
        }
    }
}
