@extends('layouts.main');

@section('content')
<div class="container">
    <!-- <img src="img/certified_technicians.png" /> -->
    
    <div class="hero" id="serviceable">
        <h2 class="highlight highlight-dark pull-right">refurbish - relist - resell</h2>
    </div>
    
    <h1>Serviceable Returns</h1>
    <p>
        Our skilled technicians are capable of inspecting, testing,
        and reconditioning a wide range of returned merchandise.
    </p>
    <p>
        Below are some examples of the products we can service and price ranges.
    </p>

    <!-- <h3>What is the difference between Inspection and Refurbishment?</h3>

    <div class="col-sm-6">
    <h4>Inspection</h4>
    <p>
    Inspection covers:
    <ul>
    <li>
    Verify your end-buyer returned the correct item.
    </li>
    <li>
    Check for missing pieces and components
    </li>
    <li>
    Check for physical damage to the item
    </li>
    </ul>
    </p>
    </div>
    <div class="col-sm-6">
    <h4>Test &amp; Recondition (ie. Refurbishment)</h4>
    <p>
    Refurbishment covers:
    <ul>
    <li>
    Verify your end-buyer returned the correct item
    </li>
    <li>
    Check for missing pieces and components
    </li>
    <li>
    Check for physical damage to the item
    </li>
    <li>
    Test all product features function correctly
    </li>
    <li>
    Clean and repackage item for best resale condition
    </li>
    <li>
    Grade the item condition (New, Used - Like New, Defective, etc.)
    </li>
    </ul>
    </p>
    </div> -->

    <h2>Pricing Guide</h2>

    <div class="clearfix"></div>
    <table class="wTable">
        <thead>
            <tr>
                <th>Product Category</th>
                <th> Examples </th>
                <th> Price Range </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Computers</td>
                <td> Our technicians refurbish gaming computers, laptops, and all-in-one PC's from the top manufacturers including Toshiba, Lenovo, HP, Dell, Asus, Apple, Microsoft, Acer, Samsung, and more </td>
                <td> $20 </td>
            </tr>
            <tr>
                <td>TVs &amp; Monitors</td>
                <td>Vizio, Sony, LG, Acer, Dell, Asus, Philips, Samsung, Sony, Sharp, Panasonic, Toshiba, etc.</td>
                <td>$15-30</td>
            </tr>
            <tr>
                <td> Game Consoles &amp; Accessories </td>
                <td> Returned Xbox One, Playstation 4, Wii U, you name it: we can help. We can refurbish Microsoft, Sony, Nintendo, and other game consoles and accessories. </td>
                <td>$20</td>
            </tr>
            <tr>
                <td>Tablets</td>
                <td> Returned tablets are no problem. Our refurbishment technicians are familiar with the leading brands: Microsoft, Dell, Asus, Samsung, LG, Sony, Apple, Nexus, etc. </td>
                <td>$15</td>
            </tr>
            <tr>
                <td>Headsets &amp; Headphones</td>
                <td> We have experience with returned headphones, speakers, bluetooth headsets and more.
                Sennheiser, Plantronics, Creative, Beats, Bose, Philips, JVC, Sony, Pioneer, Panasonic, etc </td>
                <td>$7-10</td>
            </tr>
            <tr>
                <td>Hard Drives, SSDs, Flash storage devices</td>
                <td>SanDisk, Seagate, Samsung, Toshiba, Western Digital, LaCie, Dell, etc</td>
                <td>$7-10</td>
            </tr>
            <tr>
                <td>Coffee Markers, Blenders &amp; Kitchen Appliances</td>
                <td>We take care of returned coffee machines, coffee makers, blenders and more small kitchen appliances.</td>
                <td>$15-25</td>
            </tr>
            <tr>
                <td>Garden</td>
                <td>We handle a wide range of different gardening tools, hand tools.</td>
                <td>$2-6</td>
            </tr>
            <tr>
                <td>Kitchen</td>
                <td>Cookware, bakeware, tableware, Bar and Wines, etc</td>
                <td>$2-6</td>
            </tr>
            <tr>
                <td>Hardware</td>
                <td>Door knobs, lock sets, light fixtures</td>
                <td>$2-10</td>
            </tr>
            <tr>
                <td colspan='3'> For detailed pricing information please contact us for a <a href="/quote">quote</a>. </td>
            </tr>

        </tbody>
    </table>

    <section id="general-merchandise">
        <h2>General Merchandise</h2>
        <p>
            In addition to the items listed above we are also able to inspect
            and refurbish several other kinds of merchandise, including:
            
        </p>
        
        <div class="col-sm-6">
            <ul>
                <li>Furniture (chairs, desks, couches, etc)</li>
                <li>Lamps and lighting</li>
                <li>Hand tools</li>
                <li>Toys</li>
            </ul>
        </div>
        <div class="col-sm-6">
            <ul>
                <li>Books</li>
                <li>Beauty supplies (hair clippers, blow dryers, etc)</li>
                <li>Sporting goods</li>
                
            </ul>
        </div>
        <div class="clearfix"></div>

        <h3>Pricing Guidelines</h3>
        <p>
            Our pricing for inspection and refurbishment varies based on a few factors:
            
            <div class="col-sm-6">
            <ul>
                <li>
                    Testing requirements:
                    <ul>
                        <li>Equipment required</li>
                        <li>Training / Special skills required</li>
                        <li>
                            Consumables required
                        </li>
                    </ul>
                </li>
                
            </ul>                
            </div>
            <div class="col-sm-6">
                <ul>
                    <li>Complexity of item, determined by:
                        <ul>
                            <li>Part count</li>
                            <li>Moving pieces / functions</li>
                        </ul>    
                    </li>
                </ul>                
            </div>
            <div class="clearfix"></div>            
        </p>
        <p>
            If you don't see your item listed in the sample pricing above
            please contact us for a quote.
        </p>
        <div class="cta">
            <a class="cta" href="/quote">Get a Quote</a>
        </div>
        
    </section>
    <h2>Unserviceable Items</h2>
    <p>
        While we can service most merchandise there are some items for which we
        offer only limited services.
    </p>
    <ul>
        <li>Medical equipment</li>
        <li>Certain lab equipment (anything that comes in contact with bodily fluids)</li>
        <li>Firearms &amp; accessories</li>        
    </ul>

</div>
@endsection
