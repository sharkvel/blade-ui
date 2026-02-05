<?php

namespace Sharkvel\BladeUi\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Symfony\Component\Console\Cursor;
use Symfony\Component\Console\Helper\ProgressIndicator;

class AddCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ui:add {component}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a UI component to your application';

    protected $registry;

    protected $cursor;

    protected $sourceRoot = 'https://raw.githubusercontent.com/sharkvel/blade-ui-showcase/main';

    public function __construct()
    {
        $this->registry = json_decode(file_get_contents(dirname(__DIR__, 3) . '/registry.json'), true);

        return parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->cursor = new Cursor($this->output);
        $this->newLine();

        $component = $this->argument('component');

        $registry = $this->registry;

        // Add all components
        if ($component === 'all' && !empty($registry)) {
            $components = array_keys($registry);
            foreach ($components as $component) {
                $config = $registry[$component];

                $this->installDependencies($config);

                $this->installComponent($component, $config);
            }
        } else {
            $this->line('Checking registry...');
            $this->newLine();
            // Add specific component
            $config = array_find($registry['items'], fn($val) => $val['name'] === $component) ?? null;

            if (!$config) {
                $this->line("<fg=red>✖</> Component [{$component}] not found");

                return 1;
            }

            // ✔ ✖
            $this->line("<fg=green>✔</> Registry Checked");
            $this->newLine();

            $this->line('Checking dependencies...');
            $this->installDependencies($config);

            $this->newLine(2);
            $this->line('Installing component...');
            $this->installComponent($component, $config);
        }
    }

    /**
     * Install component
     */
    protected function installComponent(string $component, array $config)
    {

        $info = "<fg=green>✔</> [{$component}] component has been added!";

        $isOverride = null;

        foreach ($config['files'] as $file) {
            // Set destination
            $destination = match ($file['type']) {
                'component:blade' => resource_path('views/components/ui/' . basename($file['path'])),
                'component:class' => app_path('View/Components/Ui/' . basename($file['path']))
            };

            // Create directory if not exists
            if (!file_exists(dirname($destination))) {
                mkdir(dirname($destination), 0755, true);
            }

            // Ask for override if exists
            if (file_exists($destination) && is_null($isOverride)) {

                $confirm = $this->confirm("Component [{$component}] already exists. Overwrite it?");
                $this->cursor->moveUp(3);
                $this->cursor->clearLine();
                $this->cursor->moveDown();
                $this->cursor->clearLine();
                $this->cursor->moveUp();

                if (!$confirm) {

                    $info = "<fg=cyan>-</> [{$component}] component was skipped.";

                    $isOverride = false;
                } else {
                    $info = "<fg=green>✔</> [{$component}] component has been overridden!";

                    $isOverride = true;
                }
            }

            if ($isOverride === false) {
                continue;
            }

            // Get and put file
            $client = new Client;
            $result = $client->get($this->sourceRoot . '/' . $file['path'], ['headers' => ['Accept' => 'text/plain']]);
            $content = $result->getBody()->getContents();

            file_put_contents($destination, $content);

        }

        $this->line($info);
    }

    /**
     * Install component dependencies
     */
    protected function installDependencies(array $config)
    {

        $registry = $this->registry;
        $registryDependencies = $config['registryDependencies'] ?? [];

        if (empty($registryDependencies)) {
            return;
        }

        foreach ($registryDependencies as $dependency) {
            $dependencyConfig = array_find($registry['items'], fn($val) => $val['name'] === $dependency) ?? null;

            if (!$dependencyConfig) {
                $this->line("<fg=red>✖</>Dependency component [{$dependency}] not found");

                continue;
            }

            $this->installDependencies($dependencyConfig);

            $this->installComponent($dependency, $dependencyConfig);
        }
    }
}
