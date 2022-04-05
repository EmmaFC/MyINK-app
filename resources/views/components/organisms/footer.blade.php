<footer class="navbar{{--  fixed-bottom  --}}navbar-expand-md navbar-dark shadow-sm">
    <div class="d-flex flex-row justify-content-between align-content-center">
      <div class="text-center d-flex align-content-end">
         <h6>Copyright {{ $companies->first()->name }} &copy;</h6>
      </div>
      <div class="d-flex flex-row justify-content-end align-content-center">
        @foreach ($icons as $icon)
        <a class="mx-2" href="{{ $icon->url }}">
          <svg class="text-center flex-row justify-content-center align-content-center" width="35" height="35">
            <image class="change-my-color" xlink:href="{{ $icon->image }}" width="35"  height="35" alt="{{ $icon->name }}" />
          </svg>
        </a>
        @endforeach
      </div>
    </div>
</footer>


{{-- 
    <div class="mb-2">
                <div id="socialmediabar">
                    <div class="d-flex flex-row justify-content-end align-content-center me-4 mt-0">
                        <div class="mx-2 py-2">
                            <a href="#" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                        </div>


    --}}