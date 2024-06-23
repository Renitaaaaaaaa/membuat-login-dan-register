<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        h2 {
            margin-top: 20px;
        }
        p {
            margin-bottom: 10px;
            overflow-wrap: break-word; 
            word-wrap: break-word;
            hyphens: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enkripsi Data</h1>
        <form action="{{ route('enkripsi') }}" method="post">
            @csrf
            <label for="text">Masukkan teks yang akan dienkripsi :</label>
            <input type="text" id="text" name="text">
            <button type="submit">Enkripsi</button>
        </form>

        @if(isset($encrypted) && isset($decrypted))
            <h2>Hasil Enkripsi:</h2>
            <p>{{ $encrypted }}</p>
        @endif
    </div>
</body>
</html>
