# Continuous Deployment with Github and a VPS

--- 

Website deployment is, as most of you will know, quite tedious. Invariably if you're using any sort of VCS for your server you'll know it involves committing code to a central server, then SSH-ing into your server, pulling the latest data and fixing any issues with the code, moving around persistent data whilst updating framework, etc. What this aims to do is automate that process for you, because after all why should it take you a long time to deploy your code. This aims to cut down the process to just two steps

- Commit changes in the form of raw data (ie. Markdown formatting) or configuration files
- Let the server update and handle all your content automatically

This will hopefully reduce the number of errors throughout your site, as well as being quicker than you ever could be. The process is called Continuous Deployment, and it is a difficult thing to pull off. However, all of the well known sites you use every day utilise continuous deployment, and it's one of the reaons they're so successful.

This tutorial will show you how to setup a website, hosted on github that will continuous deploy on your server every time you commit code. 

This assumes that your server is live on your VPS under `/var/www/domain.com/` under an apache2 server, and that you are using an Ubuntu server distribution or CentOS (both are fairly interchangable). It also assumes that, scene as we are assuming that you have setup a server by on a specific folder, then you know what you're talking about when it comes to Web terminology, and ideas behind a Distributed Version Control System like Git

If your website is currently deployed, grab all your source files and make sure they're available on your **local machine**! You will be pushing files from your local machine to github, which will invoke travis, which will launch to your VPS. You don't initially want your source files available online!

[![github](/bin/cd-progress.png)](/bin/cd-progress.png)

## What we're going to do 

---

We're going to be doing the following to setup the continuous deployment

- Move all your web contents to one central folder on your local machine
- Creating a restricted access user
- Creating a ssh key for the user
- Encrypting the ssh key for travis to use (and setting up decrypting it)
- Setting up the scripts to run

## Restricted access user on your VPS

---

It's a good idea when dealing with this continuous deployment system to create a restricted access user for your server that only has access to a certain set of directories, so that should the account be breached, it only has access to your web directory and nothing else on your VPS. The worst case scenario here is that your website gets compromised, but if this is the case you won't lose any data that isn't on github

You can call this user whatever you want. I went with `github` for mine, but it's your choice. SSH into your server and create a user.

It's a good idea to setup your `.git` folder in a directory **outside** your website content, in the interest of security. It doesn't matter which way you do it in the end as the security measures we implement will mean that everything cannot be seen on your web directory anyway, but some prefer to keep the live deployment stuff outside of the website

For whatever you decide to do will affect what permissions you need to give this user. Both methods are detailed below and are limited to only the server implementation, so it can be swapped out any time. For the purposes of this tutorial, i'm using `/var/repo/` for the external implementation. You can skip over the section that doesn't apply to you

### Creating the .git folder (External)

You will need to create a restricted access user to be used for accessing the file. We do this by only giving it overship over the relevant folders in the VPS 

```bash
mkdir /var/repo
adduser github
chown -R github:github /var/www/domain.com
chown -R github:github /var/repo
```

Once you have created all the folders, you need to sign into the new user you have made and initialise a "bare" git repository. This will be used as a target to push data too, and what travis will connect too

```bash
su - github
cd /var/www/domain.com
mkdir .git
cd .git
git init --bare
```

If everything has gone successfully you will see inside this `.git` folder some files and folders, one of which should be entitled `hooks`. You need to add a "hook", which is a script which will run when something changes in the `.git` folder. For this, we will be editing the `post-receive` hook, which will run when a request is received from somewhere (in this instance, this will be our Travis CI server)

```
cd hooks/
nano post-receive
```

And add the following files to the file

```
#!/bin/sh
git --work-tree=/var/www/domain.com/ --git-dir=/var/repo/.git checkout -f
```

You can add any bash script or command you want in here. This will essentially run whenever Travis does, so it could include anything like permission modifications to certain files, bash file manipulation, moving files and managing content surrounding the `git checkout` step. This will be where your management comes, and will be specific to your website.

Exit the file. You will need to remark the file as executable, so perform the following command below

```
chmod +x /var/www/domain.com/.git/hooks/post-receive
```

You should now be setup server side. Your repository should look like the following on your VPS

/var/www/domain.com
- **css**
- **js**
- `index.php`
- `README.md`
- `.gitignore`

/var/repo
- **.git**
    - **hooks**
        - `post-receive`


### Creating the **.git** folder (Internal)

You will need to create a restricted access user to be used for accessing the file. We do this by only giving it overship over the relevant folders in the VPS 

```bash
adduser github
chown -R github:github /var/www/domain.com
```

