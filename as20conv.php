<? include "common.php";

pagestart("Conversations about AfterStep version 2.0 ");
?>
<?
active_section_start("nil");
?>

This page presents a selection of conversation snippets, as collected by my
IRC log, and that I find particularly usefull for general AfterStep
public.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sasha Vasko<br>
<br>
<br>

<b>Contents:</b>
<ol>
<LI><b><a href="#misc_config">Misc configuration questions</a></b></a></LI>
	<UL>
	<LI><b><u><a href="#misc_config__config_loc">Where are them user configuration files in AfterStep 2.0 ?</u></b></a></LI>
	<LI><b><u><a href="#misc_config__colors">Definig color values</u></b></a></LI>
	</UL>
<LI><b><a href="#as_startup">AfterStep startup process</b></a></LI>
	<UL>
	<LI><b><u><a href="#as_startup__waiting">AfterStep waiting for applications to start:</u></b></a></LI>
	</UL>
<LI><b><a href="#look">Configuring desktop look</b></a></LI>
	<UL>
	<LI><u><b><a href="#look__where">Where is my look file ?</b></u></a></LI>
	<LI><a href="#look__antialias"><u><b>AfterStep and Antialiasing</b></u></a></LI>
	</UL>
<LI><a href="#feel"><b>Configuring keyboard, mouse bindings and general feel</b></a></LI>
	<UL>
	<LI><a href="#feel__CopyAndPaste"><b><u>Copy And Paste</u></b></a></LI>
	<LI><a href="#feel__alttab"><u><b>Alt-tabbing through desktops</b></u></a></LI>
	<LI><a href="#feel__windowskey"><u><b>Assigning Windows Key to to the main AfterStep desktop menu.</b></u></a></LI>
	<LI><a href="#feel__screenshots"><b><u>Taking screenshots with AfterStep</u></b></a></LI>
	</UL>
<LI><a href="#myframe"><b>Configuring and using Window Decorations</b></a></LI>
	<UL>
	<LI><a href="#myframe__build"><b><u>Building window frame</u></b></a></LI>
	<LI><a href="#myframe__tbar_parts"><b><u>Composition of the Titlebar using MyFrame :</u></b></a></LI>
	<LI><a href="#myframe__buttons_color"><b><u>Making titlebar buttons change color as focus changes</u></b></a></LI>
	<LI><a href="#myframe__for_menus"><b><u>Menus and Frame decorations :</u></b></a></LI>
	<LI><a href="#myframe__shaped"><b><u>Shaped window decorations :</u></b></a></LI>
	</UL>
<LI><a href="#moveresize"><b>Window edge snapping, moving and resizing windows.</b></a></LI>
	<UL>
	<LI><a href="#moveresize__override"><b><u>Overriding AvoidCover feature and edge snapping</u></b></a></LI>
	<LI><a href="#moveresize__customize"><b><u>Customizable window edge snapping</u></b></a></LI>
	</UL>
<LI><a href="#modules"><b>Modules</b></a></LI>
	<UL>
	<LI><a href="#modules__multi"><b><u>Multiple Wharfs/Pagers/WinLists.</u></b></a></LI>
	</UL>
<LI><a href="#themes"><b>Themes</b></a></LI>
	<UL>
	<LI><a href="#themes__multi_backs"><b><u>Why Themes Don't Have multiple backgrounds</u></b></a></LI>
	</UL>
<LI><a href="#asxmlim"><b>AfterStep XML Images</b></a></LI>
	<UL>
	<LI><a href="#asxmlim__solid"><b><u>Creating image filled with color</u></b></a></LI>
	<LI><a href="#asxmlim__color_alias"><b><u>Defining color aliases to be used later in the script</u></b></a></LI>
	</UL>
<LI><a href="#wao"><b>www.afterstep.org design and contents</b></a></LI>
	<UL>
	<LI><a href="#wao__graphics"><b><u>How was the graphics generated?</u></b></a></LI>
	</UL>
