@extends('layouts.master')

@section('content')
    <section class="section_banner" id="section_banner" style="margin-top: 121px;">

        <table class="table table-striped">
            <thead style="color: #fff; background-color: #373a3c;">
            <tr>
                <th>Client Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>
            @foreach ($user_inq as $column)
                <tbody>
                <td>{{ $column->name }}</td>
                <td>{{ $column->email }}</td>
                <td>{{ $column->subject }}</td>
                <td>{{ $column->message }}</td>
                </tbody>
            @endforeach
        </table>
        {{ $user_inq->links() }}
    </section>
@endsection
