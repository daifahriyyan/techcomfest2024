@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Pendaftaran Tim</h2>
        <!-- <p class="section-lead">Silakan daftarkan team anda melalui tombol di bawah ini.</p> -->
        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('TeamsStore') }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Tim</label>
                                    <input type="text" name="namateam" class="form-control" value="{{ old('namateam') }}" required>
                                </div>
                                 <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option value="multimedia">UI / UX Mobile Design</option>
                                        <option value="network">Capture The Flag</option>
                                        <option value="software">Web Desain</option>
                                    </select>
                                </div><div class="form-group">
                                    <label>Bagi pendaftar Mahasiswa silakan isikan (-) pada Kolom Pembimbing</label>
                                </div>
                                <div class="form-group">
                                    <label>Pembimbing</label>
                                    <input type="text" name="dosen" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Sekolah / Perguruan Tinggi</label>
                                    <input type="text" name="sekolah" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Peserta 1</label>
                                    <input type="text" name="peserta1" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>NIM/NISN Peserta 1</label>
                                    <input type="text" name="nikpeserta1" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Peserta 1</label>
                                    <input type="email" name="email1" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Peserta 1</label>
                                    <input type="date" name="tgllahir1" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Peserta 2</label>
                                    <input type="text" name="peserta2" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>NIM/NISN Peserta 2</label>
                                    <input type="text" name="nikpeserta2" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Email Peserta 2</label>
                                    <input type="email" name="email2" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Peserta 2</label>
                                    <input type="date" name="tgllahir2" class="form-control" value="">
                                </div>
                                 {{-- <div class="form-group">
                                    <label>Bagi pendaftar lomba desain web silakan isikan (-) pada peserta ke-3</label>
                                </div> --}}
                                <div class="form-group">
                                    <label>Peserta 3</label>
                                    <input type="text" name="peserta3" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>NIM/NISN Peserta 3</label>
                                    <input type="text" name="nikpeserta3" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Email Peserta 3</label>
                                    <input type="text" name="email3" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Peserta 3</label>
                                    <input type="date" name="tgllahir3" class="form-control" value="">
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