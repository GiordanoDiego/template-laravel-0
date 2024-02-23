
{{-- esempio di uso sezione, definisco una sessione --}}
@section('main-content')

  <h2> Qui c'è il main</h2>
@endsection


<main>
    <div class="container">
        <div class="row">
            <div class="col">
                @yield('main-content') 
                {{-- uso la sessione --}}
            </div>
        </div>
    </div>
</main>