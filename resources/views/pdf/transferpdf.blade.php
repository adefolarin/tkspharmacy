<h1>TKS Transfered Patient (This is for Testing)</h1>

<table>
  <tr>
    <th>Name:</th>
    <td>{{ $name }}</td>
  </tr>
  <tr>
    <th>Phone Number:</th>
    <td>{{ $pnum }}</td>
  </tr>
  <tr>
    <th>Date of Birth:</th>
    <td>{{ $dob }}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{ $email }}</td>
  </tr>
  <tr>
    <th>Name of Pharmacist:</th>
    <td>{{ $pharmname }}</td>
  </tr>
  <tr>
    <th>Phone Number of Pharmacist:</th>
    <td>{{ $pharmpnum }}</td>
  </tr>
  <tr>
    <th>Note:</th>
    <td>{{ $note }}</td>
  </tr>
  <tr>
       <th>RX Number</th>
       <th></th>
       <th>Medication and Strength</th>
  </tr>
  @foreach($rxnum as $index = $value)
     @foreach($med as $vals)
    <tr>
       <td>{{ $val }}</td>
       <td>{{ $vals }}</td>
    </tr>
    @endforeach
  @endforeach


</table>