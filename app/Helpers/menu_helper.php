<?php

function set_active($uri)
{
    return (service('uri')->getSegment(1) == $uri) ? 'active' : '';
}
