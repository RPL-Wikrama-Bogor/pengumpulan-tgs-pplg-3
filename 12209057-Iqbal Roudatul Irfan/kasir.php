<!DOCTYPE html>
<html>
<head>
    <title>Program Kasir Sederhana</title>
    <style>
        :root {
            --primary-color: #17594A;
            --primary-hover-color: #176B87;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(https://img.freepik.com/free-vector/vector-cartoon-illustration-various-vegetables-wooden-background_1441-519.jpg?w=1380&t=st=1694576028~exp=1694576628~hmac=764251b15d03cec4ee7e9dd4792a2e42a79c04cd22a88bd6a3a1b4f991455e48);
            background-size: cover;
        }

        .container {
            background-color: #fff;
            max-width: 600px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="button"] {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="button"]:hover {
            background-color: var(--primary-hover-color);
        }

        p {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            color: #000;
        }

        .menu-input {
            margin-bottom: 20px;
        }

        .menu-input label {
            display: block;
        }

        .menu-input select,
        .menu-input input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .menu-input input[type="number"] {
            margin-top: 5px;
        }

        .menu-input input[type="button"] {
            margin-top: 5px;
        }

        .menu-item {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .menu-item span {
            font-weight: bold;
        }

        /* Gaya untuk tombol "Hitung Total Harga" */
        .total-button-container {
            text-align: center;
            margin-top: 20px;
        }

        .total-button {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .total-button:hover {
            background-color: var(--primary-hover-color);
        }

        /* Gaya untuk struk dan keterangan diskon */
        #struk-container {
            display: none;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        #daftar-pemesanan h3 {
            font-weight: bold;
        }

        #total-harga {
            text-align: right;
            margin-top: 10px;
        }

        #keterangan-diskon {
            font-style: italic;
            color: var(--primary-color);
            margin-top: 10px;
        }

        /* Gaya untuk struk pembelian */
        #daftar-pemesanan .menu-item {
            border: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-between;
        }

        #daftar-pemesanan .menu-item span {
            flex-basis: 60%;
            font-weight: normal;
        }

        #daftar-pemesanan .menu-item p {
            flex-basis: 40%;
            text-align: right;
            margin: 0;
        }

        pre {
        text-align: left;
        font-weight: bold;
        margin-top: 20px;
        color: #000; /* Warna teks hitam */
        background-color: #f0f0f0; /* Warna latar belakang teks */
        padding: 10px;
        border-radius: 5px;
        white-space: pre-wrap;
        border-bottom: 2px solid #000; /* Garis bawah */
        width: 40%; /* Menyesuaikan lebar struk dengan tanda "=" */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WARNAS JAYA ABADI</h1>
        <form method="POST" action="">
            <div id="menu-form">
                <label for="menu">Pilih Menu dan Jumlah Pesanan:</label>
                <div class="menu-input">
                    <select id="menu">
                        <?php
                        // Daftar menu beserta harga
                        $menu = [
                            "Nasi Goreng" => 15000,
                            "Mie Goreng" => 12000,
                            "Ayam Goreng" => 25000,
                            "Sate Ayam" => 20000,
                            "Es Teh" => 5000,
                        ];

                        // Menampilkan menu dalam dropdown
                        foreach ($menu as $item => $harga) {
                            echo '<option value="' . $item . '">' . $item . ' (Rp ' . number_format($harga, 0, ',', '.') . '/porsi)</option>';
                        }
                        ?>
                    </select>
                    <input type="number" id="jumlah" placeholder="Jumlah porsi">
                    <input type="button" value="Tambah Menu" onclick="tambahMenu()">
                </div>
            </div>
            <div id="pesanan-container"></div>
            <div class="total-button-container">
                <input type="button" class="total-button" value="Hitung Total Harga" onclick="hitungTotal()">
            </div>
        </form>
<center>
        <?php
        if (isset($_POST['pesanan'])) {
            $total_harga = 0;
            $jumlah_pemesanan = [];
            $pesanan = json_decode($_POST['pesanan'], true);

            foreach ($pesanan as $pesanan_item) {
                $item = $pesanan_item['menu'];
                $jumlah = intval($pesanan_item['jumlah']);

                if (array_key_exists($item, $menu)) {
                    $harga = $menu[$item];

                    if ($jumlah >= 5) {
                        // Berikan diskon 10% untuk pemesanan lebih dari atau sama dengan 5
                        $total_harga += $harga * $jumlah * 0.9;
                        $keterangan_diskon = "Anda mendapatkan diskon 10%!";
                    } else {
                        $total_harga += $harga * $jumlah;
                        $keterangan_diskon = "";
                    }

                    $jumlah_pemesanan[$item] = $jumlah;
                }
            }

            // Tampilkan struk pembayaran
            echo "<pre>";
            echo "==============================\n";
            echo "      WARNAS JAYA ABADI\n";
            echo "==============================\n";
            echo "Warnas Jaya Abadi\n";
            echo "Jl. Contoh No. 123\n";
            echo "------------------------------\n";
            echo "Daftar Pemesanan:\n";
            foreach ($jumlah_pemesanan as $item => $jumlah) {
                echo "$item: $jumlah porsi\n";
            }
            echo "------------------------------\n";
            echo "Total Harga: Rp " . number_format($total_harga, 0, ',', '.') . "\n";
            if ($keterangan_diskon) {
                echo "$keterangan_diskon\n";
            }
            echo "------------------------------\n";
            echo "Terima kasih!\n";
            echo "==============================\n";
            echo "</pre>";
        }
        ?>

        <!-- Gaya untuk struk pembayaran -->
        <div id="struk-container">
            <h2>Struk Pembayaran</h2>
            <pre>
                <!-- Struk pembayaran akan ditampilkan di sini -->
            </pre>
        </div>
        </center>
        <script>
            let pesanan = [];

            function tambahMenu() {
                let menu = document.getElementById("menu").value;
                let jumlah = document.getElementById("jumlah").value;

                if (menu && jumlah) {
                    pesanan.push({ menu, jumlah });
                    updatePesanan();
                } else {
                    alert("Input jumlah pesanan sebelum tambah menu.");
                }
            }

            function updatePesanan() {
                let pesananContainer = document.getElementById("pesanan-container");
                pesananContainer.innerHTML = "";

                pesanan.forEach(item => {
                    pesananContainer.innerHTML += `<div class="menu-item"><span>${item.menu}:</span> <p>${item.jumlah} porsi</p></div>`;
                });
            }

            function hitungTotal() {
                if (pesanan.length > 0) {
                    let form = document.querySelector("form");
                    let input = document.createElement("input");
                    input.setAttribute("type", "hidden");
                    input.setAttribute("name", "pesanan");
                    input.setAttribute("value", JSON.stringify(pesanan));
                    form.appendChild(input);
                    form.submit();
                } else {
                    alert("Tambahkan menu terlebih dahulu sebelum menghitung total.");
                }
            }
        </script>
    </div>
</body>
</html>