<LI><a href="#devel"><b>AfterStep development</b></a></LI>
	<UL>
	<LI><a href="#devel__svg"><b><u>SVG support</u></b></a></LI>
	<LI><a href="#devel__transp"><b><u>True window transparency</u></b></a></LI>
	</UL>
<LI><a href="#compdebug"><b>Compilation and debugging</b></a></LI>
	<UL>
	<LI><a href="#compdebug__stability"><b><u>AfterStep 2.0 stability.</u></b></a></LI>
	<LI><a href="#compdebug__trace"><b><u>How to obtain extensive run-time trace?</u></b></a></LI>
	<LI><a href="#compdebug__segfault"><b><u>What is the Segmentation Fault?</u></b></a></LI>
	<LI><a href="#compdebug__selfdiag"><b><u>Compilation warning in selfdiag.c</u></b></a></LI>
	<LI><a href="#compdebug__auto_install_mail"><b><u>Automatic Installation Notification Mailing</u></b></a></LI>
	</UL>
</ol>
<br>
<br>
<?
active_section_end();
?>
<?
inactive2_section_start("nil");
?>
</div><div class="copy2">
<ol>
<LI><b><a name="misc_config">Misc configuration questions</a></b></a></LI>
<br>
	<UL>
	<LI><b><u><a name="misc_config__config_loc">Where are them user configuration files in AfterStep 2.0 ?</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>Numloxx:</u></i></td><td>&nbsp; thanks for telling me that u changed ~/GNUstep/Library/AfterStep to ~/.afterstep :-)</td></tr>
		</table>
	<br>
	<LI><b><u><a name="misc_config__colors">Definig color values</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak:</u></i></td><td>&nbsp; sasha: can ForeColor and BackColor take hex values? or keywords?</td></tr>
		<tr><td valign=top><i><u>sasha:	</u></i></td><td>&nbsp; anything goes</td></tr>
		<tr><td valign=top><i><u>sasha:	</u></i></td><td>&nbsp; you can also do rgb(r,g,b) or hsv(h,s,v) or argb(a,r,g,b) or ahsv()</td></tr>
		</table>
	</UL>

<br>
<LI><b><a name="as_startup">AfterStep startup process</b></a></LI>
<br>
	<UL>
	<LI><b><u><a name="as_startup__waiting">AfterStep waiting for applications to start:</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak: </u></i></td><td>&nbsp; when AS starts for some reason, my wharf comes up then stops for a while unless I click anywhere</td></tr>
		<tr><td valign=top><i><u>sasha:	</u></i></td><td>&nbsp; On startup AfterStep runs all the commands listed in InitFunction. If any of this commands is Wait - AfterStep will wait for specified application to start, before proceeding further.
                     Default timeout is 30 seconds, but you can override it by pressing mouse button anywhere on the desktop.</td></tr>
		</table>
	</UL>
<br>
<LI><b><a name="look">Configuring desktop look</b></a></LI>
<br>
	<UL>
	<LI><u><b><a name="look__where">Where is my look file ?</b></u></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>b00>: </i></td><td>&nbsp; Vaevictus: a bit off track: where is my look file, if im still using AS 1.8.11 ?</td></tr>
		<tr><td valign=top><i><u>b00>: </i></td><td>&nbsp; i dont see look file in Gnustep</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; ~/GNUstep/Library/AfterStep/looks</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; but you may need to copy one from /ulsa</td></tr>
		<tr><td valign=top><i><u>b00: </i></td><td>&nbsp; /ulsa ?</td></tr>
		<tr><td valign=top><i><u>b00: </i></td><td>&nbsp; /usr ?</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; /usr/local/share/afterstep/</td></tr>
		<tr><td valign=top><i><u>sasha: </i></td><td>&nbsp; Note that beginning with AfterStep 2.0 user's config files are located in ~/.afterstep instead of ~/GNUstep/Library/AfterStep</td></tr>
		</table>
		<br>
	<LI><a name="look__antialias"><u><b>AfterStep and Antialiasing</b></u></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>b00: </i></td><td>&nbsp; how can i change AS to use antialiasing ? and how do i change fonts in general here ?</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; depends on which version you use</td></tr>
		<tr><td valign=top><i><u>b00: </i></td><td>&nbsp; 1.8.11</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; upgrade to 2.0</td></tr>
		<tr><td valign=top><i><u>b00: </i></td><td>&nbsp; why ?</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; 2.0beta is way better, though a bit buggy yet (thus beta)</td></tr>
		<tr><td valign=top><i><u>sasha: </i></td><td>&nbsp; AfterSTep supports Antialiased text only beginning with version 2.0. The best quality of antialiased text could be obtained by using TTF fonts in look (as all default looks do).</td></tr>
		</table>
	</UL>
