<!--Start main navigation-->
<nav class = "navbar navbar-default" role="navigation">
    <?php if($debug ==1){?>
    <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
    <?php }?>
    <div class = "container">
        <ul class="nav navbar-nav">

            <?php
            nav_main($dbc,$pageId);
                    //echo '<li><a href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>';-->
                ?>


            <!--<li<?php if($pageId == 1){echo ' class="active"';}?>><a href="?page=1">Home</a></li>
            <li<?php if($pageId == 2){echo ' class="active"';}?>><a href="?page=2">About Us</a></li>-->
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
</div>
</nav><!-- END nav Main navigation-->
