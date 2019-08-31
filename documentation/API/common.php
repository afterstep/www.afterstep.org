&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage examples common</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">common functions used in other examples </FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/common.h"><UL><B>libAfterImage/tutorials/common.h</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Generic Xlib related functionality, common for all the tutorials.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 ,
&nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/_XA_WM_DELETE_WINDOW"><UL><B>libAfterImage/tutorials/_XA_WM_DELETE_WINDOW</B><br></A><LI><B>NAME</B><br>
<A NAME="_XA_WM_DELETE_WINDOW"></A><B>_XA_WM_DELETE_WINDOW</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>_XA_WM_DELETE_WINDOW - stores &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of X Atom &quot;WM_DELETE_WINDOW&quot;.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>In X all client's top level windows are managed by window manager.
That includes moving, resizing, decorating, focusing and closing of
windows. Interactions between window manager and client window are
governed by ICCCM specification.
All the parts of this specification are completely optional, but it
is recommended that the following minimum &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of hints be supplied
for any client window:
Window's title(WM_NAME), iconified window title(WM_ICON_NAME), class
hint (WM_CLASS) and supported protocols (WM_PROTOCOLS). It is
recommended also that WM_DELETE_WINDOW protocol be supported, as
otherwise there are no way to safely close client window, but to
kill it.
All of the above mentioned hints are identified by atoms that have
standard preset values, except for WM_DELETE_WINDOW. As the result we
need to obtain WM_DELETE_WINDOW atoms ID explicitly. We use
_XA_WM_DELETE_WINDOW to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  the ID of that atom, so it is accessible
anywhere from our application.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
Atom _XA_WM_DELETE_WINDOW = None;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/tutorials/create_top_level_window()"><UL><B>libAfterImage/tutorials/create_top_level_window()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_top_level_window()"></A><B>create_top_level_window()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Window create_top_level_window( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root,
                                int x, int y,
                                unsigned int width,
                                unsigned int height,
                                unsigned int border_width,
                                unsigned long attr_mask,
                                XSetWindowAttributes *attr,
                                char *app_class );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid preinitialized &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- root window of the &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  on which to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  window.
</DD><DT class="dense"><B>x,</B></DT><DD class="dense">y          - desired position of the window
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height - desired window size.
</DD><DT class="dense"><B>border_width</B></DT><DD class="dense">- desired initial border width of the window (may not
                have any effect due to Window Manager intervention.
</DD><DT class="dense"><B>attr_mask</B></DT><DD class="dense">- mask of the attributes that has to be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on the
                window
</DD><DT class="dense"><B>attr</B></DT><DD class="dense">- values of the attributes to be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>app_class</B></DT><DD class="dense">- title of the application to be used as its window
                Title and resources class.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>ID of the created window.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>create_top_level_window() is autyomating process of creating top
level application window. It creates window for specified &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 ,
and then sets up basic ICCCM hints for that window, such as WM_NAME,
WM_ICON_NAME, WM_CLASS and WM_PROTOCOLS.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
Window
create_top_level_window( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root, int x, int y,
                         unsigned int width, unsigned int height,
                         unsigned int border_width, 
                         unsigned long attr_mask,
                         XSetWindowAttributes *attr, 
                         const char *app_class, const char *app_name )
{
    Window w = None;
#ifndef X_DISPLAY_MISSING
    char *tmp ;
    XTextProperty name;
    XClassHint class1;

    w = create_visual_window(asv, root, x, y, width, height, border_width, 
                             InputOutput, attr_mask, attr );

    tmp = (app_name==NULL)?(char*)get_application_name():(char*)app_name;
    XStringListToTextProperty (&amp;tmp, 1, &amp;name);

    class1.res_name = tmp;  /* for future use */
    class1.res_class = (char*)app_class;
    XSetWMProtocols (dpy, w, &amp;_XA_WM_DELETE_WINDOW, 1);
    XSetWMProperties (dpy, w, &amp;name, &amp;name, NULL, 0, NULL, NULL, &amp;class1);
    /* final cleanup */
    XFree ((char *) name.value);

#endif /* X_DISPLAY_MISSING */
    return w;
}
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/tutorials/set_window_background_and_free()"><UL><B>libAfterImage/tutorials/set_window_background_and_free()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_window_background_and_free()"></A><B>set_window_background_and_free()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Pixmap set_window_background_and_free( Window w, Pixmap p );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>w</B></DT><DD class="dense">- ID of the window &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of which we need to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>p</B></DT><DD class="dense">- Pixmap to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>None on success. Pixmap ID of original Pixmap on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>set_window_background_and_free() will &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  window's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to
specified Pixmap, Then refresh window contents so that &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 
is drawn by the server, &nbsp;<? local_doc_url("visualdoc.php","flush","asimage#flush_asimage_cache()",$srcunset,$subunset) ?>
  all the requests to force it to be sent
to server to be processed as fast as possible.
</PRE></LI><LI><B>NOTES</B><br><PRE>After Window's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  has been &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to Pixmap - X server makes
hidden &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of this Pixmap for later window refreshing. As the result
original Pixmap is no longer needed and can be freed to conserve
resources.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
Pixmap
set_window_background_and_free( Window w, Pixmap p )
{
#ifndef X_DISPLAY_MISSING
    if( p != None &amp;&amp; w != None )
    {
        XSetWindowBackgroundPixmap( dpy, w, p );
        XClearWindow( dpy, w );
        XFlush( dpy );
        XFreePixmap( dpy, p );
        p = None ;
    }
#endif /* X_DISPLAY_MISSING */
    return p ;
}
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/tutorials/wait_closedown()"><UL><B>libAfterImage/tutorials/wait_closedown()</B><br></A><LI><B>NAME</B><br>
<A NAME="wait_closedown()"></A><B>wait_closedown()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void wait_closedown( Window w );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>w</B></DT><DD class="dense">- ID of the window from which to &nbsp;<? local_doc_url("visualdoc.php","wait","common#wait_closedown()",$srcunset,$subunset) ?>
  for events.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>User action requesting window to be closed is generally received
first by Window Manager. Window Manager is then handles it down to
the window by sending it ClientMessage event with first 32 bit word
of data &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to the &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of WM_DELETE_WINDOW Atom.
Accordingly, all client has to do is &nbsp;<? local_doc_url("visualdoc.php","wait","common#wait_closedown()",$srcunset,$subunset) ?>
  for such event from X server
and, when received, it should &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  its window and generally exit.

</PRE></LI><LI><B>NOTES</B><br><PRE>It is recommended that XFlush() is issued right after XDestroyWindow()
as Window Manager itself may attempt to do something with the window
until it receives DestroyNotify event.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>ICCCM, Window
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
void
wait_closedown( Window w )
{
#ifndef X_DISPLAY_MISSING
    if( dpy == NULL || w == None )
        return ;

    XSelectInput (dpy, w, ( StructureNotifyMask | 
                            ButtonPressMask|
                            ButtonReleaseMask));

    while(w != None)
    {
        XEvent event ;
        XNextEvent (dpy, &amp;event);
        switch(event.type)
        {
            case ClientMessage:
                &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  ((event.xclient.format != 32) ||
                    (event.xclient.data.l[0] != _XA_WM_DELETE_WINDOW))
                    break ;
            case ButtonPress:
                XDestroyWindow( dpy, w );
                XFlush( dpy );
                w = None ;
                break ;
        }
    }
    XCloseDisplay (dpy);
    dpy = NULL ;
#endif
}
</PRE></div><br></p></LI></UL>
