<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata | Politeknik Negeri Madiun</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #edf6f9;
}

header {
    background-color: #03045e;
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h3 {
    margin: 0;
    font-size: 1.5em;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

h4 {
    text-align: center;
}

nav ul {
    list-style-type: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

nav ul li a:hover {
    color: #555;
}

p {
    margin: 20px;
    padding: 10px;
    background-color: #dff0d8;
    border: 1px solid #d0e9c6;
    color: #3c763d;
}

p.error {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}

    </style>
</head>

<body>
    <header>
         <h3>Form Biodata</h3>
         <h1>Politeknik Negeri Madiun</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="daftar.php">Daftar Baru</a></li>
            <li><a href="list siswa.php">List Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran mahasiswa berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
    </body>
</html>