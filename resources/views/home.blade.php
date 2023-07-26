@extends('layouts.main')

@section('container')
    <center><h1>Home</h1></center>
    <p>
      Puskesmas adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya di wilayah kerjanya (Permenkes Nomor 75 tahun 2014 tentang Puskesmas).
      Menurut Permenkes Nomor 75 tahun 2014 tentang Puskesmas, pembangunan kesehatan yang diselenggarakan di puskesmas bertujuan untuk mewujudkan masyarakat yang memiliki perilaku sehat yang meliputi kesadaran, kemauan, dan kemampuan hidup sehat, mampu menjangkau pelayanan kesehatan yang bermutu, hidup dalam lingkungan sehat, dan memiliki derajat kesehatan yang optimal, baik individu, keluarga, kelompok, dan masyarakat. Pasien sebagai jasa pengguna pelayanan kesehatan menuntut untuk diberikan pelayanan sesuai dengan haknya.      
    </p>
    <marquee align="left" bgcolor="#ba181b" bevaior="slide" direction="left" height="180"
    onmouseout="this.start()" onmouseover="this.stop()" scrollamount="4"
    width="100%">
    <a href="#"><img src="info1.jfif"></a>
    <a href="#"><img src="info2.jfif"></a>
    <a href="#"><img src="info3.jfif"></a>
    <a href="#"><img src="info1.jfif"></a>
    </marquee>
    <div class="row">
        <div class="col-sm-6">
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Antrian Pasien Umum</h5>
              <p class="card-text">Antrian ini diutamakan bagi pasien yang akan menggunakan antrian pasien umum</p>
              <a href="/umum" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Antrian Pasien BPJS</h5>
              <p class="card-text">Antrian ini diutamakan bagi pasien yang akan menggunakan antrian pasien BPJS</p>
              <a href="/BPJS" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card mt-4 mb-4">
            <div class="card-body">
              <h5 class="card-title">Antrian Pasien Dinas</h5>
              <p class="card-text">Antrian ini diutamakan bagi pasien yang akan menggunakan antrian pasien Dinas</p>
              <a href="dinas" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card mt-4 mb-4">
            <div class="card-body">
              <h5 class="card-title">Antrian Pasien Lansia</h5>
              <p class="card-text">Antrian ini diutamakan bagi pasien yang akan menggunakan antrian pasien Lansia</p>
              <a href="lansia" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
@endsection
