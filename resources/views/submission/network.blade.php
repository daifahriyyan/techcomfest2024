@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Halaman Pengumpulan Lomba Software</h1>
        <!-- <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Multiple Upload</div>
        </div> -->
    </div>

    <div class="section-body">
        <h2 class="section-title">Pengumpulan FIle Karya Lomba</h2>
        <p class="section-lead">
            Silakan kumpulkan File Karya lomba anda dibawah ini.
        </p>

        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('SSNetwork') }}">
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
                                    <label>Hasil Karya(.zip)</label>
                                    <div class="invalid-feedback">
                                    </div>
                                    <input type="file" name="filerar" class="form-control @error('filerar') is-invalid @enderror" required>
                                    @error('filerar')
                                    {{ $message }}
                                    @enderror

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