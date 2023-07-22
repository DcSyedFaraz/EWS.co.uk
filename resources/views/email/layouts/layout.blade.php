<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
.table_style{
    border: 2px solid #00526C;text-align: left;padding: 8px;width: 14rem;color: black;font-size: 17px;

}

    .btn_pri {
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        color: white;
        background-color: #181D26;
        margin-top: 20px;
        border: 3px solid #00526C;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;
        display: flex ;
        justify-items: center

    }

    .container_style{
        margin: auto;
        padding:4rem;
        align-content: center;
        text-align: center;
    }

    span{
        padding-left: 8px;
    }

    p{
        padding-left: 8px;
    }

</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{-- {{ $header ?? '' }} --}}
@include('vendor.mail.html.header')

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
@yield('content')



<tr>
<td class="content-cell">
{{-- {{ Illuminate\Mail\Markdown::parse($slot) }} --}}

{{-- {{ $subcopy ?? '' }} --}}



</td>
</tr>
</table>
</td>
</tr>

{{-- {{ $footer ?? '' }} --}}
@include('vendor.mail.html.footer')
</table>
</td>
</tr>
</table>
</body>
</html>
