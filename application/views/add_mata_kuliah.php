<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            color: #333;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #444;
        }

        .form-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #ff4b1f, #ff9068);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .form-container button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .form-container a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .form-container a:hover {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        img {
            max-width: 50%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="form-container">
    <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
        <h2>Tambah Mata Kuliah</h2>
        <form method="post" action="<?php echo site_url('welcome/add_mata_kuliah'); ?>">
            <input type="text" name="nama" placeholder="Nama Mata Kuliah" required>
            <button type="submit">Simpan</button>
        </form>
        <a href="<?php echo site_url('welcome/dashboard'); ?>">Kembali</a>
    </div>
</body>
</html>
