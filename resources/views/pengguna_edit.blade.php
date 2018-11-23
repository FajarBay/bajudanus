@extends('layouts.app')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content row">
            <!-- Remove This Before You Start -->
            <h1>Edit Pengguna</h1>
            <hr>
             @foreach($data as $datas)
            <form action="{{ route('pengguna.update' , $datas->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $datas->username }}">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $datas->email }}">               
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $datas->alamat }}">               
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection