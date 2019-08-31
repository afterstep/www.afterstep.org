<?php include("header.inc") ?>
			<TR><TD>
			<font size=2>
			<h5>Image Quantization effects</h5>
				<A HREF="screenshots/quantized_to_256colors.jpg"><IMG SRC="screenshots/ss_quant1.thumb" BORDER=0 align="left"></A>
				<A name="ss_quant1"><font size=3>Rose in 256 colors</font></A>
				This image compares <A HREF="images/compose/common/rose512.jpg">rose512.jpg</A> saved as 256 color xpm by libAfterImage,
				to the same image quantized using XNview. libAfterImage provides the fastest functionality to convert images into
				indexed format. Colors are reduced not by closeness as usually done (libXpm) but by allocating colorcells to most used
				colors first, and then approximating other colors with those allocated. It is possible to reduce colordepth of the
				image prior to quantization, using error diffusion technique. That allows for fewer colors in resulting image without
				quality loss, as demonstrated below.
				<p>
				<A HREF="screenshots/ss_quant2"><IMG SRC="screenshots/ss_quant2.thumb" BORDER=0 align="right"></A>
				<A name="ss_quant2"><font size=3>Rose in 256 color reduced to 12bpp</font></A>
				As can be seen here reducing colordepth of an image prior to quantization
				actually improves quality of the resulting image. Again image produced with libAfterImage
				is on the left.
				<br><br><br><br>
				<p>
				<A HREF="screenshots/ss_quant3"><IMG SRC="screenshots/ss_quant3.thumb" BORDER=0 align="left"></A>
				<A name="ss_quant3"><font size=3>Rose in 256 color reduced to 9bpp</font></A>
				Even as we reduce colordepth to such an extent as 9bpp we still get rather decent
				quality, comparable to conventional dithering.
				<br><br><br><br><br>
				<p>
				<A HREF="screenshots/ss_quant4"><IMG SRC="screenshots/ss_quant4.thumb" BORDER=0 align="right"></A>
				<A name="ss_quant4"><font size=3>Rose in 256 color reduced to 6bpp</font></A>
				And only at point of 6bpp, when most of the color info has been striped out we get
				sugnificantly worse image. Althou it should be noted that result depends on the image itself,
				and for some images even 6bpp should work just fine.
				<br><br><br><br>
				<p>
			</font>
			</TD></TR>
<?php include("footer.inc") ?>

