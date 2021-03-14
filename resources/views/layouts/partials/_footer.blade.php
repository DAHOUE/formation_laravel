
<footer>

    <p>
     &copy; Copyright {{ date('Y') }}
     @if(Route::is('app_home'))
     &middot;<a href="{{ route('app_about') }}">Propos de nous !<a>
     @endif


        </p>
 </footer>
