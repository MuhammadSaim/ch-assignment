<div class="container mx-auto p-5 rounded-md bg-white mt-16">
        <form action="">
            <h1 class="text-4xl font-bold text-gray-700 mb-10 text-center">Search Companies</h1>
            <div class="flex justify-between items-center px-60">
                <div class="w-1/3 mr-3">
                    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                        <label for="name" class="block text-xs font-medium text-gray-900">Name or website</label>
                        <input type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm text-left" placeholder="e.g apple or apple.com">
                    </div>
                </div>
                <div class="w-1/3 mr-3">
                    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                        <label for="domain_authority" class="block text-xs font-medium text-gray-900">Domain Authority</label>
                        <input type="text" name="domain_authority" id="domain_authority" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm text-left" placeholder="e.g 77">
                    </div>
                </div>
                <div class="w-1/3 mr-3">
                    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                        <label for="root_domain_count" class="block text-xs font-medium text-gray-900">Root domains count</label>
                        <input type="text" name="root_domain_count" id="root_domain_count" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm text-left" placeholder="e.g 77000">
                    </div>
                </div>
                <div>
                    <button type="submit" class="inline-flex items-center px-6 py-4 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>