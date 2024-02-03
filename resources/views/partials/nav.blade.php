
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('dashboard') }}" class="nav-link px-2 link-dark">Inicio</a></li>
          <li><a href="{{ route('establecimiento') }}" class="nav-link px-2 link-secondary">Nuevo Establecimiento</a></li>
          
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            
            @if(session()->has('data_user'))
                <?php $dataUser = session('data_user'); ?>
                
                <img src="{{ $dataUser['avatar'] }}" alt="mdo" width="32" height="32" class="rounded-circle">
                @endif
          </a>
          
        
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" >
            <li><a class="dropdown-item">  @if(session()->has('data_user'))
                <?php $dataUser = session('data_user'); ?>
                {{ $dataUser['name'].' '. $dataUser['surname']}}
                @endif</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>