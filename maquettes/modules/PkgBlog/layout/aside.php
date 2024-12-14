 <!-- PkgBlog -->
 <li class="nav-item has-treeview">
          <a href="#"
            class="nav-link <?php echo (strpos($current_route, 'autorisation') !== false) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-user-lock"></i>
            <p>
              Blog
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/modules/pkg_autorisation/Autorisations/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Autorisations') !== false) ? 'active' : ''; ?>">
                <i class="far fa-check-circle nav-icon"></i>
                <p>Autorisation</p>
              </a>
            </li>
          </ul>
        </li>