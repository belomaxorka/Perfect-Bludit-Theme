<article>
    <?php Theme::plugins('pageBegin'); ?>
    <a href="<?php echo $page->permalink(); ?>"><h2><?php echo $page->title(); ?></h2></a>
    <?php if (!$page->isStatic() && !$url->notFound()): ?>
         <small><?php echo $page->date(); ?></small>&nbsp;<small>(<?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?>)</small>
             <?php if ($page->category()):?> | <a href="<?php echo DOMAIN_CATEGORIES.$page->categoryKey() ?>"><?php echo $page->category() ?></a>
         <?php endif?>
    <?php endif ?>
    <?php echo $page->content(); ?>
    <?php Theme::plugins('pageEnd'); ?>
</article>
<hr />
