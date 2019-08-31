<? include "common.php";

pagestart("Downloads");
?>
<?
active_section_start("download_title_a.png");

?>
<?
if ($cs <> "") $perifer="&cs=".$cs ;
if ( isset($_GET['show']) ) $show=$_GET['show'];
if ($show=="") echo"<b>Source</b> &nbsp; <a href=\"download.php?show=RPMS".$perifer."\">RPMs</a> &nbsp; <a href=\"download.php?show=GitHub".$perifer."\">GitHub</a><hr>

<br />
<b>Latest stable release : 2.2.12</b> (released June 10, 2013)
<ul><fieldset>
Latest stable version is <a href=\"ftp://ftp.afterstep.org/stable/ChangeLog\"><b>2.2.12</b></a>
which can be downloaded as 
   	<a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.12.tar.gz\">a tarball</a> or 
	<a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.12.tar.bz2\">a bzip2 archive</a>.<br />
   Alternatively from GitHub :
	<a href=\"https://github.com/sashavasko/afterstep-devel/archive/2.2.12.tar.gz\">tar.gz</a><br /><br />
<br />

<b>Also available for download a standalone version of libAfterImage 1.20</b> (released January 15, 2011)
<br />Please note that it should not be used when full AfterStep is installed. This is only for folks 
who would like to use it with things like aterm and rxvt-unicode without AfterStep.
<ul><fieldset>
latest stable libAfterImage is <a href=\"ftp://ftp.afterstep.org/stable/libAfterImage/ChangeLog.1.20\"><b>1.20</b></a>
which can be downloaded as 
   	<a href=\"ftp://ftp.afterstep.org/stable/libAfterImage/libAfterImage-1.20.tar.gz\">a tarball</a> or 
	<a href=\"ftp://ftp.afterstep.org/stable/libAfterImage/libAfterImage-1.20.tar.bz2\">a bzip2 archive</a>.<br />
<hr>
<center>All official releases can be downloaded from <a href=\"ftp://ftp.afterstep.org\">ftp://ftp.afterstep.org</a>.</center>

</fieldset>
</ul>
<br />
<b>Old AfterStep 2.x releases : </b>
<ul>

 2.2.11  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.11.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.11.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.11-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.11-noimages.tar.bz2\">an upgrade bzip2</a>.  
        
<br/>

 2.2.7  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.7.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.7.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.7-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.7-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on August 27, 2007.
<br/>

 2.2.6  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.6.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.6.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.6-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.6-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on May 21, 2007.
<br/>

 2.2.5  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.5.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.5.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.5-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.5-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on April 27, 2007.
<br/>

 2.2.4  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.4.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.4.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.4-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.4-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on November 20, 2006.
<br/>

 2.2.3  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.3.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.3.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.3-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.3-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on October 11, 2006.
<br/>

 2.2.2  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.2.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.2.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.2-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.2-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on May 24, 2006.
<br/>

 2.2.1  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.1.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.1.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.1-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.1-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on March 7, 2006.
<br/>

 2.2.0  <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.0.tar.gz\">a tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.0.tar.bz2\">a bzip2 archive</a> or  
         <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.0-noimages.tar.gz\">an upgrade tarball</a> or  
          <a href=\"ftp://ftp.afterstep.org/stable/AfterStep-2.2.0-noimages.tar.bz2\">an upgrade bzip2</a>.  
         Released on January 9, 2006.

<br/>

<hr>
<center>All official releases can be downloaded from <a href=\"ftp://ftp.afterstep.org\">ftp://ftp.afterstep.org</a>.</center>
</ul>
<br />
<b>AfterStep 2.0 beta releases : </b><ul>

 beta5  <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta5.tar.gz\">tar.gz</a> or
    	<a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta5.tar.bz2\">tar.bz2</a>
        released on August 17, 2004.
<br />
 beta4b <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta4b.tar.gz\">tar.gz</a> or
        <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta4b.tar.bz2\">tar.bz2</a>
	released on March 5, 2004.
<br />
 beta3  <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta3.tar.gz\">tar.gz</a> or
        <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta3.tar.bz2\">tar.bz2</a>
	released on December 23, 2003.
<br />
 beta2  <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta2.tar.gz\">tar.gz</a> or
        <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta2.tar.bz2\">tar.bz2</a>
	released on September 29, 2003.
<br />
 beta1  <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta1.tar.gz\">tar.gz</a> or
        <a href=\"ftp://ftp.afterstep.org/devel/AfterStep-2.00.beta1.tar.bz2\">tar.bz2</a>
	released on August 11, 2003.
