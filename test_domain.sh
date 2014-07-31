#!/bin/bash
cd /var/www/html/upload
for file in /var/www/html/upload/*
do
#echo $file
#grep -Po '.*?//\K.*?(?=/)' $file
grep -E -o "([0-9,a-z\.-]+)\.([a-z]{2,6})" $file
#curl -F file=@"$file" 'http://192.168.0.2:8090/tasks/create/file'
done
