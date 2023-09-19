@extends('layout.sidebarandnav')

@section('title', 'Add Room')

@section('body')
    <p class=" text-2xl">Add Room</p>
    <form action="/room" method="post">
        @csrf
        <div class="mt-3 rounded-lg shadow-lg p-5">

            <div class="flex w-full justify-around items-center space-x-3 p-5">
                <div class="mb-6 w-full ">
                    <label for="room_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room No</label>
                    <input type="number" name="room_no" id="room_no"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Room Number" required>
                </div>
                <div class="mb-6 w-full">
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select name="status" id="status"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0">Active</option>
                        <option value="1">Avaliable</option>
                        <option value="2">Lock</option>
                    </select>
                </div>


            </div>
            <div class="flex p-5 space-x-3">
                <div class="mb-6 w-full">
                    <label for="person"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                    <input type="text" name="person" id="person"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Person">
                </div>
                <div class="mb-6 w-full">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" name="price" id="price"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Price">
                </div>
            </div>
            <span class=" ml-[82%]">
                <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Add</button>
                <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
            </span>
        </div>
    </form>
@endsection
