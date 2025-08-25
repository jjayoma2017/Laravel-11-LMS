@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form  method="POST" action="{{  route('contact.submit')  }}"> 
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="">Name</label>
                                <input class="form-control" id="" type="text" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Email</label>
                                <input class="form-control" id="" type="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Subject</label>
                                <input class="form-control" id="" type="text" name="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Message</label>
                                <textarea name=""  class="form-control" name="message"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
