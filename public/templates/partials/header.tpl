<!--Шапка -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Simtech Development</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=index.php>Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">О нас</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">

                {if $is_logged_in !== 'logged_in'}
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Панель администратора</a>
                    </li>
                {else}
                    <li class="nav-item">
                        <a class="nav-link" href="get-messages.php">Панель администратора</a>
                    </li>
                {/if}

                {if $is_logged_in === 'logged_in'}
                    <li class="nav-item">
                        <a id="logout" class="nav-link" href="logout.php">Выйти</a>
                    </li>
                {/if}
            </ul>
        </div>
    </nav>
</header>