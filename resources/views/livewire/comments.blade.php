<div
    x-data="{ open: false }"
    @store.window="open = false"
    @delete.window="open = false"
    class=""
>
    {{session('message')}}
    <form wire:submit.prevent="store">
        <div class="form-group row" wire:submit.prevent="storeComments">

            <div class="col-sm-12 mt-2">
                @if($image) <img class="mb-2" id="image_preview" src="{{$image}}" width="100" height="100"> @endif
                <input id="image_upload" type="file" wire:change="$emit('filechosen')" class="form-control" id="" placeholder="title">
                @error('serverMemo.data.image') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-sm-12 mt-2">
                <input type="text" wire:model="title" class="form-control" id="" placeholder="title">
                @error('serverMemo.data.title') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-12 mt-2">
                <div class="form-group">
                    <textarea wire:model="comment" class="form-control" placeholder="comment" id="" rows="3"></textarea>
                    @error('serverMemo.data.comment') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group col-sm-3 mt-2">
                <button type="submit" style="width: 100%" class="btn btn-primary">Add</button>
            </div>

        </div>
    </form>

    <div class="row">
        @foreach ($comments as $singlecomment)
            <div class="col-md-12" id="commnet-card-{{$singlecomment->id}}">
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title">{{$singlecomment->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">{{$singlecomment->comment}}</p>
                        <a style="cursor: pointer" class="card-link">Edit</a>
                        <a style="cursor: pointer" wire:click="delete({{$singlecomment->id}})" class="card-link delete_button">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $comments->links() }}
    </div>
</div>

<script>
    window.addEventListener('store', event => {
        // alert('Name updated to: '+ event.detail.massage);
    })

    window.addEventListener('delete', event => {
        $(`#commnet-card-${event.detail.id}`).remove()
        // alert('Name delete to: '+ event.detail.massage);
    })

    Livewire.on('filechosen', () => {
        let file = $('#image_upload')[0].files[0]
        let reader = new FileReader()
        reader.onload = () => {
            Livewire.emit('uploaded_image',reader.result)
        }
        reader.readAsDataURL(file)
    })

</script>

