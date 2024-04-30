<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    @include('partials.Navbar')
    <div class="image-text-container">
        <img src="/images/images.jpeg" alt="img1" class="fullscreen-image" />
        <div class="overlay-text">
            <h1>Discover Expert Care Today</h1>
            <p>
                Your health deserves the best.Connect with top medical expertise.
            </p>
            <a href="{{ route('doctors') }}" class="btn btn-primary">Book Now</a> <x-my-component>
                <!-- Contenu à passer au composant -->
                <p>Ceci est un contenu pour le composant.</p>
            </x-my-component>
        </div>
    </div>
    <!--SERVICE-->
    <div class="container">
        <div class="heading-container">
            <h2>ONLINE MOBILE APPOINTMENT SCHEDULING PLATFORM</h2>
            <p>Online Appointment, Phone-in Appointment, Walk-in Appointment with Token</p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card " id="card1">
                    <img class="card-img-top" src="/images/img1.jpeg" alt="Card image cap" />
                    <div class="card-body">
                        <h3>Doctor Near Me</h3>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <!-- Flèche -->
                <div class="fleche1">
                    <i class="fas fa-chevron-right fa-2x"></i>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" id="card2">
                    <img class="card-img-top" src="/images/img2.jpeg" alt="Card image cap" />
                    <div class="card-body">
                        <h3>Doctor Near Me</h3>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <!-- Flèche -->
                <div class="fleche2">
                    <i class="fas fa-chevron-right fa-2x"></i>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" id="card3">
                    <img class="card-img-top" src="/images/booking.jpeg" alt="Card image cap" />
                    <div class="card-body">
                        <h3>Doctor Near Me</h3>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--pricing-->


    <div>
        <h2 id="pricing-title">PRICING , OUR PLANS</h2>
        <div class="container-fluid pricing-background">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card pricing-card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Basic</h5>
                                    <small>Individual</small>
                                    <br><br>
                                    <span class="h2">$8</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Cras justo odio</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Dapibus ac facilisis in</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Vestibulum at eros</li>
                            </ul>
                            <div class="card-body text-center">
                                <button class="btn btn-outline-primary btn-lg btn-outline-primary-custom">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card pricing-card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Standard</h5>
                                    <small>Small Business</small>
                                    <br><br>
                                    <span class="h2">$20</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Cras justo odio</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Dapibus ac facilisis in</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Vestibulum at eros</li>
                            </ul>
                            <div class="card-body text-center">
                                <button class="btn btn-outline-primary btn-lg btn-custom-border-radius">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card pricing-card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Premium</h5>
                                    <small>Large Companies</small>
                                    <br><br>
                                    <span class="h2">$40</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Cras justo odio</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Dapibus ac facilisis in</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Vestibulum at eros</li>
                            </ul>
                            <div class="card-body text-center">
                                <button class="btn btn-outline-primary btn-lg custom-border-radius">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="container cont2">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item">
                        <a href="med_prjct.php" class="nav-link px-2 text-muted">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link px-2 text-muted">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Contact Us</a>
                    </li>

                </ul>
                <p class="text-center text-muted">© 2021 Company, Inc</p>
            </footer>
        </div>
    </div>



</body>


</html>