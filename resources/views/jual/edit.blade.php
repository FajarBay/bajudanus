@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                       
                        <h1 class="text-center" style="padding-top: 20px;">Edit data jual</h1>
                        <div class="row">
                            <div class="col-lg-8" style="float: none; margin: 0 auto;">
                                <form action="{{route('jual.update', $jual->id)}}" style=" padding-bottom: 20px;" method="post" enctype="multipart/form-data">   
                                <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $jual->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label><br>
                                        <img src="{{ url('uploads/file/'.$jual->jual) }}" style="width: 150px; height: 150px;"><br>
                                        <input type="file" class="form-control" id="foto" name="foto" placeholder="foto">
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary" style="margin:auto; text-align:center; display:block;">GANTI</button>
                                </form>
                            </div>                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection