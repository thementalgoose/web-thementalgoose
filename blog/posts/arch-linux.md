Movement to Arch
2016-07-14
Recently I was finding that Ubuntu just couldn't quite cut it anymore, so i've decided to trial Arch Linux for a bit. After trying MATE and the new Elementary OS beta, I'm heading back to Arch!
# Movement to the Arch Linux world

---

[![Arch Linux](/bin/arch.png)](/bin/arch.png)

For a while now I have been an avid linux user. Once it gets under your skin and you can find alternatives to your windows counterparts, it's almost infectious. Ubuntu was what I started out on, and realising the customisation available from the linux world made me quickly go through a variety of distributions (distros), like [Fedora](https://getfedora.org/), [Gnome](https://www.gnome.org/), [MATE](https://ubuntu-mate.org/), raw [Debian](https://www.debian.org/), and (probably my favourite distribution) [Elementary OS](https://elementary.io/). I used Elementary more than all the other distributions put together, and I absolutely loved it. I tweaked it to my hearts content, and once I was up an running (like any operating system), I couldn't have been happier. For all those who haven't tried out Elementary OS, I beg you to do so. It's quick, intuitive and full of eye candy. 

Thoughout my time trialing every distro I could find, I always went back to an Ubuntu/Debian base. I just found it incredibly easy to install software and everything made more sense. Whenever I was tech support for a windows PC, I loved coming back to Linux (seeing the terminal and using `sudo apt-get install <package>` was fantastic). But, as linux users will know, drivers are sometimes a pain. I had never had a problem with an installation of Linux before (apart from an old kernel causing bluetooth problems once), everything was detected and supported right out the box, and I loved that. None of the endlessly trawling the internet for Windows drivers that are compatible with the machine and with the correct version of Windows on it.

There was a catch though, and that came in the form of a new laptop that I purchased. You have to remember that I didn't really have any problems with drivers before, and so when I saw a Skylake-based Intel laptop on offer, I jumped at it. And as such, I have a new laptop (i7-6500U, 16GB, 256GB SSD for those wondering). As I have found over the past month, linux support for Skylake 6th generation graphics sucks, and I couldn't find a configuration usable for my beloved Elementary OS. And so, I have been forced onto another more compatible distribution, and I saw it fit to try out Arch Linux

For those of you who don't know, Arch Linux has a golden philosophy when it comes to their operating systems, and I have known the benefits for a long time now. They adhere to **KISS**

- **K**eep
- **I**t
- **S**imple
- **S**tupid

Arch linux is designed to be the most up to date, stable, and community driven linux distribution that belongs to you. It differs from the Ubuntu base many of us love and are used to, but I think that it's worth you doing what i'm doing, trialling out Arch Linux for a couple of weeks and seeing how it works. There are a number of benefits 

## Pros and Cons

### - It's a pain in the a$# to install

