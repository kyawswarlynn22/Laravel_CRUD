@extends('layout.sidebarandnav');

@section('title', 'Dashboard');

@section('body')
    <div class="flex justify-between flex-wrap">
        <div class=" relative pl-0  border w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-blue-600"></div>
            <p class="mt-2 p-2 text-2xl pl-5">Room</p>
            <div class="flex  p-2 pl-5 items-center  justify-between">
                <p class="text-[#3786FB] font-bold text-2xl"> @php
                    $pag = $roomData;
                @endphp
                    {{ $total = $pag->total() }}</p>
                <div class="h-12 bg-blue-600 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class=" relative  border  w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-pink-600"></div>
            <p class="mt-2 p-2 text-2xl pl-5">UnreadMessage</p>
            <div class="flex  p-2 pl-5 items-center  justify-between">
                <p class=" text-pink-600 font-bold text-2xl"> @php
                    $pag = $messageData;
                @endphp
                    {{ $total = $pag->total() }}</p>
                <div class="h-12 bg-pink-600 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"
                            d="M320 96H88a40 40 0 0 0-40 40v240a40 40 0 0 0 40 40h334.73a40 40 0 0 0 40-40V239" />
                        <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="m112 160l144 112l87-65.67" />
                        <circle cx="431.95" cy="128.05" r="47.95" fill="#ffffff" />
                        <path fill="#ffffff"
                            d="M432 192a63.95 63.95 0 1 1 63.95-63.95A64 64 0 0 1 432 192Zm0-95.9a32 32 0 1 0 31.95 32a32 32 0 0 0-31.95-32Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class=" relative  border  w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-green-600"></div>
            <p class="mt-2 p-2 text-2xl pl-5">Drug</p>
            <div class="flex  p-2 pl-5 items-center  justify-between">
                <p class=" text-green-600 font-bold text-2xl"> @php
                    $pag = $drugList;
                @endphp
                    {{ $total = $pag->total() }}</p>
                <div class="h-12 bg-green-600 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M16.2 3.5c-1-1-2.3-1.5-3.5-1.5s-2.6.5-3.5 1.5L3.4 9.1c-2 2-2 5.1 0 7.1s5.1 2 7.1 0l5.7-5.7c1.9-1.9 1.9-5.1 0-7m-1.4 5.6L12 11.9L8.4 8.4L4 12.8c0-.8.2-1.7.9-2.3l5.7-5.7c.5-.5 1.3-.8 2-.8s1.5.3 2.1.8c1.2 1.3 1.2 3.1.1 4.3m4.8-2c0 .8-.2 1.5-.4 2.3c1 1.2 1 3-.1 4.1l-2.8 2.8l-1.5-1.5l-2.8 2.8c-1.3 1.3-3.1 2-4.8 2c.2.3.4.6.7.9c2 2 5.1 2 7.1 0l5.7-5.7c2-2 2-5.1 0-7.1c-.5-.2-.8-.4-1.1-.6Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class=" relative  border  w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-yellow-400"></div>
            <p class="mt-2 p-2 text-2xl pl-5"> Appointment</p>
            <div class="flex  p-2 pl-5  items-center  justify-between">
                <p class="text-yellow-400 font-bold text-2xl ">
                    @php
                        $pag = $apmList;
                    @endphp
                    {{ $total = $pag->total() }}
                </p>
                <div class="h-12 bg-yellow-400 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="#ffffff" stroke-width="4">
                            <circle cx="24" cy="11" r="7" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 41c0-8.837 8.059-16 18-16" />
                            <circle cx="34" cy="34" r="9" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M33 31v4h4" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex space-x-5 mt-5 mb-5">
        <div class="relative overflow-x-auto shadow-md w-full sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 bg-blue-600 text-lg font-semibold text-left text-white  dark:text-white dark:bg-gray-800">
                    Room Status
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Room No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Person
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roomData as $room)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rom{{ $room->room_no }}
                            </th>
                            <td class="px-6 py-4">
                                @if ($room->status == 0)
                                    Active
                                @elseif($room->status == 1)
                                    Available
                                @elseif($room->status == 2)
                                    Lock
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($room->person == 0)
                                    none
                                @else
                                    {{ $room->person }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                ${{ $room->price }}
                            </td>
                        </tr>
                    @empty
                        <p class=" text-2xl text-red-500"> No Room Status</p>
                    @endforelse

                </tbody>
            </table>
           <a href="/room"> <button class=" float-right bg-blue-600 px-3 py-1 rounded-md text-white m-2">See More</button></a>
        </div>

        <div class="relative overflow-x-auto shadow-md w-full sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left text-white bg-blue-600 dark:text-white dark:bg-gray-800">
                    UnreadMessage

                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                </thead>
                <tbody>
                    @forelse ($messageData as $message)
                        <tr
                            class="bg-white border-b flex justify-between items-center dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row"
                                class="px-6 py-4 whitespace-normal  font-medium text-gray-900  dark:text-white">
                                {{ $message->text }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if ($message->message_person == 0)
                                    Normal
                                @else
                                    <span class="flex mt-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#ef4444"
                                                d="M5.75 1a.75.75 0 0 1 .75.75V3.6l1.72-.344a8.677 8.677 0 0 1 4.925.452l.204.081a7.999 7.999 0 0 0 4.91.334a1.2 1.2 0 0 1 1.491 1.164v7.367c0 .644-.439 1.206-1.064 1.362l-.214.053a8.677 8.677 0 0 1-5.327-.361a8.676 8.676 0 0 0-4.924-.452L6.5 13.6v8.15a.75.75 0 0 1-1.5 0v-20A.75.75 0 0 1 5.75 1Z" />
                                        </svg>VIP Message
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            <a href="/message"> <button class=" float-right bg-blue-600 px-3 py-1 rounded-md text-white m-2">See More</button></a>
        </div>

    </div>
    <div class="flex space-x-5 ">

        <div class="relative overflow-x-auto w-full shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left text-white bg-blue-600 dark:text-white dark:bg-gray-800">
                    Drug

                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Drug name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            mg
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($drugList as $drug)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $drug->drug_name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $drug->type }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $drug->stock }}
                            </td>
                            <td class="px-6 py-4">
                                ${{ $drug->price }}/per items
                            </td>


                        </tr>
                    @empty
                    @endforelse
                </tbody>

            </table>
            <a href="/drug"> <button class=" float-right bg-blue-600 px-3 py-1 rounded-md text-white m-2">See More</button></a>
        </div>

        <div class="relative overflow-x-auto shadow-md w-full sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left text-white bg-blue-600 dark:text-white dark:bg-gray-800">
                    Appointment
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Doctor Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Room No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Time
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($apmList as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Dr.{{ $item->dr_name }}
                            </th>
                            <td class="px-6 py-4">
                                Room{{ $item->room_no }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->date_time }}
                            </td>
                        </tr>
                    @empty
                        <p>Not data</p>
                    @endforelse

                </tbody>
            </table>
            <a href="/appointment"> <button class=" float-right bg-blue-600 px-3 py-1 rounded-md text-white m-2">See More</button></a>
        </div>

    </div>
@endsection
