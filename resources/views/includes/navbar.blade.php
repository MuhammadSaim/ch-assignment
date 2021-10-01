<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <header class="relative bg-white">
    <nav aria-label="Top" class="max-w-full mx-auto sm:px-6 lg:px-8">
      <div class="border-b border-gray-200 px-4 pb-14 sm:px-0 sm:pb-0">
        <div class="h-16 flex items-center justify-between">
          <!-- Logo -->
          <div class="flex-1 flex">
            <a href="{{ route('home') }}">
              <span class="sr-only">Workflow</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>


          <div class="flex-1 flex items-center justify-end">

            <!-- Cart -->
            <div class="ml-4 flow-root lg:ml-8">
              <a href="{{ route('cart') }}" class="group -m-2 p-2 flex items-center">
                <!-- Heroicon name: outline/shopping-bag -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="ml-2 text-md font-bold text-gray-700 group-hover:text-gray-800">
                  @if (session()->has('cart'))
                    {{ count(session()->get('cart')) }}
                  @else
                    {{ '0' }}
                  @endif
                </span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>
