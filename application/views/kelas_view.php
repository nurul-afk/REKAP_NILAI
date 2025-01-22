<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b); 
            margin: 40px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            font-size: 16px;
            color: #333;
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 16px 20px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background: linear-gradient(90deg, #ff5f6d, #ffc3a0); /* Keep header gradient */
            color: #fff;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: white;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            padding: 12px 18px;
            border-radius: 20px; /* Rounded pill shape */
            margin: 0 5px;
            display: inline-block;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .delete {
            background: linear-gradient(90deg, #ff4b1f, #ff9068);
        }

        .delete:hover {
            background: linear-gradient(90deg, #ff9068, #ff4b1f);
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 20px;
            background: linear-gradient(90deg, #6a11cb, #2575fc); /* Keep back button gradient */
            color: white;
            border-radius: 20px; /* Rounded pill shape */
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .back-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        img {
            max-width: 150px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
    <h2>Daftar Kelas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kelas as $k): ?>
            <tr>
                <td><?php echo htmlspecialchars($k->id); ?></td>
                <td><?php echo htmlspecialchars($k->nama_kelas); ?></td>
                <td>
                    <a href="<?php echo site_url('welcome/edit_kelas/' . $k->id); ?>">Edit</a>
                    <a href="<?php echo site_url('welcome/delete_kelas/' . $k->id); ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo site_url('welcome/dashboard'); ?>" class="back-link">Kembali</a>
</body>
</html>