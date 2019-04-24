<?
class Controller_Auth extends Controller
{
    public function action_register() {
        $login = $_POST['login'];
        $password = $_POST['pass'];
        Auth::register($login, $password);
    }
    
    public function action_login() {
        $login = $_POST['login'];
        $password = $_POST['pass'];
        Auth::login($login, $password);
    }
    
    public function action_logout() {
        Auth::logout();
    }
}
