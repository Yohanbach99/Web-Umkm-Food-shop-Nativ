<?php
include "config.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit; 
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marirasa Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">

    <!--<link rel="stylesheet" href="asset/css/style.css">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Permanent+Marker&display=swap" rel="stylesheet">-->

<!--	<link href="https://fonts.gstatic.com" rel="preconnect"></link>-->
<!--	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet"></link>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">-->
<!-- font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Edu+TAS+Beginner&family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Courgette&family=Gabarito&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&family=Young+Serif&display=swap" rel="stylesheet">
    <!-- untuk navbar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Our CSS -->
    
</head>
<style>
 .grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* 4 kotak per baris */
  grid-gap: 10px;
  margin: 20px auto; /* Memberikan margin agar terpusat di halaman */
  max-width: 1000px; /* Menentukan lebar maksimum agar konten tidak terlalu melebar */
}
/* CSS */
article {
  background-color: orange; /* Warna latar belakang */
  border-radius: 8px; /* Sudut elemen */
  padding: 15px; /* Ruang di dalam artikel */
}

.kontent {
  display: grid;
  grid-gap: 2px; /* Jarak 2px */
}
.kontent h3 {
  font-family: 'Pacifico', cursive;
  font-size:20px;
  text-align:center;
}
.kontent p {
  
  font-family: 'Cookie', cursive;
  font-size:20px;
  text-align:center;
}

.kontent img {
  width: 100%; /* Untuk memastikan gambar memenuhi lebar kotak */
}

.kontent h3, .kontent p, .kontent input {
  margin: 0; /* Hilangkan margin bawaan */
}
@media (max-width: 600px) {
  .grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* 4 kotak per baris */
  grid-gap: 10px;
  margin: 20px auto; /* Memberikan margin agar terpusat di halaman */
  max-width: 1000px; /* Menentukan lebar maksimum agar konten tidak terlalu melebar */
}
/* CSS */
article {
  background-color: orange; /* Warna latar belakang */
  border-radius: 8px; /* Sudut elemen */
  padding: 15px; /* Ruang di dalam artikel */
}
}


/* button */
#checkout-button {
  display: block;
  width: 200px;
  height: 50px;
  margin: 0 auto;
  background-color: orange;
  color: black;
  font-size: 18px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s;
}

#checkout-button:hover {
  background-color: #efc258;
}
.gerak {
  background-color: orange;
  font-family: 'Pacifico', cursive;
  font-size:20px;
  height: 10%;
}
@media (max-width: 600px) {
  article {
  background-color: orange;
  border-radius: 8px;
  padding: 5px;
  
  display: flex;
  flex-direction: column;
  align-items: center;
}



}

.navbar-brand {
  font-family: 'Pacifico', cursive;
  font-size:30px;
}

/* .item-checkbox {
  display: none; 
} */
    </style>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-3">
  <a class="navbar-brand" href="#">Marirasa Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="menu.php">Menu</a>
      </li>
      <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a class="nav-link" href="tabel_user.php">Riwayat</a>';
        }
        ?>
				<a  class="nav-link" href="About.php">About</a>
                 <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a  class="nav-link" href="logout.php">Logout</a>';
        } else {
            echo '<a class="nav-link" href="login.php">Login</a>';
        }
        ?>
        </nav>


        </div>
      </li>
    </ul>
  </div>
