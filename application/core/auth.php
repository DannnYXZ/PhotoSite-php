<?
class Auth
{
    function generateCode($length = 10){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI+JKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length)
            $code .= $chars[mt_rand(0, $clen)];
        return $code;
    }
    function mysqli_result($res, $row, $field=0) {
        $res->data_seek($row);
        $datarow = $res->fetch_array();
        return $datarow[$field];
    }
    public static function register($login, $password) {
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        $login = mysqli_real_escape_string($connection, $login);
        $query = mysqli_query($connection, "SELECT COUNT(user_id) FROM users WHERE login='" . $login . "'");
        if (Auth::mysqli_result($query, 0) > 0) {
            $_SESSION['ERR_MSG'] = 'Such user already exists...';
            header("location: /register");
            exit();
        }
        $salt = self::generateCode(10);
        $pass = hash('sha256', $salt . hash('sha256', $password));
        $date = date("Y-m-d h:i:s", time());
        mysqli_query($connection, "INSERT INTO users (login,password,salt,auth_token,reg_date) VALUES ('$login','$pass','$salt','sdsdd','$date')");
        //echo(mysqli_error($connection));
        self::login($login, $password);
    }
    public static function login($login, $password) {
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        $login = mysqli_real_escape_string($connection, $login);
        $query = mysqli_query($connection, "SELECT user_id, password, salt FROM users WHERE login='" . $login . "' LIMIT 1");
        $data =  mysqli_fetch_assoc($query);
        echo(mysqli_error($connection));
        if ($data['password'] === hash('sha256', $data['salt'] . hash('sha256', $password))) {
            $auth_token = md5(self::generateCode(64));
            mysqli_query($connection, "UPDATE users SET auth_token='" . $auth_token . "' " . " WHERE user_id='" . $data['user_id'] . "'");
            setcookie("id", $data['user_id'], time() + 60 * 60 * 24 * 30, '/');
            setcookie("auth_token", $auth_token, time() + 60 * 60 * 24 * 30, '/');
            header("location: /");
        } else {
            $_SESSION['ERR_MSG'] = 'Wrong Login/Password...';
            header("location: /login");
        }
    }
    public static function removeCookies(){
        setcookie('id', null, -1, '/');
        setcookie('auth_token', null, -1, '/');
    }
    public static function logout(){
        Auth::removeCookies();
        header('Location: /');
    }
    public static function resume() {
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        if (isset($_COOKIE['id']) and isset($_COOKIE['auth_token'])){
            $query = mysqli_query($connection, "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
            $userdata = mysqli_fetch_assoc($query);
            if(($userdata['auth_token'] !== $_COOKIE['auth_token']) or ($userdata['user_id'] !== $_COOKIE['id']))
                Auth::removeCookies();
            else
                define('USER_NAME', $userdata['login']);
        }
    }
}
