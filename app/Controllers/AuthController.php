<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Lib\StringLib;

class AuthController extends BaseController
{
    public function checkLogin($request, $response, $args)
    {
        if (isset($_SESSION['user_session']) === true) {
            $this->redirect('/home');
        }
        $this->view($response, 'auth/login.php');
    }

    public function login($request, $response, $args)
    {
        $username = $request->getParam('username');
        $password = $request->getParam('password');
        $credentials = $this->prepare($username, $password);
        $result = UsersModel::getUser($credentials);
        if (count($result) === 0) {
            $msg = [
                'error' => 'User doesnt exists!'
                ];
            $this->view($response, 'auth/login.php', $msg);
            return;
        }
        $this->setSession($result);
        $this->view($response, '/home');
    }

    private function prepare($username, $password)
    {
        return [
            'username' => StringLib::clean($username),
            'password' => StringLib::hash($password)
        ];
    }

    private function setSession($aParam)
    {
        $_SESSION['username'] = $aParam['username'];
        $_SESSION['password'] = $aParam['password'];
        return ;
    }
}
