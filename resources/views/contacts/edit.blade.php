@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Contact</div>

                    <div class="card-body">
                        <form action="{{route('contacts.update',[$contact->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" value="{{$contact->name}}" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" value="{{$contact->phone}}" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="message" class="form-control"  rows="5">{{$contact->message}}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
