<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for HybridAuth.

3.0.2-pl
==============
- Fixed retrieving date of birth from remote profile.

3.0.1-pl
==============
- Updated HybridAuth core to 3.0.0 stable
- Fixed php type of "country" in model map.

3.0.0-pl
==============
- Updated HybridAuth core.

3.0.0-rc
==============
- Refactored to use HybridAuth 3.
- Updated default providers.

2.1.0 pl
==============
- Added modx.pro provider.
- Improved compatibility with PHP 7.2.
- Improved ExtJs grid in manager.

2.0.4 pl
==============
- Fixed possible "No provider ID specified" message in the system log.
- Updated HybridAuth library to version 2.9.1.

2.0.3 pl
==============
- Improved the handling of exceptions.
- Fixed debug mode.

2.0.2 pl
==============
- Fixed possible XSS in the authorization links.

2.0.1 pl
==============
- Removed error "You cannot access this page directly" from system log.

2.0.0 pl
==============
- PSR-2
- Updated HybridAuth library to version 2.8.2.
- HybridAuth library integrated via composer.
- Ability to unbind services from a profile of user.
- If pdoTools is installed, the component will use it for the processing of a chunks.

1.1.4 pl
==============
- [#34] Fixed scopes in Facebook provider.
- Fixed possible E_WARNING in Vkontakte provider.

1.1.3 pl
==============
- [#37] Increased length of some haUserService fields.

1.1.2 pl
==============
- Updated main oAuth providers, including Google and Facebook.

1.1.1 pl
==============
- [#17] Fixed work with enabled php-apc after updated HybridAuth core to version 2.3.0.

1.1.0 pl
==============
- Updated HybridAuth core to version 2.3.0.
- Shows more errors from HybridAuth in MODX log.

1.0.0 pl
==============
- Removed object haUser. All existing users will be converted to modUser on package upgrade.
- Removed function filter_var() for email validation.
- Returned back transparent images.

0.9.0 pl
==============
- Added possibility to view user\'s linked services in manager.

0.8.8 pl1
==============
- [#26] Fixed calculation of time of the queries.
- Fixed E_NOTICE on line 99 of hybridauth.class.php.

0.8.7 pl
==============
- [#23] Fixed parameter "debug" for HybridAuth.
- [#21] Improved usernames.

0.8.6 pl
==============
- [#20] Improved work with context settings.
- Fixed method makePlaceholders.

0.8.5 pl4
==============
- Improved package uninstall and reinstall.
- [#17] Fixed work with enabled php-apc.
- Added Foursquare icon.
- Fixed possible E_WARNING on initialization.

0.8.4 pl
==============
- Added rel="nofollow" into chunk with link to provider.
- Improved description of system settings.

0.8.3 pl
==============
- Improved generation of providers links.

0.8.2 pl
==============
- Added parameter "&redirectUri=``" for solve issue "redirect_uri_mismatch" when using multiple contexts.
- Context settings now can override providers keys in system settings. Very helpful for multiple contexts.

0.8.1 pl
==============
- Fixed bug with saving parameters to $_SESSION.

0.8.0 pl
==============
- [#7] Fixed generation of links for sites in subfolder.
- [#4] Fixed login to separate contexts.
- Improved support of multiple contexts.

0.7.0 pl2
==============
- New snippet "haProfile" for update user profile.
- Automatic generation of links of providers.
- Improved chunks, added icons for some providers.
- Automatic logout of users that was been blocked by administrator.
- Added virtual field "gravatar" to class "haUser". You can get it with $modx->user->get(\'gravatar\');.
- Extension package is removed from system settings when you uninstall component.
- Replaced file "action.php" to plugin "HybridAuth".
- Added new providers: "Draugiem" and "Xing".
- [#3] Fixed "No foreign key definition for parentClass: modUser using relation alias: Services" log entries.
- Fixed order of links to providers, specified in the parameter "&providers".

0.6.0 pl
==============
- Added ability to disable new user registrations. See system setting "ha.register_users".

0.5.0 beta
==============
- Fixed login trough vk.com
- Updated HybridAuth core to version 2.1.2

0.4.0 beta
==============
- Updated HybridAuth core to version 2.1.1
- Improved initialization of main class

0.3.3 beta
==============
- Fixed issue with empty email

0.3.2 beta
==============
- Added exception handler for catching all exceptions from HybridAuth into MODX system log

0.3.1 beta
==============
- Changing user class to haUser on login through remote service.
- On uninstall of component all haUsers becomes modUsers.

0.3.0 beta
==============
- Fixed save of a photo in profile.
- Improved errors handling.
- Fixed increment of username if remote username exists on site.
- If authenticated user linking remote service record, that already exists in remote profiles of the site - this record changes the owner. You can re-link any of your records to any accounts on site.

0.2.0 beta
==============
- Added parameter &groups=``. For example, &groups=`Users:1` will add new user to group "Users" with role "member"
- Updated snippet params, added russian localization.
- Chunks localization
- Updated readme

0.1.0 beta
==============
- Initial release.',
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
HybridAuth
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------
An integration of open source social sign on php library - http://hybridauth.sourceforge.net/ into MODX Revolution.

The main goal of HybridAuth library is to act as an abstract api between your application and various social apis and identities providers such as Facebook, Twitter, MySpace, LinkedIn, Google and Yahoo.

HybridAuth enable developers to easily build social applications to engage websites vistors and customers on a social level by implementing social signin, social sharing, users profiles, friends list, activities stream, status updates and more.

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/bezumkin/modx-hybridauth/issues

--------------------
Installation
--------------------
Download and install it with MODX package manager

Then:
1. Register and get api keys from needed services. For example, create twitter application - https://dev.twitter.com/apps/new
2. Open system settings in manager, switch to hybridauth and make\\update ha.keys.Servicename. In our wxample it will be ha.keys.Twitter
3. You need to set your keys as json sting with array. {"key":"you key from twitter","secret":"secret from twitter"}. It needed for proper initialization of the library (http://hybridauth.sourceforge.net/userguide/Configuration.html).
4. Now you can run snippet [[!HybriAuth?providers=`Twitter`]] on any page.

If there will be any errors on library initialization - it will be logged in in system log.

I recorded simple video with Twitter login http://www.youtube.com/watch?v=ron_VTaQeWE for you.',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'c2394d71bcb5c35686a9f63fdbff57d2',
      'native_key' => 'hybridauth',
      'filename' => 'modNamespace/85cdf8fc648e52e421fd681b983c9ce2.vehicle',
      'namespace' => 'hybridauth',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a00ed484686d8f91bcf7661ef12a0247',
      'native_key' => 'ha.keys.Yandex',
      'filename' => 'modSystemSetting/4e262b01cd90dd7c5aa69215b61d9261.vehicle',
      'namespace' => 'hybridauth',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7c1de07b62df981b89876ef17499c642',
      'native_key' => 'ha.keys.GitHub',
      'filename' => 'modSystemSetting/88cdb12bd6ec458554789c9334dcb81d.vehicle',
      'namespace' => 'hybridauth',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '09555e0c40b52265ab3129ff41b545e4',
      'native_key' => 'ha.keys.Google',
      'filename' => 'modSystemSetting/2f67ad2cc007f037ebd0cdcb381450d9.vehicle',
      'namespace' => 'hybridauth',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '46d20f487bfd03e389e086321ad6e75c',
      'native_key' => 'ha.keys.Facebook',
      'filename' => 'modSystemSetting/a4e1f0298b76d852caf455ccd1e3063a.vehicle',
      'namespace' => 'hybridauth',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3598d86ce9ec74b4f20ebfa0a98c8c52',
      'native_key' => 'ha.keys.Vkontakte',
      'filename' => 'modSystemSetting/5b7d87b0ad67421fe157960b65249629.vehicle',
      'namespace' => 'hybridauth',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e1cd4764fe008e9c5fc9188f922bab82',
      'native_key' => 'ha.register_users',
      'filename' => 'modSystemSetting/0dd90ad5f952d12e67ea1d3cab538975.vehicle',
      'namespace' => 'hybridauth',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fdd6593749d3bd7d8d5cbf3d5b96bf59',
      'native_key' => 'ha.frontend_css',
      'filename' => 'modSystemSetting/ed037f3b51d27aedd59f7d75f9d1a845.vehicle',
      'namespace' => 'hybridauth',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'a2eb85852d9968bf42e485a7d4a429bd',
      'native_key' => NULL,
      'filename' => 'modCategory/e8fd71f4a61b956c083cc83cdfc38099.vehicle',
      'namespace' => 'hybridauth',
    ),
  ),
);