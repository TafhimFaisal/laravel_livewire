<div class="container p-5">
    <form>
        <div class="form-group row" wire:submit.prevent="storeComments">

            <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
            <div class="form-group col-sm-3">
                <button type="submit" style="width: 100%" class="btn btn-primary">Add</button>
            </div>

        </div>
    </form>
    <div class="row">
        @foreach ($comments as $comment)
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="card-body">
                    <h5 class="card-title">{{$comment->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">{{$comment->comment}}</p>
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
