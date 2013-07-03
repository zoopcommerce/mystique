#!/bin/bash
#Do a mystique build.

echo "Copying test data to js/mystique/test/testdata"
rm -rf ./js/mystique/test/testdata/*
cp ./common/testdata/* ./js/mystique/test/testdata/

echo "Copying translations to js/mystique/nls"
rm ./js/mystique/nls/messages.js
echo "define({ root:" > ./js/mystique/nls/prepend.tmp
echo "});" > ./js/mystique/nls/append.tmp
cat ./js/mystique/nls/prepend.tmp ./common/translations/messages.json ./js/mystique/nls/append.tmp >> ./js/mystique/nls/messages.js
rm ./js/mystique/nls/*.tmp

echo "Done"