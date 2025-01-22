<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b);
            margin: 0;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .dashboard-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 500px;
            color: #333;
        }

        .dashboard-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #444;
        }

        .dashboard-container p {
            margin-bottom: 30px;
            font-size: 18px;
            color: #666;
        }

        .dashboard-container img {
            width: 120px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dashboard-container a {
            display: block;
            margin: 10px 0;
            padding: 12px;
            text-decoration: none;
            background: linear-gradient(90deg, #11998e, #38ef7d);
            color: white;
            border-radius: 6px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            font-size: 16px;
            font-weight: 500;
        }

        .dashboard-container a:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .logout {
            background: linear-gradient(90deg, #ff4b1f, #ff9068);
        }

        .logout:hover {
            background: linear-gradient(90deg, #ff9068, #ff4b1f);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
        <h2>Dashboard</h2>
        <p>Selamat datang, <strong><?php echo $this->session->userdata('role'); ?></strong>!</p>
        <a href="<?php echo site_url('welcome/add_mata_kuliah'); ?>">Tambah Mata Kuliah</a>
        <a href="<?php echo site_url('welcome/view_mata_kuliah'); ?>">Lihat Mata Kuliah</a>
        <a href="<?php echo site_url('welcome/add_kelas'); ?>">Tambah Kelas</a>
        <a href="<?php echo site_url('welcome/view_kelas'); ?>">Lihat Kelas</a>
        <a href="<?php echo site_url('welcome/add_nilai'); ?>">Tambah Nilai</a>
        <a href="<?php echo site_url('welcome/view_nilai'); ?>">Lihat Nilai</a>
        <a href="<?php echo site_url('welcome/logout'); ?>" class="logout">Logout</a>
    </div>
</body>
</html>
