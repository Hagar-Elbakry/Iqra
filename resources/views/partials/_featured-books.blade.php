<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">{{ isset($Is_home) ? 'Featured Books' : 'All Books' }}</h2>
                </div>

                <div class="product-list" data-aos="fade-up">
                    <div class="row">

                        @foreach ($books as $book)
                        <div class="col-md-3">
                            <div class="product-item">
                                <figure class="product-style">
                                    <a href="{{ route('books.show', $book->id) }}"><img src="{{ asset('storage/'.$book->image) }}" alt="Books" class="product-item"></a>
                                    @if($book->quantity == 0)
                                        <button type="submit" class="out-of-stock">Out of stock</button>
                                    @else
                                    <form action="{{ route('borrow', $book->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="add-to-cart" data-product-tile="add-to-cart">Borrow</button>
                                    </form>
                                    @endif
                                </figure>
                                <figcaption>
                                    <h3>{{ $book->title }}</h3>
                                    <span>{{ $book->author }}</span>
                                    <div class="item-price">quantity : {{ $book->quantity }}</div>
                                </figcaption>
                            </div>
                        </div>
                        @endforeach




                    </div><!--ft-books-slider-->
                </div><!--grid-->


            </div><!--inner-content-->
        </div>
        @if(isset($Is_home))
        <div class="row">
            <div class="col-md-12">

                <div class="btn-wrap align-right">
                    <a href="{{ route('books.index') }}" class="btn-accent-arrow">View all products <i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>

            </div>
        </div>
        @else
            {{ $books->links() }}
        @endif
    </div>
</section>
