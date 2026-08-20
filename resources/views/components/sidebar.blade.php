<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="assets/images/faces/face1.jpg" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">TalentProgram</span>
                    <span class="text-secondary text-small">Batch 12</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('batches.index')}}"
                aria-controls="ui-basic">
                <span class="menu-title">Batches</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('categories.index')}}"
                aria-controls="ui-basic">
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('students.index')}}"
                aria-controls="ui-basic">
                <span class="menu-title">Student</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('instructors.index')}}"
                aria-controls="ui-basic">
                <span class="menu-title">Instructor</span>
            </a>
        </li>
    </ul>
</nav>
