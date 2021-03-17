@extends('layouts.app')

@section('content')

    <main role="main">
            <div class="container">




                <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 font-italic">Chenney Chang Portfolio</h1>
                        <p class="lead my-3">Welkom op mijn Portfolio website. Op mijn portfolio website zal ik mijn projecten laten zien
                                                en meer informatie over mezelf vertellen.</p>
                        <p class="lead mb-0"><a href="{{ url('/about') }}" class="text-white font-weight-bold">Lees hier meer over mij...</a></p>
                        <img class="rounded-circle" style="margin-left: 600px; margin-top: -300px; height: 300px; width: 300px  "
                             src="../img/homefoto.jpg" alt="Generic placeholder image" width="140" height="140">
               </div>
                </div>

                 <div class="row mb-2">
                     <div class="col-md-6">
                      <div class="card flex-md-row mb-4 box-shadow h-md-250">
                         <div class="card-body d-flex flex-column align-items-start">
                           <h3 class="mb-0">
                            <a class="text-primary" href="{{ url('/beroepsexamen') }}"> Beroepsexamen</a>
                                </h3>
                    <div class="mb-1 text-muted">Portfolio</div>
                                    <p class="card-text mb-auto">Hier krijgt u informatie te zien over mijn beroepsexamen. Over hoe me beroepsexamen
                                    eruit zag en hoe me eindproduct eruit ziet.</p>
                                    <a href="{{ url('/beroepsexamen') }}"> Lees Meer...</a>
                    </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="height: 250px; width: 200px"
                                 src="../img/examen.jpg" alt="Card image cap">
                    </div>

                        </div>


                     <div class="col-md-6">
                         <div class="card flex-md-row mb-4 box-shadow h-md-250">
                             <div class="card-body d-flex flex-column align-items-start">
                                 <h3 class="mb-0">
                                     <a class="text-success" href="{{ url('/keuzedelen') }}">Keuzedelen</a>
                                 </h3>
                                 <div class="mb-1 text-muted">Portfolio</div>
                                 <p class="card-text mb-auto">Hier krijgt u meer informatie te zien over de keuzedelen die ik heb gemaakt. De keuzedelen zijn
                                     onderdeel van mijn examen.
                                 </p>
                                 <a href="{{ url('/keuzedelen') }}">Lees Meer...</a>
                             </div>
                             <img class="card-img-right flex-auto d-none d-md-block" style="height: 250px; width: 200px"
                                  src="../img/keuzedelen.jpg" alt="Card image cap">
                         </div>
                     </div>
                 </div>


                {{--Hier begint 2e row--}}
                <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-success" href="{{ url('/html') }}">HTML</a> & <a class="text-danger" href="#">CSS</a>
                            </h3>
                            <div class="mb-1 text-muted">Portfolio</div>
                            <p class="card-text mb-auto">Hier krijgt u meer informatie te zien over mijn projecten waarbij ik HTML & CSS hebt gebruikt.
                            </p>
                            <a href="{{ url('/html') }}">Lees Meer...</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" style="height: 250px; width: 200px"
                             src="../img/htmlcss.jpg" alt="Card image cap">
                    </div>

                </div>


                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="mb-0">
                                    <a class="text-danger" href="{{ url('/java') }}"> Java</a>
                                </h3>
                                <div class="mb-1 text-muted">Portfolio</div>
                                <p class="card-text mb-auto">Hier krijgt u meer informatie te zien over mijn projecten waarbij ik Javascript hebt gebruikt.
                                </p>

                                <a href="{{ url('/java') }}"> Lees Meer...</a>

                                <div class="d-flex justify-content-between align-items-center">
                                </div>

                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="height: 250px; width: 200px"
                                 src="../img/java-logo.png" alt="Card image cap">
                        </div>

                    </div>

                </div>
                {{--Hier begint de 3e row--}}
                <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-success" href="{{ url('/javascript') }}">Javascript</a>
                            </h3>
                            <div class="mb-1 text-muted">Portfolio</div>
                            <p class="card-text mb-auto">Hier krijgt u meer informatie te zien over mijn projecten waarbij ik Javascript hebt gebruikt.
                            </p>
                            <a href="{{ url('/javascript') }}">Lees Meer...</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" style="height: 250px; width: 200px"
                             src="../img/javascript.jpg" alt="Card image cap">
                    </div>

                </div>



                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="mb-0">
                                    <a class="text-info" href="{{ url('/php') }}"> PHP</a>
                                </h3>
                                <div class="mb-1 text-muted">Portfolio</div>
                                <p class="card-text mb-auto">Hier krijgt u meer informatie te zien over mijn projecten waarbij ik PHP hebt gebruikt.
                                </p>
                                <a href="{{ url('/php') }}"> Lees Meer...</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="height: 250px; width: 200px"
                                 src="../img/php.png" alt="Card image cap">
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>





</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>

@endsection


