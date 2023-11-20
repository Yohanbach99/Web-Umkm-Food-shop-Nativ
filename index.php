<?php
include "config.php";
session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marirasa Shop</title>
    <!-- font -->
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
<!--    <link rel="stylesheet" href="asset/css/style.css">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Permanent+Marker&display=swap" rel="stylesheet">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">-->
<!--	<link href="https://fonts.gstatic.com" rel="preconnect"></link>-->
<!--	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet"></link>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">-->
</head>
<style>
   <!-- Our CSS -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Gabarito&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Kay+Pho+Du:wght@400;500&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap');
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #dedede;
        }

        .container {
          margin-top: -1%;
            max-width: 100%;
            width: 70%;
            padding: 2px;
            height: 40p% ;
            
        }
        .teks {
          margin-top: -1%;
          align-items: center;
          text-align: justify;
          /* padding-top:4px ;
          max-width: 100%;
          width: 70%;
          padding-top: 20px; */
          
        }
        .teks h1 {
          font-family: 'Young Serif', serif;
          margin-top: -2%;
          color: #000;
          padding: 10px;
          
        }
        .teks h2 {
          margin-top: -2%;
          font-weight: bold;
          font-style: italic;
          padding: 10px;
          font-size:22px;
        }
        .teks p {
          margin-top: -1%;
          color: #000;
          padding: 10px;
        }
        

        .slider .slick-slide {
            border: solid 1px #000;
        }

        .slider .slick-slide img {
            width: 100%;
        }
        .slider img {
        font-size: 30px;
        width: 200%;
        height: 400px ;

        }
      
        @media only screen and (max-width: 600px) {
          .container {
            max-width: 100%;
            width: 85%;
            padding: 2px;
            height: 40p% ;
            
        }
        .teks {
          margin-top: -1%;
          align-items: center;
          text-align: justify;
          
        }
        .teks h1 {
          font-family: 'Young Serif', serif;
          margin-top: -7%;
          color: #000;
          padding: 10px;
          
          font-size:30px;
        }
        .teks h2 {
          margin-top: -2%;
          margin-top: -7%;
          font-weight: bold;
          font-style: italic;
          padding: 10px;
          font-size:12px;
        }
        .teks p {
          margin-top: -6%;
          color: #000;
          padding: 10px;
        }
        
            .container h1{
                padding-top: 3px;
                font-size: 20px;
            }
            .slider img {
            font-size: 30px;
            width: 200%;
            height: 180px ;
            padding: 5px;

        }
        
      }
/* //gambar */
 .gambar-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
  margin: 20px;
}
.gambar {
  width: 70%;
  max-width: 300px; /* Sesuaikan dengan lebar maksimum yang Anda inginkan */
  height: 183px;
  padding-top:45px ;
  margin: 10px;
  border-radius: 6px;
  background-color: black;
padding: 3px;
}
@media only screen and (max-width: 600px) {
  .gambar {
    width: 70%;
    max-width: 90px; /* Sesuaikan dengan lebar maksimum yang Anda inginkan */
    height: 53px;
    margin: 5px;
    border-radius: 6px;
    background-color: black;
    padding: 1px;
  }
  .gambar-container{
    margin-top: 5px ;
    padding-top:5px ;
  }
  .garis {
  margin-top: 5%;
  width: 100%; /* Panjang garis */
  height: 5px; /* Lebar garis */
  background-color: black; /* Warna garis (dalam contoh ini hitam) */
}
}

.garis {
  margin-top: 5%;
  width: 100%; /* Panjang garis */
  height: 5px; /* Lebar garis */
  background-color: black; /* Warna garis (dalam contoh ini hitam) */
}


.containeer {
  position: relative;
  overflow: hidden;
  width: 100%;
  max-width: 1100px;
  padding: 20px;
  height: auto;
  margin: 50px auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* Membuat 2 kolom */
  gap: 20px; /* Memberi jarak antara konten */
}

.content {
  /* border: 1px solid #ccc; */
  border: 1px solid black;
  padding: 2px;
  text-align: center;
  height:95%;

  
}

.content img {
  width: 90%;
 height: 70%;
  padding-top:4px ;
  margin: 10px;
  border-radius: 6px;
  max-width: 300px; /* Atur lebar maksimum konten sesuai kebutuhan Anda */
  margin: 0 auto; /* Untuk memusatkan konten */

  padding: 10px;
  text-align: center;

}

.content h1 {
  color: #333;
  font-size: 20px;
}

