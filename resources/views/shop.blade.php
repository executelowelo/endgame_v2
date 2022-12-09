<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ URL::asset('stylesheet.css') }}" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>shop</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->

            <p class="text-center text-large">Wellcome to our shop!</p>
            <a href=""></a>
            <div class="container text-center">
        <div class="row">
            <div class="col align-self-start">
            <!-- CARD1 -->
            <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title white-text">Card title</h5>
                  <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    {{-- moreinfo --}}
                    <p>
                        <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Link with href
                        </a>
                      </p>
                      <div class="collapse" id="collapse1">
                        <div class="card card-body text-white bg-dark">
                            more info
                        </div>
                      </div>
                    {{-- moreinfo --}}
                </div>
              </div>
            <!-- CARD1 -->
            </div>

            <div class="col align-self-center">
            <!-- CARD2 -->
            <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-white">Card title</h5>
                  <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    {{-- moreinfo --}}
                    <p>
                        <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Link with href
                        </a>
                      </p>
                      <div class="collapse" id="collapse2">
                        <div class="card card-body text-white bg-dark">
                            more info
                        </div>
                      </div>
                    {{-- moreinfo --}}
                </div>
              </div>
            <!-- CARD2 -->
            </div>
            
            <div class="col align-self-end">
            <!-- CARD3 -->
            <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-white">Card title</h5>
                  <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    {{-- moreinfo --}}
                    <p>
                        <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Link with href
                        </a>
                      </p>
                      <div class="collapse" id="collapse3">
                        <div class="card card-body text-white bg-dark">
                            more info
                        </div>
                      </div>
                    {{-- moreinfo --}}
                </div>
              </div>
            <!-- CARD3 -->
            </div>
        </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col align-self-start">
                <!-- CARD1 -->
                <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                    <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title white-text">Card title</h5>
                      <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        {{-- moreinfo --}}
                        <p>
                            <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Link with href
                            </a>
                          </p>
                          <div class="collapse" id="collapse4">
                            <div class="card card-body text-white bg-dark">
                                more info
                            </div>
                          </div>
                        {{-- moreinfo --}}
                    </div>
                  </div>
                <!-- CARD1 -->
                </div>
    
                <div class="col align-self-center">
                <!-- CARD2 -->
                <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                    <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white">Card title</h5>
                      <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        {{-- moreinfo --}}
                        <p>
                            <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Link with href
                            </a>
                          </p>
                          <div class="collapse" id="collapse5">
                            <div class="card card-body text-white bg-dark">
                                more info
                            </div>
                          </div>
                        {{-- moreinfo --}}
                    </div>
                  </div>
                <!-- CARD2 -->
                </div>
                
                <div class="col align-self-end">
                <!-- CARD3 -->
                <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                    <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white">Card title</h5>
                      <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        {{-- moreinfo --}}
                        <p>
                            <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Link with href
                            </a>
                          </p>
                          <div class="collapse" id="collapse6">
                            <div class="card card-body text-white bg-dark">
                                more info
                            </div>
                          </div>
                        {{-- moreinfo --}}
                    </div>
                  </div>
                <!-- CARD3 -->
                </div>
            </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col align-self-start">
                    <!-- CARD1 -->
                    <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                        <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title white-text">Card title</h5>
                          <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            {{-- moreinfo --}}
                            <p>
                                <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Link with href
                                </a>
                              </p>
                              <div class="collapse" id="collapse7">
                                <div class="card card-body text-white bg-dark">
                                    more info
                                </div>
                              </div>
                            {{-- moreinfo --}}
                        </div>
                      </div>
                    <!-- CARD1 -->
                    </div>
        
                    <div class="col align-self-center">
                    <!-- CARD2 -->
                    <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                        <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-white">Card title</h5>
                          <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            {{-- moreinfo --}}
                            <p>
                                <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Link with href
                                </a>
                              </p>
                              <div class="collapse" id="collapse8">
                                <div class="card card-body text-white bg-dark">
                                    more info
                                </div>
                              </div>
                            {{-- moreinfo --}}
                        </div>
                      </div>
                    <!-- CARD2 -->
                    </div>
                    
                    <div class="col align-self-end">
                    <!-- CARD3 -->
                    <div class="card dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700" style="width: 18rem;">
                        <img src="https://www.fieldey.com/uploads/1/3/0/7/13079895/lucky27-paintedskateboards_1_orig.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-white">Card title</h5>
                          <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            {{-- moreinfo --}}
                            <p>
                                <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse9" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Link with href
                                </a>
                              </p>
                              <div class="collapse" id="collapse9">
                                <div class="card card-body text-white bg-dark">
                                    more info
                                </div>
                              </div>
                            {{-- moreinfo --}}
                        </div>
                      </div>
                    <!-- CARD3 -->
                    </div>
                </div>
                </div>

        </div>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>