<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <header class="relative bg-white">
    <nav aria-label="Top" class="max-w-full mx-auto sm:px-6 lg:px-8">
      <div class="border-b border-gray-200 px-4 pb-14 sm:px-0 sm:pb-0">
        <div class="h-16 flex items-center justify-between">
          <!-- Logo -->
          <div class="flex-1 flex">
            <a href="#">
              <span class="sr-only">Workflow</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>



          <div class="flex-1 flex items-center justify-end">

            <!-- Cart -->
            <div class="ml-4 flow-root lg:ml-8">
              <a href="#" class="group -m-2 p-2 flex items-center">
                <!-- Heroicon name: outline/shopping-bag -->
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>
