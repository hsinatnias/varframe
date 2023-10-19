<?php

namespace Varsha\Varframe\Utility;

use Exception;

class GetConfig
{

    private function isFileExists(string $filename)
    {
        if (!file_exists($filename))
            throw new Exception($filename . ' does not exists');
    }

}