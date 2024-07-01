<!DOCTYPE html>
<html>
<head>
    <title>Shalom GlobalVolunteer</title>
</head>
<body>
     <h4>{{ $mailData['title'] }}</h4>
    <p>Name: {{ $mailData['volunteers_name'] }}</p>
    <p>Email: {{ $mailData['volunteers_email'] }}</p>
    <p>Phone Number: {{ $mailData['volunteers_pnum'] }}</p>
    <p>Mailing Address: {{ $mailData['volunteers_mailaddress'] }}</p>
    <p>Time of Availability: {{ $mailData['volunteers_time'] }}</p>
    <p>Skill: {{ $mailData['volunteers_skill'] }}</p>
    <p>Qualification: {{ $mailData['volunteers_qual'] }}</p>
    <p>Experience: {{ $mailData['volunteers_exp'] }}</p>
    <p>Language Spoken: {{ $mailData['volunteers_lang'] }}</p>
    <p>Area of Interest: {{ $mailData['volunteers_interest'] }}</p>
    <p>Avaialability For Training: {{ $mailData['volunteers_training'] }}</p>
    <p>Emergency Contact: {{ $mailData['volunteers_emergcontact'] }}</p>
    <p>Relationship: {{ $mailData['volunteers_emergrel'] }}</p>
    <p>Emergency Contact Information: {{ $mailData['volunteers_emergcontactinfo'] }}</p>
    <p>Medical Information: {{ $mailData['volunteers_medinfo'] }}</p>
    <p>Reference: {{ $mailData['volunteers_ref'] }}</p>
    <p>Consent For Background Check: {{ $mailData['volunteers_check'] }}</p>
   
     
</body>
</html>