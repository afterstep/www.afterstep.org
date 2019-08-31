#/bin/sh

rm *.small.jpg;

for f in *.jpg *.png; do
	ascompose -s "<scale width=\"proportional\" height=150><img src=\"$f\"></scale>" -n  -o $f.small.jpg -t "jpeg" -c "5">>log;
done;

tar zcpvf screenshots.small.tar.gz *.small.jpg

