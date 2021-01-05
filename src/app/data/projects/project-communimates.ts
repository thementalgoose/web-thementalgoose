import { ProjectItem } from "../project-item";

export const communimates = new ProjectItem(
    "/assets/img/project-icon-amiwrong.webp",
    "Am I Wrong",
    "Am I Wrong is an android app that Jono Alford, Sebastian Ghetu, David Van Zyl and I developed as part of the Hack24 event in Nottingham. " + 
    "It allows you to anonymously ask for opinions and crittercisms on the ambiguous decisions you've made. Only once you have voted can you view the comments from people reacting to what you did or didn't do!",
    [],
    [
        {
            type: 'youtube',
            text: 'Youtube',
            url: 'https://www.youtube.com/watch?v=bGU1Q54qHow'
        },
        {
            type: 'person',
            text: 'David Van Zyl',
            url: 'https://davidvanzyl.io/'
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