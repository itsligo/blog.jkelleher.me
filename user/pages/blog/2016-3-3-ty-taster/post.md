---
title: TY Taster
taxonomy:
    tag: [iot]
status: publish
image: gsm-iot.jpg
slug: ty-taster
highlight:
  theme: dark
---
#TY Taster Workshop

IoT (Internet of Things) is big business but still in its infancy. At IT Sligo, this Jan (2016) we introduced a new Internet of Things [module](http://amm-json.itsligo.ie/module/web/28/COMP06208/201500/999999) as part of the new [Level 8 Computing (Hons) programme](https://itsligo.ie/courses/bsc-hons-degree-in-computing/). It's our first toe in the water of electronics and comes at the perfect time to capitalise on the IoT & Maker movement.

* ssh root@10.0.1.12   // connects to Arduino
* curl 10.0.1.12/arduino/digital/8/1     // sets pin 8 high to take photo
* 10.0.1.12/sd/ty/                // to browse to the web server on the Yun

![Server running](screengrab.png)

##Sketches we'll use

* YunTerminalSketch    // to watch the boot process of the Yun
* tweetcam_rest    // to help the Yun send a tweet and grab an image
* ver2              // for the Uno to send/receive SMS messages
* ty            // to upload web pages
* 