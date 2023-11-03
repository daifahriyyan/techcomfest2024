@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tim</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Data Tim</h2>
        @if (isset($teams))
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $teams->id }}">Edit</button>
        <a href="{{ Route('TeamsTambah') }}"><button class="btn btn-primary">Tambah Team</button></a>
            
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Pembimbing</th>
                            <th scope="col">Sekolah</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($teams))
                        <!--Tim Tersedia. <a href="{{ route('TeamsDelete' , $teams->id) }}">Hapus Tim</a>-->
                        @foreach($peserta as $x)
                        <tr>
                            <th>{{ $x->namapeserta }}</th>
                            <td>{{ $teams->namateam }}</td>
                            <td>{{ $x->namapembina }}</td>
                            <td>{{ $x->asalsekolah }}</td>
                            <td>
                                @if( Auth::user()->kategori == "Network")
                                    Capture The Flag
                                @elseif( Auth::user()->kategori == "Software")
                                    Desain Web
                                    @elseif( Auth::user()->kategori == "Multimedia")
                                    UI / UX Mobile Design
                                @endif
                            </td>
                            <td>
                                <div class="badge badge-success">Completed</div>
                            </td>
                            @endforeach
                            @else
                            <td colspan="6" align="center">
                                <h1>Belum buat team</h1> <a href="{{ Route('TeamsCreate') }}">Tambah Team</a>
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
{{-- Edit Modal --}}
@if (isset($teams))
<div class="modal" tabindex="-1" role="dialog" id="exampleModal{{ $teams->id }}">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Edit Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form method="GET" action="{{ route('TeamsUpdate', $teams->id) }}" enctype="multipart/form-data" >
          @csrf
            <?php $i = 0; ?>
        <br>
        <div class="form-group">
            <label>Nama Pembina</label>
        <input type="text" name="namapembina" value="{{(isset($peserta))?$peserta[0]->namapembina : ''}}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label>Asal Sekolah</label>
        <input type="text" name="asalsekolah" value="{{(isset($peserta))?$peserta[0]->asalsekolah : ''}}" class="form-control" required>
        </div>
@foreach ($peserta as $x)
            <?php $i++ ?>
        <br>
        <label>Peserta {{ $i }}</label>
        <div class="form-group">
            <label>Nama Peserta</label>
        <input type="text" name="namapeserta{{$i}}" value="{{$x->namapeserta}}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label>NIM/NISN</label>
        <input type="number" name="nik{{$i}}" value="{{$x->nik}}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label>E-mail</label>
        <input type="email" name="email{{$i}}" value="{{$x->email}}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label>Tanggal Lahir</label>
        <input type="date" name="tanggallahir{{$i}}" value="{{$x->tanggallahir}}" class="form-control" required>
        </div>
@endforeach
    </div>
    <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" value="Simpan"></input>
    </div>
    </form>
</div>
</div>
</div>
    
@endif
@endsection