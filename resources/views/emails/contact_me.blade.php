<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            You have received a new message from your website contact form.<br><br><br>
            Here are the details:<br><br>
            Name: {{$contact->name}}<br><br>
            Email: {{$contact->email}}<br><br>
            Phone: {{$contact->number}}<br><br>
            Message:<br> {{$contact->message}};
        </p>
    </body>
</html>
