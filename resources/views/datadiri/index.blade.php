@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Halaman Verifikasi</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Verifikasi Data</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Pemilik</th>
                            <th scope="col">Nama File</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!$datadirisendiri->isEmpty())
                        @foreach($datadirisendiri as $x)
                        <tr>
                            <td>
                                {{ Auth::user()->name }}
                            </td>
                            <td>{{ $x->file }} | <a href="{{ route('DataDiriDownload' , $x->lokasi) }}">Download</a></td>
                            <td>{{ $x->keterangan }}</td>
                            <td>
                                @if($x->status == 'Not Verified')
                                <div class="badge badge-warning">Not Verified</div>
                                @elseif($x->status == 'Verified')
                                <div class="badge badge-success">Verified</div>
                                @elseif($x->status == 'Denied')
                                <div class="badge badge-danger">Denied</div> | <a href="{{ Route('DataDiriCreate') }}">Ulangi Data Diri</a>
                                @endif
                            </td>
                            @endforeach
                            @else
                            <td colspan="4" align="center">
                                <h1>Belum Upload Data Diri</h1> <a href="{{ Route('DataDiriCreate') }}">Tambah Data Diri</a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection