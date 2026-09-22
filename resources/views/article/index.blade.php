<x-layout>

    <x-masthead title='Tutti gli articoli'></x-masthead>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-custom py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
                @auth
                    <a class="btn btn-dark my-5" href="{{ route('article.create') }}">Pubblica un articolo</a>
                @endauth
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>

</x-layout>
