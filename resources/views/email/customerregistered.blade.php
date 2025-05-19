<div style="font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; color: #333;">
    <p>Dear {{$customer->customername}},</p>
    <p>We’re thrilled to welcome you to FreshFarm! Your registration is now complete, and you’re all set to enjoy our services.</p>

    <p><strong>Here’s what you can do next:</strong></p>
    <ul style="list-style: disc; margin-left: 20px;"> 
        <li>Explore our products and services tailored just for you.</li>
       
        <li>Reach out to us anytime for assistance.</li>
    </ul>

    <p>For your records, here are your account details:</p>
    <table style="width: 100%; max-width: 600px; margin: 20px auto; border-collapse: collapse;">
        <tr style="background-color: #F9F9F9;">
            <td style="padding: 10px; border: 1px solid #CCC;"><strong>Username:</strong></td>
            <td style="padding: 10px; border: 1px solid #CCC;">{{$customer->username}}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #CCC;"><strong>Password:</strong></td>
            <td style="padding: 10px; border: 1px solid #CCC;">{{$customer->password}}</td>
        </tr>
    </table>

    <p>If you have any questions, feel free to contact us at 
    <p>Thank you for choosing Fresh Farm. We’re excited to have you on board!</p>
    
    <p>Best regards,</p>
    <p><strong>The Fresh Farm Team</strong></p>
</div>
