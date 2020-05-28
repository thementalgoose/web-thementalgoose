export const allProjects: () => ProjectModel[] = () => [
    ProjectModel.item()
        .withName("Flashback")
        .withSubtitle("Formula 1 statistics app")
        .withCategory("Android App")
        .withBackgroundImage("/assets/img/gal-app-flashback.png")
        .withButton({
            label: "App Store",
            url: "https://play.google.com/store/apps/details?id=tmg.flashback"
        }),

    ProjectModel.item()
        .withName("Hour Glass")
        .withSubtitle("Calendar countdown app")
        .withCategory("Android App")
        .withBackgroundImage("/assets/img/gal-app-hourglass.png")
        .withButton({
            label: "App Store",
            url: "https://play.google.com/store/apps/details?id=tmg.hourglass"
        }),

    ProjectModel.item()
        .withName("Transmission")
        .withSubtitle("Driving revision app")
        .withCategory("Android App")
        .withBackgroundImage("/assets/img/gal-app-transmission.png")
        .withButton({
            label: "App store",
            url: "https://play.google.com/store/apps/details?id=tmg.drivingtutor"
        }),

    ProjectModel.item()
        .withName("CommuniMates")
        .withSubtitle("Machine Learing Advice Platform")
        .withCategory("Android App")
        .withBackgroundImage("/assets/img/gal-app-communimates.png")
        .withButton({
            label: "Video",
            url: "https://www.youtube.com/watch?v=bGU1Q54qHow"
        })
        .withButton({
            label: "Hack24",
            url: "https://hack24.co.uk/"
        }),

    ProjectModel.item()
        .withName("Am I Wrong")
        .withSubtitle("Moral Ambiguity App")
        .withCategory("Android App")
        .withBackgroundImage("/assets/img/gal-app-amiwrong.png")
        .withButton({
            label: "Video",
            url: "https://www.youtube.com/watch?v=yOQyyWd_l88"
        })
        .withButton({
            label: "App store",
            url: "https://play.google.com/store/apps/details?id=studio.roboto.hack24"
        })
        .withButton({
            label: "Hack24",
            url: "https://hack24.co.uk/"
        }),

    ProjectModel.item()
        .withName("J21 Driving School")
        .withSubtitle("Business website for J21 Driving School")
        .withCategory("Website")
        .withBackgroundImage("/assets/img/gal-web-j21.png")
        .withButton({
            label: "Website",
            url: "https://j21drivingschool.co.uk"
        }),

    ProjectModel.item()
        .withName("CMAI")
        .withSubtitle("CyanogenMod App Installer")
        .withCategory("Android App")
        .withBackgroundImage("/assets/img/gal-app-cmai.png")
        .withButton({
            label: "XDA",
            url: "https://forum.xda-developers.com/android/apps-games/app-cm-app-installer-t2959922"
        }),

    ProjectModel.item()
        .withName("This Website")
        .withSubtitle("The many iterations of this website")
        .withCategory("Website")
        .withBackgroundImage("/assets/img/gal-web-old.png")
        .withButton({
            label: "Old version",
            url: "/assets/old/"
        }),

    ProjectModel.item()
        .withName("Retro games")
        .withSubtitle("Snake and Space Invaders")
        .withCategory("Java apps")
        .withBackgroundImage("/assets/img/gal-snake.png")
        .withButton({
            label: "Snake",
            url: "https://github.com/thementalgoose/java-snake"
        })
        .withButton({
            label: "Space Invaders",
            url: "https://github.com/thementalgoose/java-space-invaders"
        }),

    ProjectModel.item()
        .withName("Uni")
        .withSubtitle("Dissertation project")
        .withCategory("Android App + Website")
        .withBackgroundImage("/assets/img/gal-app-schedule.png")
];


export class ProjectModel { 
    public name: string;
    public subtitle: string;
    public backgroundImage: string;
    public buttons: {
        label: string;
        url: string;
    }[];
    public category: string;

    constructor() { 
        this.buttons = [];
    }

    public static item(): ProjectModel {
        return new ProjectModel();
    }

    public withName(name: string): ProjectModel { 
        this.name = name;
        return this;
    }

    public withSubtitle(subtitle: string): ProjectModel { 
        this.subtitle = subtitle;
        return this;
    }

    public withBackgroundImage(backgroundImage: string): ProjectModel { 
        this.backgroundImage = backgroundImage;
        return this;
    }

    public withCategory(category: string): ProjectModel { 
        this.category = category;
        return this;
    }

    public withButton(item: {label: string, url: string}): ProjectModel { 
        this.buttons.push({
            label: item.label,
            url: item.url
        });
        return this;
    }

}