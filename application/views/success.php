<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah Sukses</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b); 
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .container {
            text-align: center;
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        p {
            color: #333333;
            margin-bottom: 20px;
            font-size: 16px;
        }
        a {
            text-decoration: none;
            color: #ffffff;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        a:hover {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mata Kuliah Berhasil Ditambahkan</h2>
        <p>Mata Kuliah dengan ID: <strong><?php echo $mata_kuliah_id; ?></strong> telah berhasil ditambahkan.</p>
        <a href="<?php echo site_url('welcome/dashboard'); ?>">Kembali ke Dashboard</a>
    </div>
</body>
</html>