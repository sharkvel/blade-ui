<?php

namespace App\Console\Commands;

use Illuminate\Cache\Console\ClearCommand;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'cache:clear')]
class ExtendsBaseCacheClear extends ClearCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cache:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Extended version of base cache:clear';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Perform the base cache:clear first
        parent::handle();

        // Extended logic
        $this->clearCacheTorchlight();
    }

    /**
     * Clear torchlight cache
     */
    private function clearCacheTorchlight()
    {
        $keep = ['.gitignore'];
        $path = storage_path('torchlight/cache');

        if (File::exists($path)) {
            // Keep some files
            $backups = [];
            foreach ($keep as $file) {
                $filePath = (string) $path . '/' . $file;
                if (File::exists($filePath)) {
                    $backups[$file] = File::get($filePath);
                }
            }

            // Clear
            File::cleanDirectory($path);

            // Restore kept files
            foreach ($backups as $file => $content) {
                $filePath = (string) $path . '/' . $file;
                File::put($filePath, $content);
            }

            $this->components->info('Torchlight cache cleared successfully');
        }
    }
}
