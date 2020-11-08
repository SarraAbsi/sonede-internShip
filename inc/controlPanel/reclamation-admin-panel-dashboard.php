<main>
    <div class="container">
        <div class="recs-grid">
        <?php
            // sb connection
            include_once "../../inc/connection.inc.php";

            // search query
            $searchQuery = " SELECT * FROM `reclamations` ; ";
            $executeSearch = $db->query($searchQuery);
            while ($data = $executeSearch ->fetch()) {
        ?>
            <form method="POST" action="../../scripts/accept-decline-reclamations.php">
                <div class="reclamation">

                    <input type="text" name="id" value="<?php echo $data['id']; ?>" class="rec-id" readonly>
                    <input type="text" name="user" value="<?php echo $data['user']; ?>" class="rec-uder" readonly>
                    <input type="text" name="type" value="<?php echo $data['type']; ?>" class="rec-type" readonly>
                    <input type="text" name="date" value="<?php echo $data['date']; ?>" class="rec-date" readonly>
                    <textarea name="note" class="rec-note" readonly cols="30" rows="6"><?php echo $data['note']; ?></textarea>

                    
                    <input type="submit" value="Mute" class="rec-decline" name="mute">
                    <input type="submit" value="Review" class="rec-accept" name="accept">
                    
                </div>
            </form>
        <?php } ?>
    </div>
    <!-- end of main content -->
</main>