@extends('email.layouts.layout')
@section('content')
    <div>

        <table align="center">
            <tbody>
                <tr>
                    <td>
                <tr>
                    <div align="center">
                        Greetings from {{ config('app.app_name') }},
                        <br>
                        <br>
                        Thank you for reaching out! We have successfully received your
                        query. Please make sure the following details are correct.
                        <br>
                        <br>
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
                </td>
                </tr>
            </tbody>
        </table>


    </div>
@endsection