.content p {
  color: #666;
  font-size: 14px;
}
@media only screen and (max-width: 600px) {
  .containeer {
    margin-top: -7px; 
  width: 100%;
  max-width: 1000px;
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Membuat 2 kolom */
  gap: 10px; /* Memberi jarak antara konten */
}
.content {
   
  /* border: 1px solid #ccc; */
  border: 1px solid black;
  padding: 1px;
  text-align: center;
  height: 90%;

}

.content img {
  width: 100%;
 height :90px;
  padding-top:4px ;
  margin: 10px;
  border-radius: 6px;
  max-width: 300px; /* Atur lebar maksimum konten sesuai kebutuhan Anda */
  margin: 0 auto; /* Untuk memusatkan konten */

  padding: 10px;
  text-align: center;

}

.content h1 {
  color: #333;
  font-size: 13px;
}

.content p {
  color: #666;
  font-size: 14px;
}

}




/* kontak  */
/* tampilan home */
.pembungkus {
 
}
.pembungkus h1 {
  position: relative; 
  display: inline-block;}
.pembungkus h1:before {
  content: " ";
  position: absolute;
  border-bottom: 1px solid black;
  width: 100px;
  left: -110px;
  top: 50%;
}
.pembungkus h1:after {
  content: "";
  position: absolute;
  border-bottom: 1px solid black;
  width: 100px;
  right: -110px;	
  top: 50%;

}
.ikon img {
  width: 20px; 
  height: auto; 
}
.ikon h1 {
  font-size: 15px;
}
.text {
  text-align: center;
  padding-top:-50px
  
}
.jotal {
  padding-top:-50px;
}
@media only screen and (max-width: 600px) {
  .pembungkus h1 {
  position: relative; 
  display: inline-block;
 
}
.text h1 {
  font-size: 20px;
}
.pembungkus h1:before {
  content: " ";
  position: absolute;
  border-bottom: 1px solid black;
  width: 100px;
  left: -110px;
  top: 50%;
}
.pembungkus h1:after {
  content: "";
  position: absolute;
  border-bottom: 1px solid black;
  width: 100px;
  right: -110px;	
  top: 50%;

}
.ikon img {
  width: 20px; 
  height: auto; 
}
.ikon h1 {
  font-size: 10px;
}
.text {
  text-align: center;
  font-size: 10px;
  padding-top: -30px;
  
}
.jotal {
  padding-top:-32px;
}
}  
</style>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-3">
  <a class="navbar-brand" href="#">Marirasa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
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

        <div class="teks">
      <h1> Marirasa Shop<br> Manokwari</h1>
            <p> Bagi Pace, Mace, Ade-ade, dan Kaka-kaka yg ingin memesan menu dari kami harap "Register" terlebih dahulu bagi yang belum memiliki akun di Marirasa Shop. 
               <br>  <a href="about.php">Cara register akun di Marirasa Shop </a>
            </p>
      </div>
    <div class="container">
        
        <div class="slider">
            <div>
                <a href="#">
                    <img src="asset/img/logo.png" alt="Image 1">
                </a>          
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/ayamm.jpg" alt="Image 2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/ayamijo.webp  " alt="Image 2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/lalapan1.jpg" alt="Image 2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/mie.jpg" alt="Image 3">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/ja.jpg" alt="Image 3">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/bnn.jpeg" alt="Image 3">
                </a>            
            </div>
           
            <div>
                <a href="#">
                    <img src="asset/img/coklat.jpg" alt="Image 4">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/taro.jpg" alt="Image 5">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="asset/img/pure.webp" alt="Image 5">
                </a>            
            </div>
        </div>
    </div>


<!-- membuat garis -->

<div class="garis"></div>

