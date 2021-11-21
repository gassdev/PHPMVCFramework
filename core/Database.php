<?php
namespace app\core;

use PDO;

/**
 * Database
 */
class Database
{
    public PDO $pdo;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';
        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $this->getAppliedMigrations();

        $files = scandir(
            Application::$ROOT_DIR . DIRECTORY_SEPARATOR . 'migrations'
        );

        echo '<pre>';
        var_dump($files);
        echo '</pre>';
        exit();
    }

    public function createMigrationsTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR (255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;");
    }

    public function getAppliedMigrations()
    {
        $stmt = $this->pdo->prepare('SELECT migration FROM migrations');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
