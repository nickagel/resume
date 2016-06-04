<h1>Portfolio</h1>
<ol>
  <li ng-repeat="x in content.portfolio">
    <a href={{x.link}}><img style='background-color:{{x.backgroundcolor}}' ng-src='./images/portfolio/{{x.image}}'><h6>{{x.title}}</h6></a>
  </li>
</ol>