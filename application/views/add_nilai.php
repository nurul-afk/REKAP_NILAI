<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container img {
            max-width: 100px;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #444;
            font-size: 24px;
        }

        .form-container label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
            font-weight: bold;
        }

        .form-container select,
        .form-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
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
            background: linear-gradient(90deg, #ff4b1f, #ff9068);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
    </style>
</head>
<body>
    <div class="form-container">
        <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">
        <h2>Tambah Nilai</h2>
        <form method="post" action="<?php echo site_url('welcome/add_nilai'); ?>">
            <label for="mata_kuliah">Mata Kuliah:</label>
            <select name="mata_kuliah_id" id="mata_kuliah" required>
                <option value="" disabled selected>Pilih Mata Kuliah</option>
                <?php foreach ($mata_kuliah as $mk): ?>
                    <option value="<?php echo $mk->id; ?>"><?php echo $mk->mata_kuliah; ?></option>
                <?php endforeach; ?>
            </select>
            
            <label for="kelas">Kelas:</label>
            <select name="kelas_id" id="kelas" required>
                <option value="" disabled selected>Pilih Kelas</option>
                <?php foreach ($kelas as $k): ?>
                    <option value="<?php echo $k->id; ?>"><?php echo $k->nama_kelas; ?></option>
                <?php endforeach; ?>
            </select>
            
            <label for="nilai">Nilai:</label>
            <input type="number" name="nilai" id="nilai" placeholder="Nilai" required min="0" max="100">
            
            <button type="submit">Simpan</button>
        </form>
        <a href="<?php echo site_url('welcome/dashboard'); ?>">Kembali</a>
    </div>
</body>
</html>
