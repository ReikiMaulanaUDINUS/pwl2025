<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/'); // jika belum login
        }

        $role = $session->get('role');

        // Cek role akses
        if (in_array('admin', $arguments) && $role != 'admin') {
            return redirect()->to('/user');
        }

        if (in_array('user', $arguments) && $role != 'user') {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}
