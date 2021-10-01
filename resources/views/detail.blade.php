@extends('layouts.app')


@section('title', $company->root_domain)


@section('content')

<form action="{{ route('cart.add', $company) }}" method="post">
    @csrf
    <div class="container mx-auto mt-16 flex justify-center">
        <div class="w-1/2 bg-white shadow-md rounded-md p-5">
            <h1 class="text-4xl font-bold text-center flex justify-center items-center">
                <img class="mr-4" src="{{ $company->logo }}" alt="" width="80">
                {{ $company->root_domain }}
            </h1>
            <p class="px-16 my-10 text-center text-xl">
                Basic information about {{ $company->root_domain }}
            </p>
            <div class="px-12 py-4">
                <div class="flex justify-between items-center">
                    <div class="font-bold text-lg">Rank</div>
                    <div class="font-bold text-lg">{{ $company->rank }}</div>
                </div>
            </div>
            <div class="px-12 py-4">
                <div class="flex justify-between items-center">
                    <div class="font-bold text-lg">Linking Root Domains</div>
                    <div class="font-bold text-lg">{{ number_format($company->linking_root_domains) }}</div>
                </div>
            </div>
            <div class="px-12 py-4">
                <div class="flex justify-between items-center">
                    <div class="font-bold text-lg">Domain Authority</div>
                    <div class="font-bold text-lg">{{ number_format($company->domain_authority) }}</div>
                </div>
            </div>
            <div class="px-12 py-4">
                <div class="flex flex-col justify-center items-start border-2 bg-white border-gray-400 rounded-md shadow-md py-8 px-10">
                    <div class="font-bold text-lg">Sample Report #01</div>
                    <div class="font-sm text-md">Report of the company</div>
                </div>
            </div>

            <div class="px-12 py-4">
                <button type="submit" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-full">Add to cart</button>
            </div>
        </div>
    </div>
</form>

@endsection