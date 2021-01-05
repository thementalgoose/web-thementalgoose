import { ProjectItem } from "../project-item";

export const transmission = new ProjectItem(
    "/assets/img/project-icon-transmission.webp",
    "Transmission",
    "Transmission is an android app designed as one-stop-shop revision aid in helping you learn to drive in the UK.",
    [
        "A theory test with over 200 questions",
        "10 hazard perception videos",
        "A show-me tell-me section which includes all possible questions (as of 2018)",
        "A signs section with examples of every type of sign you may see on the road",
        "Cloud saving and syncing results between devices",
        "Revision booklet to view all solutions to all questions"
    ],
    [
        {
            type: 'google',
            text: 'Google Play',
            url: 'https://play.google.com/store/apps/details?id=tmg.drivingtutor'
        }
    ]
)