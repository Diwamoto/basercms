<?php
/* SVN FILE: $Id$ */
/**
 * [管理画面] フィード設定共通メニュー
 *
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2010, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2010, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.feed.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>
<div class="side-navi">
<h2>フィード設定<br />共通メニュー</h2>
<ul>
<li><?php echo $html->link('フィード設定一覧',array('action'=>'index')) ?></li>
<li><?php echo $html->link('新規フィード設定を登録',array('action'=>'add')) ?></li>
</ul>
</div>