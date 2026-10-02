<?php

$produk = [
    [
        "nama" => "Poco X6 Pro 5G",
        "kategori" => "HP",
        "harga" => 4500000,
        "diskon" => 0,
        "stok" => 5,
        "rating" => 4.8,
        "review" => 124,
        "gambar" => "https://th.bing.com/th/id/OIP.ggRmHPqCRmNnfJyvlp_TJwHaDo?w=300&h=150&c=6&r=0&o=7&dpr=1.8&pid=1.7&rm=3"
    ],
    [
        "nama" => "Samsung A56 5G",
        "kategori" => "HP",
        "harga" => 5300000,
        "diskon" => 10,
        "stok" => 8,
        "rating" => 4.9,
        "review" => 215,
        "gambar" => "https://th.bing.com/th?id=OIF.0btVU2RaVB8Vwaa6si%2bSQQ&w=321&h=181&c=7&r=0&o=7&dpr=1.8&pid=1.7&rm=3"
    ],
    [
        "nama" => "MSI GF63 Thin 11SC",
        "kategori" => "LAPTOP",
        "harga" => 12000000,
        "diskon" => 10,
        "stok" => 3,
        "rating" => 4.7,
        "review" => 89,
        "gambar" => "https://th.bing.com/th/id/OIP.DdIfMxlYUidgwIOLqvvYhwHaHe?w=187&h=189&c=7&r=0&o=7&dpr=1.8&pid=1.7&rm=3"
    ],
    [
        "nama" => "ThinkPad X1 Yoga 2nd Signature Edition",
        "kategori" => "LAPTOP",
        "harga" => 10000000,
        "diskon" => 10,
        "stok" => 5,
        "rating" => 4.6,
        "review" => 76,
        "gambar" => "https://th.bing.com/th/id/OIP.ue5OhbC-NAsm6DjMYeTB_AHaEK?w=294&h=180&c=7&r=0&o=7&dpr=1.8&pid=1.7&rm=3"
    ],
    [
        "nama" => "Kepala Charger POCO 67W",
        "kategori" => "AKSESORIS",
        "harga" => 150000,
        "diskon" => 0,
        "stok" => 12,
        "rating" => 4.7,
        "review" => 94,
        "gambar" => "https://th.bing.com/th/id/OIP.QHb4VLGMKP4JTa9Jmj5J_gHaHa?w=198&h=198&c=7&r=0&o=7&dpr=1.8&pid=1.7&rm=3"
    ],
    [
        "nama" => "Soundcore R50i",
        "kategori" => "AKSESORIS",
        "harga" => 350000,
        "diskon" => 0,
        "stok" => 10,
        "rating" => 4.8,
        "review" => 156,
        "gambar" => "https://th.bing.com/th/id/OIP.h_jkJ9m636Z3Hm8DvC9xOQHaHa?w=193&h=194&c=7&r=0&o=7&dpr=1.8&pid=1.7&rm=3"
    ]
];
$jumlahProduk = count($produk);

$totalStok = 0;
$jumlahPromo = 0;

