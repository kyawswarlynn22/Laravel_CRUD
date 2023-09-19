@extends('layout.sidebarandnav');

@section('title','Room Details')
    
@section('body')
<p class=" text-2xl">Drug Details</p>
<section class=" flex space-x-5">
   
    <div class="flex flex-col">
        <span>Drug Name</span>
        <span>Weight</span>
        <span>Stock</span>
        <span>Price</span>
    </div>
    <div class=" flex flex-col">
        <span>-></span>
        <span>-></span>
        <span>-></span>
        <span>-></span>
    </div>
    <div class=" flex flex-col">
        <span>Para</span>
        <span>29g</span>
        <span>4</span>
        <span>$4</span>
    </div>
</section>
@endsection