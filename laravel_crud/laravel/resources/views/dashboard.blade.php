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
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17" 
                            
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                            <span class="flex mt-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ef4444" d="M5.75 1a.75.75 0 0 1 .75.75V3.6l1.72-.344a8.677 8.677 0 0 1 4.925.452l.204.081a7.999 7.999 0 0 0 4.91.334a1.2 1.2 0 0 1 1.491 1.164v7.367c0 .644-.439 1.206-1.064 1.362l-.214.053a8.677 8.677 0 0 1-5.327-.361a8.676 8.676 0 0 0-4.924-.452L6.5 13.6v8.15a.75.75 0 0 1-1.5 0v-20A.75.75 0 0 1 5.75 1Z"/>
                                </svg>VIP Message
                            </span>
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
                        
                        
                       
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
@endsection