Arch Linux is a pain the backside to install, and for those branching out into it, it can look scary. The truth is there are some fantastic guides out there that you can easily follow and install the system too. I started off by using a "Arch installer" distribution called [Antergos](http://www.antergos.com), which allows you to install the arch linux base and pick a desktop environment of your choice. 

### + The package manger

Jesus christ the package manager. This is leaps and bounds ahead of what it's Ubuntu equivilant has to offer. It's so good at keeping software bleeding edge. Pretty much everything uses the [AUR](https://aur.archlinux.org/) (Archlinux User Repository), and with this central repository, there is no need to (like in Ubuntu) use `add-apt-repository` and update the aptitude package manager! :D 

The AUR houses nearly all the software you will ever want. Arch uses `pacman`, a package manager which is incredibly robust and fully integrated into the operating system, and with tools like `yaourt` available at your disposal, the software installation process is fantastic. It uses the `-S` flag to install, `-R` to remove, and many more. So, for example, running `pacman -Syyu` performs a complete system upgrade

```
[jordan@jordan-pc ~]$ sudo pacman -Syyu
[sudo] password for jordan: 
:: Synchronising package databases...
 testing          73.0 KiB  1588K/s 00:00 [##########################] 100%
 core            119.9 KiB  2.34M/s 00:00 [##########################] 100%
 extra          1755.3 KiB  2.46M/s 00:01 [##########################] 100%
 community         3.5 MiB  2.45M/s 00:01 [##########################] 100%
 multilib        160.3 KiB  2.61M/s 00:00 [##########################] 100%
:: Starting full system upgrade...
resolving dependencies...
looking for conflicting packages...

Packages (12) device-mapper-2.02.155-1  firefox-47.0-1  gnutls-3.4.13-1  
              lib32-libxcb-1.12-2 libsystemd-230-4  libwbclient-4.4.4-1  
              lua-5.3.3-1  lvm2-2.02.155-1 pacman-mirrorlist-20160606-1  
              smbclient-4.4.4-1  systemd-230-4  systemd-sysvcompat-230-4

Total Download Size:    54.03 MiB
Total Installed Size:  156.80 MiB
Net Upgrade Size:       -5.83 MiB

:: Proceed with installation? [Y/n] 
```

If I wanted to install a program (say "Android Studio", I can simply use `yaourt` to search the AUR and download it)

[![Yaourt](/bin/yaourt.png)](/bin/yaourt.png)

### + Rolling releases

Distro's like Ubuntu and Fedora all have versions, Ubuntu (now on 16.04) has had over 20 versions (based on their naming system) and Fedora is on Fedora 23 now I believe. Whilst the latest version has the latest and greatest software, it isn't very easy to upgrade. You have to perform a complete reinstall or use some (usually buggy) updater to try and migrate your files between versions, not to mention any dependency issues you have with your final installation. Arch Linux doesn't have that, it has one version, Arch. That version is continuously updated through `pacman` and through their live ISO images, and so the second a new feature gets implemented, it's available for you and if you're just downloading the software.

You literally get software as it's deployed. No need to wait for Ubuntu to release it in their next Operating System bundle, it's available from the AUR to be compiled directly on to your machine

### + The speed

The speed of Arch Linux is great, because you're only loading in the software at **you** want. Distributions like Ubuntu come with a lot of pre-installed packages for you to use, and whilst some of them might be useful, I doubt you need to install every single one. Arch starts off with just a shell, and you add and remove software as you please. In my current setup, I only have a select few packages installed and it's blazing fast. For those of you just saying "Why not remove what you don't want in Ubuntu", it's kind of a backwards solution to the problem ;)

### + The community

Arch Linux boasts probably one of the best support and developer communities i've ever experienced. Their help is second to none, and their wiki pages are incredibly helpful and insightive into your system. Must better than the Ubuntu Wiki we all love and hate

[![Wiki](/bin/arch-wiki.png)](/bin/arch-wiki.png)

## My experience

---

I am currently running Arch Linux on the most recent kernel available and it's a lot more stable on my Skylake configuration than any other setup i've found (that includes Ubuntu bases with everything up to 4.5 kernel releases). I have two desktop environments setup, of which I am alternating between

### [XFCE](http://www.xfce.org/)

The first desktop environment I have is XFCE with Compiz as it's window manager, and Emerald configuring screen decoration. I have the Arc Darker theme enabled, with Plank running at the bottom as my application launcher. This is my traditional fallback desktop, and in terms of what i'm used too, it's exactly how I want it. Compiz is providing some very small and polishing animations to the feel of the Desktop, and it's a pleasure to use for everything that i'm doing

### [i3](https://i3wm.org/) 

i3 is a Tiling Window Manager, and for those of you who don't know what that is, it maximised the use of the screen by tiling windows automatically to take up all the available space. I am on-and-off trialing this window manager as an alternative. I am unsure if I will keep using it in the future, but it's certianly making me think about it, and again once it's configured, I can definitely see the benefits. It allows for tiling of windows, stacking them for smaller displays, and the `.i3/config` file is incredibly intuitive to edit and customise to your liking.

## What was the point?

---

I want to encourage you to try something new for your desktop. Try a different distribution, maybe switch window managers and DE's on your base and branch out with some new programs. Whilst Arch is a pain the ass to install, have a look at [Apricity OS](http://apricityos.com/) or [Antergos](https://antergos.com/), which acts as "Easy installers for Arch". I started off with Antergos, and would definitely recommend it as it does all the setup (including configuring a desktop environment) for you. 

Whilst this may sound like I have just been employed by Arch, I haven't. I'm still considering going back to the ubuntu base I am so used too, but when you look at the evidence and the fact that I've got my system setup and configured it's hard to justify going back. Everything is available, and I am yet to find something that isn't found in the AUR that's in an ubuntu repo

[![Arch](/bin/arch-screenfetch-reddit.png)](/bin/arch-screenfetch-reddit.png)

At least think about switching. It might be the refresh you need! 

## Edit (14/07/2016)

Well, It's been just over a month since i've been using this set, and I thought i'd update you on my progress. So the [Elementary OS Loki beta dropped a few weeks ago](http://blog.elementary.io/post/145881464631/loki-beta), and having been a massive fan of Elementary OS before, I decided to take the plunge and throw away my current Arch setup for the Beta. I did like the familiarity of it, but what I realised is there was only a few things I missed regarding the look and feel of Elementary OS, and so i've decided again today to head back to Arch linux, probably with XFCE or MATE desktop, and customise it how I want it again taking what I missed from Elementary OS. I sided with the XFCE desktop when I was choosing between i3 and XFCE, whilst i'm sure I could get used to i3, I'm too set in my ways to give up intuitive floating windows. I'll let you know how it goes.

Thanks for reading

~Jordan
