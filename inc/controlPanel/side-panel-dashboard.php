<section class="side-panel">
    <div class="container"> 
        <img src="../../img/logo.svg" alt="Logo" width="50">
        <p>
            <?php session_start(); ?>
            <span class="user-pseudo"><?php echo $_SESSION['username']; ?></span>
            <span class="user-rank">[<?php echo $_SESSION['rank'];?>]</span>
        </p>
        <!-- end of container -->
    </div>
    <nav>
        <ul>
            <li><a href="../../src/admin/controlPanel.php">Home</a></li>
            <li><a href="../../src/admin/requests.php">Requests</a></li>
            <?php if( $_SESSION['rank']=='staff' ){ ?>
                <li><a href="../../src/admin/reclamation.php">Reclamations</a></li>
            <?php }elseif($_SESSION['rank']=='admin'){ ?>
                <li><a href="../../src/admin/reclamationAdmin.php">Reclamations</a></li>
            <?php } ?>
        </ul>
    </nav>
    <form action="../../scripts/logout.php" id="logout">
        <button class="logout-button">Logout</button>
    </form>
    <!-- end of sidePanel -->
</section>