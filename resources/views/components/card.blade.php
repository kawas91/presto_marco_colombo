<div class="card mx-auto card-w shadow text-center mb-5">
    <img src="https://picsum.photos/{{ 200 + $article->id }}" class="card-img-top"
        alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle text-body-secondary">{{ $article->price }}</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
            <a href="{{ route('article.byCategory', ['category' => $article->category]) }}"
                class="btn btn-outline-info">{{ $article->category->name }}</a>
        </div>
    </div>
</div>
