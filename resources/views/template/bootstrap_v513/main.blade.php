<!doctype html>
  <html lang="en">
    <head>
      @include('template.'.$template.'.partial.head')
    </head>
    <body>
       
      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li>
              <a href="{{ route('Home.index') }}" class="nav-link px-2 link-dark">
                BantuKami
              </a>
            </li>
            <!--
            <li>
              <a href="{{ route('Terimakasih.index') }}" class="nav-link px-2 link-dark">
                Ucapan Terimakasih
              </a>
            </li> 
            -->
          </ul>

          <div class="col-md-3 text-end">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <div class="dropdown text-end">
                          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                          </a>
                          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li>
                              <a href="{{ route('Bantukami.index') }}" 
                                class="dropdown-item">
                                Bantu Kami
                              </a>
                            </li> 
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li>
                              <a class="dropdown-item" 
                                href="{{ route('logout.perform') }}">
                                Sign out
                              </a>
                            </li>
                          </ul>
                        </div>
                    @else
                      <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary me-2">Login</a>

                        @if (Route::has('register'))
                          <a href="{{ route('register') }}" type="button" class="btn btn-primary">Sign-up</a>
                        @endif
                    @endauth
                </div>
            @endif

          </div>
        </header> 
      
        <div>
          @yield('content')

        </div>


      </div> 

 
      @include('template.'.$template.'.partial.script') 
    </body>


  </html>
