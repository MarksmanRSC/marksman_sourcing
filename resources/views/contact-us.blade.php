@extends('layouts.main');

@section('content')

<div class="container">

    <h1>
        Contact Us
    </h1>
    <p>
        Please fill out the form below and one of our team will contact you within
        2 business days.
    </p>
    
    <div class="col-md-6">
            
        
    
        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
                background: #fff;
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form action="//MarksmanRSC.us12.list-manage.com/subscribe/post?u=9bd8b9a80404f22a08957c480&amp;id=433d15588e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2>Contact Us Today</h2>
                    <div class="indicates-required">
                        <span class="asterisk">*</span> indicates required
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span> </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" class="form-control">
                    </div>
                    <div class="mc-field-group size1of2">
                        <label for="mce-MMERGE5">Phone Number </label>
                        <input type="text" name="MMERGE5" class="" value="" id="mce-MMERGE5">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE6">Company </label>
                        <input type="text" value="" name="MMERGE6" class="" id="mce-MMERGE6">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE3">What service are you interested in? <span class="asterisk">*</span> </label>
                        <select name="MMERGE3" class="required" id="mce-MMERGE3">
                            <option value=""></option>
                            <option value="Return Handling">Return Handling</option>
                            <option value="FBA Prep">FBA Prep</option>
                            <option value="Drop Shipping">Drop Shipping</option>
                            <option value="Other">Other</option>
    
                        </select>
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE4">Message </label>
                        <textarea class="form-control" type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4"></textarea>
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_9bd8b9a80404f22a08957c480_433d15588e" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                        <input type="submit" value="Contact Us" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
            ( function($) {
                    window.fnames = new Array();
                    window.ftypes = new Array();
                    fnames[0] = 'EMAIL';
                    ftypes[0] = 'email';
                    fnames[5] = 'MMERGE5';
                    ftypes[5] = 'phone';
                    fnames[6] = 'MMERGE6';
                    ftypes[6] = 'text';
                    fnames[1] = 'FNAME';
                    ftypes[1] = 'text';
                    fnames[2] = 'LNAME';
                    ftypes[2] = 'text';
                    fnames[3] = 'MMERGE3';
                    ftypes[3] = 'dropdown';
                    fnames[4] = 'MMERGE4';
                    ftypes[4] = 'text';
                }(jQuery));
            var $mcj = jQuery.noConflict(true);
        </script>
        <!--End mc_embed_signup-->

    </div>
    <div class="col-md-6">
        <h2>Customer Support</h2>
        <p>
            For prompt customer support please use the "Report Issue" button inside
            of our inventory management system.
        </p>
    </div>

</div>

@endsection

