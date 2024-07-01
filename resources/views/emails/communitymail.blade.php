<!DOCTYPE html>
<html>
<head>
    <title>Shalom Global Volunteer</title>
</head>
<body>
     <h4>{{ $mailData['title'] }}</h4>
    <p>Name: {{ $mailData['communities_name'] }}</p>
    <p>Email: {{ $mailData['communities_email'] }}</p>
    <p>Phone Number: {{ $mailData['communities_pnum'] }}</p>
    <p>Organization Name: {{ $mailData['communities_orgname'] }}</p>
    <p>Country: {{ $mailData['communities_country'] }}</p>
    <p>State: {{ $mailData['communities_state'] }}</p>
    <p>City: {{ $mailData['communities_city'] }}</p>
    <p>Address: {{ $mailData['communities_address'] }}</p>
    <p>Preferred Date For Outreach: {{ $mailData['communities_outreachdate'] }}</p>
    <p>Time: {{ $mailData['communities_outreachtime'] }}</p>
    <p>Special Requirements: {{ $mailData['communities_req'] }}</p>
    <p>How did you hear about us?: {{ $mailData['communities_how'] }}</p>  
     
</body>
</html>