<hr>
<center>All official releases can be downloaded from <a href=\"ftp://ftp.afterstep.org\">ftp://ftp.afterstep.org</a>.</center>
</ul>
<br />
<b>Older releases :</b><ul>

 1.8.11 <a href=\"ftp://ftp.afterstep.org/stable/v1.8/AfterStep-1.8.11.tar.gz\">tar.gz</a> or
	<a href=\"ftp://ftp.afterstep.org/stable/v1.8/AfterStep-1.8.11.tar.bz2\">tar.bz2</a>
	released on March 1, 2002.
<br />
Your feedback and experiences with this releases are appreciated.
<hr>
<center>All official releases can be downloaded from <a href=\"ftp://ftp.afterstep.org\">ftp://ftp.afterstep.org</a>.</center>
</ul>";

if ($show=="RPMS") {local_url("download.php","Source"); 
    echo " &nbsp; <b>RPMs</b> &nbsp;";
    local_url("download.php?show=GitHub","GitHub");
    echo '    
<hr>
<ul>Easy-to-install AfterStep, Applet, and other RPM packages are provided for the current and prior Fedora releases; Fedora 14 and 15 packages are available at this time. Older Mandriva 2006.0 packages are available <a href="ftp://ftp.afterstep.org/stable/rpms/RPMS/mdk/2006.0/i586">here</a>.  Newer SRPM packages found 
<a href="ftp://ftp.afterstep.org/stable/rpms/RPMS/fc/15/SRPMS">here</a> should rebuild fine under the older Fedora and Mandrake 
distributions.  These packages are provided as part of the 
<a href="https://developer.berlios.de/projects/appletrpms/">Applet RPMS</a> project.<br />
<br />

For descriptions of Applets and setup tips, look <a href="http://wiki.afterstep.org/index.php?title=AfterStep_Applets_DataBase">here</a> 
at the database at <a href="http://wiki.afterstep.org/">http://wiki.afterstep.org/</a>.<br />
<br />

The easiest way to install these packages is through yum (Fedora) or urpmi (Mandrake/Mandriva).
</ul>
<hr>
<br />
<b>Fedora AfterStep, Applets, and aterm Package Setup:</b>
<fieldset>
Download and install this <a href="ftp://ftp.afterstep.org/stable/rpms/fedora-as-1.1-1.as.noarch.rpm">PACKAGE</a>.
<br />
- OR -
<br />
Download and install this <a href="ftp://ftp.afterstep.org/stable/rpms/RPM-GPG-KEY-AppletRPMs">GPG-KEY</a> ("rpm --import RPM-GPG-KEY-AppletRPMs) and copy this <a href="ftp://ftp.afterstep.org/stable/rpms/fedora-as.repo.txt">REPO</a> file as /etc/yum.repos.d/fedora-as.repo<br />
<br />
Then, as root (su), type the following to install AfterStep:
<pre>
   yum install AfterStep
</pre>
To view available packages, take a look at this <a href="ftp://ftp.afterstep.org/stable/rpms/afterappslist.txt">LIST</a> (with summaries), or you can browse these <a href="ftp://ftp.afterstep.org/stable/rpms/RPMS/fc">FOLDERS</a>. We currently include over 60 Applets. 
</fieldset>

<br />
<b>Mandrake AfterStep, Applets, and aterm Package Setup :</b>
<fieldset>To create the respository run this <a href="ftp://ftp.afterstep.org/stable/rpms/mdk-command.txt">COMMAND</a>, substituting 2006.0 for your version of Mandrake/Mandriva.<br />
<br />
Then run <code>urpmi AfterStep</code> to install just AfterStep 
or <code>urpmi afterstep-apps</code>
to install AfterStep plus 30 commonly used applets.
</fieldset>

<br />
<b>Build from Source RPMs :</b>
<fieldset>
If you would like to build from SRPMs for earlier Fedora, Mandrake, or other distributions 
you can grab the SRPM files directly <a href="ftp://ftp.afterstep.org/stable/rpms/RPMS/fc/15/SRPMS">here</a>.
</fieldset>
';
}

if ($show=="GitHub") { local_url("download.php","Source"); echo" &nbsp; <a href=\"download.php?show=RPMS".$perifer."\">RPMs</a> &nbsp; <b>GitHub</b><hr>
<ul>
Development of AfterStep is done using git for revision control. Instructions for obtaining the latest development version from GitHub are below. At any given time versions from GitHub might not compile, so please be understanding of this fact.
</ul>
<hr>
<br />
<b>Access to the latest source from <a href=\"https://github.com/\">GitHub</a> :</b><ul>
$ git clone https://github.com/sashavasko/afterstep-devel.git<br />
[you'll see it begin to download]<br />
now simply go about attempting to compile it as normal.<br /><br />
</ul>
<b>Viewing GitHub repository online :</b>
<ul>
As an alternative, you can also browse GitHub with your <a href=\"https://github.com/sashavasko/afterstep-devel\">browser</a>.<br>
</ul>";}
?>
<?
active_section_end();

?>
<?
pageend();

?>

