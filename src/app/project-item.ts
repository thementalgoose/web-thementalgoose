export class ProjectItem { 
    public title: string;
    public description: string;

    constructor(title: string, description: string) { 
        this.title = title;
        this.description = description;
    }
}

export const allProjects = [
    new ProjectItem(
        "Flashback",
        "Flashback project!"
    )
];