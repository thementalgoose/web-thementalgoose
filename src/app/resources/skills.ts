export const allSkills: () => SkillModel[] = () => [
    SkillModel.large()
        .withName("Android")
        .withSubtitle("Hobby since 2014, professionally since 2017")
        .withBackgroundColor("/assets/img/icon-android-white.png", "#74f294")
        .withDescription(`
            <p>
                <a class="skill-click" href="https://realm.io/">Realm</a>, 
                <a class="skill-click" href="https://square.github.io/retrofit/">Retrofit</a> (+ coroutines), 
                <a class="skill-click" href="https://github.com/bumptech/glide">Glide</a>, 
                <a class="skill-click" href="https://developer.android.com/topic/libraries/architecture/room">ROOM</a>, 
                <a class="skill-click" href="https://firebase.google.com/docs/firestore/">Firebase (Firestore)</a>, 
                <a class="skill-click" href="https://academy.realm.io/posts/eric-maxwell-mvc-mvp-and-mvvm-on-android/">MVVM and MVC architecture + Repo pattern</a>, 
                activity / fragment lifecycles, 
                espresso, mockito,
                kotlin extensions, etc...
            </p>
        `),
    SkillModel.large()
        .withName("Kotlin")
        .withSubtitle("Since Google I/O 2017")
        .withBackgroundColor("/assets/img/icon-kotlin-white.png", "#8774f2")
        .withDescription(`
            <p>
                Extensions, null safety, coroutines, android kotlin extensions, etc...  
            </p>
        `),
        
    SkillModel.regular()
        .withName("Java")
        .withSubtitle("In some form since 2012")
        .withBackgroundColor("/assets/img/icon-java-white.png", "#f2c474")
        .withDescription(`
            <p>
                Android, 
                JSP, 
                Servlets, 
                Crypto, 
                JARs, 
                Coroutines, 
                <a class="skill-click" href="https://developer.android.com/topic/libraries/data-binding/">Data binding</a>, 
                <a class="skill-click" href="https://github.com/ReactiveX/RxJava">RxJava3</a>,
                LocalDates, even Java3D back in the day</p>
            </p>
        `),
    SkillModel.regular()
        .withName("Spring IO")
        .withSubtitle("Uni projects, 2020 onwards")
        .withBackgroundColor("/assets/img/icon-spring-white.png", "#509762")
        .withDescription(`
            <p>
                Complete Web Apps and RESTful APIs using Gradle, 
                Hibernate, 
                MongoDB
                Cucumber, 
                Travis CI,
                Jenkins CI
            </p>
        `),
    SkillModel.regular()
        .withName("Firebase")
        .withSubtitle("2018 -> 2020")
        .withBackgroundColor("/assets/img/icon-firebase-white.png", "#f2c474")
        .withDescription(`
            <p>
                Multiple projects using <a class="skill-click" href="https://firebase.google.com/docs/firestore/">Firestore</a> + Functions + Hosting in Android / iOS / Web software packages
            </p>
        `),
    SkillModel.regular()
        .withName("Web")
        .withSubtitle("Freelance web projects until 2019")
        .withBackgroundColor("/assets/img/icon-mean-white.png", "#c474f2")
        .withDescription(`
            <p>
                Angular 6+ websites,
                NodeJS,
                ExpressJS,
                Typescript,
                AWS lambda
            </p>
        `),






    SkillModel.regular()
        .withName("Flutter")
        .withSubtitle("POC apps in 2019 and 2020")
        .withBackgroundColor("/assets/img/icon-flutter-white.png", "#74a4f2")
        .withDescription(`
            <p>
                Material + Cupertino Widgets, 
                SQFLite, 
                Jaguar ORM,
                Firebase integration,
            </p>
        `),
    SkillModel.regular()
        .withName("Swift")
        .withSubtitle("2 iOS apps in 2019")
        .withBackgroundColor("/assets/img/icon-swift-white.png", "#f2749e")
        .withDescription(`
            <p>
                Swift 4.2 -> 5.0, 
                Cocoa pods, 
                Storyboards with Autolayout + constraints, 
                MVVM architecture with <a class="skill-click" href="https://github.com/ReactiveX/RxSwift">RxSwift</a> + <a href="https://github.com/RxSwiftCommunity/RxDataSources">RxDataSources</a>
            </p>
        `),
    SkillModel.regular()
        .withName("Infrastructure")
        .withSubtitle("2018 onwards")
        .withBackgroundColor("/assets/img/icon-azure-white.png", "#44e2ec")
        .withDescription(`
            <p>
                Firebase (Functions, Hosting, Storage, Firestore)
            </p>
            <p>
                AWS (Lambda, Dynamo, Cognito, ELB, S3)
            </p>
        `),
    SkillModel.regular()
        .withName("Dev Ops")
        .withSubtitle("Everything in git!")
        .withBackgroundColor("/assets/img/icon-git-white.png", "#7692FF")
        .withDescription(`
            <p>
                Git, SVN, Git flow, 
                Travis CI github integration
                Bitbucket pipelines,
                Jenkins CI, 
                App Center mobile app distribution
                (including <a href="https://travis-ci.org/thementalgoose/jsf-website">this project!</a>)
            </p>
        `)
];


export class SkillModel { 
    public name: string;
    public imageUrl: string;
    public backgroundColor: string;
    public subtitle: string;
    public description: string;

    public type: 'large' | 'regular';

    public static large(): SkillModel { 
        let model =  new SkillModel(); 
        model.type = 'large';
        return model;
    }

    public static regular(): SkillModel { 
        let model =  new SkillModel(); 
        model.type = 'regular';
        return model;
    }

    public withName(name: string): SkillModel { 
        this.name = name;
        return this;
    }

    public withBackgroundColor(imageUrl: string, backgroundColor: string): SkillModel { 
        this.imageUrl = imageUrl;
        this.backgroundColor = backgroundColor;
        return this;
    }

    public withSubtitle(subtitle: string): SkillModel { 
        this.subtitle = subtitle;
        return this;
    }

    public withDescription(description: string): SkillModel { 
        this.description = description;
        return this;
    }
}