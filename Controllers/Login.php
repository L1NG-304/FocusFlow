<?php
class Login extends Controller {

    public function __construct() {
        $this->userModel = $this->model("LoginModel");
    }

    public function Show() {
        $this->view("LoginView", ["title" => "Login"]);
    }

    public function Authenticate() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($this->userModel->login_check($username, $password)) {
                header("Location: /controllers/Home");
                exit();
            } else {
                $this->view("LoginView", [
                    "title" => "Login",
                    "error" => "Invalid username or password"
                ]);
            }
        } else {
            header("Location: ./Show");
        }
    }
}
?>
