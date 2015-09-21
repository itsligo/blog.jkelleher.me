---
title: kernel_task high CPU
date: 2015/09/15
slug: kernet-task
taxonomy:
    tag: [productivity]
status: publish
image: asus.jpg
highlight:
  theme: dark
---
#High kernel_task CPU

Bought a new monitor recently (Asus PB287Q) - decent 4K display with native 3840x2160 resolution and pretty darn close to the retina display I've grown accustomed to. On the downside, I noticed a spike in the kernel_task process in Activity Monitor. Normally, this hovers around 2% CPU but now ran in the high 30s. The performance hit was noticeable even with 16Gb fast RAM and a 2.8Ghz i7 behind it.

After a bit of digging I came across the solution - noting that this issue has been around for a couple years so no point waiting for El Capitain later this month. Turns out when a (manageable) load hits the system there's an erroneous reaction which itself leads to overheating. Solution by ![Richard Schwarting](http://blog.kosmokaryote.org/2012/12/technology-kerneltask-consumes-almost.html) points to removing the offending `plist` file governing this response. And he warns that this can potentially be dangerous as it robs the system of its response to over-heating (spinning up fans). In my case (and probably yours) I'd much rather have my cpu cycles back and handle any risk in overheating to other methods.

I'm guessing the problem manifested itself for me due to the added load of pushing 8.3 megapixels - that's 4 times HDTV - who knew?

    1. Open a Terminal (Applications > Utilities > Terminal). This took a dreadfully long time, given how slow the computer was running.
    2. Run these commands (text precede by a # is just a comment)
          > cd /System/Library/IOPlatformPluginFamily.kext # enter main kext directory> cd Contents/Plugins # enter kext's plugins (other kexts)
          > ls # list the available kexts
              ACPI_SMC_PlatformPlugin.kext
              AppleSMCPDRC.kext
              IOPlatformPluginLegacy.kext
              X86PlatformPlugin.kext
              X86PlatformShim.kext
          > sudo mv X86PlatformShim.kext X86PlatformShim.kext.disabled # rename the culprit .kext (after trial and error) to something different so it can't be loaded (doesn't need to add .disabled specifically); start with sudo to do this as the root user (or you won't have permission); this will request your user password
    3. Then, restart your computer to see if it works.