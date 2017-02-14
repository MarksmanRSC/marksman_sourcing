@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Recover Value from Returned Items</h1>
    <p>
        Our inspection and refurbishment services help you recover value
        from returned products.
    </p>
    <p>
        After our technicians have inspected and tested your items our system
        will provide you with a detailed condition of the item and a
        recommended resale value, enabling you to get your product back to
        market ASAP.

    </p>


    <h1>Case Study: Liquidation vs. Refurbishment</h1>
    <div id="case-study">
        
        <h2>Return: HP Laptop (MSRP $500)</h2><br />
        <div class="col-sm-12" id="study-arrow">
            <img src="img/study-arrow.png"/>
        </div>

        <div class="col-xs-4">
            <h2>Liquidation</h2>
            <h3>
                Recovered: $125
            </h3>
            <p>
                <span style="color: #880000">Only 25% of MSRP</span>
            </p>
        </div>
        <div class="col-xs-4">
            <h2 style="font-size: 3em">VS</h2>
        </div>
        <div class="col-xs-4">
            <h2>Marksman</h2>
            <h3>Recovered: $335</h3>
            <p>
                <strong><span style="color: #008800">67% of MSRP recovered!</span></strong>
            </p>
            <p>
                Total Fees: $65 ($20 Marksman Service fee)
            </p>
            
            
        </div>

    </div>
    
    <h1>Compeleted Items</h1>
    <p>
        Once service has been completed for your items our system enables you
        to easily relist them to Amazon FBM or send them back for FBA.
    </p>
    <p>
        We can even <a href="/dropshipping">drop ship</a> your orders and peform <a href="/fba-prep">FBA prep</a> for you!
    </p>

</div>

@endsection

@section('cta')

<a class="cta" href="/serviced-products">See Pricing</a>

@endsection
