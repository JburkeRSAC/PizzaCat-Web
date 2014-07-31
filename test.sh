#!/bin/bash
cd /var/www/html/upload
for file in /var/www/html/upload/*
do
#echo $file
grep -E -o "\b[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+\b" "$file" 
#curl -F file=@"$file" 'http://192.168.0.2:8090/tasks/create/file'
done
