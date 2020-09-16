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
        <h1 class="hestia-title">KAJIAN DAN BERITA</h1>

    </div> 
</section>

<section class="kabar-news">
    <div class="kabar-news" data-aos="fade-right">
			
        <div class="row mb-5 mt-5">
            <div class="col text-center section-popular-fasilitas">
                 <h2>KABAR TERBARU</h2>

             </div> 
        </div>
        
        <div class="container">
        <div class="row justify-content-center">
           
           @forelse($kabars as $item)
            <div class=" col-sm-6 col-md-4 mb-5">
                <article class="feature feature-1 post-article-item">
                    <a href="/kabar-news" class="block" title="{{$item->Judul}}"> <img alt="Bridgefy - Aplikasi Chatting Tanpa Internet" src="{{Storage::url($item->foto_headline)}}" class="post-thumb"> </a>
                    <div class="feature__body boxed boxed--border"> 
                        @if($item->tipe_kabar == 'berita')
                        <span class="badge  badge-success" style="font-size: 14px;">{{$item->tipe_kabar}}</span>
                        @else
                        <span class="badge  badge-danger" style="font-size: 14px;">{{$item->tipe_kabar}}</span>
                        @endif
                        <span class="created-at float-right pr-3"><i class="fa fa-user"></i> {{$item->created_at}}</span>
                       
                        <h4 class="post-title text-center"><a href="{{url('/kabar-news/'.$item->id)}}">{{$item->judul}}</a></h4> 
                    </div>
                </article>
            </div>
            @empty
            <h5>data kosong</h5>
            @endforelse
                   
           
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