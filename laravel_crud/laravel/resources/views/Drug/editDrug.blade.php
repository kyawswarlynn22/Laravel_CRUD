@extends('layout.sidebarandnav')

@section('title', 'Edit Drug')

@section('body')
    <p class=" text-2xl">Edit Drug</p>
    <form action="/drug/{{ $drugDetail->id }}" method="post">
        @csrf
        @method('put')
        <div class="mt-3 rounded-lg shadow-lg p-5">

            <div class="flex w-full justify-around items-center space-x-3 p-5">
                <div class="mb-6 w-full ">
                    <label for="drug_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Drug
                        Name</label>
                    <input type="text" name="drug_name" id="drug_name" value="{{ $drugDetail->drug_name }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Drug Name">
                    @error('drug_name')
                        <p class=" text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 w-full">
                    <label for="weight"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
                    <input type="weight" name="weight" id="weight" value="{{ $drugDetail->type }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="weight">
                    @error('weight')
                        <p class=" text-red-500">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="flex p-5 space-x-3">
                <div class="mb-6 w-full">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                    <input type="number" name="stock" id="Stock" value="{{ $drugDetail->stock }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Stock">
                    @error('stock')
                        <p class=" text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price(per
                        item)</label>
                    <input type="number" name="price" id="price" value="{{ $drugDetail->price }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Price">
                    @error('price')
                        <p class=" text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <span class=" ml-[82%]">
                <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Update</button>
                <a href="/drug"><button type="button"
                        class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button></a>
            </span>
        </div>
    </form>
@endsection
