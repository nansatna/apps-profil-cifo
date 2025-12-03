<?php 
    $dlink="/$pages/$files";
    foreach ($Menu as $menuItem) {
    if (!empty($menuItem['submenu'])) {
        foreach ($menuItem['submenu'] as $submenu) {
                if($dlink===$submenu['link'])
                {
                    $JudulHero=$submenu['title'];
                    $DeskripsiHero=$submenu['Deskripsi'];
                }

            }

        }
    }
?>

<section class="py-5">
    <div class="container text-center">
        <h1 class="fw-bold display-6 text-primary"><?= $JudulHero ?></h1>
        <p class="text-secondary"><?= $DeskripsiHero ?></p>
    </div>
</section>
