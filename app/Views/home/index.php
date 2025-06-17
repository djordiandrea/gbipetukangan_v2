<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>GBI Petukangan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .jumbotron {
            background-color: #fff;
            color: #f4511e;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }

        .logo {
            color: #f4511e;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .carousel-indicators li.active {
            background-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid #f4511e;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }

        .navbar {
            margin-bottom: 0;
            /* background-color: ; #f4511e */
            background-color: transparent;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 3px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
            transition: all 0.5s;
        }

        .navbar li a,
        .navbar .navbar-brand,
        .color-change {
            /* color: #f4511e !important; */
            color: #fff;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #f4511e !important;
        }

        .navbar-default .navbar-toggle {
            border-color: #fff;
            color: #fff !important;
            /* background-color: #fff; */
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        .background {
            /* background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)),
                url('https://c4.wallpaperflare.com/wallpaper/366/941/298/minimalism-simple-jesus-christ-cross-religious-hd-wallpaper-preview.jpg') center center / cover no-repeat;
            min-height: 100vh;
            padding: 80px 20px;
            text-align: center; */
            background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)),
                url('<?php echo base_url() ?>assets/img/cross.jpg') center center / cover no-repeat fixed;
            color: #fff;
            position: relative;
            z-index: 1;
            min-height: 100vh;
            padding: 80px 20px;
            text-align: center;
        }

        .background h1 {
            font-size: 60px;
            margin-bottom: 40px;
            font-weight: 800;
            color: #222;
        }

        .web-menu h1 {
            font-size: 60px;
            margin-bottom: 40px;
            font-weight: 800;
            color: #222;
        }

        .web-menu h2 {
            font-size: 32px;
            /* margin-bottom: 40px; */
            font-weight: 800;
            color: #222;
        }

        .schedule-box {
            background: linear-gradient(to right, #ff9a3c, #ff6a00);
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin: 30px 0;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .background ol {
            max-width: 900px;
            margin: auto;
            text-align: left;
            font-size: 20px;
            color: #333;
            line-height: 1.8;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }

            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }

            .background h1 {
                font-size: 40px;
            }

            .background ol {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        #content-mid {
            width: 100%;
            height: 100vh;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            position: relative;
            object-fit: cover;
            filter: brightness(70%);
        }

        .img-text {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img-content {
            --background-color-rgb: 0, 0, 0;
        }

        .navbar-scrolled {
            background-color: #fff !important;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15) !important;
        }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <div class="img-content">
        <img id="content-mid" src="<?php base_url() ?>assets/img/mountain.png" alt="">
        <div class="img-text">
            <h3 align="center" style="color: #fff; font-family:Georgia; line-height: 1.6;">
                Segala perkara dapat kutanggung di dalam Dia yang memberi kekuatan kepadaku.</h3><br>
            <p align="center" style="color: #fff; font-family:Georgia;">Filipi 4 : 13</p>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar" style="color: #fff;"></span>
                    <span class="icon-bar" style="color: #fff;"></span>
                    <span class="icon-bar" style="color: #fff;"></span>
                </button>
                <a class="navbar-brand navbar-brand-default" href="#myPage" id="logochange">GBI Petukangan</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="color-change" style="color: #fff;">TENTANG</a></li>
                    <li><a href="#services" class="color-change" style="color: #fff;">DEKLARASI</a></li>
                    <li><a href="#ibadah" class="color-change" style="color: #fff;">IBADAH</a></li>
                    <li><a href="#alamat" class="color-change" style="color: #fff;">ALAMAT</a></li>
                    <li><a href="#contact" class="color-change" style="color: #fff;">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid web-menu">
        <div class="row">
            <div class="col-sm-8">
                <h2>GBI Petukangan</h2><br>
                <h4>1990, Pdt. Ir. Niko Njotorahardjo mendapatkan visi untuk melakukan Pemulihan Pondok Daud yaitu Pemulihan Pujian dan Penyembahan di beberapa daerah, termasuk di petukangan.</h4>
                <p>
                    GBI Petukangan berawal dari sebuah Family Altar (FA) kecil di Ciledug pada tahun 1996. Dengan semangat visi
                    <strong>Pemulihan Pondok Daud</strong>, ibadah perdana diadakan pada 2 Maret 1997 dan terus berkembang meski berpindah-pindah lokasi.
                </p>
                <p>
                    Berbagai tantangan dilalui hingga akhirnya pada 4 Mei 1997, GBI Petukangan mendapat tempat ibadah di
                    <strong>Universitas Budi Luhur</strong>. Seiring pertumbuhan jemaat, pelayanan pun meluas: dari FA, ibadah youth, hingga misi sosial.
                </p>
                <p>
                    Kini, GBI Petukangan dikenal sebagai <strong>GBI House of Happiness</strong>, bagian dari Rayon IE GBI Jl. Gatot Subroto, dengan lokasi sekretariat di:
                    <em>Komp. Ruko G-77 No.10, Jl. H.O.S. Cokroaminoto, Kreo, Larangan, Ciledug - Tangerang</em>.
                </p>
                <br><button class="btn btn-default btn-lg"><a href="tel:+6281213400273">Get in Touch</a></button>
            </div>
            <div class="col-sm-4">
                <!-- <span class="glyphicon glyphicon-signal logo slideanim"></span> -->
                <img src="<?php echo base_url() ?>assets/img/logo-hoh-nobg.png" alt="" srcset="" style="width:80%; height:80%;" class="slideanim">
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo base_url() ?>assets/img/ruddy-lae-sq.png" alt="" srcset="" style="width:80%; height:80%;" class="slideanim">
            </div>
            <div class="col-sm-8">
                <h2>Rudy Hendrik Lae</h2><br>
                <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div> -->

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center background">
        <div class="slideanim">
            <h1>PENTAKOSTA KETIGA</h1>
            <ol>
                <li>Pentakosta Ketiga adalah pencurahan Roh Kudus yang dahsyat di zaman ini melebihi yang terjadi di Azusa Street.</li>
                <li>Pentakosta Ketiga akan mengakibatkan penuaian jiwa yang terbesar dan yang terakhir sebelum Tuhan Yesus datang kembali.</li>
                <li>Pentakosta Ketiga akan membangkitkan generasi Yeremia yaitu anak-anak muda yang dipenuhi Roh Kudus, cinta mati-matian kepada Tuhan Yesus, tidak kompromi terhadap dosa dan akan bergerak untuk memenangkan jiwa.</li>
                <li>Pentakosta Ketiga lahir di Indonesia dan bergerak ke bangsa-bangsa. Gerakan ini dari Timur ke Barat dan kembali ke Yerusalem.</li>
                <li>Pentakosta Ketiga akan memberikan kuasa untuk menyelesaikan Amanat Agung dan setelah itu Tuhan Yesus datang kembali.</li>
            </ol>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->

    <div id="ibadah" class="container-fluid text-center bg-grey web-menu">
        <h2>Ibadah</h2><br>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <div style="height: 300px; overflow: hidden;">
                        <img src="<?php echo base_url() ?>assets/img/SM.png" alt="Paris"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <br>
                    <p><strong>Sunday School</strong></p>
                    <!-- <p>Yes, we built Paris</p> -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <div style="height: 300px; overflow: hidden;">
                        <img src="<?php echo base_url() ?>assets/img/JC.png" alt="New York"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <br>
                    <p><strong>Junior Church</strong></p>
                    <!-- <p>We built New York</p> -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <div style="height: 300px; overflow: hidden;">
                        <img src="<?php echo base_url() ?>assets/img/IR.png" alt="San Francisco"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <br>
                    <p><strong>Sunday Service</strong></p>
                    <!-- <p>Yes, San Fran is ours</p> -->
                </div>
            </div>
        </div><br>
        <div class="schedule-box">
            <h2 style="color:white;">🕘 Jadwal Ibadah Mingguan</h2>
            <p><strong>Setiap Hari Minggu</strong></p>
            <h3>⏰ Jam 09.00 WIB</h3>
            <p>Lokasi: GBI Petukangan, Jakarta Selatan</p>
        </div>

    </div>


    <!-- Container (Pricing Section) -->
    <div id="alamat" class="container-fluid web-menu">
        <div class="text-center">
            <h2>Alamat</h2>
            <p>Jl. Ciledug Raya, RT.10/RW.2, Petukangan Utara, Kec. Pesanggrahan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12260</p>
        </div>
        <div class="row slideanim">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1249.280604019982!2d106.74630552829191!3d-6.234914286639473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14675571c2f%3A0x50fb188c327c6bae!2sUniversitas%20Budi%20Luhur!5e0!3m2!1sen!2sid!4v1748636544519!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.218839061234!2d106.74259342253208!3d-6.234858471194194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f10021c51177%3A0x28dcb705928bb0a0!2sGBI%20Petukangan!5e0!3m2!1sen!2sid!4v1749863737200!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey web-menu">
        <h2 class="text-center">CONTACT</h2><br>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Jakarta, ID</p>
                <p><span class="glyphicon glyphicon-phone"></span> +62 81213400273 - Devi</p>
                <p><span class="glyphicon glyphicon-envelope"></span> djordi@dyadev.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <!-- Social Media Icons -->
        <div class="mt-3 pull-right">
            <a href="https://www.instagram.com/gbihouseofhappiness/" target="_blank" style="margin-right: 10px;" alt="GBI Petukangan">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://www.youtube.com/@gbihouseofhappinesspetukan6443" target="_blank">
                <i class="fab fa-youtube fa-2x"></i>
            </a>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/seo.js" defer></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });



            $(window).scroll(function() {
                $(".slideanim").each(function() {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }

                    if ($(window).scrollTop() >= 56) {
                        $('#logochange').css('color', '#f4511e');
                        $('.color-change').css('color', '#f4511e');
                        $('.navbar-fixed-top').addClass('navbar-scrolled');
                    } else {
                        $('#logochange').css('color', 'white');
                        $('.color-change').css('color', 'white');
                        $('.navbar-fixed-top').removeClass('navbar-scrolled');
                    }
                });

            });
        });
    </script>

</body>

</html>