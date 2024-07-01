@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3> FAQ </h3>
                            <a href="{{ url('/') }}">Home </a>/
                            <span> FAQ</span>
                        </div>
                    </div>
                </div>
            </div>
            @if($errors->any())
                    <div class="alert alert-danger" style="margin-top:50px;padding:30px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:50px;padding:30px;">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:50px;padding:30px;">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        </section>
        <!-- common banner -->


       <!-- faq container -->
       <section class="faq-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-accordion faq-page-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What services does your Shalom Global offer? 
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We provides a range of free medical treatment, medical consultations, medical screenings, health training, medical outreach to underserved communities globally.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Who is eligible to receive free medical treatment from your Organization? 
                                    </button>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our services are available to individuals in underserved communities who may not have access to adequate healthcare due to financial constraints or lack of resources.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can individuals access your medical services? 
                                    </button>
                                </h4>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Individuals can access our medical services by visiting our outreach events, health camps or through partners which is a healthcare facility in their communities. 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Are there any criteria for eligibility to receive free medical treatment? 
                                    </button>
                                </h4>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our services are provided on a first-come, first-served basis, and there are no specific eligibility criteria other than being in need of medical care and residing in an underserved community.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq-accordion accordion-right faq-page-accordion">
                        <div class="accordion" id="accordionOne">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Do you charge any fees for your medical services? 
                                    </button>
                                </h4>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                    No, all our medical services are provided free of charge to individuals in need. We believe that access to healthcare is a fundamental right and strive to remove financial barriers to medical treatment.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What types of medical conditions do you treat? 
                                    </button>
                                </h4>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        Our medical team is equipped to treat a wide range of acute and chronic medical conditions, surgeries including but not limited to infectious diseases, non-communicable diseases, maternal and child health issues, and general healthcare needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Do you provide follow-up care for patients? 
                                    </button>
                                </h4>
                                <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                      Yes, we emphasize the importance of continuity of care and provide follow-up consultations, medications, and referrals to other healthcare providers or facilities as needed to ensure the well-being of our patients.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How do you fund your medical programs? 
                                    </button>
                                </h4>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        Our medical programs are funded through donations, grants, fundraising events, corporate sponsorships, and partnerships with other organizations or government agencies that share our commitment to improving healthcare access for underserved populations.
                                    </div>
                                </div>
                                <div class="accordion-item">
                                <h4 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                               How can I support your NGO's mission of providing free medical treatment?  
                                    </button>
                                </h4>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        There are several ways to support our mission including making a donation, volunteering your time and expertise, spreading awareness about our work, or partnering with us on initiatives to expand access to healthcare in underserved communities.
                                    </div>
                                </div>
                                <div class="accordion-item">
                                <h4 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              10.   Where can I find more information about your NGO and its medical programs?   
                                    </button>
                                </h4>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        For more information about us and our medical programs, follow us on social media, or contact us directly via email or phone. We welcome inquiries and are happy to provide further details about our work and how you can get involved.
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
       <!-- faq container -->

    @endsection