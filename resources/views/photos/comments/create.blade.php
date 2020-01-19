<div class="row justify-content-center mb-3">
    <div class="col-md-8">
        @include('messages.success')
        @include('messages.errors')
        <form action="{{ route('photos.storeComment', $photo->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>