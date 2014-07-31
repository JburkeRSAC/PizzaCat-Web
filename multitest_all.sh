#!/bin/bash
cd /var/www/html/ZIPTEST
for file in /var/www/html/ZIPTEST/*
do
#echo $file
#EMAIL:
grep -E -o "\b[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+\b" "$file"
#IP:
(X='\([0-9]\{1,2\}\|1[0-9]\{2\}\|2[0-4][0-9]\|25[0-5]\)'; grep "\([^\.]\|^\)$X\.$X\.$X\.$X\([^\.]\|$\)" $file )
#DOMAIN:
grep -E -o "([0-9,a-z\.-]+)\.([a-z]{2,6})" $file
#MD5:
grep -o "[0-9a-f]\{32\}" $file
#SHA1:
grep -o -E -e "[0-9a-f]{40}" $file
#curl -F file=@"$file" 'http://192.168.0.2:8090/tasks/create/file'
done
