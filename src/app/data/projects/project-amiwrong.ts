import { ProjectItem } from "../project-item";

export const amiwrong = new ProjectItem(
    "/assets/img/project-icon-amiwrong.png",
    "Am I Wrong",
    "Hack24 2017<br/>Am I Wrong is an android app that Jono Alford, Sebastian Ghetu and I developed as part of the Hack24 event in Nottingham in 2017. " + 
    "It allows you to anonymously ask for opinions and crittercisms on the ambiguous decisions you've made. Only once you have voted can you view the comments from people reacting to what you did or didn't do!",
    [],
    [
        {
            type: 'google',
            text: 'Google Play',
            url: 'https://play.google.com/store/apps/details?id=studio.roboto.hack24'
        },
        {
            type: 'youtube',
            text: 'Youtube',
            url: 'https://www.youtube.com/watch?v=yOQyyWd_l88'
        },
        {
            type: 'web',
            text: 'Hack24',
            url: 'https://hack24.co.uk'
        },
        {
            type: 'person',
            text: 'Sebastian Ghetu',
            url: 'https://ghetu.net'
        },
        {
            type: 'person',
            text: 'Jono Alford',
            url: 'https://uk.linkedin.com/in/jonoalford'
        }
    ]
)