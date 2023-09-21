@extends('layout.sidebarandnav');

@section('title', 'Room Details')

@section('body')
    <p class=" text-2xl">Room Details</p>
    <section class=" flex space-x-5">

        <div class="flex flex-col">
            <span>Doctor Name</span>
            <span>Specialist</span>
            <span>Room No</span>
            <span>Date and Time</span>

        </div>
        <div class=" flex flex-col">
            <span>-></span>
            <span>-></span>
            <span>-></span>
            <span>-></span>

        </div>
        <div class=" flex flex-col">
            <span>Dr.{{ $apmDetail->dr_name }}</span>
            <span>
                @if ($apmDetail->specialist == 1)
                    Cardiologist
                @elseif($apmDetail->specialist == 2)
                    Dermatologist
                @elseif($apmDetail->specialist == 3)
                    Gastroenterologist
                @elseif($apmDetail->specialist == 4)
                    Neurologist
                @elseif($apmDetail->specialist == 5)
                    Obstetrician
                @elseif($apmDetail->specialist == 6)
                    Orthopedic Surgeon
                @elseif($apmDetail->specialist == 7)
                    Pediatrician
                @elseif($apmDetail->specialist == 8)
                    Psychiatrist
                @elseif($apmDetail->specialist == 9)
                    Radiologist
                @elseif($apm->specialist == 10)
                    Surgeon
                @endif
            </span>
            <span>Room{{ $apmDetail->room_no }}</span>
            <span>{{ $apmDetail->date_time }}</span>
        </div>
    </section>
@endsection
