<?php foreach ($news as $news_item) { ?>
  <h1><a href="<?=site_url('news/'.$news_item['slug'])?>"><?=$news_item['title']?></a></h1>
  <p><?=$news_item['text']?></p>
  <a href="<?=site_url('news/update/'.$news_item['id'])?>">Edit</a>
<?php } ?>
