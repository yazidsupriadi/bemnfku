@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
         
          <!-- Content Row -->
          <div class="row">
            <div class="card-body">
            <a href="{{url('/admin/kabar/edit/'.$item->id)}}"  class="btn btn-info" title=""><i class="fas fa-edit"></i> Edit</a>
            <a href=""  class="btn btn-danger" title=""><i class="fas fa-trash"></i> Delete</a>

              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul Kajian/Berita</th>
                    
                   
                    </tr> 
                  </thead>
                  <tbody>
                   
                    <tr>
                    <td>Judul</td>
                     <td>{{$item->judul}}</td>
                     
                    </tr> 
                    
                    <tr>
                    <td>Tipe Kabar</td>
                     <td>{{$item->tipe_kabar}}</td>
                     
                    </tr> 
                    <tr>
                    <td>Foto Headline</td>
                     <td><img src="{{Storage::url($item->foto_headline)}}" width="150px" alt=""></td>
                     
                    </tr> 
                    <tr>
                    <td>Isi Berita</td>
                     <td>{!! $item->isi_kabar !!}</td>
                     
                    </tr> 
                    
                    <tr>
                    <td>Dibuat Pada</td>
                     <td>{{$item->created_at}}</td>
                     
                    </tr> 
                  </tbody>



                </table>
              </div>
            </div>
          </div>
         
@endsection