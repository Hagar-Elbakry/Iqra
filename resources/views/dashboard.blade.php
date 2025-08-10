<x-app>
    <x-nav :categories="$categories"/>
    <div style="padding: 50px">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col" class="text-center">Book</th>
            <th scope="col" class="text-center">Borrow Date</th>
            <th scope="col" class="text-center">Return Date</th>
            <th scope="col"  class="text-center">Is Returned</th>
            <th scope="col" class="text-center">Return</th>
        </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="text-center">{{$book->title}}</td>
                <td class="text-center">{{ $book->pivot->borrow_date ? $book->pivot->borrow_date : '-' }}</td>
                <td class="text-center">{{ $book->pivot->return_date ? $book->pivot->return_date : '-' }}</td>
                <td class="text-center">
                    @if($book->pivot->is_returned)
                        <i class="bi bi-check-circle-fill text-success"></i>
                    @else
                        <i class="bi bi-x-circle-fill text-danger"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if(!$book->pivot->is_returned)
                        <form method="POST" action="{{ route('return', $book->id) }}">
                            @csrf
                            <x-primary-button class="ms-4" style="height: 40px;">
                                {{ __('Return') }}
                            </x-primary-button>
                        </form>
                    @else
                        <x-primary-button returned class="ms-4" style="height: 32px;">
                            {{ __('Returned') }}
                        </x-primary-button>
                    @endif


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</x-app>
