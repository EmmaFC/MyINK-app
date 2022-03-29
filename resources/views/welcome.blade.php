
  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
      <x-head />
  
      <body>
        <div id="app"> 
          <div class="landingpage-bg">
            <x-header />
            <main class="py-4">
              
              <div class="container">
                <div class="row justify-content-center">
                  <h1>BIENVENID@</h1>
                  <h5>Descubre tu próxima lectura</h5>
                  <img src="{{ $random_book->cover }}" alt="{{ $random_book->title }}" width="20">
                
                </div>
              </div>

            </main>
            <x-footer />

          </div>
        </div>
      </body>
  
  </html>

  {{--   <div class='post' style='background-image: url({{ $random_book }})'> --}}
                    {{--        {{ $random_book }}           --}} 