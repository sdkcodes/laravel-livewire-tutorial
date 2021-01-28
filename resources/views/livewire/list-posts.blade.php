<div>
    <h4>My Posts</h4>
    <ul class="list-group">
        @forelse ($posts as $post)
            <li class="list-group-item">
                <h5>{{ $post->title }}</h5>
                <p>{{ substr($post->body, 0, 200) }}</p>
                <small class="text-muted">Published {{ $post->created_at }}</small>
            </li>    
        @empty
            <li>You have not written any posts yet, write one now</li>
        @endforelse
        
    </ul>
</div>