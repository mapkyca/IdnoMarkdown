<?php

    // TODO: Make markdown hooks work better when views are better.

    $body = $vars['object']->body;
    
    $body = \Michelf\Markdown::defaultTransform($body);
    
    if (\Idno\Core\site()->currentPage()->isPermalink()) {
        $rel = 'rel="in-reply-to" class="u-in-reply-to"';
    } else {
        $rel = '';
    }
?>
<div ><h2 class="p-name"><a href="<?=$vars['object']->getURL()?>"><?=$vars['object']->getTitle()?></a></h2>
<?php echo $this->autop($this->parseURLs($this->parseHashtags($body),$rel)); //TODO: a better rendering algorithm ?></div>