<br>
<LI><a name="feel"><b>Configuring keyboard, mouse bindings and general feel</b></a></LI>
<br>
	<UL>
	<LI><a name="feel__CopyAndPaste"><b><u>Copy And Paste</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; how can i configure copy and paste to be ctrl+c and ctrl+v and not other things?</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; edit your feel file - remove bindings for V and C  keys</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; sashaW : remove bindings? i thought i would have to add new ones</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; afterstep cannot control copy and the support for pasting is a hack, but one that mostly works</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; so, err, when i try to use say copy and paste in an app, such as Kate, from kde, it doesnt work from the as</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; you mean afterstep's control-v override doesn't work?</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; they must be ignoring fake keyboard events then - some versions of xterm ignore it too ...</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; afterstep can't control application behavior though... probably the best bet if control-v isn't always working for you when you need it to is to switch to using the application's paste function</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; if that's also mapped to control-v, you'll need to turn off afterstep's override by commenting it out of the feel</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; ok, then ill try to ovveride it. But the thing is, it never works, i mean ctrl+v, in AS ( aterm and stuff)</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; i use middle mouise button - that works</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; huh, i wonder why</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; try to unncomment it in the feel file then</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; allanon thank you</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; to be honest, i wasn't really too fond of the control-v feature when guylhem asked me to implement it</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; you're welcome</td></tr>
		</table>
		<br>
	<LI><a name="feel__alttab"><u><b>Alt-tabbing through desktops</b></u></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; allanon also, how can i make alt+tab not to cycle thru all the windows of the pager, but only thru windows in a particular square im in ?</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; there is no way to make AS only alt-tab through visible windows</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; if it is alt-tabbing through all desktops, that can be turned off by disabling the AutoTabThroughDesks option</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; well, it goes tru all the windows of one of my lil 4x4 desk</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; there's no way to turn that off, sorry</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; it is a fairly popular feature request, though, so it might be implemented at some point</td></tr>
		</table>
		<br>
	<LI><a name="feel__windowskey"><u><b>Assigning Windows Key to to the main AfterStep desktop menu.</b></u></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; oh, i cant help it! i have smth else to ask: i would like the main menu ( one that you say call with the mouse, dont know whats it called ) to work with the windows key. Is this also configurable in the feel file? i already xmodmap'ed the windows key</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; yup</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; Mouse 1         R       A       PopUp "0"</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; ^ that line is the one that pops up the desktop menu</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; you'll want to replace "Mouse 1" with a "Key" entry</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; great :)</td></tr>
		</table>
		<br>
	<LI><a name="feel__screenshots"><b><u>Taking screenshots with AfterStep</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; TakeScreenShot  &quot;-&quot;   vaevictus_screenshot.png</td></tr>
      		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; so... are you using the 100% quality setting on your screenshots?</td></tr>
      		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; no</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; therin lies the problem</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; but you can submit me a patch</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; like, easily</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; screenshot_func_handler() in src/afterstep/functions.c</td></tr>
		</table>
	</UL>
