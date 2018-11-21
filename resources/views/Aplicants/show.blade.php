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
                        <h1 class="text-center" style="padding-top: 20px;">Detail data</h1>
                        <br>
                        <div class="row">
                            <div class="col-lg-11" style="float: none; margin: 0 auto;">
                                <!-- <form action="{{route('aplicants.store')}}" style=" padding-bottom: 20px;" method="post">  -->
                                <table class="table">
                                    <tr class="row">
                                        <th class="col-3">No</th>
                                        <td class="col-9">{{$aplicant->id}}</td>
                                    </tr>
                                    <tr class="row">
                                        <th class="col-3">Nama</th>
                                        <td class="col-9">{{$aplicant->nama}}</td>
                                    </tr>
                                    <tr class="row">
                                        <th class="col-3">Alamat</th>
                                        <td class="col-9">{{$aplicant->alamat}}</td>
                                    </tr>
                                    <tr class="row">
                                        <th class="col-3">Status</th>
                                        <td class="col-9">{{$aplicant->status}}</td>
                                    </tr>
                                </table>
                                <form action="{{Route('aplicants.acc',$aplicant->id)}}" style=" padding-bottom: 20px;" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-md btn-primary" style="margin:auto; text-align:center; display:block;">    ACC</button>
                                </form>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
