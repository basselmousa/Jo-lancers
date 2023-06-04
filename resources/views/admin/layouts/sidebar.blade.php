<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
{{--                    <img src="../../images/faces/face5.jpg" alt="image"/>--}}
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome {{ auth("admin")->user()->full_name }}
                    </p>
{{--                    <p class="designation">--}}
{{--                        Super Admin--}}
{{--                    </p>--}}
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.admins.index") }}">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Admins</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.currencies.index") }}">
                <i class="fas fa-dollar-sign menu-icon"></i>
                <span class="menu-title">Currencies</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.skills.index") }}">
                <i class="fas fa-fill-drip menu-icon"></i>
                <span class="menu-title">Skills</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.categories.index") }}">
                <i class="fas fa-list menu-icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.complaint.index") }}">
                <i class="fas fa-list menu-icon"></i>
                <span class="menu-title">Complaints</span>
            </a>
        </li>

    </ul>
</nav>
