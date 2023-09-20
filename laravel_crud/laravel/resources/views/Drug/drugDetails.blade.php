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
        <span>{{ $drugDetail->drug_name }}</span>
        <span>{{ $drugDetail->type }}</span>
        <span>{{ $drugDetail->stock }}</span>
        <span>${{ $drugDetail->price }}/per items</span>
    </div>
</section>
@endsection