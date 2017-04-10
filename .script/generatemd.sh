varfile=data
base=/var/www/jordanfisher.me

for a in blog/tutorials blog/posts;
do
  for f in $base/$a/*.md;
  do 
    echo "File $(basename $f .md) found"
    mkdir $base/$a/$(basename $f .md)
    cp $base/web/php/blog_index.php $base/$a/$(basename $f .md)/index.php
    tail -n +4 $f > $base/$a/$(basename $f .md)/data.txt
    echo "$(basename $f .md)|$(sed '1q;d' $f)|$(sed '2q;d' $f)|$(sed '3q;d' $f)" >> $base/$a/$varfile
    rm -rf $base/$a/$(basename $f)
  done
done