<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard WMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f4f4f4;
        }

        h1 {
            margin-bottom: 10px;
        }

        nav {
            background: #2c3e50;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #34495e;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Dashboard Warehouse</h1>
    <p>Selamat datang di sistem manajemen gudang.</p>

    <nav>
        <a href="#">Dashboard</a>
        <a href="#">Data Barang</a>
        <a href="#">Stok</a>
        <a href="#">Inbound</a>
        <a href="#">Outbound</a>
    </nav>

    <div class="cards">
        <div class="card">
            <h2>120</h2>
            <p>Total Barang</p>
        </div>
        <div class="card">
            <h2>80</h2>
            <p>Stok Aman</p>
        </div>
        <div class="card">
            <h2>5</h2>
            <p>Stok Menipis</p>
        </div>
    </div>

    <h2>Daftar Barang</h2>

    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Lokasi</th>
        </tr>
        <tr>
            <td>Laptop Computer</td>
            <td>Elektronik</td>
            <td>120</td>
            <td>Rak A2</td>
        </tr>
        <tr>
            <td>Wireless Mouse</td>
            <td>Elektronik</td>
            <td>60</td>
            <td>Rak B1</td>
        </tr>
    </table>

</body>
</html>
