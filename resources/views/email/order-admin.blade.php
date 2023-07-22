@extends('email.layouts.layout')
@section('content')
    <div>

        <table align="center">
            <tbody>
                <tr>
                    <td>
                        <div>
                            #Order from {{ config('app.app_name') }},
                            <br>

                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="table_style">Name</th>
                                        <td class="table_style"><strong>{{ $data['name'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Email</th>
                                        <td class="table_style"><strong>{{ $data['email'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Country</th>
                                        <td class="table_style"><strong>{{ $data['country'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Phone</th>
                                        <td class="table_style"><strong>{{ $data['phone'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Paper Topic</th>
                                        <td class="table_style"><strong>{{ $data['paper_topic'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Academic Level</th>
                                        <td class="table_style"><strong>{{ $data['academic_level'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">No Of Pages</th>
                                        <td class="table_style"><strong>{{ $data['number_of_pages'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Detail</th>
                                        <td class="table_style"><strong>{{ $data['detail'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Reference Style</th>
                                        <td class="table_style"><strong>{{ $order->style }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Deadline</th>
                                        <td class="table_style"><strong>{{ $data['deadline'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">References</th>
                                        <td class="table_style"><strong>{{ $data['reference'] }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Subject</th>
                                        <td class="table_style"><strong>{{ $order->subject_area }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Price Per Page</th>
                                        <td class="table_style"><strong>{{ addCurrency($data['cost_per_page']) }}</strong></td>
                                    </tr>
                                    <tr>
                                        <th class="table_style">Total Price</th>
                                        <td class="table_style"><strong>{{ addCurrency($data['total_price']) }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </td>
                </tr>
            </tbody>

        </table>


    </div>
@endsection
