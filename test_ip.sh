#!/bin/bash
cd /var/www/html/upload
for file in /var/www/html/upload/*
do
#echo $file
(X='\([0-9]\{1,2\}\|1[0-9]\{2\}\|2[0-4][0-9]\|25[0-5]\)'; grep "\([^\.]\|^\)$X\.$X\.$X\.$X\([^\.]\|$\)" $file )
#curl -F file=@"$file" 'http://192.168.0.2:8090/tasks/create/file'
done
