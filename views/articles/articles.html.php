

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<main class="bg-white d-flex gap-4 flex-wrap mb-5 p-4 rounded-2 mx-auto overflow-hidden">

<?php foreach ($articles as $article) : ?>
<a href="/index?page=article&id=<?= $article['id'] ?>">
<div class="my-3 border">


    <img src="<?= $article['cover']?>">

  <section class="infos mb-4">
    <span class="category py-1 text-center rounded-3 fw-bold d-block mb-3"><?= $article['category']?></span>
    <h3 class="fw-bold mb-1"><?= $article['title']?></h3>
    <span class="date d-block mb-4"><?= $article['published_at']?></span>

  </section>
</div>
</a>
<?php endforeach?>

</main>