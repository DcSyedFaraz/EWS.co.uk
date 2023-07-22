@extends('email.layouts.layout')
@section('content')
    <div>
        <table align="center">

            <tbody>
                <tr>
                    <td>
                <tr>
                    <div align="center">
                        {{ env('APP_NAME', config('app.name')) }} Contact Query Details,
                        <br>
                        <br>
                        <strong>Client’s Information:</strong>
                        <hr>
                    </div>
                </tr>
                <tr>
                    <th class="table_style">Name</th>
                    <td class="table_style"><strong>{{ $contact->name }}</strong></td>
                </tr>
                <tr>
                    <th class="table_style">Email</th>
                    <td class="table_style"><strong>{{ $contact->email }}</strong></td>
                </tr>
                <tr>
                    <th class="table_style">Number</th>
                    <td class="table_style"><strong>{{ $contact->phone }}</strong></td>
                </tr>
                <tr>
                    <th class="table_style">Subject</th>
                    <td class="table_style"><strong>{{ $contact->subject }}</strong></td>
                </tr>
                <tr>
                    <th class="table_style">Detail</th>
                    <td class="table_style"><strong>{{ $contact->detail }}</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
,
