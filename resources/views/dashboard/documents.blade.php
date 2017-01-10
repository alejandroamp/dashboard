<!--
*Created by PhpStorm.
* User: amontes
* Date: 12/12/2016
* Time: 5:07 PM
*/ -->
@extends('template.main')

@section('title')
    Dashboard Files View
@endsection

@section('content')
    <legend>Data Upload</legend>
    <table class="table">
        <thead>
        <th>Document Name</th>
        <th>Upload Date</th>
        </thead>
        <tbody>
        @foreach($info as $dato)
            <tr>
                <td>{{ $dato->document_name }}</td>
                <td>{{ $dato->upload }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

