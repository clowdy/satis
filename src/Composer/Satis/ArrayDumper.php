<?php

namespace Composer\Satis;

use Composer\Package\Dumper\ArrayDumper as ComposerArrayDumper;
use Composer\Package\PackageInterface;

class ArrayDumper extends ComposerArrayDumper
{
    public function dump(PackageInterface $package)
    {
        $data = parent::dump($package);

        $data['uid'] = $package->getId();

        return $data;
    }
}
