<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM STTNF</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>


    <!-- navbar -->
	@include('includes.navbar')
    
<!-- header -->
<section class="header-kabar" class="text-center ">
    <div class="title-header justify-content-center align-items-center d-flex" data-aos="fade-in"
    
    data-aos-delay="30"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center">
        <h1 class="hestia-title">
            Cerita Yuk
         </h1>

    </div> 
</section>
<section class="misi-kabinet mt-5"data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-4">
                <h3 class="text-center">Cerita Yuk</h3>
                <p class="text-center">Ceritain keluh kesah kalian disini yuk! Jangan dipendem aja hehe</p>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-6">
                <div class="card card-misi ">
                    <div class="misi-title align-items-center justify-content-center" >
                        <span  class="d-flex align-items-center justify-content-center mb-3 mt-3"style="font-size: 60px;"><i class="fas fa-home"></i></span>	
                    </div>
                    <div class="misi-detail justify-content-center align-items-center text-center">
                        <img src="/frontend/images/header/aduan.jpg"  class="align-items-center mb-3"alt="">
                        <h2 style="font-weight: bold;">PINTAS</h2>
                        <p class="ml-3 mr-3">PINTAS merupakan program kerja kementrian adkesma BEM STTNF untuk menampung segala keluh
                            kesah masahasiswa mulai dari keuangan,fasilitas dan hal lain seputar kampus
                        </p>			
                                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Pintas
                </button>				
                    </div>
                </div>
            
            </div>
            <div class="col-md-6  col-sm-6">
                <div class="card card-misi ">
                    <div class="misi-title align-items-center justify-content-center" >
                        <span  class="d-flex align-items-center justify-content-center mb-3 mt-3"style="font-size: 60px;"><i class="fas fa-home"></i></span>	
                    </div>
                    <div class="misi-detail justify-content-center align-items-center text-center">
                        
                        <img src="/frontend/images/header/aduan.jpg"  class="align-items-center mb-3"alt="">
                        <h2 style="font-weight: bold;">PINTAS</h2>
                        <p class="ml-3 mr-3">PINTAS merupakan program kerja kementrian adkesma BEM STTNF untuk menampung segala keluh
                            kesah masahasiswa mulai dari keuangan,fasilitas dan hal lain seputar kampus</p>
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal1">
                                Pintas
                            </button>									
                    </div>
                </div>
            
            </div>
          
            
        </div>
    </div>

</section>  





  
	@include('includes.footer')

    
    <script src="./script.js"></script>    
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  
</body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Pintas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('/ceritayuk')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Nama Mahaiswa</label>
                  <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukan judul nama buku">
                </div>


                <div class="form-group">
                  <label for="name">NIM</label>
                  <input type="text" class="form-control" name="nim" placeholder="Masukan judul code buku">
                </div>

                    

                <div class="form-group">
                  <label for="name">Angkatan</label>
                  <input type="text" class="form-control" name="angkatan" placeholder="Masukan tahun publikasi">
                </div>

     
     
                <div class="form-group">
                  <label for="name">No Telpon</label>
                  <input type="text" class="form-control" name="no_telpon" placeholder="Masukan judul Banyak halaman buku">
                </div>

     
                <div class="form-group">
                  <label for="name">Yang ingin diaduin</label>
                  <textarea name="aduan" class="form-control" placeholder="masukan deskripsi buku"></textarea>
                </div>

                

                <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
              </form>
        </div>
     
      </div>
    </div>
  </div>
  
              
  
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tanya Iptek</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('/ceritayuk/tanyaiptek')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Nama Mahaiswa</label>
                  <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukan judul nama buku">
                </div>


                <div class="form-group">
                  <label for="name">NIM</label>
                  <input type="text" class="form-control" name="nim" placeholder="Masukan judul code buku">
                </div>

                    

                <div class="form-group">
                  <label for="name">Angkatan</label>
                  <input type="text" class="form-control" name="angkatan" placeholder="Masukan tahun publikasi">
                </div>

     
     
                <div class="form-group">
                  <label for="name">No Telpon</label>
                  <input type="text" class="form-control" name="no_telpon" placeholder="Masukan judul Banyak halaman buku">
                </div>

     
                <div class="form-group">
                  <label for="name">Yang ingin diaduin</label>
                  <textarea name="aduan" class="form-control" placeholder="masukan deskripsi buku"></textarea>
                </div>

                

                <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
              </form>
        </div>
     
      </div>
    </div>
  </div>
  
              
  