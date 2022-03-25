<div class="card" style="margin-bottom: 10px">
    <div class="card-body">

        <form method="post" action="{{ route('posts.create') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Text</label>
                <textarea
                    type="text"
                    name="text"
                    class="form-control"
                    id="exampleInput"
                    placeholder="Let's talk!"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-info btn-lg">Submit</button>
        </form>

    </div>
</div>
