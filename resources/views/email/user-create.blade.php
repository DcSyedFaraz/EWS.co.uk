@extends('email.layouts.layout')
@section('content')
    <div align="center">
        <table align="center">
            <tbody>
                <tr>
                    <td>
                <tr>
                    <div align="center">
                        Greetings from {{ config('app.app_name') }},
                        <br>
                        <br>
                        Your Account has been created successfully the following are your login credentials.
                        <br>
                        <br>
                    </div>
                </tr>
        <p style="font-size: 14px; line-height: 130%; text-align: center;">
            <span
                style="font-size: 36px; line-height: 46.8px; font-family: 'Playfair Display', serif;"><span
                    style="line-height: 46.8px; font-size: 36px;">Account's Information</span></span>
        </p>
                <tr>
                    <th class="table_style">Email:</th>
                    <td class="table_style"><strong>{{ $user->email ?? '-' }}</strong></td>
                </tr>
                <tr>
                    <th class="table_style">Password:</th>
                    <td class="table_style"><strong>{{ $password ?? '-' }}</strong></td>
                </tr>

            </tbody>
        </table>
        <div align="center">
            <a href="{{ route('login') }}" target="_blank" class="v-button"
                style="margin-top:2% ; box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #000000; background-color: #f1c40f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                <span style="display:block;padding:10px 20px;line-height:120%;">Get
                    Started</span>
            </a>
        </div>

    </div>
@endsection
