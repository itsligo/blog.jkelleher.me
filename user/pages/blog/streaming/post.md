---
title: Streaming
date: 2007/06/14 16:59:00
taxonomy: 
 category: blog 
---

I've been looking on and off at video streaming for my classes over the last few years. An upcoming talk gave me some impetus to revisit what's current and doable without breaking sweat. That's how I came across CamStudio (again), Windows Media Encoder and Microsoft Movie Maker.
Previously, I played about with Macromedia Captivate though my version is quite old now and there are better free options. Anyhow, I found the audio capture quite poor and the encoding options weak.![](http://bp1.blogger.com/_-8eBgLSYyzA/RnF2uq_sMuI/AAAAAAAAAgk/qtr0aFOw6e8/s320/cam.jpg)
As always, I looked to open-source because not only is it free but I can get it right away. Camstudio shines out above the crowd. It's a classic case of a simple idea well executed. Basically, it 'click and go' happily capturing audio and video. For audio, you can take your own voice (best through proper headphones on linein) or the PC speaker output. Video, for me, is typically the screen capture but you can also do a 'talking head' piece in the corner of the screen (for the vain!).
A nice feature is how you can have your mouse action highlighted with a colour shape (like a circle) - I usually chose the larger system cursors too.
Of course, where all such tools compete is in how well (or rather how small) the output is handled. Camstudio offers several built-in encoders but do yourself a favour and choose [MSU ](http://www.compression.ru/video/ls-codec/screen_capture_codec_en.html)Screen Capture Lossless Codec. It compresses much better than CamStudio's own codec and runs faster too.
Now for the bad news!
I've loved Camstudio - but it's been a short affair... For reasons well beyond my understanding, Camstudio no longer seems to like recording audio.![](http://bp3.blogger.com/_-8eBgLSYyzA/Rno-46_sMvI/AAAAAAAAAgs/GuJt3fFNMR4/s320/wme.jpg) I've done everything short of waving a dead chicken at it. I suspect audio drivers or codecs are at fault but the interplay between these makes it difficult to solve. The codecs mentioned above are really good but without audio, I must move to option B - Windows Media Encoder.

Windows Media Encoder is [free ](http://www.microsoft.com/windows/windowsmedia/forpros/encoder/default.mspx)(yup) from Microsoft. It does pretty much everything Camstudio does but also handles proper streaming (beyond this mere mortal) and transcoding (that's converting from one format to another to you and me).

It doesn't have cursor highlighting (just change your system cursor to 'extra large' or 'high contrast' for the duration) or auto panning (where the recording window follows your cursor about the screen). The latter is 'cool' but makes for harder work for the encoder.

On the up side, it creates proper wmv files which Camstudio doesn't (even though the correct codec appears as an option - don't work). You can tweak the codec settings but I managed to get full screen (1680x1050, that's big) with audio down to about 200kb for 10 seconds of video. I wouldn't go lower than that but remember the wmv format streams from your web server so the user will see the video long before the whole file is downloaded - so don't be mean about the quality. Another choice would be to drop the resolution to say 1024x1000 or so - still a big window but a lot less pixels to compress.

I've even used WME to generate WMV files from free online videos whose codecs prevented easy viewing from the web site.

WMV is where it's at right now though SWF is also an option. Personally, codecs are not something to mess with so using one program (WME) to capture and compress (once) is a better way to go.

Finally, when Camstudio worked for me, I used to capture with the MSU Screen Capture lossless codec (big files abound) and then put it through WME to generate the WMV file. Anyhow, check out my site to see new WMV files popping up about the place.

