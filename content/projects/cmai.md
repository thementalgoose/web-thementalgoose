+++
title = "CyanogenMod App Installer"
date = 2012-03-10
draft = false
description = "Attempt to install apps made by the CyanogenMod team on any AOSP or android-based ROMs as system or user facing apps"
categories = ['Development']
tags = ["Android"]
+++

## Install apps on any ROM

CyanogenMod App Installer is a solution for those who want the CyanogenMod apps on Stock Android or another ROM. It works by pulling the APK from the application, downloading it to your device and and installing it on to the system, with the option if you're running Android 4.4 or below to install it as a root user, pushing it directly to your /system/app folder and setting the appropriate permissions.

This app is now no longer allowed on the play store and no longer maintained, however the github repository hosting the raw apks is still active if needed

### How it worked

The app attempted to get root access by requesting su

```kotlin
val process = Runtime.getRuntime().exec("su")
```

For rooted users, it attempted to the following sequence to attempt to place it in the /system folder

```bash
# Remount the system partition as read-write
mount -o remount,rw -t yaffs2 /dev/block/mtdblock3 /system

# Backup
mv /system/app/AppOfChoice.apk /system/app/AppOfChoice.bak

# Copy to system 
cat /sdcard/CMApps/AppOfChoice.apk > /system/app/AppOfChoice.apk

# Permission
chmod 644 /system/app/AppOfChoice.apk

# Remount the system partition as read-only
mount -o remount,ro -t yaffs2 /dev/block/mtdblock3 /system
```

### Links

- The source code is still available on [Github](https://github.com/thementalgoose/android-cmai) 
- You can also see the original post on [XDA Developers](https://forum.xda-developers.com/t/app-4-0-cm-app-installer.2959922/)