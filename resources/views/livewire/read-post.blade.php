<div>
    <p class="h2">{{ $post->title }}</p>
    <p class="text-muted">{{ $post->created_at->toFormattedDateString() }}</p>
    <article>
        {!! $post->body !!}
    </article>
</div>
