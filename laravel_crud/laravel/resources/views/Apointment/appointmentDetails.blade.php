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
        <span>Dr.Kaythi</span>
        <span>Room102</span>
        <span>30/03/2023 4:00PM</span>
        
    </div>
</section>
@endsection