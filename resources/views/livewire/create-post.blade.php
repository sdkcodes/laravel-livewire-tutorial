<div class="container">
    @if ($success)
        <div class="alert alert-success">
            Post has been created successfully
        </div>
    @endif
    <form wire:submit.prevent="create">
        <div class="form-group">
            <label for="Post title">Post title</label>
            <input wire:model="title" type="text" name="title" id="title" class="form-control" placeholder="Title of the post">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="Post body">Post Body</label>
            <textarea name="body" id="body" placeholder="Body of post here..." wire:model="body" class="form-control"></textarea>
            @error('body') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Publish</button>
        </div>
    </form>
</div>