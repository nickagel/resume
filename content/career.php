<article id="career" class="parent">
    <article class="child fadeIn fadeOut">
    
<h1>Career Experience</h1>
<div id="timeline">
    <div ng-repeat="y in content.career"  emit-last-repeater-element-timeline refresh-all>
        <h3>{{y.title}}</h3>
        <h4>{{y.company}}</h4>
        <p>{{y.description}}</p>
        <h5>{{y.date}}</h5>
    </div>
</div>

</article>
</article>