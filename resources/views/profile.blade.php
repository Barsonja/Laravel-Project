@extends('layouts.master')

@section('content')
    <section class="section_banner" id="section_banner" style="margin-top: 121px;">

        <table class="table table-striped">
            <thead style="color: #fff; background-color: #373a3c;">
            <tr>
                <th>User Id</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Client Username</th>

            </tr>
            </thead>
            @foreach ($user as $column)
                <tbody>
                <td>{{ $column->id }}</td>
                <td>{{ $column->name }}</td>
                <td>{{ $column->email }}</td>
                <td>{{ $column->username }}</td>
                </tbody>
            @endforeach
        </table>
    </section>
@endsection