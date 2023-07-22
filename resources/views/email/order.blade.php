@extends('email.layouts.layout')
@section('content')
    <div>
        <table align="center">

            <tbody>

                <td>


                </td>
                <td>
                    @if ($data['flag'] == true)
                        <div class="">


                            <p
                                style="text-align: left; line-height: 28.6px; font-family: 'Playfair Display', serif; font-size: 22px;">

                                <strong>Hello<span>{{ $data['order']->name ?? '-' }}!
                                    </span>
                                </strong>
                            </p>
                            <div style="font-size: 17px; line-height: 140%; word-wrap: break-word;">
                                <div>Greetings From {{ config('app.name') }}!<br>Your Account has been created
                                    successfully <br>the
                                    following are your login credentials.</div>
                            </div><br>
                            <p style="font-size: 14px; line-height: 130%; text-align: center;">
                                <span
                                    style="font-size: 36px; line-height: 46.8px; font-family: 'Playfair Display', serif;"><span
                                        style="line-height: 46.8px; font-size: 36px;">Account's Information</span></span>
                            </p>

                            <table>

                                <tbody>
                                    <tr>
                                        <th class="table_style">Email:</th>
                                        <td class="table_style"><strong> {{ $data['order']->email ?? '-' }}
                                            </strong></td>
                                    </tr>

                                    <tr>
                                        <th class="table_style">Password:</th>
                                        <td class="table_style"><strong> {{ $data['password'] ?? '-' }}
                                            </strong></td>
                                    </tr>
                                    <tr>
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
                    @endif
                    <div>


                        <div style="font-size: 17px; line-height: 140%; text-align: center; word-wrap: break-word;">
                            <div>Following are the details recieved for the order uploaded by you.</div>
                        </div><br>
                        <p style="font-size: 14px; line-height: 130%; text-align: center;">
                            <strong><span
                                    style="font-size: 22px; line-height: 28.6px; font-family: 'Playfair Display', serif;"><span
                                        style="line-height: 28.6px; font-size: 22px;">Your
                                        order ID: </span></span><span
                                    style="text-align: left; line-height: 28.6px; font-family: 'Playfair Display', serif; font-size: 22px;">
                                    #{{ $data['order']->id ?? '-' }}

                                </span></strong>
                        </p>
                        <table>
                            <tbody>
                                <tr>
                                    <th class="table_style">Name</th>
                                    <td class="table_style"><strong> {{ $data['order']->name ?? '-' }}
                                        </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Email</th>
                                    <td class="table_style"><strong> {{ $data['order']->email ?? '-' }} </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Country</th>
                                    <td class="table_style"><strong>{{ $data['order']->country ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Phone</th>
                                    <td class="table_style"><strong>{{ $data['order']->phone ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Paper Topic</th>
                                    <td class="table_style"><strong>{{ $data['order']->paper_topic ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Academic Level</th>
                                    <td class="table_style"><strong>{{ $data['order']->academic_level ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">No Of Pages</th>
                                    <td class="table_style"><strong>{{ $data['order']->number_of_pages ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Detail</th>
                                    <td class="table_style"><strong>{{ $data['order']->detail ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Reference Style</th>
                                    <td class="table_style"><strong>{{$order->style}}</strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Deadline</th>
                                    <td class="table_style"><strong>{{ $data['order']->deadline ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">References</th>
                                    <td class="table_style"><strong>{{ $data['order']->reference ?? '-' }}  </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Subject</th>
                                    <td class="table_style"><strong>{{ $order->subject_area ?? '-' }}</strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Price Per Page</th>
                                    <td class="table_style"><strong>{{ addCurrency($data['order']->cost_per_page) ?? '-' }} </strong></td>
                                </tr>
                                <tr>
                                    <th class="table_style">Total Price</th>
                                    <td class="table_style"><strong>{{ addCurrency($data['order']->total_price) ?? '-' }} </strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div >
                            <a href="{{ config('app.tawk_to') }}" target="_blank" class="v-button"
                                style="margin-top:2% ; box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #000000; background-color: #f1c40f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                <span style="display:block;padding:10px 20px;line-height:120%;">Live Chat</span>
                            </a>
                            <a href="{{ route('invoice', ['reference' => $data['invoice']->ref_no]) }}" target="_blank" class="v-button"
                                style="margin-top:2% ; box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #000000; background-color: #f1c40f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                <span style="display:block;padding:10px 20px;line-height:120%;">Pay Now</span>
                            </a>
                        </div>
                        <div align="left"><br>
                            if you want to share more information or files related to your order , <br>you can simply email us at <a href="mailto:{{$web_setting->email}}">{{$web_setting->email}}</a><br><br>
                            For any further queries, feel free to contact us via email or Online Chat,<br><br>
                            Best Regards <br>
                            Customer Support,<br>
                            {{ config('app.app_name') }}

                        </div>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
,
