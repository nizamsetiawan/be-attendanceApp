<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="x-apple-disable-message-reformatting" />
    <style>
        body {
            background-color: #dbddde;
            font-family: Arial, sans-serif;
        }

        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px;
        }

        .header img {
            display: block;
            margin: 0 auto;
        }

        .content {
            font-size: 14px;
            color: #3c4043;
            line-height: 1.6;
        }

        .content p {
            margin: 16px 0;
        }

        .content p.bold {
            font-weight: bold;
            color: #004dcf;
        }

        .footer {
            font-size: 12px;
            color: #3c4043;
            text-align: center;
            margin-top: 20px;
        }

        .footer img {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <table class="email-container" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td>
                <!-- Header -->
                <div class="header">
                    <img src=" https://i.pinimg.com/originals/2c/b4/cd/2cb4cdc5c4cccb53b696ee30c771ec01.png"
                        alt="Header" height="100" />
                </div>

                <!-- Content -->
                <div class="content">
                    <p class="bold">Halo {{ $user->name }},</p>
                    <p>
                        Pengajuan izin cuti Anda pada tanggal <strong>{{ $date }}</strong> dengan alasan
                        <strong>{{ $reason }}</strong> telah disetujui.
                    </p>
                    <p>
                        Jika ada hal yang perlu dipersiapkan sebelum cuti dimulai, silakan hubungi tim HRD kami.
                        Semoga Anda dapat memanfaatkan waktu ini dengan baik, dan kami menantikan kehadiran Anda
                        kembali.
                    </p>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <p>Terimakasih,</p>
                    <p>© 2022 Cont PT Bumitama Gunajaya Agro, Jakarta Indonesia</p>
                    <p>
                        Anda menerima email ini sebagai pemberitahuan resmi mengenai status pengajuan cuti Anda.
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
