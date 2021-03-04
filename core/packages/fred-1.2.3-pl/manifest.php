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
Fred
---------------------------------------
Version: 1.2.1
Author: John Peca <john@modx.com>
---------------------------------------
Fred is a visual drag-and-drop front-end editor for MODX Revolution.

Documentation: https://modxcms.github.io/fred

Fred Extras, including ready-to-use Themes: https://modx.com/extras/browse/?search=fred


UPGRADE NOTES
=======================================
If you are upgrading from a previous release to the following versions, please note the important changes:

------------
-> rc1
------------
Make sure all Themes are named uniquely, and any Elements, Blueprints, Element categories, or Blueprint categories within a Themes likewise have unique names. You can share names across Themes, except for the Theme name itself.

------------
-> beta7
------------
If you defined a Media Sources in Option Sets, in Element markup, or an Options Override, you need to adjust these from using the Media Source ID to the Media Source name.
',
    'changelog' => 'Fred 1.2.3 fixes an issue with some broken dependencies during last package build. ',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'c648f2a8ddbbe8eb862605e69af5979c',
      'native_key' => 'fred',
      'filename' => 'modNamespace/71066d63edcf7dc9faf9bba011f60ad3.vehicle',
      'namespace' => 'fred',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '022cdf227f29038c16096165a7266092',
      'native_key' => 'fred.launcher_position',
      'filename' => 'modSystemSetting/9281a7dc68383200425e21bbb6778bb3.vehicle',
      'namespace' => 'fred',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f19483c947ab4a57de57e275984f994c',
      'native_key' => 'fred.icon_editor',
      'filename' => 'modSystemSetting/220a6e551cd7dd0fa38509bbede833f5.vehicle',
      'namespace' => 'fred',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b943767829731eb88031da7ea2f6cb0',
      'native_key' => 'fred.image_editor',
      'filename' => 'modSystemSetting/e63833dd8f69dc9188a8bd3e1d6930cc.vehicle',
      'namespace' => 'fred',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2b31faaf9f4fa26434780045679af3ca',
      'native_key' => 'fred.rte',
      'filename' => 'modSystemSetting/078bdd7b4fa2f93d503ac7c9dad9cfcf.vehicle',
      'namespace' => 'fred',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad6d138a6c1c88206a2f797868b9d5ff',
      'native_key' => 'fred.element_group_sort',
      'filename' => 'modSystemSetting/984c173c5364f1a2b6a187f86dc4ba5f.vehicle',
      'namespace' => 'fred',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '36e453c40286bacc61da3fea05bcc4b1',
      'native_key' => 'fred.element_sort',
      'filename' => 'modSystemSetting/b25094c26e71b1112db951bee70149af.vehicle',
      'namespace' => 'fred',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6bc8d3a2f37124ec08c464f04e2fc4a3',
      'native_key' => 'fred.blueprint_category_sort',
      'filename' => 'modSystemSetting/da5b11555a0fe399bbb6021af0487e8b.vehicle',
      'namespace' => 'fred',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6d5b92826f40880bd311beaa7924ae0b',
      'native_key' => 'fred.blueprint_sort',
      'filename' => 'modSystemSetting/c90d014e10344086108c61c4d3f08290.vehicle',
      'namespace' => 'fred',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c9c63e17004bafdb0c06d96ecd1cc8f1',
      'native_key' => 'fred.secret',
      'filename' => 'modSystemSetting/f5f3c21c799db0e0637a2fbc2fa3fcbc.vehicle',
      'namespace' => 'fred',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9947733eff2c31325c84df5d720bb812',
      'native_key' => 'fred.active_class',
      'filename' => 'modSystemSetting/cc4cfe4099f43f6d7e97b34d4d651d92.vehicle',
      'namespace' => 'fred',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f135f0bb883cf0c9c52a9686fdc8d1d0',
      'native_key' => 'fred.default_enabled',
      'filename' => 'modSystemSetting/b894fb24233577421440aaac2a8bb780.vehicle',
      'namespace' => 'fred',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e7b47500cd497a40249603d1d960cb0a',
      'native_key' => 'fred.sidebar_open',
      'filename' => 'modSystemSetting/e447b9b9e6d238368a26e123715d629f.vehicle',
      'namespace' => 'fred',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e202e6f1e1b0e2669ce77be61b6200fb',
      'native_key' => 'fred.force_sidebar',
      'filename' => 'modSystemSetting/defdb94ba7cce0baa76912097f94fc14.vehicle',
      'namespace' => 'fred',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '26a03face102876d6c6930542136ea84',
      'native_key' => 'fred.logout_url',
      'filename' => 'modSystemSetting/565c48d630167385756401b84814a742.vehicle',
      'namespace' => 'fred',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '5a0d93d3bd3e8e5e69ac5b4158965de3',
      'native_key' => NULL,
      'filename' => 'modCategory/b1720945da53cf8c6d7bc5f9097f35ad.vehicle',
      'namespace' => 'fred',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '48d49e47219fffcc57c9ad9af4498b4e',
      'native_key' => 'fred.menu.fred',
      'filename' => 'modMenu/61e1af14e0509df75b9d2c70c07d2ab7.vehicle',
      'namespace' => 'fred',
    ),
  ),
);