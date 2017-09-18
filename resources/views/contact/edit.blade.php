@extends('partials.layout', ['title' => $data['title'], 'description' => $data['description']])

@section('additional_header')
    <link rel="stylesheet" href="{!! url('/css/contact.css') !!}">
@endsection

@section('content')
    <div class="contact">
        <div>
            <a href="{{ url('/') }}">Home</a> ::
            <a href="{{ url('/contact') }}">Messages</a> ::
            Edit Message
        </div>

        <h1>Edit Message</h1>

        <div class="container">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <h2>{!! \Session::get('success') !!}</h2>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{!! url('/contact/update/' . $data['message']->id) !!}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="first_name" value="{{ $data['message']->first_name }}" placeholder="Your name.." required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="last_name" value="{{ $data['message']->last_name }}" placeholder="Your last name.." required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="{{ $data['message']->email }}" placeholder="Your email address.." required>

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ $data['message']->phone }}" placeholder="Your phone number.." required>

                <label for="subject">Subject</label>
                <textarea id="subject" name="message" placeholder="Write something.." required>{{ $data['message']->message }}</textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection