<header>
        <div class="px-4 md:px-10 2xl:px-24 py6 lg:py-0">
            <div class="flex items-center lg:relative">
            <div class="w-6/12 lg:w-2/12">
                <div class="logo">
                    <a href="#">
                        LOGO
                    </a>
                </div>
            </div>
            <div class="hidden lg:flex flex-1 xl:relative">
                <nav class="main-menu">
                    <ul class="flex flex-wrap">
                        <li class="main-menu__item">
                            <a class="block py-10 xl:pr-6 md:pr-5 capitalize font-normal text-md text-primary hover:text-orange transition-all" href="#">Home</a>
                        </li>
                        <li class="main-menu__item">
                            <a class="block py-10 xl:pr-6 md:pr-5 capitalize font-normal text-md text-primary hover:text-orange transition-all" href="#">Blog</a>
                        </li>
                        <li class="main-menu__item">
                            <a class="block py-10 xl:pr-6 md:pr-5 capitalize font-normal text-md text-primary hover:text-orange transition-all" href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
                <div class="w-6/12 lg:w-3/12">
                        <ul class="flex items-center justify-end">
                            <li class="ml-6 lg:block">
                                <button class="search-toggle text-right text-primary text-md hover:text-orange transition-all" aria-label="icon-settings">
                                    <i class="icon-magnifier">
                                    <x-search-logo />
                                    </i>
                                </button>
                            </li>
                            <li class="ml-6">
                                <a href="{{route('cart.index')}}" class="text-primary text-md hover:text-orange transition-all relative offcanvas-toggle">
                                    <x-cart-logo />
                                </a>
                            </li>
                            <li class="ml-6">
                                <a href="{{route('login')}}" class="text-primary text-md hover:text-orange transition-all relative offcanvas-toggle">
                                    LogIn|Signup
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            
        </div>
        
    </header>