New Website (Version 3)
2016-05-31
With some free time on my hands I decided to re-vamp my website, providing extra productivity tools in a more seamless and fluent way. Read up about the changes i've made here
# New Website

---

This is the third revision of my website, and this time I decided to do things a little differently.

It became apparent from some opinions of users who had seen my website that it was missing a few key things. I made the personal reflection that my CV-Website was too spread out, requiring a massive web page to view all the information. I realised that that can be whittled down into the key skills and important facts that I wanted to get across, and so I **condenced the website** massively into CV, which could be potentially viewed in one web page, whilst still holding the ability for expansion. I modularised the CV to not include projects, and instead keep that under a separate section, of which I can expand as and when opportunities or projects finish. You can read my CV [here](http://cv.jordanfisher.me) if you are interested. 

I wanted to make the process of updating my website a lot simplier. At the moment it involved making changes locally, committing them, then going to my website provider, SSH-ing into the server, performing a `pull` and managing the persistence of some documents. It was a slow process, and so with this website I decided to introduce **Continuous Deployment** as a method of deploying my website. Now my changes go from adding a simple post like this, no need for formatting or HTML testing, as this is all done when the server is deployed with the help of [Travis-CI](https://travis-ci.org/). You can read up on the process [here](/blog/tutorials/continuous-deployment/), and view the Travis Build log [here](https://travis-ci.org/thementalgoose/JordanFisherWebsite)

I also realised that my CV website wasn't really doing much for me. It was just there, and was visited as and when required by whoever. I wanted to make my website more productive, and so introduced a [pastes](http://pastes.jordanfisher.me), which now I can use along with whoever will find it useful to instantly persist data online when blocks of information want to be shared quickly. I've also just enabled Syntax highlighting from the [highlightjs library](https://highlightjs.org/), to make pastes more readable. Furthermore I wanted an area where I could professionally share information about processes for various things, and so made the "blog" section. Here I can post about what is on my mind, new information happening or anything that excites me. Later on I will be adding a comments section I think, but for now it's just to read. There are a handful of other changes, like I learnt a lot about DNS and IP Blocks, meaning I have utilised prefixes to my web domain (ie. [pastes.jordanfisher.me](http://pastes.jordanfisher.me) redirectes to the relevant directory)

---

You can view the previous versions of the website below. 

- **[Version 1](http://jordanfisher.me/old/v1)**
    - Version 1 was my first attempt at this, and everything created there is done by me. No use of external libraries
- **[Version 2](http://jordanfisher.me/old/v2)**
    - Version 2 was the second attempt, and I decided to utilise bootstrap to make the website more professionally responsive

---

Thanks for reading

*~ Jordan*