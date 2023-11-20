<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            if ($user['role'] === 'admin') {
                $_SESSION['admin'] = true;
                $_SESSION['role'] = 'admin';
                header('Location: tabel_admin.php');
                exit;
            } else {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = 'user';
                header('Location: menu.php');
                exit;
            }
            
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Pengguna tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<style>
/* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Login Box Styling */
.login_box {
    position: relative;
    max-width: 350px;
    margin: 50px auto;
    background: orange;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.input-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box .icon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #666;
}

.input-box input {
    width: 100%;
    padding: 10px;
    padding-left: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

.input-box label {
    position: absolute;
    top: 12px;
    left: 40px;
    color: #999;
    pointer-events: none;
    transition: 0.3s;
}

.input-box input:focus + label,
.input-box input:valid + label {
    top: -12px;
    left: 20px;
    font-size: 12px;
    color: #333;
}

button {
    width: 100%;
    padding: 10px;
    background: #f3e8aae0;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #2980b9;
}

.register-link {
    text-align: center;
}

.register-link a {
    text-decoration: none;
    color: #3498db;
}

/* Media Queries for Responsiveness */
@media (max-width: 600px) {
    .login_box {
        max-width: 100%;
        margin: 20px;
    }

    h2 {
        font-size: 20px;
    }

    .input-box input {
        font-size: 14px;
    }

    button {
        font-size: 16px;
    }
}

/* For larger mobile screens */
@media (min-width: 768px) {
    .login_box {
        max-width: 500px;
    }

    h2 {
        font-size: 24px;
    }

    .input-box input {
        font-size: 16px;
    }

    button {
        font-size: 18px;
    }
}

</style>
<body>


<section>
    <div class="login_box">
        <form method="post" action="login.php">
            <h2>^_~ Login ^_~</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person-add-outline"></ion-icon></ion-icon></span>
                <input type="text" name="username" required><br>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="key-outline"></ion-icon></ion-icon>
                </span>
                <input type="password" name="password" required><br>
                <label>Password</label>
            </div>
            <button type="submit" class="active">Login</button>
            <div class="register-link">
                <p>Belum Punya Akun ?<a href="register.php">Register</a></p>
            </div>
        </form>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>
</section>  
</body>
</html>
