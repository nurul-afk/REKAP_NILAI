<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b); 
            margin: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container img {
            max-width: 150px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-container input,
        .login-container select,
        .login-container button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container input[type="password"] {
            font-family: 'Courier New', Courier, monospace;
        }

        .login-container select {
            background-color: #f9f9f9;
        }

        .login-container button {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .login-container a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #007BFF;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="login-container">
       
        <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">

        <h2>Login</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="error-message">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?php echo site_url('welcome/login'); ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required pattern="\d{1,6}" maxlength="6"
                title="Password harus berupa angka dan maksimal 6 digit">
            <select name="role" required>
                <option value="">Pilih</option>
                <option value="dosen">Dosen</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Login</button>
        </form>

        <a href="<?php echo site_url('welcome/register'); ?>">Belum punya akun? Daftar</a>
    </div>
</body>

</html>
