&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Look MyFrame</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines how AfterStep should construct window's frame</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","MyFrame_options","MyFrame",$subunset) ?>
 <hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Look","Look",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyBackground","MyBackground",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
 
 <? local_doc_url("visualdoc.php","MyStyle","MyStyle",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Suported hints","SupportedHints",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Titlebar layout","TbarLayout",$srcunset,$subunset) ?>
</UL>
<hr>


<A NAME="overview"><UL>
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  frame decorations (aka MyFrame)</B></DT>
<P class="dense">Each &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is surrounded by so-called frame decoration. each
frame decoration could be built from 9 TBars:</P>
               <P class="dense">1) Main Titlebar  with icons on left, label in the middle and
                   icons on right. &nbsp;<? local_doc_url("visualdoc.php","Label","Pager_options#options.Label",$srcunset,$subunset) ?>
  may also have special underlying image -
                   so called &nbsp;<? local_doc_url("visualdoc.php","Title","Functions#options.Title",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
 . Ordering of this elements is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  by
                   &nbsp;<? local_doc_url("visualdoc.php","TitleButtonOrder","Look_options#options.TitleButtonOrder",$srcunset,$subunset) ?>
  setting ( see below ).</P>
                <P class="dense">2) 4 frame sides. Each of this have fixed width that is
                   determined by &nbsp;<? local_doc_url("visualdoc.php","SideSize","MyFrame_options#options.SideSize",$srcunset,$subunset) ?>
  setting  or image size &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","SideSize","MyFrame_options#options.SideSize",$srcunset,$subunset) ?>
  is
                   ommited. Second dimension of the TBar changes to match the
                   size of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
                <P class="dense">3) 4 frame corners. Each of this have both fixed width and
                   height, as determined by &nbsp;<? local_doc_url("visualdoc.php","CornerSize","MyFrame_options#options.CornerSize",$srcunset,$subunset) ?>
  setting or image size.</P>

                   <P class="dense">Each of above elements is rendered by generating &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 
                using respective &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
 , and then overlaying images/buttons
                and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on top of it. Default overlaying is done using
                composition method &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 -blend. In case of main Titlebar that
                could be changed. &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  is then drawn on top of the image as
                specified in respective setting.</P>



<P class="dense">  &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  allows different MyStyles to be used for titlebar and
                frame decorations. If any of those are ommited - default
                setting from &nbsp;<? local_doc_url("visualdoc.php","FWindowStyle","Look_options#options.FWindowStyle",$srcunset,$subunset) ?>
 /&nbsp;<? local_doc_url("visualdoc.php","UWindowStyle","Look_options#options.UWindowStyle",$srcunset,$subunset) ?>
 /&nbsp;<? local_doc_url("visualdoc.php","SWindowStyle","Look_options#options.SWindowStyle",$srcunset,$subunset) ?>
  will be
                used.</P>

<P class="dense">                   Important:
                        If you use semi-transparent images for frame sides -
                they will be overlayed on top of &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  generated &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 ,
                so &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want it to be overlayed over root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  - you
                should use &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  with &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 129 or 149.</P>
<P class="dense">                        Also note that unless you use MYStyle with &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
 
                126 and 125 - frame decorations will not be shaped. Likewise &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
                you want frame part to have only the shape of the image, you
                specified, with no &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  at all - use &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  with
                &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  like so :</P>

<P class="dense">                 &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
   126  empty.xpm</P>

<P class="dense">                Where empty.xpm is 1x1 completely transparent image (supplied
                as desktop/icons/common/empty.xpm ).</P>

<P class="dense">                   To identify side/corner it is possible to use abbreviations,
                such as: N, NW, SW, etc.</P>
<P class="dense">                   All the &nbsp;<? local_doc_url("visualdoc.php","CompositionMethod","Wharf#options.CompositionMethod",$srcunset,$subunset) ?>
  settings must have one of the
                &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  types from MyStyles ( ie 130-143 )</P>
