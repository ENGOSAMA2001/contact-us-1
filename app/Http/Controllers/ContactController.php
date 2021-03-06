<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    public function index()
    {
        $contacts =Contact::all();
        return view('index', compact('contacts'));
    }

    public function contact(){
        return view('contact');
    }


public function store(Request $request){

    $contact = new Contact ;

    $contact->fName = $request->firstName;
    $contact->lName = $request->lastName;
    $contact->email = $request->email;

    $contact->save();

    return redirect()->back();
}


public function edit($id){

    $contact = Contact::find($id);

    return view('edit', compact('contact'));
}

public function update(Request $request ,$id){

    $contact = Contact::find($id);

    $contact->fName = $request->firstName;
    $contact->lName = $request->lastName;
    $contact->email = $request->email;

    $contact->save();

    return redirect('/');

}

public function destory($id){
    $contact = Contact::find($id);

    $contact->delete();

    return redirect('/');


}
}

