<?php

declare(strict_types=1);

namespace Core;

use Illuminate\Database\Capsule\Manager;
use Dotenv\Dotenv;

class Application
{
    protected Router $router;

    protected Request $request;

    public function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();

        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();

        $this->connectToDatabase();
    }

    public function run(): void
    {
        echo $this->router->resolve();
    }

    protected function connectToDatabase(): void
    {
        $capsule = new Manager();

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => $_ENV['DB_HOST'],
            'database' => $_ENV['DB_NAME'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
}
