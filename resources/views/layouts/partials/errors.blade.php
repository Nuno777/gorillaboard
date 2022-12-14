@vite(['/public/css/toast.css', '/public/js/toast.js'])

<div class="tosta warming">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        
    @endforeach
</div>

{{-- <!-- Code block starts -->
<div class="flex items-center justify-center px-4">
    <div role="alert" id="alert" class="transition duration-150 ease-in-out w-full lg:w-11/12 mx-auto bg-white dark:bg-gray-800 shadow rounded flex flex-col pt-4 md:pt-3 items-center md:flex-row justify-between">
        <div class="flex flex-col items-center md:flex-row">
            <div class="mr-3 p-4 bg-yellow-400 rounded md:rounded-tr-none md:rounded-br-none text-white">

                <img class="focus:outline-none" href="{{ asset('img/56-warning-outline.gif') }}" alt="warning" />
            </div>
            <p class="mr-2 text-base font-bold text-gray-800 dark:text-gray-100 mt-2 md:my-0">Warning</p>
            <div class="h-1 w-1 bg-gray-300 dark:bg-gray-700 rounded-full mr-2 hidden xl:block"></div>
            @foreach ($errors->all() as $error)
            <p class="text-sm lg:text-base dark:text-gray-400 text-gray-600 lg:pt-1 xl:pt-0 sm:mb-0 mb-2 text-center sm:text-left">
            {{ $error }}</p>
            @endforeach
        </div>
        <div class="flex xl:items-center lg:items-center sm:justify-end justify-center pr-4">
            <button class="focus:outline-none focus:text-gray-400 hover:text-gray-400 text-sm cursor-pointer text-gray-600 dark:text-gray-400" onclick="closeAlert()">Dismiss</button>
        </div>
    </div>
</div>
<!-- Code block ends -->


<script>
var alert = document.getElementById("alert");
  alert.style.transform = "translateX(150%)";
  alert.classList.remove("hidden");
  alert.style.transform = "translateX(0%)";

  function closeAlert() {
    alert.style.transform = "translateX(150%)";
    alert.classList.remove("hidden");
  }

</script>
 --}}
{{-- <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <img class="focus:outline-none" href="{{ asset('img/56-warning-outline.gif') }}" alt="warning" />
      <div class="toast-body">
        @foreach ($errors->all() as $error)
            <p class="text-sm lg:text-base dark:text-gray-400 text-gray-600 lg:pt-1 xl:pt-0 sm:mb-0 mb-2 text-center sm:text-left">
            {{ $error }}</p>
            @endforeach
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div> --}}
