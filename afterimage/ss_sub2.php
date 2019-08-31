<?php include("header.inc") ?>
			<TR><TD>
			<font size=2>
			<h5>Text and gradients drawing.</h5>
				<A HREF="screenshots/astext.jpg"><IMG SRC="screenshots/ss_text1.thumb" BORDER=0 align=left></A>
				<A name="ss_text1"><font size=3>Texturized 3D Antialiased TrueType text. </font></A>
				This screenshot illustrates text rendering, and smooth bevel rendering by libAfterImage.
				This particular text has been rendered using included TTF font, size 32 points. It then has been texturized
				with <A HREF="images/compose/common/fore.jpg">fore.jpg</A>, and later on alpha-blended on top of appropriately beveled and tiled <A HREF="images/compose/common/back.xpm.jpg">back.xpm</A>.
				3D effect has been created by adding shadow behind the text. There are 6 different <A HREF="http://www.afterstep.org/visualdoc.php?show=asfont#ASText3DType">3D styles</A> provided by libAfterImage.
				<br><br>
				This is the default image rendered by <A href="http://www.afterstep.org/visualdoc.php?show=astext">astext</A> example.<br>
				This particular screenshot has been taken on 16bpp display.
				<p>
				<A HREF="screenshots/asgrad.jpg"><IMG SRC="screenshots/ss_grad1.thumb" BORDER=0 align=right></A>
				<A name="ss_grad1"><font size=3>"The Rainbow"</font></A>
				This is the demonstration of multipoint gradient rendering. This particular gradient consists of 10
				color points, with two in lower-right corner being quite close to each other colorwise.
				Despite the fact that it was rendered on 16bpp display, there almost no stripes visible, even where
				neighboring colors are quite close to each other. That is due to error diffusion and dithering techincs.<P>
				This is the default image rendered by <A href="http://www.afterstep.org/visualdoc.php?show=asgrad">asgrad</A> example.<br>
				See also this <A href="ss_sub3.php#ss_quality4">comparison</A> of gradient rendering by libAfterImage and XV.
				<p>
				<A HREF="screenshots/alphablended_bevel_8bpp.jpg"><IMG SRC="screenshots/ss_text2.thumb" BORDER=0 align=left></A>
				<A name="ss_text2"><font size=3>Alpha-blended beveled gradient with text on 8bpp.</font></A>
				Rotated text rendered using antialiased X11 font, rendered on top of beveled multipoint gradient on 8bpp PseudoColor display.
				This is to demonstrate error-diffusion
				effect on low colordepth screen. Note that only 64 colors has been utilized to render that image, from
				standard 64 color palette of colors, uniformly spread along the spectrum. That leaves 196 colors available
				for other applications, and that enables other applications to reuse same colormap, bu approximating their needs
				using some of this preallocated colors.<br>
				Such an approach is especially useful when it comes to programming Window Managers.
				<p>
				<A HREF="screenshots/diaggrad_alpha_15bpp.jpg"><IMG SRC="screenshots/ss_grad2.thumb" BORDER=0 align="right"></A>
				<A name="ss_grad2"><font size=3>Diagonal gradient with alpha on 15bpp.</font></A>
				This screenshot demonstrates diagonal 5-point gradient, with one of the points being semi-transparent. Gradient was alpha-blended with composition of 2 more images.
				Note that this image has been rendered on 15bpp colordepth, yet there are no noticeable strips or other artifacts, normally associated with such a low colordepth.
				<p>
			</font>
			</TD></TR>
<?php include("footer.inc") ?>

