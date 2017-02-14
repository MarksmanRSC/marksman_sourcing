@extends('layouts.main')

@section('content')

    <div class="container">
        
       <h1>Discounted Shipping Rates</h1>
       <p>
           We offer some of the best USPS and FedEx rates in the industry.
       </p>

        <h2>Don't take our word for it - try it yourself</h2>

 

       <form id="shippingForm" method="POST">
        
        <div class="col-sm-6" id="dimensions" style="border: 1px #a7a7a7 solid">
            <h1>Shipping Rate Calculator</h1>
            <p>
                Use our shipping rate calculator and compare with your current rates.
            </p> 


         <div id="shippingResult"></div>
            <h4>Package Dimensions</h4>
            <label>
                Length
                <input class="form-control" type="number" steps=".1" name="length" placeholder="Length" required>
            </label>
            <label>
                Width
                <input class="form-control" type="number" steps=".1" name="width" placeholder="Width" required>
            </label>
            
            <label>
                Height
                <input class="form-control" type="number" steps=".1" name="height" placeholder="Height" required>    
            </label>
            
            <label>
                Weight (lbs)
                <input class="form-control" type="number" steps=".1" name="weight" placeholder="Weight" required>    
            </label>

            
            <div class="col-xs-6">            
                <label>
                    From (zip code)
                    <input class="form-control" type="number" name="from_zip" placeholder="Zip" required>    
                </label>                        
            </div>
            
            <div class="col-xs-6">
                
                <label>
                    To (zip code)
                    <input class="form-control" type="number" name="to_zip" placeholder="Zip" required>    
                </label>
            </div>
            
            <br /><br />            
            <center><button id="estBtn" class="form-control btn btn-primary"><b>Get Your Shipping Rate</b></button></center>
            
            
        </div>

       <div class="col-sm-6">
           <p>
                Our discounted shipping rates integrate directly with our
                <a href="/dropshipping">drop shipping</a> service for all
                domestic shipments in the USA.       
           </p>
           <p>
               Foreign shipping is also available upon request.
           </p>

        </div>
        <div class="clearfix"></div>
        
        
        </form>
        
        <div class="clearfix"></div>
        <center>
        <div id="signUp" style="display: none; width: 80%" >
                You're only seconds away...
            
            
                <center><h1>Sign Up Now</h1></center>     
                <form method="POST" action="https://app.marksmanrsc.com/?page=register">
                    <input class="form-control" type="text" name="firstName"  placeholder="First name"/>
                    <input class="form-control" type="text" name="lastName" placeholder="Last name"/>
                    <input class="form-control" type="email" name="email" placeholder="Email" />
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                    <input class="form-control" type="password" name="password2" placeholder="Confirm Password" />
                    <input type="hidden" name="privacy" value="On" />
                    <p class='text-center'>
                        <button class='btn btn-orange2' style="font-weight: bold"> Sign Up </button>
                    </p>
                </form>
            
 

        </div>
        </center>
        
        <h2>API Integration</h2>
        <p>
            Do you have your own website or ordering system? We provide an easy-to-use
            API so your developers can integrate our shipping services right
            into your application. <a href="https://github.com/MarksmanRSC/mrscClient-php/wiki">Read more on our Github.</a>
        </p>
        
        <br />
        
    </div>
<script>
    $(document).ready(function () {
            $('#shippingForm').submit( function (event) {
               event.preventDefault();
               
               console.log("We got here");
               // return false;
               
               $('#shippingResult').empty().append("Checking...");
               $('#estBtn').html("Checking...");
               
               $('#shippingForm').addClass("waiting");
               
               var formData = $('#shippingForm').serializeArray();
               
               $.post('/shipping.php', formData).done(function (response) {
                  if (response == false) {
                      console.log("error");
                  } else {
                      $("#estBtn").html("<b>Get Another Shipping Rate</b>");
                      
                      var result = $('#shippingResult')
                      $(result).empty();
                      
                      console.log(response);

                      for (var i in response) {
                          $(result).append("<h1 class='animated flipInX'>$" + 
                            response[i].amount +                            
                            " via " + response[i].provider +
                            " " + response[i].service_level +
                            " <img src='" + response[i].provider_image + "' />" +
                            "</h1>");                              
                      }
                      
                      $('#signUp').fadeIn().addClass("animated flipInY");

                  }
               });
                    
            });        
    });
</script>


@endsection
