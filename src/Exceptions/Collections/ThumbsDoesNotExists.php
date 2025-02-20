<?php

namespace Brackets\Media\Exceptions\Collections;

use Exception;

class ThumbsDoesNotExists extends Exception
{
    public static function thumbsConversionNotFound()
    {
        return new static(trans('craftable/media::media.exceptions.thumbs_does_not_exists'));
    }
}