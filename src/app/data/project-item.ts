export class ProjectItem { 
    public logo: string;
    public title: string;
    public subtitle: string;
    public list: string[];
    public links: {
        type: 'google' | 'web' | 'github' | 'youtube' | 'person',
        text: string,
        url: string
    }[];

    constructor(
        logo: string,
        title: string, 
        subtitle: string,
        list: string[],
        links: {
            type: 'google' | 'web' | 'github' | 'youtube' | 'person',
            text: string,
            url: string
        }[]
    ) { 
        this.logo = logo;
        this.title = title;
        this.subtitle = subtitle;
        this.list = list;
        this.links = links;
    }
}
