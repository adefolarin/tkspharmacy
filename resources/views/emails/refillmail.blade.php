<!DOCTYPE html>
<html>
<head>
    <title>TKS PHARMACY</title>
</head>
<body>
    <h4>{{ $mailData['title'] }}</h4>
    <p>Name: {{ $mailData['refills_name'] }}</p>
    <p>Phone Number: {{ $mailData['refills_pnum'] }}</p>
    <p>Date of Birth: {{ $mailData['refills_dob'] }}</p>
    <p>RX Number: {{ $mailData['refills_rxnum'] }}</p>
    <p>Mode of Delivery: {{ $mailData['refills_mod'] }}</p>
    <p>Location of Delivery: {{ $mailData['refills_mod'] }}</p>

</body>
</html>