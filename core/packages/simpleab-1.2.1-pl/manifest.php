<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2014 modmore | More for MODX

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
SOFTWARE.
',
    'readme' => '------------------------------------------
SimpleAB - A/B Testing for MODX Revolution
------------------------------------------
Author: Mark Hamstra - support@modmore.com
------------------------------------------

SimpleAB is a tool to employ A/B or multivariate testing on a MODX Revolution powered website. It lets you set up a set of template or chunk variations, which will be randomly picked. By setting up conversions with snippets, AJAX requests and other ways, you can indicate what worked and what didn\'t, and use that insight to improve your site.


For more information on features and how to use them, please refer to https://www.modmore.com/extras/simpleab/
',
    'changelog' => '++ SimpleAB 1.2.1-pl
++ Released on 2018-04-19
++++++++++++++++++++++++++
- Fix statistics not showing in the test UI

++ SimpleAB 1.2.0-pl
++ Released on 2017-09-13
++++++++++++++++++++++++++
- Enable pagination on the chunks combo box to see more than 20 chunks [#33]
- SimpleAB now requires PHP 5.5 like other modmore extras

++ SimpleAB 1.2.0-rc1
++ Released on 2016-08-01
++++++++++++++++++++++++++
- Re-license to MIT and remove associated license checks
- Add ability to activate/deactivate a variation inline
- Add description to Tests and Variations grid using a row expander
- Fix missing class on primary button when editing a test
- Fix potential install issue on certain MySQL configurations
- Add French translation

++ SimpleAB 1.1.3-pl
++ Released on 2013-11-06
++++++++++++++++++++++++++
- Add Dutch translation
- Fix critical issue with Picks data collection.

++ SimpleAB 1.1.2-pl
++ Released on 2013-10-02
++++++++++++++++++++++++++
- Ensure latest data is always visible in graphs.

++ SimpleAB 1.1.1-pl
++ Released on 2013-09-05
++++++++++++++++++++++++++
- Add more flexibility to the ga_custom_var
- Make sure the admin_groups setting is built.

++ SimpleAB 1.1.0-pl
++ Released on 2013-09-03
++++++++++++++++++++++++++

- #15 Define resources for template tests by a resource range ("5-15")
- #14 Define resources for template tests based on its parent ("5>")
- #19 Set ga_custom_var placeholder for easy Google Analytics integration.
- #20 Add ability to lock down the CMP so users can only view information and not edit.
- #21 Add double click actions to grids for default action.
- #18 Refactor to not store individual table rows for each view/conversion.

++ SimpleAB 1.0.0-pl
++ Released on 2013-06-05
++++++++++++++++++++++++++

Upgrade packaging process to v0.6.0, fixing ability to uninstall packages and occasional failing installs.
The mystical version one-point-oh! Time to get this thing going..

++ SimpleAB 0.9.0-pl
++ Released on 2013-05-27
++++++++++++++++++++++++++

- #3 Add AJAX Conversion endpoint and sabConversionUrl snippet to properly generate the url to it.
- Add &resetPick property to sabConversion and &sabResetPick property to sabConversionHook to indicate if previous Picks should be discarded after logging the conversion.
- Add ability to more granularly debug/log tests through placeholders.
- Refactor plugin and snippet to properly log picks when in preview mode, and to enable previews when tests were inactive.
- Fix bug where bestpick mode (with Auto Optimizer) picks did not register the pick.
- Rename Smart Optimizer to Auto Optimizer due to clash with other package.

++ SimpleAB 0.3.1-pl
++ Released on 2013-05-04
++++++++++++++++++++++++++

- Add settings to build.
- Add (optional, enabled by default) modmore attribution.
- Minor touch-ups.
- Fix loading inactive variations in sabTest.getVariations

++ SimpleAB 0.3.0-pl
++ Released on 2013-05-03
++++++++++++++++++++++++++

- Add conversion testing for Chunks
- Add preview function for tests + variations
- Add toggle switch to enable or disable smart optimization
- Add ability to permanently delete tests
- Add ability to duplicate tests, with or without test data attached.
- Add ability to remove variations
- Add ability to clear data on a single variation
- Add ability to archive tests.
- Add ability to clear data on tests.

++ SimpleAB 0.2.0-pl
++ Released on 2013-03-11
+++++++++++++++++++++++++

- Many small improvements based on early feedback.


++ SimpleAB 0.1.0-pl
++ Released on 2013-03-03
++++++++++++++++++++++++

- Initial release.
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '7cc1aa93567cdc4c2dcd013906dff4ed',
      'native_key' => 'simpleab',
      'filename' => 'modNamespace/8d84c4ea7ba14c48c1b80b64c8395f9e.vehicle',
      'namespace' => 'simpleab',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87577be585fa7a89ded8ba019212d687',
      'native_key' => 'simpleab.use_previous_picks',
      'filename' => 'modSystemSetting/d9bbb6cb4f1141a9f8d3c42a64182e2b.vehicle',
      'namespace' => 'simpleab',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'be6f07ccfbcc507a53d31b5de2ad007f',
      'native_key' => 'simpleab.hide_logo',
      'filename' => 'modSystemSetting/ad8279c3c0030e0af7299a85b6d8e0d2.vehicle',
      'namespace' => 'simpleab',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '69c55aa1bd5f0583de32b8e66e47dba9',
      'native_key' => 'simpleab.admin_groups',
      'filename' => 'modSystemSetting/96d1e2f904702e4417da3e0c4b4a9f9a.vehicle',
      'namespace' => 'simpleab',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2eb9da6be44c171b61f6b71080a76950',
      'native_key' => 'simpleab.ga_custom_var_index',
      'filename' => 'modSystemSetting/4be8f7e812f3efd725dadafb3f804407.vehicle',
      'namespace' => 'simpleab',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '33cf125f46db0264020eb9bacb2e475a',
      'native_key' => 'simpleab.ga_custom_var_name',
      'filename' => 'modSystemSetting/04fe6185fff0390859c216ba9b3d22f1.vehicle',
      'namespace' => 'simpleab',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '702076aa4f6ef83c0c85af46bd27d0ef',
      'native_key' => 'simpleab.ga_custom_var_scope',
      'filename' => 'modSystemSetting/48f99aa2d01ae69ba461eb85f7bcdacd.vehicle',
      'namespace' => 'simpleab',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modPlugin',
      'guid' => 'c0e185e131204b99ab721cfa543c2a29',
      'native_key' => NULL,
      'filename' => 'modPlugin/959626824441be73d2444ee76a495e3f.vehicle',
      'namespace' => 'simpleab',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'a8af7670e621626e9e4fb47fa42abf55',
      'native_key' => 'simpleab',
      'filename' => 'modMenu/5df308710df2f6df8acde7ae5aa4bb87.vehicle',
      'namespace' => 'simpleab',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '535b1fec486ea3f71862695c103545c8',
      'native_key' => 1,
      'filename' => 'modCategory/6eb1504fc23e765b4b3114111f576376.vehicle',
      'namespace' => 'simpleab',
    ),
  ),
);