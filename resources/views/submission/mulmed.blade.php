@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Halaman Pengumpulan Lomba UI / UX Mobile Design</h1>
        <!-- <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Multiple Upload</div>
        </div> -->
    </div>

    <div class="section-body">
        <h2 class="section-title">Pengumpulan File Karya Lomba</h2>
        <p class="section-lead">
            Silakan kumpulkan file Karya lomba anda dibawah ini.
        </p>

        <form method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data" autocomplete="off" action="{{ Route('SSMulmed') }}">
            @csrf
            <input type="text" name="idteam" value="{{ $teams->id }}" hidden>
            <div class="card">
                <div class="card-body">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Tim</label>
                                    <h5>{{ $teams->namateam }}</h5>
                                </div>
                                <div class="form-group">
                                    <label>Lembar Orisinil (.pdf)</label>
                                    <div class="fallback">
                                        <input name="lorisinil" type="file" multiple required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Hasil Karya Lomba (.pdf)</label>
                                    <div class="fallback">
                                        <input name="hasilkaryalomba" type="file" multiple required/>
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Simpan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection