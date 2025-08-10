<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="row">

                    <div class="col-md-6 text-center">
                        <figure class="products-thumb">
                            <img src="{{ asset($book->image) }}" alt="book" class="single-image">
                        </figure>
                    </div>

                    <div class="col-md-6">
                        <div class="product-entry">
                            <h2 class="section-title divider">{{ $book->title }}</h2>

                            <div class="products-content">
                                <div class="author-name">By {{ $book->author }}</div>
                                <p>{{ $book->description }}.</p>
                                <div class="item-price">quantity : {{ $book->quantity }}</div>
                                <div class="btn-wrap">
                                    
                                    <form method="POST" action="{{ route('borrow', $book->id) }}">
                                        @csrf
                                        <button type="submit"  class="btn-accent-arrow">Borrow it now <i
                                            class="icon icon-ns-arrow-right"></i> </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- / row -->

            </div>

        </div>
    </div>
</section>
