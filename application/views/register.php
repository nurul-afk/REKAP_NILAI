<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b); 
            margin: 30px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .registration-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .registration-container img {
            max-width: 120px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .registration-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .registration-container input,
        .registration-container select,
        .registration-container button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .registration-container select {
            background-color: #f9f9f9;
        }

        .registration-container button {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .registration-container button:hover {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .registration-container a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #007BFF;
        }

        .registration-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
        <h2>Registrasi</h2>
        <form method="post" action="<?php echo site_url('welcome/register'); ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role" required>
                <option value="">Pilih Role</option>
                <option value="dosen">Dosen</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Daftar</button>
        </form>
        <a href="<?php echo site_url('welcome/index'); ?>">Kembali ke Login</a>
    </div>
</body>
</html>