</nav>
            <div class="container">
                <main class="grid">
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/ayamm.jpg"  width="190px" height="150px">
                    <div class="kontent">
                        <h3>Ayam Gebrek Sambal Merah</h3>
                        <p>Rp 25.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/ayamijo.webp"  width="190px" height="150px">
                    <div class="kontent">
                        <h3>Ayam Gebrek Sambal Ijo</h3>
                        <p></p>
                        <p>Rp 25.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/lalapan1.jpg" width="190px" height="150px">
                    <div class="kontent">
                        <h3>Lalapan Ayam</h3>
                        <p></p>
                        <p>Rp 30.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/mie.jpg"  width="190px" height="150px">
                    <div class="kontent">
                        <h3>Mie Goreng Pedis</h3>
                        <p></p>
                        <p>Rp 15.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/ja.jpg" width="190px" height="150px">
                    <div class="kontent">
                        <h3>Jasuke</h3>
                        <p></p>
                        <p>Rp 15.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/bnn.jpeg" width="190px" height="150px">
                    <div class="kontent">
                        <h3>Banana Chips</h3>
                        <p></p>
                        <p>Rp 10.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article>
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/taro.jpg" width="190px" height="150px">
                    <div class="kontent">
                        <h3>Es Lumut Rasa Tarok</h3>
                        <p></p>
                        <p>Rp 10.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article>  
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/matcha.jpg"  width="190px" height="150px">
                    <div class="kontent">
                        <h3>Es Lumut Rasa Matcha</h3>
                        <p></p>
                        <p>Rp 10.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   <article>
                   <div class="konten" onclick="toggleCheckbox(this)">
                   <input type="checkbox" class="item-checkbox">
                    <img src="asset/img/clt.jpg" width="190px" height="150px">
                    <div class="kontent">
                        <h3>Es Lumut Rasa Coklat</h3>
                        <p></p>
                        <p>Rp 10.000</p>
                        <p>jumlah</p><input type="number" class="item-quantity" value="0">
                    </div>
                   </article> 
                   
                   <!--<div class="konten" onclick="toggleCheckbox(this)">-->
                   <!--<input type="checkbox" class="item-checkbox">-->
                   <!-- <img src="asset/img/str.jpg" width="190px" height="150px">-->
                   <!-- <div class="kontent">-->
                   <!--     <h3>Es Lumut</br>Rasa Strobery</h3>-->
                   <!--     <p></p>-->
                   <!--     <p>Rp 10.000</p>-->
                   <!--     <p>jumlah</p><input type="number" class="item-quantity" value="0">-->
                   <!-- </div>-->
                   <!--</article> -->
                   <!--<article>-->
                   <!--<div class="konten" onclick="toggleCheckbox(this)">-->
                   <!--<input type="checkbox" class="item-checkbox">-->
                   <!-- <img src="asset/img/t.jpg"  width="190px" height="150px">-->
                   <!-- <div class="kontent">-->
                   <!--     <h3>Es Lumut</br>Rasa Taro</h3>-->
                   <!--     <p></p>-->
                   <!--     <p>Rp 10.000</p>-->
                   <!--     <p>jumlah</p><input type="number" class="item-quantity" value="0">-->
                   <!-- </div>-->
                   <!--</article> -->
                   <!--<article>-->
                   <!--<div class="konten" onclick="toggleCheckbox(this)">-->
                   <!--<input type="checkbox" class="item-checkbox">-->
                   <!-- <img src="asset/img/coklat.jpg"  width="190px" height="150px">-->
                   <!-- <div class="kontent">-->
                   <!--     <h3>Es Lumut botol</br>Rasa Coklat</h3>-->
                   <!--     <p></p>-->
                   <!--     <p>Rp 15.000</p>-->
                   <!--     <p>jumlah</p><input type="number" class="item-quantity" value="0">-->
                   <!-- </div>-->
                   <!--</article> -->
                </main>
            </div>
             <button  id="checkout-button"><center>Bayar </center></button><br>
            <div class="gerak">
            <marquee <p>Selamat Berkunjung Ke Marirasa Shop Manokwari dan selamat memilih menu dari kami .... Terimakasih telah berkunjung🙏🙏🙏❤️😍</p></marquee></div>
            <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-modal">&times;</span>
        <h2>Rincian Pesanan</h2>
        <form id="order-form" action="konfirmasi_pesanan.php" method="post">
            <ul id="order-list"></ul>
            <p>Total Harga: <span id="total-price">Rp. 0,00</span></p>
        
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required><br>

            <label for="nomor-hp">Nomor HP:</label>
            <input type="text" id="nomor-hp" name="nomor_hp" required><br>

            <button id="confirm-payment">Pesan</button>
        </form>
    </div>
</div>


            
<script>    
document.addEventListener("DOMContentLoaded", function () {
    var checkboxes = document.querySelectorAll(".item-checkbox");
    var quantities = document.querySelectorAll(".item-quantity");
    var orderList = document.getElementById("order-list");
    var totalPrice = document.getElementById("total-price");
    var checkoutButton = document.getElementById("checkout-button");
    var modal = document.getElementById("myModal");
    var closeButton = modal.querySelector(".close");
    var confirmPaymentButton = document.getElementById("confirm-payment");

    var kontens = document.querySelectorAll(".konten");
    kontens.forEach(function (konten) {
        var image = konten.querySelector("img");
        image.addEventListener("click", function () {
            toggleCheckbox(konten);
        });
    });

    function toggleCheckbox(element) {
        var checkbox = element.querySelector(".item-checkbox");
        checkbox.checked = !checkbox.checked;
    }

    var selectedItems = [];

    checkoutButton.addEventListener("click", function () {
        var total = 0;
        selectedItems = [];
        checkboxes.forEach(function (checkbox, index) {
            if (checkbox.checked) {
                var konten = checkbox.parentElement;
                var namaMakanan = konten.querySelector("h3").textContent;
                var hargaPerItem = parseInt(konten.querySelector(".kontent p:nth-child(3)").textContent.match(/\d+/));
                var quantity = parseInt(quantities[index].value);
                var subtotal = hargaPerItem * quantity;

                selectedItems.push({ nama: namaMakanan, hargaPerItem: hargaPerItem, quantity: quantity, harga: subtotal });
                total += subtotal;
            }
        });

        orderList.innerHTML = "";
        selectedItems.forEach(function (item) {
            var listItem = document.createElement("li");
            listItem.textContent = item.nama + " (Harga Satuan: Rp. " + item.hargaPerItem + ".000,00, Quantity: " + item.quantity + ", Total Harga : Rp. " + item.harga + ".000,00)";
            orderList.appendChild(listItem);
        });

        totalPrice.textContent = " Rp. " + total + ".000,00";

        modal.style.display = "block";
    });

    closeButton.addEventListener("click", function () {
        modal.style.display = "none";
    });

    var form = document.getElementById("order-form");
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        var formData = new FormData(form);
        var nama = formData.get("nama");
        var alamat = formData.get("alamat");
        var nomorHp = formData.get("nomor_hp");

        selectedItems.forEach(function (item, index) {
            formData.append("nama_produk[]", item.nama);
            formData.append("jumlah[]", item.quantity);
            formData.append("total_harga[]", item.harga);
        });

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "konfirmasi_pesanan.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert("Pesanan Anda telah berhasil disimpan.");
                window.location.href = "tabel_user.php";
            }
        };
        xhr.send(formData);

modal.style.display = "none";
form.reset();
checkboxes.forEach(function (checkbox) {
    checkbox.checked = false;
});
});
});
</script>
<script src="asset/script/main.js"></script>
</body>
</html>