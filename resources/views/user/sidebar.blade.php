<div class="card col-md-3">
    <div style="border-bottom: 2px solid gray">

        <h3 class="text-secondary text-center py-2"><i class="text-large fa fa-user"></i><br>{{ Auth::user()->name }}</h3>
    </div>

    <div class="">
        <ul class="list-group py-2">
            <li class="list-group-item  card">
                <a class="nav-link" href="{{ url('user_dashboard') }}">
                    <div class="sb-nav-link-icon text-success"><i class="fa fa-tachometer"></i>&nbsp; Dashboard</div>
                </a>
            </li>

            <li class="list-group-item  card">
                <a class="nav-link" href="{{ url('address') }}">
                    <div class="sb-nav-link-icon text-success"><i class="fa fa-address-book"></i>&nbsp; Address</div>
                </a>
            </li>

            <li class="list-group-item  card">
                <a class="nav-link" href="{{ url('order_show') }}">
                    <div class="sb-nav-link-icon text-success"><i class="fa fa-list"></i>&nbsp; Orders</div>
                </a>
            </li>


            <li class="list-group-item  card">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <div class="sb-nav-link-icon text-success"><i class="fa fa-sign-out"></i>&nbsp; Logout</div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
          </ul>


    </div>

</div>
