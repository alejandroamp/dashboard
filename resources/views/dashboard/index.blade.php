@extends('template.main')

@section('title')
    Dashboard Data View
@endsection

@section('content')
    <legend>Data View</legend>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong>Success:</strong>{{Session::get('success')}}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <th></th>
        <th>Soldto</th>
        <th>Account Name</th>
        <th>Business Name</th>
        <th>Country</th>
        <th>Segment</th>
        <th>B2B</th>
        <th>Account Manager</th>
        <th>Geo</th>
        <th>Website Enable</th>
        <th>created at</th>
        <th>Update at</th>
        <th>User upload</th>
        </thead>
        <tbody>
        @foreach($info as $dato)
            <tr>
                <td><a href="{{ route('dashboard.edit', $dato->id)}}" class="btn btn-warning">Edit</a></td>
                <td>{{ $dato->sold_to_part_key }}</td>
                <td>{{ $dato->account_name }}</td>
                <td>{{ $dato->business_name }}</td>
                <td>{{ $dato->country }}</td>
                <td>{{ $dato->segment }}</td>
                <td>{{ $dato->b2b }}</td>
                <td>{{ $dato->account_manager }}</td>
                <td>{{ $dato->geo }}</td>
                <td>{{ $dato->theoldkey1 }}</td>
                <td>{{ $dato->created_at }}</td>
                <td>{{ $dato->updated_at }}</td>
                <td>{{ $dato->User->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! Form::open(['route' => 'dashboard.index','method' => 'GET']) !!}
    <div class="form-group">
        {!! Form::label('name1', 'Start Date:') !!}
        {!! Form::input('date', 'date1', null) !!}
        {!! Form::label('name2', 'End Date:') !!}
        {!! Form::input('date', 'date2', null) !!}
        <button type="submit" class="btn btn-default">Search</button>
    </div>
    <a href="{{URL::to('/getExport')}}" class="btn btn-success">Export to Excel</a>
    {!! Form::close() !!}
    {!! $info -> render() !!}
@endsection