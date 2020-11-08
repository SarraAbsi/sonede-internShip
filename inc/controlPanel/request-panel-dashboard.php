<main>
    <div class="container">
        <div class="stats">
            <?php
                $url = "htpp://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($url, "accepted=true") == true) {
                    echo "<p class='success-label'>Account was created succesfully</p>";
                }elseif(strpos($url, "deleted=true") == true){
                    echo "<p class='success-label'>Account was deleted succesfully</p>";
                }        
            ?>
            <div class="requests-grid">
                <?php
                    // session_start();
                    // sb connection
                    include_once "../../inc/connection.inc.php";
                    // search query
                    $searchQuery = " SELECT * FROM requests; ";
                    $executeSearch = $db->query($searchQuery);
                    while ($data = $executeSearch ->fetch()) {
                ?>
                    
                    <form method="POST" action="../../scripts/accept-decline-request.php">
                        <div class="request">
                            <input type="text" name="username" value="<?php echo $data['username']; ?>" class="req-username" readonly>
                            <input type="text" name="rank" value="<?php echo $data['rank']; ?>" class="req-rank" readonly>
                            <input type="text" name="cin" value="<?php echo $data['cin']; ?>" class="req-cin" readonly>
                            <input type="password" name="password" value="<?php echo $data['pwd']; ?>" class="req-password" readonly>
                            <?php if( $_SESSION['rank'] == "admin" ){ ?>
                                <input type="submit" value="Accept" class="req-accept" name="accept">
                                <input type="submit" value="Decline" class="req-decline" name="decline">
                            <?php } ?>
                        </div>
                    </form>
                <?php } ?>
                <!-- end of stats-grid -->
            </div>
        </div>
    </div>
    <!-- end of main content -->
</main>