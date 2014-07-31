#!/bin/bash
cd /var/www/html/ZIPTEST
for file in /var/www/html/ZIPTEST/*
do
#echo $file
grep -o -E -e "[0-9a-f]{40}" $file
#curl -F file=@"$file" 'http://192.168.0.2:8090/tasks/create/file'
done
