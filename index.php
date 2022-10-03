<html>

<head>
    <title>Implementasi Penerapan Fuzzy</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body style="text-align: center;">
    <div class="container">
        <!-- NAVIGATION BAR -->
        <div class="container-navbar">
            <ul class="ul-navbar">
                <li class="li-navbar">
                    <a href="#" class="a-navbar">Penerapan Lozika Fuzzy dalam Menentukan Range Nilai Terbaik</a>
                </li>
            </ul>
        </div>
        <!-- NAVIGATION BAR SELESAI -->

        <div>
            <h1 class="judul">TUGAS MATA KULIAH <br>"Sistem Pendukung Keputusan"</h1>
            <h4 class="judul3">Oleh : <br> Rizki Januar Irmansyah</h4>
            <form method="post" action="">
                <input type="number" name="input" placeholder="Masukan Rate Angka 1-100" required="">
                <input type="submit" name="submit" value="submit">
            </form>
            <br>
            <h2 class="judul2">Hasil Logika Fuzzy</h2>
            <?php
            if (isset($_POST['submit'])) {
                $input = $_POST['input'];
                echo "ANGKA YANG ANDA MASUKAN ADALAH : <b>", ($input), "<br>";
                if ($input >= 80 and $input <= 100) {
                    echo "BAGUS PARAH BROO";
                } elseif ($input >= 68 and $input <= 79) {
                    echo "BAGUS BRO";
                } elseif ($input >= 55 and $input <= 67) {
                    echo "LUMANYUN BRO";
                } elseif ($input >= 45 and $input <= 54) {
                    echo "MAAF JELEK BRO";
                } elseif ($input >= 0 and $input <= 44) {
                    echo "MAAF JELEK BANGET BRO";
                }
            }
            ?>
        </div>
</body>

</html>