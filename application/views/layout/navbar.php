<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://codenolimit.com">CODE NO LIMIT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <?php
                if(!empty($navbar_menu)):
            ?>
            <ul class="nav navbar-nav">
                <?php
                    foreach($navbar_menu as $menu):
                        $active = ($menu['active']) ? 'active' : '';
                ?>
                <li class="<?php echo $active; ?>"><a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a></li>
                <?php
                    endforeach;
                ?>
            </ul>
            <?php
                endif;
            ?>
        </div>
    </div>
</nav>
