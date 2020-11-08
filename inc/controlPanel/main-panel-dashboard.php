<main>
    <div class="container">
        <div class="stats">
            <div class="stats-grid">
                <?php 
                    // db connection
                    include_once "../../inc/connection.inc.php";

                    // admin accounts count
                    $getAdminCount = $db -> query( "SELECT * FROM users WHERE `rank` = 'admin';" );
                    $nbrA = 0;
                    while ($getAdminCount->fetch()) {
                        $nbrA++;
                    }
                    
                    // staff accouunts count
                    $getStaffCount = $db -> query( "SELECT * FROM users WHERE `rank` = 'staff';" );
                    $nbrS = 0;
                    while ($getStaffCount->fetch()) {
                        $nbrS++;
                    }
                
                    // requests count
                    $getRequestCount = $db -> query( "SELECT * FROM requests;" );
                    $nbrR = 0;
                    while ($getRequestCount->fetch()) {
                        $nbrR++;
                    }
                
                ?>
                <div class="card">
                    <h4><a href="admin-accounts.php">Admin Accounts</a></h4>
                    <p><?php echo "$nbrA"; ?></p>
                </div>

                <div class="card">
                    <h4><a href="staff-accounts.php">Staff Acounts</a></h4>
                    <p><?php echo "$nbrS"; ?></p>
                </div>

                <div class="card">
                    <h4><a href="requests.php">Acounts Requests</a></h4>
                    <p><?php echo "$nbrR"; ?></p>
                </div>
                <!-- end of stats-grid -->
            </div>
        </div>
    </div>
    <!-- end of main content -->
</main>