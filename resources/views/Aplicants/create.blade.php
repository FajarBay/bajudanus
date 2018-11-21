@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 class="text-center" style="padding-top: 20px;">Buat Pemohon Baru</h1>
                        <div class="row">
                            <div class="col-lg-8" style="float: none; margin: 0 auto;">
                                <form action="{{route('aplicants.store')}}" style=" padding-bottom: 20px;" method="post">  
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary" style="margin:auto; text-align:center; display:block;">BUAT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
