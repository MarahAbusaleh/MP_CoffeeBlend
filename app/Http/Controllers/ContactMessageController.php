<?php

namespace App\Http\Controllers;

use App\DataTables\ContactMessageDataTable;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactMessageController extends Controller
{

    public function index(ContactMessageDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.contact.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactMessage::create($request->all());

        Alert::success('Your Message Was Sent Successfully', 'The Admin will reply to you as soon as possible');

        return redirect()->route('index');
    }


    public function show(ContactMessage $contactMessage)
    {
        //
    }


    public function edit(ContactMessage $contactMessage)
    {
        //
    }


    public function update(Request $request, ContactMessage $contactMessage)
    {
        //
    }


    public function destroy($id)
    {
        $user = ContactMessage::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