Once you have created all the folders, you need to sign into the new user you have made and initialise a "bare" git repository. This will be used as a target to push data too, and what travis will connect too

```bash
su - github

cd /var/www/domain.com
mkdir .git
cd .git
git init --bare
```

If everything has gone successfully you will see inside this `.git` folder some files and folders, one of which should be entitled `hooks`. You need to add a "hook", which is a script which will run when something changes in the `.git` folder. For this, we will be editing the `post-receive` hook, which will run when a request is received from somewhere (in this instance, this will be our Travis CI server)

```
cd hooks/
nano post-receive
```

And paste the following code in. 

```
#!/bin/sh
cd /var/www/domain.com
git checkout -f
```

You can add any bash script or command you want in here. This will essentially run whenever Travis does, so it could include anything like permission modifications to certain files, bash file manipulation, moving files and managing content surrounding the `git checkout` step. This will be where your management comes, and will be specific to your website.

Exit the file. You will need to remark the file as executable, so perform the following command below

```
chmod +x /var/www/domain.com/.git/hooks/post-receive
```

You should now be setup server side. Your repository should look like the following on your VPS

/var/www/domain.com
- **.git**
    - **hooks**
        - `post-receive`
- **css**
- **js**
- `index.php`
- `README.md`
- `.gitignore`

## Public key authentication

---

We need to setup a ssh authorisation key so that Travis can access your VPS securely without a password. To do this, you need to generate a ssh key and list the key in the `authorized_keys` file.

To do this, on you **local machine**, enter the following. We can copy to your server by pasting it into the SSH terminal

```
cd ~
ssh-keygen
```

When prompted to save it somewhere, call it something like `github-key`, leaving the passphrase

```
Generating public/private rsa key pair.
Enter file in which to save the key (/home/user/.ssh/id_rsa): github-key
Enter passphrase (empty for no passphrase): 
Enter same passphrase again: 
Your identification has been saved in github-key.
Your public key has been saved in github-key.pub.
```

Now, inside your **VPS**, make sure you are logged in as the `github` user

```
su - github
```

And create the `.ssh` folder and specify the authoized keys. This `.ssh/authorized_keys` file is the default location for SSH authenticated keys, and so placing it here does the authentication. No need to configure it in another file, etc.

```
mkdir .ssh
chmod 700 .ssh
nano .ssh/authorized_keys
```

And paste in the contents of the `github.pub` file. Make sure that it is the **public** file, and not your private key! Save and exit, and sort out the permissions for the file

```
chmod 600 .ssh/authorized_keys
exit
```


#### Finished server side 

You are now setup server side! You can exit the github user and the server and leave it be. To summarise, what you should have done

