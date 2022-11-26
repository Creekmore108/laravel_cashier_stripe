<x-app-layout>
<div class="bg-white">
  <div class="relative bg-white">
    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
      <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
        <div class="space-y-6 px-5 pt-5 pb-6">
          <div class="flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=purple&shade=600" alt="Your Company">
            </div>
            <div class="-mr-2">
              <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x-mark -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="mt-6">
            <nav class="grid gap-y-8">
              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/chart-bar -->
                <svg class="h-6 w-6 flex-shrink-0 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
              </a>

              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/cursor-arrow-rays -->
                <svg class="h-6 w-6 flex-shrink-0 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
              </a>

              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="h-6 w-6 flex-shrink-0 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Security</span>
              </a>

              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/squares-2x2 -->
                <svg class="h-6 w-6 flex-shrink-0 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
              </a>

              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/arrow-path -->
                <svg class="h-6 w-6 flex-shrink-0 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
              </a>
            </nav>
          </div>
        </div>
        <div class="space-y-6 py-6 px-5">
          <div class="grid grid-cols-2 gap-y-4 gap-x-8">
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Blog</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Contact Sales</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help Center</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>

            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>
          </div>
          <div class="space-y-6">
            <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 py-2 px-4 text-base font-medium text-white hover:bg-purple-700">Sign up</a>
            <p class="text-center text-base font-medium text-gray-500">
              Existing customer?
              <a href="#" class="text-purple-600 hover:text-purple-500">Sign in</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pricing with four tiers and toggle -->
  <div class="bg-gradient-to-b from-white to-gray-50">
    <div class="mx-auto max-w-7xl px-4 pt-8 sm:px-6 lg:px-8">
      <div class="sm:align-center sm:flex sm:flex-col">
        <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">Pricing Plans</h1>
        <div class="relative mt-6 flex self-center rounded-lg bg-gray-100 p-0.5 sm:mt-8">
          <button type="button" class="relative w-1/2 whitespace-nowrap rounded-md border-gray-200 bg-white py-2 text-sm font-medium text-gray-900 shadow-sm focus:z-10 focus:outline-none focus:ring-2 focus:ring-purple-500 sm:w-auto sm:px-8">Monthly billing</button>
          <button type="button" class="relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border border-transparent py-2 text-sm font-medium text-gray-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-purple-500 sm:w-auto sm:px-8">Yearly billing</button>
        </div>
      </div>
      <div class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-3">
        <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
          <div class="p-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Bronze</h2>
            <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
            <p class="mt-8">
              <span class="text-4xl font-bold tracking-tight text-gray-900">$25</span>
              <span class="text-base font-medium text-gray-500">/mo</span>
            </p>
            <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-purple-600 py-2 text-center text-sm font-semibold text-white hover:bg-purple-700">Buy Bronze Plan</a>
          </div>
          <div class="px-6 pt-6 pb-8">
            <h3 class="text-sm font-medium text-gray-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Potenti felis, in cras at at ligula nunc.</span>
              </li>

              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Orci neque eget pellentesque.</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
          <div class="p-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Silver</h2>
            <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
            <p class="mt-8">
              <span class="text-4xl font-bold tracking-tight text-gray-900">$35</span>
              <span class="text-base font-medium text-gray-500">/mo</span>
            </p>
            <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-purple-600 py-2 text-center text-sm font-semibold text-white hover:bg-purple-700">Buy Silver Plan</a>
          </div>
          <div class="px-6 pt-6 pb-8">
            <h3 class="text-sm font-medium text-gray-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Potenti felis, in cras at at ligula nunc. </span>
              </li>

              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Orci neque eget pellentesque.</span>
              </li>

              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Donec mauris sit in eu tincidunt etiam.</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
          <div class="p-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Gold</h2>
            <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
            <p class="mt-8">
              <span class="text-4xl font-bold tracking-tight text-gray-900">$45</span>
              <span class="text-base font-medium text-gray-500">/mo</span>
            </p>
            <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-purple-600 py-2 text-center text-sm font-semibold text-white hover:bg-purple-700">Buy Gold Plan</a>
          </div>
          <div class="px-6 pt-6 pb-8">
            <h3 class="text-sm font-medium text-gray-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Potenti felis, in cras at at ligula nunc. </span>
              </li>

              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Orci neque eget pellentesque.</span>
              </li>

              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Donec mauris sit in eu tincidunt etiam.</span>
              </li>

              <li class="flex space-x-3">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500">Faucibus volutpat magna.</span>
              </li>
            </ul>
          </div>
        </div>

       
      </div>
    </div>

    <!-- Feature list -->
    <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
      <div class="mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900">All-in-one platform</h2>
        <p class="mt-4 text-lg text-gray-500">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
      </div>
      <dl class="mt-12 space-y-10 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Invite team members</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Tempor tellus in aliquet eu et sit nulla tellus. Suspendisse est, molestie blandit quis ac. Lacus.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Notifications</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Ornare donec rhoncus vitae nisl velit, neque, mauris dictum duis. Nibh urna non parturient.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">List view</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Etiam cras augue ornare pretium sit malesuada morbi orci, venenatis. Dictum lacus.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Boards</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Interdum quam pulvinar turpis tortor, egestas quis diam amet, natoque. Mauris sagittis.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Keyboard shortcuts</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Ullamcorper in ipsum ac feugiat. Senectus at aliquam vulputate mollis nec. In at risus odio.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Reporting</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Magna a vel sagittis aliquam eu amet. Et lorem auctor quam nunc odio. Sed bibendum.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Calendars</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Sed mi, dapibus turpis orci posuere integer. A porta viverra posuere adipiscing turpis.</dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-9 text-lg font-medium leading-6 text-gray-900">Mobile app</p>
          </dt>
          <dd class="mt-2 ml-9 flex text-base text-gray-500 lg:py-0 lg:pb-4">Quisque sapien nunc nisl eros. Facilisis sagittis maecenas id dignissim tristique proin sed.</dd>
        </div>
      </dl>
    </div>
  </div>

  <!-- Logo cloud on brand -->
  <div class="bg-purple-600">
    <div class="mx-auto max-w-7xl py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
      <div class="lg:space-y-10">
        <h2 class="text-3xl font-bold tracking-tight text-white">The world's most innovative companies use our app</h2>
        <div class="mt-8 flow-root lg:mt-0">
          <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
            <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
              <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-purple-200.svg" alt="Tuple">
            </div>

            <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
              <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-purple-200.svg" alt="Mirage">
            </div>

            <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
              <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-purple-200.svg" alt="StaticKit">
            </div>

            <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
              <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-purple-200.svg" alt="Transistor">
            </div>

            <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
              <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-purple-200.svg" alt="Workcation">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQ offset -->
  <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
    <div class="lg:grid lg:grid-cols-3 lg:gap-8">
      <div class="space-y-4">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900">Frequently asked questions</h2>
        <p class="text-lg text-gray-500">Can’t find the answer you’re looking for? Reach out to our <a href="#" class="font-medium text-purple-600 hover:text-purple-500">customer support</a> team.</p>
      </div>
      <div class="mt-12 lg:col-span-2 lg:mt-0">
        <dl class="space-y-12">
          <div>
            <dt class="text-lg font-medium leading-6 text-gray-900">How do you make holy water?</dt>
            <dd class="mt-2 text-base text-gray-500">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div>
            <dt class="text-lg font-medium leading-6 text-gray-900">What&#039;s the best thing about Switzerland?</dt>
            <dd class="mt-2 text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div>
            <dt class="text-lg font-medium leading-6 text-gray-900">What do you call someone with no body and no nose?</dt>
            <dd class="mt-2 text-base text-gray-500">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>

          <div>
            <dt class="text-lg font-medium leading-6 text-gray-900">Why do you never see elephants hiding in trees?</dt>
            <dd class="mt-2 text-base text-gray-500">Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <!-- Footer 4-column with newsletter and localization dark -->
  <footer class="bg-gray-900">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      <h2 class="sr-only">Footer</h2>
      <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
        <div class="grid grid-cols-2 gap-8 xl:col-span-4">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-base font-medium text-white">Solutions</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Marketing</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Analytics</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Commerce</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Insights</a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-base font-medium text-white">Support</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Pricing</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Documentation</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Guides</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">API Status</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-base font-medium text-white">Company</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">About</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Blog</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Jobs</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Press</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Partners</a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-base font-medium text-white">Legal</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Claim</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Privacy</a>
                </li>

                <li>
                  <a href="#" class="text-base text-gray-300 hover:text-white">Terms</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="mt-12 xl:mt-0">
          <h3 class="text-base font-medium text-white">Language &amp; Currency</h3>
          <form class="mt-4 space-y-4 sm:max-w-xs">
            <fieldset class="w-full">
              <label for="language" class="sr-only">Language</label>
              <div class="relative">
                <select id="language" name="language" class="block w-full rounded-md border border-transparent bg-gray-800 bg-none text-base text-white focus:border-white focus:ring-white sm:text-sm">
                  <option selected>English</option>
                  <option>French</option>
                  <option>German</option>
                  <option>Japanese</option>
                  <option>Spanish</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                  <!-- Heroicon name: mini/chevron-down -->
                  <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </fieldset>
            <fieldset class="w-full">
              <label for="currency" class="sr-only">Currency</label>
              <div class="relative mt-1.5">
                <select id="currency" name="currency" class="block w-full rounded-md border border-transparent bg-gray-800 bg-none text-base text-white focus:border-white focus:ring-white sm:text-sm">
                  <option>ARS</option>
                  <option selected>AUD</option>
                  <option>CAD</option>
                  <option>CHF</option>
                  <option>EUR</option>
                  <option>GBP</option>
                  <option>JPY</option>
                  <option>USD</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                  <!-- Heroicon name: mini/chevron-down -->
                  <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="space-y-4 border-t border-gray-700 pt-8 lg:flex lg:items-center lg:justify-between lg:space-y-0 xl:mt-0">
        <div class="space-y-2">
          <h3 class="text-base font-medium text-white">Subscribe to our newsletter</h3>
          <p class="text-base text-gray-300">The latest news, articles, and resources, sent to your inbox weekly.</p>
        </div>
        <form class="sm:flex sm:max-w-md">
          <label for="email-address" class="sr-only">Email address</label>
          <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 rounded-md border border-transparent bg-white py-2 px-4 placeholder-gray-500 focus:border-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 sm:max-w-xs" placeholder="Enter your email">
          <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
            <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 py-2 px-4 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-800">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
        <div class="flex space-x-6 md:order-2">
          <a href="#" class="text-gray-400 hover:text-gray-300">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-gray-300">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-gray-300">
            <span class="sr-only">Twitter</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-gray-300">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-gray-300">
            <span class="sr-only">Dribbble</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
      </div>
    </div>
  </footer>
</div>
</x-app-layout>