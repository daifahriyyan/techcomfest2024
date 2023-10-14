@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Verifikasi Data</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Pengecekan Data</h2>
        <p class="section-lead">
            Silakan upload berkas pendaftaran lomba pada kotak di bawah ini dengan format .zip
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('DataDiriStore') }}" enctype="multipart/form-data" class="dropzone" id="mydropzone">
                            @csrf
                            <br>
                            <div class="fallback">
                                <input name="file" type="file" multiple required/>
                            </div><br>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection