<ul class="list-unstyled">
    <li>
        <a class="font-weight-bold mb-4 d-block" href="{{ route('home') }}">
            Home
        </a>
    </li>

    <li>
        <a class="font-weight-bold mb-4 d-block" href="/explore">
            Explore
        </a>
    </li>

    @auth
    <li>
        <a class="font-weight-bold mb-4 d-block" href="">
            Profile
        </a>
    </li>

    <li>
        <form method="POST" action="/logout">
            @csrf

            <button class="font-weight-bold btn btn-primary">Logout</button>
        </form>
    </li>
    @endauth
</ul>
