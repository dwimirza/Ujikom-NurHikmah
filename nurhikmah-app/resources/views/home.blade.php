@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Ortu</th>
                                <th scope="col">No. Ortu</th>
                                <th scope="col">Kartu Keluarga</th>
                                <th scope="col">Akte Kelahiran</th>
                                <th scope="col">Bukti Pembayaran</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($siswa ?? '' as $data)
                            <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->namaOrtu}}</td>
                                <td>{{$data->nomorOrtu}}</td>
                                <td><img src="{{asset('/storage/app/public/images/'.$data->kartuKeluarga)}}" width="100px" ></td>
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
