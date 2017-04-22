<?php
  require '../../php/Parsedown.php';

  $Parsedown = new Parsedown();

$howitworks = $Parsedown->text("
## The technical stuff

### Backend

So the application works by storing the raw `apk` files my github repository for the application, found [here](http://github.com/thementalgoose/cmai). When the application is first launched, it reads in the `index.txt` document found in the [same repository](https://github.com/thementalgoose/CMAI/blob/master/files/index.txt), which is carefully parsed in the app to load the different directories and download locations for all of the apps. 

### Downloading

With this setup, the layout is build so that the apps display along the left hand side, and users can download them to their device. Different API versions are handled on an app-by-app basis, so applications can have all the versions available to them, and it be dynamically updated simply by updating the `index.txt` file in github.

### Installing

#### Normal mode

When the app is downloaded, it provides an interface to emulate an installation of the specific application. This is where it may fail or may success and not fully work, it varies from device to device. I, as stated before, only provide a mechanism to install them, I do not have access to the source code for the application and so I cannot make applications work on specific devices.

#### Root mode

In the application, providing you're running the Dalvik runtime there is an option for a \"root\" installation, which will emulate copying it to the system partition of your device. The application runs a combination of the following commands

- Get a new runtime elevated to su

```
Process p = Runtime.getRuntime().exec(\"su\");
```

- Remount the system partition as read/write

```
mount -o remount,rw -t yaffs2 /dev/block/mtdblock3 /system
```

- Rename the existing application if it exists (acts as a backup)

```
mv /system/app/AppOfChoice.apk /system/app/AppOfChoice.bak
```

- Copy the new APK from the downloads to the /system/app partition

```
cat /sdcard/CMApps/AppOfChoice.apk > /system/app/AppOfChoice.apk
```

- Remove the current app from the system partition

```
rm -r /system/app/AppOfChoice.apk
```

- Modify permissions so they emulate system applications

```
chmod 644 /system/app/AppOfChoice.apk
```

- Remount the system partition as read only

```
mount -o remount,ro -t yaffs2 /dev/block/mtdblock3 /system
```

During the installation, it will always remount the system partition as read only upon exit as to avoid as many issues as possible. Credit goes to reddit username [/u/wchill](http://www.reddit.com/u/wchill) for helping with the code you see above and emulating it in the Android environment

A small note: I am not responsible for any phone bricking, corruption, or an unfortunate case of spontaneous combustion. Please use this at your own risk. I have done my best to make the application as safe as possible, however as always it may not work for you!

### Removal

This app provides a means of removal as well, via the `clear storage` option, or, when an application is detected as installed, it will offer the option to uninstall the suggested package. If you have used the root method on the Dalvik runtime, then there is a separate uninstall function which should revert any backup created during the installation process

");
?>