<br>
<LI><a name="myframe"><b>Configuring and using Window Decorations</b></a></LI>
<br>
	<UL>
	<LI><a name="myframe__build"><b><u>Building window frame</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>Vaevictus:</u></i></td><td>&nbsp; I've got the frame for the righthand side in the one window...(to look like MS Windows window frame)</td></tr>
		<tr><td valign=top><i><u>sasha:	   </u></i></td><td>&nbsp; yes</td></tr>
		<tr><td valign=top><i><u>Vaevictus:</u></i></td><td>&nbsp; and it should keep that white bar on the left side. But the blue from the top shouldn't be part of the corner, IMO.</td></tr>
		<tr><td valign=top><i><u>sasha:    </u></i></td><td>&nbsp; it should not. What you do is instead of using plain blue background for title - you use vertical slice that  includes upper and bottom gray bevels</td></tr>
		</table>
	<br>
	<LI><a name="myframe__tbar_parts"><b><u>Composition of the Titlebar using MyFrame :</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; 1) instead of storing win buttons in pngs - write xmls using clipart from icons/dots</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; 2) buttons must be transparent and should not include underlying background</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; and again, buttons should be xmls, and whatever clipart is missing  - must be added to dots/</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; while saving clipart into dots/ - make it grayscale as much as possible, so we can change its color in different themes</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; http://afterstep.sourceforge.net/data/desktop/icons/dots/index.html</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; list of current clipart in dots/</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; now, your LeftBtnBackground should be not just a bar, but its should approximate the size of buttons as close as possible ( although tiling could be done too )</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; the background is the spacer?</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; no</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; maybe i'm thinking about this all wrong</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; you are</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; hold on. lemme explain how i see it.</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; we've got the graphic "from the corner to the first button"</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; "in the background of the button"</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; "in between buttons"</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; "in between the buttons and the titlebar area"</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; and then to the other corner... do we not have those?</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; not that many</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; we need that many, then. What ones do we have, (which are we missing)?</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; BtnBackground     Spacer   Title</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; BtnBackground covers entire space from the edge of the titlebar and to the end of buttons block</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; so the first three of my things are "btnBackground"</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; that's gotta change... i think: you may want to tile or scale the "background of the buttons". .. but you wont want to either tile or scale it if the piece that touches the titlebar is a shaped thing.</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; will your glass theme accomodate rearragned buttons?</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; it does</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; scaling factor is too small to sufficiently distort the picture</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; depends on your picture: you could easily double or half the bevel on a corner that way</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; if you make background as 2/3 of the max size of the buttons set, and you have 2 pixel border  - you'll almost never see it grow noticeably larger or smaller due to interpolating scaling algorithm.</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; my borders are currently 5 pixels... and you're saying to reduce that to 3 pixels and I won't notice?</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; scratch that - the math is wrong: lets say my buttons are 15 pixels, as I think they are in win9x...</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; I can't have separate backgrounds for each button, as wellas spacers between buttons</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; that's a pretty severe shortcoming, I think</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; not really, no</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; if your buttons are one color from a colorscheme, and your titlebar is another, putting the spacers inside the xml for the buttons gets pretty complex, if you asked me</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; if your buttons are the same size - you can esily do inter-button spacer by drawing them on BtnBackground</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; not that it's not scalable.. but it's a pretty ugly requirement that buttons must be the same size to be properly spaced in your look</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; well, thats how its going to be , unless I want to rewrite entire drawing code - which I don't</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; plus there are memory cosumption issues that pretty much dictated current limitations.</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; okie then. How does it work that we're limited that way? in laymens terms?</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; layout is limited to grid of 8x8 ( within a window )</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; titlebar - is one window, and right now it has 7x1 elements</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; the buttons count as elements? or what? i can only get 5</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; left btn, spacer, title, spacer, right btn + 2 hidden ones</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; ooh. what do the hidden ones do?</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; they needed to properly fit titleBackground to the title</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; but here is another solution: make button background as big as you can, and then tile it to buttons size</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; again, doesn't solve the problem of different buttons size, but okay, I can work around it</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; the big problem is, I believe I will see distortion.</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; ok</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; since I often operate afterstep with all the buttons on either side of the titlebar, not to mention VerticalTitleBar</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; in Vertical title everything gets rotated automagically</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; my borders are a 5 pixel "bevel" looking thing if they don't continue fluidly, even 1 pixel off, it'll look terrible it leaves no room to scale the background image and I can't tile it because it's not horizontally symmetrical</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; why isn't it ?</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; because one side contains the corner, and the otherside is the titlebar?</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; the titlebar, spacer and button background are all the same color</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; then make it long - longer then any combination of buttons</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; lets make the spacers be part of the titlebar</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; otherwise, my titlebar will be like 5% of my windowsize, and non-existant on vertical</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; then again, you're as against scaling your spacers as I am scaling my "corners"</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; if you use :</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; LeftBtnBackAlign   HTiled,VScaled,LabelSize</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; it will get cropped to fit size of buttons</td></tr>
		</table>
	<br>
	<LI><a name="myframe__buttons_color"><b><u>Making titlebar buttons change color as focus changes</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; the image is  :</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; &lt;composite&gt;</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;solid color="#00000000" width=1 height=23 clip_width=75/&gt;</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;img x=71 src="bars/win9x_title_right_corner.png"/&gt;</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; &lt;/composite&gt;</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; then in look :</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; RightBtnBackAlign   Right,HTiled,VScaled,LabelSize</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; and there should be no LeftSpacer stuff</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; total transparency is required so that focus changes can show through</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; are you saying the title background will show through?</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; yes</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; saying that, I'm really confused how to make a title bar now.</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; well, first the background image is rendered, which is determined by MyStyle</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; second all the backgrounds from MyFrames are rendered on top of it</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; (alpha-blended)</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; i understand then</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; finally, buttons and text are rendered on top of the above</td></tr>
		<tr><td valign=top><i><u>sashaW:	</u></i></td><td>&nbsp; now, difficulty is that focus is only shown using MyStyles - which changes lowermost background and text nor buttons, not second tier backgrounds are affected by focus changes, so if you want them to change color - you need to make them semitransparent</td></tr>
		<tr><td valign=top><i><u>Vaevictus :	</u></i></td><td>&nbsp; hey sasha: I think I've got problems with getting that right vertical bar /corner piece in my xml</td></tr>
		<tr><td valign=top><i><u>sashaW :   	</u></i></td><td>&nbsp; hmm, I thought I pasted to you the exact xml ?</td></tr>
		<tr><td valign=top><i><u>Vaevictus :	</u></i></td><td>&nbsp; &lt;composite&gt;&lt;solid color="#00000000" width=1 height=23 clip_width=75/&gt;&lt;img x=71 src="bars/win9x_title_right_corner.png"/&gt;&lt;/composite&gt;</td></tr>
		<tr><td valign=top><i><u>Vaevictus :	</u></i></td><td>&nbsp; that's what's not working - it looks good on the left side, but it doesn't show the png on the right side</td></tr>
		<tr><td valign=top><i><u>sashaW :   	</u></i></td><td>&nbsp; did you change the Align ?</td></tr>
		<tr><td valign=top><i><u>sashaW :   	</u></i></td><td>&nbsp; RightBtnBackAlign   Right,HTiled,VScaled,LabelSize</td></tr>
		<tr><td valign=top><i><u>Vaevictus :	</u></i></td><td>&nbsp; sashaW: good call...that's it</td></tr>
		</table>
	<br>
	<LI><a name="myframe__for_menus"><b><u>Menus and Frame decorations :</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; I've noticed there were issues of the title bar not showing up on menus... is that a screw up on my part?</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; Menus are using special Style named "ASMenu" to determine what decorations they should have. Now you may define your own Style "ASMenu" in the database file and turn off titlebar and handles in there if you really want to, but that will cause Menus to not have any titles.</td></tr>
		</table>
	<br>
	<LI><a name="myframe__shaped"><b><u>Shaped window decorations :</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak:   </u></i></td><td>&nbsp; sasha: to get a 'shaped' effect, do you simply make some of the picture transparent?</td></tr>
		<tr><td valign=top><i><u>sasha:    </u></i></td><td>&nbsp; yes, you make some of the picture transparent</td></tr>
		<tr><td valign=top><i><u>sasha:    </u></i></td><td>&nbsp; everything with opacity below 127  will be cut off by shape, and everything above it will be blended with background</td></tr>
		<tr><td valign=top><i><u>sashaW:   </u></i></td><td>&nbsp; shaped Titlebar require BackPixmap 125 or 126 and, of course the image must be shaped</td></tr>
	        <tr><td valign=top><i><u>Vaevictus:</u></i></td><td>&nbsp; so your titlebar has to be scalable?</td></tr>
		<tr><td valign=top><i><u>Vaevictus:</u></i></td><td>&nbsp; i'm confused on how you can use one image to make a shaped titlebar without it being horribly different for large and small windows</td></tr>
		<tr><td valign=top><i><u>sashaW:   </u></i></td><td>&nbsp; try BackPIxmap 125 tiles/empty</td></tr>
		<tr><td valign=top><i><u>sashaW:   </u></i></td><td>&nbsp; again - AS renders shape of the entire tbar, then combines it with shapes of second tier backgrounds, and then combines it with buttons and text and bevel</td></tr>
		<tr><td valign=top><i><u>Vaevictus:</u></i></td><td>&nbsp; so you plan for worst case scenario, and the btnbkground covers up the "extra" shaping, and it does scale</td></tr>
		<tr><td valign=top><i><u>sashaW:   </u></i></td><td>&nbsp; tiles/empty is like, empty shape - you'll only see buttons and text</td></tr>
		<tr><td valign=top><i><u>sashaW:   </u></i></td><td>&nbsp; 125 is scaled I think, while 126 is tiled</td></tr>
		</table>
	</UL>
