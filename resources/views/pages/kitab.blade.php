@extends('layout.index')

@section('content')
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
      <source src="assets/images/overlay.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <img src="assets/images/logo.png" alt="" style="width: 200px">
          <h6>Hello Students</h6>
          <h2>Welcome to Nurul Iman Al-Hasanah </h2>
          <p>Built Your Dream and Make it Come True In Nurul Iman Al-Hasanah</p>
          <div class="main-button-red">
              <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
          </div>
      </div>
          </div>
        </div>
      </div>
  </div>
</section>

<!-- ***** Main Banner Area End ***** -->

<section class="upcoming-meetings" id="meetings">
  <div class="container ">
    <div class="row tahfidz">
        <div class="col">
            <h1>{{$kitab->where ('nama_program', 'Kitab Kuning')->first()->nama_program}}</h1>
            <h6 class="mt-3">{{$kitab->where ('nama_program', 'Kitab Kuning')->first()->deskripsi}}</h6>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-between">
      <div class="col-lg-6">
        <div class="card">


          <div class="card-body">
            <h3>{{$kitab->where ('kelas', 'Tsanawi')->first()->kelas}}</h3>
            <p>{{$kitab->where ('kelas', 'Tsanawi')->first()->deskripsi_kelas}}</p>
            
            <hr>
            <table class="table table-success" style="color: black">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kitab atau Pelajaran</th>
        
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($kitab->where('kelas', 'Tsanawi') as $item)
                
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$item->nama_pelajaran}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <br>
      </div>
      <div class="col-lg-6">
        <div class="card">
        

          <div class="card-body">
            <h3>{{$kitab->where ('kelas', 'Ibtida')->first()->kelas}}</h3>
            <p>{{$kitab->where ('kelas', 'Ibtida')->first()->deskripsi_kelas}}</p>
            
            <hr>
            <table class="table table-success" style="color: black">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kitab atau Pelajaran</th>
        
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($kitab->where('kelas', 'Ibtida') as $item)
                
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$item->nama_pelajaran}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <br>
      </div>
    </div>

  </div>
</section>

<section class="apply-now" id="apply">
  <div class="container prog">
    <div class="row">
      <div class="col d-flex justify-content-center mb-5 ">
        <h1>Jadwal Kegiatan Sehari-hari Santri</h1>
      </div>
    </div>
  </div>
</section>

<section class="our-courses" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Gallerys</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-12 ber">
        <a href=""> 
        <div class="card" style="width: 100%;">
          <img src="assets/images/logo.png" class="card-img-top" alt="...">

        </div>
      </a>
      </div>
    </div>
  </div>
</section>

@endsection