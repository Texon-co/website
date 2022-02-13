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
                        <h2 style='padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 32px; line-height: 38.4px; font-family: "Krub", sans-serif; margin: 0;' align="left">
                        Dear {{$application->first_name}}
                        </h2>
                        <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
                        Thanks for applying for the <b>{{$application->job->title}}</b> position. We&#8217;ll review your application carefully and Your CV will be reviewed and assessed against the posted jobs. Should your profile match our needs, our recruitment representatives will contact you.
                        </p>
                        <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
                        We wish you the best in your career!
                        <br>
                        Digitally yours,
                        <br>
                        Texon.
                        </p>
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