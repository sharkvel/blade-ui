<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('torchlight:clear-cache')]
#[Description('Clear torchlight cache')]
class TorchlightClearCache extends Command
{
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
