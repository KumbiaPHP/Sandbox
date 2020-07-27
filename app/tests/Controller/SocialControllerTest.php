<?php
/**
 * KumbiaPHP web & app Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 *
 * @category   Kumbia Tests
 * @package    Controller
 *
 * @copyright  Copyright (c) 2005 - 2019 KumbiaPHP Team (http://www.kumbiaphp.com)
 * @license    https://github.com/KumbiaPHP/KumbiaPHP/blob/master/LICENSE   New BSD License
 */

use PHPUnit\Framework\TestCase;

/**
 * SocialControllerTest class
 */
class SocialControllerTest extends TestCase
{
    use KumbiaTestTrait;
    
    /**
     * testDisplay method
     *
     * @return void
     */
    public function testDisplay()
    {
        $actual = $this->get('/partials/social/sociable/');
        $this->assertStringContainsString('Social links', $actual);
        $this->assertResponseCode(200);
    }  
}
