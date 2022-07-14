<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Styles -->

</head>

<body class="antialiased">
    <!-- ====== Navbar Section Start -->
    <header x-data="{
        navbarOpen: false
    }" class="flex items-center w-full bg-white">
        <div class="container">
            <div class="relative flex items-center justify-between -mx-4">
                <div class="max-w-full px-4 w-60">
                    <a href="javascript:void(0)" class="block w-full py-5">
                        <img src="https://cdn.tailgrids.com/1.0/assets/images/logo/logo.svg" alt="logo"
                            class="w-full" />
                    </a>
                </div>
                <div class="flex items-center justify-between w-full px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="
                                block
                                absolute
                                right-4
                                top-1/2
                                -translate-y-1/2
                                lg:hidden
                                focus:ring-2
                                ring-primary
                                px-3
                                py-[6px]
                                rounded-lg">
                            <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                            <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                            <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                        </button>
                        <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="
                    absolute
                    py-5
                    px-6
                    bg-white
                    shadow
                    rounded-lg
                    max-w-[250px]
                    w-full
                    lg:max-w-full lg:w-full
                    right-4
                    top-full
                    lg:block lg:static lg:shadow-none
                  ">
                            <ul class="blcok lg:flex">
                                <li>
                                    <a href="javascript:void(0)"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:inline-flex lg:ml-12">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:inline-flex lg:ml-12">
                                        Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:inline-flex lg:ml-12">
                                        Features
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                        <a href="javascript:void(0)"
                            class="py-3 text-base font-medium text-dark hover:text-primary px-7">
                            Login
                        </a>
                        <a href="javascript:void(0)"
                            class="py-3 text-base font-medium text-white rounded-lg bg-primary px-7 hover:bg-opacity-90">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Navbar Section End -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
