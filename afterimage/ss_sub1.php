<?php include("header.inc") ?>
			<TR><TD>
			<font size=2>
			<h5>Image Blending screenshots</h5>
				<A HREF="screenshots/asmerge.jpg"><IMG SRC="screenshots/ss_blend1.thumb" BORDER=0 align=left></A>
				<A name="ss_blend1"><font size=3>"The Burning Rose"</font></A>
				This screenshot illustrates capabilities of libAfterImage to blend images on top of each other, using different algorithms.
				This particular image is composed from 3 other images: <A HREF="images/compose/common/back.xpm.jpg">back.xpm</A> added to <A HREF="images/compose/common/rose512.jpg">rose512.jpg</A> and hue of the result substituted by hue of the <A HREF="images/compose/common/fore.jpg">fore.xpm</A>.
				<br><br>
				This is the default image rendered by <A href="http://www.afterstep.org/visualdoc.php?show=asmerge">asmerge</A> example.<br>
				This particular screenshot has been taken on 16bpp display.
				<p>
				<A HREF="screenshots/alphablended_bevel_24bpp.jpg"><IMG SRC="screenshots/ss_blend2.thumb" BORDER=0 align=right></A>
				<A name="ss_blend2"><font size=3>Text over gradient.</font></A>
				On that screenshot diagonal multipoint gradient with some transparency has been rendered on top of at least 2 other images.

				Smooth bevel has been rendered around gradient, and text has been added at background and foreground.
				The text in foreground is flipped by 180 degrees using libAfterImage. Both background and foreground text was rendered,
				using smoothed X font lucidasans-24. As can be seen, the "stairs" effect on the edges of letters has been almost completely eliminated.
				<p>
				<A HREF="screenshots/vertgrad_alpha.jpg"><IMG SRC="screenshots/ss_blend3.thumb" BORDER=0 align="left"></A>
				<A name="ss_blend3"><font size=3>Semitransparent gradient</font></A>
				Now that is just plain fancy screenshot to demonstrate tinting of the alpha-channel of the pre-rendered
				gradient, in order to make it semi-transparent, while blending it on top of the composition of several other images.
				Other images used are <A HREF="images/compose/common/testimg.jpg">testimg.jpg</A>, coming with <A HREF="ftp://ftp.uu.net/graphics/jpeg/">libjpeg</A>,
				<A HREF="images/compose/common/RedbrushAlpha-0.5.png">RedBrush-Alpha.png</A> coming with <A HREF="http://www.libpng.org/pub/png/libpng.html">libpng</A>, and
				<A HREF="images/compose/
common/IceAlpha-0.5.png">IceAlpha.png</A> coming with libpng as well.<br>
				Again, text has been rendered using smoothed X font lucidasans-24.
				<p>
			</font>
			</TD></TR>
<?php include("footer.inc") ?>

