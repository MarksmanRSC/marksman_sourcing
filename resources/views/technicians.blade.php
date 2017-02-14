@extends('layouts.main');

@section('content')
<div class="container">
    <h1>Trained Technicians Handle Your Returns</h1>
    <img src="/img/certified_technicians.png" style="max-width: 100%; margin: 1em" align="left"/>
    <p>
        We know how quickly technology evolves. That's why we are dedicated
        to making sure our technicians are well-trained and supervised by
        experienced staff.
    </p>
    <p>
        Our technicians are familiar with a wide range of consumer electronics,
        computers, and networking equipment and supervised by certified
        professionals.
    </p>
</div>
<div class="container" id="certs">
    <h2>Technician Certifications</h2>
    <div class="col-sm-4">
        <img src="img/aplus.png" align="center" />

        <p>

            Globally recognized and accredited,CompTIA A+ certified professionals carry ISO/ANSI accreditation, and they have mastered the technologies in mobile and traditional devices and operating systems in IT environments. 
        </p>
        <p>            
            <a href="https://certification.comptia.org/certifications/a">CompTIA A+ is vendor-neutral, providing a comprehensive knowledge base to employ best practices for troubleshooting, networking, and security</a>

        </p>

    </div>
    <div class="col-sm-4">
        <img src="img/netplus.png" />
        <p>

            CompTIA Network+ certified professionals are trained to work on a variety of hardware, software, and network equipment.
            
        </p>
        <p>
            <a href="https://certification.comptia.org/certifications/network">CompTIA Network+ is approved by the U.S. Department of Defense and is compliant with government regulations</a>
             under the <a href="https://www.dhs.gov/fisma">Federal Information Security Management Act (FISMA).</a>

        </p>
    </div>
    <div class="col-sm-4">
        <img src="/img/cisco.jpg" />

        <p>
            Cisco CCNA certified professionals are trained to operate and troubleshoot many different types of network equipment including wireless routers, firewalls, VOIP endpoints, and Cisco IOS devices.
        </p>
        <p>
            <strong>Yes, we can refurbish Cisco products!</strong>
        </p>

    </div>
</div>

@endsection
