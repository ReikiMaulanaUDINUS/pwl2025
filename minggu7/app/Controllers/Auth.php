<?php 
namespace Controllers;
use Models\Model_user;

class Auth
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new Model_user();
    }

    // Tampilkan form login
    public function loginForm()
    {
        require_once 'app/Views/login.php';
    }

    // Proses login
    public function loginProcess()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // 1. mengambil data user dari DB
        $user = $this->userModel->getByUsername($username);

        // 2. Mengecek password
        if ($user && $password === $user['password']) {
            
            // Regenerate session
            session_regenerate_id(true);
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['username']  = $user['username'];

            header("Location: ?act=home");
            exit;
        }
        // 3. login gagal
        $_SESSION['error'] = "Invalid credentials.";
        header("Location: ?act=login");
        exit;
    }

    // Logout
    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: ?act=login");
        exit;
    }
}
?>
