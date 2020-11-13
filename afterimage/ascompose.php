<?php include("header.inc") ?>
			<TR><TD>
			<font size=2>
			<font size=3>ascompose</font> is a tool to compose image(s) and display/save it based on
 			supplied XML input file.
			<br><br>
			ascompose reads supplied XML data, and manipulates image accordingly.
			It could transform images from files of any supported file format,
			draw gradients, render antialiased texturized text, perform
			superimposition of arbitrary number of images, and save images into
			files of any of supported output file formats.
			<br><br>
			ascompose can be compiled to not reference X Window System, thus
			allowing it to be used on web servers and any other place. It does not
			even require X libraries in that case.
			<br><br>
			Please go <A href="http://www.afterstep.org/visualdoc.php?show=asimagexml">here</A> for the complete documentation.
			<br><br>
			<font size=3>Supported file types for input are :</font>
			<UL>
			<LI>XPM   - via internal code, or libXpm library.
			<LI>JPEG  - via libJpeg library.
			<LI>PNG   - via libPNG library.
			<LI>XCF   - via internal code. For now XCF support is not complete as it does not merge layers.
			<LI>PPM/PNM - via internal code.
			<LI>BMP, ICO, CUR - via internal code.
			<LI>GIF   - via libungif library (supplied).
			<LI>TIFF  - via libtiff library (including alpha channel support).
			</UL>
			<font size=3>Supported file types for output :</font>
			<UL>
			<LI>XPM   - via internal code, or libXpm library.
			<LI>JPEG  - via libJpeg library.
			<LI>PNG   - via libPNG library.
			<LI>GIF   - via libungif library.
			<LI>TIFF  - via libtiff library (including alpha channel support).
			</UL>
			<font size=3>Examples</font><br><br>
			This particular site has been rendered with ascompose using a couple of template
			images taken from the now defunct www.guistuff.com website.<br>
			The script used for rendering is available <a href="afterimage/images/guistuff.com.0207/afterimage.xml">here</a>.<br>
			Another script used for rendering screenshots images is <a href="afterimage/images/screenshots/screenshots.xml">here</a>.<br>

			The images used for rendering are available
			<A href="images/compose/guistuff.com.0207">here</A> and
			<A href="images/compose/common">here</A>.
			</font>
			</TD></TR>
<?php include("footer.inc") ?>
