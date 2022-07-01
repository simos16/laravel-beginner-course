@props(['content'])


<div class="col-md-4 col-sm-12">

    <x-cards>
        <div class="card-body">
            <h5 class="card-title">{{$content->titolo}}</h5>
            <x-notes-tags :tags="$content->tags"  />

            <img src="{{$content->immagine ? asset('storage/' . $content->immagine) : asset('images/default.jpg')}}" class="card-img-top rounded mx-auto d-block">

            <p class="card-text">@ext($content->contenuto)</p>
            <p class="small">{{$content->autore}}</p>
            <p ><em>{{$content->created_format}}</em></p>
            <a href="/notes/{{$content->id}}" class="btn btn-success d-block my-btn"><i class="bi bi-book"></i>Leggi tutto </a>
        </div>
    </x-cards>


</div>
