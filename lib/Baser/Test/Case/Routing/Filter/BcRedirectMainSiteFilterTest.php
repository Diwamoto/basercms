<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Test.Case.Routing.Filter
 * @since			baserCMS v 4.0.9
 * @license			http://basercms.net/license/index.html
 */

App::uses('BcRedirectMainSiteFilter', 'Routing/Filter');

/**
 * BcRedirectMainSiteFilterTest class
 *
 * @package Baser.Test.Case.Routing.Filter
 * @property  BcRedirectMainSiteFilter $BcRedirectMainSiteFilter
 */
class BcRedirectMainSiteFilterTest extends BaserTestCase {

/**
 * set up
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * tearDown
 *
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * beforeDispatch Event
 */
	public function testBeforeDispatch() {
		$this->markTestIncomplete('このテストは、まだ実装されていません。');
	}

}