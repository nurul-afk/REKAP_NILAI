<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Nilai</title>
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

        h2 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 28px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        img {
            max-width: 150px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 1400px;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
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
    </style>
</head>
<body>
    <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
    <h2>Data Nilai</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Mata Kuliah ID</th>
                <th>Kelas ID</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Nama Kelas</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nilai as $n): ?>
            <tr>
                <td><?php echo htmlspecialchars($n->id); ?></td>
                <td><?php echo htmlspecialchars($n->user_id); ?></td>
                <td><?php echo htmlspecialchars($n->mata_kuliah_id); ?></td>
                <td><?php echo htmlspecialchars($n->kelas_id); ?></td>
                <td><?php echo htmlspecialchars($n->mata_kuliah); ?></td>
                <td><?php echo htmlspecialchars($n->nilai); ?></td>
                <td><?php echo htmlspecialchars($n->nama_kelas); ?></td>
                <td>
                    <a href="<?php echo site_url('welcome/edit_nilai/' . $n->id); ?>">Edit</a> 
                    <a href="<?php echo site_url('welcome/delete_nilai/' . $n->id); ?>" class="delete" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo site_url('welcome/dashboard'); ?>" class="back-link">Kembali</a>
</body>
</html>
