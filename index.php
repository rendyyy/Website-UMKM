<?php 

require 'admin/koneksi.php';

$header = mysqli_query($conn, "SELECT * FROM header");
$h = mysqli_fetch_array($header);

// $menu = mysqli_query($conn, "SELECT * FROM menu");
// $me = mysqli_fetch_array($menu);

$testimoni = mysqli_query($conn, "SELECT * FROM testimoni");
$t = mysqli_fetch_array($testimoni);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dapur Mindri</title>
	<link rel="icon" type="image/png" href="images/logo_mindri.png">
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Jual Makanan dan Minuman Dapur Mindri">
    <meta name="author" content="Rendy Feriansyah">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
 
<!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<style type="text/css">

  </style>
</head>
<body>

<div class="ppp headerP" style="z-index: 30;">
    <div class="ccc header">
<div class="logo">
    <img src="images/logo_mindri.png" alt="Logo">
</div>
<nav class="navlinks">
    <a href="#home">Home</a>
    <a href="#menu">Menu</a>
    <a href="#contact">Contact</a>


</nav>


<div class="menu__mobile">
	<div class="menu__mobile_button">
		<span></span>
	</div>
</div>

    </div>
</div>



<div class="ppp heroP" id="home">
    <div class="ccc hero">
<div class="heroTXT">
    <div class="ribbon" ><h3>Dapat Melakukan Pemesanan</h3></div>
    <h1 ><?= $h['judul']  ;?></h1>
    <ul>
        <li><i class="fas fa-check-circle"></i> <span>Rasa Nikmat</span></li>
        <li><i class="fas fa-check-circle"></i> <span>Banyak Manfaat</span></li>
        <li><i class="fas fa-check-circle"></i> <span>100% Halal</span></li>
    </ul>
    <a href="https://api.whatsapp.com/send?phone=6281291987951" target="blank" class="orderBtn"><i class="far fa-shopping-cart"></i> <span>Pesan Sekarang (Whatsapp)</span> <span class="bar"></span></a>

</div>


<div class="heroIMG" id="scene">
<?= "<img src='images/header/".$h['gambar']."'style= width:90%;'>"?>


</div>
    </div>
</div>




<div class="ppp" style="overflow: visible;">
    <div class="ccc cards">
        <div class="card">
            <img src="images/jipang1.png" class="pizzaaa">
        <div class="redtop"><span class="title">Makanan</span></div>
        <div class="whitebottom"></div>
    </div>


<div class="card">
    <img src="images/lemon.png" class="pizzaaa softDrink">
<div class="redtop"><span class="title">Minuman</span></div>
<div class="whitebottom"></div>

</div>



<div class="card">
    <img src="images/oysto.png" class="pizzaaa fries">
<div class="redtop"><span class="title">Bumbu Dapur</span></div>
<div class="whitebottom"></div>


</div>

    </div>
</div>



<div class="ppp" id="menu">
    <div class="ccc Bsec">
       
<div class="bsecTitle">

    <h1>DAFTAR MENU</h1>
</div>

<div class="btns">
    <button class="btna activebtn" data-filter="all"><span>Semua</span></button>
    <button class="btna"  data-filter="makanan" id="makanan"><span>Makanan</span></button>
    <button class="btna"  data-filter="minuman" ><span>Minuman</span></button>
    <button class="btna"  data-filter="bumbu"><span>Bumbu Dapur</span></button>
</div>

<div class="grids">
<?php
    $menu= mysqli_query($conn, "SELECT * FROM menu");
    while($m = mysqli_fetch_array($menu)){
?>
    <div class="grid <?= $m['kategori'];?>">
        <div class="btnfullheight"><a href="" data-bs-toggle='modal' data-bs-target='#lihatModal' id="lihat"  data-id="<?=$m['id_menu']; ?>" data-judul="<?=$m['judul']; ?>" data-gambar="<?=$m['gambar']; ?>" data-deskripsi="<?=$m['deskripsi']; ?>" data-harga="<?=$m['harga']; ?>" data-kategori="<?=$m['kategori']; ?>" class="btnshow"><div class="bar2"></div><i class="far fa-search-plus"></i> <span>Lihat Produk</span></a></div>
            <div class="top">
            <div class="top-img">
            <?= "<img src='images/menu/".$m['gambar']."'style= width:150px;'>"?>
            </div>
            </div>

        <div class="bottom">
           <div class="hhhjh">
            <div class="gridtitle"><?= $m['judul'];?></div>
                
                <div class="bottomflex">
                    <div class="flexb"><span><?= $m['harga'];?></span></div>
                </div>
           </div>
        </div>
        </div>
        <?php 
          }
        ?>

    </div>
</div>

        



<!-- Menu Modal 1 -->

<div id="lihatModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">            
            <form method="post">
		    <div class="modal-body">
            <input type="hidden" name="idMenu" id="idMenu">  
            
            <div class="form-group" >
				<input name="judul" id="judul" type="text" class="form-control-lg center-block"   disabled>
			</div>
            <div class="form-group" align="center">
	
                 <div style="padding-bottom:5px">
                    <img src="" width="70%" id="image">
                    </div>
			</div>
            <div class="form-group">
				
				<textarea class="form-control" id="deskripsi" rows="10" disabled></textarea>
			</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary"data-bs-dismiss="modal">Keluar</button>
							</div>
						</form>
					</div>
				</div>
			</div>

        </div>



