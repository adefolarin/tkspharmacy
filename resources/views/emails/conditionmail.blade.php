<!DOCTYPE html>
<html>
<head>
    <title>Shalom Global</title>
</head>
<body>
    <h4>{{ $mailData['title'] }}</h4>
    <p>Date: {{ $mailData['conditions_date'] }}</p>
    <p>Name: {{ $mailData['conditions_name'] }}</p>
    <p>Email: {{ $mailData['conditions_email'] }}</p>
    <p>Phone Numebr: {{ $mailData['conditions_pnum'] }}</p>
    <p>Address: {{ $mailData['conditions_address'] }}</p>
    <p>Type of Medical Condition: {{ $mailData['conditions_type'] }}</p>
    <p>Description of Medical Condition: {{ $mailData['conditions_desc'] }}</p>
    <p>Type of Treatment: {{ $mailData['conditions_treatment'] }}</p>
    <p>Estimated Cost Of Treatment: {{ $mailData['conditions_treatmentcost'] }}</p>
    <p>Reason For Fundraising: {{ $mailData['conditions_fundreason'] }}</p>
    <p>Fundraising Goal: {{ $mailData['conditions_fundgoal'] }}</p>
    <p>Fundraising Deadline: {{ $mailData['conditions_funddeadline'] }}</p>
 

</body>
</html>