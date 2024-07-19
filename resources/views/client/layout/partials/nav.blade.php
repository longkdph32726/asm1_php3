<hr>
<ul class="nav d-flex justify-content-space-evenly">
    @foreach ($categories as $item)
    <li class="nav-item">
        <a href="" class="nav-link">{{ $item->name }}</a>
    </li>
    @endforeach

</ul>
<hr>