<P class="dense">                   &nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  setting may have different meaning/capabilities for
                different items. When applied to &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  - it simply aligns &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
                to sides mentioned. When applied to image - such as title
                &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  or frame side pixmap - it also specifies &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  image
                should be tiled, scaled or left same size. Make sure that you
                use &nbsp;<? local_doc_url("visualdoc.php","HTiled","Align#options.HTiled",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","VTiled","Align#options.VTiled",$srcunset,$subunset) ?>
  or &nbsp;<? local_doc_url("visualdoc.php","HScaled","Align#options.HScaled",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","VScaled","Align#options.VScaled",$srcunset,$subunset) ?>
  for frame sides -
                otherwise images on they will not be resized to match &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
                size (this is also a feature :).</P>
                  <P class="dense">To center item specify &nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  to include both sides. For
                example : </P>

                   <P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,Right</P>

<P class="dense">                   will center item horizontally.</P>

<P class="dense">                Note that &nbsp;<? local_doc_url("visualdoc.php","TitleBackground","MyFrame_options#options.TitleBackground",$srcunset,$subunset) ?>
  option allows you to specify an
                image to be used under titlebar label in addition to the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
 .
                This was done for better shaped titlebars. You may have &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
 
                to be completely transparent shape, while &nbsp;<? local_doc_url("visualdoc.php","TitleBackground","MyFrame_options#options.TitleBackground",$srcunset,$subunset) ?>
  some
                non-transparent image, and that will provide better visibility
                for the titlebar &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .</P>

<PRE>
&nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  &quot;name&quot;
        &nbsp;<? local_doc_url("visualdoc.php","Inherit","MyFrame_options#options.Inherit",$srcunset,$subunset) ?>
      &quot;name&quot;]
    #traditional form :
        [&nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
        ]
	[&nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
         ]
        [&nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
        ]
	[&nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
         ]
        [&nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
    ]
        [&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
    ]
        [&nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
    ]
	[&nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
    ]
    #alternative form :
	[&nbsp;<? local_doc_url("visualdoc.php","Side","MyFrame_options#options.Side",$srcunset,$subunset) ?>
         &nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
 |Any []] 
	&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  pixmap is ommited - empty &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  will be drawn
        [&nbsp;<? local_doc_url("visualdoc.php","NoSide","MyFrame_options#options.NoSide",$srcunset,$subunset) ?>
       &nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
 |Any]
        [&nbsp;<? local_doc_url("visualdoc.php","Corner","MyFrame_options#options.Corner",$srcunset,$subunset) ?>
       &nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
 |Any ] 
	&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  pixmap is ommited - empty &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  will be drawn
        [&nbsp;<? local_doc_url("visualdoc.php","NoCorner","MyFrame_options#options.NoCorner",$srcunset,$subunset) ?>
     &nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
 |Any]
    #&nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  settings :
        [&nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedStyle","MyFrame_options#options.TitleUnfocusedStyle",$srcunset,$subunset) ?>
    ]
        [&nbsp;<? local_doc_url("visualdoc.php","TitleFocusedStyle","MyFrame_options#options.TitleFocusedStyle",$srcunset,$subunset) ?>
      ]
        [&nbsp;<? local_doc_url("visualdoc.php","TitleStickyStyle","MyFrame_options#options.TitleStickyStyle",$srcunset,$subunset) ?>
       ]
        [&nbsp;<? local_doc_url("visualdoc.php","FrameUnfocusedStyle","MyFrame_options#options.FrameUnfocusedStyle",$srcunset,$subunset) ?>
    ]
        [&nbsp;<? local_doc_url("visualdoc.php","FrameFocusedStyle","MyFrame_options#options.FrameFocusedStyle",$srcunset,$subunset) ?>
      ]
        [&nbsp;<? local_doc_url("visualdoc.php","FrameStickyStyle","MyFrame_options#options.FrameStickyStyle",$srcunset,$subunset) ?>
       ]
        [&nbsp;<? local_doc_url("visualdoc.php","TitleBackground","MyFrame_options#options.TitleBackground",$srcunset,$subunset) ?>
        ] 
	    gets overlayed over &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and under the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
        [&nbsp;<? local_doc_url("visualdoc.php","LeftBtnBackground","MyFrame_options#options.LeftBtnBackground",$srcunset,$subunset) ?>
      ]
	    gets overlayed over &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and under the left block of buttons
        [&nbsp;<? local_doc_url("visualdoc.php","LeftSpacerBackground","MyFrame_options#options.LeftSpacerBackground",$srcunset,$subunset) ?>
   ]
	    gets overlayed over &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  between left block of buttons and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label
        [&nbsp;<? local_doc_url("visualdoc.php","RightSpacerBackground","MyFrame_options#options.RightSpacerBackground",$srcunset,$subunset) ?>
  ] 
	    gets overlayed over &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  between right block of buttons and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label
        [&nbsp;<? local_doc_url("visualdoc.php","RightBtnBackground","MyFrame_options#options.RightBtnBackground",$srcunset,$subunset) ?>
     ] 
	    gets overlayed over &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and under the right block of buttons

    #additional attributes :
	[&nbsp;<? local_doc_url("visualdoc.php","SideSize","MyFrame_options#options.SideSize",$srcunset,$subunset) ?>
         &nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
 |Any </PRE></UL>


