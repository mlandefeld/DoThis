<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('home') }}">All Tasks</a></li>
    <li><a href="#!">Settings</a></li>
    <li><a href="#!">About</a></li>
    <li><a href="#!">Contact</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo">DoThis:</a>
        <ul class="right">

            <li><a href="/tasks/create">Done</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>