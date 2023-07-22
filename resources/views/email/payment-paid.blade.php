@extends('email.layouts.layout')
@section('content')
    <div>

        <table align="center">
            <tbody>
                <tr>
                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;"
                        align="left">

                        <div
                            style="font-size: 16px; line-height: 140%; text-align: left; word-wrap: break-word;">
                            <p style="line-height: 140%;">Hello!</p>
                            <p style="line-height: 140%;">&nbsp;</p>
                            <p style="line-height: 140%;">
                                <strong>{{ $invoice->user->name ?? '-' }}</strong>
                            </p>
                            <p style="line-height: 140%;">&nbsp;</p>
                            <p style="line-height: 140%;">Greetings From
                                {{ config('app.name') }}!</p>
                            <p style="line-height: 140%;">&nbsp;</p>
                            <p style="line-height: 140%;">Congratulations! Your payment of <strong>{{ addCurrency($invoice->amount ) }}</strong> has been successfully processed.

                                Please sign in to your account to check the status of your order and enjoy the exciting updates!.</p>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>


    </div>
@endsection















