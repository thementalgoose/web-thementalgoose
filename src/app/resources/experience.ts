export const allExperience: () => ExperienceModel[] = () => {
    return [
        ExperienceModel.work()
            .withName("Mobile Software Engineer")
            .withPlace("Capital One", "https://www.capitalone.co.uk/")
            .withDescription(`
                Developing native android applications and APIs to integrate into cloud solutions
                <br/><br/>
                Gaining experience on how large scale production apps are managed and deployed
            `)
            .withDates("Jan 2020", "Current"),

        ExperienceModel.work()
            .withName("Software Developer")
            .withPlace("Nuom Agency (formerly Roller Agency)", "https://nuom.co.uk")
            .withDescription(`
                <p>General Software Developer for Nuom Agency, contributring to a variety of different apps and technologies</p>
                <p>Apps built fully in Kotlin, using Repo + MVVM architecture / RxJava3 / Databinding. Use Realm + Retrofit + RxJava3 for reactive flow of data throughout apps. Apps built using MVVM + Repo pattern, including continuous deployment pipeline with Bitbucket / AppCenter / Travis CI</p>
                <p>Written Firestore-based web + android + iOS app. Use of firebase functions, auth, hosting, storage, etc.</p>
                <p>Built Android-based SDK to manage backend communication with cloud systems, used to support multiple apps for clients</p>
                <p>Contributor to iOS projects using Swift 4, MVVM architecture / RxSwift / RxDataSources, Web projects using Angular 6 / MEAN stack and integration with Firebase</p>
                <p>Experience with Google Tag Manager and Craft websites</p>
            `)
            .withDates("Oct 2017", "Jan 2020"),

        ExperienceModel.work()
            .withName("Android App Developer")
            .withPlace("Nuom Agency (formerly Roller Agency)", "https://nuom.co.uk")
            .withDescription(`
                <p>Experience in projects using Realm, Retrofit, Glide, ROOM, Firebase, LibGDX (mobile game), most of which are deployed on the app store.</p>
                <p>Experience in MVC and MVVM architectures</p>
                <p>5+ apps developed during my time, most of which are on the play store</p>
                <p>Co-authored, and contributor to design and implementation of large scale Android-based "SDK" project, whcih streamlined custom app development by handling backend services and communication. Offered guidance and support on a consultancy basis</p>
            `)
            .withDates("Jun 2016", "Jun 2017"),

        ExperienceModel.education()
            .withName("Computer Science Degree")
            .withPlace("University of Leicester", "https://le.ac.uk")
            .withDescription(`
                <p>BSc Degree, <strong>1st Class</strong> (86% overall, with year in industry)</p>  
                <p>Some of the modules taken:</p>
                
                    <ul>
                    <li>Program Design</li>
                    <li>Requirements Engineering</li>
                    <li>Computer Systems</li>
                    <li>Logic and Problem Solving</li>
                    <li>Automata, Language and Computation</li>
                    <li>Operating Systems, Networks and Distributed Systems</li>
                    <li>Functional Programming (haskell)</li>
                    <li>Software Engineering</li>
                    <li>Computational Intelligence for Software Engineering</li>
                    <li>Web Technologies</li>
                    <li>Cryptography and Intenet Security</li>
                    </ul>
                
                <p>Full transcript available on request</p>
            `)
            .withDates("Sept 2014", "Aug 2018"),

        ExperienceModel.education()
            .withName("A Levels")
            .withPlace("Lutterworth College", "http://www.lutterworthcollege.org.uk/")
            .withDescription(`
                <ul>
                    <li>Mathematics (A2): <strong>A*</strong></li>
                    <li>Physics (A2): <strong>A</strong></li>
                    <li>Computing (A2): <strong>A</strong></li>
                    <li>Chemistry (AS): <strong>A</strong></li>
                </ul>
            `)
            .withDates("Sept 2012", "Sept 2014"),
    ];
}




export class ExperienceModel { 
    public name: string;
    public place: string;
    public placeUrl: string;
    public description: string;
    public startDate: string;
    public endDate: string;

    public type: 'education' | 'work';

    public static education(): ExperienceModel { 
        let model = new ExperienceModel();
        model.type = 'education';
        return model;
    }

    public static work(): ExperienceModel { 
        let model = new ExperienceModel();
        model.type = 'work';
        return model;
    }

    public withName(name: string): ExperienceModel {
        this.name = name;
        return this;
    }

    public withPlace(place: string, placeUrl: string): ExperienceModel {
        this.place = place;
        this.placeUrl = placeUrl;
        return this;
    }

    public withDescription(description: string): ExperienceModel {
        this.description = description;
        return this;
    }

    public withDates(startDate: string, endDate: string): ExperienceModel {
        this.startDate = startDate;
        this.endDate = endDate;
        return this;
    }
}