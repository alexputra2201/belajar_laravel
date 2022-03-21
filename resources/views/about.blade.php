@extends('layouts.main')
@section('container')
    <?php
    
    function get_CURL($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
    
        curl_close($curl);
    
        return json_decode($result, true);
    }
    $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC9bxGl5Qj6KgOa5HAB_YwHw&key=AIzaSyDYWyGBPOOwzQ2PTz03htK6Lt4bNfIl9r8');
    
    $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
    $channelName = $result['items'][0]['snippet']['title'];
    $subscriber = $result['items'][0]['statistics']['subscriberCount'];
    
    // latest video
    $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDYWyGBPOOwzQ2PTz03htK6Lt4bNfIl9r8&channelId=UC9bxGl5Qj6KgOa5HAB_YwHw&maxResult=1&order=date&part=snippet';
    $result = get_CURL($urlLatestVideo);
    $latestVideoId = $result['items'][0]['id']['videoId'];
    
    ?>
    <div class="jumbotron" id="home">
        <div class="container">
            <div class="text-center">
                <img src="img/profile1.png" class="rounded-circle img-thumbnail">
                <h1 class="display-4">Alex Putra</h1>
                <h3 class="lead">Mahasiswa | Programmer </h3>
            </div>
        </div>
    </div>

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam
                        expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae
                        possimus, debitis earum.</p>
                </div>
                <div class="col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam
                        expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae
                        possimus, debitis earum.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Youtube & IG -->

    <section class="social bg-light" id="social">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Social Media</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $youtubeProfilePic }}" width="200" class="rounded-circle img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <h5>{{ $channelName }}</h5>
                        <p>{{ $subscriber }} Subscriber</p>
                        <div class="g-ytsubscribe" data-channelid="UC9bxGl5Qj6KgOa5HAB_YwHw" data-layout="default"
                            data-count="default"></div>
                    </div>
                </div>
                <div class="row mt-3 pb-3">
                    <div class="col">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $latestVideoId }}"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/profile1.png" width="200" class="rounded-circle img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <h5>@alexusputra</h5>
                        <p>900 Followers</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="ig-thumbnail">
                            <img src="img/thumbs/1.png">
                        </div>
                        <div class="ig-thumbnail">
                            <img src="img/thumbs/2.png">
                        </div>
                        <div class="ig-thumbnail">
                            <img src="img/thumbs/3.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Portfolio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Contact</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Contact Me</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>

                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <h3>Location</h3>
                        </li>
                        <li class="list-group-item">My Home</li>
                        <li class="list-group-item">Jl. Pemuda Komp Ismail no 1, Pekanbaru</li>
                        <li class="list-group-item">Riau, Indonesia</li>
                    </ul>
                </div>

                <div class="col-lg-6">

                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