<!-- Konten untuk setiap gambar -->
 <div class="containeer">
  <div class="content">
    <img src="asset/img/ayamm.jpg" alt="Deskripsi Gambar 1">
    <h1>Ayam Gebrek <br> sambal Merah</h1>
    <p>Rp.25.000</p>
  </div>
  <div class="content">
    <img src="asset/img/ayamijo.webp" alt="Deskripsi Gambar 2">
    <h1>Ayam Gebrek <br> sambal Ijo</h1>
    <p>Rp. 25.000</p>
  </div>

  <div class="content">
    <img src="asset/img/lalapan1.jpg" alt="Deskripsi Gambar 3">
    <h1>Lalapan Ayam</h1>
    <p>Rp.30.000</p>
  </div>
  <div class="content">
    <img src="asset/img/mie.jpg" alt="Deskripsi Gambar 3">
    <h1>Mie Goreng <br> Pedis</h1>
    <p>Rp.15.000</p>
  </div>
  <div class="content">
    <img src="asset/img/ja.jpg" alt="Deskripsi Gambar 3">
    <h1>Jasuke</h1>
    <p>Rp. 15.000</p>
  </div>
  <div class="content">
    <img src="asset/img/bnn.jpeg" alt="Deskripsi Gambar 3">
    <h1>Banana Chips</h1>
    <p>Rp. 15.000</p>
  </div>
  <div class="content">
    <img src="asset/img/taro.jpg" alt="Deskripsi Gambar 3">
    <h1>Es Lumut <br> Rasa Taro</h1>
    <p>Rp. 10.000</p>
  </div>
  <div class="content">
    <img src="asset/img/coklat.jpg" alt="Deskripsi Gambar 3">
    <h1>Es Lumut <br> Rasa Coklat</h1>
    <p>Rp. 10.000</p>
  </div>
  <div class="content">
    <img src="asset/img/pure.webp" alt="Deskripsi Gambar 3">
    <h1>Air Nestle Botol</h1>
    <p>Rp. 5.000</p>
  </div>
      </div>
       <!-- kontak intagram dan wa -->
       <div class="jotal">
            <div class="text">
               <h1> Contact ☎️</h1>
               <div class="pembungkus">
                 <div class="ikon">
                    <h1> <strong> <a href="https://instagram.com/marirasa_shop?igshid=OGQ5ZDc2ODk2ZA==">Inastagram<img src="asset/img/ig.jpg" alt="" sizes="" srcset=""></a></strong><a href="https://wa.me/+6282248941740"> <img src="asset/img/wa.png" alt=""> Whatsapp </a></h1>
                    <br></br>
                 </div>
      </div>


      
  
   
  <!-- <div class="content">
    <img src="asset/img/coklat.jpg" alt="Deskripsi Gambar 3">
    <h1>Judul Konten 3</h1>
    <p>Ini adalah paragraf teks yang mendeskripsikan konten yang terdapat di dalam gambar 3.</p>
  </div> -->

  <!-- Ulangi hingga gambar ke-10 -->
</div>



    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500
            });
        });




        // Select relevant HTML elements
const filterButtons = document.querySelectorAll("#filter-buttons button");
const filterableCards = document.querySelectorAll("#filterable-cards .card");

// Function to filter cards based on filter buttons
const filterCards = (e) => {
    document.querySelector("#filter-buttons .active").classList.remove("active");
    e.target.classList.add("active");

    filterableCards.forEach(card => {
        // show the card if it matches the clicked filter or show all cards if "all" filter is clicked
        if(card.dataset.name === e.target.dataset.filter || e.target.dataset.filter === "all") {
            return card.classList.replace("hide", "show");
        }
        card.classList.add("hide");
    });
}

filterButtons.forEach(button => button.addEventListener("click", filterCards));
    </script>
    <script src="asset/script/main.js"></script>


            <!-- untuk texts -->
   <!-- <section class="hero">-->
   <!--     <div class="hero-text"><br></br>-->
   <!--         <h2>#Welcome</h2>-->
   <!--         <h2>MariRasa Shop</h2>-->
   <!--         <h1>Manokwari</h1>-->
   <!--         Selamat datang di MariRasa Shop di sini kami menyediakan beberapa menu makanan dan minuman.</p>-->
   <!--         <p> Bagi Pace, Mace, Ade-ade, dan Kaka-kaka yg ingin memesan menu dari kami harap masuk ke dalam halaman "Menu" terlebih dahulu, -->
   <!--             daftar kam punya akun lalu pilih menu apa saja yang kam mau pesan. dan ketika sudah pesan -->
   <!--             dan sudah bayar harap segera kontak kami agar kami bisa konfirmasi pesanan yang kam mau beli. sekian dan terimaksih-->
   <!--         </p>-->
            
   <!--         <h4>Sistem Pemesanan Marirasa Shop<h4>-->
   <!--             <p>Sistem pemesanan menu dari kami Estimasi waktu pengantaran satu hari atau lebih setelah pemesanan. Sekian dan-->
   <!--             Terimakasih..<a href="About.php" class="continue-lendo"><p>Selengkapnya →</a>-->
			<!--</div>-->
   <!--     </div>-->
   <!--     <div class="hero-img">-->
   <!--         <img src="asset/img/logo.png" >-->
   <!--     </div>-->
         <!-- kontak intagram dan wa -->
   <!--      <div class="jotal">-->
   <!--         <div class="text">-->
   <!--            <h1> Contact ☎️</h1>-->
   <!--            <div class="pembungkus">-->
   <!--              <div class="ikon">-->
   <!--                 <h1> <strong> <a href="https://instagram.com/marirasa_shop?igshid=OGQ5ZDc2ODk2ZA==">Inastagram<img src="asset/img/ig.jpg" alt="" sizes="" srcset=""></a></strong><a href="https://wa.me/+6282248941740"> <img src="asset/img/wa.png" alt=""> Whatsapp </a></h1><br></br><br></br>-->
   <!--              </div>-->
   <!--        </div>-->
   <!--               </section>-->

	<script src="asset/script/main.js"></script>
</body>
</html>