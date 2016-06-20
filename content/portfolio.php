<article id="portfolio" class="parent">
    <arcticle class="child fadeIn fadeOut">
<h1>Portfolio</h1>
<ol>
  <li ng-repeat="x in content.portfolio">
    <a href={{x.link}} id="{{x.type}}" target="{{x.target}}"><div class="portfolio-sprite {{x.type}}" style='background-color:{{x.backgroundcolor}}'></div><h6>{{x.title}}</h6></a>
  </li>
</ol>

</article>
</article>