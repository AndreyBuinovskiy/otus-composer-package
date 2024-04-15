<?php


namespace AndreiBuinovskii\OtusComposerPackage;


class StringProcessor
{
    public function getLength(string $s): int
    {
        return mb_strlen($s);
    }
}