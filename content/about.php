<h1>About Me</h1>

<span ng-repeat="a in content.about">
    <img ng-src="./images/about/{{a.image}}">
    <h3>{{a.name}}<h3>
    <h4><span class="blockWord">{{a.jobTitle1}}</span> & <span class="blockWord">{{a.jobTitle2}}</span></h4>
    <p>
        {{a.paragraph1}}
    </p>
    <p>
        {{a.paragraph2}}
    </p>
    <a class="button" href="{{a.link}}">DOWNLOADABLE RESUME</a>
</span>