<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata | Politeknik Negeri Madiun</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

/* Header Styling */
header {
    background-color: #0077b6;
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h3 {
    margin: 0;
    font-size: 1.5em;
}

/* Navigation Styling */
nav {
    text-align: center;
    margin-bottom: 20px;
}

nav a {
    text-decoration: none;
    color: #00b4d8;
    font-weight: bold;
    padding: 5px 10px;
    background-color: #fff;
    border: 1px solid #333;
    border-radius: 3px;
}

nav a:hover {
    background-color: #333;
    color: #fff;
}

/* Table Styling */
table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
}

table th,
table td {
    border: 1px solid #333;
    padding: 8px;
    text-align: left;
}

table th {
    background-color: #00b4d8;
    color: #fff;
}

/* Total Paragraph Styling */
p {
    text-align: center;
    margin-top: 20px;
    font-weight: bold;
}

    </style>
</head>

<body>
    <header>
        <h3>Mahasiswa yang sudah terdaftar</h3>
    </header>

    <nav>
        <a href="daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>TTL</th>
        </tr>
    </thead>
    <tbody>

<?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);
        while($mahasiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mahasiswa['nim']."</td>";
            echo "<td>".$mahasiswa['nama']."</td>";
            echo "<td>".$mahasiswa['usia']."</td>";
            echo "<td>".$mahasiswa['alamat']."</td>";
            echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
            echo "<td>".$mahasiswa['TTL']."</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    
    </body>
</html>