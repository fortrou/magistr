<?php
	return array( 'statics[/]$' => 'statics/empty_method', 
				  'statics/blog' => 'statics/get_news', 
				  'statics/list' => 'statics/get_staticsListForAdmin', 
				  'statics/create' => 'statics/get_staticsCreation', 
				  'statics/redact/[0-9]+' => 'statics/get_staticsRedaction',  
				  'statics/watch/[0-9]+' => 'statics/get_staticsView'/*, 
				  '' => '', 
				  '' => '',*/);