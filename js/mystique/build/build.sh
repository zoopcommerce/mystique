#!/bin/bash
#Do a mystique build.

echo "Making temp directory"
mkdir -p ./temp/

echo "Removing old build"
rm -rf ./temp/*

node ./build/buildconfig.js load=build --profile ./build/build.profile.js

cat ./temp/mystique/microloader.js ./temp/mystique/nls/messages.js ./temp/mystique/mystique.js > ./dist/mystique.js

echo "Build complete"