<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for UserFiles.

2.3.7 beta (26.07.2018)
==============
- Change "modWebUserFileRemoveProcessor" processor

2.3.6 beta (25.07.2018)
==============
- Change "modUserFileGetListProcessor", "modWebUserFileGetListProcessor" processor

2.3.5 beta (13.07.2018)
==============
- Fix "image_mime_type" setting
- Fix "mime" [modUserFileUploadProcessor]
- Fix "mime" [js]
- Remove "vendors" resolver

2.3.4 beta (16.01.2018)
==============
- Add "UserFilesOnBeforeFileUpload", "UserFilesOnAfterFileUpload" event

2.3.3 beta (20.12.2017)
==============
- Change "sorting" [js]
- Change "modWebUserFileGetListProcessor"
- Change "modWebUserFileSortProcessor"
- Change "updateRanks","save" [UserFile]

2.3.2 beta (14.09.2017)
==============
- Change "initialize,runProcessor" [UserFiles]

2.3.1 beta (24.08.2017)
==============
- Fix "rank" [UserFile]

2.3.0 beta (22.06.2017)
==============
- Fix "initialize" [js]
- Add "file properties" [js]
- Fix "hash" on "update image" [UserFileImageUpdateProcessor]

2.2.28 beta (05.04.2017)
==============
- Fix sort "UserFile"

2.2.27 beta (31.03.2017)
==============
- Fix remove "UserFile"

2.2.26 beta (03.03.2017)
==============
- Fix removeFile [js]

2.2.25 beta (20.02.2017)
==============
- Add read parameters from url [js]

2.2.24 beta (27.01.2017)
==============
- Fix "jQuery.noConflict"

2.2.23 beta (26.01.2017)
==============
- Add "prepareOrientation"
- Improvement "ufWrapper"

2.2.22 beta (13.01.2017)
==============
- Add "cropper setting" snippet "ufForm"
- Add "cropperConfig" [js]

2.2.21 beta (06.01.2017)
==============
- Add "ufMs2Gallery" snippet

2.2.20 beta (05.01.2017)
==============
- Add "extension"

2.2.19 beta (31.12.2016)
==============
- Update "file.panel.js"

2.2.18 beta (06.12.2016)
==============
- Fix "vendors" resolver

2.2.17 beta (05.12.2016)
==============
- Add "process_class" setting
- Improvement "prepareClass" method

2.2.16 beta (24.11.2016)
==============
- Fix "size cropper wrapper"

2.2.14 beta (24.11.2016)
==============
- Fix "profile cropper"

2.2.12-13 beta (17.11.2016)
==============
- Fix "thumb default"

2.2.11-beta (14.11.2016)
==============
- Small fix "window.js"

2.2.10-beta (31.10.2016)
==============
- Add "image_cropper_quality" setting

2.2.9-beta (16.10.2016)
==============
- Fix "ufForm class" snippet

2.2.8-beta (15.10.2016)
==============
- Fix "list" processor
- Remove "{rand}" from media source
- Improvement "UserFile" class
- Improvement "process msproduct"
- Add "image_thumb_default" setting

2.2.7-beta (13.10.2016)
==============
- Improvement "ufWrapper", add "includeAllFiles"

2.2.6-beta (13.10.2016)
==============
- Fix "UserFile class"
- Improvement "ufWrapper"

2.2.5-beta (12.10.2016)
==============
- Add "list_default", "process_msproduct", "image_cropper_profile" setting
- Add "process msproduct"
- Add "cropper profile"
- Fix "Tools"

2.2.4-beta (21.09.2016)
==============
- Add "ufWrapper" snippet

2.2.3-beta (17.09.2016)
==============
- Fix "makeThumbnail"

2.2.2-beta (17.09.2016)
==============
- Fix "getMany" UserFile class
- Add "background-color" thumb

2.2.1-beta (18.08.2016)
==============
- Fix get "config"

2.2.0-beta (10.08.2016)
==============
- Improvement render "UserFiles tab"
- Fix remove "UserFiles"

2.1.19-beta (25.07.2016)
==============
- Improvement file upload

2.1.18-beta (29.06.2016)
==============
- Fix override "MODx.panel.Resource"

2.1.17-beta (30.05.2016)
==============
- Fix "initialize" in default.js

2.1.16-beta (14.05.2016)
==============
- Fix processing "image thumb"
- Fix get "image links"

2.1.14-beta-2.1.15-beta (14.05.2016)
==============
- Fix get "mime_type"

2.1.13-beta (12.05.2016)
==============
- Fix "class" in update window

2.1.12-beta (05.05.2016)
==============
- Fix "tooltip buttons"
- Add "overlay for editing images"
- Fix "files.store.load" after "change", "edit" file

