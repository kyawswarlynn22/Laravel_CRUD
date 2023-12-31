@extends('layout.sidebarandnav')

@section('title', 'Add Drug')

@section('body')
    <p class=" text-2xl">Edit Appointmet</p>
    <form action="/appointment/{{ $apmDetail->id }}" method="post">
        @csrf
        @method('put')
        <div class="mt-3 rounded-lg shadow-lg p-5">
            <div class="flex w-full justify-around items-center space-x-3 p-5">
                <div class="mb-6 w-full ">
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor
                        Name</label>
                    <input type="text" name="doctor" id="doctor"
                        value="{{ $apmDetail->dr_name }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Doctor Name">
                        @error('doctor')
                <p class=" text-red-500">{{ $message }}</p>
            @enderror
                </div>
                <div class="mb-6 w-full">
                    <label for="specialist"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select name="specialist" id="status"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0" @if ($apmDetail->specialist == 1) selected @endif>Cardiologist</option>
                        <option value="1" @if ($apmDetail->specialist == 2) selected @endif>Dermatologist</option>
                        <option value="2" @if ($apmDetail->specialist == 3) selected @endif>Gastroenterologist</option>
                        <option value="2" @if ($apmDetail->specialist == 4) selected @endif>Neurologist</option>
                        <option value="2" @if ($apmDetail->specialist == 5) selected @endif>Obstetrician</option>
                        <option value="2" @if ($apmDetail->specialist == 6) selected @endif>Orthopedic Surgeon</option>
                        <option value="2" @if ($apmDetail->specialist == 7) selected @endif>Pediatrician</option>
                        <option value="2" @if ($apmDetail->specialist == 8) selected @endif>Psychiatrist</option>
                        <option value="2" @if ($apmDetail->specialist == 9) selected @endif>Radiologist</option>
                        <option value="2" @if ($apmDetail->specialist == 10) selected @endif>Surgeon</option>
                    </select>
                </div>


            </div>
            <div class="flex p-5 space-x-3">
                <div class="mb-6 w-full ">
                    <label for="room" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room</label>
                    <input type="number" name="room" id="room" value="{{ $apmDetail->room_no }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Room Number" required>
                </div>
                <div class="mb-6 w-full">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment
                        Date
                        and Time</label>
                    <input type="datetime-local" name="date" id="date" value="{{ $apmDetail->date_time }}"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <span class=" ml-[82%]">
                <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Update</button>
                <a href="/appointment"><button type="button"
                        class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button></a>
            </span>
        </div>
    </form>
@endsection
