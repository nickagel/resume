<h1>Career Experience</h1>
<div id="timeline">
    <div ng-repeat="y in content.career"  emit-last-repeater-element-timeline>
        <h3>{{y.company}}</h3>
        <h4>{{y.title}}</h4>
        <p>{{y.description}}</p>
        <h5>{{y.date}}</h5>
    </div>
</div>

