@extends('layout.sidebarandnav')

@section('title','Add Message')
    
@section('body')
<p class=" text-2xl">Add Message</p>
<div class="mt-3 rounded-lg shadow-lg p-5">
    
    <div class=" w-full p-5">
        <div class="mb-6 w-full ">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add Message</label>
            <textarea  name="message" id="message"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Message" required > </textarea>
        </div>
        <div class="mb-6 w-full">
            <label for="vip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VIP Status</label>
            <select name="vip" id="vip"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                <option value="0">Basic</option>
                <option value="1">VIP</option>
               
            </select>
        </div>
       
        
    </div>
   
    <span class=" ml-[82%]">
        <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Add</button>
        <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
    </span>
</div>
@endsection