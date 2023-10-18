@extends('layouts.app')
@section('content')
@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'IndependenM' || Auth::user()->role == 'IndependenS' || Auth::user()->role == 'IndependenN')
<section class="section">
  <div class="section-header">
    <h1>Halaman Admin</h1>
  </div>
  <div class="section-body">
    <h2 class="section-title">Data Berkas</h2>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Tim</th>
              <th scope="col">Nama File</th>
              <th scope="col">Status</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Unduh</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
            @foreach($datadiriadmin as $x)
            <tr>
              <td align="left">{{ $loop->iteration }}</td>
              <td>
                @php 
                  $namateam = App\Models\Teams::where('userid' , $x['id'])->first('namateam'); 
                @endphp
                @if(is_null($namateam))
                  kosong
                @else
                  {{ $namateam['namateam']; }}
                @endif
              </td>
              <td>
                @php 
                  $datadiri = App\Models\DataDiri::where('userid' , $x['id'])->latest()->first();
                @endphp
                @if(is_null($datadiri))
                  kosong
                @else
                  {{ $datadiri->file }}
                @endif
              </td>
              <td>
                @if(is_null($datadiri))
                  kosong
                @else
                  {{ $datadiri['status']; }} 
                @endif
              </td>
              <td>
                @if(is_null($datadiri))
                  kosong
                @else
                  {{ $datadiri['keterangan']; }} 
                @endif
              </td>
              <td>
                @if(is_null($datadiri)) 
                  kosong
                @else
                    <a href="{{ route('DataDiriDownload' , $datadiri->lokasi) }}">Download</a>
                @endif
              </td>
              <td>
                      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$x->id}}">Edit</button>
                    
              </td>
            </tr>
            
            @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Hasil Karya</h2>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              @php
                  $role = Auth::user()->role;
              @endphp
              <th scope="col">No</th>
              <th scope="col">Nama Tim</th>
              <th scope="col"><?php if($role == 'IndependenM'){echo 'Lembar Orisinil';}elseif($role == 'IndependenS'){echo 'Link Host';}elseif($role == 'IndependenN'){echo 'Hasil Karya';} ?></th>
              <th scope="col"><?php if($role == 'IndependenM'){echo 'Berkas Kerya';}elseif($role == 'IndependenS'){echo 'Link Gdrive';}elseif($role == 'IndependenN'){echo '';} ?></th>
            </tr>
          </thead>
            @foreach($datadiriadmin as $x)
            @php 

              if ($role == 'IndependenM') {
              $datadiri = App\Models\smulmed::where('idteam' , $x['id'])->latest()->first();
              }elseif ($role == 'IndependenS'){
              $datadiri = App\Models\ssoftware::where('idteam' , $x['id'])->latest()->first();
              }elseif ($role == 'IndependenN'){
              $datadiri = App\Models\snetwork::where('idteam' , $x['id'])->latest()->first();
              }

            @endphp
            @if (is_null($datadiri))
                
            @else
            <tr>
              <td align="left">{{ $loop->iteration }}</td>
              <td>
                @php 
                  $namateam = App\Models\Teams::where('userid' , $x['id'])->first('namateam'); 
                @endphp
                @if(is_null($namateam))
                    Kosong
                @else
                {{ $namateam['namateam']; }}
                    
                @endif
              </td>
              <td>
                <?php
                if(is_null($datadiri)){
                  echo 'kosong';
                }else if($role == 'IndependenM'){
                  echo $datadiri->lorisinil;
                }else if($role == 'IndependenS'){
                  echo $datadiri->linkhost;
                }else if($role == 'IndependenN'){
                  echo $datadiri->filerar;
                }
                ?>
              </td>
              <td>
                <?php

                    if(is_null($datadiri)){
                      echo 'kosong';
                    }else if($role == 'IndependenM'){
                      echo $datadiri->hasilkaryalomba;
                    }else if($role == 'IndependenS'){
                      echo $datadiri->linkgd;
                    }else if($role == 'IndependenN'){
                      echo '';
                    }
                    
                ?>
              </td>
            </tr>
            @endif
            
            @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
