<div class="container">
    @if ($success)
        <div>
            <div class="alert alert-success">
                Post has been updated successfully. <a href="{{ url('/home') }}">View all posts</a>
            </div>
            
        </div>
    @endif
    
    <form wire:submit.prevent="update({{ $post->id }})">
        <div class="form-group">
            <label for="Post title">Post title</label>
            <input wire:model="post.title" type="text" name="title" id="title" class="form-control" placeholder="Title of the post">
            @error('post.title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="Post body">Post Body</label>
            <textarea name="body" id="body" placeholder="Body of post here..." wire:model="post.body" class="form-control"></textarea>
            @error('post.body') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>