- Created a restricted access user and given it permissions to only the content folder and the repository folder (same folder if you're internally storing your `.git` folder)
- Setup a `post-receive` "hook" for the bare git repository to run upon a request.
- Created a SSH key that will be used between Travis and your VPS, and added it as an authorized key into the VPS in the `.ssh/authorized_keys`

If you haven't done any of those steps, this continuous deployment will fail. Please make sure you've done everything

## Setting up Travis

---

From now on, all steps are on your **local machine** with the web content

To setup travis, it is as simple as adding a `.travis.yml` file in the root of your repository. Travis will scan this and execute the file, and perform whatever you specify. The problem here is you need to "spoof" the SSH key so that Travis can access your server (through that `authorized_keys` file) 

You need to install a ruby travis program to your local machine, and use this to encrypt your private SSH key.

Execute the following on your local machine (making sure you have ruby installed)

```
cd <website-directory>
mv ~/github-key .
gem install travis
travis login
travis encrypt-file github-key --add
```

If you are having issues running travis, try executing all travis commands in `sudo` and make sure you have the "ruby" and "ruby developer tools" (On an debian based system, execute `sudo apt-get install ruby-dev`)

The travis login should allow you to login with your github account, and it will encrypt the file.

You should now have a `.travis.yml` file present in your repository as well as a `github-key.enc`, with something resembling the following lines at the bottom. 

```
before_install:
  - openssl aes-256-cbc -K $encrypted_27292738e18d_key -iv $encrypted_27283648e18d_iv -in github-key.enc -out github-key -d
```

Please take this opportunity to **delete your `github-key`** file (keeping the `.enc` file). Travis when executing will decrypt the `github-key.enc` into `github-key`, which you then place in the SSH private key default directory of `.ssh/id_rsa` in order to "spoof" the authentication

## Scripts

---

The easiest way to do this is to modularise your deployment structure, so that you don't have one long confusing `.travis.yml` script. 

In the root of your website structure, make a folder `.script` and inside it create two files, namely `install.sh`, and `push.sh`

- `install.sh` will perform the decryption of the ssh key and "spoof" it over the default ssh key location for Travis. This will make travis appear like a regular SSH connection defined between two hosts
- `push.sh` will initialise a git repository inside travis and perform the "push to deploy" stage. This means that any processing you want to do on Travis can be propagated to your website without pushing to github

#### install.sh

Install will contain the openssl information generated from the previous step

```
#!/bin/bash
# Import the SSH deployment key
openssl aes-256-cbc -K $encrypted_8j6shs679246_key -iv $encrypted_8j6shs679246_iv -in github-key.enc -out github-key -d
chmod 600 github-key
mv github-key ~/.ssh/id_rsa
```

#### push.sh

We only want this to happen if it's on the master branch, and so we perform a check in the push script

```
#!/bin/bash
if [ $TRAVIS_BRANCH == 'master' ] ; then
    git init
        
    git remote add deploy "github@domain.com:/var/www/domain.com/"
    git config user.name "Travis CI"
    git config user.email "info@domain.com"
    
    git add -A
    git commit -m "Deploy"
    git push --force deploy master
else
    echo "Not on master, not deploying"
fi
```

**EXTERNAL**: If you are using the external storage method for your `.git` folder, make sure that the remote add deploy line is substitutes for your directory of the git file

```
git remote add deploy "github@domain.com:/var/repo/"
```

With the creation of these files, we have modularised everything we want travis to perform. We can now have a simpler travis file that is much more coherant and understandable.

Paste the following into your `.travis.yml` file.

```
language: ruby
rvm:
  - 2.1
env:
  global:
  - NOKOGIRI_USE_SYSTEM_LIBRARIES=true
addons:
  ssh_known_hosts: domain.com
before_install:
  - bash .scripts/install.sh
script:
  - echo "I have no tests to perform on my website"
after_success:
  - bash .scripts/push.sh
```

With this, your website structure on your **local machine** should be as follows

&lt;website directory&gt;
- **.script**
    - `install.sh`
    - `push.sh`
- **css**
- **js**
- `index.php`
- `README.md`
- `.travis.yml`
- `github-key.enc`

That is all your scripts set up. With the completion of this, whenever a commit is made to Github, the following should happen

- Github commit will launch Travis
    - Travis will initialise
    - Travis will decrypt your ssh key
    - Travis will "spoof" your ssh key in it's own `.ssh/id_rsa` field
    - Travis will check if it's on a "master" branch
        - If so, it will initialise a git repository
        - It will perform a `git push --force deploy master`, which will push to your ssh location
- Your website is deployed

## Extra security

---

### .htaccess restrictions

You will find that you are storing those scripts to be run on travis inside your repository will mean that they're accessible through your web app. To get around this, you can add a `.htaccess` file to the root of your project where you can specify what files you want to return as not found.

```
RewriteEngine on
RewriteBase /

RedirectMatch 404 /\.
```

The following file returns a 404 error for any file or folder starting with a `.`, which will be 

- `.git`
- `.gitignore`
- `.travis.yml`
- `.htaccess`

In order for this to work, you may need to SSH into your server and modify the `/etc/httpd/conf/httpd.conf` file so that the Apache2 server can read *htaccess* file. You need to scan this file, and change all occurances of `AllowOverride None` to `AllowOverride All`. This will require you to restart your server.

This is also the reason why the internalisation of your `.git` folder doesn't matter, as the RedirectMatch will mean that your .git folder appears as a **404** on the clients page, and they won't be able to access

## Finished!

---

With all that, we have successfully setup the Continuous deployment mechanism for the website. Keep in mind that your mileage may vary, but this should work as described above. We have addressed all relevant security for the web app by providing encrypted keys and restricted permissions with the accounts we are using.

Continuous deployment is something that in practice will save you a lot of time, and even though it's a ball-ache to setup, it's worth it in the end. You can checkout a live demonstration of this [here](https://github.com/thementalgoose/JordanFisherWebsite) 

Remember that the process of continuous deployment is awkward to test, so any scripts that you have running (I have [generatemd.sh](https://github.com/thementalgoose/JordanFisherWebsite/blob/master/.script/generatemd.sh) which moved my `post.md` to `/post` and then parses it using external libraries) was incredibly fiddily to setup. Expect problems, but when all the problems are ironed out, you will have a reliable and robust deployment solution

---

Thanks for reading

*~ jordan*