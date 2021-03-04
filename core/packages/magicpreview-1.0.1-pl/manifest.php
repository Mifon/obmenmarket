<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2018 Mark Hamstra Web Development <support@modmore.com>

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
',
    'readme' => 'MagicPreview for MODX
---------------------

MagicPreview adds a _Magical_ Preview button to the resources panel which will
show you, without actually saving the resource, a real preview of a resource.

It also has responsive breakpoints, so you can preview your page on various widths.
',
    'changelog' => 'MagicPreview 1.0.1-pl
---------------------
Released on 2018-12-18

- Add loading animation [#6]
- Rewrite CSS to BEM standards, reduce header size [#5]
- Add version-based cache busting to js and css files

MagicPreview 1.0.0-pl
---------------------
Released on 2018-12-17

- First magical release!
',
    'setup-options' => 'magicpreview-1.0.1-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '07fdf18967b71e14eb6c6367c5c671c3',
      'native_key' => 'magicpreview',
      'filename' => 'modNamespace/98702befe84e3d052d296fbb61a00b6d.vehicle',
      'namespace' => 'magicpreview',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '623d2c365c812c734b5c7e1c4e0ee4fb',
      'native_key' => '623d2c365c812c734b5c7e1c4e0ee4fb',
      'filename' => 'xPDOFileVehicle/a32bd7b309be87a6608e90f40e26ef23.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'd5b33b0c3c00016f6974ad94f7105c9c',
      'native_key' => 'd5b33b0c3c00016f6974ad94f7105c9c',
      'filename' => 'xPDOFileVehicle/36e42cf1ee92f981caa986599d11496f.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modPlugin',
      'guid' => 'ab07ed72c873a4d43c8aa26b3fbc21b8',
      'native_key' => 1,
      'filename' => 'modPlugin/5e32a01ad874ecb419a3b351bfe8da43.vehicle',
      'namespace' => 'magicpreview',
    ),
  ),
);