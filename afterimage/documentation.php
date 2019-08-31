<?php include("header.inc") ?>
			<TR><TD>
			<h4>Documentation :</h4>
			<font size=3>Compilation and Installation : </font><font size=2>
			After you download the code as described in <A href="getcode.php">download</A> section, untar it and run the following commands :
			<br><CENTER><I><font color=#EEEEEE><PRE>./configure ; make ; make install</PRE></font></I></CENTER>
			in respective directory. Note that to get shared libraries,	you will need to specifi --enable-sharedlibs option to configure script.<br>
			Usuall condition of being root in order to install library applies.
			<p>
			<font size=3 color=#440000>MMX Note :</font>
			libAfterImage will attempt to autodetect if your CPU has MMX instructions support.
			If you think that it has been misdetected ( you get Ivalid Instruction exception ) please use ./configure switch
			to disable/enable it manually. For example: ./configure --disable-mmx-optimization.
			<p>
			<font size=3>Included documentation :</font>
			All the functions and data structures of libAfterImage, as well as inner workings explanation is available
			in supplied <A href="http://www.afterstep.org/visualdoc.php?show=API/index">API reference</A>.<p>
			Also, several examples illustrating utilization of libAfterImage are provided in apps/ subdirectory.
			<A href="examples.php">Here</A> is the complete description of this examples.
			<p>
			<font size=3>ASCompose utility :</font>
			libAfterImage comes bundled with ascompose utility, that enables automated image processing using XML scripting.
			In fact this entire site has been designed using this utility. Please read <A href="ascompose.php">here</A> for the description of this utility.
			</font>
			</TD></TR>
<?php include("footer.inc") ?>

