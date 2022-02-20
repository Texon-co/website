@extends('email.master.layout')

@section('main')
    <table class="container p-2" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>
            <tr>
            <td align="center" style="line-height: 24px; font-size: 16px; margin: 0; padding: 8px;">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" role="presentation">
                    <tbody>
                    <tr>
                        <td width="600">
                <![endif]-->
                <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 600px; margin: 0 auto;">
                <tbody>
                    <tr>
                    <td style="line-height: 24px; font-size: 16px; margin: 0;" align="left">

                        @yield('heading')
                        <br>
                        @yield('content')
                        <br>
                        @yield('signoff')

                    </td>
                    </tr>
                </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
            </tr>
            </tbody>
        </table>
                <![endif]-->
            </td>
            </tr>
        </tbody>
    </table>
@endsection