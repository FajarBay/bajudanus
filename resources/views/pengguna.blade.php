@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>

                <div class="card-body">
                    @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
                    <h1 class=text-center> Tabel User </h1>
                    <div class="row">
                    	<div class="table table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-1">No</th>
                                    <th class="col-3">Username</th>
                                    <th class="col-3">Email</th>
                                    <th class="col-3">Alamat</th>
                                    <th class="text-center" width="150px">
          <a href="pengguna/create" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($data as $d)
                                    <tr class="d-flex">
                                        <td class="col-1">{{ $no++ }}</td>
                                        <td class="col-3">{{ $d->username }}</td>
                                        <td class="col-3">{{ $d->email }}</td>
                                        <td class="col-3">{{ $d->alamat }}</td>
                                        <td class="col-3 text-center">                    
                                            <form action="{{Route('pengguna.destroy',$d->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                                <a href="{{Route('pengguna.edit',$d->id)}}" class=" btn btn-sm btn-primary" >Edit</a>
                                            </form>
                                        </td>  
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection
