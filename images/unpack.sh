#/bin/sh

COLOR_SCHEMES='Crimson Deep_Red Gold_On_Blue	Green_Sea	Lime NeXTish Peru	Purple Sea_Water Silver Stormy_Skies Turquoise Washed_Blue'

for cs in $COLOR_SCHEMES; do
	echo $cs ;
	if [ -d $cs ] ; then
		rm -rf $cs ;
	fi;
	mkdir  $cs ;
	cd $cs ;
	tar zxpvf ../$cs.tar.gz ;
	cd .. ;
done;