2.1.11-beta (04.05.2016)
==============
- Fix edit "image"

2.1.10-beta (19.04.2016)
==============
- Add combo "file-type" in edit window
- Fix "file-type" when editing

2.1.9-beta (15.04.2016)
==============
- Fix error "move" files

2.1.8-beta (11.04.2016)
==============
- Correcting lexicons

2.1.7-beta (10.04.2016)
==============
- Add "class", "parent" in update window
- Add "move" files by changing the path

2.1.6-beta (28.03.2016)
==============
- Fix sortable files in dropzone
- Fix init dropzone
- Add "reload" files
- Add "dropzone_init" event

2.1.5-beta (21.03.2016)
==============
- Improvement copy links

2.1.4-beta (20.03.2016)
==============
- Fix single select

2.1.3-beta (19.03.2016)
==============
- Fix imageDefaultThumbnail
- Fix mainThumbnail

2.1.2-beta (18.03.2016)
==============
- Add setting "imageMainThumbnail"

2.1.1-beta (18.03.2016)
==============
- Fix resource tab (AjaxManager)

2.1.0-beta (10.03.2016)
==============
- Add vendors "bs3modal", "bs3dialog", "canvastoblob"
- Add edit window to front

2.0.9-beta (10.03.2016)
==============
- Add template "edit"

2.0.8-beta (10.03.2016)
==============
- Remove local vendors
- Add remote vendors

2.0.7-beta (06.03.2016)
==============
- Improved web processors
- Add salt setting

2.0.6-beta (06.03.2016)
==============
- Improved compatibility with MiniShop2, Tickets

2.0.5-beta (28.02.2016)
==============
- Improved compatibility with the old table
- Add setting for duplicate search
- Fix copy link
- Fix get mime-type for thumbnails
- Fix work with remote sources

2.0.4-beta (27.02.2016)
==============
- Add sort

2.0.3-beta (27.02.2016)
==============
- Improved compatibility with the old table

2.0.2-beta (26.02.2016)
==============
- Add ModPNotify
- Add update.class.php
- Add install validator

2.0.1-beta (25.02.2016)
==============
- Add lexicon
- Add settings

2.0.0-beta
==============
- Initial',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
UserFiles
--------------------
Author: Vgrish <vgrish@gmail.com>
--------------------

