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
    'changelog' => 'Fred 1.2.1 fixes an annoying issue where all Elements appeared in all categories. While great for making sure you know what all your options are, we concur with the bug reporter that, indeed, it\'s a bit overzealous. You can find the other new additions and bug fixes in the original [1.2 release announcement](https://github.com/modxcms/fred/releases/tag/1.2.0-pl).
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'c82dc4d4f2bffb46794c4d3f44687b63',
      'native_key' => 'fred',
      'filename' => 'modNamespace/454df7c1bb81fb3765fcfaa011941fef.vehicle',
      'namespace' => 'fred',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7918ad0f0154594f39aea046f12cbcd1',
      'native_key' => 'fred.launcher_position',
      'filename' => 'modSystemSetting/d3a57e433231fea3bb1a918ab27a9b48.vehicle',
      'namespace' => 'fred',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1fc05958ad079f31b6c6654570bb8f9f',
      'native_key' => 'fred.icon_editor',
      'filename' => 'modSystemSetting/9c2c121b3b68798f015109f54c911663.vehicle',
      'namespace' => 'fred',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed9a6c5b147cd6779dc2c16125c45afc',
      'native_key' => 'fred.image_editor',
      'filename' => 'modSystemSetting/1e06e8f29533cfbae13aefdd92397ac5.vehicle',
      'namespace' => 'fred',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd313439bd7d56c61992efc94a9b02eab',
      'native_key' => 'fred.rte',
      'filename' => 'modSystemSetting/d4f742b8573212a19b1b1e367bd5da6b.vehicle',
      'namespace' => 'fred',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9b2bee626a95a5f31925d846161b5207',
      'native_key' => 'fred.element_group_sort',
      'filename' => 'modSystemSetting/e93dd14c9916b3cb2942245cb1a3829e.vehicle',
      'namespace' => 'fred',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '32b007f78bae196ea6c3ea3a66177761',
      'native_key' => 'fred.element_sort',
      'filename' => 'modSystemSetting/5f2904d9272eae00c82dd293b9507b87.vehicle',
      'namespace' => 'fred',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f077caef4533ba787a0f90cddf7e91db',
      'native_key' => 'fred.blueprint_category_sort',
      'filename' => 'modSystemSetting/06dfce2c55d64499d9cde66efa7026c4.vehicle',
      'namespace' => 'fred',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ff9d1dd6af794be010928a3e7d1804a9',
      'native_key' => 'fred.blueprint_sort',
      'filename' => 'modSystemSetting/78a78d58dc5801836ab77b8b8dda31ef.vehicle',
      'namespace' => 'fred',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '825b7faebb17790bc7c144d22d339259',
      'native_key' => 'fred.secret',
      'filename' => 'modSystemSetting/dcd04bdedef69444c184caff09f79471.vehicle',
      'namespace' => 'fred',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '953ede68db35234e3100cbd54f75ef33',
      'native_key' => 'fred.active_class',
      'filename' => 'modSystemSetting/9fd5b8e0a8992a6e6d563d191ccd8e12.vehicle',
      'namespace' => 'fred',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1308dff08e67ba1869696a4a99e75062',
      'native_key' => 'fred.default_enabled',
      'filename' => 'modSystemSetting/56ce0c697ee5779956871955595332f6.vehicle',
      'namespace' => 'fred',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8259900cf3c598fbd633f71e865fb660',
      'native_key' => 'fred.sidebar_open',
      'filename' => 'modSystemSetting/e9c2664f3096ece48870dba68b322522.vehicle',
      'namespace' => 'fred',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '07bd5a0aaa552aaadcfabe8afd8dfd0b',
      'native_key' => 'fred.force_sidebar',
      'filename' => 'modSystemSetting/ba3bb53836117f403a062131462bd825.vehicle',
      'namespace' => 'fred',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '48e0d420960e8fea91963a8dd3f97218',
      'native_key' => 'fred.logout_url',
      'filename' => 'modSystemSetting/4985fbea2eab036e74bb828cce804aa1.vehicle',
      'namespace' => 'fred',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ce4a783921e33dbc06b883020d3f66c4',
      'native_key' => NULL,
      'filename' => 'modCategory/ccfbbeccc84ff0914f6027acfbea2690.vehicle',
      'namespace' => 'fred',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '38cc179a1da2b12f3e1df8699e1f6f97',
      'native_key' => 'fred.menu.fred',
      'filename' => 'modMenu/c26330d4094621e6878469c90557ae30.vehicle',
      'namespace' => 'fred',
    ),
  ),
);