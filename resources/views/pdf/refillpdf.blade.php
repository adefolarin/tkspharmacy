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
       padding: 20px;
       border-top: 1px solid #fff;
       border-left: 1px solid #fff;
       font-size: 20px;
       color:#fff;
     }
  </style>

</head>

<body class="home">


<h1>TKS Refill (This is for Testing)</h1>

<table>
  <tr>
    <th>Name:</th>
    <td> {{ $name }} </td>
  </tr>
  <tr>
    <th>Phone Number:</th>
    <td> {{ $pnum }} </td>
  </tr>
  <tr>
    <th>Date of Birth:</th>
    <td> {{ $dob }} </td>
  </tr>
  <tr>
    <th>RX Number:</th>
    <td> {{ $rxnum }} </td>
  </tr>
  <tr>
    <th>Mode of Delivery:</th>
    <td> {{ $mod }} </td>
  </tr>
  <tr>
    <th>Location of Delivery:</th>
    <td> {{ $lod }} </td>
  </tr>
</table>

</body>


</html>