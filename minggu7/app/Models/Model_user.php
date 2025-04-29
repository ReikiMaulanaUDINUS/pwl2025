<?php
namespace Models;
use Libraries\Database;
use PDO;

class Model_user
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Database::getInstance();
    }

    /**
     * Fetch user record by username
     * 
     */
    public function getByUsername(string $username)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE username = :u LIMIT 1");
        $stmt->execute([':u' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
