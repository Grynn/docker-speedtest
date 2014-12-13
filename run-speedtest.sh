#!/bin/bash

if [ -z $1 ]; then
	HOST=$(uname -n)
else
	HOST=$1
fi
docker run -P -e HOST=$HOST -d --name "speedtest" grynn/speedtest '/run.sh'
