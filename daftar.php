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

/* Form Styling */
form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

fieldset {
    border: none;
}

p {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

select {
    width: calc(100% - 10px);
    padding: 8px;
    margin-top: 4px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="radio"],
input[type="checkbox"] {
    display: inline;
    margin-right: 5px;
}

input[type="submit"] {
    background-color: #00b4d8;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
}

input[type="submit"]:hover {
    background-color: #03045e;
}


    </style>
</head>

<body>
    <header>
        <h3>Form Biodata PNM</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>

        <p>
            <label for="nim">Nim: </label>
            <input name="nim"></input>
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="usia">Usia: </label>
            <input name="usia"></input>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input name="alamat"></input>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> LakiLaki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">
Perempuan</label>
        </p>
        <p>
            <label for="ttl">Tempat Tanggal Lahir: </label>
            <input name="ttl"></input>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>
    
    </body>
</html>