<div class="d-flex border-bottom p-3">
    <div class="mr-3">
        <img class="rounded-circle mr-2" src="{{ $tweet->user->avatar }}}}" alt="">
    </div>
    <div>
        <h5 class="font-weight-bold mb-4">{{ $tweet->user->name }}</h5>
        <p>{{ $tweet->body }}</p>
    </div>
</div>