<br>
<LI><a name="moveresize"><b>Window edge snapping, moving and resizing windows.</b></a></LI>
<br>
	<UL>
	<LI><a name="moveresize__override"><b><u>Overriding AvoidCover feature and edge snapping</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>Vaevictus:</u></i></td><td>&nbsp; I can't get Wharf to let me cover it.</td></tr>
		<tr><td valign=top><i><u>sasha:    </u></i></td><td>&nbsp; Press and hold Ctrl+Shift while moving resizing window.</td></tr>
		</table>
		<br>
	<LI><a name="moveresize__customize"><b><u>Customizable window edge snapping</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; sashaW: did you ever look into making the "width" between windows customizable? When they border-snap</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; no yet, but I will</td></tr>
		</table>
	</UL>
<br>
<LI><a name="modules"><b>Modules</b></a></LI>
<br>
	<UL>
	<LI><a name="modules__multi"><b><u>Multiple Wharfs/Pagers/WinLists.</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>_den^lb>: </i></td><td>&nbsp; allanon is that possible to have 2 wharfs, (with pagers in each), on left AND right side ?</td></tr>
		<tr><td valign=top><i><u>allanon>: </i></td><td>&nbsp; yes make a symlink to the Wharf app and call it something else (like Wharf2)</td></tr>
		<tr><td valign=top><i><u>_den^lb>: </i></td><td>&nbsp; ah, sweet</td></tr>
		<tr><td valign=top><i><u>_den^lb>: </i></td><td>&nbsp; same sort off as i do with pagers ? Pager0, Pager1 ?</td></tr>
		<tr><td valign=top><i><u>allanon>: </i></td><td>&nbsp; then put the options in the wharf config file like *Wharf</td></tr>
		<tr><td valign=top><i><u>allanon>: </i></td><td>&nbsp; and *Wharf2</td></tr>
		<tr><td valign=top><i><u>allanon>: </i></td><td>&nbsp; same with pager</td></tr>
		<tr><td valign=top><i><u>allanon>: </i></td><td>&nbsp; there's an example of doing that with wharf that comes with the afterstep 2.0 configs</td></tr>
		<tr><td valign=top><i><u>allanon>: </i></td><td>&nbsp; Wharf and MonitorWharf</td></tr>
		</table>
	</UL>
