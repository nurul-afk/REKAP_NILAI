<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b); /* Striking purple-blue gradient */
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
            font-size: 32px;
            font-weight: bold;
        }

        form {
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            border-radius: 20px;  /* More rounded corners */
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-top: 20px;
            color: #333;
            font-size: 18px;
        }

        input[type="text"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: 1px solid #ddd;
            border-radius: 30px;  /* Pill shape */
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #2575fc; /* Blue focus border */
            outline: none;
        }

        button {
            background: linear-gradient(90deg, #ff4b1f, #ff9068); /* Bold gradient button */
            color: white;
            padding: 20px 15px;
            border: none;
            border-radius: 15px;  /* Pill shape */
            cursor: pointer;
            width: 95%;
            font-size: 16px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background: linear-gradient(90deg, #ff4b1f, #ff9068); /* Reversed gradient on hover */
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <!-- Image at the top of the page -->
    <img src="<?php echo base_url('assets/img/school_admin.png'); ?>" alt="School Admin">

    <h2>Edit Kelas</h2>

    <form method="post" action="<?php echo site_url('welcome/edit_kelas/' . $kelas->id); ?>">
        <!-- Kelas Input -->
        <label for="nama_kelas">Nama Kelas:</label>
        <input type="text" name="nama_kelas" value="<?php echo htmlspecialchars($kelas->nama_kelas); ?>" required>
        <br>

        <button type="submit">Simpan</button>
    </form>

    <a href="<?php echo site_url('welcome/view_kelas'); ?>">Kembali</a>

</body>
</html>
