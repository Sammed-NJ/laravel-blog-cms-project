<x-home-master>


    @section('content')
        <section id="contact" class="contact mb-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">Log in</h1>
                    </div>
                </div>



                <div class="form m-10 contact-form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">



                        <div class="form-outline mb-4">
                            <label class="form-label">Email address</label>
                            <input type="email" id="email" name="email" class="form-control" required />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required />
                        </div>


                        <div class="contact-form-btn">
                            <div class="text-center"><button type="submit">Log in</button></div>
                            <div class="text-center"><a class="back-btn" href="#">Back</a></div>
                        </div>
                        <p class="mt-4">Don't have account <a class="links" href="/register">Register here</a></p>
                    </form>
                </div><!-- End Contact Form -->

            </div>
        </section>
    @endsection

</x-home-master>
