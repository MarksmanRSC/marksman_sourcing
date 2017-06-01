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
        /*background-image: url("/img/bridge_resized.jpg");*/
        background-size: scale;
    }
    
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
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    #videoBlock video {
        height: 100%;
        width: 100%;
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

            <source src="video1.mp4" type="video/mp4">

            <source src="video2.mp4" type="video/mp4">
        </video>
        <div id="videoMessage">
            <h1>Ask Idea Sourcing</h1>
            <h2>Providing affordable services to Amazon sellers...</h2>
            <h2>that make sourcing from overseas comfortable and easy. </h2>
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


        <div class="col-sm-4 card">
            <div class="card-header">
                <div class="image-wrapper">
                    <img src="img/icons/column1.svg" />
                </div>
                <strong>
                    Phase 1
                </strong>
            </div>
            <div class="card-content">
                {{--<h1 class="card-title">Title</h1>--}}
                <div class="card-modal">
                    <h2 class="card-title">Explain wtf</h2>
                    <p>
                        Explain wtf
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 card">
            <div class="card-header">
                <div class="image-wrapper">
                    <img src="img/icons/column2.svg" />
                </div>
                <strong>
                    Phase 2
                </strong>
            </div>
            <div class="card-content">
                {{--<h1 class="card-title">Title</h1>--}}
                <div class="card-modal">
                    <h2 class="card-title">Explain wtf</h2>
                    <p>
                        Explain wtf
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card">
            <div class="card-header">
                <div class="image-wrapper">
                    <img src="img/icons/column3.svg" />
                </div>
                <strong>
                    ???
                </strong>
            </div>
            <div class="card-content">
                {{--<h1 class="card-title">Title</h1>--}}
                <div class="card-modal">
                    <h2 class="card-title">Explain wtf</h2>
                    <p>
                        Explain wtf
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div class="cta"><a class="cta" href="">Get started now</a></div>

    <div class="clearfix"></div>


</div>

@endsection