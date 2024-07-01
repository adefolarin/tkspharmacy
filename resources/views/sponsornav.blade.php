<div class="container mt-3">
        <h4 class="text-center" style="margin-top: -50px;">Welcome <strong>{{ Auth::guard('sponsor')->user()->sponsors_name }}</</h2>
        <br><br><br><br>
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('sponsor') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sponsorupdate') }}">Update Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sponsorresource') }}">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sponsorreport') }}">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sponsorpayment') }}">Transactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">Logout</a>
            </li>
        </ul><br>
 </div>