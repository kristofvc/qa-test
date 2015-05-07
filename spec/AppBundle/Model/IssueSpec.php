<?php

namespace spec\AppBundle\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IssueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Model\Issue');
    }
}
