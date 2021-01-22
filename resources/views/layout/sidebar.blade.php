<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>


    <li class="nav-item {{ active_class(['Raw_materials/input-page-raw-materials']) }}">
      <a class="nav-link" href="{{ url('/Raw_materials/input-page-raw-materials') }}">
       <i class="menu-icon mdi mdi-keyboard-variant"></i>
       <span class="menu-title">{{ __('Raw Materials')}}</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['First-Phase/input-page-first-phase']) }}">
      <a class="nav-link" href="{{ url('/First-Phase/input-page-first-phase') }}">
       <i class="menu-icon mdi mdi-keyboard-variant"></i>
       <span class="menu-title">{{ __('First Phase')}}</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['Prediction-Phase/input-output-page-prediction']) }}">
      <a class="nav-link" href="{{ url('/Prediction-Phase/input-output-page-prediction') }}">
       <i class="menu-icon mdi mdi-keyboard-variant"></i>
       <span class="menu-title">{{ __('Prediction Phase')}}</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['Final-Test-Phase/input-page-final-test-phase']) }}">
      <a class="nav-link" href="{{ url('/Final-Test-Phase/input-page-final-test-phase') }}">
       <i class="menu-icon mdi mdi-keyboard-variant"></i>
       <span class="menu-title">{{ __('Final Test Phase')}}</span>
      </a>
    </li>

      <li class="nav-item {{ active_class(['Database-handle/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#Database-handle" aria-expanded="{{ is_active_route(['Database-handle/*']) }}" aria-controls="Database-handle">
              <i class="menu-icon mdi mdi-database"></i>
              <span class="menu-title">{{ __('Previous Data')}}</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['Database-handle/*']) }}" id="Database-handle">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['Database-handle/raw-materials-data-load']) }}">
                      <a class="nav-link" href="{{ url('/Database-handle/raw-materials-data-load') }}">{{ __('Previous Raw Material Data')}}</a>
                  </li>
{{--                  <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>--}}
{{--                  </li>--}}
                  <li class="nav-item {{ active_class(['Database-handle/first-phase-data-load']) }}">
                      <a class="nav-link" href="{{ url('/Database-handle/first-phase-data-load') }}">{{ __('Previous First Phase Data')}}</a>
                  </li>
                  <li class="nav-item {{ active_class(['Database-handle/prediction-phase-data-load']) }}">
                      <a class="nav-link" href="{{ url('/Database-handle/prediction-phase-data-load') }}">{{ __('Previous Prediction Phase Data')}}</a>
                  </li>
                  <li class="nav-item {{ active_class(['Database-handle/final-test-phase-data-load']) }}">
                      <a class="nav-link" href="{{ url('/Database-handle/final-test-phase-data-load') }}">{{ __('Previous Final Test Data')}}</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['charts/chartjs']) }}">
          <a class="nav-link" href="{{ url('/charts/chartjs') }}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">{{ __('Charts')}}</span>
          </a>
      </li>

{{--    <li class="nav-item {{ active_class(['icons/material']) }}">--}}
{{--      <a class="nav-link" href="{{ url('/icons/material') }}">--}}
{{--        <i class="menu-icon mdi mdi-emoticon"></i>--}}
{{--        <span class="menu-title">Icons</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--    <li class="nav-item {{ active_class(['user-pages/*']) }}">--}}
{{--      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">--}}
{{--        <i class="menu-icon mdi mdi-lock-outline"></i>--}}
{{--        <span class="menu-title">User Pages</span>--}}
{{--        <i class="menu-arrow"></i>--}}
{{--      </a>--}}
{{--      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">--}}
{{--        <ul class="nav flex-column sub-menu">--}}
{{--          <li class="nav-item {{ active_class(['user-pages/login']) }}">--}}
{{--            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>--}}
{{--          </li>--}}
{{--          <li class="nav-item {{ active_class(['user-pages/register']) }}">--}}
{{--            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>--}}
{{--          </li>--}}
{{--          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">--}}
{{--            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>--}}
{{--          </li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">--}}
{{--        <i class="menu-icon mdi mdi-file-outline"></i>--}}
{{--        <span class="menu-title">Documentation</span>--}}
{{--      </a>--}}
{{--    </li>--}}
  </ul>
</nav>



