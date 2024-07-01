<!DOCTYPE html>
<html>
<head>
    <title>Shalom Global</title>
</head>
<body>
    <h3>{{ $mailData['title'] }}</h3>
    <h3>Name: {{ $mailData['name'] }}</h3>
    <h3>Event you registered for: {{ $mailData['campaignname'] }}</h3>
    <h4>Date of Event: {{ $mailData['campaigndate'] }}</h4>
    <h4>Time you will be available: {{ $mailData['campaignavailtime'] }}</h4>  

    <p>{{ $mailData['body'] }}</p>

</body>
</html>