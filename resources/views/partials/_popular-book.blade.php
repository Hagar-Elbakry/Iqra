<section id="popular-books" class="bookshelf py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Popular Books</h2>
                </div>

                <ul class="tabs">
                    @foreach($categories as $category)
                        <li class="tab" data-tab-target="#tab-{{ $category->id }}">
                            {{ $category->name }}
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach ($categories as $category)
                        <div id="tab-{{ $category->id }}" data-tab-content>
                            <div class="row">
                                @foreach($category->books as $book)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <a href="{{ route('books.show', $book->id) }}"><img src="{{ asset($book->image) }}" alt="Books" class="product-item"></a>
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
                                                <div class="item-price">Quantity: {{ $book->quantity }}</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
