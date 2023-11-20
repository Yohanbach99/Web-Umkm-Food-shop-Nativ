<?php
include('config.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', 'user')";
    
    if (mysqli_query($conn, $query)) {
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<style>
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
    max-width: 350px;
    margin: 50px auto;
    background: #fff;
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
    width: calc(100% - 40px);
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
    background: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #2980b9;
}

/* Media Query for Responsiveness */
@media (max-width: 600px) {
    .login_box {
        max-width: 90%;
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
    <form method="post" action="register.php">
        <h2>Register</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person-add-outline"></ion-icon></ion-icon></span>
                <input type="text" name="username"  required><br>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon>
                </span>
                <input type="email" name="email"  required><br>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></ion-icon></span>
                <input type="password" name="password"  required><br>
                <label>Password</label>
            </div>
            <div class="register-link">
            <button type="submit">Register</button>
            </div>
        </form>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>
</section>  

    <!-- <h2>Register</h2>
    <form method="post" action="register.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form> -->
    

</body>
</html>
