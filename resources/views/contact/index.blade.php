@extends('partials.layout', ['title' => $data['title'], 'description' => $data['description']])

@section('additional_header')
    <link rel="stylesheet" href="{!! url('/css/contact.css') !!}">
    <link rel="stylesheet" href="{!! url('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') !!}">
    <link rel="stylesheet" href="{!! url('https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css') !!}">
    <link rel="stylesheet" href="{!! url('https://cdn.datatables.net/responsive/2.2.0/css/responsive.dataTables.min.css') !!}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="contact">
        <h1>View all Contact submission</h1>

        <div>
            <table id="contact-table" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>First Name.</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Read</th>
                        <th>Date Submitted</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>First Name.</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Read</th>
                        <th>Date Submitted</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data['messages'] as $message)
                        <tr>
                            <td>{{ $message->first_name }}</td>
                            <td>{{ $message->last_name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ substr($message->message, 0, 50) }}...</td>

                            <td>
                                @if($message->read == 0)
                                    No
                                @else
                                    Yes
                                @endif
                            </td>

                            <td>{{ date('M d, Y', strtotime($message->created_at)) }}</td>

                            <td>
                                <a href="{!! url('/contact/' . $message->id) !!}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                        <i class="fa fa-eye fa-stack-1x"></i>
                                    </span>
                                </a>

                                <a href="{!! url('/contact/' . $message->id . '/edit') !!}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                        <i class="fa fa-edit fa-stack-1x"></i>
                                    </span>
                                </a>

                                <a href="{!! url('/contact/destroy/' . $message->id) !!}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                        <i class="fa fa-times fa-stack-1x"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.3/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#contact-table').DataTable( {
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            } );
        } );
    </script>
@endsection