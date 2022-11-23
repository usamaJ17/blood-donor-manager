{{-- This page is created using tailwing css --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0ed3cf">
    <title>BDS UET KSK</title>
    <link rel="icon" type="image/x-icon" href="{{ url('/frontend/images/bds-favicon-real.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body class="" style="background: #edf2f7;">
    <style>
        .login_img_section {
            background: linear-gradient(rgba(2, 2, 2, .5), rgba(0, 0, 0, .5)), url({{ url('/frontend/images/login.png') }}) center center;
        }

        code {
            font-family: Consolas, "courier new";
            color: rgb(226, 41, 78);
            padding: 2px;
            font-size: 90%;
        }
    </style>
    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
          justify-around items-center">
            <div
                class=" 
                  bg-black 
                  opacity-20 
                  inset-0 
                  z-0">

            </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <h1 class="text-white font-bold text-4xl font-sans">BDS UET KSK</h1>
                <p class="text-white mt-1">Login with your ID to use</p>
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white dark:bg-gray-900 space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
                <form action="{{ route('login') }}" method="POST"
                    class="mt-10 bg-white dark:bg-gray-900 rounded-md p-5">
                    @csrf
                    <h1 class="text-gray-100 font-bold text-2xl mb-6 ">Hello Again!</h1>
                    <div class="grid gap-6 sm:grid-cols-1">
                        <div class="relative z-0 col-span-3">
                            <input type="text" name="name"
                                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-0"
                                placeholder=" " />
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">User
                                Name</label>
                            <code>{{ $admin_error_name }}</code>
                        </div>
                        <div class="relative z-0 col-span-3">
                            <input type="password" name="password"
                                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-0"
                                placeholder=" " />
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Password</label>
                            <code>{{ $admin_error_pass }}</code>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="mt-5 text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
