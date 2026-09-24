<x-layout>

    <x-masthead title='Risultati per la ricerca: {{ $query }}'></x-masthead>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-custom py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Nessun articolo corrisponde alla tua ricerca
                    </h3>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>

</x-layout>
