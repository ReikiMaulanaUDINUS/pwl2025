<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    private $users = [
        'admin' => [
            'username' => 'admin',
            'password' => '', 
            'role' => 'admin'
        ],
        'user' => [
            'username' => 'user',
            'password' => '', 
            'role' => 'user'
        ]
    ];

    public function __construct()
    {
        // hash password
        $this->users['admin']['password'] = password_hash('admin123', PASSWORD_DEFAULT);
        $this->users['user']['password'] = password_hash('user123', PASSWORD_DEFAULT);
    }

    // tampilkan halaman login
    public function login()
    {
        return view('auth/login');
    }

    // autentikasi login
    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (!isset($this->users[$username])) {
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }

        $user = $this->users[$username];

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah.');
        }

        session()->set([
            'username' => $user['username'],
            'role' => $user['role'],
            'isLoggedIn' => true
        ]);

        return redirect()->to('/' . $user['role']);
    }

    // logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
