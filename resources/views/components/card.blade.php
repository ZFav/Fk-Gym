

    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <div class="card-body bg-dark g-0">
                <img src="{{$item['image']}}" alt="img1">
                <h2 class="card-title">{{$item['title']}}</h2>
                <p class="card-text">{{$item['text']}}</p>
                <div class="card-footer"><a class="btn btn-primary btn-info" href="{{route('dettagli',['id'=>$item['id']])}}">Provalo qui</a></div>
            </div>
            
        </div>
    </div>
