<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
{{--                    <img src="../../images/faces/face5.jpg" alt="image"/>--}}
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome {{ auth("provider")->user()->full_name }}
                    </p>
{{--                    <p class="designation">--}}
{{--                        Super Admin--}}
{{--                    </p>--}}
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Your Bids</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route("provider.skill.index") }}">
                <i class="fas fa-dollar-sign menu-icon"></i>
                <span class="menu-title">Skills</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fill-drip menu-icon"></i>
                <span class="menu-title">Rate</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-list menu-icon"></i>
                <span class="menu-title">Complaints</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route("provider.profile.index") }}">
                <i class="fas fa-list menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>

    </ul>
</nav>
