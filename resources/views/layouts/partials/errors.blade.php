<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
{{-- <ul>@foreach($errors->all() as $error)
    <li class="text-danger">{{ $error }}</li>
    @endforeach
</ul> --}}


<!-- Code block starts -->
<div class="flex items-center justify-center px-4">
    <div role="alert" id="alert" class="transition duration-150 ease-in-out w-full lg:w-11/12 mx-auto bg-white dark:bg-gray-800 shadow rounded flex flex-col py-4 md:py-0 items-center md:flex-row justify-between">
        <div class="flex flex-col items-center md:flex-row">
            <div class="mr-3 p-4 bg-yellow-400 rounded md:rounded-tr-none md:rounded-br-none text-white">
                <img class="focus:outline-none" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple-with-action-button-warning-svg1.svg" alt="warning" />
            </div>
            <p class="mr-2 text-base font-bold text-gray-800 dark:text-gray-100 mt-2 md:my-0">Warning</p>
            <div class="h-1 w-1 bg-gray-300 dark:bg-gray-700 rounded-full mr-2 hidden xl:block"></div>
            @foreach($errors->all() as $error)
            <p class="text-sm lg:text-base dark:text-gray-400 text-gray-600 lg:pt-1 xl:pt-0 sm:mb-0 mb-2 text-center sm:text-left">
            {{ $error }}</p>
            @endforeach
        </div>
        <div class="flex xl:items-center lg:items-center sm:justify-end justify-center pr-4">
            <button class="focus:outline-none focus:text-indigo-400 hover:text-indigo-400 text-sm mr-4 font-bold cursor-pointer text-indigo-700 dark:text-indigo-600">Details</button>
            <button class="focus:outline-none focus:text-gray-400 hover:text-gray-400 text-sm cursor-pointer text-gray-600 dark:text-gray-400" onclick="closeAlert()">Dismiss</button>
        </div>
    </div>
</div>
<!-- Code block ends -->


<script>
var Alert = document.getElementById("alert");
var close = document.getElementById("close-modal");
Alert.style.transform = "translateY(0%)";
function closeAlert() {
    Alert.style.transform = "translateY(-200%)";
    setTimeout(function () {
        Alert.style.transform = "translateY(0%)";
    }, 1000);
}

</script>