<div class="ppp parallax">
    <div class="ccc parallaxFlex">
        <div class="paraText">
            <h1>Profil <span style="color: #FCB302;">Dapur Mindri</span> Yang Sudah Mendapat Perizinan dan bersertifikat <span style="color: #FCB302;"> Halal</span> </h1>
            
        </div>

        <div class="contfImg">
            <img src="images/profil.png" class="bigpizza">
        </div>

    </div>
</div>



<div class="ppp testimonials">

    <div class="ccc testimonialsmain">
        <div class="testimonialsImg" id="last">
            <img src="images/testimonial-client.png">
            <div class="chililayer" data-depth="0.4"><img src="images/slider_shape_01.png" class="newchili"></div>
            
            <div class="leaveslayer" data-depth="0.2"><img src="images/leave5.png" class="newleaves"></div>

        </div>

        <div class="testimonialsText">
            <div style="color:#F43127; font-weight: 600;">Hasil Testimoni</div>
            <h1>Apa Yang Pembeli Katakan</h1>
            <!-- Swiper -->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                <?php
                $testimoni= mysqli_query($conn, "SELECT * FROM testimoni");
                while($t = mysqli_fetch_array($testimoni)){
                ?>
                    <div class="swiper-slide"><p><?= $t['testimoni'];?></p> 
                        <div style="margin-top: 15px; font-weight: 700; opacity: 0.9;"><?= $t['nama'];?> </div>  
                    </div>
                    <?php 
                    }
                    ?> 
                </div>
                
                <div class="swiper-pagination" ></div>
            </div>
        </div>
    </div>
</div>

<div class="ppp redpara">
    <div class="ccc redparaMain">
    <div class="redOverlay"></div>
        <div class="bike">
            <img src="images/bike.png">
        </div>

        <div class="paraText">
            <h1>Segera Pesan !!!</h1>
            <p>Barang Akan Diantar Secepatnya......</p>
        </div>


        <div class="call">
            <a href="https://api.whatsapp.com/send?phone=6281291987951" target="blank"><i class="fab fa-whatsapp"></i> <span>Chat Disini</span></a>
        </div>


    </div>
</div>




<div class="ppp footer">
    <img src="images/footer_shape01.png" class="footershape1">
    <img src="images/footer_shape02.png" class="footershape2">
    <img src="images/footer_shape03.png" class="footershape3">


<div class="ccc footerMain" id="contact">
<div class="aboutF">
<img src="images/logo_mindri.png"><br><br>
<p>Jl. Tarumanegara VI No. 458 Mekarjaya Sukmajaya</p>
<div class="socialLinks">
    <a href="https://www.instagram.com/dapur_mindri/" target="blank"><i class="fab fa-instagram"></i></a>
    <a href="https://web.facebook.com/Dapur-mindri-113309280518473/" target="blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://api.whatsapp.com/send?phone=6281291987951" target="blank"><i class="fab fa-whatsapp"></i></a>
</div>
</div>

<div class="linksF">
    <div class="titleF">Alamat</div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0230619073554!2d106.83382051486774!3d-6.3910256642892085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebedf91991e7%3A0xfd3ce42b8048b9df!2sJl.%20Tarumanegara%20VI%20No.458%2C%20Mekar%20Jaya%2C%20Kec.%20Sukmajaya%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016411!5e0!3m2!1sid!2sid!4v1639381418928!5m2!1sid!2sid" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

</div>
<div class="copyrightCont ccc">
    <div class="slightbar"></div>
    <p style="text-align: center;">© 2021 Dapur Mindri</p>
    <div class="slightbar"></div>
</div>
</div>


<!-- jquery -->
<script src="vendor/jquery/jquery-2.2.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>



<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/jquerycode.js"></script>
<script src="js/swiper.js"></script>
<script src="js/scrollanimation.js"></script>


  <script>
      
const button = document.querySelector('.menu__mobile_button');
const navlinks = document.querySelector('.navlinks');


button.addEventListener('click', () => {
	button.classList.toggle('active');
	navlinks.classList.toggle('openNav');


})



  </script>

<script>
        $(document).on("click", "#lihat", function(){
            let id = $(this).data('id');
            let judul = $(this).data('judul');
            let deskripsi = $(this).data('deskripsi');
            let harga = $(this).data('harga');
            let kategori = $(this).data('kategori');
            let gambar = $(this).data('gambar');

            $(".modal-body #idMenu").val(id);
            $(".modal-body #judul").val(judul);
            $(".modal-body #deskripsi").val(deskripsi);
            $(".modal-body #image").attr("src", "images/menu/" +gambar);
            


        });
    </script>


<script>
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);




var last = document.getElementById('last');
var parallaxInstance = new Parallax(last);
</script>

</body>
</html>
