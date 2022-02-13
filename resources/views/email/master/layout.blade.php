<!DOCTYPE html>
<html lang="en" style="box-sizing: border-box;">
<head>
    @include('email.master.partials.head')
</head>
<body style='outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: "Open Sans", sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #444444; margin: 0; padding: 0; border-width: 0;'
    bgcolor="#ffffff">
    <table class="body" valign="top" role="presentation" border="0" cellpadding="0" cellspacing="0"
        style="outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border-width: 0;"
        bgcolor="#ffffff">
        <tbody>
            <tr>
                <td valign="top" style="line-height: 24px; font-size: 16px; margin: 0;" align="left">
                    @include('email.master.partials.header')
                    <main id="main">
                        @yield('main')
                    </main>
                    @include('email.master.partials.footer')
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>