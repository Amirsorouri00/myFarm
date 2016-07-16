@extends('layouts.app')


@section('content2')
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
</style>

@endsection

@section('content')
    <div>
        <div style="width: 100%; margin-top: 0%;">



            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; margin: 0; padding: 0;">
                <!-- Indicators -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h2 class="mything" style="display: none; ">Get Help From Others</h2>
                            </div>
                        </div>
                    </div>

                    <h2 class="one" style="display: none;" >Our Departments</h2>




                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner two" role="listbox" style="display: none; padding: 0; margin: 0;">
                    <div class="item active">
                        <div class="col-sm-4">
                            <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-sm-4">
                            <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                        </div>
                    </div>



                </div>

                <div style="width: 100%; margin: 0; padding: 0;">

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>
            </div>



        </div>


    <!-- Container (Services Section) -->
<div class="col-md-12">


    <div class="col-md-10 three" style="margin-left:10%; display: none ">
        <div class="row">
            <div id="services" class="container-fluid text-center">
                <h2>SERVICES</h2>
                <h4>What we offer</h4>
                <br>
                <div class="row slideanim">
                    <div class="col-sm-4">
                        <span style="font-size:3em;" class="glyphicon glyphicon-off logo-medium"></span>
                        <h4>POWER</h4>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size:3em;" class="glyphicon glyphicon-heart logo-small"></span>
                        <h4>LOVE</h4>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size:3em;" class="glyphicon glyphicon-lock logo-small"></span>
                        <h4>JOB DONE</h4>
                    </div>
                </div>
                <br><br>
                <div class="row slideanim">
                    <div class="col-sm-4">
                        <span style="font-size:3em;" class="glyphicon glyphicon-leaf logo-small"></span>
                        <h4>GREEN</h4>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size:3em;" class="glyphicon glyphicon-certificate logo-small"></span>
                        <h4>CERTIFIED</h4>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size:3em;" class="glyphicon glyphicon-wrench logo-small"></span>
                        <h4 style="color:#303030;">HARD WORK</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%; margin: 0; padding: 0;">

        <!-- Left and right controls -->
        <p class="left carousel-control">
            <span class="glyphicon glyphicon-chevron" aria-hidden="true"></span>

        </p>

        <p class="right carousel-control">
            <span class="glyphicon glyphicon-chevron" aria-hidden="true"></span>
        </p>

    </div>

</div>
    </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.mything, .one').fadeIn(2000);
                $('.two').fadeIn(4000);
                $('.three').fadeIn(6000);
            });
        </script>

@endsection



