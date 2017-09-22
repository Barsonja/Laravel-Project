        {{-- For the test select statements
        @foreach ($tests as $column)
            <li>{{ $column->name }}</li>
            <li>{{ $column->subject }}</li>
            <li>{{ $column->message }}</li>
            <hr>
        @endforeach
        --}}

        {{-- Testing groupyBy method --}}
@foreach($tests as $column)
    <li>{{ $column->name }}</li>
    <li>{{ $column->count }}</li>
    <hr>
@endforeach