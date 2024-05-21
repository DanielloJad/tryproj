<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">LJL System</a>
        </div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a class="sidebar-link" aria-current="page" href="<?= ROOT ?>/home">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <div class="container my-0" style="font-size: 12px; color: #FFFFFF66; ">
            Main
        </div>


        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="bi bi-boxes"></i>
                <span>Inventory</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">

                    <a href="<?= ROOT ?>/category1s" class="sidebar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg> Category 1
                    </a>

                </li>
                <li class="sidebar-item">
                    <a href="<?= ROOT ?>/category2s" class="sidebar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg> Category 2
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= ROOT ?>/category3s" class="sidebar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg> Category 3
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" aria-current="page" href="<?= ROOT ?>/sales">
                <i class="bi bi-cash-stack"></i>
                <span>Sales</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <div class="container my-0"style="font-size: 12px; color: #FFFFFF66; ">
            Add-ons
        </div>

        <li class="sidebar-item">
            <a class="sidebar-link" aria-current="page" href="<?= ROOT ?>/reports">
                <i class="bi bi-envelope-arrow-down"></i>
                <span>Reports</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" aria-current="page" href="<?= ROOT ?>/users">
                <i class="lni lni-user"></i>
                <span>Users</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class=""></i>
            <span></span>
        </a>
    </div>
</aside>