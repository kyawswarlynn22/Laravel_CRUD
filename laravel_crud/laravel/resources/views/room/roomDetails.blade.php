@extends('layout.sidebarandnav');

@section('title', 'Room Details')

@section('body')
    <p class=" text-2xl">
        Room Details</p>
    <section class=" flex space-x-5">
        <div class="flex flex-col">
            <span>Room Number</span>
            <span>Room Status</span>
            <span>Person</span>
            <span>Price</span>
        </div>
        <div class=" flex flex-col">
            <span>-></span>
            <span>-></span>
            <span>-></span>
            <span>-></span>
        </div>
        <div class=" flex flex-col">
            <span>Room{{ $roomDetail->room_no }}</span>
            <span>
                @if ($roomDetail->status == 0)
                    Active
                @elseif($roomDetail->status == 1)
                    Available
                @elseif($roomDetail->status == 2)
                    Lock
                @endif
            </span>
            <span>
                @if ($roomDetail->person == 0)
                    none
                @else
                    {{ $roomDetail->person }}
                @endif
            </span>
            <span>${{ $roomDetail->price }}</span>
        </div>
    </section>
@endsection
