<form name="frmRequestAppoint" id="frmRequestAppoint" action="{{ url('/appointment') }}" method="post" class="home-req">@csrf
    <h3>Book An
        Appointment</h3>
    <input type="text" placeholder="Full Name" name="appointments_name" id="fname">
    <input type="email" name="appointments_email" id="femail" placeholder=" Email*">
    <input placeholder="Select your Date" type="text" name="appointments_date" id="appointments_date" value="" class="calendar" autocomplete="off"/><i class="icofont-ui-calendar"></i>
    <select class="form-control" name="appointments_service" id="fdoctor">
        <option data-display="Select Your services" class="option selected focus">Select  Service</option>
        <option value="Medication delivery service" class="option">Pharmacy services</option>
        <option value="Clinical services" class="option">Clinical services</option>
        <option value="Home Vaccinations" class="option">Home Vaccinations</option>
        <option value="Care Services" class="option">Care Services</option>
        <option value="Care Services" class="option">DME</option>
    </select>
    <br>

    <button class="team-1" type="submit">Make An Appointment</button>
</form>