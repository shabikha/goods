<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #007bff;
            text-align: center;
            text-decoration: underline;
        }
        p {
            padding: 10px;
            border-bottom: 1px solid #eaeaea;
            margin: 5px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        .header-image {
            width: 50%;
            height: auto;
            border-radius: 5px;
        }
    </style>
    <title>Contact Form Submission</title>
</head>
<body>
    <div class="container">
        <img src="https://i.ibb.co/TwzjkDd/logo-white.png" alt="Header Image" class="header-image">
        <h1>New Contact Query</h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>

        @if (!empty($data['subject']))
            <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        @endif

        @if (!empty($data['Company_name']))
            <p><strong>Company Name:</strong> {{ $data['Company_name'] }}</p>
        @endif
        @if (!empty($data['phone']))
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        @endif
        @if (!empty($data['country_code']))
            <p><strong>Country Code:</strong> {{ $data['country_code'] }}</p>
        @endif
        @if (!empty($data['country']))
            <p><strong>Country:</strong> {{ $data['country'] }}</p>
        @endif
        @if (!empty($data['Select_quote']))
            <p><strong>Select Quote:</strong> {{ $data['Select_quote'] }}</p>
        @endif
        @if (!empty($data['You_Departure']))
            <p><strong>Departure:</strong> {{ $data['You_Departure'] }}</p>
        @endif
        @if (!empty($data['You_Arrival']))
            <p><strong>Arrival:</strong> {{ $data['You_Arrival'] }}</p>
        @endif
        @if (!empty($data['your_recipient']))
            <p><strong>Recipient:</strong> {{ $data['your_recipient'] }}</p>
        @endif
        @if (!empty($data['category']))
            <p><strong>Category:</strong> {{ $data['category'] }}</p>
        @endif
        @if (!empty($data['location']))
            <p><strong>Location:</strong> {{ $data['location'] }}</p>
        @endif
        @if (!empty($data['from']))
            <p><strong>From:</strong> {{ $data['from'] }}</p>
        @endif
        @if (!empty($data['to']))
            <p><strong>To:</strong> {{ $data['to'] }}</p>
        @endif
        @if (!empty($data['vehicle']))
            <p><strong>Vehicle:</strong> {{ $data['vehicle'] }}</p>
        @endif
        @if (!empty($data['message']))
            <p><strong>Message:</strong></p>
            <p>{{ nl2br(e($data['message'])) }}</p>
        @endif

        <div class="footer">
            <p>This email was sent from Lahore Goods Transport.</p>
        </div>
    </div>
</body>
</html>
