<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b);
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        h2 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        img {
            max-width: 120px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            background: linear-gradient(90deg, #ff5f6d, #ffc3a0);
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
            border-radius: 20px;
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
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 20px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .back-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
    <h2>Daftar Mata Kuliah</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mata_kuliah as $mk): ?>
            <tr>
                <td><?php echo htmlspecialchars($mk->id); ?></td>
                <td><?php echo htmlspecialchars($mk->mata_kuliah); ?></td>
                <td>
                    <a href="<?php echo site_url('welcome/edit_mata_kuliah/' . $mk->id); ?>">Edit</a>
                    <a href="<?php echo site_url('welcome/delete_mata_kuliah/' . $mk->id); ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo site_url('welcome/dashboard'); ?>" class="back-link">Kembali</a>
</body>
</html>
