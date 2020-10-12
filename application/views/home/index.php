<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/') ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/') ?>my.css">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
    
  </head>
  
  <body>

    <!-- Navbar -->
    <section class="navbar">
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pl-5 pr-5">
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
                <a class="navbar-brand" href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_QQ5iJca6XsOO0FbI9qlSQ-Kb7F0OkLNQVg&usqp=CAU" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    PEDULI LANSIA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-5">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#profil">Profil Panti</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#lokasi">LOKASI</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#kritiksaran">Hubungi</a>
                    </li>
                    
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Carousel -->
    <section class="carousel">
        <div class="container-fluid mycarousel mb-2 mt-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/') ?>alam2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('assets/img/') ?>alam3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('assets/img/') ?>alam4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Page Text 3 -->
    <section class="text">
        <div class="container bg-light text-center mb-5">
            <h1 class="pt-3 pb-3">Visi Misi Panti</h1>
            <div class="row">
                <div class="col">
                    <h3>text1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, porro?</p>
                </div>
                <div class="col">
                    <h3>text2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit harum nisi dolores numquam corporis illum?</p>
                </div>
                <div class="col">
                    <h3>text3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quidem iste maiores facere asperiores? Aliquid!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Profil -->
    <section class="profil" id="profil">
        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-md-2 justify-content-center">
                <?php foreach($profil as $data) : ?>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/') ?><?= $data['gambar']; ?>" class="card-img-top" style="width:auto;height:300px;object-fit:cover;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama']; ?></h5>
                            <p class="card-text">Alamat : <?= $data['alamat']; ?></p>
                            <a href="<?= base_url('Home/detail/'.$data['id_profil']) ?>"  class="btn btn-primary btn-detail" 
                            data-id="<?= $data['id_profil'] ?>"
                            data-nama="<?= $data['nama']; ?>" 
                            data-alamat="<?= $data['alamat'] ?>"  
                            data-deskripsi="<?= $data['deskripsi']; ?>"
                            data-telepon="<?= $data['telepon']; ?>"
                            data-toggle="modal" data-target="#exampleModal">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Page Map -->
    <section class="lokasi ml-3 mr-3" id="lokasi">
        <div class="container">
        <h1 class="text-center">Lokasi Panti Sosial Werdha Jakarta</h1>
            <div class="row">
                <div class="col-md-12">
                <div id="mapid"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Kritik saran -->
    <section class="kritiksaran" id="kritiksaran">
        <div class="container mb-5 mt-5" id="komentar">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4 text-center">Halaman Kritik dan Saran</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                        <form action="<?= base_url('Home/kritiksaran') ?>" method="post">
                                <div class="form-group">
                                    <label for="namauser">Nama</label>
                                    <input type="text" class="form-control" name="namauser" id="namauser" placeholder="Nama pengirim">
                                </div>
                                <div class="form-group">
                                    <label for="emailuser">Email address</label>
                                    <input type="email" class="form-control" name="emailuser" id="emailuser" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="kritiksaran">Kritik & Saran</label>
                                    <textarea class="form-control" name=
                                    kritiksaran id="kritiksaran" rows="9"></textarea>
                                </div>
                                <button type="submit" class="btn btn-md btn-success tombolku">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <div class="container-fluid">
        <div class="footer">
            FOOTER
        </div>
    </div>

    <!-- Offline -->
    <script src="<?= base_url('bootstrap')?>/js/jquery.min.js"></script>
    <script src="<?= base_url('bootstrap/js/') ?>bootstrap.min.js"></script>
    <script src="<?= base_url('bootstrap')?>/js/my.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      
    
    <script>
        var map = L.map("mapid").setView([-6.2688185, 106.7797742], 15);

        L.tileLayer(
            "https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}", {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery Ã‚Â© <a href="http://mapbox.com">Mapbox</a>',
                maxZoom: 18,
                id: "mapbox.streets",
                accessToken: "pk.eyJ1Ijoicnlhbjkzc3AiLCJhIjoiY2pkMDJxZ2xpMGxjYTJxbzRtd3EzZnRzcCJ9.WsRQpljGbYjxw7za2_cPtA",
            }
        ).addTo(map);
                <?php foreach($lokasi as $data) :?>
                    L.marker([<?= $data['koordinat']; ?>])
                .addTo(map)
                .bindPopup(
                    "<center><b><?php echo $data['nama_lokasi'];?></b><br><?php echo $data['alamat'];?></center>"
                );
            <?php endforeach; ?>
    </script>
  </body>
</html>