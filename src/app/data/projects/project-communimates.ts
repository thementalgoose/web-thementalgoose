import { ProjectItem } from "../project-item";

export const communimates = new ProjectItem(
    "/assets/img/project-icon-communimates.png",
    "Communimates",
    "Hack24 2018<br/>Communimates is an android app that Jono Alford, Sebastian Ghetu, David Van Zyl and I developed as part of the Hack24 event in Nottingham in 2018. " + 
    "It uses a bunch of azure cloud services to intelligently match people to chat based on a sentence from the user and ML determining good matches",
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