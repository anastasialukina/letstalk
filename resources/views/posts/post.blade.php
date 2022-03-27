<div class="card" style="margin-bottom: 8px">
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>{{ $post->text }}</p>
            <footer class="blockquote-footer">
                <cite title="Source Title">{{ $post->author->name }}</cite>
            </footer>
        </blockquote>
    </div>
    <div class="card-header">
        {{ $post->created_at->format('g:i a \o\n l jS F Y') }}
    </div>
</div>
