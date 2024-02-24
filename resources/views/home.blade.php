<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: green;
        }

        li{
            color: blue;
        }
    </style>
</head>
<body>
    <main>
        <h1>SELAMAT DATANG DI HOME {{$nama}}</h1>
        <ul>
            <li>NIM = 3312311133</li>
            <li>KELAS = IF 2C MALAM</li>
            <li>PERKERJAAN = {{$pekerjaan}}</li>
        </ul>
        <a href="{{route('ayam')}}">klik to contact</a>
    </main>
</body>
</html>