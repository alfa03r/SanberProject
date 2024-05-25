<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign up Form</h3>

    <form action="/welcome" method="POST">
        @csrf
        <label for="">First Name:</label><br><br>
        <input type="text" name="namaAwal" id="nama">
        <br><br>
        <label for="">Last name:</label><br><br>
        <input type="text" name="namaAkhir" id="nama2"><br><br>
        <label for="">Gender</label><br><br>
        <input type="radio">Male <br>
        <input type="radio">Female <br>
        <input type="radio">Other <br>
        <br>
        <label for="">Nationality:</label><br><br>
        <select name="nasionalis">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="filiphina">Filiphina</option>
            <option value="singapore">Singapore</option>
        </select><br><br>
        <label for="">Language Spoken:</label><br><br>
        <input type="checkbox" name="bahasa" id="">Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="">English <br>
        <input type="checkbox" name="bahasa" id="">Other <br><br>
        <label for="">Bio:</label><br><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
    <a href="/">Back</a>
</body>
</html>