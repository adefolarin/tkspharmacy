<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
     h1 {
       text-align:center;
     }

     table {
       width:100%;
       border: none;
       background-color:#1A3F6C;
     }

     table tr, table th, table td {
       padding: 25px;
       border-top: 1px solid #fff;
       border-left: 1px solid #fff;
       font-size: 18px;
       color:#fff;
       text-align:center;
       
     }
  </style>

</head>

<body class="home">

<h1>TKS Transfered Patient (This is for Testing)</h1>

<table>
  <tr>
    <th>Name:</th>
    <td colspan="4">{{ $name }}</td>
  </tr>
  <tr>
    <th>Phone Number:</th>
    <td colspan="4">{{ $pnum }}</td>
  </tr>
  <tr>
    <th>Date of Birth:</th>
    <td colspan="4">{{ $dob }}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td colspan="4">{{ $email }}</td>
  </tr>
  <tr>
    <th>Name of Pharmacist:</th>
    <td colspan="4">{{ $pharmname }}</td>
  </tr>
  <tr>
    <th>Phone Number of Pharmacist:</th>
    <td colspan="4">{{ $pharmpnum }}</td>
  </tr>
  <tr>
    <th>Note:</th>
    <td colspan="4">{{ $note }}</td>
  </tr>
  <tr>
    <th colspan="5">RX Number</th>
  </tr>
 
    <tr>
    @foreach($rxnum as $val)
       <td> val </td><td> val </td><td> val </td><td> val </td><td> val </td>
    @endforeach
    </tr>
 

  <tr>
    <th colspan="5">Medication and Strength</th>
  </tr>


    <tr>
    @foreach($med as $val)
       <td> val </td><td> val </td><td> val </td><td> val </td><td> val </td>
    @endforeach
    </tr>



</table>

</body>

</html>