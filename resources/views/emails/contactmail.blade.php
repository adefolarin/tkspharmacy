<!DOCTYPE html>
<html>
<head>
    <title>Shalom Global</title>
</head>
<body>
    <h4>{{ $mailData['title'] }}</h4>
    <p>Date: {{ $mailData['contacts_date'] }}</p>
    <p>Email: {{ $mailData['contacts_email'] }}</p>
    <p>Phone Number: {{ $mailData['contacts_pnum'] }}</p>
    <p>Subject: {{ $mailData['contacts_subject'] }}</p>
    <p>Message: {{ $mailData['contacts_message'] }}</p>
  
     
    <p>Thank you</p>
</body>
</html>