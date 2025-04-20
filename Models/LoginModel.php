<?php
class LoginModel{
    public function login_check($username, $password): bool{
        include("./mvc/config/database.php");

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $_SESSION["username"] = $username;
            return true;
        }

        return false;
    }

    public function getUserByUsername(string $username): ?array {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        }
        return null;
    }
}