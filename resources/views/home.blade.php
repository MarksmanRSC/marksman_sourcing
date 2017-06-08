@extends('layouts.main')

@section('content')
<style>

    @media (max-width: 600px) {
        .title {
            
            font-size: 1.5em;
        }
    }

    #videoDiv {
        width: 100%;
        /*height: 360px; */
        height: 100vh;
        position: relative;
    }
    #videoBlock,#videoMessage {width: 100%;
        /*height: 360px; */
        /*height: 100%;*/
        position: absolute;
        top: 0;
        left: 0;
        /*overflow-y: hidden;*/
    }

    #videoBlock video {
        height: 100%;
        width: 100%;
    }

    #videoMessage {
        background: rgba(0, 0,0, .3);
        height: 100%;
    }

    #videoMessage *{
        padding:0.4em;
        margin:0;
        margin-top: 4em;

    }
    #videoMessage {
        text-shadow: 2px 2px 2px #000000;
        color:white;
        z-index:99
    }
    #videoMessage h1{
        font-size: 2em;
        color:#ffffff;
        text-align:center;
    }
    #videoMessage h2{
        font-size: 1.5em;
        color:#ffffff;
        text-align:center;
    }
    #videoMessage h3{
        font-size: 1.0em;
        color:#ffffff;
        text-align:center;
    }
    .videoClick {text-align:center}
    .videoClick a{color:white;background-color:rgba(241, 241, 241, 0.25);font-size: 1.7em;cursor:pointer;cursor:hand}

</style>


<div id="videoDiv">
    <div id="videoBlock">
        {{--<video preload="preload" id="video" autoplay="autoplay" loop="loop" playsinline>--}}
        <video preload="preload" id="video" autoplay="autoplay" loop="loop" muted>

            <source src="video.mp4" type="video/mp4">

            {{--<source src="video2.mp4" type="video/mp4">--}}
        </video>
        <div id="videoMessage">
            <h1>Ask Idea Sourcing</h1>

            {{--<h2>Providing affordable services to Amazon sellers...</h2>--}}
            {{--<h2>that make sourcing from overseas comfortable and easy. </h2>--}}
            <h2>Your affordable, reliable, and transparent sourcing agent.</h2>
            <p class="videoClick" >
                <a href="#">Click here to get started.</a>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <h1>Sourcing Made Easy</h1>
    <p>
        Need text
    </p>

    <h1>Which is right for me?</h1>
    <div class="row">


        <div class="col-sm-4 card ">
            <div class="card-header dark-primary-color">
                <div class="image-wrapper">
                    <img src="img/icons/column1.svg" />
                </div>
                <strong class="divider-color text-primary-color">
                    Phase 1
                </strong>
            </div>
            <div class="card-content light">
                {{--<h1 class="card-title">Title</h1>--}}
                <div class="card-modal">
                    <h2 class="card-title secondary-text-color">Sourcing Research</h2>

                    <ul class="secondary-text-color">
                        <li>Product Consultation</li>
                        <li>Supplier Assessment</li>
                        <li>Sampling</li>
                        <li>Industry Regulations</li>
                        <li>Supplier Qualification</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="col-sm-4 card">
            <div class="card-header dark-primary-color">
                <div class="image-wrapper">
                    <img src="img/icons/column2.svg" />
                </div>
                <strong class="divider-color text-primary-color">
                    Phase 2
                </strong>
            </div>
            <div class="card-content">
                {{--<h1 class="card-title">Title</h1>--}}
                <div class="card-modal">
                    <h2 class="card-title secondary-text-color">Go-to-Market</h2>
                    <ul class="secondary-text-color">
                        <li>Procurement</li>
                        <li>Payment</li>
                        <li>Order Monitoring</li>
                        <li>Supply Chain Management</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card">
            <div class="card-header dark-primary-color">
                <div class="image-wrapper">
                    <img src="img/icons/column3.svg" />
                </div>
                <strong class="divider-color text-primary-color">
                    ???
                </strong>
            </div>
            <div class="card-content">
                {{--<h1 class="card-title">Title</h1>--}}
                <div class="card-modal secondary-text-color">
                    <h2 class="card-title secondary-text-color">End-to-End Supply Chain</h2>

                        We handle your sourcing project all the way from concept to market and beyond.

                </div>
            </div>
        </div>


    </div>
    <div class="cta"><a class="cta" href="">Get started now</a></div>

    <div class="clearfix"></div>


</div>

@endsection