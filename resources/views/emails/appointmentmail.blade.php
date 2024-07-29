<!DOCTYPE html>
<html>
<head>
    <title>TKS PHARMACY</title>
</head>
<body>
    <h4>{{ $mailData['title'] }}</h4>
    <p>Name: {{ $mailData['appointments_name'] }}</p>
    <p>Email: {{ $mailData['appointments_email'] }}</p>
    <p>Date: {{ $mailData['appointments_date'] }}</p>
    <p>Service: {{ $mailData['appointments_service'] }}</p>

</body>
</html>