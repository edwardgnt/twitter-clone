<h3 class="font-weight-bold mb-3">Following</h3>

<ul class="list-unstyled">
    @foreach (auth()->user()->follows as $user)
    <li>
        <div class="d-flex text-center mb-3">
            <img class="rounded-circle mr-2" src="{{ $user->avatar }}" alt="">

            {{ $user->name }}
        </div>
    </li>
    @endforeach
</ul>