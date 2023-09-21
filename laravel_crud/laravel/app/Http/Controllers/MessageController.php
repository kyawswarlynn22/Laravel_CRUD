<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messageClass = new message();
        $messageData = $messageClass->messageData();
        return view('message.messageList', [
            'messageData' => $messageData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('message.addMessage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addMessageClass = new message();
        $addMessageClass->addMessage($request);
        return redirect('/message');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $messageDetailClass = new message();
        $messageDetail = $messageDetailClass->messageDetail($id);
        if ($messageDetail == null) {
            return view('errors.404');
        } else {
            return view('message.messageDetail', [
                'messageDetail' => $messageDetail
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $messageDetailClass = new message();
        $messageDetail = $messageDetailClass->messageDetail($id);
        if ($messageDetail == null) {
            return view('errors.404');
        } else {
            return view('message.editMessage', [
                'messageDetail' => $messageDetail
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messageUpdateClass = new message();
        $messageUpdateClass->updateMessage($request, $id);
        return redirect('/message');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $messageDetailClass = new message();
        $messageDetail = $messageDetailClass->messageDetail($id);
        if ($messageDetail !== null) {
            $messageDetailClass->messageDel($id);
        } else {
            return view('errors.404');
        }
        return redirect("/message");
    }
}
