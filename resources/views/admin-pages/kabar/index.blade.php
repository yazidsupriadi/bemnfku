@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
         
          <!-- Content Row -->
          <div class="row">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul Kajian/Berita</th>
                      <th>Tipe Kabar</th>
                      <th>Dibuat Pada</th>
                   
                      <th>Action</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @forelse($kabars as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->judul}}</td>
                      <td>{{$item->tipe_kabar}}</td>
                      <td>{{$item->created_at}}</td>
                     
                      <td>
                        <a href="{{url('admin/kabar/'.$item->id.'/show')}}"  class="btn btn-info" title=""><i class="fas fa-eye"></i>Preview</a>

                        <form action="{{url('admin/kabar/'.$item->id.'/delete')}}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
                        </form>
                      </td>
                    </tr> 
                    @empty
                    <tr>
                      <td class="text-center" colspan="7">Data Kosong</td>
                    </tr> 
                    @endforelse
                  </tbody>



                </table>
              </div>
            </div>
          </div>
         
@endsection