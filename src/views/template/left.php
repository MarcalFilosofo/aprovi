<aside class="aside">
    <nav>
        <ul>
        <li>
                <a href="profile.php" class="aside-item">
                    <i class="icofont-ui-user mr-1"></i>
                    Perfil
                </a>
            </li>
            <li>
                <a href="" class="aside-item disable">
                    <i class="icofont-notebook mr-1"></i>
                    Cursos
                </a>
            </li>
            <li>
                <a href="article_list.php" class="aside-item">
                    <i class="icofont-paper mr-1"></i>
                    Artigos
                </a>
            </li>
            
            <?php if ($_SESSION['user']->is_admin):?>
                <li>
                    <a href="publish.php" class="aside-item">
                        <i class="icofont-pencil-alt-2 mr-1"></i>
                        Publicar
                    </a>
                </li>
                <li>
                    <a href="publish.php" class="aside-item">
                        <i class="icofont-email"></i>
                        Enviar e-mail
                    </a>
                </li>
            <?php endif ?>

            <li>
                <a href="logout.php" class="aside-item">
                    <i class="icofont-exit mr-1"></i>
                    Logout
                </a>
            </li>
           
        </ul>
    </nav>
</aside>