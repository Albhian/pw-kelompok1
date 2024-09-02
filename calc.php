<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        /* Mengatur tampilan keseluruhan halaman */
body {
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: #ffffff;
}

/* Mengatur tampilan judul halaman */
h1 {
    text-align: center;
    align-items: center;
    font-size: 2.5em;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* Mengatur tampilan form kalkulator */
form {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    max-width: 350px;
    width: 100%;
    text-align: center;
}

/* Mengatur tampilan label */
label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
}

/* Mengatur tampilan input angka dan dropdown */
input[type="number"], select {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Mengatur tampilan tombol submit */
button {
    background-color: #ff4081;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2em;
    transition: background-color 0.3s ease;
    width: 100%;
}

/* Efek hover untuk tombol */
button:hover {
    background-color: #e91e63;
}

/* Mengatur tampilan hasil kalkulasi */
h2 {
    text-align: center;
    margin-top: 20px;
    font-size: 1.8em;
    color: #ffeb3b;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

    </style>
</head>
<body>
    <h1>Kalkulator Penambahan dan Perkalian</h1>
    <form method="post">
        <label for="number1">Angka Pertama:</label>
        <input type="number" name="number1" id="number1" required>
        <br><br>
        <label for="number2">Angka Kedua:</label>
        <input type="number" name="number2" id="number2" required>
        <br><br>
        <label for="operation">Operasi:</label>
        <select name="operation" id="operation">
            <option value="add">Penambahan</option>
            <option value="multiply">Perkalian</option>
        </select>
        <br><br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];
        $result = 0;

        if ($operation == "add") {
            $result = $number1 + $number2;
            echo "<h2>Hasil Penambahan: $result</h2>";
        } elseif ($operation == "multiply") {
            $result = $number1 * $number2;
            echo "<h2>Hasil Perkalian: $result</h2>";
        }
    }
    ?>
        <a href="></a>
</body>
</html>
