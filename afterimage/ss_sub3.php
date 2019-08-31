<?php include("header.inc") ?>
			<TR><TD>
			<font size=2>
			<h5>Image Quality comparison.</h5>
				<A HREF="screenshots/asscale.jpg"><IMG SRC="screenshots/ss_quality1.thumb" BORDER=0 align="left"></A>
				<A name="ss_quality1"><font size=3>High quality image scaling.</font></A>
				This image is 2x version of <A HREF="images/compose/common/rose512.jpg">rose512.jpg</A>.
				Original image is clipped on top for easier comparison.
				This is the default image rendered by <A href="http://www.afterstep.org/visualdoc.php?show=asscale">asscale</A> example.<br>
				<br>
				Rendered on 16bpp display.
				<p>
				<A HREF="screenshots/asview_vs_ee3.jpg"><IMG SRC="screenshots/ss_quality2.thumb" BORDER=0 align="right"></A>
				<A name="ss_quality2"><font size=3>libAfterImage vs. ee/ImLib</font></A>
				This image is comparison of libAfterImage rendering on 16bpp screen, to
				what is rendered by ElectricEyes using ImLib at same colordepth.
				You can clearly see stripes on gradiented skys on ImLib image.
				<br><br><br>
				<p>
				<A HREF="screenshots/asview_vs_ee5.jpg"><IMG SRC="screenshots/ss_quality3.thumb" BORDER=0 align="left"></A>
				<A name="ss_quality3"><font size=3>libAfterImage vs. ee/ImLib one more time</font></A>
				One more comparison of libAfterImage vs ImLib on 16bpp screen.
				<br><br><br><br><br>
				<p>
				<A HREF="screenshots/ss_gradient.jpg"><IMG SRC="screenshots/ss_quality4.thumb" BORDER=0 align="right"></A>
				<A name="ss_quality4"><font size=3>libAfterImage vs. XView</font></A>
				Same gradiented image has been rendered by XV and libAfterImage on 16bpp display.
				Image on the left shows result produced by XV, on the right - by libAfterImage.
				You can clearly see stripy effect on the image produced by XV, yet there is nothing
				on one rendered by libAfterImage.
				<p>
			</font>
			</TD></TR>
<?php include("footer.inc") ?>

