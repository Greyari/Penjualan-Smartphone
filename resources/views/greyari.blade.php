<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>DI      :</th>
                <th>NAMA    :</th>
                <th>HARGA   :</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
                <tr>    
                    <td>{{$dataku['id']}}</td>
                    <td>{{$dataku['nama']}}</td>
                    <td>{{$dataku['harga']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>