<article id="skills" class="parent">
<article class="child">

<h1 class="fadeIn fadeOut">Technical Skills</h1>
<ul class="skills empty">
    <li ng-repeat="s in content.skills">
        <figure class="chart" data-percent="{{s.percentage}}">
            <figcaption>{{s.title}}</figcaption>
            <img class="{{s.type}} size fadeIn fadeOut" ng-src="./images/skills/{{s.image}}">
            <svg width="200" height="200">
                <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
            </svg>
        </figure>
        <h5 class="skill fadeIn fadeOut">
            {{s.title}}
        </h5>
    </li>
</ul>

</article>
</article>