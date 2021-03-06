<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Tests\Security;

use Sonata\MediaBundle\Security\PublicDownloadStrategy;

class PublicDownloadStrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testIsGranted()
    {
        $media = $this->getMock('Sonata\MediaBundle\Model\MediaInterface');
        $request = $this->getMock('Symfony\Component\HttpFoundation\Request');
        $translator = $this->getMock('Symfony\Component\Translation\TranslatorInterface');

        $strategy = new PublicDownloadStrategy($translator);
        $this->assertTrue($strategy->isGranted($media, $request));
    }
}
