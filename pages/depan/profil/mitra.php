<?php 
    include "style/mitra&partner/mitra.css";
    include "data/depan/profil/mitra.php";
 ?>

<div class="content-container">
    <h2 style="text-align: center; color: var(--color-primary); margin-bottom: 40px; font-weight: 600; font-size: 2em;">Jaringan Kemitraan</h2>

    

    <div class="mitra-grid">
        <?php
        // Looping array PHP untuk mencetak setiap mitra sebagai Card
        foreach ($mitra_strategis as $mitra) {
            echo '<div class="mitra-card">';
            echo '<h3>' . $mitra['nama'] . '</h3>';
            echo '<p><strong>Bidang Fokus:</strong> ' . $mitra['fokus'] . '</p>';
            echo '<p><strong>Peran Kemitraan:</strong> ' . $mitra['peran'] . '</p>';
            echo '</div>';  
        }
        ?>
    </div>
</div>

