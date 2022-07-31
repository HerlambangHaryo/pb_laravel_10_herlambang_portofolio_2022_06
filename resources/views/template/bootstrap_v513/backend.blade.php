
<!doctype html>
<html lang="en">
  <head>
    @include('template.'.$template.'.partial.head_dashboard')
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" 
          href="{{ route('Dashboard.index') }}">
        {{config('app.name')}}
      </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" 
          href="{{ route('logout.perform') }}">
            Sign out
          </a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <x-bootstrap_v513.sidebar-nav title="{!!$active_as!!}"/>

        <div id="content" class="app-content">
          <div class="container">

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">
                  {{$content}}
                </h1>
              </div>
              @yield('content')


            </main>
          </div>
        </div>

      </div>
    </div>


    @include('template.'.$template.'.partial.script_dashboard')
  </body>
</html>
