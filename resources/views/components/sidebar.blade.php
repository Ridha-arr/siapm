    <div class="fixed-top" style="margin-top: 13rem">
        <div data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
            aria-labelledby="offcanvasScrollingLabel"
            class="offcanvas show offcanvas-start d-flex flex-column flex-shrink-0 p-3 text-white bg-dark shadow p-3 mb-5 float-start position-absolute "
            style="width: 280px; z-index: 999;height:100vh; margin-top: -1.5rem">
            <div class="header-profil">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/img/img.jpeg') }}" alt="" width="50" height="55"
                            class="rounded-circle me-2">
                    </div>
                    <div class="col-md-8">
                        <span class="h6" id="nama-fs-4">{{ auth()->user()->name }}</span>
                        <br>
                        <span id="kategori" class="ms-0">{{ auth()->user()->level }}</span>
                    </div>
                </div>
            </div>
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            </a>
            <hr id="garis1">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                        aria-current="page">
                        <i class="bi-grid-fill" style="font-size: 1.5rem; color: #325135"></i>
                        <h6 id="dashboard">Dashboard</h6>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil') }}"
                        class="nav-link text-white {{ Route::currentRouteName() == 'profil' ? 'active' : '' }}">
                        <i class="bi-person-fill" style="font-size: 1.5rem; color: #325135"></i>
                        <h6 id="profil">Profil</h6>
                    </a>
                </li>
                <li>
                    <a href="{{ route('monitoring') }}"
                        class="nav-link text-white {{ Route::currentRouteName() == 'monitoring' ? 'active' : '' }}">
                        <i class="bi-display-fill" style="font-size: 1.5rem; color: #325135"></i>
                        <h6 id="monitoring">Monitoring</h6>
                    </a>
                </li>


                <a href="#" class="nav-link text-white">
                    <i class="bi-table" style="font-size: 1.5rem; color: #325135"></i>
                    <h6 id="data-LKE">Data LKE</h6>
                </a>
                </li>

                @if (in_array(auth()->user()->level,['admin','operator']))
                    
                <li>
                    <a href="{{ route('upload1') }}"
                        class="nav-link text-white {{ Route::currentRouteName() == 'upload1' ? 'active' : '' }}">
                        <i class="bi-file-arrow-up-fill" style="font-size: 1.5rem; color: #325135"></i>
                        <h6 id="upload">Upload Data</h6>
                    </a>
                </li>
                @endif
                @if (in_array(auth()->user()->level,['admin','verifikator']))
                <li>
                <a href="{{ route('verifikasi') }}"
                    class="nav-link text-white {{ Route::currentRouteName() == 'verifikasi' ? 'active' : '' }}">
                    <i class="bi-patch-check-fill" style="font-size: 1.5rem; color: #325135"></i>
                    <h6 id="verifikasi">Verifikasi Data</h6>
                </a>
                </li>
                @endif



                <a href="#" class="nav-link text-white">
                    <i class="bi-file-check-fill" style="font-size: 1.5rem; color: #325135"></i>
                    <h6 id="audit">Audit</h6>
                </a>
                </li>

                <hr id="garis2">

                <li>
                    <a href="{{ route('notifikasi') }}" class="nav-link text-white">
                        <i class="bi-bell-fill" style="font-size: 1.5rem; color: #325135"></i>
                        <h6 id="notifikasi">Notifikasi</h6>
                    </a>
                </li>
                @if (auth()->user()->level == 'admin')

                    <li>
                        <a href="{{ route('cms') }}" class="nav-link text-white">
                            <i class="bi-gear-fill" style="font-size: 1.5rem; color: #325135"></i>
                            <h6 id="cms">CMS</h6>
                        </a>
                    </li>

                @endif

                <li>
                    <a href="{{ route('logout') }}" class="nav-link text-white">
                        <i class="bi-arrow-right-square-fill" style="font-size: 1.5rem; color: #325135"></i>
                        <h6 id="logout">Logout</h6>
                    </a>
                </li>
            </ul>
        </div>
    </div>
