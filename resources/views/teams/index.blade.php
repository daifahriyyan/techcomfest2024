@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tim</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Data Tim</h2>
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
@endsection