UserFiles for MODx Revolution.

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/vgrish/userfiles/issues',
    'chunks' => 
    array (
      'uf.link.file' => '<a href="[[+url]]" title="[[+name]]" target="_blank" class="userfiles-link userfiles-link-file">
	[[+name]]
</a>',
      'uf.link.image' => '<a href="[[+url]]" title="[[+name]]" target="_blank" class="userfiles-link userfiles-link-image">
	<img src="[[+url]]" class="userfiles-link-image"/>[[+name]]
</a>',
      'uf.form' => '<div class="userfiles-form-wrapper">

    <form class="userfiles-form userfiles-dropzone" id="[[+propkey]]" method="post" action=""
          data-clickable=".userfiles-form-clickable-[[+propkey]]" >

        <div class="dz-message needsclick">[[%userfiles_msg_needsclick]]</div>

    </form>

    <a class="userfiles-form-clickable userfiles-form-clickable-[[+propkey]]">[[%userfiles_msg_select_files]]</a>

</div>',
    ),
    'setup-options' => 'userfiles-2.3.7-beta/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '59aae157c583f87a8ff6c06e6f01f695',
      'native_key' => 'userfiles',
      'filename' => 'modNamespace/d04ac74ed4746de2768747207d95e97f.vehicle',
      'namespace' => 'userfiles',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'd02d0aa8568d68993625cad324fd7939',
      'native_key' => 'd02d0aa8568d68993625cad324fd7939',
      'filename' => 'xPDOFileVehicle/dd563fb41540ae9487ea92328f3f7765.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bd4b9876ac1d8082e4a43cf19cf87ce8',
      'native_key' => 'userfiles_working_templates',
      'filename' => 'modSystemSetting/9525e8c19fe92a6dfffaf84450df16d5.vehicle',
      'namespace' => 'userfiles',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'abe60325326d0fdb2de21755cc589f99',
      'native_key' => 'userfiles_source_default',
      'filename' => 'modSystemSetting/5454676fd5b788bf423152b26061f81d.vehicle',
      'namespace' => 'userfiles',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '56c342e84f192444b24fe4bca83ffe30',
      'native_key' => 'userfiles_list_default',
      'filename' => 'modSystemSetting/619481f32b7a43bc0d64577fd7f179f2.vehicle',
      'namespace' => 'userfiles',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ce1cf15c4a413b208dd4ed8be0572636',
      'native_key' => 'userfiles_process_msproduct',
      'filename' => 'modSystemSetting/9faa0b94c6b59442010fca6432687509.vehicle',
      'namespace' => 'userfiles',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3dc69c752b354260394ec7c7e7eef6ea',
      'native_key' => 'userfiles_process_class',
      'filename' => 'modSystemSetting/49c3aa09a2b12d66828e7ed77191ef61.vehicle',
      'namespace' => 'userfiles',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87011d86ed1ce1ae14a772ee121e9486',
      'native_key' => 'userfiles_duplicate_search_fields',
      'filename' => 'modSystemSetting/cad0d30ec490e299d765062d7366f005.vehicle',
      'namespace' => 'userfiles',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'addad5ce81bc14420379a8cbc907265e',
      'native_key' => 'userfiles_image_thumb_default',
      'filename' => 'modSystemSetting/3770d444c6b893e28e0cf1a4147cc723.vehicle',
      'namespace' => 'userfiles',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a51cfdcc8b0207a5c7b29e106c18d04a',
      'native_key' => 'userfiles_phpThumb_config_max_source_pixels',
      'filename' => 'modSystemSetting/69315d5d4288b7447aa87db5a045f9b7.vehicle',
      'namespace' => 'userfiles',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9275811ab25d6a5698a31524ec0daade',
      'native_key' => 'userfiles_phpThumb_config_cache_directory',
      'filename' => 'modSystemSetting/da96e5919ed9ab74044c9a411c58ae18.vehicle',
      'namespace' => 'userfiles',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '086c1332b066ff5104795450507110c5',
      'native_key' => 'userfiles_chunk_link_file',
      'filename' => 'modSystemSetting/2e728e5648dae1f93d1d1f1c7eb9e208.vehicle',
      'namespace' => 'userfiles',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ca35c52b97948b9ba56c6704d2ca2eb0',
      'native_key' => 'userfiles_chunk_link_image',
      'filename' => 'modSystemSetting/a4738a710abca83bf5adf405e7fce767.vehicle',
      'namespace' => 'userfiles',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '426cdb95144d714e855a9acef79c9fca',
      'native_key' => 'userfiles_image_mime_type',
      'filename' => 'modSystemSetting/dfb77243828a68deff68a4075dcfcf36.vehicle',
      'namespace' => 'userfiles',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '32b611e2137e076a2512a1c1339e13fe',
      'native_key' => 'userfiles_image_cropper_profile',
      'filename' => 'modSystemSetting/8241587239db03b91abe2e9d10502289.vehicle',
      'namespace' => 'userfiles',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f616062dade232fcbef47c9e694a55bb',
      'native_key' => 'userfiles_image_cropper_quality',
      'filename' => 'modSystemSetting/420bf335524dc29c4b789bb28650b5ac.vehicle',
      'namespace' => 'userfiles',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '62d0c4f470c204d627cdda1c1421528e',
      'native_key' => 'UserFilesOnBeforeFileUpload',
      'filename' => 'modEvent/67fadddb7dda94c0ef6511f8887f34ef.vehicle',
      'namespace' => 'userfiles',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e9b4efae974bf970e436311b028d35be',
      'native_key' => 'UserFilesOnAfterFileUpload',
      'filename' => 'modEvent/bf30fa70e376ec58ff2616487e7725e5.vehicle',
      'namespace' => 'userfiles',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => '492b23ee42086a48907f8d19ac4efc7a',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/b5426e1bcd5ca9fa101ab0ae97ad9da0.vehicle',
      'namespace' => 'userfiles',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '5f2b50fe6ae90fa96280e39ef1c3ff4c',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/f397f2d38283c08cc6b8868814bab3ca.vehicle',
      'namespace' => 'userfiles',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'ecf29839b1823c7321503162ac2c98de',
      'native_key' => 'userfiles',
      'filename' => 'modMenu/2e013659611770dfd37a70757a1c7547.vehicle',
      'namespace' => 'userfiles',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modStoreVehicle',
      'class' => 'modCategory',
      'guid' => '9797917c5c085e6af35cab6a63a07be8',
      'native_key' => NULL,
      'filename' => 'modCategory/94866b67f8feb86ea2a511402fbcfb15.vehicle',
      'namespace' => 'userfiles',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '1c861f08135681109d336a72c3a336c2',
      'native_key' => '1c861f08135681109d336a72c3a336c2',
      'filename' => 'xPDOScriptVehicle/25571cb739f73e9fa1af90be8a33752a.vehicle',
      'namespace' => 'userfiles',
    ),
  ),
);