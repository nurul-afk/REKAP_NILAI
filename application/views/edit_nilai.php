<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>
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

        h2 {
            margin-bottom: 15px;
            color: #ffffff;
            text-shadow: 1px 1px 2px #ffffff;
        }

        form {
            background-color: #ffffff;
            padding: 40px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
            width: 200%;
            max-width: 600px;
            border: 2px solid #99ccff;
            transition: transform 0.2s;
        }

        form:hover {
            transform: scale(1.02);
        }

        label {
            font-weight: bold;
            margin-top: 20px;
            color: #00334e;
        }

        select, input {
            width: 95%;
            padding: 20px;
            margin: 15px 20px;
            border: 10px;
            border-radius: 10px;
            background-color: #f2f9ff;
            transition: border-color 0.3s;
        }

        select:focus, input:focus {
            border-color: #0073e6;
            outline: none;
        }

        button {
            background: linear-gradient(90deg, #ff4b1f, #ff9068);
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background: linear-gradient(90deg, #ff4b1f, #ff9068);
            transform: translateY(-3px);
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 9px;
            text-decoration: none;
        }
        
        a:hover {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }


        img {
            max-width: 15%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <!-- Image at the top of the page -->
    <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">

    <h2>Edit Nilai</h2>

    <form method="post">
        <!-- Mata Kuliah Dropdown -->
        <label for="mata_kuliah_id">Pilih Mata Kuliah:</label>
        <select name="mata_kuliah_id" required>
            <option value="">Pilih Mata Kuliah</option>
            <?php foreach ($mata_kuliah as $mk): ?>
                <option value="<?php echo $mk->id; ?>" <?php echo ($mk->id == $nilai->mata_kuliah_id) ? 'selected' : ''; ?>>
                    <?php echo $mk->mata_kuliah; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <!-- Kelas Dropdown -->
        <label for="kelas_id">Pilih Kelas:</label>
        <select name="kelas_id" required>
            <option value="">Pilih Kelas</option>
            <?php foreach ($kelas as $k): ?>
                <option value="<?php echo $k->id; ?>" <?php echo ($k->id == $nilai->kelas_id) ? 'selected' : ''; ?>>
                    <?php echo $k->nama_kelas; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <!-- Nilai Input -->
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" value="<?php echo $nilai->nilai; ?>" required>
        <br>

        <button type="submit">Update Nilai</button>
    </form>

    <a href="<?php echo site_url('welcome/view_nilai'); ?>">Kembali</a>

</body>
</html>