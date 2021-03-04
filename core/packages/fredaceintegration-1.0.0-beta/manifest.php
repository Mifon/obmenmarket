<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2018 MODX, LLC

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.',
    'readme' => '---------------------------------------
fredaceintegration
---------------------------------------
Version: 1.0.0-beta
Author: John Peca <john@modx.com>
---------------------------------------',
    'changelog' => 'Changelog for fredaceintegration.

fredaceintegration 1.0.0-beta
==============
- Load list of element attributes from Fred\'s docs to a completer',
    'requires' => 
    array (
      'fred' => '>=1.0.0',
      'ace' => '>=1.6.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '71c4bd53de457f77b714a330e97ba0c6',
      'native_key' => 'fredaceintegration',
      'filename' => 'modNamespace/93aaa836d097a0ecb128ad7d8749a02a.vehicle',
      'namespace' => 'fredaceintegration',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '69d573a87a381253117850802e8ec18a',
      'native_key' => NULL,
      'filename' => 'modCategory/52270ba91ff2c7c10f20292f84cfc4fe.vehicle',
      'namespace' => 'fredaceintegration',
    ),
  ),
);