<!DOCTYPE html>
<html>
<head>
    <title>TKS PHARMACY</title>
</head>
<body>
    <h4>{{ $mailData['title'] }}</h4>
    <p>Name: {{ $mailData['newpatients_name'] }}</p>
    <p>Phone Number: {{ $mailData['newpatients_pnum'] }}</p>
    <p>Date of Birth: {{ $mailData['newpatients_dob'] }}</p>
    <p>RX Number: {{ $mailData['newpatients_rxnum'] }}</p>

</body>
</html>