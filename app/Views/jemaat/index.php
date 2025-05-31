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
</style>

<body>

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

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
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
    </div>
    <script src="<?php echo base_url(); ?>assets/js/global.js?v=<?php echo (rand()); ?>"></script>
    <script src="<?php echo base_url(); ?>assets/js/jemaat.js?v=<?php echo (rand()); ?>"></script>
</body>

</html>