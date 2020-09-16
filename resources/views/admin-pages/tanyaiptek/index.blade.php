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
                      <th>Nama Mahasiswa</th>
                      <th>Nim</th>
                      <th>Angkatan</th>
                      <th>No Telpon</th>
                      <th>Aduan</th>
                      <th>Action</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @forelse($pintass as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->nama_mahasiswa}}</td>
                      <td>{{$item->nim}}</td>
                      <td>{{$item->angkatan}}</td>
                      <td>{{$item->no_telpon}}</td>
                      <td>{{$item->aduan}}</td>
                      <td>
                        <a href=""  class="btn btn-info" title=""><i class="fas fa-pencil"></i>Edit</a>

                        <form action="{{url('admin/tanyaiptek/'.$item->id.'/delete')}}" method="post" class="d-inline">
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