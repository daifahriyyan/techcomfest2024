<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techcomfest 2024</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="icon" href="assets/img/logo.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                    <img src="/assets/img/logo.png" alt="" style="height: auto; width:50px; display:inline;">
                    <h4 style="display:inline; white-space:nowrap;">TECHCOMFEST</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#homebg">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#panduan">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline">Time Line</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    

                </ul>
                <a href="{{url('login')}}"><button class="btn btn-primary rounded-3 " type="button">Masuk</button></a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="homebg" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 p-5">
                    <h1 class="display-2 fw-bold" data-aos="fade-up" style="color: white;">TECHCOMFEST
                        <br><span class="text-brand">2024</span>
                    </h1>
                    <h4 data-aos="fade-up" data-aos-delay="100" class="mt-3 mb-5" style="color: white;">"The Young Generation to Innovate in The Future Technology"</h4>
                    <a data-aos="fade-up" data-aos-delay="200" href="/assets/file/2024 GENERAL RULEBOOK TECHCOMFEST.pdf" download><button class="btn btn-outline-light rounded-3 " type="button">Unduh Panduan</button></a>
                    <a data-aos="fade-up" data-aos-delay="200" href="{{url('register')}}"><button class="btn btn-primary rounded-3 " type="button">Daftar</button></a>
                </div>
                <div class="col-lg-6 col-sm-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img class="" src="assets/img/logo.png" alt="" style="height: auto; width:60%;">
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="tentang" class="section-padding ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img class="rounded-3 shadow-img" src="assets/img/techcomfest.jpg" alt="" style="height: auto; width:70%;">
                </div>
                <div class="col-lg-6 col-sm-12 p-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="setion-title">
                        <h1 class="display-6 fw-semibold text-brand">Tentang Techcomfest</h1>
                    </div>
                    <div class="section-body">
                        <p style="text-align: justify; max-width: 600px;">
                            Techcomfest adalah salah satu wujud misi dan peran aktif UKM Polytechnic Computer
                            Club dalam mengikuti perkembangan teknologi dalam bidang IT.
                            Dengan diadakannya kegiatan Techcomfest, diharapkan siswa/i SMA/SMK sederajat dan Mahasiswa/i dapat menyalurkan
                            inovasi dan kreativitas mereka khususnya dalam bidang teknologi dan informasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="kategori" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-6 fw-semibold text-brand">Kategori Lomba</h1>
                        <div class="line"></div>
                        {{-- <p>Berikut adalah kategori lomba di Techcomfest</p> --}}
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    {{-- <div class="service theme-shadow p-lg-5 p-4"> --}}
                    <div class="border rounded theme-shadow p-lg-5 p-4 card-shadow">
                        <!-- <div class="iconbox">
                            <i class="ri-file-paper-2-line"></i>
                        </div> -->
                        <img class="" src="assets/img/user-experience.png" alt="" style="height: auto; width:50%;">
                        <h5 class="mt-4 mb-3">UI / UX Mobile</h5>
                        <p>Lomba UI/UX mobile Design adalah Sebuah Kompetisi yang bertujuan untuk mengasah Kreativitas dan Keterampilan para Designer UI / UX Mobile.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{url('register')}}"><button class="btn btn-outline-primary rounded-3 " type="button">Daftar Disini</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    {{-- <div class="service theme-shadow p-lg-5 p-4"> --}}
                    <div class="border rounded theme-shadow p-lg-5 p-4 card-shadow  style="min-height:150px;">
                        <!-- <div class="iconbox">
                            <i class="ri-window-fill"></i>
                        </div> -->
                        <img class="" src="assets/img/web-design.png" alt="" style="height: auto; width:50%;">
                        <h5 class="mt-4 mb-3">Web Desain</h5>
                        <p>Lomba Web Desain adalah salah satu jenis kompetisi pengembangan website yang menampilkan informasi dan desain ke dalam bentuk web</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{url('register')}}"><button class="btn btn-outline-primary rounded-3 " type="button">Daftar Disini</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    {{-- <div class="service theme-shadow p-lg-5 p-4"> --}}
                    <div class="border rounded theme-shadow p-lg-5 p-4 card-shadow">
                        <!-- <div class="iconbox">
                            <i class="ri-flag-line"></i>
                        </div> -->
                        <img class="" src="assets/img/hacker.png" alt="" style="height: auto; width:50%;">
                        <h5 class="mt-4 mb-3">Capture The Flag</h5>
                        <p>Capture the Flag adalah salah satu jenis kompetisi hacking yang mengharuskan untuk mengambil sebuah flag yang tersembunyi di sebuah sistem.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{url('register')}}"><button class="btn btn-outline-primary rounded-3 " type="button">Daftar Disini</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="panduan" class="section-padding section-connector border-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="setion-title text-center" data-aos="fade-up" data-aos-delay="100">
                        <h1 class="display-6 fw-semibold text-brand">Panduan Lomba</h1>
                        <!-- <p>Silakan unduh panduan lomba di bawah ini</p> -->
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bp">
                        <div class="bp-content pt-4 text-center">
                            <h4>UI / UX</h4>
                            <div class="iconbox">
                                <i class="ri-file-paper-2-line"></i>
                            </div><br>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <a class="custom-link pt-3" href="/assets/file/2024 RULEBOOK UIUX TECHCOMFEST.pdf" download>
                                <span>Unduh</span>
                                <i class="ri-download-2-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bp">
                        <div class="bp-content pt-4 text-center">
                            <h4>Web Desain</h4>
                            <div class="iconbox">
                                <i class="ri-window-fill"></i>
                            </div><br>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <a class="custom-link pt-3" href="/assets/file/2024 RULEBOOK WDC TECHCOMFEST.pdf" download>
                                <span>Unduh</span>
                                <i class="ri-download-2-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bp">
                        <div class="bp-content pt-4 text-center">
                            <h4>Web Desain Finalis</h4>
                            <div class="iconbox">
                                <i class="ri-window-fill"></i>
                            </div><br>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <a class="custom-link pt-3" href="/assets/file/RULEBOOK_FINAL_WDC_TECHCOMFEST2023.pdf" download>
                                <span>Unduh</span>
                                <i class="ri-download-2-line"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bp">
                        <div class="bp-content pt-4 text-center">
                            <h4>Capture The Flag</h4>
                            <div class="iconbox">
                                <i class="ri-flag-2-line"></i>
                            </div><br>
                            <a class="custom-link pt-3" href="/assets/file/2024 RULEBOOK CTF TECHCOMFEST.pdf" download>
                                <span>Unduh</span>
                                <i class="ri-download-2-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="timeline" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center " data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-6 fw-semibold text-brand">Time Line</h1>
                        <div class="line"></div>
                    </div>
                    <div class="col d-flex justify-content-center" data-aos="fade-down" data-aos-delay="200">
                        <table class="table text-center" style="width: 70%;">
                            <thead class="table-primary">
                                <tr>
                                    <th>TANGGAL</th>
                                    <th>KEGIATAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19 Oktober - 16 November 2023</td>
                                    <td>Pendaftaran Gelombang 1 Capture The Flag dan UI/UX Mobile Design</td>
                                </tr>
                                <tr>
                                    <td>19 Oktober - 16 Desember 2023</td>
                                    <td>Pendaftaran Web Design</td>
                                </tr>
                                <tr>
                                    <td>19 November - 16 Desember 2023</td>
                                    <td>Pendaftaran Gelombang 2 Capture The Flag dan UI/UX Mobile Design</td>
                                </tr>
                                <tr>
                                    <td>19 Oktober - 19 Desember 2023</td>
                                    <td>Pengerjaan dan Pengumpulan Karya UI/UX Mobile Design</td>
                                </tr>
                                <tr>
                                    <td>19 Oktober - 22 Desember 2023</td>
                                    <td>Pengerjaan dan Pengumpulan Karya Web Design</td>
                                </tr>
                                 <tr>
                                    <td>23 Desember 2023</td>
                                    <td>Warm Up Capture The Flag</td>
                                </tr>
                                <tr>
                                    <td>20 - 30 Desember 2023</td>
                                    <td>Babak Penyisihan UI/UX Mobile Design</td>
                                </tr>
                                <tr>
                                    <td>23 - 28 Desember 2023</td>
                                    <td>Babak Penyisihan Web Design</td>
                                </tr>
                                <tr>
                                    <td>30 Desember 2023</td>
                                    <td>Babak Penyisihan Capture The Flag</td>
                                </tr>
                                <tr>
                                    <td>3 Januari 2024</td>
                                    <td>Pengumuman Finalis Capture The Flag, UI/UX Mobile Design, Web Design Competition</td>
                                </tr>
                                <tr>
                                    <td>4 - 11 Januari 2024</td>
                                    <td>Registrasi Ulang lomba Capture The Flag, UI/UX Mobile Design dan Web Design</td>
                                </tr>
                                <tr>
                                    <td>13 Januari 2024</td>
                                    <td>Technical Meeting lomba UI/UX Mobile Design, Web Design, Capture The Flag Competition</td>
                                </tr>
                                <tr>
                                    <td>20 Januari 2024</td>
                                    <td>Final UI/UX Mobile Design, Web Design, Capture The Flag Competition</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-6 fw-semibold text-brand">FAQ</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="container" style="color: black;" data-aos="fade-up" data-aos-delay="150">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Apa itu Techcomfest Competition?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                Techcomfest ( Technology Computer Festival ) merupakan salah satu wujud misi dan peran aktif UKM Polytechnic Computer Club dalam mengikuti perkembangan teknologi dalam bidang IT melalui lomba SMA/ SMK sederajat dan   Mahasiswa Umum Se-Indonesia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Kapan Techcomfest diadakan?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                Techcomfest diadakan pada tanggal 20 Januari 2024
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Bagaimana cara mendaftar Techcomfest?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                Peserta dapat melakukan pendaftaran di website techcomfest yaitu http://techcomfest.ukmpcc.org/
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                Bagaimana cara mendapatkan pedoman Techcomfest?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                Peserta dapat mengunduh pedoman yang telah disediakan di website techcomfest
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                Ada berapa bidang yang dilombakan di Techcomfest 2024?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                                Dalam Techcomfest 2024 terdapat 3 bidang yang diperlombakan yaitu Capture the Flag Competition, UI UX Design Competition, dan Web Design Competition
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                Apakah boleh menggunakan satu akun email untuk mendaftar dengan nama tim yang berbeda?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                            <div class="accordion-body">
                                Ketika mendaftar, email yang digunakan adalah satu email untuk satu tim
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                Apakah satu instansi dapat mengirim lebih dari satu tim untuk setiap cabang lomba?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                            <div class="accordion-body">
                                Instansi diperbolehkan mengirimkan lebih dari satu tim untuk setiap cabang lomba, dengan syarat anggota tim hanya diperbolehkan mengikuti satu mata lomba.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                Apa saja yang di dapatkan pemenang lomba techcomfest?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                            <div class="accordion-body">
                                Pemenang lomba Techcomfest  akan mendapatkan uang pembinaan, piala, sertifikat
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                Apakah ada biaya pendaftaran lomba?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                            <div class="accordion-body">
                                <p>
                                    Pada <b>gelombang  pertama</b> peserta mata lomba UI/UX Design Competition dikenai biaya pendaftaran sebesar Rp 70.000, untuk mata lomba Capture The Flag Competition dikenai biaya pendaftaran sebesar Rp 80.000,  dan untuk mata lomba Web Design Competition dikenai biaya pendaftaran sebesar Rp 100.000.
                                </p> 
                                <p>
                                    Kemudian pada <b>gelombang kedua</b>, peserta mata lomba UI/UX Design Competition dikenai biaya pendaftaran sebesar Rp 80.000, untuk mata lomba Capture The Flag Competition dikenai biaya pendaftaran sebesar Rp 100.000, dan untuk mata lomba Web Design tetap sama.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                                Apakah ada biaya pendaftaran ulang untuk yang masuk final?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                            <div class="accordion-body">
                                Tidak ada. 
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
                                Apakah untuk mata lomba UI/UX Mobile Design Competition dapat mengirimkan karya yang pernah dilombakan di event lain?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
                            <div class="accordion-body">
                                Tidak boleh. Karya yang dikirimkan adalah murni dari peserta dan tidak pernah diperlombakan sebelumnya.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwelve">
                                Apakah untuk lomba bidang Web design dapat mengirimkan karya yang pernah dilombakan di event lain?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwelve">
                            <div class="accordion-body">
                                Tidak boleh. Karya yang dikirimkan adalah murni dari peserta dan tidak pernah diperlombakan sebelumnya.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseThirteen">
                                Apakah untuk lomba bidang Capture The Flag Competition dilaksanakan secara offline atau online?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThirteen">
                            <div class="accordion-body">
                                Untuk babak penyisihan lomba Capture The Flag dilaksanakan secara daring. Kemudian babak final akan dilaksanakan secara luring (onsite) pada tanggal 20 Januari 2024 di Gedung Magister Terapan lantai 2 Politeknik Negeri Semarang.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFourteen">
                                Apakah karya Design Web yang dikirim akan menjadi hak milik panitia?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourteen">
                            <div class="accordion-body">
                                Karya Design Web yang diperlombakan akan menjadi hak milik panitia
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseFifteen">
                                Apakah karya Design UI / UX Mobile yang dikirim akan menjadi hak milik panitia?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourteen">
                            <div class="accordion-body">
                                Karya UI/UX Mobile Design yang akan menjadi hak milik panitia yaitu yang diperlombakan peserta finalis.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseSixteen">
                                Design Web diperbolehkan menggunakan apa saja?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSixteen">
                            <div class="accordion-body">
                               Design Web diperbolehkan menggunakan  HTML, CSS, dan JavaScript (Optional)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSeventeen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeventeen">
                                Apakah Pembuatan Design Web diizinkan menggunakan framework yang tidak memerlukan instalasi?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeventeen">
                            <div class="accordion-body">
                                Pembuatan Design Web diizinkan menggunakan framework yang tidak memerlukan instalasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        <div class="footer-top ">
            <div class="container">
                <div class="row gy-5 text-center">
                    <div class="col-lg-12 col-sm-12">
                        <div class="line"></div>
                        <p>Ikuti Media Sosial kami untuk info yang lebih terbaru tentang TECHCOMFEST</p>

                        <div class="social-icons">
                            <a href="https://twitter.com/ukmpcc">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                              </svg>
                            </a>
                            <a href="https://www.instagram.com/pccpolines/"><i class="ri-instagram-fill"></i></a>
                            <a href="https://open.spotify.com/show/6HFgdgTpAlTeLWSZi7323u?si=263bc4172a044efe"><i class="ri-spotify-fill"></i></a>
                            <a href="https://www.youtube.com/c/UKMPCCPOLINES"><i class="ri-youtube-fill"></i></a>
                            <a href="https://www.tiktok.com/@pcc.polines?_t=8gaQhVBXbG5&_r=1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                              </svg>
                            </a>
                            {{-- <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=uaz3953u"><i class="ri-line-fill"></i></a> 
                            DIHILANGKAN KARENA SUDAH TIDAK DIAKTIFKAN 
                            --}}
                            <a href="https://www.facebook.com/ukmpcc/"><i class="ri-facebook-fill"></i></a>
                        </div><br>
                        <div>
                            <h3><span style="color: white">Contact Person</span></h3>
                            <p>Wahyu => <a href="wa.me/081225355583">081225355583</a></p>
                            <p>Neli => <a href="wa.me/089652792095">089652792095</a></p>
                            <p>Arka => <a href="wa.me/0895811048700">0895811048700</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 text-center">
                    <div class="col-12">
                        <p class="mb-0"><a href="#">Copyright 2023 - Polytechnic Computer Club - Politeknik Negeri Semarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>