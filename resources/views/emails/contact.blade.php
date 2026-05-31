<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>
<body style="font-family: sans-serif; padding: 24px; background: #f5f5f5;">
    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <div style="background: linear-gradient(135deg, #b45309, #92400e); padding: 24px; text-align: center;">
            <h1 style="color: white; margin: 0; font-size: 20px;">Pesan Baru dari Website</h1>
        </div>
        <div style="padding: 24px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 8px 0; color: #666; font-size: 13px; width: 100px;">Nama</td>
                    <td style="padding: 8px 0; font-weight: 600;">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #666; font-size: 13px;">Email</td>
                    <td style="padding: 8px 0;">{{ $data['email'] ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #666; font-size: 13px;">Pesan</td>
                    <td style="padding: 8px 0;">{{ $data['message'] }}</td>
                </tr>
            </table>
            <hr style="border: none; border-top: 1px solid #eee; margin: 24px 0;">
            <p style="color: #999; font-size: 12px; text-align: center;">Pesan ini dikirim dari formulir kontak {{ config('app.name') }}</p>
        </div>
    </div>
</body>
</html>
