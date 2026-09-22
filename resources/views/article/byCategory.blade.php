<x-layout>

    <x-masthead title='Articoli della categoria {{ $category->name }}'></x-masthead>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-custom py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli per questa categoria
                    </h3>
                    @auth
                        <a class="btn btn-dark my-5" href="{{ route('article.create') }}">Pubblica un articolo</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
