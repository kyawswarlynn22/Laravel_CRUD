@extends('layout.sidebarandnav');

@section('title','Room Details')
    
@section('body')
<p class=" text-2xl">Room Details</p>
<section class=" flex space-x-5">
   
    <div class="flex flex-col">
        <span>Doctor Name</span>
        <span>Room No</span>
        <span>Date and Time</span>
        
    </div>
    <div class=" flex flex-col">
        <span>-></span>
        <span>-></span>
        <span>-></span>
     
    </div>
    <div class=" flex flex-col">
        <span>Dr.{{ $apmDetail-> dr_name}}</span>
        <span>Room{{ $apmDetail->room_no }}</span>
        <span>{{ $apmDetail->date_time }}</span>
    </div>
</section>
@endsection