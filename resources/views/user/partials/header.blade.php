<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex">
            <img src="" alt="">
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">Addfans</span>
        </a>
        <div class="flex md:order-2 gap-x-3 items-center">
            <livewire:user-notification/>
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white xl:flex lg:flex md:flex sm:flex hidden bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{auth()->user()->name}}<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white xl:hidden lg:hidden md:hidden sm:hidden block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{substr(auth()->user()->name,0,9).'..'}}<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>

            <div id="dropdownDivider" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1" aria-labelledby="dropdownDividerButton">
                  <li>
                    <a href="/profile/{{auth()->user()->username}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                  </li>
                  @if (auth()->user()->hasRole('creator'))
                  <li>
                    <a href="/revenue" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                  </li>

                  @endif

                </ul>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="p-2 w-full rounded shadow-md bg-green-500 hover:bg-green-600 text-white font-medium">Logout</button>
                </form>
            </div>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 {{(request()->is('/')) ? 'md:text-blue-700': 'md:text-gray-700' }} text-white bg-blue-700 rounded md:bg-transparent  md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/discover/search/account" class="block py-2 pr-4 pl-3 {{(request()->is('discover/search/account')) ? 'md:text-blue-700': 'md:text-gray-700' }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Search</a>
                </li>
                @if (auth()->user()->hasRole('creator'))
                <li>
                    <a href="/posts" class="block py-2 pr-4 pl-3 {{(request()->is('posts')) ? 'md:text-blue-700': 'md:text-gray-700' }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">My Posts</a>
                </li>
                <li>
                    <a href="/discover/posts" class="block py-2 pr-4 pl-3 {{(request()->is('discover/posts')) ? 'md:text-blue-700': 'md:text-gray-700' }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Following Posts</a>
                </li>
                @endif
                @if (auth()->user()->hasRole('customer'))
                <li>
                    <a href="/posts" class="block py-2 pr-4 pl-3 border-b border-gray-100 {{(request()->is('posts')) ? 'md:text-blue-700': 'md:text-gray-700' }} hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Following Posts</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

