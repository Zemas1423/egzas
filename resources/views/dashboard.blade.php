<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @foreach($products as $product)
    <div class="row align-items-end">
        <div class="col">
            <!-- Card  -->
            <div class="card" style="width: 18rem;">
                <img src="https://olympics.com/images/static/sports/pictograms/v2/csp.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                            More info
                        </a>
                    </p>
                </div>
            </div>
            <a href="/update/{{$product->id}}">Modify</a>
            <form action="/delete/{{$product->id}}" method="POST">
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach
</x-app-layout>