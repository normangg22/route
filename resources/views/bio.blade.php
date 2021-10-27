<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        @if ($nama == null)
            Silahkan isi biodata
        @elseif ($nama != null)
        <tr>
            <td>nama</td>
            <td>:</td>
            <td>{{$nama}}</td>
        </tr>
        @endif
        @if ($alamat != null)

        <tr>
            <br>
            <td>alamat</td>
            <td>:</td>
            <td>{{$alamat}}</td>
        </tr>
        @endif
        @if ($jk != null)

        <tr>
            <br>
            <td>jenis kelamin</td>
            <td>:</td>
            <td>{{$jk}}</td>
        </tr>
        @endif
        @if ($tb != null)

        <tr>
            <br>
            <td>tinggi badan</td>
            <td>:</td>
            <td>{{$tb}}</td>
        </tr>
        @endif
        @if ($bb != null)

        <tr>
            <br>
            <td>berat badan</td>
            <td>:</td>
            <td>{{$bb}}</td>
        </tr>
        @endif
    </fieldset>


</body>
</html>
