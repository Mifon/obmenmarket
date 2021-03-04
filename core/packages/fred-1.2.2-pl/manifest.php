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
    'changelog' => 'Fred 1.2.2 fixes some issues with not assigning media source paths, elFinder hiding certain paths, and a bug with the fred-render function not working consistently. ',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'b118dc14fa7a7bf2a6957bb3e5f9bf0e',
      'native_key' => 'fred',
      'filename' => 'modNamespace/d8895d3ee72fbfadb6cbfe90887c001e.vehicle',
      'namespace' => 'fred',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2ec04070be6c843a100a93485c620419',
      'native_key' => 'fred.launcher_position',
      'filename' => 'modSystemSetting/2ecc587113b437e33ec4c8c4a51b3483.vehicle',
      'namespace' => 'fred',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfbc096cc5ce695240047e64359b6b6a',
      'native_key' => 'fred.icon_editor',
      'filename' => 'modSystemSetting/efa855e24561fa4cb249875595c90a9a.vehicle',
      'namespace' => 'fred',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '97a21a7c2a33939e6b4068f76be12a3f',
      'native_key' => 'fred.image_editor',
      'filename' => 'modSystemSetting/46f0d655095aae28cb26d8f97c3270f7.vehicle',
      'namespace' => 'fred',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '353f40980abf2c42ea2790c4d3ff9cc7',
      'native_key' => 'fred.rte',
      'filename' => 'modSystemSetting/f0b45b759dd0b072006b3051c8b6e526.vehicle',
      'namespace' => 'fred',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b81fb28533c420abb3b00f26c926a3fe',
      'native_key' => 'fred.element_group_sort',
      'filename' => 'modSystemSetting/37d87da761f91fe2bbed0a69beffed4e.vehicle',
      'namespace' => 'fred',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fa4df1301364bcebb13c08f69e2a96e1',
      'native_key' => 'fred.element_sort',
      'filename' => 'modSystemSetting/3cd004eaed55002df347e13be6b959c3.vehicle',
      'namespace' => 'fred',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c13a8dfac28af1ef761c11ee3568fe94',
      'native_key' => 'fred.blueprint_category_sort',
      'filename' => 'modSystemSetting/2e7e7c1ed0f035ded37a254a4047edef.vehicle',
      'namespace' => 'fred',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6b6f71b9f09b035738ae4a575197d16a',
      'native_key' => 'fred.blueprint_sort',
      'filename' => 'modSystemSetting/edc044f6039ae565b958309e1283c887.vehicle',
      'namespace' => 'fred',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cf82d66c204ce5cefc791bd7cb574be1',
      'native_key' => 'fred.secret',
      'filename' => 'modSystemSetting/9d2db01f06ec8030d33cb43b00c9edda.vehicle',
      'namespace' => 'fred',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '25712d17e5954d23eccd029560e7db60',
      'native_key' => 'fred.active_class',
      'filename' => 'modSystemSetting/bfd278e4045a2f1687d52f8edd40cb61.vehicle',
      'namespace' => 'fred',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a73c36f3c018494c526ee772a67978f7',
      'native_key' => 'fred.default_enabled',
      'filename' => 'modSystemSetting/29233f14dea811be525cdf6479435b48.vehicle',
      'namespace' => 'fred',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '97d38d61e351d011cb579f0cd4a0b6ed',
      'native_key' => 'fred.sidebar_open',
      'filename' => 'modSystemSetting/be723b1af58efaae5991133076ff474f.vehicle',
      'namespace' => 'fred',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad2a56e7414921dc23472f3f2a9cf453',
      'native_key' => 'fred.force_sidebar',
      'filename' => 'modSystemSetting/4d36279f4e24330117a5d3a65c6eefbb.vehicle',
      'namespace' => 'fred',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cee4fb037d103d5a86624d7d7902c977',
      'native_key' => 'fred.logout_url',
      'filename' => 'modSystemSetting/176e29b49825f33d98b9d3f22c3f7aad.vehicle',
      'namespace' => 'fred',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '1a68bfdffd817ef68312230e51ea6628',
      'native_key' => NULL,
      'filename' => 'modCategory/8ee5f56bfe1567703a78539a501db142.vehicle',
      'namespace' => 'fred',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '1a36159a6633be1aa6a06ee9eeb737d0',
      'native_key' => 'fred.menu.fred',
      'filename' => 'modMenu/8feacb55345c4744be478b79352d60c3.vehicle',
      'namespace' => 'fred',
    ),
  ),
);