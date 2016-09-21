<?php $logsql = array (
  0 => 
  array (
    'log_time' => 1473613556,
    'log_ip' => '127.0.0.1',
    'log_url' => 'do=docs&action=edit&sub=save&Id=1&cp=ea9fbc4f5dde2c9f1563eb6aec0444c1',
    'log_user_id' => '1',
    'log_user_name' => 'Admin',
    'log_text' => 
    array (
      'sql_error' => 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'0\',
								document_in_search		= \'0\'
							WHERE document_id = \'1\' AND rubric_\' at line 4',
      'sql_query' => '
							UPDATE dew_document_fields
							SET
								
								field_value				= &#039;&lt;section&gt;
		&lt;div class=&quot;container&quot;&gt;
			&lt;div class=&quot;row&quot;&gt;
				&lt;div class=&quot;col-sm-3&quot;&gt;
					&lt;div class=&quot;left-sidebar&quot;&gt;
						&lt;h2&gt;Category&lt;/h2&gt;
						&lt;div class=&quot;panel-group category-products&quot; id=&quot;accordian&quot;&gt;&lt;!--category-productsr--&gt;
							&lt;div class=&quot;panel panel-default&quot;&gt;
								&lt;div class=&quot;panel-heading&quot;&gt;
									&lt;h4 class=&quot;panel-title&quot;&gt;
										&lt;a data-toggle=&quot;collapse&quot; data-parent=&quot;#accordian&quot; href=&quot;#sportswear&quot;&gt;
											&lt;span class=&quot;badge pull-right&#039;,
								field_number_value		= &#039;0&#039;,
								document_in_search		= &#039;0&#039;
							WHERE document_id = &#039;1&#039; AND rubric_field_id = &#039;2&#039;
						',
      'caller' => 
      array (
        0 => 
        array (
          'call_file' => 'Z:\\home\\vapeche.ru\\www\\admin\\index.php',
          'call_func' => 'include',
          'call_line' => 115,
        ),
        1 => 
        array (
          'call_file' => 'Z:\\home\\vapeche.ru\\www\\admin\\docs.php',
          'call_func' => 'AVE_Document->documentEdit',
          'call_line' => 79,
        ),
        2 => 
        array (
          'call_file' => 'Z:\\home\\vapeche.ru\\www\\class\\class.docs.php',
          'call_func' => 'AVE_Document->documentSave',
          'call_line' => 1634,
        ),
      ),
      'url' => 'http://vapeche.ru/admin/index.php?do=docs&action=edit&sub=save&Id=1&cp=ea9fbc4f5dde2c9f1563eb6aec0444c1',
    ),
  ),
) ?>