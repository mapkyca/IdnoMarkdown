<?php

    namespace IdnoPlugins\Markdown {
        class Main extends \Idno\Common\Plugin {
	    	    
            function registerPages() {
		require_once dirname(__FILE__) . '/vendor/php-markdown/Michelf/Markdown.inc.php';

		\Idno\Core\site()->template()->extendTemplate('entity/Entry/edit','Markdown/entity/Entry/edit');
		\Idno\Core\site()->template()->extendTemplate('entity/edit/header','Markdown/header');
            }
	    
        }
    }
