<div>
    <div class="card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @forelse ($posts as $post)
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <small>{{ $post->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1">{!! substr($post->body, 0, 200) !!}</p>
                        <small>By {{ $post->author->name }}</small>
                    </a>
                @empty
                    <li class="list-group-item">
                        Sorry, we do not have any posts yet
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
