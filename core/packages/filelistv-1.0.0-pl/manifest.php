<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for FileLisTV.

1.0.0
==============
- Initial release
',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 3, June 2007

Read full version at:
http://www.gnu.org/licenses/gpl-3.0.en.html
',
    'readme' => '--------------------
FileLisTV
--------------------
Author: Vitaly Chekryzhev <13hakta@gmail.com>
--------------------

TV to store file list for MODx Revolution.

TV stores items with linefeed delimiter.
Create a list by adding URLs through input box or by
drag&drop file items from file tree to TV panel.

Set output mode to filelist and select chunk.
Placeholder [[+value]] is passed to each chunk.

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/13hakta/FileLisTV/issues
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '7123da0adba1b4eac7a5c53d20d4c036',
      'native_key' => 'filelistv',
      'filename' => 'modNamespace/bd93f081705af38f8f82cd738e157dce.vehicle',
      'namespace' => 'filelistv',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '32d6fc681c005022b2d0e706eb5733c2',
      'native_key' => NULL,
      'filename' => 'modCategory/18ba9fa0ce5751c1dbcdc890ed78c1ff.vehicle',
      'namespace' => 'filelistv',
    ),
  ),
);