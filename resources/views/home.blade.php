<x-app>
<x-nav :categories="$categories"/>

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
                        </div>
                        <img src="{{ asset($book->image) }}" alt="banner" class="banner-image">
                    </div>
                    @endforeach
                    

                    

                </div>

                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </div>

</section>



@include('partials._featured-books')


@include('partials._popular-book')
</x-app>
