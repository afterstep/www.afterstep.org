<? local_doc_main_menu("11") ?>
<img src=documentation/images/NeXTFolderOpen.png align=middle> <b>suported image formats are:</b>
<hr>
 &nbsp; <? local_doc_url("visualdoc.php","Desktop background","bg",$srcunset,$subunset) ?>
 &nbsp; <b>Image formats</b>
 &nbsp; <? local_doc_url("visualdoc.php","Banner","banner",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Sounds","sound",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Themes","themes",$srcunset,$subunset) ?>
<hr><br>

suported image formats are:
<ul> 	 
 <li>using standard libraries:</li>
 <ul> 	 
    <li>JPG - (libjpeg release 6b of 27-Mar-1998 included with AfterStep distro)</li>
    <li>PNG - (libPNG version 1.2.5 - October 3, 2002 included with AfterStep distro)</li>
    <li>TIFF</li> 	 
 </ul>
 <li>internally supported:
 <ul>
    <li>XCF</li>
    <li>XPM</li>
    <li>PPM/PNM</li>
    <li>BMP</li>
    <li>ICO</li>
    <li>GIF - write support only for uncompressed gif</li>
    <li>XML Images</li></ul>
    <p>
     AfterStep's graphics engine - libAfterImage includes a processor for XML
     scripts that specify transformation of images. Such XML script may
     include any function supported by libAfterImage, which includes
     loading/saving files, scaling, tiling, cropping, Hue-Saturation-Value
     adjustment, image blending, Text rendering, gradients rendering,
     tinting, solid fill, etc.
    </p>
    <ul>
     <li><b>example:</b>
     solid blank background 1x1 pixel:<br>
     &lt;solid width=1 height=1 color=#FF000000/&gt;</li>
     <li><b>example:</b>set color alias:<br>
     &lt;color domain="ascs" name="Active" argb="#FF665646"/&gt;
    <li>Here is another script :
    </ul>
    <p class="codeBlock">
      <code>
	&lt;composite merge="clip"&gt;<br/>

	&nbsp;&nbsp;
	&lt;tile height="308"&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;
	&lt;scale width="24" height="24"&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;

	&lt;img src="AfterStep3"/&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;
	&lt;/scale&gt;<br/>
	&nbsp;&nbsp;
	&lt;/tile&gt;<br/>
	&nbsp;&nbsp;

	&lt;tile height="308" width="24" tint="#557f7f7f"&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;
	&lt;img src="main_back.jpg"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;/tile&gt;<br/>
	&lt;/composite&gt;

      </code>
    </p>
    <ul>
    <p>
      This one renders border image as could be seen at the top of this page.
    </p>
    </li>
    <li>Shortcuts: <br>
    <p>
      Great advantage of&nbsp; such scripting capabilities is that numerous
      images could be produced from the single clipart image. For example
      most modern systems assign different icons to different file types. When
      two different file types should have similar icons - the icon is simply
      duplicated. The result of this is a huge waste of HDD space and large
      number of identical files. XML scripts solve that problem by allowing to
      create shortcuts to image files.
    </p>

    <p>
      For examle xml file with&nbsp; :
    </p>
    </ul>
    <p class="codeBlock">
      <code>
	&lt;img src="logos/AfterStep5"/&gt;
      </code>
    </p>
    <ul>
    <p>
      is a simply a shortcut to clipart image.
    </p>
	</li>
	<li>Minipixmaps: <br>
    <p>
      Also it allows to create minipixmaps, or reduced size versions of icons.
    </p>
    <p>

      For example :
    </p>
    </ul>
    <p class="codeBlock">
      <code>
	&lt;scale width="16" height="16"&gt;<br/>
	&nbsp;&nbsp;
	&lt;img src="logos/GNUStep"&gt;<br/>
	&lt;/scale&gt;

      </code>
    </p>
    <ul>
    <p>
      Will create 16x16 version of GNUStep icon, which could be used as
      minipixmap for application.
    </p>
	</li>
	<li>color schemes: <br>
    <p>
      Colorschemes are a very powerfull feature of AfterStep. That means
      that at each moment AfterStep defines 31 additional color names, exact
      color values which will depend on the choosen colorscheme. Now XML
      scripts may include HSV conversion commands. As the result it is
      possible to have images change their colors depending on the colorscheme
      choosen.
    </p>

    <p>
      For example :
    </p>
    </ul>
    <p class="codeBlock">
      <code>
	&lt;hsv
	hue_offset="$ascs.Active.hue"
	saturation_offset="$ascs.Active.saturation-30"
	value_offset="$ascs.Active.value-72"&gt;<br />
	&nbsp;&nbsp;
	&lt;img src="bars/title_tile_glass_red_a50"/&gt;<br />

	&lt;/hsv&gt;
      </code>
    </p>
    <ul>
    <p>
      The above image will produce a focused titlebar background that changes
      colors according to the colorscheme choosen.
    </p>
    <li>Tiling:<br>
	<ul>

    	<li>Simple tiling<br>
    <p>
      This example produces a tile which is mirrored through the X and Y axis
      and which repeats itself endlessly :
    </p>
</ul>
    </ul>
    <p class="codeBlock">
      <code>
	&lt;img id="tile" src="niceTile.png"/&gt;<br/>
	<br/>

	&lt;composite id="left_tile" width="$tile.width" height="$tile.height"&gt;<br/>
	&nbsp;&nbsp;
	&lt;recall srcid="tile"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;mirror x="0" y="$tile.height" dir="vertical"&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;

	&lt;recall srcid="tile"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;/mirror&gt;<br/>
	&lt;/composite&gt;<br/>
	<br/>
	&lt;composite width="$tile.width" height="$tile.height"&gt;<br/>
	&nbsp;&nbsp;

	&lt;recall srcid="left_tile"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;mirror x="$tile.width" y="0" dir="horizontal"&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;
	&lt;recall srcid="left_tile"/&gt;<br/>
	&nbsp;&nbsp;

	&lt;/mirror&gt;<br/>
	&lt;/composite&gt;<br/>
      </code>
    </p>
    <ul>
	</li>
    <li>Complex tiling<br>
    <p>

      This example produces a tile which is mirrored through the X and Y axis
      and which repeats itself only 4 plain times :
    </p>
    </ul>
    <p class="codeBlock">
      <code>
	&lt;scale id="tile" width="$xroot.width/2" height="$xroot.height/2"&gt;<br/>
	&nbsp;&nbsp;
	&lt;img src="niceTile.png"/&gt;<br/>
	&lt;/scale&gt;<br/>

	<br/>
	&lt;composite id="left_tile" width="$xroot.width/2" height="$xroot.height"&gt;<br/>
	&nbsp;&nbsp;
	&lt;recall srcid="tile"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;mirror x=0 y="$xroot.height/2" dir="vertical"&gt;<br/>
	&nbsp;&nbsp;

	&nbsp;&nbsp;
	&lt;recall srcid="tile"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;/mirror&gt;<br/>
	&lt;/composite&gt;<br/>
	<br/>
	&lt;composite width="$xroot.width" height="$xroot.height"&gt;<br/>

	&nbsp;&nbsp;
	&lt;recall srcid="left_tile"/&gt;<br/>
	&nbsp;&nbsp;
	&lt;mirror x="$xroot.width/2" y=0 dir="horizontal"&gt;<br/>
	&nbsp;&nbsp;
	&nbsp;&nbsp;
	&lt;recall srcid="left_tile"/&gt;<br/>

	&nbsp;&nbsp;
	&lt;/mirror&gt;<br/>
	&lt;/composite&gt;<br/>
      </code>
    </p>
	</li>
 </ul>

