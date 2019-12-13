<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light">Project manager</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-flat nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fa fa-home nav-icon"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="add_project.php" class="nav-link">
                        <i class="fa fa-plus nav-icon"></i>
                        <p>New</p>
                    </a>
                </li>       
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Projects
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <!-- Exemple à reproduire -->
                        <li class="nav-item">
                            <a href="view_project.php?id=1" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Name</p>
                            </a>
                        </li>
                        <!-- Fin exemple -->
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>