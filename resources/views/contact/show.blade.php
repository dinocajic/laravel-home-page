@extends('partials.layout', ['title' => $data['title'], 'description' => $data['description']])

@section('additional_header')
    <link rel="stylesheet" href="{!! url('/css/contact.css') !!}">
@endsection

@section('content')
    <div class="contact">
        <div>
            <a href="{{ url('/') }}">Home</a> ::
            <a href="{{ url('/contact') }}">Messages</a> ::
            {{ $data['message']->first_name  }} {{ $data['message']->last_name }}
        </div>

        <h1>{{ $data['message']->first_name  }} {{ $data['message']->last_name }}</h1>

        <div class="container">
            <table>
                <tr>
                    <td>Email: </td>
                    <td>{{ $data['message']->email }}</td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td>{{ $data['message']->phone }}</td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td>{{ date("M d, Y", strtotime($data['message']->created_at)) }}</td>
                </tr>
                <tr>
                    <td>Message: </td>
                    <td>{{ $data['message']->message }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection