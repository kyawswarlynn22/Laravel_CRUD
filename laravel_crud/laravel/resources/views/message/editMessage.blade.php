@extends('layout.sidebarandnav')

@section('title', 'Edit Message')

@section('body')
    <p class=" text-2xl">Edit Message</p>
    <form action="/message/{{ $messageDetail->id }}" method="post">
        @csrf
        @method('put')
        <div class="mt-3 rounded-lg shadow-lg p-5">

            <div class=" w-full p-5">
                <div class="mb-6 w-full ">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add
                        Message</label>
                    <input name="text" id="text" value="{{ $messageDetail->text }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Message" required>
                </div>
                <div class="mb-6 w-full">
                    <label for="message_person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VIP
                        Status</label>
                    <select name="message_person" id="message_person"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0" @if ($messageDetail->message_person == 0) selected @endif>Basic</option>
                        <option value="1" @if ($messageDetail->message_person == 1) selected @endif>VIP</option>
                    </select>
                </div>


            </div>

            <span class=" ml-[82%]">
                <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Update</button>
                <a href="/message"><button type="button" class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button></a>
            </span>
        </div>
    </form>
@endsection
