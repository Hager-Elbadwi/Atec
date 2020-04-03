<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Requests\MailMessagesRequest;
// use App\Modules\Admin\Http\Requests\UpdateRequest;
use App\Models\MailMessage;

class MailMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailmessages = MailMessage::all();
        return view('admin::pages.mails.index', compact('mailmessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin::pages.mails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MailMessagesRequest $request)
    {
        $mailmessage= MailMessage::create($request->validated());

        return redirect()->route('admin.mails.index')->with('sucess','mail updated');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mailmessage = MailMessage::find($id);

        return view('admin::pages.mails.edit', compact('mailmessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MailMessagesRequest $request,$id)
    {
        $mailmessage = MailMessage::find($id);
        $mailmessage->update($request->all());
        return redirect(route('admin.mails.index'))->with('msg', 'Mail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mailmessage = MailMessage::findOrFail($id);
        $mailmessage->delete($id);
        return redirect(route('admin.mails.index'));
    }
}
