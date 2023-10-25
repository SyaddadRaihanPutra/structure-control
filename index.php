<!DOCTYPE html>
<html>

<head>
    <title>Ubah Gambar</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
            text-align: center;
        }

        .wrapper {
            display: flex;
            justify-content: center;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        img {
            margin-top: 50px;
            width: 300px;
            height: 300px;
            border-radius: 200px;
            border: 4px solid #fff;
        }
        label {
            display: block;
            margin-bottom: 20px;
        }
        input {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #fff;
            border-radius: 15px;
        }
        button {
            background-color: orange;
            border: transparent;
            padding: 5px;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-color: #333333;">
    <h1>Ubah Gambar</h1>
    <div class="wrapper">
        <form method="POST" action="">
            <p><small><i>Tulis Teks <b>"Aku"</b> atau <b>"Dia"</b></i></small></p>
            <hr>
            <label for="teks">Masukkan teks: </label>
            <input type="text" name="teks" id="teks" placeholder="Ketik teks" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['teks'])) {
    $teks = $_POST['teks'];

    if (strcasecmp($teks, "AKU") === 0 || strcasecmp($teks, "Aku") === 0 || strcasecmp($teks, "aku") === 0) {
        echo '<img src="gambar1.png" alt="Gambar 1">';
    } elseif (strcasecmp($teks, "KAMU") === 0 || strcasecmp($teks, "Kamu") === 0 || strcasecmp($teks, "kamu") === 0) {
        echo '<img src="gambar.jpg" alt="Gambar 2">';
        echo "<script>alert('Hello')</script>";
    } else {
        echo '<p style="margin-top: 20px;"><i>Teks tidak cocok.</i></p>';
    }
}
?>