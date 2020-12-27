<div class="rounded border border-primary p-3">
    <form method="POST" action="tweets">
        @csrf

        <textarea name="body" rows="3" placeholder="What's on your mind?"></textarea>
        <hr>
        <img class="rounded-circle mr-2 text-left" src="{{ auth()->user()->avatar }}" alt="Your avatar">

        <button class="btn btn-primary shadow-sm float-right" type="submit">Tweet-a-roo!</button>
    </form>
    @error('body')
    <p class="text-danger mt-2">{{ $message }}</p>
    @enderror
</div>

