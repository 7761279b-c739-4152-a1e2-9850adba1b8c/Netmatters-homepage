<?php
$db = new Database();
$news_list = $db->query('select * from news order by date desc limit 3')->get();
?>

<div class="news-grid">
    <?php foreach($news_list as $news): ?>
        <div class="news-item <?= $news['color'] ?>">
            <a href="#" class="news-tooltip"> <?= $news['category'] ?> </a>
            <a href="#">
                <img src="img/news/<?= $news['img'] ?>.webp" alt />
                <div class="news-description">
                    <h3><?= $news['title'] ?></h3>
                    <p><?= $news['body'] ?></p>
                    <p class="news-btn">Read more</p>
                    <div class="news-author">
                        <img src="img/<?= $news['authorimg'] ?>.webp" alt="<?= $news['author'] ?>" />
                        <p><strong>Posted by <?= $news['author'] ?></strong><br><?= date('jS F Y', strtotime($news['date'])) ?></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>