<!DOCTYPE html>
<html>
<head>
    <title>TKS PHARMACY</title>
</head>
<body>
    <h4>{{ $mailData['title'] }}</h4>
    <p>Name of Patient: {{ $mailData['transfers_patname'] }}</p>
    <p>Phone Number of Patient: {{ $mailData['transfers_patpnum'] }}</p>
    <p>Date of Birth: {{ $mailData['transfers_patdob'] }}</p>
    <p>Email: {{ $mailData['transfers_patemail'] }}</p>
    <p>Name of Pharmacist: {{ $mailData['transfers_pharmname'] }}</p>
    <p>Phone Number of Pharmacist: {{ $mailData['transfers_pharmnum'] }}</p>
    <p>RX Number: {{ $mailData['transfers_rxnum'] }}</p>
    <p>Medication Name and Strength: {{ $mailData['transfers_med'] }}</p>
    <p>Note: {{ $mailData['transfers_note'] }}</p>

</body>
</html>