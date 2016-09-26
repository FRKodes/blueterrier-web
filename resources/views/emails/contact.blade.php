<html>
<head>
    <meta name='format-detection' content='telephone=no'>
    <title>Blue Terrier</title>
    <style type='text/css'>
        div, p, a, li, td { -webkit-text-size-adjust:none; }
    </style>
</head>
<body>
    <div style='font-family:sans-serif, Arial, Helvetica;' align='center'>
        <table width='680' cellpadding='0' cellspacing='0'>
            <tbody>
                <tr height='50'><td bgcolor='#00192E' style='color:#FFF' align='center' colspan='3'>Blue Terrier</td></tr>
                <tr>
                    <td style='border-left:1px solid #00192E;border-right:1px solid #00192E;padding: 60px 40px;'>
                        <p>A quien corresponda: <br><br></p>
                        <p><b>Nombre:</b>  {{ Input::get('fullname') }} </p>
                        <p><b>Email:</b>  {{ Input::get('email') }} </p>
                        <p><b>Tel:</b>  {{ Input::get('phone') }} </p>
                        <p><b>Asunto:</b>  {{ Input::get('subject') }} </p>
                        <p><b>Mensaje:</b>  {{ Input::get('message') }} </p>
                        <p><br><br><a style='color:#3a6f8f;text-decoration:none;' href='http://www.blueterrier.mx' target='_blank'>Atte. Blue Terrier</a></p>
                    </td>
                </tr>
                <tr bgcolor='#00192E'>
                    <td>
                        <p style='font-size:8pt;color:#fff;padding:10px;text-align:center;'>
                            AVISO DE CONFIDENCIALIDAD: Este mensaje es confidencial y/o puede contener informaci&oacute;n privilegiada.
                            Si usted no es el destinatario o no es alguna persona autorizada por &eacute;ste para recibir el mensaje,
                            usted no deber&aacute; utilizar, copiar, revelar o tomar ninguna acci&oacute;n basada en este mensaje o
                            cualquier otra informaci&oacute;n incluida en &eacute;l. Si recibe este mensaje por error, por favor
                            notif&iacute;quelo de inmediato al remitente y b&oacute;rrelo de su computadora.<br>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>