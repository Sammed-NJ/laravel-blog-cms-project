@extends('layouts.app')

@section('content')
    {{-- <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{ __('You are logged in!') }}
    </div> --}}


    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            @foreach ($posts as $index => $post)
                                @if ($index <= 5)
                                    <div class="swiper-slide">


                                        {{-- @php
                                            $content = $post->tinyMSCcontent;
                                            preg_match('/src="([^"]+)"/', $content, $src);
                                            // preg_match('/src="([^"]+)"/', $content, $src);
                                            // $onlyPath = preg_replace('/src="[^"]+"/', '', $path);

                                            preg_match('/src="([^"]+)"/', $content, $src);

                                            // $content = str_replace($image, '', $content);

                                        @endphp
                                        {{-- @if ($path) --}}
                                        {{-- <div class="path-ratio"> --}}
                                        {{-- {!! dd($src[1]) !!} --}}
                                        {{-- </div> --}}
                                        {{-- @else
                                            <img src="" alt="" class="NO Image" />
                                        @endif --}}


                                        <a href="{{ route('post', $post->id) }}" class="img-bg d-flex align-items-end"
                                            style="background-image: url();">

                                            <div class="img-bg-inner">
                                                <h2>{{ $post->title }}</h2>
                                                <p>{{ Str::limit($post->description, '30', '...') }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach



                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4 post-grid">
                    @foreach ($posts as $post)
                        <div class="post-entry-1 lg">
                            <a
                                href="
                            {{ route('post', $post->id) }}
                            ">
                                @php
                                    $content = $post->tinyMSCcontent;
                                    preg_match('/<img[^>]+>/i', $content, $image);

                                    // $content = str_replace($image, '', $content);

                                @endphp
                                @if ($image)
                                    <div class="image-ratio">
                                        {!! $image[0] !!}


                                    </div>
                                @else
                                    <img src="" alt="" class="NO Image" />
                                @endif
                            </a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th
                                    '22</span>
                            </div>

                            <h2><a href="{{ route('post', $post->id) }}">{{ $post->title }}</a></h2>
                            <p class="mb-4 d-block">{{ Str::limit($post->description, '50', '...') }}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('storage/' . $post->user->avatar) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">{{ $post->user->name }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
@endsection
