<?php

    namespace IdnoPlugins\Markdown {
        class Main extends \Idno\Common\Plugin {
	    	    
            function registerPages() {
		require_once dirname(__FILE__) . '/vendor/php-markdown/Michelf/Markdown.inc.php';
            }
        }
    }
