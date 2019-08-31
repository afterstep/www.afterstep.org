#/bin/sh

export IMAGE_PATH=/usr/local/share/afterstep/desktop:/usr/local/share/afterstep/desktop/icons
export FONT_PATH=/usr/local/share/afterstep/desktop/fonts

COLOR_SCHEMES='Crimson Deep_Red Gold_On_Blue	Green_Sea	Lime NeXTish Peru	Purple Sea_Water Silver Stormy_Skies Turquoise Washed_Blue'

for cs in $COLOR_SCHEMES; do
	echo $cs.xml ;
	if [ -f $cs.xml ] ; then
		rm out/*.png;
		rm out/*.jpg;
		ascompose -i $cs.xml -f look.Default.xml -n -V -V >log 2>&1;
		cd out;
		tar zcpvf ../../$cs.tar.gz *.*;
		cd .. ;
	fi ;
done;

