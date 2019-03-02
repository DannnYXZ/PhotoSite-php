#!/bin/bash
FILES=./*
I=1
for file in $FILES
do
    if [[ $file == *.jpg ]] 
    then
        mv $file "img-$I.jpg"
        I=$((I + 1))
    fi
done