<br>
<LI><a name="themes"><b>Themes</b></a></LI>
<br>
	<UL>
	<LI><a name="themes__multi_backs"><b><u>Why Themes Don't Have multiple backgrounds</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; you know, like say i have 4 pagers (4x4 inside)</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; for some reason, when you say use some theme, the background for the pager only gets to some of them, and they dont look same</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; in fact one of them i think only</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; the background image can be associated with one or more desktops</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; some theme makers only consider one desktop when making the theme</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; ah, i see</td></tr>
		</table>
	</UL>
<br>
<LI><a name="asxmlim"><b>AfterStep XML Images</b></a></LI>
<br>
	<UL>
	<LI><a name="asxmlim__solid"><b><u>Creating image filled with color</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak:</u></i></td><td>&nbsp; how would I create a.. black background? just plain old black</td></tr>
		<tr><td valign=top><i><u>sasha:	</u></i></td><td>&nbsp; echo "&lt;solid width=1 height=1 color=#FF000000/&gt;" &gt; black.xml</td></tr>
		</table>
	<br>
	<LI><a name="asxmlim__color_alias"><b><u>Defining color aliases to be used later in the script</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>sashaW:		</u></i></td><td>&nbsp; adds new tag to asxml</td></tr>
		<tr><td valign=top><i><u>sashaW:		</u></i></td><td>&nbsp; no, &lt;color&gt;</td></tr>
		<tr><td valign=top><i><u>Vaevictus:	</u></i></td><td>&nbsp; sasha: color tag does what? same as &lt;solid color=#&gt; ?</td></tr>
		<tr><td valign=top><i><u>sasha:		</u></i></td><td>&nbsp; Vaevictus: no it allows you to define symbolic name for a color - similar to colorscheme. For example: &lt;color domain=&quot;ascs&quot; name=&quot;Active&quot; 		argb=&quot;#FF665646&quot;/&gt;</td></tr>
		</table>
	</UL>
