<?php

/**
 * AVE.cms
 *
 * @package AVE.cms
 * @version 3.x
 * @filesource
 * @copyright © 2007-2014 AVE.cms, http://www.ave-cms.ru
 *
 * @license GPL v.2
 */

define('START_MICROTIME', microtime());
define('BASE_DIR', str_replace("\\", "/", dirname(__FILE__)));

// Проверяем уставлена ли CMS
if (! @filesize(BASE_DIR . '/inc/db.config.php'))
{
	header('Location:/install/index.php');
	exit;
}

// Если в запросе пришел вызов thumbnail
// подключаем файл обработки thumbnail
if (! empty($_REQUEST['thumb']))
{
	require(BASE_DIR . '/inc/thumb.php');
	exit;
}

// Подключаем файл обработки ошибок
// include_once(BASE_DIR . '/inc/errors.php');

ob_start();

// Подключаем файл определения мобильных устройств
// далее пользуемся $MDetect
require_once(BASE_DIR . '/lib/mobile_detect/Mobile_Detect.php');
$MDetect = new Mobile_Detect;

// Подключаем файл инициализации
require(BASE_DIR . '/inc/init.php');

// Проверяем нет ли в запросе папки UPLOADS_DIR
// подключаем файл для работы thumbsnail
if (strpos($_SERVER['REQUEST_URI'], ABS_PATH . UPLOAD_DIR . '/') === 0)
{
	require(BASE_DIR . '/inc/thumb.php');
	exit;
}

// Папка с шаблонами
$AVE_Template = new AVE_Template(BASE_DIR . '/templates/');

// Подключаем ядро системы
require(BASE_DIR . '/class/class.core.php');
$AVE_Core = new AVE_Core;

// Проверям на вызов внешних модулей и системных блоков
if (empty($_REQUEST['module']) || empty($_REQUEST['sysblock']))
	$AVE_Core->coreUrlParse($_SERVER['REQUEST_URI']);

$GLOBALS['page_id'] = array($_REQUEST['id'] => array('apage' => floatval(0)));

// Если пришел вызов на показ ревизии документа
if (!empty($_REQUEST['revission']))
{
	$res =	$AVE_DB->Query("
		SELECT
			doc_data
		FROM
			" . PREFIX . "_document_rev
		WHERE
			doc_id='".(int)$_REQUEST['id']."'
			AND doc_revision='".(int)$_REQUEST['revission']."'
		LIMIT 1
	")->GetCell();
	$res =	@unserialize($res);
	$flds =	get_document_fields((int)$_REQUEST['id'], $res);
}

// Собираем страницу
$AVE_Core->coreSiteFetch(get_current_document_id());
$content = ob_get_clean();
ob_start();
eval('?>' . $content . '<?');
$cont = ob_get_clean();

// Ловим 404 ошибку
if (isset($_REQUEST['id']) AND ($_REQUEST['id']) == PAGE_NOT_FOUND_ID){
	report404();
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true);
}

// Постраничка
if (
	empty($_REQUEST['module']) &&
	(
		(
			isset($_REQUEST['page'])
			&& is_numeric($_REQUEST['page'])
			&& ($_REQUEST['page'] < 2 OR ($_REQUEST['page'] > @$GLOBALS['page_id'][$_REQUEST['id']]['page']))
		)
		OR
		(
			isset($_REQUEST['apage'])
			&& is_numeric($_REQUEST['apage'])
			&& ($_REQUEST['apage'] < 2 OR ($_REQUEST['apage'] > @$GLOBALS['page_id'][$_REQUEST['id']]['apage']))
		)
		OR
		(
			isset($_REQUEST['artpage'])
			&& is_numeric($_REQUEST['artpage']) 
			&& ($_REQUEST['artpage'] < 2 OR ($_REQUEST['artpage'] > @$GLOBALS['page_id'][$_REQUEST['id']]['artpage']))
		)
	)
)
{
	if
		($_REQUEST['id'] == 1) header('Location:' . ABS_PATH);
	else
		header('Location:' . ABS_PATH . $AVE_Core->curentdoc->document_alias . URL_SUFF);
	exit;
}

// Тут заменяем [tag:rubheader]
// на собранный $GLOBALS["user_header"]
$rubheader = (empty($GLOBALS["user_header"]) ? "" : implode(chr(10), $GLOBALS["user_header"]));
$cont = str_replace('[tag:rubheader]', $rubheader, $cont);

//Вывод конечного результата
echo $cont;

//Вывод статистики загрузки и запросов SQL (только для администраторов)
if (!defined('ONLYCONTENT') && UGROUP == 1 && defined('PROFILING') && PROFILING)
	echo get_statistic(1, 1, 1, 1);
?>