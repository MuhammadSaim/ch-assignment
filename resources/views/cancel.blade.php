@extends('layouts.app')


@section('title', 'Cancel')


@section('content')

    <div class="container mx-auto mt-16 flex justify-center">
        <div class="w-1/2 bg-white shadow-md rounded-md p-5">
            <h1 class="text-4xl font-bold text-center flex justify-center items-center">
                Your order is canceled.
            </h1>
            <p class="px-16 my-10 text-center text-xl">
                Your order is cancel due to some technical issues please try later. <a href="{{ route('home') }}" class="ml-3">Go Home</a>
            </p>
        </div>
    </div>

@endsection