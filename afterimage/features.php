<?php include("header.inc") ?>
			<TR><TD>
			<font size=3>libAfterImage features: </font><font size=2>
			<UL>
				<LI>32 bit ARGB internal image format with each scanline and channel stored separately.
				<LI>128 bit high quality image processing engine, with error-diffusion for colordepth compensation.
				<LI>Optional inline MMX assembly where applicable, to speed up image handling.
				<LI>In-memory image RLE compression for efficient memory use, while handling large images.<br>
				    Bitmap images are only stored using RLE compressed 1bpp storage.
				<LI>Import filters for XPM(internal or libXpm), Gimp XCF, JPEG, PNG, GIF, TGA(24 and 32bpp only), TIFF(full range of formats supported), PNM, PPM, Windows/OS/2 BMP, ICO and CUR.
				<LI>Export filters for JPEG (greyscale and color), PNG (greyscale and color with or without alpha),
		  			XPM, GIF (using ungif library) and TIFF (with transparency and compression).
				<LI>Image output onto XImage, Pixmap, Pixmap mask, raw ARGB data, MS Windows DIB or standard output stream.
				<LI>Handling of image data in scientific format. Image consist of pixels represented by double precision values, and entire image could be converted into ARGB data on the fly using supplied colormap.
				<LI>Could be used both with and without X Window system. When used without X
						support it does not even require X libraries to be present, and thus it could
						easily be used as image processing tool on web servers, etc.
				<LI><B>XML scripting tool for image processing included !</B> In fact all the images
					  on this site has been rendered with this tool.
				<LI>The only library that can handle multimage GIF files, using custom workarounds for bugs in ungif library.
				<LI>Image reference counting.
				<LI>High quality image scaling using bi-linear interpolation.
				<LI>Tinting, tiling, flipping, mirroring and padding operations.
				<LI>Selective hue, saturation and value adjustments.
				<LI>Multiple image blending with tiling and tinting, using any of <A HREF="http://www.afterstep.org/visualdoc.php?show=blender">15 available methods</A>.
				<LI>Multipoint gradient rendering in <A HREF="http://www.afterstep.org/visualdoc.php?show=asimage">4 directions</A>
				<LI>Smooth, alpha-blended beveled border rendering.
				<LI>Antialiased TrueType text rendering using FreeType 2.
				<LI>Font smoothing and rendering using standard X fonts.
				<LI>In-memory RLE compression of font glyphs for efficient memory usage, and better speed.
				<LI>Texturized, semi-transparent 3D text rendering, using both TrueType and standard X fonts.
				<LI>Autodetection of the best available X Visual.
				<LI>Fast high quality rendering of images on any X Visual, using error-diffusion to compensate for lack of colors.
				<LI>Preallocated palettes of 8, 64 or 4096 colors on PseudoColor X Visuals.
				<LI>High quality image quantization with error diffusion dithering.
				<LI>Transparent output of any transformation into XImage, raw ARGB, or internal format.
				<LI>Conversion of internal image data into any of Pixmap, Pixmap mask or XImage.
				<LI>No internal pixmap caching, providing for simpler interface with application.
				<LI>Stateless - there are no internal contexts of any kind.
				<LI>No useless internal data caching, libAfterImage is smart enough to not need any.
						Yet, it provides for means to store image data, exported XImage, Pixmap and Pixmap mask, in single convenient structure.
				<LI>There are no color allocation or caching decisions to be made - libAfterImage intelligently does what is best.
				<LI>Self-documenting code, providing for most comprehensive <A HREF="http://www.afterstep.org/visualdoc.php?show=API/index">reference</A>.
				<LI>Several sample applications, completely covering all the aspects of using the library, while actually being useful applications.
			</UL>
			</font>
			</TD></TR>
<?php include("footer.inc") ?>