<br>
<LI><a name="wao"><b>www.afterstep.org design and contents</b></a></LI>
<br>
	<UL>
	<LI><a name="wao__graphics"><b><u>How was the graphics generated?</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>sasha: </i></td><td>&nbsp; I want to use xmls supplied with distro to generate graphics for wao.</td></tr>
		</table>
	</UL>
<br>
<LI><a name="devel"><b>AfterStep development</b></a></LI>
<br>
	<UL>
	<LI><a name="devel__svg"><b><u>SVG support</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; sashaW: did you ever what ever happened with that svg patch?</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; I never managed to get them libraries to detect properly so I never applied it - I requested the guy to get me better configure script's part of it</td></tr>
		</table>
		<br>
	<LI><a name="devel__transp"><b><u>True window transparency</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; hates how Aqua does actual window transparency</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; makes things impossible to read</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; I agree</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; did some experimenting with this for AS, and desided against it</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; thank god</td></tr>
		</table>
	</UL>
<br>
<LI><a name="compdebug"><b>Compilation and debugging</b></a></LI>
<br>
	<UL>
	<LI><a name="compdebug__stability"><b><u>AfterStep 2.0 stability.</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; the only reason I could find was that AS 1.8 might set the size of the wharf item before the item inside it resizes</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; 2.0 isn't giving me the same problem</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; when will there be a deb :O</td></tr>
		<tr><td valign=top><i><u>r00t: </i></td><td>&nbsp; if you want it so bad, compile it :P</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; but 2.0 is a developing version still, err, betta ?</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; alpha</td></tr>
		<tr><td valign=top><i><u>_den^lb: </i></td><td>&nbsp; ah</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; it claims to be beta but really.</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; runs away before someone smites him.</td></tr>
		</table>
		<br>
	<LI><a name="compdebug__trace"><b><u>How to obtain extensive run-time trace?</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; could you recompile it with --enable-gdb ?</td></tr>
		<tr><td valign=top><i><u>heviarti: </i></td><td>&nbsp; sashaW: do i feed that to configure or the compiler?</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; ./configure --enable-gdb</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; that will make AS spit megabytes of trace info</td></tr>
		<tr><td valign=top><i><u>heviarti: </i></td><td>&nbsp; sashaW: ok</td></tr>
		<tr><td valign=top><i><u>heviarti: </i></td><td>&nbsp; is there some way i can make it drop the log on one of my other disks?</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; afterstep -l /my/other/disk/afterstep.log</td></tr>
		</table>
		<br>
	<LI><a name="compdebug__segfault"><b><u>What is the Segmentation Fault?</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; the "segments" in "segmentation fault" have nothing to do with intel's so-called "real mode" segmented memory scheme</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; you can get segmentation faults on MacOSX. :D</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; segments are created by the OS and the memory controller to prevent an application from being able to access another application's allocated memory</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; ram is handed out in pages (whose size varies depending on the OS and the architecture)</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; trying to access another applications memory woudl be a segmentation fault too</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; a typical page size might be 16k</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; though linux allows it a lot more than it should. ;)</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; if your application attempts to touch memory that was not allocated to it, the memory controller generates a page fault</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; which is them reported to the application as a segmentation fault</td></tr>
		<tr><td valign=top><i><u>MG_Tak </i></td><td>&nbsp; attempts to touch allanon's memory..</td></tr>
		<tr><td valign=top><i><u>allanon: </i></td><td>&nbsp; MG_Tak: segmentation fault</td></tr>
		<tr><td valign=top><i><u>allanon </i></td><td>&nbsp; kills the MG_Tak process</td></tr>
		</table>
		<br>
	<LI><a name="compdebug__selfdiag"><b><u>Compilation warning in selfdiag.c</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>heviarti: </i></td><td>&nbsp; sashaW: selfdiag.c: In function `find_func_symbol':</td></tr>
		<tr><td valign=top><i><u>heviarti: </i></td><td>&nbsp; selfdiag.c:203: warning: cast from pointer to integer of different size</td></tr>
		<tr><td valign=top><i><u>heviarti: </i></td><td>&nbsp; not 64 bit clean prolly?</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; no, this particular warning is unavoidable</td></tr>
		</table>
		<br>
	<LI><a name="compdebug__auto_install_mail"><b><u>Automatic Installation Notification Mailing</u></b></a></LI>
		<table cellspacing=0 cellpadding=0 border=0>
		<tr><td valign=top><i><u>r00t: </i></td><td>&nbsp; imagine how irc channels would look if all users were in #&lt;windowmanager&gt;</td></tr>
		<tr><td valign=top><i><u>sashaW </i></td><td>&nbsp; would not mind that - very satisfying feeling</td></tr>
		<tr><td valign=top><i><u>MG_Tak </i></td><td>&nbsp; would like that too ;)</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; sashaW: you should add "registration" code to AS, like Pine has</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; hmm, ./configure --send-postcard-to-developer ?</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; sashaW: nah - it'd have to be automatic</td></tr>
		<tr><td valign=top><i><u>r00t: </i></td><td>&nbsp; ./configure --disable-send-postcard-to-developer</td></tr>
		<tr><td valign=top><i><u>sashaW </i></td><td>&nbsp; remembers that some freaks tend to raise hell about "privacy " concerns</td></tr>
		<tr><td valign=top><i><u>_den^lb>: </i></td><td>&nbsp; well, privacy is kinda nice</td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; sashaW: how about --send or --disable with the default to "ASK"</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; but then again - when ppl raise hell - that promotes you :)</td></tr>
		<tr><td valign=top><i><u>r00t: </i></td><td>&nbsp; lol</td></tr>
		<tr><td valign=top><i><u>sashaW: </i></td><td>&nbsp; the only drawback I see is that I'll need to keep registration database</td></tr>
		<tr><td valign=top><i><u>Vaevictus </i></td><td>&nbsp; remembers ... mrtg does it i think... a ./configure that pauses for a few seconds in the ./configure routine saying "Ordering CD from www.website.com... .. .. .. Just kidding"</td></tr>
		<tr><td valign=top><i><u>MG_Tak: </i></td><td>&nbsp; Vaevictus: I like that.. - </td></tr>
		<tr><td valign=top><i><u>Vaevictus: </i></td><td>&nbsp; it's really cute</td></tr>
		<tr><td valign=top><i><u>sashaW </i></td><td>&nbsp; adds send-postcard-to-developer to configure</td></tr>
		</table>
	</UL>
</ol>
<?
inactive2_section_end();
?>
<?
pageend();

