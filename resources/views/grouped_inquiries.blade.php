@extends('layouts.master')

@section('content')
    <section class="section_banner" id="section_banner" style="margin-top: 121px;">

        <table class="table table-striped">
            <thead style="color: #fff; background-color: #373a3c;">
            <tr>
                <th>Client Name</th>
                <th>Email</th>
                <th>Sent Inquiries</th>

            </tr>
            </thead>
            @foreach ($grouped_inq as $column)
                <tbody>
                <td>{{ $column->name }}</td>
                <td>{{ $column->email }}</td>
                <td>{{ $column->count }}</td>
                </tbody>
            @endforeach
        </table>
        {{ $grouped_inq->links() }}
    </section>
@endsection