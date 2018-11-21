@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class=text-center> List Pemohon Bantuan </h1>
                    <div class="row">
                        <table class="table table-striped text-left">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-1">No</th>
                                    <th class="col-3">Nama</th>
                                    <th class="col-3">Alamat</th>
                                    <th class="col-2">Status</th>
                                    <th class="col-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($data as $d)
                                    <tr class="d-flex">
                                        <td class="col-1">{{ $no++ }}</td>
                                        <td class="col-3">{{ $d->nama }}</td>
                                        <td class="col-3">{{ $d->alamat }}</td>
                                        <td class="col-2">{{ $d->status }}</td>
                                        <td class="col-3 text-center">                    
                                            <form action="{{Route('aplicants.destroy',$d->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                                <a href="{{Route('aplicants.show',$d->id)}}" class=" btn btn-sm btn-secondary" >Detail</a>
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
</div>
@endsection
