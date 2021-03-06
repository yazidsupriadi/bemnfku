@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
         
          <!-- Content Row -->
          <div class="row">
            <div class="card-body">
            <form action="{{url('/admin/kabar/edit/'.$item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                  <label for="name">Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="" value="{{$item->judul}}">
                </div>


                <div class="form-group">
                <div class="form-check">
                <label for="name">Tipe Berita</label>
                <br>
                <input class="form-check-input" type="radio" name="tipe_kabar" id="tipe_kabar1" value="kajian" checked>
                <label class="form-check-label" for="tipe_kabar1">
                Kajian
                </label>
                <br>
                <input class="form-check-input" type="radio" name="tipe_kabar" id="tipe_kabar2" value="berita">
  <label class="form-check-label" for="tipe_kabar2">
    Berita
  </label>
                </div>
                </div>

                <div class="form-group">
                  <label for="name">Isi Berita</label>
                  <input type="file" name="foto_headline">
                  <label for="">before</label>
                  <img src="{{Storage::url($item->foto_headline)}}" width="150px" alt="">
               </div>            

     
                <div class="form-group">
                  <label for="name">Isi Berita </label>
                  <textarea name="isi_kabar" id="konten" class="form-control" placeholder="Masukan isi berita..">{!! $item->isi_kabar !!}</textarea>
                </div>


                

                <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
              </form>
            </div>
          </div>
         
@endsection