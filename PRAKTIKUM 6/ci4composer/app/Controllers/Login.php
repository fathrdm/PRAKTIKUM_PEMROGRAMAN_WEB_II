<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ModelLogin;
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('Login');
    }
    public function auth()
    {
        $session = session();
        $model = new ModelLogin();
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->get_data($username, $email, $password);
        if (empty($username) || empty($email) || empty($password)) {
            $session->setFlashdata('msg', 'Harap lengkapi semua kolom');
            return redirect()->to('/login');
        }
        if ($data) {
            $ses_data = [
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => $data['password'],
                'logged_in' => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/buku/index');
        } else {
            $session->setFlashdata('msg', 'Username, Email, atau Password Salah');
            return redirect()->to('/login');
        }
        
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
?>
