@extends('layout.sidebarandnav');

@section('title','Room Details')
    
@section('body')
<p class=" text-2xl">Room Details</p>
<section class=" flex space-x-5">
   
    <div class="flex flex-col">
        <span>Message</span>
        <span>VIP</span>
    </div>
    <div class=" flex flex-col">
        <span>-></span>
        <span>-></span>
    </div>
    <div class=" flex flex-col">
        <span>{{ $messageDetail->text }}</span>
        <span>@if ($messageDetail->message_person == 0)
            No
        @else
            Yes
        @endif</span>
    </div>
</section>
@endsection