@extends('layouts.main')

@section('content')
<style>
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 3em;
    }

    .links > a {
        color: #eee;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .links {
        background-color: #000;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .front-main {
        background-image: url("/img/bridge.jpg");
        background-size: 'cover';
    }
    
    @media (max-width: 600px) {
        .title {
            
            font-size: 1.5em;
        }
    }
</style>

<div class="flex-center position-ref full-height row front-main">
    <div class="content">

        <div class='highlight highlight-light'>
            <h1>We Handle Your Returns</h1>
            <h1>You Focus on Growing Your Business</h1>
        </div>
        <div class="title m-b-md">
            <h1>Marksman RSC</h1>
        </div>

        <div class="links ">
            <a href="/return-handling">Return Handling</a>
            <a href="/dropshipping">Dropshipping</a>
            <a href="/fba-prep">FBA Prep</a>
            <a href="/shipping">Shipping</a>
            <!-- <a href="/about-us">About Us</a> -->
        </div>

    </div>
</div>

<div class="container">
    <h1>Ecommerce Solutions</h1>
    <p>
        Marksman RSC offers after-sales support solutions, including
        outsourced return handling, asset recovery, and product
        inspection services as well as the tools to get your products to market
        faster.
    </p>

    <div class="col-sm-4 card">
        <div class="sym">
            <img class="sym" src="img/returns.png" />
        </div>
        <h2>Return Handling</h2>
        <p>
            Outsource your return handling, reverse logistics, and asset recovery
            to Marksman RSC. 
        </p>
        <p>
            Unlike other solutions we can <b>inspect, test and recondition</b> your
            returned merchandise, improving your return-to-market and ROI.
        </p>
        <div class="cta pull-down">
            <a class="cta" href="/return-handling">Learn More</a>    
        </div>
        
    </div>
    <div class="col-sm-4 card">
        <div class="sym">
            <img class="sym" src="img/fba_prep.png" />
        </div>
        <h2>FBA Prep</h2>
        <p>
            Empower your Amazon FBA business with our FBA prep services. Our
            FBA prep services allow you to focus on what matters: sales,
            while we worry about SKU stickers and Amazon's packaging requirements.
        </p>
        <p>
            
        </p>
        
        <div class="cta pull-down">
            <a class="cta" href="/amazon-fba-prep">Learn More</a>    
        </div>        
    </div>
    <div class="col-sm-4 card">
        <div class="sym">
            <img class="sym" src="img/dropship.png" />
        </div>
        <h2>Drop Shipping</h2>
        <p>
            We also offer drop shipping services from our Ohio warehouse located
            in Cincinnati. Our custom inventory management system allows
            you to track your products all the way through sourcing, sales, and
            returns.
        </p>
        <p></p>
        <div class="cta pull-down">
            <a class="cta" href="/dropshipping">Learn More</a>    
        </div>
    </div>
    
    
    
    <div class="clearfix"></div>

    <h1>Return Handling Solutions</h1>
    <p>
        Marksman RSC is a leading provider of outsourced return handling
        and return-to-market services for ecommerce businesses. Our innovative
        reverse-logistics offerings increase your ROI by reducing the overhead
        costs incurred by returned merchandise and helping you get your
        products back to market faster.
    </p>
    <h2>Liquidation Alternative: Refurbishment</h2>
    <p>
        Our services provide a cost-effective alternative to liquidation
        and recycling of returned products. We can inspect, test, and
        recondition your returned merchandise enabling you to reclaim
        the value in returned items.

    </p>
    <p class="text-center">
        <a class='cta' href="/recover-value">View Case Study</a>
    </p>
</div>

@endsection