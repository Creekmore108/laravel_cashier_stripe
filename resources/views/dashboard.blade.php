<x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body border border-2 ml-5">
                <main>
                    <!-- Hero section -->
                    <div class="relative pt-2">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 mix-blend-multiply"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-white">Take control of your</span>
                            <span class="block text-indigo-200">Stripe Account</span>
                            </h1>
                            <p class="mx-auto mt-6 max-w-lg text-center text-xl text-indigo-200 sm:max-w-3xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                            <div class="mx-auto mt-10 max-w-sm sm:flex sm:max-w-none sm:justify-center">
                            <div class="space-y-4 sm:mx-auto sm:inline-grid sm:grid-cols-1 sm:gap-5 sm:space-y-0">
                                <a href="{{ route('showplans') }}" class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-3 text-base font-medium text-indigo-700 shadow-sm hover:bg-indigo-50 sm:px-8">Get started</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Logo Cloud -->
                    <div class="bg-gray-100">
                    <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8">
                        <p class="text-center text-base font-semibold text-gray-500">Trusted by 5 Fortune 500 Businesses</p>
                        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
                        </div>
                        <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
