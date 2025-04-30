<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        // Cek apakah user login dan role admin
        if (!session()->get('isLoggedIn') || session()->get('role') != 'admin') {
            return redirect()->to('/user'); // jika bukan admin, lempar ke user
        }

        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
            'users' => ['user1', 'user2', 'user3'], // dummy list user
            'title' => 'Dashboard Admin'
        ];

        return view('dashboard/admin', $data);
    }

    public function userDashboard()
    {
        if (!session()->get('isLoggedIn') || session()->get('role') != 'user') {
            return redirect()->to('/admin'); // jika bukan user, lempar ke admin
        }

        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
            'notes' => ['Belajar CodeIgniter', 'Meeting jam 10', 'Isi laporan harian'], // dummy catatan
            'title' => 'Dashboard User'
        ];

        return view('dashboard/user', $data);
    }
}
