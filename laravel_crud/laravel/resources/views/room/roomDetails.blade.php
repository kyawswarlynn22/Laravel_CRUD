@extends('layout.sidebarandnav');

@section('title','Room Details')
    
@section('body')
<p class=" text-2xl">Room Details</p>
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
        <span>Room102</span>
        <span>Active</span>
        <span>4</span>
        <span>$456</span>
    </div>
</section>
@endsection