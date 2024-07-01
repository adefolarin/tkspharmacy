<!DOCTYPE html>
<html>
<head>
    <title>Shalom Global</title>
</head>
<body>
    <h3>{{ $mailData['title'] }}</h3>
    <h4>Name: {{ $mailData['name'] }}</h4>
    <h4>Event you registered for: {{ $mailData['eventname'] }}</h4>
    <h4>Date of Event: {{ $mailData['eventdate'] }}</h4>
    <h4>Time you will be available: {{ $mailData['eventavailtime'] }}</h4>

    <p>{{ $mailData['body'] }}</p>
</body>
</html>