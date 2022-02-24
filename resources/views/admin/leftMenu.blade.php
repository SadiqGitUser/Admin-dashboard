<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Admin Page
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="  {{ route('mehsullar') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Əsas Səhifə</p>
                </a>
            </li>
            @role('Inzibatci')
            <li class="nav-item ">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="material-icons">person</i>
                    <p>Edit Users</p>
                </a>
            </li>
            @endrole

            <li class="nav-item ">
                <a class="nav-link" href="{{ route('mehsullar') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Məhsullar</p>
                </a>
            </li>
            <li class="nav-item active-pro ">
                <a class="nav-link" href="{{route('logout')}}">
                    <i class="material-icons">unarchive</i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </div>
</div>
