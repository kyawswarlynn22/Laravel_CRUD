@extends('layout.sidebarandnav')

@section('title','Add Drug')
    
@section('body')
<p class=" text-2xl">Add Appointmet</p>
<form action="/appointment" method="post">
    @csrf
<div class="mt-3 rounded-lg shadow-lg p-5">
    
    <div class="flex w-full justify-around items-center space-x-3 p-5">
        <div class="mb-6 w-full ">
            <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor Name</label>
            <input type="text" name="doctor" id="doctor"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Doctor Name" required>
        </div>
        <div class="mb-6 w-full ">
            <label for="room" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Number</label>
            <input type="text" name="room" id="room"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Room Number" required>
        </div>
       
       
        
    </div>
    <div class="flex p-5 space-x-3">
        <div class="mb-6 w-full">
            <label for="date"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment Date and Time</label>
            <input type="datetime-local" name="date" id="date"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
        </div>
        <div class="mb-6 opacity-0 w-full">
            <label for="price"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="number" name="price" id="price"
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