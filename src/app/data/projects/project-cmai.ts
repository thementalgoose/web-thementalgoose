import { ProjectItem } from "../project-item";

export const cmai = new ProjectItem(
    "/assets/img/project-icon-cmai.png",
    "CMAI",
    "CyanogenMod App Installer is an android app which allowed you to download cyanogenmod versions of apps to any version of android and attempt to install it as a root application. This app is now no longer allowed on the play store and no longer maintained, however the github repository hosting the raw apks is still active if needed",
    [],
    [
        {
            type: 'github',
            text: 'Github',
            url: 'https://github.com/thementalgoose/android-cmai'
        }
    ]
)