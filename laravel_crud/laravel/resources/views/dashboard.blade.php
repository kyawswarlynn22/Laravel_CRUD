@extends('layout.sidebarandnav');

@section('title', 'Dashboard');

@section('body')
    <div class="flex space-x-5 mb-5">
        <div class="relative overflow-x-auto shadow-md w-full sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 bg-blue-600 text-lg font-semibold text-left text-white  dark:text-white dark:bg-gray-800">
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Room102
                        </th>
                        <td class="px-6 py-4">
                            Active
                        </td>
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right flex space-x-2">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3b82f6" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/>
                                <path fill="#3b82f6" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/>
                                    <path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/>
                                </g>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444" d="M7 3h2a1 1 0 0 0-2 0ZM6 3a2 2 0 1 1 4 0h4a.5.5 0 0 1 0 1h-.564l-1.205 8.838A2.5 2.5 0 0 1 9.754 15H6.246a2.5 2.5 0 0 1-2.477-2.162L2.564 4H2a.5.5 0 0 1 0-1h4Zm1 3.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5ZM9.5 6a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm-4.74 6.703A1.5 1.5 0 0 0 6.246 14h3.508a1.5 1.5 0 0 0 1.487-1.297L12.427 4H3.573l1.187 8.703Z"/>
                            </svg></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="relative overflow-x-auto shadow-md w-full sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left text-white bg-blue-600 dark:text-white dark:bg-gray-800">
                    UnreadMessage
                    
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      
                      
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b flex justify-between items-center dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17" <br>
                            <span class="flex mt-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ef4444" d="M5.75 1a.75.75 0 0 1 .75.75V3.6l1.72-.344a8.677 8.677 0 0 1 4.925.452l.204.081a7.999 7.999 0 0 0 4.91.334a1.2 1.2 0 0 1 1.491 1.164v7.367c0 .644-.439 1.206-1.064 1.362l-.214.053a8.677 8.677 0 0 1-5.327-.361a8.676 8.676 0 0 0-4.924-.452L6.5 13.6v8.15a.75.75 0 0 1-1.5 0v-20A.75.75 0 0 1 5.75 1Z"/>
                                </svg>VIP Message
                            </span>
                        </th>
                        <td class="px-6 py-4 text-right flex space-x-2">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3b82f6" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/>
                                <path fill="#3b82f6" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/>
                                    <path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/>
                                </g>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444" d="M7 3h2a1 1 0 0 0-2 0ZM6 3a2 2 0 1 1 4 0h4a.5.5 0 0 1 0 1h-.564l-1.205 8.838A2.5 2.5 0 0 1 9.754 15H6.246a2.5 2.5 0 0 1-2.477-2.162L2.564 4H2a.5.5 0 0 1 0-1h4Zm1 3.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5ZM9.5 6a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm-4.74 6.703A1.5 1.5 0 0 0 6.246 14h3.508a1.5 1.5 0 0 0 1.487-1.297L12.427 4H3.573l1.187 8.703Z"/>
                            </svg></a>
                        </td>
                    </tr>

                </tbody>
            </table>
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Paracemotal
                        </th>
                        <td class="px-6 py-4">
                            500mg
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            $2999/per items
                        </td>
                        
                        <td class="px-6 py-4 text-right flex space-x-2">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3b82f6" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/>
                                <path fill="#3b82f6" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/>
                                    <path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/>
                                </g>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444" d="M7 3h2a1 1 0 0 0-2 0ZM6 3a2 2 0 1 1 4 0h4a.5.5 0 0 1 0 1h-.564l-1.205 8.838A2.5 2.5 0 0 1 9.754 15H6.246a2.5 2.5 0 0 1-2.477-2.162L2.564 4H2a.5.5 0 0 1 0-1h4Zm1 3.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5ZM9.5 6a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm-4.74 6.703A1.5 1.5 0 0 0 6.246 14h3.508a1.5 1.5 0 0 0 1.487-1.297L12.427 4H3.573l1.187 8.703Z"/>
                            </svg></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="relative overflow-x-auto shadow-md w-full sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left text-white bg-blue-600 dark:text-white dark:bg-gray-800">
                    Appointment
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Dr.Kaythi
                        </th>
                        <td class="px-6 py-4">
                            Room102
                        </td>
                        <td class="px-6 py-4">
                            14/5/2023 9:45:00AM
                        </td>
                        
                        
                        <td class="px-6 py-4 text-right flex space-x-2">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3b82f6" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/>
                                <path fill="#3b82f6" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/>
                                    <path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/>
                                </g>
                            </svg></a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg width="24" height="24" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444" d="M7 3h2a1 1 0 0 0-2 0ZM6 3a2 2 0 1 1 4 0h4a.5.5 0 0 1 0 1h-.564l-1.205 8.838A2.5 2.5 0 0 1 9.754 15H6.246a2.5 2.5 0 0 1-2.477-2.162L2.564 4H2a.5.5 0 0 1 0-1h4Zm1 3.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5ZM9.5 6a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm-4.74 6.703A1.5 1.5 0 0 0 6.246 14h3.508a1.5 1.5 0 0 0 1.487-1.297L12.427 4H3.573l1.187 8.703Z"/>
                            </svg></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
@endsection
