<article id="career" class="parent">
    <article class="child fadeIn fadeOut">
    
<h1>Career Experience</h1>
<div id="timeline">
    <div ng-repeat="y in content.career" emit-last-repeater-element-timeline>
        <a ng-href={{y.link}} class="timeline-link" target="_blank">
            <h3>{{y.title}}</h3>
            <h4>{{y.company}}</h4>
            <p>{{y.description}}</p>
        </a>
    </div>
</div>

</article>
</article>