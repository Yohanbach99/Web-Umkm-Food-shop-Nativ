<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marirasa Shop</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.gstatic.com" rel="preconnect"></link>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300);
 
 body {
     background: #eee;
     margin:0;
     font-family: 'Open Sans', sans-serif;
 }
 .blog {
	float:left;
    margin-top: 100px;
    margin-right: 50px;
    text-align: justify;
    margin-left:25%;
   
}
 
.conteudo {
	width:600px;
	padding:25px;
	margin:25px auto;
	background: #fff;
	border:1px solid #dedede;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
}
 
.conteudo img {
	min-width: 650px;
	margin:0 0 25px -25px;
	max-width: 650px;
}
 
.conteudo h1 {
	padding:0;
	margin:0 0 15px;
	font-weight: normal;
	color: #666;
	font-family: Georgia;
}
 
.conteudo p:last-child {
	margin: 0;
}
 
.conteudo .continue-lendo {
	color:#000;
	transition: all 0.5s ease;
	text-decoration: none;
	font-weight: 700; 
}
 
.conteudo .continue-lendo:hover {
	margin-left:10px;
}
 
.post-info {
	float: right;
	font-size: 12px;
	margin: -10px 0 15px;
	text-transform: uppercase;
}
 
@media screen and (max-width: 600px) {
 
	
 
	.blog {
		width:90%;
        margin-top: 100px;
        margin-right: 10px;
        text-align: justify;
		margin-left: 5%;
       
	}
 
	.conteudo {
		float:inherit;
		margin:0 auto 25px;
		width:101%;
		border:1px solid #dedede;
		padding:5%;  
		background: #fff;
	}
 
	.conteudo img {
		max-width: 110%;
		margin:0 0 25px -5%;
		min-width: 110%;
	}
 
	.conteudo .continue-lendo:hover {
		margin-left:0;
	}
 
 
}
 
@media screen and (max-width: 460px) {
 
	
	.sidebar {
		display:none
	}
	.post-info {
		display:none;
	}
 
	.conteudo {
		margin:25px auto;
	}
 
	.conteudo img {
		margin:-5% 0 25px -5%;
	}			
} 
</style>
<body>
    <nav class="nav">
		<div class="nav-area">
			<a class="brand" href="">
				<span>Marirasa Shop </span>
			</a>
			<svg class="nav-burger" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
			<div class="nav-menu">
				<a href="index.php">Home</a>
				<a href="menu.php">Menu</a>
                <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a href="tabel_user.php">Riwayat</a>';
        }
        ?>
				<a href="About.php" class="active">About</a>
                 <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a href="logout.php">Logout</a>';
        } 
		// else {
        //     echo '<a href="login.php">Login</a>';
        // }
        ?>
            </nav>
        <div class="blog">
			<div class="conteudo">
				
				<h1> Tentang Marirasa Shop</h1>
				<hr>
                Toko online ini menawarkan beragam hidangan lezat dari berbagai kategori, memastikan semua pelanggan dapat menikmati pengalaman kuliner yang memuaskan Selain itu, tim kami siap memberikan layanan yang terbaik untuk pelanggan menggunakan bahan-bahan segar dan berkualitas tinggi dalam setiap hidangan yang kami sajikan tidak hanya itu, kami akan terus mengembangkan menu dengan menghadirkan inovasi dan variasi baru untuk memenuhi selera dan keinginan pelanggan setia kami
            </p><p><br>Website ini kami buat untuk memenuhi tugas kulia dari matakulia Kewirausahan, di sini kami di minta untuk membuat Aplikasi berbasis  Mobile Web atau aplikasi Mobile Apps penjualan dan berjualan di menggunakan Web Site ini. untuk
                penilain kami akan di ambil dari total penjualan kami.</p>					
				
			</div>
			<div class="conteudo">
				
				
				<h1>Sistem Pembayaran Marirasa</h1>
				<hr>
				<p>
                    Pelanggan dapat memilih antara dua opsi pembayaran yang nyaman, yaitu melalui transfer transaksi online atau dengan pembayaran tunai saat pesanan tiba di lokasi pengambilan.
                     Untuk pembayaran sistem online atau transaksi harap mengirim bukti resi ke kontak kami agar kami bisa konfirmasi bahwa anda telah membayarnya. 
                    </p></br><p>Bagi yang ingin cencel pesanannya agar dapat menghubungi kontak kami melalui nomor WhatsApp kami atau Instagram Marirasa. Sekian dan Terimakasih 😉😉💖</p>				
				<!-- <a href="#" class="continue-lendo">Selengkapnya →</a> -->
			</div>
             <!-- kontak intagram dan wa -->
         <div class="jotal">
            <div class="text">
               <h1> Contact ☎️</h1>
               <div class="pembungkus">
                 <div class="ikon">
                    <h1> <strong> <a href="https://instagram.com/marirasa_shop?igshid=OGQ5ZDc2ODk2ZA==">Inastagram<img src="asset/img/ig.jpg" alt="" sizes="" srcset=""></a></strong><a href="https://wa.me/+6282248941740"> <img src="asset/img/wa.png" alt=""> Whatsapp </a></h1>
                 </div>
           </div>
		</div>
        <script src="asset/script/main.js"></script>
</body>
</html>