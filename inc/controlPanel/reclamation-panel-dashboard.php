<main>
    <div class="container">
        <div id="reclamation-form">
            <?php
                $url = "htpp://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($url, "inserted=true") == true) {
                    echo "<p class='success-label'>Reclamation was sent succesfully</p>";
                }elseif(strpos($url, "inserted=false") == true){
                    echo "<p class='success-label'>Make sure you provide the type</p>";
                }        
            ?>
            <form action="../../scripts/reclamation-insert.php" method="POST">
                <input type="text" value="<?php echo $_SESSION["username"]; ?>" readonly name="user">
                <select name="type">
                    <option value="nothing">--- Choose a reason ---</option>
                    <option value="fuites">Fuites</option>
                    <option value="fortes">Fortes</option>
                    <option value="consomations">Consomations</option>
                    <option value="dégrèvement">Dégrèvement</option>
                    <option value="étalonnage">Étalonnage</option>
                    <option value="erreur index">Erreur d'index</option>
                </select>
                <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Notes"></textarea>
                <input type="submit" value="Send" name="insert-rec">
            </form>
        </div>
    </div>
    <!-- end of main content -->
</main>