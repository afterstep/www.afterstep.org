#/bin/sh

export IMAGE_PATH=/usr/local/share/afterstep/desktop:/usr/local/share/afterstep/desktop/icons
export FONT_PATH=/usr/local/share/afterstep/desktop/fonts

COLOR_SCHEMES='Crimson Deep_Red Gold_On_Blue	Green_Sea	Lime NeXTish Peru	Purple Sea_Water Silver Stormy_Skies Turquoise Washed_Blue'

rm out/* > /dev/null 2>&1;
rm out/*.png > /dev/null 2>&1;
rm out/*.jpg > /dev/null 2>&1;
ascompose -f afterimage.xml -n -V -V >log 2>&1;
cd out && tar zcpv --exclude=CVS -f  ../../afterimage.tar.gz * &&	cd .. ;

