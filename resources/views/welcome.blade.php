<x-layout>
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row vh-100 justify-content-center align-items-center position-relative">
            @if (session()->has('errorMessage'))
                <div class="alert alert-danger text-center shadow rounded w-50 position-absolute top-10">
                    {{ session('errorMessage') }}
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success text-center shadow rounded w-50 position-absolute top-10">
                    {{ session('message') }}
                </div>
            @endif
            <div class="col-12">
                <h1 class="display-4">Presto.it</h1>
                <div class="my-3">
                    @auth
                        <a class="btn btn-dark" href="{{ route('article.create') }}"> Pubblica un articolo</a>
                    @endauth
                </div>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono stati creati articoli
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
