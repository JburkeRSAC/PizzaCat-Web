#!/bin/bash
cd /var/www/html/upload
for file in /var/www/html/upload/*
do
#echo $file
grep -o "[0-9a-f]\{32\}" $file
#curl -F file=@"$file" 'http://192.168.0.2:8090/tasks/create/file'
done
