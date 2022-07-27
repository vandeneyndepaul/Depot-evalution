<?php $titre = 'Mon Blog'; ?>

<header>
<a href="<?= "index.php?action=billet&id=". $billet['id'] ?>">
    <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
</a>
      <time><?= $billet['date'] ?></time>
    </header>

<?php ob_start(); ?>
<?php foreach ($billets as $billet): ?>
    <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>