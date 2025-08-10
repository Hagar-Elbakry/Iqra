<x-app>
<x-nav/>

<section id="billboard">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button class="prev slick-arrow">
                    <i class="icon icon-arrow-left"></i>
                </button>

                <div class="main-slider pattern-overlay">
                    @foreach ($banner as $book)
                        <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">{{ $book->title }}</h2>
                            <p>{{ $book->description }}.</p>
                            <div class="btn-wrap">
                                <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="{{ asset($book->image) }}" alt="banner" class="banner-image">
                    </div><!--slider-item-->
                    @endforeach
                    {{-- <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Life of the Wild</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                                ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                                urna, a eu.</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="assets/images/main-banner1.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item--> --}}

                    

                </div><!--slider-->

                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </div>

</section>

<section id="client-holder" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="inner-content">
                <div class="logo-wrap">
                    <div class="grid">
                        <a href="#"><img src="assets/images/client-image1.png" alt="client"></a>
                        <a href="#"><img src="assets/images/client-image2.png" alt="client"></a>
                        <a href="#"><img src="assets/images/client-image3.png" alt="client"></a>
                        <a href="#"><img src="assets/images/client-image4.png" alt="client"></a>
                        <a href="#"><img src="assets/images/client-image5.png" alt="client"></a>
                    </div>
                </div><!--image-holder-->
            </div>
        </div>
    </div>
</section>

@include('partials._featured-books')

@include('partials._book-detail')

@include('partials._popular-book')
</x-app>
