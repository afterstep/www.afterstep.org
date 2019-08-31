<? local_doc_main_menu("5"); ?>
<img src=documentation/images/ecrire.png align=middle>
 <b>AfterStep Copyright</b><br>
<hr>
 &nbsp; <? if ($sub == "") echo "<b>SourceCode</b>"; else local_doc_url("visualdoc.php","SourceCode","copyright",$srcunset,$subunset) ?>
 &nbsp; <? if ($sub == "docweb") echo "<b>Documentation & WebSite</b>"; else local_doc_url("visualdoc.php","Documentation & WebSite","copyright",$srcunset,"docweb") ?>
 &nbsp; <? if ($sub == "license") echo "<b>License</b>"; else local_doc_url("visualdoc.php","License","copyright",$srcunset,"license") ?>
 &nbsp; <? if ($sub == "old") echo "<b>Hall of Fame</b>"; else local_doc_url("visualdoc.php","Hall of Fame","copyright",$srcunset,"old") ?>

<hr>
<? 
if ($sub == "") echo "\n
<br><b>FIXME - the COPYRIGHT file distributed with AfterStep is still incomplete.</b><br>
<br>
<center>This is AfterStep 2 COPYRIGHT</center>
<br>
<br>
Copyright (C) 2000  All Rights Reserved.<br>
<br>
Permission is hereby granted, free of charge, to any person obtaining a
copy of this software and associated documentation files (the \"Software\"),
to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:<br>
<br>
The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.<br>
<br>
THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.  IN NO EVENT SHALL
BRIAN PAUL BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.<br>
<br>
<li>libAfterBase</li>
<ul>Copyright (C) 1999-2004 Sasha Vasko   <sasha at aftercode.net><br>
Copyright (c) 2000,2001 Andrew Ferguson <andrew@owsla.cjb.net><br>
Copyright (C) 1999 Ethan Fischer <allanon@crystaltokyo.com><br>
Copyright (C) 1998 Pierre Clerissi <clerissi@pratique.fr><br>
</ul>
<li>libAfterImage</li>
<ul>Copyright (C) 1999-2004 Sasha Vasko <sasha at aftercode.net><br>
Copyright (c) 2004 Valeriy Onuchin <Valeri dot Onoutchine at cern dot ch><br>
Copyright (c) 2001 Eric Kowalski <eric@beancrock.net><br>
Copyright (c) 1999,2001 Ethan Fisher <allanon@crystaltokyo.com><br>
Copyright (C) 1999-2001 Free Software Foundation, Inc.<br>
Copyright (c) 2004 Maxim Nikulin <nikulin at gorodok.net>
</ul>

<li>libAfterStep</li>
<ul>FIXME</ul>
<li>libAfterConf</li>
<ul>FIXME</ul>
<li>afterstep</li>
<ul>FIXME</ul>
<li>ASDocGen</li>
<ul>FIXME</ul>
<li>Pager</li>
<ul>FIXME</ul>
<li>Wharf</li>
<ul>FIXME</ul>
<li>WinList</li>
<ul>FIXME</ul>
<li>WinTabs</li>
<ul>FIXME</ul>
</ul>


";

if ($sub == "docweb") echo "\n
<br>
<li>Documentation System (ASDocGen):</li>
<ul>Sasha Vasko, Niklas Lunger, M.A. Darche</ul>
as the docs are derived from old 1.8 man pages, the old copyright is still valid<br>
FIXME - Add Man Page Authors<br>
<br>
<li>Website :</li>
<ul>Sasha Vasko, grfxgirl, Niklas Lunger </ul>
";

if ($sub == "license") echo "\n
<br>
AfterStep itself is (mostly) covered by the <a href=\"http://www.gnu.org/licenses/licenses.html#GPL\">GNU General Public License</a>, Version <a href=\"http://www.gnu.org/licenses/gpl.html\">2 or later</a><br>
<br>
if you want to contribute to the code do so under:
<li>GPL for all the applications</li>
<li>LGPL for libAfterBase and libAfterImage</li>
<br><br>
If not stated otherwise this documentation is <b>free for all</b> (TM)<br>
";

 if ($sub == "old") echo "\n
<br>
The following individuals have contributed to AfterStep in the past, but their
work has been replaced in the course of evolution.<br><br>
<center>Nevertheless their effort shall not be forgotten ! Thank You.</center>
<br>\n
<li>Afterstep :</li>\n
<ul>\n
<prw>\n
<li>lib</li>\n
Copyright (c) 1997 Guylhem AZNAR<br>\n
Copyright (c) 1998 Chris Ridd, Michael Vitecek, Pierre Clerissi<br>\n
Copyright (c) 1999 Ethan Fischer<br>\n
<br>
<li>asimagelib</li>
Copyright 1986, 1998 The Open Group<br>
Copyright (c) 1997 Alfredo K. Kojima<br>
Copyright (c) 1999 Ethan Fischer
, Sasha Vasko<br>
<br>
<li>afterstep</li>
Copyright (c) 1989 X Consortium<br>
Copyright (c) 1994 Robert Nation<br>
Copyright (c) 1995 Bo Yang<br>
Copyright (c) 1996 Frank Fejes<br>
Copyright (c) 1997 Alfredo K. Kojima, Dong-hwa Oh, Raphael Goulais, Tomonori<br>
Copyright (c) 1998 Chris Ridd, Guylhem Aznar, Makoto Kato, Michal Vitecek,
 Mike Venaccio, Nat Makarevitch, Rafal Wierzbicki, Sasha Vasko<br>
Copyright (c) 1999 Ethan Fischer<br>
<br>
<li>Animate</li>
Copyright (c) 1996 Alfredo Kengi Kojima<br>
Copyright (c) 1996 Kaj Groner<br>
Copyright (c) 1997 Frank Scheelen<br>
<br>
<li>Audio</li>
Copyright (c) 1994 Mark Boyns, Mark Scott, Robert Nation, Szijarto Szabolcs<br>
Copyright (c) 1997 Guylhem Aznar<br>
<br>
<li>Auto</li>
Copyright (c) 1994 Robert Nation<br>
Copyright (c) 1996 Frank Fejes<br>
<br>
<li>Banner</li>
Copyright (c) 1994 Robert Nation<br>
Copyright (c) 1996 Robert Depenbrock<br>
Copyright (c) 1998 Sasha Vasko<br>
<br>
<li>Cascade</li>
Copyright (c) 1996 Andrew Veliath<br>
Copyright (c) 1997 Guylhem Aznar<br>
<br>
<li>Clean</li>
Copyright (c) 1994 Robert Nation<br>
Copyright (c) 1997 Guylhem Aznar<br>
<br>
<li>Form</li>
Copyright (c) 1995 Thomas Zuwei Feng<br>
Copyright (c) 1996 Michael Beam, Takanori Kubota<br>
Copyright (c) 1998 Makoto Kato<br>
Copyright (c) 1998 Sasha Vasko<br>
<br>
<li>Pager</li>
Copyright (c) 1995 Rob Nation<br>
Copyright (c) 1996 Dan Weeks, Rainer M. Canavan<br>
Copyright (c) 1997 Guylhem Aznar, ric@giccs.georgetown.edu<br>
Copyright (c) 1998 Doug Alcorn
, Eric Tremblay
, Makoto Kato
, Michal Vitecek
, Ric Lister
, Sasha Vasko<br>
<br>
<li>Save</li>
Copyright (c) 1994 Per Persson, Robert Nation<br>
Copyright (c) 1997 Guylhem Aznar<br>
<br>
<li>Script</li>
Copyright (c) 1984, 1989, 1990 Free Software Foundation, Inc.<br>
Copyright (c) 1996 Frederic Cordier<br>
Copyright (c) 1998 Guylhem Aznar, Sasha Vasko<br>
<br>
<li>Scroll</li>
Copyright (c) 1994 Nobutaka Suzuki, Robert Nation<br>
Copyright (c) 1997 Guylhem Aznar
<br>
<li>Sound</li>
Copyright (c) 1996 Alfredo Kojima<br>
Copyright (c) 1998 Sasha Vasko<br>
<br>
<li>Tile</li>
Copyright (c) 1996 Andrew Veliath<br>
Copyright (c) 1997 Guylhem Aznar<br>
Copyright (c) 1998 Sasha Vasko<br>
<br>
<li>Wharf</li>
Copyright (c) 1993 Robert Nation<br>
Copyright (c) 1995 Bo Yang<br>
Copyright (c) 1996 Alfredo K. Kojima, Beat Christen, Frank Fejes, Kaj Groner, mj@dfv.rwth-aachen.de<br>
Copyright (c) 1998 Ethan Fischer, Guylhem Aznar, Michal Vitecek, Sasha Vasko<br>
<br>
<li>WinList</li>
Copyright (c) 1994 Mike Finger, Nobutaka Suzuki, Robert Nation and Nobutaka Suzuki<br>
Copyright (c) 1997 Guylhem Aznar<br>
Copyright (c) 1998 Makoto Kato, Michal Vitecek, Rene Fichter, Sasha Vasko<br>
Copyright (c) 1999 Rafal Wierzbicki<br>
<br>
<li>Zharf</li>
Copyright (c) 1993 Robert Nation<br>
Copyright (c) 1998 Guylhem Aznar, Ethan Fischer, Guylhem Aznar, Michal Vitecek, Sasha Vasko<br>
<br>
<li>WinList</li>
Copyright (c) 1994 Mike Finger, Nobutaka Suzuki, Robert Nation and Nobutaka Suzuki<br>
Copyright (c) 1997 Guylhem Aznar<br>
Copyright (c) 1998 Makoto Kato, Michal Vitecek, Rene Fichter, Sasha Vasko<br>
Copyright (c) 1999 Rafal Wierzbicki<br>
<br>
<li>asetroot</li>
Copyright (c) 1994 Robert Nation and Nobutaka Suzuki<br>
Copyright (c) 1998 Rafal Wierzbicki<br>
</ul>
<li>Aterm :</li>
<ul>Sasha Vasko</ul>
"; ?>