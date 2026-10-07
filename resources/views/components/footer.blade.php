<!-- Footer -->
<footer class="text-center text-lg-start text-muted bg-body">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 bg-body-tertiary border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span></span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fa-brands fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-4">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-2">
                    <!-- Content -->
                    <h6 class="fw-bold mb-3">
                        <i class="fas fa-bolt me-3"></i>Presto.it
                    </h6>
                    <p class="h5">
                        Vuoi diventare revisore?
                    </p>
                    <p>
                        Clicca il pulsante sottostante, farai richiesta al nostro admin
                    </p>
                    <a href="{{ route('revisor.request') }}" class="btn btn-outline">Diventa revisore!</a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-3">
                        {{ __('ui.categories') }}
                    </h6>
                    @foreach ($categories as $category)
                        <p class="mb-1">
                            <a class="text-capitalize text-reset"
                                href="{{ route('article.byCategory', ['category' => $category]) }}">{{ __("ui.$category->name") }}</a>
                        </p>
                    @endforeach
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-3">
                        Links
                    </h6>
                    <p class="mb-1">
                        <a href="{{ route('homepage') }}" class="text-reset">Home</a>
                    </p>
                    <p class="mb-1">
                        <a href="{{ route('article.index') }}" class="text-reset">{{ __('ui.allArticles') }}</a>
                    </p>
                    @auth
                        <p class="mb-1">
                            <a class="text-reset" href="#"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        </p>
                    @else
                        <p class="mb-1">
                            <a class="text-capitalize text-reset" href="{{ route('login') }}">{{ __('ui.log-in') }}</a>
                        </p>
                        <p class="mb-1">
                            <a class="text-capitalize text-reset"
                                href="{{ route('register') }}">{{ __('ui.register') }}</a>
                        </p>
                    @endauth
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Milano, MI 20100, IT</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@presto.it
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 39 02 23 45 678</p>
                    <p><i class="fas fa-print me-3"></i> + 39 02 23 45 679</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-2 cr-color">
        © 2026 Copyright:
        <a class="text-reset fw-bold" href="{{ route('homepage') }}">Presto.it</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
