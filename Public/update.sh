#!/bin/sh

echo ' ---> compile lesscss files'
lessc ./asset/main.less > ./asset/main.css --yui-compress

#echo ' ---> compress js'
#cat ./public/js/3d.js ./public/js/home.js ./public/js/map.js ./public/js/page_bloc.js ./public/js/page_location.js ./public/js/page_map.js ./public/js/page_new.js ./public/js/main.js | yui-compressor -o ./public/js/combined.min.js --type js
#cat ./public/js/3d.js ./public/js/home.js ./public/js/map.js ./public/js/page_bloc.js ./public/js/page_location.js ./public/js/page_map.js ./public/js/page_new.js ./public/js/main.js > ./public/js/combined.min.js