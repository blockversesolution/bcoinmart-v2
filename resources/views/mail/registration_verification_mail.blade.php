<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f5f5;">
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="max-width: 600px; margin: 20px auto; background-color: #ffffff;">
    <!-- Header -->
    <tr>
        <td style="padding: 20px; text-align: center; background-color: #f6a401; color: white;">
            <h1 style="margin: 0; font-size: 24px;">Verify Your Account</h1>
        </td>
    </tr>

    <!-- Content -->
    <tr>
        <td style="padding: 30px;">
            <p style="margin: 0 0 20px 0; font-size: 16px; color: #333333;">Hi,</p>
            <p style="margin: 0 0 20px 0; font-size: 16px; color: #333333;">Your One-Time Password (OTP) for verifying your account is:</p>

            <!-- OTP Code Box -->
            <div style="text-align: center; margin: 30px 0;">
                <div style="display: inline-block; padding: 15px 30px; background-color: #fffbf0; border: 2px dashed #f6a401; border-radius: 8px; font-size: 32px; font-weight: bold; letter-spacing: 5px; color: #f6a401;">
                    {{$code}}
                </div>
            </div>

            <p style="margin: 0 0 20px 0; font-size: 16px; color: #333333;">This code is valid for the next <strong>1 minutes</strong>. Please do not share this code with anyone.</p>
            <p style="margin: 0 0 20px 0; font-size: 16px; color: #666666;">If you did not request this code, please ignore this email or contact our support team immediately.</p>
        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td style="padding: 20px; text-align: center; background-color: #f0f4ff; color: #666666; font-size: 14px;">
            <p style="margin: 0 0 10px 0;">Need help? Contact us at <a href="mailto:support@bCoinmart.com" style="color: #4a6bdf; text-decoration: none;">support@bCoinmart.com</a></p>
            <p style="margin: 0;">&copy; 2025 bCoinmart. All rights reserved.</p>
        </td>
    </tr>
</table>
</body>
</html>
