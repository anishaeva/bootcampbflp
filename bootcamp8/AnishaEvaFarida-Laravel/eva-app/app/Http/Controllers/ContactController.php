<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all(); // [{name: asda, email: asdasd}, {}. {}]
        $data = [ // ["contacts" => [{name: asda, email: asdasd}, {}. {}]] $data["contacts"] // $data->name
            "contacts" => $contacts,
        ];
        return view("list-contact", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $validated_data = $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required|numeric',
            'birthday' => 'required|date'
        ]);

        Contact::create($validated_data); 

        //redirect to index
        return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);   
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        //get post by ID
        $contact = Contact::findOrFail($id);

        //delete contact
        $contact->delete();

        //redirect to index
        return redirect()->route('home')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
