  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Welcome On <em>Nurul Iman Al-Hasanah</em> Website</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Nurul Iman
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                          <li><a href="{{ route('profile') }}">Profile</a></li>
                          <li class="scroll-to-section"><a href="{{ route('berita') }}">Berita</a></li>
                          <li class="scroll-to-section"><a href="{{ route('ekstra') }}">Ekstrakulikuler</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pesantren</a>
                              <ul class="sub-menu">
                                  <li><a href="{{ route('tahfidz') }}">Tahfidz</a></li>
                                  <li><a href="{{ route('kitab') }}">Kitab Kuning</a></li>
                                  {{-- <li><a href="{{ route('qiroat') }}">Qiroat</a></li> --}}
                              </ul>
                          </li>
                          <li class="has-sub">
                            <a href="javascript:void(0)">Sekolah</a>
                            <ul class="sub-menu">
                                <li><a href="meetings.html">SMP</a></li>
                                <li><a href="meeting-details.html">MTS</a></li>
                                <li><a href="meeting-details.html">SMK</a></li>
                                <li><a href="meeting-details.html">MA</a></li>
                                <li><a href="meeting-details.html">SDIT</a></li>
                            </ul>
                        </li>
                          <li class="scroll-to-section"><a href="{{ route('ppdb') }}">PPSB</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>