</section>
@foreach($datadiriadmin as $x)
@php 
$datadiri = App\Models\DataDiri::where('userid' , $x['id'])->first();
@endphp
@if(!is_null($datadiri))
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal{{$x->id}}">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Edit Status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <label>Status</label>
              <form action="{{ Route('VerifDataDiri' , $datadiri->id) }}" method="post">
                @csrf
              <select class="form-control" name="status">
                  <option value="Not Verified">Not Verified</option>
                  <option value="Verified">Verified</option>
                  <option value="Denied">Denied</option>
              </select>
              <br>
              <label>Keterangan</label>
              <input type="text" name="keterangan" value="{{ $datadiri->keterangan }}" class="form-control">
          </div>
          <div class="modal-footer bg-whitesmoke br">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <input type="submit" class="btn btn-primary" value="Simpan"></input>
          </div>
          </form>
      </div>
  </div>
</div>
@else

@endif
@endforeach
@else
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="section-body">
    <h2 class="section-title">Pendaftaran</h2>
    <!-- <p class="section-lead">Silakan daftarkan team anda melalui tombol di bawah ini.</p> -->
    <div class="card">
      <div class="card-header">
        @if(empty($teams))
        <h4>Silakan daftarkan team anda melalui tombol di bawah ini.</h4>
      </div>
      <div class="card-body">
        <a href="{{ route('TeamsCreate') }}"><button class="btn btn-primary">Daftar Team</button></a>
      </div>
      @elseif($datadiri->isEmpty())
      <h4>Team telah ada , silahkan verifikasi data diri team</h4>
    </div>
    <div class="card-body">
      <a href="{{ route('DataDiriCreate') }}"><button class="btn btn-primary">Verifikasi Data</button></a>
    </div>
    @else
    <h4>Pendaftaran Telah Selesai</h4>
    @endif
  </div>
  </div>
  <div class="section-body">
    <section class="section">
      <!--<div class="section-header">-->
      <!--    <h6 style="color:red";>Bagi peserta silakan unduh kembali Rule Book panduan lomba terbaru di halaman depan website</h6>-->
      <!--</div>-->
      <h2 class="section-title">Progress Lomba</h2>
      
      @if (session()->has('success'))
      <div class="row">
          <div class="col d-flex justify-content-center">
              <div class="alert alert-success alert-dismissible fade show" style="min-height: 50px; width:500px;" role="alert">
                  <div>
                      {{ session('success') }}
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          </div>
      </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th>
                      <div class="custom-checkbox custom-control">
                      </div>
                    </th>
                    <th>Task</th>
                    <th>Progress</th>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-control d-flex justify-content-center">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" <?php if (!empty($teams)) {  ?> checked <?php } ?> disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Input Data Team</td>
                    <td>
                      @if(empty($teams))
                      <div class="badge badge-info">To Do</div>
                      @else
                      <div class="badge badge-success">Completed</div>
                      @endif
                    </td>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" <?php if (!empty($datadiri)) { foreach ($datadiri as $x) { if ($x->status == 'Verified') { ?> checked <?php } } } ?> disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Verifikasi Data Peserta</td>
                    <td>
                      @if(!$datadiri->isEmpty())
                      @foreach($datadiri as $x)
                      @if($x->status == 'Not Verified')
                      <div class="badge badge-warning">In Progress</div>
                      @elseif($x->status == 'Verified')
                      <div class="badge badge-success">Completed</div>
                      @elseif($x->status == 'Denied')
                      <div class="badge badge-danger">Upload Ulang Dibutuhkan</div>
                      @endif
                      @endforeach
                      @else
                      <div class="badge badge-info">To Do</div>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-control d-flex justify-content-center">
                        <input type="checkbox" class="control-input" id="checkbox1" name="checkbox1" value="" <?php if ($subsmission == 'tdkada' || $subsmission->isEmpty()) {  ?>  <?php }else {  ?> checked <?php } ?>disabled>
                        <label for="checkbox-1">&nbsp;</label><br>
                      </div>
                    </td>
                    <td>Submission Lomba</td>
                    <td>
                      @if($subsmission == 'tdkada' || $subsmission->isEmpty())
                      <div class="badge badge-info">To Do</div>
                      @else
                      <div class="badge badge-success">Completed</div>
                      @endif                      
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endif
@endsection
