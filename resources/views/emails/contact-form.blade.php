<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak Baru</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #469CED, #2980b9);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #469CED;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .value {
            color: #333;
            font-size: 16px;
            word-wrap: break-word;
        }
        .message-box {
            background: #f8f9fa;
            border-left: 4px solid #469CED;
            padding: 15px;
            border-radius: 0 5px 5px 0;
            margin-top: 10px;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .logo {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Pesan Kontak Baru</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.9;">Dari Website Dugg Coffee</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="label">👤 Nama Lengkap</div>
                <div class="value">{{ $contactData['nama_depan'] }} {{ $contactData['nama_belakang'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">✉️ Email</div>
                <div class="value">{{ $contactData['email'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">📱 Nomor Handphone</div>
                <div class="value">{{ $contactData['nomor_handphone'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">💬 Pesan</div>
                <div class="message-box">
                    {{ $contactData['pesan'] }}
                </div>
            </div>
            
            <div class="field">
                <div class="label">🕐 Waktu Dikirim</div>
                <div class="value">{{ now()->setTimezone('Asia/Jakarta')->format('d F Y, H:i:s') }} WIB</div>
            </div>
        </div>
        
        <div class="footer">
            <p><strong>Dugg Coffee</strong></p>
            <p>Email ini dikirim otomatis dari form kontak website.<br>
            Silakan balas langsung ke email pengirim untuk merespon.</p>
        </div>
    </div>
</body>
</html> 