<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    screens: {
                        xl: '1170px',
                    },
                },
                extend: {

                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    @livewireStyles
</head>
<body>
    <nav class="container relative h-20 w-full flex flex-wrap items-center justify-between py-3 bg-gray-400 text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light">
        <div class="container w-full flex flex-wrap items-center justify-between px-6">
            <div class=" w-full flex gap-10 justify-between" id="navbar">
                <a class="text-xl text-blue-900 pr-2 font-semibold" href="#">Travelesia</a>
                <div class="  flex  w-full justify-between items-center">
                  <ul class="navbar-nav flex flex-wrap pl-0 list-style-none mr-auto gap-96">
                    <li class="nav-item p-2">
                        <a class="nav-link text-white" href="#">Dashboard</a>
                    </li>
                  </ul>
                  <button
                    type="button"
                    class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mr-5">
                    Login
                  </button>
                  <button
                    type="button"
                    class="inline-block px-7 py-3 bg-yellow-400 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg transition duration-150 ease-in-out">
                    Register
                  </button>
                </div> 
            </div>
        </div>
    </nav>
    {{$slot}}
    @livewireScripts
</body>
</html>