foreach ($produk as $item) {
    $totalStok += $item["stok"];

    if ($item["diskon"] > 0) {
        $jumlahPromo++;
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabil Store | Katalog Produk</title>
    <link rel="stylesheet" href="modul1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<header class="navbar">
    <div class="container nav-content">
        <div class="logo">
            <span>Nabil</span> Store
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang</a>
        </nav>
    </div>
</header>

<section class="hero" id="home">
    <div class="container hero-content">
        <div class="hero-text">
            <p class="small-title">
                WELCOME TO
            </p>
            <h1>
                Nabil <span>Store</span>
            </h1>
            <p>
                Temukan berbagai perangkat dan aksesoris teknologi
                berkualitas dengan harga terbaik untuk kebutuhan
                sehari-hari kamu.
            </p>
            <div class="hero-buttons">
                <a href="#produk" class="hero-button">
                    <i class="bi bi-bag"></i> Lihat Produk
                </a>
            </div>
        </div>
    </div>
</section>

<section class="info-section">
    <div class="container">
        <div class="info-grid">
            <div class="info-box">
                <div>
                    <p>
                        Total Produk
                    </p>
                    <h2>
                        <?php echo $jumlahProduk; ?>
                    </h2>
                    <span>
                        Produk tersedia
                    </span>
                </div>
                    <div class="info-icon">
                        <i class="bi bi-bag-fill"></i>
                    </div>
            </div>
            <div class="info-box">
                <div>
                    <p>
                        Total Stok
                    </p>
                    <h2>
                        <?php echo $totalStok; ?>
                    </h2>
                    <span>
                        Unit tersedia
                    </span>
                </div>
                <div class="info-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
            </div>
            <div class="info-box promo-info">
                <div>
                    <p>
                        Produk Promo
                    </p>
                    <h2>
                        <?php echo $jumlahPromo; ?>
                    </h2>
                    <span>
                        Sedang diskon
                    </span>
                </div>
                <div class="info-icon">
                    <i class="bi bi-fire"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="produk-section" id="produk">
    <div class="container">
        <div class="section-title">
            <p>
                OUR PRODUCTS
            </p>
            <h2>
                Katalog Produk
            </h2>
            <span>
                Pilih perangkat teknologi yang kamu butuhkan.
            </span>
        </div>
        <div class="produk-grid" id="productGrid">
            <?php foreach ($produk as $item): ?>
                <?php
                    $diskon = 0;
                    if ($item["harga"] > 5000000) {
                        $diskon = 10;
                    }

                    if ($diskon > 0) {
                        $hargaSetelahDiskon =
                            $item["harga"] -
                            ($item["harga"] * $diskon / 100);
                    } else {
                        $hargaSetelahDiskon =
                            $item["harga"];
                    }
                ?>
                <div
                    class="product-card"
                    data-category="<?php echo $item["kategori"]; ?>"
                    data-name="<?php echo strtolower($item["nama"]); ?>"
                >
                    <div class="product-image">
                        <?php if ($diskon > 0): ?>
                            <div class="promo-badge">
                                <i class="bi bi-fire"></i> PROMO
                                -<?php echo $diskon; ?>%
                            </div>
                        <?php endif; ?>
                        <img
                            src="<?php echo $item["gambar"]; ?>"
                            alt="<?php echo $item["nama"]; ?>"
                        >
                        <?php if ($item["stok"] <= 3): ?>

                            <div class="stock-warning">

                                ⚡ Stok Terbatas

                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="product-content">
                        <span class="category">
                            <?php echo $item["kategori"]; ?>
                        </span>
                        <h3>
                            <?php echo $item["nama"]; ?>
                        </h3>
                        <div class="rating">
                            <span class="stars">
                                ★★★★★
                            </span>
                            <span class="rating-number">
                                <?php echo $item["rating"]; ?>
                            </span>
                            <span class="review">
                                (<?php echo $item["review"]; ?>)
                            </span>
                        </div>
                        <?php if ($diskon > 0): ?>
                            <div class="promo-label">
                                <i class="bi bi-fire"></i> Sedang Promo
                            </div>
                            <p class="old-price">
                                Rp
                                <?php
                                    echo number_format(
                                        $item["harga"],
                                        0,
                                        ",",
                                        "."
                                    );
                                ?>
                            </p>
                            <div class="price-row">
                                <p class="promo-price">
                                    Rp
                                    <?php
                                        echo number_format(
                                            $hargaSetelahDiskon,
                                            0,
                                            ",",
                                            "."
                                        );
                                    ?>
                                </p>
                                <span class="discount">
                                    -<?php echo $diskon; ?>%
                                </span>
                            </div>
                        <?php else: ?>
                            <p class="normal-price">
                                Rp
                                <?php
                                    echo number_format(
                                        $item["harga"],
                                        0,
                                        ",",
                                        "."
                                    );
                                ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($item["stok"] > 0): ?>
                            <div class="stock available">
                                ● Tersedia
                            </div>
                            <p class="stock-number">
                                Stok:
                                <?php echo $item["stok"]; ?>
                                unit
                            </p>

                            <button
                                class="buy-button"
                                onclick="beliProduk('<?php echo $item["nama"]; ?>')"
                            >
                                🛒 Beli Sekarang
                            </button>
                        <?php else: ?>
                            <div class="stock empty">
                                ● Stok Habis
                            </div>
                            <p class="stock-number">
                                Stok: 0
                            </p>
                            <button
                                class="buy-button disabled"
                                disabled
                            >
                                Stok Habis
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="about-section" id="tentang">
    <div class="container">
        <div class="about-content">
            <p class="small-title">
                ABOUT NABIL STORE
            </p>
            <h2>
                Belanja Teknologi
                Jadi Lebih Mudah
            </h2>
            <p>
                Nabil Store menyediakan berbagai macam alat elektronik dan aksesoris teknologi 
                berkualitas tinggi dengan harga yang murah.
            </p>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <h3>
            Nabil Store
        </h3>
        <p>
            Perangkat teknologi untuk kebutuhanmu.
        </p>
        <div class="footer-line"></div>

        <p class="copyright">

            &copy; 2026 Nabil Aditya Rahmani.
        </p>
    </div>
</footer>

<script>
function beliProduk(namaProduk) {
    alert(
        "🛒 " +
        namaProduk +
        " berhasil dipilih!"
    );
}
</script>
</body>
</html>