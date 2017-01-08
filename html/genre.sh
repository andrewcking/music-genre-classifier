#!/bin/bash
# A simple script

cd /var/www/jAudio/
mpg123 -w ../uploads/output.wav ../uploads/upload.mp3
java -jar jAudio.jar -s fixedsettings.xml output ../uploads/output.wav
sed -i -e '110i @attribute genre {jazz,country,classical,indiefolk,pop,metal,rbhiphop,rock,reggae,electronica}\' output.arff
sed -i -e '112s/$/,?,/' output.arff
OUTPUT="$(java -cp ../weka/weka.jar weka.classifiers.functions.MultilayerPerceptron -T ./output.arff -l ../weka/mlpmodel.model -p 0)"
LASTLINE="${OUTPUT##*$'\n'}"
echo $LASTLINE
