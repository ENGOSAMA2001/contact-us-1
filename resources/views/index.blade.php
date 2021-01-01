@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact List</h1>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">&nbsp</th>
                  <th scope="col">&nbsp</th>
                </tr>
              </thead>
              <tbody>

              @foreach ($contacts as $contact)
                <tr>
                  <th scope="row">{{$contact->id}}</th>
                  <td>{{$contact->fName}}</td>
                  <td>{{$contact->lName}}</td>
                  <td>{{$contact->email}}</td>


                 <td>
                    <form action="{{url('destory/'.$contact->id)}}" method="POST">
                        @csrf
                        @method('Delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                  <td>
                      <form action="{{url('edit/'.$contact->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </form>
                  </td>


                </tr>

                @endforeach

              </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
