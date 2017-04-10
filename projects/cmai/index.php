<!DOCTYPE html>
<html>
<head>
    <title>Jordan</title>
    <link rel="stylesheet" type="text/css" href="/web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/web/css/style.css">
    <link rel="stylesheet" type="text/css" href="/web/css/blog.css">
    <!--[if gte IE 9]><!-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/ico" href="/web/media/favicon.ico" />
</head>
<body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Jordan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/cv">CV</a></li>
            <li class="active"><a href="/projects">Projects</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/paste">Pastes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container content">
      <h1>CyanogenMod App Installer</h1>
      <hr>
      <p>The CyanogenMod App Installer is an android application which attempts to install some of their specific apps onto any version of android, CyanogenMod-based or not. It doesn't work all the time, but this app acts as the bridge between the CyanogenMod ROM zip files and your device.</p>
      <p>Before reading on, I have the usual disclaimer stuff here: <strong>I do not take any responsibility if this app causes your phone to be bricked, corrupted, broken, or to encounter an unfortunate case of spontaneous combustion. Use at your own risk.</strong> This application contains no harmful code, and it shouldn't break your device. All the potentially harmful code is explained below, and the application is open sourced on github</p>
      <h2>The app</h2>
      <hr>
      <p>This application allows you to download the specific applications from CyanogenMod ROMs to try on your device. It will provide an interface for installing them as regular apps, or if you're running 4.4 Kitkat or below (when Dalvik was the Runtime), you can attempt the root installation method.</p>
      <div class="row">
        <div class="col-sm-4">
          <a href="1.png"><img src="1.png"/></a>
        </div>
        <div class="col-sm-4">
          <a href="2.png"><img src="2.png"/></a>
        </div>
        <div class="col-sm-4">
          <a href="3.png"><img src="3.png"/></a>
        </div>
      </div>
      <h2>Technical stuff</h2>
      <hr>
      <p>When the app is launched, a specially formatted text document is downloaded detailing what is available and what isn't. Everything here is stored in the same github repository (found <a href="https://github.com/thementalgoose/CMAI/tree/master/files">here</a>). the APKs are ripped directly from CyanogenMod ZIPs, and can be found in the same directory</p>
      <p>It allows that when a new application is released or available, I can update the txt file without users having to download a new version of the application</p>
      <h3>Installation (normal)</h3>
      <p>The installation method provided simply invokes the regular installation process for the app. I <strong>cannot fix errors</strong> in this stage, all I do is provide the links to the apps.</p>
      <h3>Root installation (Pre 4.4)</h3>
      <p>In the application, providing you're running the Dalvik runtime there is an option for a &quot;root&quot; installation, which will emulate copying it to the system partition of your device. The application runs a combination of the following commands</p>
      <ul>
      <li>Get a new runtime elevated to su</li>
      </ul>
      <pre><code>Process p = Runtime.getRuntime().exec("su");</code></pre>
      <ul>
      <li>Remount the system partition as read/write</li>
      </ul>
      <pre><code>mount -o remount,rw -t yaffs2 /dev/block/mtdblock3 /system</code></pre>
      <ul>
      <li>Rename the existing application if it exists (acts as a backup)</li>
      </ul>
      <pre><code>mv /system/app/AppOfChoice.apk /system/app/AppOfChoice.bak</code></pre>
      <ul>
      <li>Copy the new APK from the downloads to the /system/app partition</li>
      </ul>
      <pre><code>cat /sdcard/CMApps/AppOfChoice.apk &gt; /system/app/AppOfChoice.apk</code></pre>
      <ul>
      <li>Remove the current app from the system partition</li>
      </ul>
      <pre><code>rm -r /system/app/AppOfChoice.apk</code></pre>
      <ul>
      <li>Modify permissions so they emulate system applications</li>
      </ul>
      <pre><code>chmod 644 /system/app/AppOfChoice.apk</code></pre>
      <ul>
      <li>Remount the system partition as read only</li>
      </ul>
      <pre><code>mount -o remount,ro -t yaffs2 /dev/block/mtdblock3 /system</code></pre>
      <p>During the installation, it will always remount the system partition as read only upon exit as to avoid as many issues as possible. Credit goes to reddit username <a href="http://www.reddit.com/u/wchill">/u/wchill</a> for helping with the code you see above and emulating it in the Android environment</p>
      <p>A small note: I am not responsible for any phone bricking, corruption, or an unfortunate case of spontaneous combustion. Please use this at your own risk. I have done my best to make the application as safe as possible, however as always it may not work for you!</p>
      <h3>Removal</h3>
      <p>If you wish to undo anything done by the app, it has uninstallation methods which will invoke the uninstalling an application mechanism built into android, or if you used the root installation method, then revert the backup made of your system apk file</p>
      <h2>Download</h2>
      <hr>
      <div class="row">
        <div class="col-sm-6 col-lg-8">
          <p>You can download view the app on XDA and download it there, or use this direct download link</p>
          <p></p>
          <p>Why not a play store link I hear you ask? It once was on the play store, however Google changed their developer policy and made it very awkward to justify an app which can download other apps and invoke system changes. Unfortunately now it makes it awkward for me to deploy it, so it's been released to the developer community</p>
        </div>
        <div class="col-sm-3 col-lg-2">
          <a href="http://forum.xda-developers.com/android/apps-games/app-cm-app-installer-t2959922" class="btn btn-primary btn-lg">View XDA page</a>
        </div>
        <div class="col-sm-3 col-lg-2">
          <a href="http://forum.xda-developers.com/attachment.php?attachmentid=3508667&d=1453310949" class="btn btn-success btn-lg">Direct download</a>
        </div>
      </div>
    </div>
<script type="text/javascript" src="/web/js/jquery1.1.js"></script>
<script type="text/javascript" src="/web/js/bootstrap.min.js"></script>
<script type="text/javascript"> 
</script>
</body>
</html>