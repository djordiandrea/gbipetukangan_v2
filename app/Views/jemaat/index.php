<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<style>
    .load-gif {
        width: 50px;
        /* Atau ukuran yang Anda inginkan, misalnya 100px */
        height: 50px;
        /* Penting untuk menjaga rasio aspek jika width diatur */
        display: block;
        /* Agar tidak ada ruang putih di bawah gambar */
        margin: auto;
        /* Untuk menempatkan di tengah jika parent container diatur */
    }

    .overlay-set {
        position: fixed;
        /* Penting agar overlay menutupi seluruh layar */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Background transparan */
        display: flex;
        /* Untuk memudahkan centering */
        justify-content: center;
        /* Untuk menengahkan horizontal */
        align-items: center;
        /* Untuk menengahkan vertikal */
        z-index: 9999;
        /* Pastikan overlay berada di atas elemen lain */
    }

    .navbar-brand img {
        height: 40px;
        width: auto;
        margin-top: -10px;
        /* Sesuaikan jika perlu */
    }

    .table-responsive-custom {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-fixed-header thead th {
        position: sticky;
        top: 0;
        background: #f9f9f9;
        /* Bisa kamu ganti */
        z-index: 1;
    }
</style>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand dan tombol toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="<?php echo base_url(); ?>assets/img/logo-hoh-nobg.png" alt=""></a>
            </div>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar-collapse-id">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Beranda</a></li>
                    <li><a href="/produk">Produk</a></li>
                    <li><a href="/tentang">Tentang</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="overlay" class="overlay-set">
                    <img class="load-gif" src="<?php echo base_url(); ?>assets/img/loading/spinner2.gif" alt="Loading" />
                </div>
                <div class="card load-item" id="card-menu">
                    <div class="card-header">
                        <h3 class="card-title">Jemaat</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <button class="btn btn-primary btn-sm" id="add-jemaat"><i class="glyphicon glyphicon-plus"></i> Add Jemaat</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body table-responsive p-0" style="max-height: 300px; overflow-y: auto;">
                        <table class="table table-hover text-nowrap table-fixed-header">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Fullname</th>
                                    <th>DOB</th>
                                    <th>Numbers</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyJemaat">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body" id="modalbody">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submit_jemaat">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/seo.js" defer></script>
    <script src="<?php echo base_url(); ?>assets/js/global.js?v=<?php echo (rand()); ?>"></script>
    <script src="<?php echo base_url(); ?>assets/js/jemaat.js?v=<?php echo (rand()); ?>"></script>
</body>

</html>