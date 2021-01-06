import { ProjectItem } from "../project-item";

export const hourglass = new ProjectItem(
    "/assets/img/project-icon-hourglass.png",
    "HourGlass",
    "HourGlass is an lightweight android app for quickly finding out what a value should be between two dates.",
    [
        "Add values for multiple metrics and currencies",
        "Dedicated view for those that have finished",
        "Widget support to see your progress at a glance in 1x1 and 1x2 variants",
    ],
    [
        {
            type: 'google',
            text: 'Google Play',
            url: 'https://play.google.com/store/apps/details?id=tmg.hourglass'
        }
    ]
)