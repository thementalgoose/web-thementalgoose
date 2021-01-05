import { ProjectItem } from "../project-item";

export const flashback = new ProjectItem(
    "/assets/img/project-icon-flashback.webp",
    "Flashback",
    "Flashback is an android app for formula 1 statistics from the history of formula 1, and news from all around the web. ",
    [
        "Race results up to latest race",
        "Race results sync just a few hours after the race finishes",
        "Qualifying results + grid penalties for races in the 2000 and later",
        "Calendar for a given season",
        "All races held at a given track",
        "Driver overview with points and career breakdown",
        "Constructor overview and driver lineup history",
        "Configurable RSS feed for formula 1 news",
        "Notification support for races and qualifying sessions",
    ],
    [
        {
            type: 'google',
            text: 'Google Play',
            url: 'https://play.google.com/store/apps/details?id=tmg.flashback'
        }
    ]
)