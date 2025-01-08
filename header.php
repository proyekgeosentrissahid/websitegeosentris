<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            margin-bottom: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            margin: 0;
            color: #333;
        }
        .header p {
            margin: 0;
            color: #666;
        }
        .business-segment {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .sidebar {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar li {
            margin-bottom: 10px;
        }
        .sidebar a {
            text-decoration: none;
            color: #007bff;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .content {
            flex: 3;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .content h2 {
            color: #333;
        }
        .content p {
            color: #666;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Segmen Bisnis</h1>
            <p>Semua perusahaan di Molindo Grup memiliki visi yang sama untuk menjadi perusahaan etanol terkemuka dan terbaik yang terintegrasi di Asia Pasifik, baik dalam kualitas produk maupun proses produksi dengan standar tertinggi.</p>
        </div>
        <div class="business-segment">
            <div class="sidebar">
                <ul>
                    <li><a href="#">PT Molindo Raya Industrial</a></li>
                    <li><a href="#">PT Molindo Inti Gas</a></li>
                    <li><a href="#">PT Sumber Kita Indah</a></li>
                </ul>
            </div>
            <div class="content">
                <img src="path/to/your/image.jpg" alt="Fasilitas PT Molindo Inti Gas">
                <h2>PT Molindo Inti Gas</h2>
                <p><strong>CO2 Gas Food Grade dan Dry Ice</strong></p>
                <p>PT Molindo Inti Gas (MIG) didirikan pada tahun 1995, bergerak di bidang produksi dan perdagangan CO2 gas food grade berkualitas tinggi dan dry ice dengan kapasitas produksi:</p>
                <ul>
                    <li>16.372 ton CO2 cair per tahun</li>
                    <li>1.260 ton dry ice per tahun</li>
                </ul>
                <a href="#" class="button">Lebih lanjut</a>
            </div>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Molindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }

        header img {
            height: 40px;
        }

        .content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .product-list {
            margin-top: 20px;
        }

        .product-list h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .product-list a {
            text-decoration: none;
            color: #007BFF;
        }

        .illustration {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Molindo Logo">
        <nav>
            <a href="#">Tentang Kami</a>
            <a href="#">Segmen Bisnis</a>
            <a href="#">Produk</a>
            <a href="#">Tata Kelola Perusahaan</a>
            <a href="#">Hubungan Investor</a>
            <a href="#">Karir</a>
            <a href="#">Kontak Kami</a>
        </nav>
    </header>

    <div class="content">
        <h1>Produk</h1>
        <p>
            Produk-produk Molindo dipasarkan di dalam dan luar negeri dengan basis pelanggan dari beragam industri yaitu makanan dan minuman, farmasi, kosmetik, rokok, rumah sakit, mebel, tinta, percetakan, bahan bakar, dan pengelasan. Selain itu, etanol merupakan bahan penting dalam produksi <em>hand sanitizer</em> dan disinfektan yang terbukti mampu menghancurkan virus Covid-19.
        </p>

        <div class="illustration">
            <img src="illustration.png" alt="Ilustrasi Produk Molindo">
        </div>

        <div class="product-list">
            <h2>Produk</h2>
            <a href="#">Etanol</a>
        </div>
    </div>
</body>
</html>
