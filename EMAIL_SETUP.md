# Email Configuration Setup

## Gmail SMTP Configuration

To enable email sending from your Laravel application using Gmail, you need to configure the following environment variables in your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=thrawaat0@gmail.com
MAIL_PASSWORD=ilst yvus jyoy angk
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=thrawaat0@gmail.com
MAIL_FROM_NAME="Thrawaat Website"
```

## Important Notes:

1. **Gmail App Password**: The password should be the Gmail App Password (not your regular Gmail password). The app password you provided is: `ilst yvus jyoy angk`

2. **Enable Less Secure Apps (Alternative)**: If app password doesn't work, you may need to enable "Less secure app access" in your Gmail account settings, though this is not recommended for security reasons.

3. **Check Logs**: Email errors are now logged in `storage/logs/laravel.log`. Check this file if emails are not being sent.

## Testing Email Configuration

After updating your `.env` file:

1. Clear config cache: `php artisan config:clear`
2. Test by submitting the Contact Us or Join Us form
3. Check `storage/logs/laravel.log` for any error messages

## Email Destinations:

- **Contact Us form** → sends to: `info@thrawaat.com`
- **Join Us form** → sends to: `career@thrawaat.com`

## Troubleshooting:

If emails are still not being sent:
1. Verify Gmail app password is correct
2. Check that 2-factor authentication is enabled on the Gmail account
3. Review error logs in `storage/logs/laravel.log`
4. Test SMTP connection using a mail testing tool
5. Ensure firewall is not blocking port 587

